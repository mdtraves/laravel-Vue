<template lang="">
      <h1 class="mb-[90vh] text-xl font-medium">Users</h1>

      <Navlink2  class="text-blue-500 font-semibold" preserve-scroll :data="{ linkAddress : '/users', linkName : 'Reload'}" > Reload</Navlink2>
      <p>The time is {{ time }}</p>




</template>

<script setup>

const props = defineProps({
    time: String,
  
})

import Navlink2 from '../Components/Navlink2.vue';

</script>

<style lang="">
  
</style>