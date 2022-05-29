<template>
    <div class="col-3 mb-3">
        <div class="card text-center">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWS1xunDTGwK00aZ1wHkS-LvBRsUeue_0EMo7yb909Vov2vksrPvbTz3BQa31c8gdjNVM&usqp=CAU" alt="">
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