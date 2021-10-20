<template>
    <nav-bar inline-template section="">
        <nav id="branding" class="shadow-sm w-full relative">
            <div class="bg-primary">
                <div role="menu" class="w-full flex justify-between lg:justify-start items-center border-b-8 border-secondary h-20">
                    <div role="none" class="hidden w-full lg:flex h-full justify-between w-4/5 text-white antialiased font-bold text-lg">
                        <div role="none" class="flex h-full justify-start pl-6">
                            <NavBarMenuItem href="/"> To Do </NavBarMenuItem>
                        </div>
                        <div role="none" class="flex h-full justify-end pl-6">
<!--                            todo move it to array and render with loop-->
                            <NavBarMenuItem  v-show="isAuth" class="text-secondary" href="/profile"> My Account </NavBarMenuItem>
                            <NavBarMenuItem  v-show="!isAuth" class="text-secondary" href="/login"> Sign in </NavBarMenuItem>
                        </div>
                    </div>

                    <div  role="none" class="flex items-center lg:hidden justify-end text-white">
                        <a class="text-white w-10 h-10 mr-4 p-2 focus:outline-none focus:inner-shadow focus:bg-primary-dark rounded" href="/classic_cars.php" title="Search thousands of classic cars or specialists vehicles for sale" role="link">
                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="search" class="svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M508.5 481.6l-129-129c-2.3-2.3-5.3-3.5-8.5-3.5h-10.3C395 312 416 262.5 416 208 416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c54.5 0 104-21 141.1-55.2V371c0 3.2 1.3 6.2 3.5 8.5l129 129c4.7 4.7 12.3 4.7 17 0l9.9-9.9c4.7-4.7 4.7-12.3 0-17zM208 384c-97.3 0-176-78.7-176-176S110.7 32 208 32s176 78.7 176 176-78.7 176-176 176z"></path></svg>
                        </a>
                        <button id="mobile-menu-button" title="Open Mobile Menu" class="w-10 h-10 p-2 -mt-1 focus:outline-none focus:inner-shadow focus:bg-primary-dark rounded" v-on:click="menuOpen = !menuOpen" aria-haspopup="true" aria-label="Open Menu" aria-controls="mobile-menu">
                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path></svg>
                        </button>
                    </div>
                </div>
                <transition v-show="isAuth" name="slide">
                    <div v-show="isAuth"  class="flex flex-col justify-start bg-white hidden lg:flex antialiased " >
                        <div class="flex flex-col lg:flex-row  justify-end ">
                            <div
                                class="mt-3 lg:mt-0 lg:hover:bg-gray-200 border-b-2 border-gray-300 border-opacity-0 lg:hover:border-opacity-100 cursor-pointer"
                            >
                                <button  v-on:click="logout()"   class="antialiased whitespace-nowrap text-base text-gray-600 font-display lg:px-6 font-semibold normal-case items-center h-full w-full lg:hover:bg-gray-200 border-0 border-b-2 border-transparent lg:hover:border-gray-300">
                                    Logout
                                </button>
                            </div>
                        </div>
                    </div>

                </transition>
            </div>
        </nav>
    </nav-bar>
</template>
<script>

import Logo from './Logo.vue'
import NavBarMenuItem from "./NavBarMenuItem";
export default {
    mounted() {
        if (typeof this.$attrs.section !== "undefined" && this.$attrs.section.length > 0) {
            this.section = this.$attrs.section;
        }
    },
    data: function() {
        return {
            menuOpen: false,
            section: ''
        }
    },
    computed: {
        isAuth: function() {
            return this.$store.getters['auth/isAuth']
        }
    },
    methods: {
        toggleSection(section) {
            if (this.section === section) {
                this.section = '';
            } else {
                this.section = section;
            }
        },
        isSectionOpen(section) {
            if (section.length > 1) {
                return section === this.section;
            }
            return false;
        },
        logout() {
            this.$store.dispatch('auth/logout').then(res => {
                this.$store.dispatch('profile/getProfile')
            })
            this.menuOpen = false
            this.$router.push('login')
        }
    },
    components: {
        Logo, NavBarMenuItem
    }
}
</script>
