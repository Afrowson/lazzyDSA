<template>
    <div class="addletterings">
        <h1 class="title is-4 m-t-15"> Wähle die Schriften deines Held.</h1>
        <div class="select">
            <select v-model="selected">
                <option value="-" hidden>Schrift wählen</option>
                <option v-for="lettering in letterings" v-bind:value="lettering.id">
                    {{lettering.name }}
                </option>
            </select>
        </div>
        <button class="button" v-on:click="pick()">Bestätigen</button>
    
        <div class="m-t-15" v-for="pickedlettering in pickedletterings">
            <div class="box m-t-5">
                <P>{{ pickedlettering.name}}</P>
                <P>ID: {{pickedlettering.id}}</P>
                <button class="button" v-on:click="unpick(pickedlettering.id)">Löschen</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
    
        props: ['pickedletterings', 'character'],
        
        
        data(){
            return {
                text: 'test',
                letterings: [],
                selected: '-',
            }
        },
        
        methods: {
            pick(){
                if((this.pickedletterings.find(lettering => lettering.id == this.selected)) == null) {
                    let picked = {
                        id: this.selected,
                        name: this.letterings[this.selected - 1].name,
                    }
                    axios.post('/api/Character/' + this.character.id + '/addlettering', picked).then(response => {
                        console.log(response.data)
                    })
                    this.pickedletterings.unshift(picked)
                }
            },
            unpick(id){
                let index = this.pickedletterings.findIndex(lettering => lettering.id == id)
                axios.post('/api/Character/' + this.character.id + '/removelettering', {'id': id}).then(response => {
                    console.log(response.data)
                })
                this.pickedletterings.splice(index, 1)
            },
            getCharacterLetterings(){
                this.character.letterings.forEach(lettering => {
                    this.pickedletterings.push({
                        id: lettering.id,
                        name: lettering.name,
                    })
                })
            }
        }
        ,
        mounted()
        {
            axios.get('/api/Lettering').then(response => {
                this.letterings = response.data
            })
            if(this.character.letterings != null) {
                this.getCharacterLetterings()
            }
        }
    }
</script>
