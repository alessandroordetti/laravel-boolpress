<template>
    <div class="col-4">
        <div class="card text-center">
            <img :src="post.image" :alt="'image of' + post.title">
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
    props:['post'],
}
</script>

<style scoped>
    img {
        width: 90%;
    }
</style>>
