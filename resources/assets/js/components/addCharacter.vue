<template>
    <div>
        <h1 class="title m-t-5">Erstelle deinen Character</h1>
        <div class="columns is-multiline">
            <div class="column is-narrow">
                <stringinput :model="character.name" :lable="'Name'" :placeholder="'Max Musterheld'"></stringinput>
            </div>
            <div class="column is-narrow">
                <stringinput :model="character.title" :lable="'Titel'" :placeholder="'von Beispiel'"></stringinput>
            </div>
            <div class="column is-narrow">
                <propertyselector :model="character.gender" :lable="'Geschlecht'" :selectables="genders"></propertyselector>
            </div>
            <div class="column is-narrow">
                <stringinput :model="character.place_of_birth" :lable="'Geburtsort'" :placeholder="'Hinter den 7 Bergen'"></stringinput>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-narrow">
                <stringinput :model="character.race" :lable="'Spezies'" :placeholder="'Gnolch'"></stringinput>
            </div>
            <div class="column is-narrow">
                <stringinput :model="character.culture" :lable="'Kultur'" :placeholder="'Beispielhaft'"></stringinput>
            </div>
            <div class="column is-narrow">
                <stringinput :model="character.profession" :lable="'Beruf'" :placeholder="'Model,Beispiel'"></stringinput>
            </div>
            <div class="column is-narrow">
                <stringinput :model="character.social" :lable="'Sozialstatus'" :placeholder="'Offline'"></stringinput>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-narrow">
                <numberinput :model="character.age" :lable="'Alter'" :placeholder="'23'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput :model="character.height" :lable="'Größe'" :placeholder="'Bitte in cm angeben!'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput :model="character.weight" :lable="'Gewicht'" :placeholder="'Bitte in cm angeben!'"></numberinput>
            </div>
            <div class="column is-narrow">
                <stringinput :model="character.hair" :lable="'Haarfarbe'" :placeholder="'Seelenlos'"></stringinput>
            </div>
            <div class="column is-narrow">
                <stringinput :model="character.eyes" :lable="'Augenfarbe'" :placeholder="'Hühneraugenfarben'"></stringinput>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-narrow">
                <numberselector :model="character.MU" :lable="'MU'" :min="8" :max="20"></numberselector>
            </div>
            <div class="column is-narrow">
                <numberselector :model="character.KL" :lable="'KL'" :min="8" :max="20"></numberselector>
            </div>
            <div class="column is-narrow">
                <numberselector :model="character.IN" :lable="'IN'" :min="8" :max="20"></numberselector>
            </div>
            <div class="column is-narrow">
                <numberselector :model="character.CH" :lable="'CH'" :min="8" :max="20"></numberselector>
            </div>
            <div class="column is-narrow">
                <numberselector :model="character.FF" :lable="'FF'" :min="8" :max="20"></numberselector>
            </div>
            <div class="column is-narrow">
                <numberselector :model="character.GE" :lable="'GE'" :min="8" :max="20"></numberselector>
            </div>
            <div class="column is-narrow">
                <numberselector :model="character.KO" :lable="'KO'" :min="8" :max="20"></numberselector>
            </div>
            <div class="column is-narrow">
                <numberselector :model="character.KK" :lable="'KK'" :min="8" :max="20"></numberselector>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-narrow">
                <numberinput :model="character.lep" :lable="'Lebenskunpte'" :placeholder="'42'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput :model="character.asp" :lable="'Astralpunkte'" :placeholder="'23'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput :model="character.kap" :lable="'Karmapunkte'" :placeholder="'0'"></numberinput>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-narrow">
                <numberinput :model="character.SK" :lable="'Seelenkraft'" :placeholder="'0'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput :model="character.ZK" :lable="'Zähigkeit'" :placeholder="'0'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput :model="character.AW" :lable="'Ausweichen'" :placeholder="'0'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput :model="character.IT" :lable="'Initiative'" :placeholder="'0'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput :model="character.GW" :lable="'Geschwindigkeit'" :placeholder="'0'"></numberinput>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-narrow">
                <numberinput :model="character.ap_total" :lable="'Abenteuerpunkte'" :placeholder="'1000'"></numberinput>
            </div>
            <div class="column is-narrow">
                <numberinput :model="character.ap_spend" :lable="'davon Ausgegeben'" :placeholder="'0'"></numberinput>
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
                selectedgender: 0,
                genders: [
                    {name: 'weiblich', id: 0},
                    {name: 'Mänlich', id: 1},
                    {name: 'Sonsiges', id: 2}
                ]
            }
        },
        methods: {}
    }

</script>