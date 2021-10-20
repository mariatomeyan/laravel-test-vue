<template>
    <div class="grid  mr-2">
        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{label}}</label>
        <input class="py-2 px-3 rounded-lg border-2 border-secondary-dark mt-1 focus:outline-none focus:ring-2 focus:ring-secondary-dark focus:border-transparent"
               v-bind="$attrs"
               @input="$emit('change', $event.target.value)"
        />
    </div>
</template>

<script>
export default {
    name: "BaseInput",
    inheritAttrs: false,
    props: {
        label: {
            type: String,
            required: false,
            default: ""
        }
    }
}
</script>

<style scoped>

</style>
