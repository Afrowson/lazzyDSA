<template>
    <div>
        <h1 class="title is-3">Kampftechniken auswählen</h1>
        
        <div class="columns is-multiline">
            <numberselector class="column is-narrow"
                v-for="talent in pickedfightingtalents"
                :value="talent.value"
                @changevalue="changevalue"
                :id="talent.id"
                :lable="talent.name"
                :min="0"
                :max="25"
            ></numberselector>
        </div>
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
            return {
                talents: [],
            }
        },
        methods: {
            changevalue(id, value){
                
                this.pickedfightingtalents[id - 1].value = value
                console.log(value)
                console.log(id)
            }
        },
        mounted(){
            axios.get('/api/Fightingtalent').then(response => {
                let talents = response.data
                
                talents.forEach(talent => {
                    this.pickedfightingtalents.push({
                        name: talent.name,
                        id: talent.id,
                        value: Object.keys(this.character).length === 0 ? 0 : this.character.fightingtalents[talent.id - 1].pivot.value
                    });
                })
            })
        },
    }
</script>