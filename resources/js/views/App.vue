<template>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm"></div>
                <div class="col-sm">
                    <router-link :to="{ name: 'home' }">Home</router-link> |
                    <router-link :to="{ name: 'about' }">About me</router-link>
                </div>
            </div>
        </div>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {}
</script>