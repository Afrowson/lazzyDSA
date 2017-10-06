<template>
    <div class="addmagictricks">
        <h1 class="title m-t-5"> Wähle die Zaubertricks deines Held.</h1>
        <label>
            <div class="select">
                <select v-model="selected">
                    <option v-for="magictrick in magictricks" v-bind:value="magictrick.id">
                        {{magictrick.name }}
                    </option>
                </select>
            </div>
            <button class="button" v-on:click="pick()">wählen</button>
        </label>
        
        <div v-for="pickedmagictrick in pickedmagictricks">
            <div class="box m-t-5">
                
                <P>{{ pickedmagictrick.name}}</P>
                <P>ID: {{pickedmagictrick.id}}</P>
                
                <button class="button" v-on:click="unpick(pickedmagictrick.id)">Löschen</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        
        props: ['pickedmagictricks', 'character'],
        
        
        data(){
            return {
                text: 'test',
                magictricks: [],
                selected: 1,
            }
        },
        
        methods: {
            pick(){
                if((this.pickedmagictricks.find(magictrick => magictrick.id == this.selected)) == null) {
                    let picked = {
                        id: this.selected,
                        name: this.magictricks[this.selected - 1].name,
                    }
                    this.pickedmagictricks.unshift(picked)
                }
            },
            unpick(id){
                let index = this.pickedmagictricks.findIndex(magictrick => magictrick.id == id);
                this.pickedmagictricks.splice(index, 1)
            }
        }
        ,
        mounted()
        {
            axios.get('/api/Magictrick').then(response => {
                this.magictricks = response.data
            })
            if(Object.keys(this.character).length !== 0) {
                this.character.magictricks.forEach(magictrick => {
                    this.pickedmagictricks.push({
                        id: magictrick.id,
                        name: magictrick.name,
                    })
                })
            }
        }
    }
</script>
