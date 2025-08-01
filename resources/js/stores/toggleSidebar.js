import { defineStore } from "pinia";

export const useSidebarStore = defineStore('', {
    state:()=>({
        isOpen: false
    }),
    actions:{
        toggleDrawer(){
            this.isOpen = !this.isOpen;
        }
    }
})
