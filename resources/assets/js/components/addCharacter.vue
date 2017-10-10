<template>
    <div>
        <h1 class="title m-t-5">Erstelle deinen Character</h1>
        <div class="columns is-multiline">
            <div class="column is-narrow">
                <stringinput v-on:changevalue="changeValue" :id="'name'" :value="character.name" :lable="'Name'" :placeholder="'Max Musterheld'"></stringinput>
            </div>
            <div class="column is-narrow">
                <stringinput v-on:changevalue="changeValue" :id="'title'" :value="character.title" :lable="'Titel'" :placeholder="'von Beispiel'"></stringinput>
            </div>
            <div class="column is-narrow">
                <propertyselector v-on:changevalue="changeValue" :value="character.gender" :id="'gender'" :lable="'Geschlecht'" :selectables="genders"></propertyselector>
            </div>
            <div class="column is-narrow">
                <stringinput v-on:changevalue="changeValue" :id="'place_of_birth'" :value="character.place_of_birth" :lable="'Geburtsort'" :placeholder="'Hinter den 7 Bergen'"></stringinput>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-narrow">
                <stringinput v-on:changevalue="changeValue" :id="'race'" :value="character.race" :lable="'Spezies'" :placeholder="'Gnolch'"></stringinput>
            </div>
            <div class="column is-narrow">
                <stringinput v-on:changevalue="changeValue" :id="'culture'" :value="character.culture" :lable="'Kultur'" :placeholder="'Beispielhaft'"></stringinput>
            </div>
            <div class="column is-narrow">
                <stringinput v-on:changevalue="changeValue" :id="'profession'" :value="character.profession" :lable="'Beruf'" :placeholder="'Model,Beispiel'"></stringinput>
            </div>
            <div class="column is-narrow">
                <stringinput v-on:changevalue="changeValue" :id="'social'" :value="character.social" :lable="'Sozialstatus'" :placeholder="'Offline'"></stringinput>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'age'" :value="character.age" :lable="'Alter'" :placeholder="'23'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'height'" :value="character.height" :lable="'Größe'" :placeholder="'Bitte in cm angeben!'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'weight'" :value="character.weight" :lable="'Gewicht'" :placeholder="'Bitte in cm angeben!'"></numberinput>
            </div>
            <div class="column is-narrow">
                <stringinput v-on:changevalue="changeValue" :id="'hair'" :value="character.hair" :lable="'Haarfarbe'" :placeholder="'Seelenlos'"></stringinput>
            </div>
            <div class="column is-narrow">
                <stringinput v-on:changevalue="changeValue" :id="'eyes'" :value="character.eyes" :lable="'Augenfarbe'" :placeholder="'Hühneraugenfarben'"></stringinput>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-narrow">
                <numberselector
                    :value="character.MU"
                    :id="'MU'"
                    :lable="'MU'"
                    :min="8"
                    :max="20"
                    @changevalue="changeValue"
                ></numberselector>
            </div>
            <div class="column is-narrow">
                <numberselector
                    :value="character.KL"
                    :id="'KL'"
                    :lable="'KL'"
                    :min="8"
                    :max="20"
                    @changevalue="changeValue"
                ></numberselector>
            </div>
            <div class="column is-narrow">
                <numberselector
                    :value="character.IN"
                    :id="'IN'"
                    :lable="'IN'"
                    :min="8"
                    :max="20"
                    @changevalue="changeValue"
                ></numberselector>
            </div>
            <div class="column is-narrow">
                <numberselector
                    :value="character.CH"
                    :id="'CH'"
                    :lable="'CH'"
                    :min="8"
                    :max="20"
                    @changevalue="changeValue"
                ></numberselector>
            </div>
            <div class="column is-narrow">
                <numberselector
                    :value="character.FF"
                    :id="'FF'"
                    :lable="'FF'"
                    :min="8"
                    :max="20"
                    @changevalue="changeValue"
                ></numberselector>
            </div>
            <div class="column is-narrow">
                <numberselector
                    :value="character.GE"
                    :id="'GE'"
                    :lable="'GE'"
                    :min="8"
                    :max="20"
                    @changevalue="changeValue"
                ></numberselector>
            </div>
            <div class="column is-narrow">
                <numberselector
                    :value="character.KO"
                    :id="'KO'"
                    :lable="'KO'"
                    :min="8"
                    :max="20"
                    @changevalue="changeValue"
                ></numberselector>
            </div>
            <div class="column is-narrow">
                <numberselector
                    :value="character.KK"
                    :id="'KK'"
                    :lable="'KK'"
                    :min="8"
                    :max="20"
                    @changevalue="changeValue"
                ></numberselector>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'lep_max'" :value="character.lep_max" :lable="'Lebenskunpte'" :placeholder="'42'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'asp_max'" :value="character.asp_max" :lable="'Astralpunkte'" :placeholder="'23'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'kap_max'" :value="character.kap_max" :lable="'Karmapunkte'" :placeholder="'0'"></numberinput>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'SK'" :value="character.SK" :lable="'Seelenkraft'" :placeholder="'0'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'ZK'" :value="character.ZK" :lable="'Zähigkeit'" :placeholder="'0'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'AW'" :value="character.AW" :lable="'Ausweichen'" :placeholder="'0'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'IT'" :value="character.IT" :lable="'Initiative'" :placeholder="'0'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'GW'" :value="character.GW" :lable="'Geschwindigkeit'" :placeholder="'0'"></numberinput>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'ap_total'" :value="character.ap_total" :lable="'Abenteuerpunkte'" :placeholder="'1000'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'ap_spend'" :value="character.ap_spend" :lable="'davon Ausgegeben'" :placeholder="'0'"></numberinput>
            </div>
        </div>
        <button class="button" v-on:click="save">Speichern</button>
    </div>
</template>

<script>
    import stringInput from './base/stringInput.vue'
    import numberInput from './base/numberInput.vue'
    import propertySelector from './base/propertySelector.vue'
    import numberSelector from './base/numberSelector.vue'
    export default{
        props: ['character'],
        
        components: {
            'stringinput': stringInput,
            'numberinput': numberInput,
            'propertyselector': propertySelector,
            'numberselector': numberSelector
        },
        
        data(){
            return {
                genders: [
                    {name: 'weiblich', id: 0},
                    {name: 'Mänlich', id: 1},
                    {name: 'Sonsiges', id: 2}
                ]
            }
        },
        methods: {
            changeValue(id, value){
                this.character[id] = value
            },
            save(){
                if(this.character.id == null) {
                    console.log('NULL')
                    console.log(this.character)
                    axios.post('/api/Character/create', this.character).then(result => {
                        console.log(result.data)
                        this.character.id = result.data
                    })
                } else {
                    console.log(character.id)
                    axios.post('/api/Character/' + this.character.id + '/update', this.character).then(result => {
                        console.log(result.data.id)
                    })
                }
            }
        }
    }

</script>