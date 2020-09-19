<template>
    <div class="addbenefices">
    
        <h1 class="title is-4 m-t-15" style="width: 100%"> Wähle die Vorteile deines Held.</h1>
    
        <div class="field has-addons">
            <p class="control">
                <span class="select">
                    <select v-model="selected" v-on:change="selectbenefice">
                        <option v-for="benefice in benefices" v-bind:value="benefice.id">
                            {{benefice.name }}
                        </option>
                    </select>
                </span>
            </p>
        
            <p v-if="levels != null" class="control">
                <span class="select">
                    <select v-model="selectedLevel">
                        <option value="-">Level wählen</option>
                        <option v-for="n in levels">
                            Level {{n}}
                        </option>
                    </select>
                </span>
            </p>
            <p class="control">
                <input class="input" placeholder="Typ" v-model="type"/>
            </p>
        </div>
        <button class="button m-b-15" v-on:click="pick()">Bestätigen</button>
        
        <div v-for="pickedbenefice in pickedbenefices">
            <div class="box m-t-5">
                
                <P>{{ pickedbenefice.name}}
                    <span v-if="pickedbenefice.level">, Level: {{ pickedbenefice.level}}</span>
                </P>
                <P v-if="pickedbenefice.type">Type: {{ pickedbenefice.type}}</P>
                
                <button class="button" v-on:click="unpick(pickedbenefice.id)">Löschen</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        
        props: ['pickedbenefices', 'character'],
        
        data(){
            return {
                benefices: [],
                selected: 1,
                selectedLevel: '-',
                levels: null,
                type: ''
            }
        },
        methods: {
            selectbenefice(){
                this.levels = this.benefices[this.selected - 1].level
                this.type = ''
                this.selectedLevel = '-'
            },
            pick(){
                if((this.pickedbenefices.find(benefice => benefice.id == this.selected)) == null) {
                    let picked = {
                        id: this.selected,
                        name: this.benefices[this.selected - 1].name,
                        level: this.selectedLevel,
                        type: this.type
                    }
                    axios.post('/api/Character/' + this.character.id + '/addbenefice', picked).then(response => {
                        console.log(response.data)
                    })
                    this.pickedbenefices.unshift(picked)
                }
            },
            unpick(id){
                axios.post('/api/Character/' + this.character.id + '/removebenefice', {'id': id}).then(response => {
                    console.log(response.data)
                })
                let index = this.pickedbenefices.findIndex(benefice => benefice.id == id);
                this.pickedbenefices.splice(index, 1)
            },
            getCharacterBenefices() {
                this.character.benefices.forEach(benefice => {
                    this.pickedbenefices.push({
                        id: benefice.id,
                        name: benefice.name,
                        level: benefice.pivot.value,
                        type: benefice.pivot.type
                    })
                })
            },
    
        }, mounted(){
            axios.get('/api/Benefice').then(response => {
                this.benefices = response.data
            })
        
            if(this.character.benefices != null) {
                this.getCharacterBenefices()
            }
        }
    }
</script>
