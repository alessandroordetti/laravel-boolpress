<template>
            <div class="col-3 mb-3">
                <div class="card text-center">
                    <img :src="getImage()">
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
    data() {
        return {
            profileImages: ['https://pickaface.net/gallery/avatar/unr_mulherbrancaviada_191123_2122_zdcqf.png','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZldEPvFgz5ysckNAa5ztdf4Exw00bb1a9qA&usqp=CAU', 'https://static.vecteezy.com/ti/vettori-gratis/p3/2275818-avatar-donna-icona-profilo-donna-per-rete-vettoriale.jpg']
        }
    },

    components: { 
        
    },

    methods: {
        getImage() { 
            return this.profileImages[Math.floor(Math.random() * this.profileImages.length)]
        }
    },

    props:['post'],
}
</script>

<style scoped>

</style>>