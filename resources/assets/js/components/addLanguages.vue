<template>
    <div class="addlanguages">
        <h1 class="title m-t-5 "> Wähle die Sprachen deines Held.</h1>
        <label>
            <select class="select" v-model="selected">
                <option v-for="language in languages" v-bind:value="language.id">
                    {{language.name }}
                </option>
            </select>
            <select class="select" v-model="selectedLevel">
                <option v-for="level in levels">
                    {{level}}
                </option>
            </select>
            <button class="button" v-on:click="pick()">wählen</button>
        </label>
        
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
                selected: '',
                levels: [1, 2, 3, 4],
                selectedLevel: 1,
            }
        },
        methods: {
            pick(){
                let picked = {
                    id: this.selected,
                    name: this.languages[this.selected - 1].name,
                    level: this.selectedLevel
                }
                this.pickedlanguages.push(picked)
            },
            unpick(id){
                this.pickedlanguages.pop(id)
            },
            update(){
            }
        },
        mounted(){
            axios.get('/api/Language').then(response => {
                this.languages = response.data
            });
        }
    }
</script>
