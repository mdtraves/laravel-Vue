<template lang="">
    
    <Link :data="data"  class="" :class="{'font-bold underline':  active}" ><slot></slot></Link>
     
</template>

<script setup>

import { Link } from '@inertiajs/vue3';

const props = defineProps({
    data: Object,
    preserve: Boolean,
    active: Boolean,
});

</script>

<style lang="">

</style> 