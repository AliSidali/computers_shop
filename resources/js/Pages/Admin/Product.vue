<script setup>
import ProductList from './Components/ProductList.vue';
import AdminLayout from './Layouts/AdminLayout.vue';

const props = defineProps({
    products:Object
})
</script>

<template>
    <AdminLayout>
        <ProductList :products="products" />
    </AdminLayout>
</template>
