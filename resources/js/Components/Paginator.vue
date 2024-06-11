<template lang="">
    <div class="flex container mx-auto gap-x-1">

        <a 
        v-for="link in links" :key="link.id || link.label" 
        :href="link.url"
        v-html="link.label"
        class="my-2 first:bg-[#0baf9b] first:px-2 first:rounded last:bg-[#0baf9b] last:px-2 last:rounded"
        :class="{ 'font-bold' : link.active, 'text-gray-300' : !link.url }"
        >
        </a>

    </div>
     
</template>

<script setup>


const props = defineProps({
    links: Array,

});

</script>

<style lang="">

</style> 