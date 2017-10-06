<template>
    <div class="addhandicap">
        <h1 class="title m-t-5 "> Wähle die Nachteile deines Held.</h1>
        <div class="is-pulled-left select">
            <select v-model="selected" v-on:change="selecthandicap">
                <option v-for="handicap in handicap" v-bind:value="handicap.id">
                    {{handicap.name }}
                </option>
            </select>
        </div>
        <div class="is-pulled-left" v-if="levels != null">
            <p class="is-pulled-left">Level</p>
            <div class="is-pulled-left select">
                <select v-model="selectedLevel">
                    <option v-for="n in levels">
                        {{n}}
                    </option>
                </select>
            </div>
        </div>
        <div class="is-pulled-left is-clearfix">
            <p class="is-pulled-left">Typ:</p>
            <div class="is-pulled-left">
                <input class="input" v-model="type"/>
            </div>
        </div>
    
    
        <button class="button" v-on:click="pick()">wählen</button>
        
        
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
                selectedLevel: '',
                levels: null,
                type: ''
            }
        },
        methods: {
            selecthandicap(){
                this.levels = this.handicap[this.selected - 1].level
                this.type = ''
            },
            pick(){
                if((this.pickedhandicaps.find(handicap => handicap.id == this.selected)) == null) {
                    let picked = {
                        id: this.selected,
                        name: this.handicap[this.selected - 1].name,
                        level: this.selectedLevel,
                        type: this.type
                    }
                    this.pickedhandicaps.unshift(picked)
                }
            },
            unpick(id){
                let index = this.pickedhandicaps.findIndex(handicap => handicap.id == id);
                this.pickedhandicaps.splice(index, 1)
            },
        },
        mounted(){
            axios.get('/api/Handicap').then(response => {
                this.handicap = response.data
            })
            if(Object.keys(this.character).length !== 0) {
                this.character.handicaps.forEach(handicap => {
                    this.pickedhandicaps.push({
                        id: handicap.id,
                        name: handicap.name,
                        level: handicap.pivot.value,
                        type: handicap.pivot.type
                    })
                })
            }
        }
    }
</script>
