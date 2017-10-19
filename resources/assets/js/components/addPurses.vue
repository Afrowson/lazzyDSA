<template>
    <div>
        <h1 class="title is-3">Verwalte die Geldbeutel deines Helden</h1>
        <div class="is-clearfix">
    
            <div v-show="pickedpurses != false" class="is-pulled-left select">
                <select v-model="selected" v-on:change="selectPurse(selected)">
                    <option v-for="purse in pickedpurses" v-bind:value="purse.id">
                        {{purse.name}}
                    </option>
                </select>
            </div>
            <div class="is-pulled-left m-l-25">
                <input class="input" v-model="name"/>
            </div>
            <button class="is-pulled-left button m-l-5" v-on:click="addPurse()">Hinzufügen</button>
        </div>
        <div v-show="pickedpurses != []">
            <div class="is-clearfix m-t-30">
                <div class="is-pulled-left m-l-25" style="max-width:250px">
                    Dukaten:
                    <input class="input is-large" v-model="selectedpurse.dukaten"/>
                </div>
                <div class="is-pulled-left m-l-25" style="max-width:250px">
                    Silbertaler:
                    <input class="input is-large" v-model="selectedpurse.silber"/>
                </div>
                <div class="is-pulled-left m-l-25" style="max-width:250px">
                    Heller:
                    <input class="input is-large" v-model="selectedpurse.heller"/>
                </div>
                <div class="is-pulled-left m-l-25" style="max-width:250px">
                    Kreuzer:
                    <input class="input is-large" v-model="selectedpurse.kreuzer"/>
                </div>
            </div>
            <button class="button" v-on:click="updatePurse()">Aktualisieren</button>
            <button class="button" v-on:click="removePurse()">Löschen</button>
        </div>
    </div>
</template>

<script>
    export default{
        
        props: ['character', 'pickedpurses'],
        
        data(){
            return {
                selectedpurse: {
                    dukaten: 0,
                    silber: 0,
                    heller: 0,
                    kruezer: 0,
                },
                selected: 0,
                name: '',
            }
        },
        
        methods: {
            
            addPurse(){
                let purse = {
                    name: this.name,
                    character_id: this.character.id,
                    dukaten: 0,
                    silber: 0,
                    heller: 0,
                    kreuzer: 0,
                }
                axios.post('/api/Character/' + this.character.id + '/addpurse', purse).then(response => {
                    purse.id = response.data
                    this.pickedpurses.unshift(purse)
                    this.selectPurse(purse.id)
                })
            },
            removePurse(){
                axios.post('/api/Character/' + this.character.id + '/removepurse', {'id': this.selected}).then(result => {
                    console.log(result.data)
                    let index = this.pickedpurses.findIndex(purse => purse.id == this.selected);
                    this.pickedpurses.splice(index, 1)
                    this.selectPurse(this.pickedpurses[0].id)
                })
            },
            selectPurse(id){
                this.selected = id
                this.selectedpurse = this.pickedpurses.find(purse => purse.id === id)
                
            },
            updatePurse(){
                axios.post('/api/Character/' + this.character.id + '/updatepurse', this.selectedpurse).then(result => {
                    console.log(result.data)
                    this.pickedpurses[1] = this.selectedpurse
                })
                
            },
            getCharacterPurses(){
                let last
                this.character.purses.forEach(purse => {
                    this.pickedpurses.push(purse)
                    last = purse.id
                })
                this.selectPurse(last)
            },
        },
        created(){
            if(this.character.purses != null) {
                this.getCharacterPurses()
            }
        }
        
    }
</script>