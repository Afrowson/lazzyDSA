import Vue from 'vue';
import axios from 'axios';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//    el: '#app'
// });


const addLanguages = new Vue({
    el: '#root',

    // data: {
    //    selected: []
    // },
    // methods: {
    //     addToselected(id){
    //        addLanguages.selected.push(id)
    //
    //     }
    // }
    // data () {
    //     return {
    //         selected: '',
    //         choices: [
    //             { value: "A", text: "Text A"},
    //             { value: "B", text: "Text B"},
    //             { value: "C", text: "Text C"},
    //             { value: "D", text: "Text D"},
    //             { value: "E", text: "Text E"},
    //         ],
    //         choiceId: ''
    //     }
    // },
    // methods: {
    //     getText () {
    //         var values = this.choices.map(function(o) { return o.value })
    //         var index = values.indexOf(this.selected)
    //         this.choiceText = this.choices[index].text
    //     }
    // },
    mounted(){
        axios.get('/api/languages').then(response = > console.log(response)
    )
        ;
    }


});
