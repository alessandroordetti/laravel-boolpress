<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <router-link class="navbar-brand" href="#">Navbar</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-black" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <router-link class="nav-link" :to="{name: 'home'}" >Home </router-link>
                    </li>

                    <li class="nav-item active">
                        <router-link class="nav-link" :to="{name: 'about-us'}" >About-us </router-link>
                    </li>

                    <li class="nav-item active">
                        <router-link class="nav-link" :to="{name: 'contacts'}" > Contacts </router-link>
                    </li>

                    <li class="nav-item active">
                        <router-link class="nav-link" :to="{name: 'posts'}" >Posts </router-link>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: 'Header',
}
</script>

<style>
    .navbar-collapse {
        color: black;
    }
</style>