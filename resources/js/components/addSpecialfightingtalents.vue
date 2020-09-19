<template>
    <div class="addspecialfightingtalents">
        <h1 class="title is-4 m-t-15 "> Wähle die Spezial Kampftalente deines Held.</h1>
        <div class="field has-addons">
            <div class="control">
                <div class="select">
                    <select v-model="selected" v-on:change="selectspecialfightingtalent">
                        <option v-for="specialfightingtalent in specialfightingtalents" v-bind:value="specialfightingtalent.id">
                            {{specialfightingtalent.name }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="control" v-if="levels != null">
                <div class="select">
                    <select v-model="selectedLevel">
                        <option value="-" hidden>Level wählen</option>
                        <option v-for="n in levels">
                            {{n}}
                        </option>
                    </select>
                </div>
            </div>
            <div class="control">
                <input class="input" placeholder="Type" v-model="type"/>
            </div>
        </div>
        <button class="button m-b-15" v-on:click="pick()">Bestätigen</button>
        
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
                selectedLevel: '-',
                levels: null,
                type: ''
            }
        },
        methods: {
            selectspecialfightingtalent(){
                this.levels = this.specialfightingtalents[this.selected - 1].level
                this.type = ''
                this.selectedLevel = '-'
            },
            pick(){
                if((this.pickedspecialfightingtalents.find(specialfightingtalent => specialfightingtalent.id == this.selected)) == null) {
                    let picked = {
                        id: this.selected,
                        name: this.specialfightingtalents[this.selected - 1].name,
                        level: this.selectedLevel,
                        type: this.type
                    }
                    axios.post('/api/Character/' + this.character.id + '/addspecialfightingtalent', picked).then(response => {
                        console.log(response.data)
                    })
                    this.pickedspecialfightingtalents.unshift(picked)
                }
            },
            unpick(id){
                axios.post('/api/Character/' + this.character.id + '/removespecialfightingtalent', {'id': id}).then(response => {
                    console.log(response.data)
                })
                let index = this.pickedspecialfightingtalents.findIndex(specialfightingtalent => specialfightingtalent.id == id);
                this.pickedspecialfightingtalents.splice(index, 1)
            },
            getCharacterSpecialfightingtalents(){
                this.character.specialfightingtalents.forEach(specialfightingtalent => {
                    this.pickedspecialfightingtalents.push({
                        id: specialfightingtalent.id,
                        name: specialfightingtalent.name,
                        level: specialfightingtalent.pivot.value,
                        type: specialfightingtalent.pivot.data
                    })
                })
            }
        },
        mounted(){
            axios.get('/api/Specialfightingtalent').then(response => {
                this.specialfightingtalents = response.data
            })
            if(this.character.specialfightingtalents != null)
                this.getCharacterSpecialfightingtalents()
        }
    }
</script>
