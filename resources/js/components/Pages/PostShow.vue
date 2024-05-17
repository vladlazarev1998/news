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
        <div class="d-flex align-items-center justify-content-between mt-3">
            <h1>{{ post.title }}</h1>
            <button @click="hidePost(post.id)" type="button" class="btn btn-danger">Hide post</button>
        </div>
        <div class="text">
            {{ post.body }}
        </div>
        <div class="date">
            Created: {{ post.created_at }}
        </div>
    </div>
    <div v-else>
        <Circle/>
    </div>

</template>

<style scoped>

</style>
