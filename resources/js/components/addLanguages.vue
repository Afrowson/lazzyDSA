<template>
    <div class="addlanguages">
        <h1 class="title is-4 m-t-15 "> Wähle die Sprachen deines Held.</h1>
        <div class="select">
            <select v-model="selected">
                <option value="-" hidden>Sprache wählen</option>
                <option v-for="language in languages" v-bind:value="language.id">
                    {{language.name }}
                </option>
            </select>
        </div>
        <div class="select">
            <select v-model="selectedLevel">
                <option value="-" hidden>Level wählen</option>
                <option v-for="level in levels">
                    Level {{level}}
                </option>
            </select>
        </div>
        <button class="button" v-on:click="pick()">Bestätigen</button>
    
        <div class="m-t-15" v-for="pickedlanguage in pickedlanguages">
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
                selected: '-',
                levels: [1, 2, 3, 4],
                selectedLevel: '-',
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
                    axios.post('/api/Character/' + this.character.id + '/addlanguage', picked).then(response => {
                        console.log(response.data)
                    })
                    this.pickedlanguages.unshift(picked)
                }
            },
            unpick(id){
                console.log(id)
                axios.post('/api/Character/' + this.character.id + '/removelanguage', {'id': id}).then(response => {
                    console.log(response.data)
                })
                let index = this.pickedlanguages.findIndex(language => language.id == id)
                this.pickedlanguages.splice(index, 1)
            },
            getCharacterLanguages() {
                this.character.languages.forEach(language => {
                    this.pickedlanguages.push({
                        id: language.id,
                        name: language.name,
                        level: language.pivot.value
                    })
                })
            },
        },
        mounted(){
            axios.get('/api/Language').then(response => {
                this.languages = response.data
            })
            if(this.character.languages != null)
                this.getCharacterLanguages();
        }
    }
</script>
