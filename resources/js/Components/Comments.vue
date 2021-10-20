<template>
    <div v-if="comments && comments.length">
        <span class="flex flex-col-reverse divide-y divide-y-reverse divide-rose-400 m-1">Comments</span>
        <ul>
            <li v-for="(comment, index) in comments" class="text-sm italic flex
             flex-col w-full shadow-sm bg-purple-200 rounded-lg h-18 p-3 m-2">
                {{comment.content}}
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    name: "Comments",
    props: {
        comments: {
            type: Array,
            required: true,
            default: () => []
        }
    }
}
</script>
<style scoped>
</style>
