<template>
    <button class="bg-secondary hover:bg-secondary text-black font-bold py-2 px-4 rounded"
            v-bind="$attrs"
            v-on="$listeners">
        {{label}}
    </button>
</template>

<script>
export default {
    name: "BaseButton",
    props: {
        label: {
            type: String,
            required: false,
            default: ''
        }
    }

}
</script>

<style scoped>

</style>
