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

const isLogged = page.props.isLogged;
const getLocale = page.props.getLocale;
const translations = page.props.translations;
const languages = page.props.languages;


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
    <div>
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <nav
                class="border-b border-gray-100 bg-white dark:border-gray-700 dark:bg-gray-800"
            >
                <!-- Primary Navigation Menu -->
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 justify-between">
                        <div class="flex">

                            <!-- Logo -->
                            <div
                                class="ms-10 flex"
                            >
                            <!-- :active="route().current('dashboard')" -->
                                <LogoLink
                                    :href="route('dashboard')"
                                >
                                    COMPUTERSHOP
                                </LogoLink>
                            </div>
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
                                            v-for="(lang, key) in languages" :key="key"
                                            :href="route('language', key)"
                                        >
                                            {{lang}}
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                                <template v-if="isLogged">
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
                                        class="relative after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-0.5 after:bg-gray-900 after:w-0 after:transition-all after:duration-150 hover:after:w-full uppercase font-semibold rounded-md px-3 py-2 text-gray-700 font-lora ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        {{ translations.login }}
                                    </NavLink>

                                    <NavLink
                                        :href="route('register')"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
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
                                        v-for="(lang, key) in languages" :key="key"
                                        class="capitalize ms-4 text-sm"
                                        :href="route('language', key)"

                                    >
                                        {{ lang }}
                                    </ResponsiveNavLink>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header
                class="bg-white shadow dark:bg-gray-800"
                v-if="$slots.header"
            >
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
