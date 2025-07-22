<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        require: true
    }

});

const classes =computed(()=>{
    return "flex relative after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-0.5 after:bg-gray-900 after:w-0 after:transition-all after:duration-150 hover:after:w-full uppercase font-semibold rounded-md px-3 py-2  text-gray-700 font-lora   transition   hover:text-black/70  dark:text-white dark:hover:text-white/80";
})

</script>

<template>
    <Link v-if="href" :href="href" :class="classes">
        <slot />
    </Link>
</template>
