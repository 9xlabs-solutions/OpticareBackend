<template>
    <div>
        <h3>Dashboard</h3>

        <br />

        <router-link tag="a" :to="{ name: 'portal-admin-users' }">Users</router-link>
        <router-link tag="a" :to="{ name: 'portal-admin-checkups' }">Checkups</router-link>
        <router-link tag="a" :to="{ name: 'portal-admin-schedules' }">Schedules</router-link>
    </div>
</template>

<script>

    export default {
        name: "Portal",
    }

</script>

<style scoped>

</style>
