<template lang="">
    <Layout>

    <Head>

        <title>Users</title>

    </Head>


      

<div class="relative overflow-x-auto container mx-auto">
  <div class="flex justify-between items-center">
    <h1 class="my-8 text-xl font-medium">Users</h1>
    <div class="">
      <input type="search" class="border-gray-300 rounded" v-model="filter" placeholder="Search" id="filterUserInput" value="">

    </div>
  </div>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    User
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    password
                </th>
                <th scope="col" class="px-6 py-3">
                    Created
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="user in users.data" :key="user.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{user.id}}
                </th>
                <td class="px-6 py-4">
                  {{ user.name }}
                </td>
                <td class="px-6 py-4">
                  {{ user.email }}
                </td>
                <td class="px-6 py-4">
                  {{ user.created_at }}
                </td>
            </tr>
            
        </tbody>
    </table>
</div>

<Paginator :links="users.links" class="" />




<Navlink2 class="text-blue-500 font-semibold" preserve-scroll :data="{ linkAddress : '/users', linkName : 'Reload'}" > Reload</Navlink2>
<p>The time is {{ time }}</p>

</Layout>

</template>

<script setup>

import { ref, watch } from 'vue';
import { router } from '@inertiajs/vue3';
import Layout from '@/Shared/Layout.vue';
import Navlink2 from '../Components/Navlink2.vue';
import Paginator from '../Components/Paginator.vue';


const props = defineProps({
  time: String,
  users: Object,
  filters: Object,
});

let filter = ref(props.filters.filter ?? '')

watch(filter, value => {
  router.get('/users', { filter: value}, {
    preserveState: true
  })


})

</script>

<style lang="">
  /* Your component styles */
</style>