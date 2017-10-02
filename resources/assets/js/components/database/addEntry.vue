<template>
    <div class="modal" v-bind:class="{'is-active': togle}">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Modal title</p>
                <button class="delete" aria-label="close" v-on:click="close"></button>
            </header>
            <section class="modal-card-body">
                <!-- Content ... -->
            </section>
            <footer class="modal-card-foot">
                <button class="button is-success">Save changes</button>
                <button class="button" v-on:click="close">Cancel</button>
            </footer>
        </div>
    </div>
</template>

<script>
    export default {
        
        props: ['togle', 'entry', 'fields'],
        
        data() {
            return {
                edited_entry: entry
            }
        },
        methods: {
            close() {
                this.$emit('close')
            },
            
            update_entry() {
                
                
                this.$emit('entry')
            }
            
        }
    }


</script>