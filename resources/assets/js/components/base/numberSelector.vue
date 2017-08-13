<template>
    <div class="field">
        <label class="label">{{lable}}</label>
        <div class="control">
            <select class="select" v-model="model">
                <option v-for="i in max" v-if="i>=min">
                    {{i}}
                </option>
            </select>
        </div>
    </div>
</template>

<script>
    
    export default{
        props: ['lable', 'model', 'min', 'max']
    }

</script>
