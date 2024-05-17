<template>
    <svg v-bind:style="styles" class="spinner spinner--circle" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
        <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
    </svg>
</template>
<script setup>

import {reactive} from "vue";

const props = defineProps({
    size: {
        default: '40px'
    }
});

const styles = reactive({
    width: props.size,
    height: props.size
});

</script>
<style>

.spinner {
    animation: circle-rotator 1.4s linear infinite;
}

@keyframes circle-rotator {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(270deg); }
}

.path {
    stroke-dasharray: 187;
    stroke-dashoffset: 0;
    transform-origin: center;
    animation:
        circle-dash 1.4s ease-in-out infinite,
        circle-colors 5.6s ease-in-out infinite;
}

@keyframes circle-colors {
    0% {
        stroke: #35495e;
    }
    25% {
        stroke: #DE3E35;
    }
    50% {
        stroke: #F7C223;
    }
    75% {
        stroke: #41b883;
    }
    100% {
        stroke: #35495e;
    }
}

@keyframes circle-dash {
    0% {
        stroke-dashoffset: 187;
    }
    50% {
        stroke-dashoffset: 46.75;
        transform:rotate(135deg);
    }
    100% {
        stroke-dashoffset: 187;
        transform:rotate(450deg);
    }
}
</style>
