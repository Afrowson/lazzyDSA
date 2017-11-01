<template>
    <div class="addspecialtalents">
        <h1 class="title is-4 m-t-15"> Wähle die Spezialtalente deines Held.</h1>
        <div class="field has-addons">
            <div class="option">
                <div class="select">
                    <select v-model="selected" v-on:change="selectspecialtalent">
                        <option v-for="specialtalent in specialtalents" v-bind:value="specialtalent.id">
                            {{specialtalent.name }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="option" v-if="levels != null">
                <div class="select">
                    <select v-model="selectedLevel">
                        <option value="-" hidden>Level Wählen</option>
                        <option v-for="n in levels">
                            Level {{n}}
                        </option>
                    </select>
                </div>
            </div>
            <div class="control">
                <input class="input" placeholder="Type" v-model="type"/>
            </div>
        </div>
        <button class="button m-b-15" v-on:click="pick()">Bestätigen</button>
        
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
                selectedLevel: '-',
                levels: null,
                type: ''
            }
        },
        methods: {
            selectspecialtalent(){
                this.levels = this.specialtalents[this.selected - 1].level
                this.type = ''
                this.selectedLevel = '-'
            },
            pick(){
                if((this.pickedspecialtalents.find(specialtalent => specialtalent.id == this.selected)) == null) {
                    let picked = {
                        id: this.selected,
                        name: this.specialtalents[this.selected - 1].name,
                        level: this.selectedLevel,
                        type: this.type
                    }
                    axios.post('/api/Character/' + this.character.id + '/addspecialtalent', picked).then(response => {
                        console.log(response.data)
                    })
                    this.pickedspecialtalents.unshift(picked)
                }
            },
            unpick(id){
                axios.post('/api/Character/' + this.character.id + '/removespecialtalent', {'id': id}).then(response => {
                    console.log(response.data)
                })
                let index = this.pickedspecialtalents.findIndex(specialtalent => specialtalent.id == id);
                this.pickedspecialtalents.splice(index, 1)
            },
            getCharacterSpecialtalents(){
                this.character.specialtalents.forEach(specialtalent => {
                    this.pickedspecialtalents.push({
                        id: specialtalent.id,
                        name: specialtalent.name,
                        level: specialtalent.pivot.value,
                        type: specialtalent.pivot.data
                    })
                })
            }
        },
        mounted(){
            axios.get('/api/Specialtalent').then(response => {
                this.specialtalents = response.data
            })
            if(this.character.specialtalents != null) {
                this.getCharacterSpecialtalents()
            }
        }
    }
</script>
