<template>
    <div class="row">
        <div class="col-12 text-center">
            <h1>
                Gli Ultimi Post
            </h1>
        </div>


        <Post v-for="(post, index) in posts" :key="index" :post="post"/>


<!--         <nav aria-label="Page navigation">
            <ul class="pagination">

                <li class="page-item" v-if="pagination.currenPage > 1" @click="pagination.currenPage-1">
                    <a class="page-link" >Previous</a>
                </li>

                <li class="page-item">
                    <a class="page-link" >{{pagination.currentPage}}</a>
                </li>

                <li class="page-item" v-if="pagination.currenPage < pagination.lastPage" @click="pagination.currenPage+1">
                    <a class="page-link">Next</a>
                </li>

            </ul>
        </nav> -->
        
        <nav aria-label="Page navigation ">
            <ul class="pagination">

                <li class="page-item" v-if="pagination.currenPage > 1" @click="pagination.currenPage-1">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
                </li>

                <li class="page-item"><a class="page-link" href="#">{{pagination.currentPage}}</a></li>

                <li class="page-item" v-if="pagination.currenPage < pagination.lastPage" @click="pagination.currenPage+1">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
                </li>
            </ul>
        </nav>
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