<template>
    <div class="addrangeweapons">
        <h1 class="title m-t-5 "> Wähle die Fernkampfwaffen deines Held.</h1>
        <div class="select">
            <select v-model="selected" v-on:change="selectrangeweapon">
                <option v-for="rangeweapon in rangeweapons" v-bind:value="rangeweapon.id">
                    {{rangeweapon.name }}
                </option>
            </select>
        </div>
        <h3 class="title is-4">Modifiziere die gewählte Fernkampfwaffe</h3>
        <div class="columns">
            <div style="min-width: 190px" class="column ">Name
                <input class="input" v-model="selectedrangeweapon.name">
            </div>
            <div style="min-width: 190px" class="column ">Kampftalent
                <select class="input" v-model="selectedrangeweapon.fightingtalent_id">
                    <option v-for="fightingtalent in fightingtalents" v-bind:value="fightingtalent.id">
                        {{fightingtalent.name}}
                    </option>
                </select>
            </div>
            <div class="column ">Nachladezeit
                <input class="input" v-model="selectedrangeweapon.reload_time">
            </div>
            <div class="column ">Munitionstyp
                <input class="input" v-model="selectedrangeweapon.munition_type">
            </div>
            <div class="column ">Dice
                <input class="input" v-model="selectedrangeweapon.dice">
            </div>
            <div class="column ">Bonus&nbsp;Schaden
                <input class="input" v-model="selectedrangeweapon.bonus_dmg">
            </div>
            <div class="column ">Gewicht
                <input class="input" v-model="selectedrangeweapon.weight">
            </div>
            <div class="column ">Kurze Distanz
                <input class="input" v-model="selectedrangeweapon.range_one">
            </div>
            <div class="column ">Mittlere Distanz
                <input class="input" v-model="selectedrangeweapon.range_two">
            </div>
            <div class="column ">Weite Distanz
                <input class="input" v-model="selectedrangeweapon.range_three">
            </div>
        </div>
        
        <button class="button" v-on:click="pick()">wählen</button>
        
        
        <div v-for="pickedrangeweapon in pickedrangeweapons">
            <div class="box m-t-5">
                
                <table class="table is-narrow">
                    <thead>
                    <tr>
                        <th style="min-width: 170px">Name</th>
                        <th>Kampftalent</th>
                        <th>Nachladezeit</th>
                        <th>Munitionstyp</th>
                        <th>Dice</th>
                        <th>Bonus&nbsp;Schaden</th>
                        <th>Gewicht</th>
                        <th>Kurze Distanz</th>
                        <th>Mittlere Distanz</th>
                        <th>Weite Distanz</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>{{pickedrangeweapon.name}}</th>
                        <th v-for="fightingtalent in fightingtalents"
                            v-if="fightingtalent.id==pickedrangeweapon.fightingtalent_id">
                            {{fightingtalent.name}}
                        </th>
                        <th>{{pickedrangeweapon.reload_time}}</th>
                        <th>{{pickedrangeweapon.munition_type}}</th>
                        <th>{{pickedrangeweapon.dice}}</th>
                        <th>{{pickedrangeweapon.bonus_dmg}}</th>
                        <th>{{pickedrangeweapon.weight}}</th>
                        <th>{{pickedrangeweapon.range_one}}</th>
                        <th>{{pickedrangeweapon.range_two}}</th>
                        <th>{{pickedrangeweapon.range_three}}</th>
                    </tr>
                    </tbody>
                
                </table>
                <button class="button" v-on:click="unpick(pickedrangeweapon.id)">Löschen</button>
            </div>
        </div>
    </div>
</template>

<script
>
    export default {
        
        props: ['pickedrangeweapons', 'character'],
        
        data(){
            return {
                rangeweapons: [],
                fightingtalents: [],
                reachs: ['', 'kurz', 'mittel', 'lang'],
                selected: 1,
                selectedrangeweapon: {},
            }
        },
        methods: {
            selectrangeweapon(){
                
                this.selectedrangeweapon = {
                    id: this.rangeweapons[this.selected - 1].id,
                    name: this.rangeweapons[this.selected - 1].name,
                    rules: this.rangeweapons[this.selected - 1].rules,
                    fightingtalent_id: this.rangeweapons[this.selected - 1].fightingtalent_id,
                    reload_time: this.rangeweapons[this.selected - 1].reload_time,
                    munition_type: this.rangeweapons[this.selected - 1].munition_type,
                    dice: this.rangeweapons[this.selected - 1].dice,
                    bonus_dmg: this.rangeweapons[this.selected - 1].bonus_dmg,
                    weight: this.rangeweapons[this.selected - 1].weight,
                    range_one: this.rangeweapons[this.selected - 1].range_one,
                    range_two: this.rangeweapons[this.selected - 1].range_two,
                    range_three: this.rangeweapons[this.selected - 1].range_three,
                    
                }
            },
            
            pick(){
                axios.post('/api/Character/' + this.character.id + '/addrangeweapon', this.selectedrangeweapon).then(result => {
                    console.log(result.data)
                    this.selectedrangeweapon.id = result.data
                    this.pickedrangeweapons.unshift(this.selectedrangeweapon)
                    this.selectedrangeweapon = 1
                    this.selectrangeweapon()
                })
                
            },
            
            unpick(id){
                axios.post('/api/Character/' + this.character.id + '/removerangeweapon', {'id': id}).then(result => {
                    console.log(result.data)
                })
                let index = this.pickedrangeweapons.findIndex(rangeweapon => rangeweapon.id == id);
                this.pickedrangeweapons.splice(index, 1)
            },
            
            getCharacterWeapons(){
                if(Object.keys(this.character).length !== 0) {
                    this.character.rangeweapons.forEach(rangeweapon => {
                        
                        this.pickedrangeweapons.push({
                            
                            id: rangeweapon.id,
                            name: rangeweapon.name,
                            rules: rangeweapon.rules,
                            fightingtalent_id: rangeweapon.fightingtalent_id,
                            reload_time: rangeweapon.reload_time,
                            munition_type: rangeweapon.munition_type,
                            dice: rangeweapon.dice,
                            bonus_dmg: rangeweapon.bonus_dmg,
                            weight: rangeweapon.weight,
                            range_one: rangeweapon.range_one,
                            range_two: rangeweapon.range_two,
                            range_three: rangeweapon.range_three,
                            
                        })
                    })
                }
            }
        },
        mounted(){
            
            let that = this
            //get Data from server
            axios.all([
                axios.get('/api/Rangeweapon'),
                axios.get('/api/Fightingtalent')
            ]).then(
                axios.spread(
                    //Add results to Data
                    function(dbrangeweapons, ftalents) {
                        that.fightingtalents = ftalents.data
                        that.rangeweapons = dbrangeweapons.data
    
                        //get Rangeweapons from Character
                        if(that.character.rangeweapons != null)
                            that.getCharacterWeapons()
                        
                        that.selectrangeweapon()
                    }
                ),
            )
            
        },
    }
</script>
