<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import Navbar from '@/Pages/Admin/Components/Navbar.vue';
import Sidebar from '@/Pages/Admin/Components/Sidebar.vue';


// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})

</script>

<template>
<div class="antialiased bg-gray-50 dark:bg-gray-900">

    <Navbar />
    <Sidebar />
    <main class="p-4 md:ms-64 h-auto pt-32">
        <slot />
    </main>

</div>
</template>
