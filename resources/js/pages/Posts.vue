<template>
    <div class="container">
    
        <div class="row">

            <div class="col-12">
                <h1>
                    Gli ultimi post
                </h1>
            </div>

            <div class="col-12">
                <router-link class="nav-link" :to="{name: 'about'}" >About the user </router-link>
            </div>



            <Post v-for="(post, index) in posts" :key="index" :post="post" class="mb-5"/>

            
<!--             <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item" v-if= "pagination.currentPage > 1" @click="getPosts(pagination.current_page -1)">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link">{{pagination.current_page}}</a>
                    </li>
                    <li class="page-item" v-if= "pagination.currentPage < pagination.lastPage" @click="getPosts(pagination.current_page +1)">
                        <a class="page-link">Next</a>
                    </li>
                </ul>
            </nav> -->

        </div>
    </div>
</template>

<script>
    import Post from '../components/Post.vue';
    export default {
        name: "PostList",

        components: {
            Post,
        },

        data() {
            return {
                posts:[],
                pagination:{},
            }
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

        created(){
            this.getPosts();
        }
        
    }
</script>

<style scoped>
    div {
        color:black;
    }

    .pagination {
        height: 100px;
    }
</style>