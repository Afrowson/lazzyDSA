import Vue from 'vue';
import addLetterings from './components/addLetterings.vue';
import addLanguages from './components/addLanguages.vue';
import axios from 'axios';

require('./bootstrap');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

new Vue({
    el: '#app',
    
    data: {
        status: 4,
        pickedlanguages: [],
        pickedletterings: []
        
    },
    
    components: {
        'addlanguages': addLanguages,
        'addletterings': addLetterings
    },
    
    methods: {
        status(selected){
            this.status = selected
            console.log(this.status)
            console.log(selected)
        },
        save(){
            axios.post('addLanguages', this.pickedlanguages)
                .then(function(response) {
                    console.log(response)
                })
            axios.post('addLetterings', this.pickedletterings)
                .then(function(response) {
                    console.log(response)
                })
        }
    },
})
