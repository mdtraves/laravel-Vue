<template lang="">

    <header class="bg-[#0baf9b] text-white flex items-center justify-between p-4">
        <div class="flex gap-x-4 items-center">
            <h1 class="text-2xl font-medium">My App</h1>
            <p>User: {{ $page.props.auth.user.name }}</p>
        </div>
        <Nav></Nav>
    </header>
    <iframe height="200px" width="100%" frameborder="no" scrolling="no" seamless src="https://player.simplecast.com/7b274140-6dc1-4bfb-b268-93ca492a1c99?dark=false"></iframe>
    <slot></slot>

</template>

<script setup>

import Nav from './Nav.vue';

</script>
<style lang="">
    
</style>