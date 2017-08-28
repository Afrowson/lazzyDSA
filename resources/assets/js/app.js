import Vue from 'vue';
import addCharacter from './components/addCharacter.vue';
import addTalents from './components/addTalents.vue';
import addFightingtalents from './components/addFightingtalents.vue';
import addLanguages from './components/addLanguages.vue';
import addLetterings from './components/addLetterings.vue';
import addBenefices from './components/addBenefices.vue';
import addHandicaps from './components/addHandicaps.vue';
import addSpecialtalents from './components/addSpecialtalents.vue';
import addSpecialfightingtalents from './components/addSpecialfightingtalents.vue';
import addSpecialmagictalents from './components/addSpecialmagictalents.vue';
import addWeapons from './components/addWeapons.vue'
import addRangeweapons from './components/addRangeweapons.vue'
import addShields from './components/addShields.vue'
import addMagictricks  from './components/addMagictricks.vue'

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
        status: 8,
        pickedtalents: [],
        pickedfightingtalents: [],
        pickedlanguages: [],
        pickedletterings: [],
        pickedbenefices: [],
        pickedhandicaps: [],
        pickedspecialtalents: [],
        pickedspecialfightingtalents: [],
        pickedspecialmagictalents: [],
        pickedweapons: [],
        pickedrangeweapons: [],
        pickedshields: [],
        pickedmagictricks: [],
        
        character: character
    },
    
    components: {
        'addcharacter': addCharacter,
        'addtalents': addTalents,
        'addfightingtalents': addFightingtalents,
        'addlanguages': addLanguages,
        'addletterings': addLetterings,
        'addbenefices': addBenefices,
        'addhandicaps': addHandicaps,
        'addspecialtalents': addSpecialtalents,
        'addspecialfightingtalents': addSpecialfightingtalents,
        'addspecialmagictalents': addSpecialmagictalents,
        'addweapons': addWeapons,
        'addrangeweapons': addRangeweapons,
        'addshields': addShields,
        'addmagictricks': addMagictricks,
    },
    
    methods: {
        status(selected){
            this.status = selected
            console.log(this.status)
        }
    },
})
