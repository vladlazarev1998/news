<script setup>
defineProps({
    title: {
        required: true,
        type: String
    },
    slug: {
        required: true,
        type: String
    },
    body: {
        required: true,
        type: String
    }
});
</script>

<template>
    <div class="col-sm-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <router-link :to="'/' + slug">
                    <h5 class="card-title">{{ title }}</h5>
                </router-link>
                <p class="card-text">{{ body }}</p>
                <router-link :to="'/' + slug" class="btn btn-primary">
                    Read more
                </router-link>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
