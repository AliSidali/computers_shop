<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import NavLink from '@/Components/NavLink.vue';
import LogoLink from '@/Components/MyComponents/LogoLink.vue';
import NavButton from '@/Components/MyComponents/NavButton.vue';
import { Link, usePage } from '@inertiajs/vue3';
import {ChevronDownIcon} from '@heroicons/vue/24/solid';

const showingNavigationDropdown = ref(false);
const page = usePage();

const {user} = page.props.auth;
const translations = page.props.translations;


const props = defineProps({
     canLogin: {
        type: Boolean,
        default:false,
    },
    canRegister: {
        type: Boolean,
    }
})

const showLanguages = ref(false);
</script>
<template>

    <nav
                class="border-b border-gray-100 bg-white dark:border-gray-700 dark:bg-gray-800"
            >
                <!-- Primary Navigation Menu -->
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center h-16 justify-between">
                        <div>
                        <!-- Logo -->
                        <!-- :active="route().current('dashboard')" -->
                            <LogoLink
                                :href="route('welcome')"
                            >
                                COMPUTERSHOP
                            </LogoLink>
                        </div>

                        <div class="hidden md:ms-6 md:flex md:items-center">
                            <!-- Settings Dropdown -->
                            <div class="flex items-center relative ms-3">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="flex items-center rounded-md">
                                            <NavButton>
                                                {{ translations.language }}

                                                <ChevronDownIcon class="w-4" />
                                            </NavButton>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink
                                            :href="route('language', 'ar')"
                                        >
                                        <div class="flex items-center justify-between">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6"  viewBox="0 0 32 32"><path d="M19,4h12V28h-12c-2.208,0-4-1.792-4-4V8c0-2.208,1.792-4,4-4Z" transform="rotate(180 23 16)" fill="#fff"></path><path d="M5,4h11V28H5c-2.208,0-4-1.792-4-4V8c0-2.208,1.792-4,4-4Z" fill="#2b6536"></path><path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path><path fill="#c22b38" d="M19.091 17.427L20.769 19.737 20.769 16.882 23.483 16 20.769 15.118 20.769 12.263 19.091 14.573 16.376 13.691 18.054 16 16.376 18.309 19.091 17.427z"></path><path d="M14.345,20.907c-2.71-2.17-3.148-6.126-.978-8.836,2.17-2.71,6.126-3.148,8.836-.978,.361,.289,.689,.617,.978,.978-2.17-3.758-6.976-5.046-10.734-2.876-3.758,2.17-5.046,6.976-2.876,10.734,2.17,3.758,6.976,5.046,10.734,2.876,1.195-.69,2.187-1.682,2.876-2.876-2.17,2.71-6.126,3.148-8.836,.978Z" fill="#c22b38"></path><path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path></svg>
                                            <span>العربية</span>
                                        </div>

                                        </DropdownLink>
                                        <DropdownLink
                                            :href="route('language', 'fr')"
                                        >
                                            <div class="flex items-center justify-between gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 32 32"><path fill="#fff" d="M10 4H22V28H10z"></path><path d="M5,4h6V28H5c-2.208,0-4-1.792-4-4V8c0-2.208,1.792-4,4-4Z" fill="#092050"></path><path d="M25,4h6V28h-6c-2.208,0-4-1.792-4-4V8c0-2.208,1.792-4,4-4Z" transform="rotate(180 26 16)" fill="#be2a2c"></path><path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path><path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path></svg>
                                                <span>Français</span>
                                            </div>
                                        </DropdownLink>

                                    </template>
                                </Dropdown>
                                <template v-if="user">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                            <span class="flex items-center rounded-md">
                                                <NavButton
                                                    type="button"
                                                    class="lowercase"
                                                >
                                                    {{ $page.props.auth.user.name }}

                                                    <ChevronDownIcon class="w-4" />
                                                </NavButton>
                                            </span>
                                        </template>

                                        <template #content>
                                            <DropdownLink
                                                :href="route('profile.edit')"
                                            >
                                                Profile
                                            </DropdownLink>
                                            <DropdownLink
                                                :href="route('logout')"
                                                method="post"
                                                as="button"
                                            >
                                                Log Out
                                            </DropdownLink>
                                        </template>
                                    </Dropdown>
                                </template>
                                <template v-else>
                                    <NavLink
                                        :href="route('login')"
                                        class="rounded-md  text-gray-700 font-lora ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        {{ translations.login }}
                                    </NavLink>

                                    <NavLink
                                        :href="route('register')"
                                        class="rounded-md   text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        {{ translations.register }}
                                    </NavLink>
                                </template>


                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-me-2 flex items-center md:hidden">
                            <button
                                @click="
                                    showingNavigationDropdown =
                                        !showingNavigationDropdown
                                "
                                class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none dark:text-gray-500 dark:hover:bg-gray-900 dark:hover:text-gray-400 dark:focus:bg-gray-900 dark:focus:text-gray-400"
                            >
                                <svg
                                    class="h-6 w-6"
                                    stroke="currentColor"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex':
                                                !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex':
                                                showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div
                    :class="{
                        block: showingNavigationDropdown,
                        hidden: !showingNavigationDropdown,
                    }"
                    class="md:hidden"
                >


                    <!-- Responsive Settings Options -->
                    <div
                        class="border-t border-gray-200 pb-1 pt-4 dark:border-gray-600"
                        v-if="isLogged"
                    >
                        <div class="px-4">
                            <div
                                class="text-base font-medium text-gray-800 dark:text-gray-200"
                            >
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="text-sm font-medium text-gray-500">
                                {{ $page.props.auth.user.email }}
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink :href="route('profile.edit')">
                                Profile
                            </ResponsiveNavLink>
                            <ResponsiveNavLink
                                :href="route('logout')"
                                method="post"
                                as="button"
                            >
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                    <div v-else>
                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink class="capitalize" :href="route('register')">
                                {{ translations.register }}
                            </ResponsiveNavLink>
                            <ResponsiveNavLink
                                class="capitalize"
                                :href="route('login')"
                            >
                                {{ translations.login }}
                            </ResponsiveNavLink>
                            <div>
                                <button
                                    class="capitalize flex justify-between 'block w-full ps-3 pe-4 py-2 border-s-4 border-transparent text-start text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out"
                                    @click="showLanguages=!showLanguages"
                                >
                                    {{ translations.language }}
                                    <ChevronDownIcon class="w-5 transition duration-500" :class="{'rotate-180': showLanguages}"/>
                                </button>
                                <div v-if="showLanguages">
                                    <ResponsiveNavLink
                                        class="capitalize ms-4 text-sm"
                                        :href="route('language', 'ar')"

                                    >
                                    <div class="inline-flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32"><path d="M19,4h12V28h-12c-2.208,0-4-1.792-4-4V8c0-2.208,1.792-4,4-4Z" transform="rotate(180 23 16)" fill="#fff"></path><path d="M5,4h11V28H5c-2.208,0-4-1.792-4-4V8c0-2.208,1.792-4,4-4Z" fill="#2b6536"></path><path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path><path fill="#c22b38" d="M19.091 17.427L20.769 19.737 20.769 16.882 23.483 16 20.769 15.118 20.769 12.263 19.091 14.573 16.376 13.691 18.054 16 16.376 18.309 19.091 17.427z"></path><path d="M14.345,20.907c-2.71-2.17-3.148-6.126-.978-8.836,2.17-2.71,6.126-3.148,8.836-.978,.361,.289,.689,.617,.978,.978-2.17-3.758-6.976-5.046-10.734-2.876-3.758,2.17-5.046,6.976-2.876,10.734,2.17,3.758,6.976,5.046,10.734,2.876,1.195-.69,2.187-1.682,2.876-2.876-2.17,2.71-6.126,3.148-8.836,.978Z" fill="#c22b38"></path><path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path></svg>
                                        العربية
                                    </div>
                                    </ResponsiveNavLink>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </nav>
</template>
