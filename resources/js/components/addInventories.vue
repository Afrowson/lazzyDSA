<template>
    <div class="addInventories">
        <h3 class="title is-4 m-t-15">Verwalte die Inventare deines Helden</h3>
        <div class="field has-addons">
            <div class="control">
                <input class="input" placeholder="Neues Inventar" v-model="name"/>
            </div>
            <div class="control">
                <button class="button" v-on:click="addInventory()">Hinzufügen</button>
            </div>
        </div>
    
        <div class="is-clearfix">
            <div v-show="this.pickedinventories != false" class="select is-large is-pulled-left">
                <select v-model="selected" v-on:change="selectInventory(selected)">
                    <option v-for="inventory in pickedinventories" v-bind:value="inventory.id">
                        {{inventory.name}}
                    </option>
                </select>
            </div>
        
            <p class="title is-6 is-pulled-left m-t-20 m-l-10">Gesamtgewicht:&nbsp;{{selectedinventory.weight}}&nbsp;Stein</p>
        </div>
        <div class="columns is-multiline  m-t-15 m-l-15 ">
            <div class="column is-narrow box m-r-10" style="min-width: 300px"
                v-for="item in selecteditems">
                <div v-on:click="editItem(item)">
                    <h4 class="title is-4">{{item.name}}&nbsp;x&nbsp;{{item.amount}}</h4>
                    <p>Wert: {{item.value}} Silber | {{item.value * item.amount}} Silber</p>
                    <p>Gewicht: {{item.weight}} Stein| {{item.weight * item.amount}} Stein</p>
                    <h5 class="title is-5 is-marginless">Notes:</h5>
                    <p>{{item.notes}}</p>
                </div>
                <button class="button" v-on:click="removeItem(item.id)">Entfernen</button>
            </div>
            <div class="column is-narrow box m-r-10" style="min-width: 300px"
                v-show="this.pickedinventories != false"
                v-on:click="addItem">
                <div class="m-t-15 m-l-15">
                    <h1 class="title is-4">Neues Item</h1>
                    <h1 class="title is-4">Anlegen</h1>
                </div>
            </div>
        </div>
    
    
        <button class="button" v-on:click="removeInventory">Löschen</button>
        <additem :item="selecteditem" :items="items" :togle="togle" v-on:close="togle=0" v-on:update="updateItem">
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
                selecteditem: '',
            }
        },
        
        methods: {
//@todo use gameitems from Server and refacotor Code, than reinclude this.
//            getItems() {
//                axios.get('/api/Item').then(respnse => {
//                    this.items = respnse.data
//                })
//            },
            
            getCharacterInventories() {
                this.character.inventories.forEach(inventory => {
                    this.pickedinventories.push(inventory)
                })
            },
    
            getGameItems(){
                this.pickedinventories.forEach(inventory => {
    
                    axios.get('/api/Inventory/' + inventory.id + '/items')
                        .then(response => {
                            inventory.items = response.data
    
                            inventory.items.forEach(gameitem => {
                                let item = this.items.find(item => item.id == gameitem.item_id)
        
                                gameitem.name = item.name,
                                    gameitem.value = item.value,
                                    gameitem.weight = item.weight,
                                    gameitem.description = item.description
                            })
                            this.selectInventory(inventory.id)
                        })
                })
            },
    
            selectInventory(id){
                this.selected = id
                this.selectedinventory = this.pickedinventories.find(inventory => inventory.id === id)
                this.selecteditems = this.selectedinventory.items
                this.calculateWeight()
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
                this.selecteditem = item
                this.togle = 1
            },
            updateItem(updated_item){
                this.togle = 0
                this.selecteditem.item_id = updated_item.item_id
                this.selecteditem.name = updated_item.name
                this.selecteditem.description = updated_item.description
                this.selecteditem.value = updated_item.value
                this.selecteditem.weight = updated_item.weight
                this.selecteditem.amount = updated_item.amount
                this.selecteditem.notes = updated_item.notes
    
                this.calculateWeight()
                
                if(this.selecteditem.id != undefined) {
                    axios.post('/api/GameItem/' + this.selecteditem.id + '/update', this.selecteditem).then(
                        response => {
                            console.log(response.data)
                        })
                } else {
                    axios.post('/api/GameItem/create', this.selecteditem).then(
                        response => {
                            console.log(response.data)
                            this.selecteditem.id = response.data
                            this.selecteditems.push(this.selecteditem)
                        })
                }
            },
            calculateWeight(){
                let weight = 0
                this.selecteditems.forEach(item => {
                    weight += item.weight * item.amount
                })
                weight = Number(weight.toFixed(5))
                this.selectedinventory.weight = weight
            },
            addItem(){
                this.selecteditem = {
                    item_id: 1,
                    inventory_id: this.selectedinventory.id,
                    name: '',
                    description: '',
                    value: '0',
                    weight: '0',
                    amount: '1',
                    notes: '',
                }
                this.togle = 1
            },
            removeItem(id){
                let index = this.selecteditems.findIndex(item => item.id === id)
                this.selecteditems.splice(index, 1)
                axios.post('/api/GameItem/' + id + '/delete')
                this.calculateWeight()
                
                
            }
        },
        
        mounted(){
            axios.get('/api/Item').then(respnse => {
                this.items = respnse.data
                if(this.character.inventories != null) {
                    this.getCharacterInventories()
                    this.getGameItems()
                }
            })
        }
    }
</script>
