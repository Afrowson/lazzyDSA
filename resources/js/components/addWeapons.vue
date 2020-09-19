<template>
    <div class="addweapons">
        <h1 class="title is-4 m-t-15 "> Wähle die Waffen deines Held.</h1>
        <div class="select">
            <select v-model="selected" v-on:change="selectweapon">
                <option v-for="weapon in weapons" v-bind:value="weapon.id">
                    {{weapon.name }}
                </option>
            </select>
        </div>
        <h3 class="title is-5 m-t-15">Modifiziere die gewählte Waffe</h3>
        <div class="columns">
            <div style="min-width: 190px" class="column ">Name
                <input class="input" v-model="selectedweapon.name">
            </div>
            <div style="min-width: 190px" class="column ">Kampftalent
                <select class="input" v-model="selectedweapon.fightingtalent_id">
                    <option v-for="fightingtalent in fightingtalents" v-bind:value="fightingtalent.id">
                        {{fightingtalent.name}}
                    </option>
                </select>
            </div>
            <div class="column ">Eigenschaft
                <select class="input" v-model="selectedweapon.skill">
                    <option v-for="skill in character._skills">
                        {{skill}}
                    </option>
                </select>
            </div>
            <div class="column ">Eigenschaft&nbsp;2
                <select class="input" v-model="selectedweapon.skill_two">
                    <option v-for="skill in character._skills">
                        {{skill}}
                    </option>
                </select>
            </div>
            <div class="column ">SS
                <input class="input" v-model="selectedweapon.ss">
            </div>
            <div class="column ">Dice
                <input class="input" v-model="selectedweapon.dice">
            </div>
            <div class="column ">Bonus&nbsp;Schaden
                <input class="input" v-model="selectedweapon.bonus_dmg">
            </div>
            <div class="column ">AT&nbsp;Modifikator
                <input class="input" v-model="selectedweapon.at_mod">
            </div>
            <div class="column ">PA&nbsp;Modifikator
                <input class="input" v-model="selectedweapon.pa_mod">
            </div>
            <div class="column ">Gewicht
                <input class="input" v-model="selectedweapon.weight">
            </div>
            <div class="column ">Reichweite
                <select class="input" v-model="selectedweapon.reach">
                    <option v-bind:value="1">kurz</option>
                    <option v-bind:value="2">mittel</option>
                    <option v-bind:value="3">lang</option>
                </select>
            </div>
        </div>
    
        <button class="button m-b-15" v-on:click="pick()">Bestätigen</button>
        
        
        <div v-for="pickedweapon in pickedweapons">
            <div class="box m-t-5">
    
                <table class="table is-narrow">
                    <thead>
                    <tr>
                        <th style="min-width: 170px">Name</th>
                        <th>Kampftalent</th>
                        <th>Eigenschaft</th>
                        <th>Eigenschaft&nbsp;2</th>
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
                        <th>{{pickedweapon.name}}</th>
                        <th v-for="fightingtalent in fightingtalents"
                            v-if="fightingtalent.id==pickedweapon.fightingtalent_id">
                            {{fightingtalent.name}}
                        </th>
                        <th>{{pickedweapon.skill}}</th>
                        <th>{{pickedweapon.skill_two}}</th>
                        <th>{{pickedweapon.ss}}</th>
                        <th>{{pickedweapon.dice}}</th>
                        <th>{{pickedweapon.bonus_dmg}}</th>
                        <th>{{pickedweapon.at_mod}}</th>
                        <th>{{pickedweapon.pa_mod}}</th>
                        <th>{{pickedweapon.weight}}</th>
                        <th>{{reachs[pickedweapon.reach]}}</th>
                    </tr>
                    </tbody>
    
                </table>
                <button class="button" v-on:click="unpick(pickedweapon.id)">Löschen</button>
            </div>
        </div>
    </div>
</template>

<script
>
    export default {
        
        props: ['pickedweapons', 'character'],
        
        data(){
            return {
                weapons: [],
                fightingtalents: [],
                reachs: ['', 'kurz', 'mittel', 'lang'],
                selected: 1,
                selectedweapon: {},
            }
        },
        methods: {
            selectweapon(){
    
                this.selectedweapon = {
                    id: this.weapons[this.selected - 1].id,
                    name: this.weapons[this.selected - 1].name,
                    rules: this.weapons[this.selected - 1].rules,
                    fightingtalent_id: this.weapons[this.selected - 1].fightingtalent_id,
                    skill: this.weapons[this.selected - 1].skill,
                    skill_two: this.weapons[this.selected - 1].skill_two,
                    ss: this.weapons[this.selected - 1].ss,
                    dice: this.weapons[this.selected - 1].dice,
                    bonus_dmg: this.weapons[this.selected - 1].bonus_dmg,
                    at_mod: this.weapons[this.selected - 1].at_mod,
                    pa_mod: this.weapons[this.selected - 1].pa_mod,
                    weight: this.weapons[this.selected - 1].weight,
                    reach: this.weapons[this.selected - 1].reach,
        
                }
            },
    
            pick(){
                axios.post('/api/Character/' + this.character.id + '/addweapon', this.selectedweapon).then(result => {
                    console.log(result.data)
                    this.selectedweapon.id = result.data
                    this.pickedweapons.unshift(this.selectedweapon)
                    this.selectedweapon = 1
                    this.selectweapon()
                })
                
            },
    
            unpick(id){
                axios.post('/api/Character/' + this.character.id + '/removeweapon', {'id': id}).then(result => {
                    console.log(result.data)
                })
                let index = this.pickedweapons.findIndex(weapon => weapon.id == id);
                this.pickedweapons.splice(index, 1)
            },
    
            getCharacterWeapons(){
                if(Object.keys(this.character).length !== 0) {
                    this.character.weapons.forEach(weapon => {
    
                        this.pickedweapons.push({
        
                            id: weapon.id,
                            name: weapon.name,
                            rules: weapon.rules,
                            fightingtalent_id: weapon.fightingtalent_id,
                            skill: weapon.skill,
                            skill_two: weapon.skill_two,
                            ss: weapon.ss,
                            dice: weapon.dice,
                            bonus_dmg: weapon.bonus_dmg,
                            at_mod: weapon.at_mod,
                            pa_mod: weapon.pa_mod,
                            weight: weapon.weight,
                            reach: weapon.reach,
        
                        })
                    })
                }
            }
        },
        mounted(){
    
            let that = this
            //get Data from server
            axios.all([
                axios.get('/api/Weapon'),
                axios.get('/api/Fightingtalent')
            ]).then(
                axios.spread(
                    //Add results to Data
                    function(dbweapons, ftalents) {
                        that.fightingtalents = ftalents.data
                        that.weapons = dbweapons.data
    
                        //get Weapons from Character
                        if(that.character.weapons != null)
                            that.getCharacterWeapons()
                        
                        that.selectweapon()
                    }
                ),
            )
            
        },
    }
</script>
