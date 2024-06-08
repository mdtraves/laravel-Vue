<template lang="">
    <nav>
        <ul>
            <Navlink2 :data="{ linkAddress : '/home', linkName : 'Home', method : 'GET', as : 'a'}" />
            <Navlink2 :data="{ linkAddress : '/settings', linkName : 'Settings', method : 'GET', as : 'a'}" />
            <Navlink2 :data="{ linkAddress : '/users', linkName : 'Users', method : 'GET', as : 'a'}" />
            <Navlink2 :data="{ linkAddress : '/logout2', linkName : 'Logout', method : 'POST', as : 'button'}" />
        </ul>
    </nav>
</template>
<script>
import { Link } from '@inertiajs/vue3';
import Navlink2 from '../Components/Navlink2.vue';

export default {

    components: {Link,Navlink2}
    
}
</script>
<style lang="">
    
</style> 