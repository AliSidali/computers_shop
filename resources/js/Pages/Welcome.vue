<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { useUserStore } from '@/stores/toggleSidebar';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';


const user = useUserStore();
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

    </AuthenticatedLayout>
</template>
