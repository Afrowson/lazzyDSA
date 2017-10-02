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

import addEntry from './components/database/addEntry.vue'
var db = new Vue({
    el: '#db',
    
    data: {
        tables: ['Armor', 'Benefice', 'Fightingtalent', 'Handicap', 'Inventory', 'Item', 'Language',
            'Lettering', 'Magictrick', 'Purse', 'Rangeweapon', 'Shield', 'Specialfightingtalent',
            'Specialmagictalent', 'Specialtalent', 'Talent', 'Weapon'],
        selected_table_name: null,
        all_fields: [],
        fields: [],
        selected_table: [],
        selected_entry:[],
        togle: 0,
        
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
    components: {
        'add_entry': addEntry
    },
    
    methods: {
        change_table(){
            let table = this.selected_table_name
            axios.get('/api/' + table).then(result => {
    
                this.fields = this.all_fields[this.tables.findIndex(looptable => looptable == table)]
                table = this.formatName(table)
                this[table] = result.data
                this.selected_table = this[table]
            })
        },
        
        edit_entry(entry){
            console.log(entry)
            this.togle= 1;
        },
        delete_entry(entry){
            console.log(entry)
        },
        close(){
            this.togle=0
        },
        
        getFields(tables){
            axios.post('/api/fields', tables).then(result => {
                this.all_fields = result.data
            });
        },
        formatName(table){
            return table.charAt(0).toLowerCase() + table.slice(1) + 's'
        }
        
    },
    mounted(){
        this.getFields(this.tables)
    }
    
    
})
