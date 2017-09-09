<template>
    <div class="addspecialtalents">
        <h1 class="title m-t-5 "> Wähle die Spezialtalente deines Held.</h1>
        <div class="columns">
            <div class="column is-narrow">
                <select class="select" v-model="selected" v-on:change="selectspecialtalent">
                    <option v-for="specialtalent in specialtalents" v-bind:value="specialtalent.id">
                        {{specialtalent.name }}
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
        
        
        <div v-for="pickedspecialtalent in pickedspecialtalents">
            <div class="box m-t-5">
                
                <P>{{ pickedspecialtalent.name}}
                    <span v-if="pickedspecialtalent.level">, Level: {{ pickedspecialtalent.level}}</span>
                </P>
                <P v-if="pickedspecialtalent.type">Type: {{ pickedspecialtalent.type}}</P>
                
                <button class="button" v-on:click="unpick(pickedspecialtalent.id)">Löschen</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        
        props: ['pickedspecialtalents', 'character'],
        
        data(){
            return {
                specialtalents: [],
                selected: 1,
                selectedLevel: '',
                levels: null,
                type: ''
            }
        },
        methods: {
            selectspecialtalent(){
                this.levels = this.specialtalents[this.selected - 1].level
                this.type = ''
            },
            pick(){
                if((this.pickedspecialtalents.find(specialtalent => specialtalent.id == this.selected)) == null) {
                    let picked = {
                        id: this.selected,
                        name: this.specialtalents[this.selected - 1].name,
                        level: this.selectedLevel,
                        type: this.type
                    }
                    this.pickedspecialtalents.unshift(picked)
                }
            },
            unpick(id){
                let index = this.pickedspecialtalents.findIndex(specialtalent => specialtalent.id == id);
                this.pickedspecialtalents.splice(index, 1)
            },
        },
        mounted(){
            axios.get('/api/Specialtalent').then(response => {
                this.specialtalents = response.data
            })
            if(Object.keys(this.character).length !== 0) {
                this.character.specialtalents.forEach(specialtalent => {
                    this.pickedspecialtalents.push({
                        id: specialtalent.id,
                        name: specialtalent.name,
                        level: specialtalent.pivot.value,
                        type: specialtalent.pivot.data
                    })
                })
            }
        }
    }
</script>
