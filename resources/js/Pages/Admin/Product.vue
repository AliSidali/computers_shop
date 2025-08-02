<script setup>
import { ref } from 'vue';
import ProductList from './Components/ProductList.vue';
import ProductModal from './Components/ProductModal.vue';
import AdminLayout from './Layouts/AdminLayout.vue';

const props = defineProps({
    products:Object,
    categories:Array,
    brands:Array
})

const isProductModalOpen = ref(false);

const openProductModal = ()=>{

    isProductModalOpen.value = true;
}


</script>

<template>
    <AdminLayout>
        <ProductList :products="products" @onProductModalOpen="openProductModal" />
        <ProductModal v-model="isProductModalOpen"  :categories="categories" :brands="brands" />
    </AdminLayout>
</template>
