<template>
    <div class="flex w-full mb-4 p-4 flex-col">
        <div class="flex w-full items-center mb-4">
            <label class="inline-flex items-center text-sm">
                <input type="checkbox"  :checked="todo.is_done"  @input="$emit('triggerStatus', {status: $event.target.checked, todo: todo})" class="form-tick appearance-none h-6 w-6 border border-gray-300 text-purple-50 rounded-md checked:bg-blue-600 checked:border-transparent focus:outline-none">
            </label>
            <span class="ml-2 text-gray-700" v-bind:class="[todo.is_done ? 'italic line-through text-green-600': 'text-gray-500' ]">  {{todo.description}} </span>
            <div class="flex flex-auto justify-items-end justify-end ">
                <BaseButton v-on:click="$emit('delete', todo)"   label="Delete" class="bg-danger text-xs text-indigo-50 hover:bg-red-500"></BaseButton>
            </div>
        </div>
        <div class="flex w-full justify-end">
            <create :placeholder="'leave a comment'"
                    :label="'+'"
                    :overwrite_class="'text-xxs  text-white justify-end bg-purple-200 hover:bg-purple-300'"
                    @onCreate="(comment) => {createComment(comment, todo)}">
            </create>
        </div>
        <div v-if="todo.comments" class="flex w-full justify-end ">
            <comments class="flex flex-col w-full shadow-sm bg-purple-100 rounded-lg h-18 mt-5 p-5"
                      :comments="todo.comments">
            </comments>
        </div>
    </div>
</template>

<script>
import Comments from "./Comments";
import Create from "./Create";
import BaseButton from "./BaseButton";

export default {
    name: "Todo",
    props: {
        todo: {
            type: Object,
            required: true,
            default: () => {}
        }
    },
    methods: {
        createComment(comment, todo) {
            console.log(comment, todo)
            if(todo && todo.comments) {
               this.$store.dispatch('todo/comment', {todo_id: todo.id, comment: comment})
                   .then(res => {
                       todo.comments.push({content:comment})
                       console.log('trd', res)
               })
            }
        }
    },
    components: {Comments, BaseButton, Create}
}
</script>

<style scoped>
.form-tick:checked {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
    border-color: transparent;
    background-color: #3bd099;
    background-size: 100% 100%;
    background-position: 50%;
    background-repeat: no-repeat;
}
</style>
