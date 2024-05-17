<script setup>

</script>

<template>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <router-link to="/" class="navbar-brand">
                    Home
                </router-link>
            </div>
        </nav>
    </header>
    <div class="container mt-5">
        <router-view></router-view>
    </div>
    <notifications/>
</template>

<style scoped>

</style>
