<template>
    <div>
        <todo class="shadow-sm bg-purple-50 rounded-lg h-18" v-for="(todo, index) in todos"
              :todo="todo"
              :key="index"
              @triggerStatus="updateToDoStatus"
              @delete="deleteTodo">
        </todo>
    </div>
</template>

<script>
import Todo from "./Todo";
export default {
    name: "Todos",
    props: {
       todos: {
           type: Array,
           required: true,
           default: () => []
       }
    },
    methods: {
        updateToDoStatus (data) {
            data.todo && (data.todo.is_done = data.status)
             //todo update status with server side of todo
        },
        deleteTodo(todo) {
            this.todos.pop()
            console.log(todo)
            //todo update witrh server side
        }
    },
    components: {Todo}
}
</script>

<style scoped>

</style>
