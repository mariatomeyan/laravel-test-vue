<template>
    <div v-bind:class="{ 'bg-white': isSectionOpen('classic-cars')}"
         class="px-2 header transform ease-in duration-150 lg:hover:bg-primary-dark lg:hover:inner-shadow cursor-pointer"
    >
        <a role="menuitem"  class="text-white flex outline-none antialiased whitespace-nowrap items-center lg:pt-1 lg:w-full lg:h-full hover:no-underline "
           v-bind="$attrs">
           <slot></slot>
        </a>

    </div>
</template>

<script>
export default {
    name: "NavBarMenuItem",
    inheritAttrs: false,
    methods: {
        isSectionOpen() {
            console.log('log car')
        }
    }
}
</script>

<style scoped>

</style>
