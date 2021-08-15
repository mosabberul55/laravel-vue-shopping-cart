<template>
    <div id="app">
        <app-header/>
        <div class="container">
            <router-view/>
        </div>
        <notifications-list/>
    </div>
</template>

<script>
import AppHeader from "./components/AppHeader";
import NotificationsList from "./components/NotificationsList";

export default {
    name: 'App',
    components: {
        AppHeader, NotificationsList
    }
}
</script>

<style>

</style>
