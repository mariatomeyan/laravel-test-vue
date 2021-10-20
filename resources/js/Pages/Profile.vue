<template>
    <div class="bg-gray-100">
        <div class="container mx-auto my-5 p-5" v-show="isAuthenticated">
            <div class="md:flex no-wrap md:-mx-2 ">
                <div class="w-full md:w-3/12 md:mx-2">
                    <!-- Profile Card -->
                    <div class="bg-white p-3 border-t-4 border-green-400">
                        <div class="image overflow-hidden">
                            <img class="h-auto w-full mx-auto" src="https://avatars2.githubusercontent.com/u/1490347?s=460&u=39d7a6b9bc030244e2c509119e5f64eabb2b1727&v=4" alt="">
                        </div>
                        <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">Jane Doe</h1>
                        <h3 class="text-gray-600 font-lg text-semibold leading-6">Owner at Her Company Inc.</h3>
                    </div>
                </div>
                <!-- Right Side -->
                <div class="w-full md:w-9/12 mx-2 h-64">
                    <div class="bg-white p-3 shadow-sm rounded-sm">
                        <div class="grid">
                            <div>
                                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                                    <span class="tracking-wide">To Do's</span>
                                </div>
                                <todos :todos="todos"></todos>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Todos from "../Components/Todos";
export default {
    name: "Profile",
    data() {
        return {
            user: 'User',
        }
    },
    mounted() { this.$store.dispatch('todo/getTodos')},
    computed: {
        todos () { return this.$store.getters['todo/todos']},
        profile: function () {
            return this.$store.getters['profile/profile'];
        },
        isAuthenticated: function () {
            return this.$store.getters['auth/isAuth']
        }
    },
    created() {
        this.$store.dispatch('auth/isAuthenticated')
        this.$store.dispatch('profile/getProfile');
    },
    methods: {
    },
    components: {Todos}
}
</script>

<style scoped>

</style>
