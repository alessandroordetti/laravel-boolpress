<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <router-view></router-view>
                <h1>About the user</h1>
            </div>

            <div class="col-12">
                <h3>Vai ai post</h3>

                <router-link class="nav-link" :to="{name: 'posts'}" >Vai ai post </router-link>
            </div>

            <Contact-infos v-for="(post, index) in posts" :key="index" :post="post" />

        </div>
    </div>
</template>

<script>
import ContactInfos from '../components/ContactInfos.vue';
export default {
    name: 'About',

    data() {
        return {
            posts:[],
        }
    },
    
    components: {
        ContactInfos,
    },

            methods: {
            getPosts(page) {
                axios.get('http://localhost:8000/api/posts?page=' + page)
                .then((result)=>{
                    this.posts =result.data.result.data;
                    console.log(this.posts);
                    const {current_page, last_page} = result.data;
                    this.pagination = {currentPage : current_page, lastPage : last_page};
                })
                .catch((error) => {
                    console.warn(error);
                });
            }
        },

        mounted(){
            this.getPosts();
        }
}
</script>

<style>

</style>