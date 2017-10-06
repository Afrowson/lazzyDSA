<template>
    <div class="addspecialmagictalents">
        <h1 class="title m-t-5 "> Wähle die Spezialen Magievorteile deines Held.</h1>
        <div class="is-clearfix">
            <div class="select is-pulled-left">
                <select v-model="selected" v-on:change="selectspecialmagictalent">
                    <option v-for="specialmagictalent in specialmagictalents" v-bind:value="specialmagictalent.id">
                        {{specialmagictalent.name }}
                    </option>
                </select>
            </div>
            <div class="is-pulled-left" v-if="levels != null">
                <p class="is-pulled-left">Level</p>
                <div class="select">
                    <select v-model="selectedLevel">
                        <option v-for="n in levels">
                            {{n}}
                        </option>
                    </select>
                </div>
            </div>
            <div class="is-pulled-left">
                <p class="is-pulled-left">Typ:</p>
                <div class=" is-pulled-left">
                    <input class="input" v-model="type"/>
            </div>
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
