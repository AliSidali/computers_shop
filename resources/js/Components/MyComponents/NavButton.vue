<template>
    <button
        type="button"
        class="flex gap-1 relative after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-0.5 after:bg-gray-900 after:w-0 after:transition-all after:duration-150 hover:after:w-full uppercase font-semibold  px-3 py-2 text-gray-700 font-lora   hover:text-black/70  dark:text-white dark:hover:text-white/80 "
    >
        <slot />
    </button>
</template>
