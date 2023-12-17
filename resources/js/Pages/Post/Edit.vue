<script>
import {defineComponent} from 'vue'

import {Link} from '@inertiajs/vue3'
import MainLayout from "@/Layouts/MainLayout.vue";
export default defineComponent({
    name: "index",

    layout: MainLayout,

    props: [
        'post'
    ],

    components: {
        Link
    },

    data(){
        return{
            id: this.post.id,
            title: this.post.title,
            content: this.post.content,
        }
    },

    methods: {
        update(){
            this.$inertia.patch(`/posts/${this.id}`,{title: this.title, content: this.content})
        }
    }
})

</script>

<template>

        <h1 class="text-lg text-center">Edit</h1>
        <div class ="mb-8">
            <Link :href="route('post.index')" class="text-sky-500 text-sm text-center">Back</Link>
        </div>
        <form @submit.prevent="update">
            <div class = "mb-4">
                <input v-model="title" class="w-full rounded-full border-gray-300" type="text" placeholder="title">
            </div>
            <div class = "mb-4">
                <textarea v-model="content" class="w-full rounded-full border-gray-300" placeholder = "content"></textarea>
            </div>
            <div>
                <button class="ml-auto transition-colors hover:bg-blue-500 hover:text-white block p-2 w-32 bg-transparent border border-blue-500 rounded-full text-center text-blue-500" type = "submit">Update</button>
            </div>
        </form>

</template>

<style scoped>

</style>
