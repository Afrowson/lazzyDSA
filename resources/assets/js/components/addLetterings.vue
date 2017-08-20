<template>
    <div class="addletterings">
        <h1 class="title m-t-5 "> Wähle die Schriften deines Held.</h1>
        <label>
            <select class="select" v-model="selected">
                <option v-for="lettering in letterings" v-bind:value="lettering.id">
                    {{lettering.name }}
                </option>
            </select>
            <button class="button" v-on:click="pick()">wählen</button>
        </label>
        
        <div v-for="pickedlettering in pickedletterings">
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
                selected: '',
            }
        },
        
        methods: {
            pick(){
                let picked = {
                    id: this.selected,
                    name: this.letterings[this.selected - 1].name,
                }
                this.pickedletterings.push(picked)
            },
            unpick(id){
                this.pickedletterings.pop(id)
            }
        },
        mounted(){
            axios.get('/api/Language').then(response => {
                this.letterings = response.data
            });
        }
    }
</script>
