<template>
     <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans ">
         <category-create></category-create>
         <todo-card></todo-card>
         <p v-show="!user"> Unauthenticated User </p>
     </div>
</template>
<script>
import ProfileCard from "../Components/ProfileCard";
import CategoryCreate from "../Components/CategoryCreate";
import "tailwindcss/dist/tailwind.css";
import TodoCard from "../Components/TodoCard";

export default {
    name: "Home",
    computed: {
        user: function() {
           return this.$store.getters['profile/profile']
        }
    },
    created () {
        this.$store.dispatch('profile/getProfile')
    },
    components: {ProfileCard, TodoCard, CategoryCreate}

}
</script>

<style lang="css" scoped>

</style>
