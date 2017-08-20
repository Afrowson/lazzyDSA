<template>
    <div class="field">
        <label class="label">{{lable}}</label>
        <div class="control">
            <select class="select" v-model="selected" v-on:change="changevalue">
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
                selected: this.value
            }
        },
    
        methods: {
            changevalue() {
                this.$emit('changevalue', this.id, this.selected)
            
            }
        }
    }

</script>
