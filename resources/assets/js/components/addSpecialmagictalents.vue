<template>
    <div class="addspecialmagictalents">
        <h1 class="title is-4 m-t-15 "> Wähle die Spezialen Magievorteile deines Held.</h1>
        <div class="field has-addons">
            <div class="control">
                <div class="select">
                    <select v-model="selected" v-on:change="selectspecialmagictalent">
                        <option v-for="specialmagictalent in specialmagictalents" v-bind:value="specialmagictalent.id">
                            {{specialmagictalent.name }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="control" v-if="levels !=null">
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
                selectedLevel: '-',
                levels: null,
                type: ''
            }
        },
        methods: {
            selectspecialmagictalent(){
                this.levels = this.specialmagictalents[this.selected - 1].level
                this.type = ''
                this.selectedLevel = '-'
            },
            pick(){
                if((this.pickedspecialmagictalents.find(specialmagictalent => specialmagictalent.id == this.selected)) == null) {
                    let picked = {
                        id: this.selected,
                        name: this.specialmagictalents[this.selected - 1].name,
                        level: this.selectedLevel,
                        type: this.type
                    }
                    axios.post('/api/Character/' + this.character.id + '/addspecialmagictalent', picked).then(response => {
                        console.log(response.data)
                    })
                    this.pickedspecialmagictalents.unshift(picked)
                }
            },
            unpick(id){
                axios.post('/api/Character/' + this.character.id + '/removespecialmagictalent', {'id': id}).then(response => {
                    console.log(response.data)
                })
                let index = this.pickedspecialmagictalents.findIndex(specialmagictalent => specialmagictalent.id == id);
                this.pickedspecialmagictalents.splice(index, 1)
            },
            getCharacterSpecialmagictalents(){
                this.character.specialmagictalents.forEach(specialmagictalent => {
                    this.pickedspecialmagictalents.push({
                        id: specialmagictalent.id,
                        name: specialmagictalent.name,
                        level: specialmagictalent.pivot.value,
                        type: specialmagictalent.pivot.data
                    })
                })
            }
        },
        mounted(){
            axios.get('/api/Specialmagictalent').then(response => {
                this.specialmagictalents = response.data
            })
            if(this.character.specialmagictalents != null)
                this.getCharacterSpecialmagictalents()
        }
    }
</script>
