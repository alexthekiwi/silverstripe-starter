<template>
    <p class="font-bold text-2xl">{{ welcomeText }}</p>
</template>

<script>
export default {
    name: "Example",
    props: {
        welcomeText: {
            type: String,
            default: ''
        },
    },
}
</script>

<style scoped>
</style>
