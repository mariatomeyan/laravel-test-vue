<template>
    <div class="container mx-auto max-w-sm   flex flex-col space-y-4 justify-center items-center">
        <div v-show="user" class="bg-white w-full flex items-center p-2 rounded-xl shadow border">
            <div class="relative flex items-center space-x-4">
                <img src="https://avatars2.githubusercontent.com/u/1490347?s=460&u=39d7a6b9bc030244e2c509119e5f64eabb2b1727&v=4" alt="My profile" class="w-16 h-16 rounded-full">
            </div>
            <div class="flex-grow p-3">
                <div class="font-semibold text-gray-700">
                    {{ user && user.name }}
                </div>
                <div class="text-sm text-gray-500 overflow-hidden truncate w-40">
                    {{ user && user.display_name}}
                </div>
            </div>
            <div class="p-2">
                <router-link  to="/profile" class="block h-5 w-5 bottom-0 right-0" >
                    <svg xmlns="http://www.w3.org/2000/svg" className="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ProfileCard",
    props: {
        user: {
            type: Object,
            required: true,
            default: () => {}
        }
    }
}
</script>

<style scoped>

</style>
