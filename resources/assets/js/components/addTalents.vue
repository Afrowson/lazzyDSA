<template>
    <div>
        <h2 class="title is-4">Körper</h2>
        <div class="columns is-multiline">
            <numberselector class="column is-narrow"
                v-for="talent in pickedtalents"
                v-if="talent.group == 'Körper'"
                :value="talent.value"
                @changevalue="changevalue"
                :id="talent.id"
                :lable="talent.name"
                :min="0"
                :max="25"
            ></numberselector>
        </div>
        <h2 class="title is-4">Gesellschaft</h2>
        <div class="columns is-multiline">
            <numberselector class="column is-narrow"
                v-for="talent in pickedtalents"
                v-if="talent.group == 'Gesellschaft'"
                :value="talent.value"
                @changevalue="changevalue"
                :id="talent.id"
                :lable="talent.name"
                :min="0"
                :max="25"
            ></numberselector>
        </div>
        <h2 class="title is-4">Natur & Wissen</h2>
        <div class="columns is-multiline">
            <numberselector class="column is-narrow"
                v-for="talent in pickedtalents"
                v-if="talent.group == 'Natur' || talent.group == 'Wissen'"
                :value="talent.value"
                @changevalue="changevalue"
                :id="talent.id"
                :lable="talent.name"
                :min="0"
                :max="25"
            ></numberselector>
        </div>
        <h2 class="title is-4">Handwerk</h2>
        <div class="columns is-multiline">
            <numberselector class="column is-narrow"
                v-for="talent in pickedtalents"
                v-if="talent.group == 'Handwerk'"
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
        props: ['character', 'pickedtalents'],
        
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
                
                this.pickedtalents[id - 1].value = value
                console.log(value)
                console.log(id)
            }
        },
        mounted(){
            axios.get('/api/Talent').then(response => {
                let talents = response.data
                
                talents.forEach(talent => {
                    this.pickedtalents.push({
                        name: talent.name,
                        id: talent.id,
                        group: talent.group,
                        value: Object.keys(this.character).length === 0 ? 0 : this.character.talents[talent.id - 1].pivot.value
                    });
                })
            })
        },
    }
</script>