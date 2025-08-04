<script setup>
import { computed, ref, watch } from 'vue'
import {
  TransitionRoot,
  TransitionChild,
  Dialog,
  DialogPanel,
  DialogTitle,
} from '@headlessui/vue'
import { XMarkIcon } from '@heroicons/vue/24/solid'
import {  ExclamationTriangleIcon } from '@heroicons/vue/24/outline'
import { useForm, usePage } from '@inertiajs/vue3'

import { Toast } from '@/helpers';
const props = defineProps({
    modelValue:Boolean,
    categories:Array,
    brands:Array,
    success:String,
    product:Object
})

const page = usePage().props;
const translations = page.translations;

const emit = defineEmits(['update:modelValue'])

const isOpen = ref(false)


watch(()=>props.modelValue, ()=>{
    isOpen.value = props.modelValue
})


const form = useForm({
   title :  "",
    category_id : "",
    brand_id : "",
    quantity : 0,
    price : 0,
    description : "",
});

watch(()=>props.product, (newProduct)=>{
     form.title = newProduct?.title??"" ;
     form.category_id = newProduct?.category_id??"";
     form.brand_id = newProduct?.brand_id??"";
     form.quantity = newProduct?.quantity??0;
     form.price = newProduct?.price??0;
     form.description = newProduct?.description;
})






function closeModal() {
  isOpen.value = false
  form.errors = [];
  emit('update:modelValue', isOpen.value)
}

function submit(){

    if(!props.product?.id){
        form.post(route('admin.product.store'), {
            onSuccess:()=>{
                Toast.fire({
                icon: "success",
                title: props.success
                });
                closeModal();
            }
        })
    }else{
        form.patch(route('admin.product.update', props.product.id), {
            onSuccess:()=>{


                Toast.fire({
                icon: "success",
                title: props.success
                });
                closeModal();
            }
        })
    }

}
</script>

<template>

  <TransitionRoot appear :show="isOpen" as="template">
    <Dialog as="div" @close="closeModal" class="relative z-30">
      <TransitionChild
        as="template"
        enter="duration-300 ease-out"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="duration-200 ease-in"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <div class="fixed inset-0 bg-black/25" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div
          class="flex min-h-full items-center justify-center p-4 text-center"
        >
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <DialogPanel
              class="w-full max-w-3xl transform overflow-hidden rounded-2xl bg-white p-6 text-left align-middle shadow-xl transition-all"
            >
              <DialogTitle
                as="h3"
                class="flex justify-between items-center text-lg font-medium leading-6 text-gray-900"
              >
                    <h3>Add Product</h3>
                    <XMarkIcon @click="closeModal" class="w-7 rounded-full p-1 cursor-pointer hover:bg-gray-100" />
              </DialogTitle>
              <!-- Modal toggle -->
            <form  @submit.prevent="submit">
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" v-model="form.title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  >
                        <div v-if="form.errors.title " class="flex text-red-700 gap-2">
                            <ExclamationTriangleIcon class="w-5" />
                            <span>{{ form.errors.title }}</span>
                        </div>
                    </div>
                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select  v-model="form.category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" >
                            <option  value=""  selected disabled>Select category</option>
                            <option v-for="(category, index) in categories" :key="index" :value="category.id" >{{ category.name }}{{ form.category_id }}</option>
                        </select>
                          <div v-if="form.errors.category_id " class="flex text-red-700 gap-2">
                              <ExclamationTriangleIcon class="w-5" />
                            <span>{{ form.errors.category_id }}</span>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                        <select v-model="form.brand_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="" disabled selected>Select brand</option>
                            <option v-for="(brand, index) in brands" :key="index" :value="brand.id">{{ brand.name }}</option>
                        </select>
                        <div v-if="form.errors.brand_id " class="flex text-red-700 gap-2">
                            <ExclamationTriangleIcon class="w-5" />
                            <span>{{ form.errors.brand_id }}</span>
                        </div>
                    </div>
                    <div>
                        <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                        <input type="number"   v-model="form.quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  >
                         <div v-if="form.errors.quantity " class="flex text-red-700 gap-2">
                              <ExclamationTriangleIcon class="w-5" />
                            <span>{{ form.errors.quantity }}</span>
                        </div>
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="number" step="0.01" v-model="form.price"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  >
                        <div v-if="form.errors.price " class="flex text-red-700 gap-2">
                            <ExclamationTriangleIcon class="w-5" />
                            <span>{{ form.errors.price }}</span>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea v-model="form.description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write product description here"></textarea>
                        <div v-if="form.errors.description " class="flex text-red-700 gap-2">
                            <ExclamationTriangleIcon class="w-5" />
                            <span>{{ form.errors.description }}</span>
                        </div>
                    </div>
                </div>
                <div class="w-full flex justify-end">
                    <button type="submit" class=" text-white inline-flex items-center bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        Add new product
                    </button>
                </div>
            </form>

            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</template>



