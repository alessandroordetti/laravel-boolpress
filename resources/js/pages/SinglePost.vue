<template>
    <div class="col-6">
        <div class="card text-center">
            <img :src="post.image" :alt="'image of' + post.title" class="m-auto">
            <div class="card-body">
                <div class="card-title">
                    {{post.title}}
                </div>
                <div class="card-subtitle">
                    {{post.author}}
                </div>
                <div class="card-text">
                    {{post.description}}
                </div>
                <div class="card-footer">
                    {{post.date}}
                </div>
            </div>
        </div>
    </div>

</template>

<script>

export default {
    name:"Post",
    components: { 

    },

    data: function (){
        return {
            post: [],
        }
    },

    methods: {
            getPost(postId) {
                axios.get(`http://localhost:8000/api/posts/${postId}`)
                .then((result)=>{
                    this.post = result;
                    console.log(this.post);
                })
                .catch((error) => {
                    console.warn(error);
                });
            },

        created(){
            this.getPost(this.$route.params.id);
        }
    }

}
</script>

<style scoped>
    img {
        width: 90%;
    }
</style>>
