<template>
    <div class="addspecialfightingtalents">
        <h1 class="title m-t-5 "> Wähle die Spezial Kampftalente deines Held.</h1>
        <div class="columns">
            <div class="column is-narrow">
                <select class="select" v-model="selected" v-on:change="selectspecialfightingtalent">
                    <option v-for="specialfightingtalent in specialfightingtalents" v-bind:value="specialfightingtalent.id">
                        {{specialfightingtalent.name }}
                    </option>
                </select>
            </div>
            <div class="column is-narrow" v-if="levels != null">
                <p class="is-pulled-left">Level</p>
                <select class="select is-pulled-left" v-model="selectedLevel">
                    <option v-for="n in levels">
                        {{n}}
                    </option>
                </select>
            </div>
            <div class="column is-narrow">
                <p class="is-pulled-left">Typ:</p>
                <input class="input is-pulled-left is-inline" v-model="type"/>
            </div>
        
        </div>
        <button class="button" v-on:click="pick()">wählen</button>
        
        
        <div v-for="pickedspecialfightingtalent in pickedspecialfightingtalents">
            <div class="box m-t-5">
                
                <P>{{ pickedspecialfightingtalent.name}}
                    <span v-if="pickedspecialfightingtalent.level">, Level: {{ pickedspecialfightingtalent.level}}</span>
                </P>
                <P v-if="pickedspecialfightingtalent.type">Type: {{ pickedspecialfightingtalent.type}}</P>
                
                <button class="button" v-on:click="unpick(pickedspecialfightingtalent.id)">Löschen</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        
        props: ['pickedspecialfightingtalents', 'character'],
        
        data(){
            return {
                specialfightingtalents: [],
                selected: 1,
                selectedLevel: '',
                levels: null,
                type: ''
            }
        },
        methods: {
            selectspecialfightingtalent(){
                this.levels = this.specialfightingtalents[this.selected - 1].level
                this.type = ''
            },
            pick(){
                if((this.pickedspecialfightingtalents.find(specialfightingtalent => specialfightingtalent.id == this.selected)) == null) {
                    let picked = {
                        id: this.selected,
                        name: this.specialfightingtalents[this.selected - 1].name,
                        level: this.selectedLevel,
                        type: this.type
                    }
                    this.pickedspecialfightingtalents.unshift(picked)
                }
            },
            unpick(id){
                let index = this.pickedspecialfightingtalents.findIndex(specialfightingtalent => specialfightingtalent.id == id);
                this.pickedspecialfightingtalents.splice(index, 1)
            },
        },
        mounted(){
            axios.get('/api/Specialfightingtalent').then(response => {
                this.specialfightingtalents = response.data
            })
            if(Object.keys(this.character).length !== 0) {
                this.character.specialfightingtalents.forEach(specialfightingtalent => {
                    this.pickedspecialfightingtalents.push({
                        id: specialfightingtalent.id,
                        name: specialfightingtalent.name,
                        level: specialfightingtalent.pivot.value,
                        type: specialfightingtalent.pivot.data
                    })
                })
            }
        }
    }
</script>
