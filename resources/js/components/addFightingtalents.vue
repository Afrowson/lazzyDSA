<template>
    <div>
        <h4 class="title is-4 m-t-15">Kampftechniken auswählen</h4>
        <div class="columns is-multiline">
            <numberselector class="column is-narrow"
                v-for="talent in pickedfightingtalents"
                v-bind:key="talent.id"
                :value="talent.value"
                @changevalue="changevalue"
                :id="talent.id"
                :lable="talent.name"
                :min="6"
                :max="25"
            ></numberselector>
        </div>
        <button class="button" v-on:click="save()">Speichern</button>
    </div>
</template>

<script>
    import stringInput from './base/stringInput.vue'
    import numberInput from './base/numberInput.vue'
    import propertySelector from './base/propertySelector.vue'
    import numberSelector from './base/numberSelector.vue'
    import axios from 'axios';
    export default{
        props: ['character', 'pickedfightingtalents'],
        
        components: {
            'stringinput': stringInput,
            'numberinput': numberInput,
            'propertyselector': propertySelector,
            'numberselector': numberSelector
        },
        data(){
            return {}
        },
        methods: {
            changevalue(id, value){
                
                this.pickedfightingtalents[id - 1].value = value
            },
            getCharacterFightingtalents(){
                if(character.fightingtalents == null) {
                    axios.get('/api/Fightingtalent').then(response => {
                        let fightingtalents = response.data
                        this.pickCharacterFightingtalents(fightingtalents)
                    })
                }
                else {
                    let fightingtalents = this.character.fightingtalents
                    this.pickCharacterFightingtalents(fightingtalents)
    
                }
            },
            pickCharacterFightingtalents(fightingtalents){
                fightingtalents.forEach(fightingtalent => {
                    this.pickedfightingtalents.push({
                        name: fightingtalent.name,
                        id: fightingtalent.id,
                        value: fightingtalent.pivot ? fightingtalent.pivot.value : 0
                    })
                })
            },
    
            save(){
                axios.post('/api/Character/' + this.character.id + '/updatefightingtalents', this.pickedfightingtalents).then(response => {
                    console.log(response.data)
                })
            },
        },
        mounted(){
            this.getCharacterFightingtalents()
        },
    }
</script>
