<template>
    <div class="bg-red-100 text-red-700 px-4 py-3 rounded relative m-5" role="alert">
        <span class="block sm:inline">{{ message }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
  </span>
    </div>
</template>

<script>
export default {
    name: "BaseAlertInfo.vue",
    props: {
        message: {
            type: String,
            required: false
        }
    }
}
</script>

<style scoped>
</style>
