<template>
    <div class="addhandicap">
        <h1 class="title is-4 m-t-15"> Wähle die Nachteile deines Held.</h1>
        <div class="field has-addons">
            <div class="control">
                <div class="select">
                    <select v-model="selected" v-on:change="selecthandicap">
                        <option v-for="handicap in handicap" v-bind:value="handicap.id">
                            {{handicap.name }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="control" v-if="levels != null">
                <div class="select">
                    <select v-model="selectedLevel">
                        <option value="-" selected hidden>Level wählen</option>
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
        
        <div v-for="pickedhandicap in pickedhandicaps">
            <div class="box m-t-5">
                
                <P>{{ pickedhandicap.name}}
                    <span v-if="pickedhandicap.level">, Level: {{ pickedhandicap.level}}</span>
                </P>
                <P v-if="pickedhandicap.type">Type: {{ pickedhandicap.type}}</P>
                
                <button class="button" v-on:click="unpick(pickedhandicap.id)">Löschen</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        
        props: ['pickedhandicaps', 'character'],
        
        data(){
            return {
                handicap: [],
                selected: 1,
                selectedLevel: '-',
                levels: null,
                type: ''
            }
        },
        methods: {
            selecthandicap(){
                this.levels = this.handicap[this.selected - 1].level
                this.type = ''
                this.selectedLevel = '-'
            },
            pick(){
                if((this.pickedhandicaps.find(handicap => handicap.id == this.selected)) == null) {
                    let picked = {
                        id: this.selected,
                        name: this.handicap[this.selected - 1].name,
                        level: this.selectedLevel,
                        type: this.type
                    }
                    axios.post('/api/Character/' + this.character.id + '/addhandicap', picked).then(response => {
                        console.log(response.data)
                    })
                    this.pickedhandicaps.unshift(picked)
                }
            },
            unpick(id){
    
                axios.post('/api/Character/' + this.character.id + '/removehandicap', {'id': id}).then(response => {
                    console.log(response.data)
                })
                let index = this.pickedhandicaps.findIndex(handicap => handicap.id == id);
                this.pickedhandicaps.splice(index, 1)
            },
            getCharacterHandicaps(){
                this.character.handicaps.forEach(handicap => {
                    this.pickedhandicaps.push({
                        id: handicap.id,
                        name: handicap.name,
                        level: handicap.pivot.value,
                        type: handicap.pivot.type
                    })
                })
            }
        },
        mounted(){
            axios.get('/api/Handicap').then(response => {
                this.handicap = response.data
            })
            if(this.character.handicap != null)
                this.getCharacterHandicaps()
        }
    }
</script>
