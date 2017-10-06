<template>
    <div class="modal" v-bind:class="{'is-active': togle}">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Eintrag Bearbeiten</p>
                <button class="delete" aria-label="close" v-on:click="close"></button>
            </header>
            <section class="modal-card-body">
                <div v-for="field in fields">
                    <p>{{field.name}}</p>
                    <input v-model="edited_entry[field.key]">
                </div>

            </section>
            <footer class="modal-card-foot">
                <button class="button is-success" v-on:click="update_entry">Speichern</button>
                <button class="button" v-on:click="close">Abbrechen</button>
            </footer>
        </div>
    </div>
</template>

<script>
    export default {
        
        props: ['togle', 'entry', 'fields'],
        
        data() {
            return {
                edited_entry: []
            }
        },
        watch: {
            entry: function(newVal, oldVal) {
                let entry = JSON.parse(JSON.stringify(newVal));
                this.edited_entry = entry
            }
        },
        methods: {
            close() {
                this.$emit('close')
            },
            
            update_entry() {
    
                this.$emit('update_entry', this.edited_entry)
            }
            
        }
    }


</script>