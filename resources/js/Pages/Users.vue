<template lang="">
    
    <Head>

        <title>Users</title>

    </Head>

      <h1 class="mb-20 text-xl font-medium">Users</h1>

      <ul class="list-disc list-inside p-3">
        <li  v-for=" user in users" :key="user.id" >{{user.name}} - {{ user.email }}</li>
      </ul>

      <Navlink2 class="text-blue-500 font-semibold" preserve-scroll :data="{ linkAddress : '/users', linkName : 'Reload'}" > Reload</Navlink2>
      <p>The time is {{ time }}</p>

</template>

<script setup>

const props = defineProps({

    time: String,
    users: Array

})

import Navlink2 from '../Components/Navlink2.vue';

</script>

<style lang="">
  
</style>