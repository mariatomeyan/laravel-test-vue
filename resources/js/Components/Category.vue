<template>
    <div>
        <div class="flex w-full items-center mb-4">
            <span class="ml-2 text-gray-700 text-gray-500">  {{category.label}} </span>
            <div class="flex flex-auto justify-items-end justify-end ">
                <BaseButton v-on:click="$emit('delete', category)"   label="Delete" class="bg-danger text-xs text-indigo-50 hover:bg-red-500"></BaseButton>
            </div>
        </div>
    </div>
</template>
<script>
import BaseButton from "./BaseButton";
export default {
    name: "Category",
    props: {
        category: {
            type: Object,
            required: true,
            default: ''
        }
    },
    components: {BaseButton}
}
</script>

<style scoped>

</style>
