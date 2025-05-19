<template>
  <div>
    <NavBar v-if="route.path !== '/'"/>
    <router-view></router-view>
  </div>
</template>

<script setup>
import { useRoute } from 'vue-router';

import NavBar from '@/components/System/NavBar/NavBar.vue'

const route = useRoute();

console.log(route.path);

</script>
