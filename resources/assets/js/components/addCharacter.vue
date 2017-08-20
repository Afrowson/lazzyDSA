<template>
    <div>
        <h1 class="title m-t-5">Erstelle deinen Character</h1>
        <div class="columns is-multiline">
            <div class="column is-narrow">
                <stringinput v-on:changevalue="changeValue" :id="'character.name'" :value="character.name" :lable="'Name'" :placeholder="'Max Musterheld'"></stringinput>
            </div>
            <div class="column is-narrow">
                <stringinput v-on:changevalue="changeValue" :id="'character.title'" :value="character.title" :lable="'Titel'" :placeholder="'von Beispiel'"></stringinput>
            </div>
            <div class="column is-narrow">
                <propertyselector v-on:changevalue="changeValue" :value="character.gender" :id="'character.gender'" :lable="'Geschlecht'" :selectables="genders"></propertyselector>
            </div>
            <div class="column is-narrow">
                <stringinput v-on:changevalue="changeValue" :id="'character.place_of_birth'" :value="character.place_of_birth" :lable="'Geburtsort'" :placeholder="'Hinter den 7 Bergen'"></stringinput>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-narrow">
                <stringinput v-on:changevalue="changeValue" :id="'character.race'" :value="character.race" :lable="'Spezies'" :placeholder="'Gnolch'"></stringinput>
            </div>
            <div class="column is-narrow">
                <stringinput v-on:changevalue="changeValue" :id="'character.culture'" :value="character.culture" :lable="'Kultur'" :placeholder="'Beispielhaft'"></stringinput>
            </div>
            <div class="column is-narrow">
                <stringinput v-on:changevalue="changeValue" :id="'character.profession'" :value="character.profession" :lable="'Beruf'" :placeholder="'Model,Beispiel'"></stringinput>
            </div>
            <div class="column is-narrow">
                <stringinput v-on:changevalue="changeValue" :id="'character.social'" :value="character.social" :lable="'Sozialstatus'" :placeholder="'Offline'"></stringinput>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'character.age'" :value="character.age" :lable="'Alter'" :placeholder="'23'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'character.height'" :value="character.height" :lable="'Größe'" :placeholder="'Bitte in cm angeben!'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'character.weight'" :value="character.weight" :lable="'Gewicht'" :placeholder="'Bitte in cm angeben!'"></numberinput>
            </div>
            <div class="column is-narrow">
                <stringinput v-on:changevalue="changeValue" :id="'character.hair'" :value="character.hair" :lable="'Haarfarbe'" :placeholder="'Seelenlos'"></stringinput>
            </div>
            <div class="column is-narrow">
                <stringinput v-on:changevalue="changeValue" :id="'character.eyes'" :value="character.eyes" :lable="'Augenfarbe'" :placeholder="'Hühneraugenfarben'"></stringinput>
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
                <numberinput v-on:changevalue="changeValue" :id="'character.lep'" :value="character.lep" :lable="'Lebenskunpte'" :placeholder="'42'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'character.asp'" :value="character.asp" :lable="'Astralpunkte'" :placeholder="'23'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'character.kap'" :value="character.kap" :lable="'Karmapunkte'" :placeholder="'0'"></numberinput>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'character.SK'" :value="character.SK" :lable="'Seelenkraft'" :placeholder="'0'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'character.ZK'" :value="character.ZK" :lable="'Zähigkeit'" :placeholder="'0'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'character.AW'" :value="character.AW" :lable="'Ausweichen'" :placeholder="'0'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'character.IT'" :value="character.IT" :lable="'Initiative'" :placeholder="'0'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'character.GW'" :value="character.GW" :lable="'Geschwindigkeit'" :placeholder="'0'"></numberinput>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'character.ap_total'" :value="character.ap_total" :lable="'Abenteuerpunkte'" :placeholder="'1000'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput v-on:changevalue="changeValue" :id="'character.ap_spend'" :value="character.ap_spend" :lable="'davon Ausgegeben'" :placeholder="'0'"></numberinput>
            </div>
        </div>
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
            }
        }
    }

</script>