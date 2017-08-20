import Vue from 'vue';
import addCharacter from './components/addCharacter.vue';
import addTalents from './components/addTalents.vue';
import addFightingtalents from './components/addFightingtalents.vue';
import addLanguages from './components/addLanguages.vue';
import addLetterings from './components/addLetterings.vue';
import axios from 'axios';


require('./bootstrap');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

var app = new Vue({
    el: '#app',
    
    data: {
        status: 1,
        pickedlanguages: [],
        pickedletterings: [],
        pickedtalents: [],
        pickedfightingtalents: [],
        character: character
    },
    
    components: {
        'addcharacter': addCharacter,
        'addtalents': addTalents,
        'addfightingtalents': addFightingtalents,
        'addlanguages': addLanguages,
        'addletterings': addLetterings,
    },
    
    methods: {
        status(selected){
            this.status = selected
            console.log(this.status)
        }
    },
})
