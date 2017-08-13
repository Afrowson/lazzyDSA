<template>
    <div class="field">
        <label class="label">{{lable}}</label>
        <select class="select" v-model="model">
            <option v-for="selectable in selectables" v-bind:value="selectable.id">
                {{selectable.name}}
            </option>
        </select>
    </div>
</template>

<script>
    
    export default{
        props: ['lable', 'model', 'selectables']
    }

</script>
