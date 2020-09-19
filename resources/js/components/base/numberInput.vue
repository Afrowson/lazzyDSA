<template>
    <div class="field">
        <label class="label">{{lable}}</label>
        <div class="control">
            <input class="input" type="number" v-model="selected" :placeholder="placeholder" v-on:change="changevalue">
        </div>
    </div>
</template>

<script>
    
    export default{
        props: ['lable', 'value', 'id', 'placeholder'],
    
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
