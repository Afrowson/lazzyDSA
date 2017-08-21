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
            <div class="column is-narrow" v-if="levels != null">
                <p class="is-pulled-left">Level</p>
                <select class="select is-pulled-left" v-model="selectedLevel">
                    <option v-for="n in levels">
                        {{n}}
                    </option>
                </select>
            </div>
            <div class="column is-narrow">
                <p class="is-pulled-left">Typ:</p>
                <input class="input is-pulled-left is-inline" v-model="type"/>
            </div>
        
        </div>
        <button class="button" v-on:click="pick()">wählen</button>
        
        
        <div v-for="pickedweapon in pickedweapons">
            <div class="box m-t-5">
                
                <P>{{ pickedweapon.name}}
                    <span v-if="pickedweapon.level">, Level: {{ pickedweapon.level}}</span>
                </P>
                <P v-if="pickedweapon.type">Type: {{ pickedweapon.type}}</P>
                
                <button class="button" v-on:click="unpick(pickedweapon.id)">Löschen</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        
        props: ['pickedweapons', 'character'],
        
        data(){
            return {
                weapons: [],
                selected: 1,
                selectedLevel: '',
                levels: null,
                type: ''
            }
        },
        methods: {
            selectweapon(){
                this.levels = this.weapons[this.selected - 1].level
                this.type = ''
                console.log(this.levels)
            },
            pick(){
                if((this.pickedweapons.find(weapon => weapon.id == this.selected)) == null) {
                    let picked = {
                        id: this.selected,
                        name: this.weapons[this.selected - 1].name,
                        level: this.selectedLevel,
                        type: this.type
                    }
                    this.pickedweapons.unshift(picked)
                }
            },
            unpick(id){
                let index = this.pickedweapons.findIndex(weapon => weapon.id == id);
                console.log(index)
                this.pickedweapons.splice(index, 1)
            },
        },
        mounted(){
            axios.get('/api/Weapon').then(response => {
                this.weapons = response.data
                console.log(this.weapons)
            })
            if(Object.keys(this.character).length !== 0) {
                this.character.weapons.forEach(weapon => {
                    this.pickedweapons.push({
                        id: weapon.id,
                        name: weapon.name,
                    })
                })
            }
        }
    }
</script>
