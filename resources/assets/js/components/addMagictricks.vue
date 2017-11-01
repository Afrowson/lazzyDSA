<template>
    <div class="addmagictricks">
        <h1 class="title is-4 m-t-15"> Wähle die Zaubertricks deines Held.</h1>
        <div class="select">
            <select v-model="selected">
                <option v-for="magictrick in magictricks" v-bind:value="magictrick.id">
                    {{magictrick.name }}
                </option>
            </select>
        </div>
        <button class="button" v-on:click="pick()">Bestätigen</button>
    
        <div class="m-t-15" v-for="pickedmagictrick in pickedmagictricks">
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
                    axios.post('/api/Character/' + this.character.id + '/addmagictrick', picked).then(result => {
                        console.log(result.data)
                    })
                    this.pickedmagictricks.unshift(picked)
                }
            },
            unpick(id){
                axios.post('/api/Character/' + this.character.id + '/removemagictrick', {'id': id}).then(result => {
                    console.log(result.data)
                })
                let index = this.pickedmagictricks.findIndex(magictrick => magictrick.id == id);
                this.pickedmagictricks.splice(index, 1)
            },
            getCharacterMagictricks(){
                this.character.magictricks.forEach(magictrick => {
                    this.pickedmagictricks.push({
                        id: magictrick.id,
                        name: magictrick.name,
                    })
                })
            }
        }
        ,
        mounted()
        {
            axios.get('/api/Magictrick').then(response => {
                this.magictricks = response.data
            })
            if(this.character.magictricks != null)
                this.getCharacterMagictricks()
        }
    }
</script>
