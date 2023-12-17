<script>
import {defineComponent} from 'vue'

import {Link} from '@inertiajs/vue3'
import MainLayout from "@/Layouts/MainLayout.vue";
export default defineComponent({
    name: "index",

    layout: MainLayout,

    props: [
        'posts'
    ],

    components: {
        Link,
        MainLayout
    },

    methods: {
        deletePost(id){
            this.$inertia.delete(`/posts/${id}`)
        }
    }
})

</script>

<template>

        <h1 class="text-lg mb-8">Posts</h1>
        <div class="flex items-center justify-center">
            <Link :href = "route('post.create')" class="transition-colors hover:bg-blue-500 hover:text-white block p-2 w-32 bg-transparent border border-blue-500 rounded-full text-center text-blue-500">Add Post</Link>
        </div>
        <div v-if="posts">
            <div class="mt-4 pt-8 border-t border-gray-300" v-for = "post in posts">

                <div>id:{{post.id}}</div>
                <div>title:{{post.title}}</div>
                <div>content:{{post.content}}</div>
                <div class = "text-sm text-right">{{post.date}}</div>
                <div class = "text-sm text-right">
                    <Link class="text-sky-500" :href="route('post.show',post.id)">Show</Link>
                </div>
                <div class = "text-sm text-right">
                    <Link class="text-sky-500" :href="route('post.edit',post.id)">Edit</Link>
                </div>

                <div class = "text-sm text-right">
                    <p @click="deletePost(post.id)" class=" cursor-pointer text-red-500">Delete</p>
                </div>
            </div>
        </div>

</template>

<style scoped>

</style>
