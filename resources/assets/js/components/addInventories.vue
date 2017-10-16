<template>
    <div class="addInventories">
        <h3 class="title is-3">Verwalte die Inventare deines Helden</h3>
        <div class="is-clearfix">
            <div v-show="this.pickedinventories != false" class="is-pulled-left select">
                <select v-model="selected" v-on:change="selectInventory(selected)">
                    <option v-for="inventory in pickedinventories" v-bind:value="inventory.id">
                        {{inventory.name}}
                    </option>
                </select>
            </div>
            <div class="is-pulled-left m-l-25">
                <input class="input" v-model="name"/>
            </div>
            <button class="is-pulled-left button m-l-5" v-on:click="addInventory()">Hinzufügen</button>
        </div>
    
        <div class="columns is-multiline  m-t-15 m-l-15 ">
            <div class="column is-narrow box m-r-5" v-for="item in selecteditems" v-on:click="editItem(item)">
                <h1 class="title is-5">{{item.name}}&nbsp;x&nbsp;{{item.pivot.amount}}</h1>
                <p>Wert: {{item.value}}</p>
                <p>Gewicht: {{item.weight}}</p>
            </div>
        </div>
        <h5 class="title is-5 m-l-10">Gesamtgewicht: {{selectedinventory.weight}}</h5>
        <button class="button" v-on:click="removeInventory">Löschen</button>
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
                togle: 0,
                items: [],
                name: '',
                selected: '',
                selectedinventory: [],
                selecteditems: [],
            }
        },
        
        methods: {
            getItems() {
                axios.get('/api/Item').then(respnse => {
                    this.items = respnse.data
                })
            },
            
            getCharacterInventories() {
                this.character.inventories.forEach(inventory => {
                    this.pickedinventories.push(inventory)
                })
            },
            
            getInventoryItems(){
                this.pickedinventories.forEach(inventory => {
                    
                    axios.get('/api/Inventory/' + inventory.id + '/Items')
                        .then(response => {
                            inventory.items = response.data
                            if(this.selectedinventory != true) {
                                this.selectInventory(inventory.id)
                            }
                        })
                })
            },
    
            selectInventory(id){
                this.selected = id
                this.selectedinventory = this.pickedinventories.find(inventory => inventory.id === id)
                this.selecteditems = this.selectedinventory.items
            },
    
            addInventory(){
                //Inventar erstellen
                let inventory = {
                    character_id: this.character.id,
                    name: this.name,
                    weight: 0
                }
                //Inventory an den server senden
                axios.post('/api/Inventory/create', inventory)
                //dann Inventar hinzufügen + auswählen
                    .then(response => {
                        inventory.id = response.data
                        this.pickedinventories.unshift(inventory)
                        this.name = ''
                        this.selectInventory(inventory.id)
                    })
            },
            removeInventory(){
                //Inventar auf dem server löschen
                axios.post('/api/Inventory/' + this.selectedinventory.id + '/delete').then(response => {
                    // Inventar aus den userdaten löschen.
                    let index = this.pickedinventories.findIndex(inventory => inventory.id === this.selectedinventory.id)
                    this.pickedinventories.splice(index, 1)
                    this.selectInventory(this.pickedinventories[0].id)
                })
            },
            editItem(item){
                this.togle = 1
            }
        },
        created(){
        
        },
        
        mounted(){
            this.getItems()
    
            if(this.character.inventories != null) {
                this.getCharacterInventories()
                this.getInventoryItems()
            }
        }
    }
</script>
