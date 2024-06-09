<template lang="">
    <nav class="flex gap-x-6">
        <Navlink2 href="/home" :data="{ linkAddress : '/home', linkName : 'Home',}" :active="$page.component === 'Home'">Home</Navlink2>
        <Navlink2 href="/settings" :data="{ linkAddress : '/settings', linkName : 'Settings',}" :active="$page.component === 'Settings'">Settings</Navlink2>
        <Navlink2 href="/users" :data="{ linkAddress : '/users', linkName : 'Users',}" :active="$page.component === 'Users'"> Users</Navlink2>
        <Navlink2 href="/logout2" preserve-scroll :data="{ linkAddress : '/logout2', linkName : 'Logout'}" :active="$page.component === 'Logout2'">Logout2</Navlink2>
    </nav>
</template>
<script setup>


import Navlink2 from '../Components/Navlink2.vue';

</script>
<style lang="">
    
</style> 