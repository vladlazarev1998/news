<script setup>
import {ref} from "vue";
import {usePostStore} from "../../stores/PostStore.js";
import Circle from "../Parts/Circle.vue";
import Post from "../Parts/Post.vue";

const posts = ref([]);

usePostStore.getList().then(res => {
    posts.value = res.data.data;
});

</script>

<template>
    <h1 class="mb-4">News</h1>
    <div v-if="posts.length > 0" class="row">
        <Post
            v-for="post in posts"
            :title="post.title"
            :body="post.body"
            :slug="post.slug"
        />
    </div>
    <div v-else>
        <Circle/>
    </div>
</template>

<style scoped>

</style>
