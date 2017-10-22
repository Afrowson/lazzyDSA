<template>
    <div class="modal" v-bind:class="{'is-active': togle}">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Eintrag Bearbeiten</p>
                <button class="delete" aria-label="close" v-on:click="close"></button>
            </header>
            <section class="modal-card-body">
                <div class="select">
                    <select v-model="selected" v-on:change="changeItem">
                        <option v-for="item in items" v-bind:value="item.id">
                            {{item.name}}
                        </option>
                    </select>
                </div>
                
                
                <h1 class="title is-3"> {{updated_item.name}}</h1>
                <p>Beschreibung: {{updated_item.description}}</p>
                <p>Gewicht: {{updated_item.weight}} Stein</p>
                <p>Wert: {{updated_item.value}} Silber</p>
                <p>Anzahl:</p>
                <input v-model="updated_item.amount"/>
                <div class="field">
                    <label class="label">Message</label>
                    <div class="control">
                        <textarea class="textarea" placeholder="Textarea">{{updated_item.notes}}</textarea>
                    </div>
                </div>
            </section>
            <footer class="modal-card-foot">
                <button class="button is-success" v-on:click="updateItem">Speichern</button>
                <button class="button" v-on:click="close">Abbrechen</button>
            </footer>
        </div>
    </div>
</template>

<script>
    
    export default {
    
        props: ['togle', 'items', 'item'],
    
        data(){
            return {
                selected: 0,
                updated_item: {
                    id: 0,
                    item_id: 0,
                    inventory_id: 0,
                    name: 0,
                    description: 0,
                    value: 0,
                    weight: 0,
                    amount: 0,
                    notes: null,
                }
            }
        },
        watch: {
            item: function(newVal, oldVal) {
                this.updated_item = JSON.parse(JSON.stringify(newVal));
                this.selected = this.updated_item.item_id
            }
        },
        methods: {
            close() {
                this.$emit('close')
            },
        
            changeItem(){
                let item = this.items.find(item => item.id == this.selected)
                this.updated_item.item_id = this.selected
                this.updated_item.name = item.name
                this.updated_item.descripton = item.descripton
                this.updated_item.value = item.value
                this.updated_item.weight = item.weight
            },
        
            updateItem(){
                this.$emit('update', this.updated_item)
            }
        }
        
        
    }

</script>