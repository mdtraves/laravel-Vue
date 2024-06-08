<template lang="">
    
    <li><Link :href="data.linkAddress" :method="data.method" :as="data.as">{{ data.linkName}}</Link></li>
     
</template>

<script>

import { Link } from '@inertiajs/vue3';

export default {
 
components: {Link},
props: {
    data: Object,
  }

}

</script>
<style lang="">

</style> 