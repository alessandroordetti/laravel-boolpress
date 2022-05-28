<template>
    <div class="container-fluid">
        <PostList />
    </div>
</template>

<script>
    import PostList from '../components/PostList.vue';
    export default {
        name: "App",

        components: {
            PostList,
        }
        
    }
</script>

<style scoped>
    div {
        color:black;
    }
</style>