<script setup>
import {useRoute} from "vue-router";

const post_slug = useRoute().params.slug;
</script>

<template>
{{ post_slug }}
</template>

<style scoped>

</style>
