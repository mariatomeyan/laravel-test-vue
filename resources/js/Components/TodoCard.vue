<template>
   <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-4/4 lg:max-w-lg">
     <div class="mb-4">
          <h1 class="text-gray-800 font-extrabold">Todo List</h1>
          <multi-select @selected="selectedCategory" :options="categories" :placeholder="'select a category'" class="mt-2"></multi-select>
          <create :placeholder="'Add Todo'" @onCreate="createTodo"></create>
      </div>
      <todos :todos="todos" @onDone="markTodoDone(todo)" @onDelete="deleteTodo(todo)" @onUnDo="unDoTodo(todo)"></todos>
  </div>
</template>
<script>

import Create from "./Create";
import Todos from "./Todos";
import MultiSelect from "./MultiSelect";

export default {
    name: "TodoCard",
    data () {
        return {
            category:''
        }
    },
    mounted() {
        this.$store.dispatch('todo/getTodos')
    },
    computed: {
        categories() { return this.$store.getters['category/categories']},
        todos() { return this.$store.getters['todo/todos'] }
    },
    methods: {
        selectedCategory(category) {
            this.category = category
        },
        createTodo(todo) {
            console.log('this.category', this.category)
            this.$store.dispatch('todo/create', {
                title: todo,
                description: todo,
                is_done: false,
                is_public: false,
                category_id: this.category
            }).then(res => {
                console.log('result for create todo', res)
            })
        },
        deleteTodo(todo) {},
        markTodoDone(todo) {},
        unDoTodo(todo) {}
    },
    components: {Todos, Create, MultiSelect}
}

</script>

<style scoped>

</style>
