<template>
    <div class="addInventories">
        <div class="is-clearfix">
            <h3 class="title is-3">Neues Inventar erstellen</h3>
            <input class="input m-l-10" style="max-width: 150px" type="text" v-model="inventorielocation"/>
            <button class="button is-warning" v-on:click="addinventory"> Hinzufügen</button>
        </div>
        
        <div class="is-clearfix">
            <h1 class="title is-4">Inventar zum Bearbeiten auswählen</h1>
            <h5 class="title is-5 is-pulled-left m-r-5">Ort:</h5>
            <div class="select">
                <select v-show="pickedinventories != ''" v-model="selectedinventory" v-on:change="selectinventory">
                <option v-for="inventory in pickedinventories" v-bind:value="inventory">
                    {{inventory.location}}
                </option>
            </select>
            </div>
            <h5 class="title is-5 m-l-10 is-pulled-left">Gewicht: {{selectedinventory.weight}}</h5>
            <button class="button" v-on:click="deleteinventory">Löschen</button>
        </div>
        <div class="is-clearfix m-t-15">
            <div class="columns is-multiline">
                <div class="column is-narrow box m-r-5" v-for="item in selecteditems" v-on:click="edititem(item)">
                    <h1 class="title is-5">{{item.name}}&nbsp;x&nbsp;{{item.pivot.amount}}</h1>
                    <p>Wert: {{item.value}}</p>
                    <p>Gewicht: {{item.weight}}</p>
                </div>
            </div>
        </div>
        <additem :togle="togle">
        </additem>
    
    </div>
</template>

<script>
    import addItem from './addItem.vue'
    export default {
        
        props: ['character', 'pickedinventories'],
    
        components: {
            'additem': addItem
        },
        
        data(){
            return {
                
                items: [],
                inventorielocation: '',
                selectedinventory: '',
                selecteditems: [],
                togle: 0,
            }
        },
        
        methods: {
            getItems() {
                axios.get('/api/Item').then(respnse => {
                    this.items = respnse.data
                })
            },
            
            getCharacterInventories() {
                this.character.inventories.forEach(inventorie => {
                    this.pickedinventories.push(inventorie)
                })
            },
            
            getInventoryItems(){
                this.pickedinventories.forEach(inventory => {
                    
                    axios.get('/api/Inventory/' + inventory.id + '/Items')
                        .then(response => {
                            inventory.items = response.data
                            if(this.selectedinventory === '') {
                                this.selectedinventory = this.pickedinventories[0]
                                this.selectinventory()
                            }
                        })
                })
            },
            
            selectinventory(){
                this.selecteditems = this.selectedinventory.items
            },
            
            addinventory(){
                //Inventar erstellen
                let inventory = {
                    character_id: this.character.id,
                    location: this.inventorielocation,
                    weight: 0
                }
                //Inventory an den server senden
                axios.post('/api/Inventory/store', inventory)
                //dann Inventar hinzufügen + auswählen
                    .then(response => {
                        inventory.id = response.data
                        this.pickedinventories.unshift(inventory)
                        this.inventorielocation = ''
                        this.selectedinventory = this.pickedinventories[0]
                        this.selectinventory()
                    })
            },
            deleteinventory(){
                //Inventar auf dem server löschen
                axios.post('/api/Inventory/' + this.selectedinventory.id + '/delete').then(response => {
                    // Inventar aus den userdaten löschen.
                    let index = this.pickedinventories.findIndex(inventory => inventory.id === this.selectedinventory.id)
                    this.pickedinventories.splice(index, 1)
                    this.selectedinventory = this.pickedinventories[0]
                    this.selectinventory()
                })
                
                
            },
            edititem(item){
                this.togle = 1
    
                console.log(item)
            },
            
            addItem(){
            
            }
        },
        created(){
        
        },
        
        mounted(){
            this.getItems()
            this.getCharacterInventories()
            if(this.pickedinventories != []) {
                console.log(this.pickedinventories)
                this.getInventoryItems()
            }
        }
    }
</script>
