<template>
    <div class="field">
        <label class="label">{{lable}}</label>
        <div class="select">
            <select v-model="selected" v-on:change="changevalue">
                <option v-for="selectable in selectables" v-bind:value="selectable.id" v-on:select="changevalue">
                    {{selectable.name}}
                </option>
            </select>
        </div>
    </div>
</template>

<script>
    
    export default{
        props: ['lable', 'id', 'value', 'selectables'],
    
        data(){
            return {
                selected: this.value || this.selectables[0]
            }
        },
    
        methods: {
            changevalue() {
                this.$emit('changevalue', this.id, this.selected)
            
            }
        }
    }

</script>
