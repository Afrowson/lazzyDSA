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
import addWeapons from './components/addWeapons.vue';
import addRangeweapons from './components/addRangeweapons.vue';
import addShields from './components/addShields.vue';
import addMagictricks  from './components/addMagictricks.vue';
import addInventories  from './components/addInventories.vue';
// import addPurses  from './components/addPurses.vue'

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
        pickedinventories: [],
        pickedpurses: [],
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
        'addinventories': addInventories,
        // 'addpurses': addPurses,
    },
    methods: {}
})

var db = new Vue({
    el: '#db',
    
    data: {
        tables: ['Armor', 'Benefice', 'Fightingtalent', 'Handicap', 'Inventory', 'Item', 'Language',
            'Lettering', 'Magictrick', 'Purse', 'Rangeweapon', 'Shield', 'Specialfightingtalent',
            'Specialmagictalent', 'Specialtalent', 'Talent', 'Weapon'],
        activetable: 'Armor',
        fields:[],

        armors: [],
        benefices: [],
        fightingtalents: [],
        handicaps: [],
        inventorys: [],
        items: [],
        languages: [],
        letterings: [],
        magictricks: [],
        purses: [],
        rangeweapons: [],
        shields: [],
        specialfightingtalents: [],
        specialmagictalents: [],
        specialtalents: [],
        talents: [],
        weapons: [],
        
    },
    components: {},
    methods: {
        changetable(table){
            this.getTable(this.activetable)
        },
        
        getTable(table){
            axios.get('/api/' + table).then(result => {
                    table = table.charAt(0).toLowerCase() + table.slice(1) + 's'
                    this[table] = result.data
                }
            )
            
        },
        getFields(tables){
            axios.post('/api/fields', tables).then(result=>{
                this.fields= result.data
            });
        }
    },
    mounted(){
        this.getTable(this.activetable)
        this.getFields(this.tables)
    }
    
    
})
