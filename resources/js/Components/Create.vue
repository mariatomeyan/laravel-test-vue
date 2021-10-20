<template>
    <div class="flex w-full mt-4">
        <base-input class="w-full" :placeholder="placeholder" @change="(value) => {todo = value}"></base-input>
        <base-button v-on:click="create" :label="label" v-bind:class="overwrite_class"/>
    </div>
</template>

<script>
import BaseInput from "./BaseInput";
import BaseButton from "./BaseButton";

export default {
    name: "",
    props: {
        placeholder: {
            type: String,
            required: false,
            default: '',
        },
        label: {
            type: String,
            required: false,
            default: 'Add'
        },
        overwrite_class: {
            type: String,
            required: false,
            default: ''
        },
    },
    data() {
        return {
            todo: ''
        }
    },
    methods: {
        create() {
            if (this.todo && this.todo !=='') { this.$emit('onCreate', this.todo) }
        }
    },
    components: {BaseInput, BaseButton}
}
</script>

<style scoped>

</style>
