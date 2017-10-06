<template>
    <div class="field">
        <label class="label">{{lable}}</label>
        <div class="select">
            <select v-model="selected" v-on:change="changevalue">
                <option v-for="i in max+1" v-if="i>=min+1">
                    {{i - 1}}
                </option>
            </select>
        </div>
    </div>
</template>

<script>
    
    export default{
        props: ['lable', 'id', 'min', 'max', 'value'],
    
        data(){
            return {
                selected: this.value || this.min
            }
        },
        methods: {
            changevalue() {
            
                this.$emit('changevalue', this.id, Number(this.selected))
            }
        }
    }

</script>
