<template>
    <div class="container">
        <div>
            <router-link :to="{name: 'home'}">Home</router-link>
            <router-link :to="{name: 'about'}">About</router-link>
        </div>
        <div>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>

