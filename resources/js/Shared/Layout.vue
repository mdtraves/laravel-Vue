<template lang="">

    <header class="bg-[#0baf9b] text-white flex items-center justify-between p-4">
        <div class="flex gap-x-4 items-center">
            <h1 class="text-2xl font-medium">My App</h1>
            <p>User: {{ $page.props.auth.user.name }}</p>
        </div>
        <Nav></Nav>
    </header>
    
    <slot></slot>

    <footer>
        FoOteR
    </footer>

</template>

<script setup>

import Nav from './Nav.vue';

</script>
<style lang="">
    
</style>