<script setup>
import {useRoute, useRouter} from "vue-router";
import {ref} from "vue";
import {usePostStore} from "../../stores/PostStore.js";
import Circle from "../Parts/Circle.vue";
import notification from "../../notification.js";

const post_slug = useRoute().params.slug;
const post = ref({});
const router = useRouter();

usePostStore.getBySlug(post_slug).then(res => {
    post.value = res.data.data;
}).catch(() => {
    router.push('/');
});

const hidePost = (post_id) => {
    usePostStore.hide(post_id).then(res => {
        notification.success(res.data.message);
        router.push('/');
    });
}

</script>

<template>
    <router-link to="/">
        Back to list
    </router-link>
    <div v-if="post.title">
        <div class="d-flex align-items-center justify-content-between mt-3 mb-3">
            <h1>{{ post.title }}</h1>
            <button @click="hidePost(post.id)" type="button" class="btn btn-dark">Hide post</button>
        </div>
        <div class="text mb-4">
            {{ post.body }}
        </div>
        <div class="date fs-6">
            <span class="fw-bold">Created:</span> <span class="fw-light">{{ post.created_at }}</span>
        </div>
    </div>
    <div v-else>
        <Circle/>
    </div>

</template>

<style scoped>

</style>
