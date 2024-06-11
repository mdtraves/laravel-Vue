<template lang="">
    <Layout>

    <Head>

        <title>Settings</title>

    </Head>
 
    <h1 class="mb-10 text-xl font-medium">Settings</h1>

</Layout>

</template>

<script setup>

import Layout from '@/Shared/Layout.vue';
import Navlink2 from '../Components/Navlink2.vue';

const props = defineProps({
  time: String,
  users: Array,
});


</script>

<style lang="">
  /* Add custom styling if needed */
</style>
