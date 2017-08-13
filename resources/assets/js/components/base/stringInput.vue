<template>
    <div class="field">
        <label class="label">{{lable}}</label>
        <div class="control">
            <input class="input" type="text" v-model="model" :placeholder="placeholder">
        </div>
    </div>
</template>

<script>
    
    export default{
        props: ['lable', 'model', 'placeholder']
    }

</script>
