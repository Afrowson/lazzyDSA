<template>
    <div class="addlanguages">
        <h1 class="title m-t-5 "> Wähle die Sprachen deines Held.</h1>
        <div class="select">
            <select v-model="selected">
                <option v-for="language in languages" v-bind:value="language.id">
                    {{language.name }}
                </option>
            </select>
        </div>
        <div class="select">
            <select v-model="selectedLevel">
                <option v-for="level in levels">
                    {{level}}
                </option>
            </select>
        </div>
        <button class="button" v-on:click="pick()">wählen</button>
        
        <div v-for="pickedlanguage in pickedlanguages">
            <div class="box m-t-5">
                
                <P>{{ pickedlanguage.name}}</P>
                <P>ID: {{ pickedlanguage.id}} Level: {{ pickedlanguage.level}}</P>
                
                <button class="button" v-on:click="unpick(pickedlanguage.id)">Löschen</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
    
        props: ['pickedlanguages', 'character'],
    
        data(){
            return {
                languages: [],
                selected: 1,
                levels: [1, 2, 3, 4],
                selectedLevel: 1,
            }
        },
        methods: {
            pick(){
                if((this.pickedlanguages.find(language => language.id == this.selected)) == null) {
                    let picked = {
                        id: this.selected,
                        name: this.languages[this.selected - 1].name,
                        level: this.selectedLevel
                    }
                    this.pickedlanguages.unshift(picked)
                }
            },
            unpick(id){
                let index = this.pickedlanguages.findIndex(language => language.id == id);
                this.pickedlanguages.splice(index, 1)
            }
        },
        mounted(){
            axios.get('/api/Language').then(response => {
                this.languages = response.data
            })
            if(Object.keys(this.character).length !== 0) {
                this.character.languages.forEach(language => {
                    this.pickedlanguages.push({
                        id: language.id,
                        name: language.name,
                        level: language.pivot.value
                    })
                })
            }
        }
    }
</script>
