<template>
    <div class="addspecialmagictalents">
        <h1 class="title m-t-5 "> Wähle die Spezialen Magievorteile deines Held.</h1>
        <div class="columns">
            <div class="column is-narrow">
                <select class="select" v-model="selected" v-on:change="selectspecialmagictalent">
                    <option v-for="specialmagictalent in specialmagictalents" v-bind:value="specialmagictalent.id">
                        {{specialmagictalent.name }}
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
        
        
        <div v-for="pickedspecialmagictalent in pickedspecialmagictalents">
            <div class="box m-t-5">
                
                <P>{{ pickedspecialmagictalent.name}}
                    <span v-if="pickedspecialmagictalent.level">, Level: {{ pickedspecialmagictalent.level}}</span>
                </P>
                <P v-if="pickedspecialmagictalent.type">Type: {{ pickedspecialmagictalent.type}}</P>
                
                <button class="button" v-on:click="unpick(pickedspecialmagictalent.id)">Löschen</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        
        props: ['pickedspecialmagictalents', 'character'],
        
        data(){
            return {
                specialmagictalents: [],
                selected: 1,
                selectedLevel: '',
                levels: null,
                type: ''
            }
        },
        methods: {
            selectspecialmagictalent(){
                this.levels = this.specialmagictalents[this.selected - 1].level
                this.type = ''
                console.log(this.levels)
            },
            pick(){
                if((this.pickedspecialmagictalents.find(specialmagictalent => specialmagictalent.id == this.selected)) == null) {
                    let picked = {
                        id: this.selected,
                        name: this.specialmagictalents[this.selected - 1].name,
                        level: this.selectedLevel,
                        type: this.type
                    }
                    this.pickedspecialmagictalents.unshift(picked)
                }
            },
            unpick(id){
                let index = this.pickedspecialmagictalents.findIndex(specialmagictalent => specialmagictalent.id == id);
                console.log(index)
                this.pickedspecialmagictalents.splice(index, 1)
            },
        },
        mounted(){
            axios.get('/api/Specialmagictalent').then(response => {
                this.specialmagictalents = response.data
            })
            if(Object.keys(this.character).length !== 0) {
                this.character.specialmagictalents.forEach(specialmagictalent => {
                    this.pickedspecialmagictalents.push({
                        id: specialmagictalent.id,
                        name: specialmagictalent.name,
                        level: specialmagictalent.pivot.value,
                        type: specialmagictalent.pivot.data
                    })
                })
            }
        }
    }
</script>
