<template>
    <div class="addarmors">
        <h1 class="title m-t-5 "> Wähle die Rüstungen deines Held.</h1>
        <div class="select">
            <select v-model="selected" v-on:change="selectarmor">
                <option v-for="armor in armors" v-bind:value="armor.id">
                    {{armor.name }}
                </option>
            </select>
        </div>
        <h3 class="title is-4">Modifiziere die gewählte Rüstung</h3>
        <div class="columns">
            <div style="min-width: 190px" class="column ">Name
                <input class="input" v-model="selectedarmor.name">
            </div>
            <div class="column ">Regeln
                <input class="input" v-model="selectedarmor.rules">
            </div>
            <div class="column ">Rüstungswer
                <input class="input" v-model="selectedarmor.RS">
            </div>
            <div class="column ">Belastung
                <input class="input" v-model="selectedarmor.BE">
            </div>
            <div class="column ">Gewicht
                <input class="input" v-model="selectedarmor.weight">
            </div>
        </div>
        
        <button class="button" v-on:click="pick()">wählen</button>
        
        
        <div v-for="pickedarmor in pickedarmors">
            <div class="box m-t-5">
                
                <table class="table is-narrow">
                    <thead>
                    <tr>
                        <th style="min-width: 170px">Name</th>
                        <th>Regeln</th>
                        <th>Rüstungswer</th>
                        <th>Belastung</th>
                        <th>Gewicht</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>{{pickedarmor.name}}</th>
                        <th>{{pickedarmor.rules}}</th>
                        <th>{{pickedarmor.RS}}</th>
                        <th>{{pickedarmor.BE}}</th>
                        <th>{{pickedarmor.weight}}</th>
                    </tr>
                    </tbody>
                
                </table>
                <button class="button" v-on:click="unpick(pickedarmor.id)">Löschen</button>
            </div>
        </div>
    </div>
</template>

<script
>
    export default {
        
        props: ['pickedarmors', 'character'],
        
        data(){
            return {
                armors: [],
                selected: 1,
                selectedarmor: {},
            }
        },
        methods: {
            selectarmor(){
                
                this.selectedarmor = {
                    id: this.armors[this.selected - 1].id,
                    name: this.armors[this.selected - 1].name,
                    rules: this.armors[this.selected - 1].rules,
                    RS: this.armors[this.selected - 1].RS,
                    BE: this.armors[this.selected - 1].BE,
                    weight: this.armors[this.selected - 1].weight,
                }
            },
            
            pick(){
                axios.post('/api/Character/' + this.character.id + '/addarmor', this.selectedarmor).then(result => {
                    console.log(result.data)
                    this.selectedarmor.id = result.data
                    this.pickedarmors.unshift(this.selectedarmor)
                    this.selectedarmor = 1
                    this.selectarmor()
                })
                
            },
            
            unpick(id){
                axios.post('/api/Character/' + this.character.id + '/removearmor', {'id': id}).then(result => {
                    console.log(result.data)
                })
                let index = this.pickedarmors.findIndex(armor => armor.id == id);
                this.pickedarmors.splice(index, 1)
            },
            
            getCharacterWeapons(){
                this.character.armors.forEach(armor => {
                    this.pickedarmors.push({
                        
                        id: armor.id,
                        name: armor.name,
                        rules: armor.rules,
                        RS: armor.RS,
                        BE: armor.BE,
                        weight: armor.weight,
                    })
                })
            }
            
        },
        mounted(){
            
            axios.get('/api/Armor').then(result => {
                this.armors = result.data
                
                this.selectarmor()
            })
            if(this.character.armors != null)
                this.getCharacterWeapons()
            
        }
    }
</script>
