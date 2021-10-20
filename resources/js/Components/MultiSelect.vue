<template>
    <div v-if="options && options.length">
        <label :for="name">Choose category:</label>
        <select name="" @change="$emit('selected', category)" v-model="category" :id="name" aria-placeholder="Select Category">
            <option v-if="placeholder && placeholder!=''" disabled selected value> {{ placeholder }} </option>
            <option v-for="(option, index) in options" :key="index" :value="option.id">{{option.label}}</option>
        </select>
    </div>
</template>

<script>
export default {
    name: "MultiSelect",
    props: {
        name: {
            type: String,
            required: false,
            default: ''
        },
        options: {
            type: Array,
            required: true,
            default: () => []
        },
        placeholder: {
            type: String,
            required: false,
            default: ''
        }
    },
    data () {
        return {
            category: ''
        }
    }
}
</script>

<style scoped>

</style>
