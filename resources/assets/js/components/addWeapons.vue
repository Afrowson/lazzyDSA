<template>
    <div class="addweapons">
        <h1 class="title m-t-5 "> Wähle die Waffen deines Held.</h1>
        <div class="columns">
            <div class="column is-narrow">
                <select class="select" v-model="selected" v-on:change="selectweapon">
                    <option v-for="weapon in weapons" v-bind:value="weapon.id">
                        {{weapon.name }}
                    </option>
                </select>
            </div>
        </div>
    
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
            <div class="column ">Skill
                <select class="input" v-model="selectedweapon.skill">
                    <option v-for="skill in character._skills">
                        {{skill}}
                    </option>
                </select>
            </div>
            <div class="column ">Skill2
                <select class="input" v-model="selectedweapon.skill2">
                    <option v-for="skill in character._skills">
                        {{skill}}
                    </option>
                </select>
            </div>
            <div class="column ">SS
                <input class="input" v-model="selectedweapon.SS">
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
    
        <button class="button" v-on:click="pick()">wählen</button>
        
        
        <div v-for="pickedweapon in pickedweapons">
            <div class="box m-t-5">
    
                <table class="table is-narrow">
                    <thead>
                    <tr>
                        <th style="min-width: 170px">Name</th>
                        <th>Kampftalent</th>
                        <th>Skill</th>
                        <th>Skill 2</th>
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
                        <th>{{pickedweapon.fightingtalent_name}}</th>
                        <th>{{pickedweapon.skill}}</th>
                        <th>{{pickedweapon.skill_2}}</th>
                        <th>{{pickedweapon.SS}}</th>
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
                    fightingtalent_name: this.fightingtalents[(this.weapons[this.selected - 1].fightingtalent_id)].name,
                    skill: this.weapons[this.selected - 1].skill,
                    skill_2: this.weapons[this.selected - 1].skill_2,
                    SS: this.weapons[this.selected - 1].SS,
                    dice: this.weapons[this.selected - 1].dice,
                    bonus_dmg: this.weapons[this.selected - 1].bonus_dmg,
                    at_mod: this.weapons[this.selected - 1].at_mod,
                    pa_mod: this.weapons[this.selected - 1].pa_mod,
                    weight: this.weapons[this.selected - 1].weight,
                    reach: this.weapons[this.selected - 1].reach,
        
                }
            },
            pick(){
        
                this.pickedweapons.unshift(this.selectedweapon)
            },
            unpick(id){
                let index = this.pickedweapons.findIndex(weapon => weapon.id == id);
                this.pickedweapons.splice(index, 1)
            },
            getCharacterWeapons(){
                if(Object.keys(this.character).length !== 0) {
                    this.character.weapons.forEach(weapon => {
                        console.log(weapon)
                
                        this.pickedweapons.push({
                    
                            id: weapon.id,
                            name: weapon.name,
                            rules: weapon.rules,
                            fightingtalent_id: weapon.fightingtalent_id,
                            fightingtalent_name: this.fightingtalents[weapon.fightingtalent_id].name,
                            skill: weapon.skill,
                            skill_2: weapon.skill_2,
                            SS: weapon.SS,
                            dice: weapon.dice,
                            bonus_dmg: weapon.bonus_dmg,
                            at_mod: weapon.at_mod,
                            pa_mod: weapon.pa_mod,
                            weight: weapon.weight,
                            reach: weapon.reach,
                    
                        })
                        console.log(weapon)
                    })
                }
            }
        },
        mounted(){
        
            let that = this
            axios.all([
                axios.get('/api/Weapon'),
                axios.get('/api/Fightingtalent')
            ])
                .then(
                    axios.spread(
                        function(dbweapons, ftalents) {
                            console.log(dbweapons)
                            that.fightingtalents = ftalents.data
                            that.weapons = dbweapons.data
                            that.getCharacterWeapons()
                            that.selectweapon()
                        }
                    ),
                )
//
//            axios.get('/api/Weapon').then(response => {
//                this.weapons = response.data
//            }).then(
//                console.log('2'),
//                axios.get('/api/Fightingtalent').then(response => {
//                    this.fightingtalents = response.data
//                    this.fightingtalents.unshift('none')
//                    console.log('3')
//                    console.log(this.fightingtalents)
//                })).then(
//                console.log('4'),
//                this.getCharacterWeapons(),
//                this.selectweapon(),
//            );
//
        },
    }
</script>
