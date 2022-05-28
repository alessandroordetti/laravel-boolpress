<template>
    <div class="col-6 mb-3">
        <div class="card text-center">
            <div class="card-body">
                <div class="card-title">
                    {{post.author}}
                </div>
                <div class="card-text">
                    Post pubblicato il {{post.date}}
                </div>
                <div class="card-footer">
                    {{post.title}}
                </div>
            </div>
        </div>
    </div>

</template>

<script>

export default {
    name:"ContactInfo",
    components: { 

    },
    props:['post'],
}
</script>

<style scoped>

</style>>