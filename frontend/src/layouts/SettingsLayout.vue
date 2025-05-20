<template>
  <div class="grid grid-cols-[24rem_1fr] grid-rows-[4rem_1fr] h-screen">
    <header class="col-span-2 row-start-1 z-50">
      <NavBar/>
    </header>

    <aside class="col-start-1 row-start-2 z-60"> 
      <SideBar/>
    </aside>

    <main>
      <router-view/>
    </main>
  </div>
</template>

<script setup>
import NavBar from '@/components/System/NavBar/NavBar.vue';
import SideBar from '@/components/Common/SideBar.vue';

</script>