<template>
    <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-4/4 lg:max-w-lg flex flex-col align-self-start">
        <div class="mb-4 ">
            <h1 class="text-gray-800 font-extrabold">Categories</h1>
            <create :placeholder="'Create category'" @onCreate="createCategory"></create>
        </div>
         <category v-for="(category, index) in categories" @delete="deleteCategory(category)" :key="index" :category="category"/>
    </div>
</template>
<script>

import Create from "./Create";
import Category from "./Category";

export default {
    name: "CategoryCreate",
    data () {
        return {

        }
    },
    mounted() {
        this.$store.dispatch('category/get')
    },
    computed: {
        categories () {
            return this.$store.getters['category/categories']
        },
    },
    methods: {
        createCategory(category) {
            this.$store.dispatch('category/create', {
                label: category,
            }).then(res => {console.log('category is created', res)})
        },
        deleteCategory(category) {
            this.categories.pop()
        },
        markTodoDone(category) {},
    },
    components: {Category, Create}
}

</script>

<style scoped>
.align-self-start {
    align-self: start;
}
</style>
