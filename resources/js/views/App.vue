<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <Header />
                <Main />
            </div>
        </div>
    </div>
</template>

<script>
    import Header from '../components/Header.vue';
    import Main from '../components/Main.vue';

    export default {
        name: "App",

        components: {
            Header,
            Main
        }
        
    }
</script>

<style scoped>
    div {
        color:black;
    }
</style>