<template>
    <div class="addshields">
        <h1 class="title m-t-5 "> Wähle Die Schilder deines Held.</h1>
        <div class="select">
            <select v-model="selected" v-on:change="selectshield">
                <option v-for="shield in shields" v-bind:value="shield.id">
                    {{shield.name }}
                </option>
            </select>
        </div>
        <h3 class="title is-4">Modifiziere das gewählte Schild</h3>
        <div class="columns">
            <div style="min-width: 190px" class="column ">Name
                <input class="input" v-model="selectedshield.name">
            </div>
            <div style="min-width: 190px" class="column ">Kampftalent
                <select class="input" v-model="selectedshield.fightingtalent_id">
                    <option v-for="fightingtalent in fightingtalents" v-bind:value="fightingtalent.id">
                        {{fightingtalent.name}}
                    </option>
                </select>
            </div>
            <div class="column ">Eigenschaft
                <select class="input" v-model="selectedshield.skill">
                    <option v-for="skill in character._skills">
                        {{skill}}
                    </option>
                </select>
            </div>
            <div class="column ">Eigenschaft 2
                <select class="input" v-model="selectedshield.skill2">
                    <option v-for="skill in character._skills">
                        {{skill}}
                    </option>
                </select>
            </div>
            <div class="column ">SS
                <input class="input" v-model="selectedshield.SS">
            </div>
            <div class="column ">Dice
                <input class="input" v-model="selectedshield.dice">
            </div>
            <div class="column ">Bonus&nbsp;Schaden
                <input class="input" v-model="selectedshield.bonus_dmg">
            </div>
            <div class="column ">AT&nbsp;Modifikator
                <input class="input" v-model="selectedshield.at_mod">
            </div>
            <div class="column ">PA&nbsp;Modifikator
                <input class="input" v-model="selectedshield.pa_mod">
            </div>
            <div class="column ">Gewicht
                <input class="input" v-model="selectedshield.weight">
            </div>
            <div class="column ">Reichweite
                <select class="input" v-model="selectedshield.reach">
                    <option v-bind:value="1">kurz</option>
                    <option v-bind:value="2">mittel</option>
                    <option v-bind:value="3">lang</option>
                </select>
            </div>
        </div>
        
        <button class="button" v-on:click="pick()">wählen</button>
        
        
        <div v-for="pickedshield in pickedshields">
            <div class="box m-t-5">
                
                <table class="table is-narrow">
                    <thead>
                    <tr>
                        <th style="min-width: 170px">Name</th>
                        <th>Kampftalent</th>
                        <th>Eigenschaft</th>
                        <th>Eigenschaft 2</th>
                        <th>SS</th>
                        <th>Dice</th>
                        <th>Bonus&nbsp;Schaden</th>
                        <th>AT&nbsp;Modifikator</th>
                        <th>PA&nbsp;Modifikator</th>
                        <th>Gewicht</th>
                        <th>Reichweite</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>{{pickedshield.name}}</th>
                        <th v-for="fightingtalent in fightingtalents"
                            v-if="fightingtalent.id==pickedshield.fightingtalent_id">
                            {{fightingtalent.name}}
                        </th>
                        <th>{{pickedshield.skill}}</th>
                        <th>{{pickedshield.skill_2}}</th>
                        <th>{{pickedshield.SS}}</th>
                        <th>{{pickedshield.dice}}</th>
                        <th>{{pickedshield.bonus_dmg}}</th>
                        <th>{{pickedshield.at_mod}}</th>
                        <th>{{pickedshield.pa_mod}}</th>
                        <th>{{pickedshield.weight}}</th>
                        <th>{{reachs[pickedshield.reach]}}</th>
                    </tr>
                    </tbody>
                
                </table>
                <button class="button" v-on:click="unpick(pickedshield.id)">Löschen</button>
            </div>
        </div>
    </div>
</template>

<script
>
    export default {
        
        props: ['pickedshields', 'character'],
        
        data(){
            return {
                shields: [],
                fightingtalents: [],
                reachs: ['', 'kurz', 'mittel', 'lang'],
                selected: 1,
                selectedshield: {},
            }
        },
        methods: {
            selectshield(){
                
                this.selectedshield = {
                    id: this.shields[this.selected - 1].id,
                    name: this.shields[this.selected - 1].name,
                    rules: this.shields[this.selected - 1].rules,
                    fightingtalent_id: this.shields[this.selected - 1].fightingtalent_id,
                    skill: this.shields[this.selected - 1].skill,
                    skill_2: this.shields[this.selected - 1].skill_2,
                    SS: this.shields[this.selected - 1].SS,
                    dice: this.shields[this.selected - 1].dice,
                    bonus_dmg: this.shields[this.selected - 1].bonus_dmg,
                    at_mod: this.shields[this.selected - 1].at_mod,
                    pa_mod: this.shields[this.selected - 1].pa_mod,
                    weight: this.shields[this.selected - 1].weight,
                    reach: this.shields[this.selected - 1].reach,
                    
                }
            },
            
            pick(){
                this.pickedshields.unshift(this.selectedshield)
            },
            
            unpick(id){
                let index = this.pickedshields.findIndex(shield => shield.id == id);
                this.pickedshields.splice(index, 1)
            },
            
            getCharacterWeapons(){
                if(Object.keys(this.character).length !== 0) {
                    this.character.shields.forEach(shield => {
                        
                        this.pickedshields.push({
                            
                            id: shield.id,
                            name: shield.name,
                            rules: shield.rules,
                            fightingtalent_id: shield.fightingtalent_id,
                            skill: shield.skill,
                            skill_2: shield.skill_2,
                            SS: shield.SS,
                            dice: shield.dice,
                            bonus_dmg: shield.bonus_dmg,
                            at_mod: shield.at_mod,
                            pa_mod: shield.pa_mod,
                            weight: shield.weight,
                            reach: shield.reach,
                            
                        })
                    })
                }
            }
        },
        mounted(){
            
            let that = this
            
            axios.all([
                axios.get('/api/Shield'),
                axios.get('/api/Fightingtalent')
            ]).then(
                axios.spread(
                    function(dbshields, ftalents) {
                        that.fightingtalents = ftalents.data
                        that.fightingtalents.unshift('none')
                        
                        that.shields = dbshields.data
                        
                        that.getCharacterWeapons()
                        that.selectshield()
                    }
                ),
            )
            
        },
    }
</script>
