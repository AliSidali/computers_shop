<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import HeroSection from '@/Components/MyComponents/HeroSection.vue';


defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },

});


</script>

<template>
    <Head title="Welcome" />
    <AuthenticatedLayout>
        <HeroSection />
    </AuthenticatedLayout>
</template>
