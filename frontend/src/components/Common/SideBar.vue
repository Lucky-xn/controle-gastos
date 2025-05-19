<template>
  <div
    :class="[
      'fixed top-0 px-4 py-4 left-0 z-50 shadow-md shadow-black bg-neutral-700 duration-300 h-full overflow-hidden',
      showSideBar ? 'w-96' : 'w-20',
    ]"
  >
    <div @click="showSideBar = !showSideBar" class="cursor-pointer">
      <Icon icon="line-md:list" class="h-10 w-10 hover:bg-neutral-600 hover:rounded-4xl" />
    </div>
    <div class="mt-20">
      <div class="flex items-center gap-1 py-1 bg-neutral-600 rounded-4xl">
        <div class="min-w-[2.5rem] ml-1 flex justify-center">
          <Icon icon="solar:card-bold" class="h-10 w-10" />
        </div>
        <span
          class="transition-all hover:text-neutral-300 cursor-pointer font-medium duration-400 whitespace-nowrap"
          :class="showSideBar ? 'opacity-100 ml-2' : 'opacity-0 ml-[-50px]'"
          >Cadastro de Cartões</span
        >
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

import { Icon } from '@iconify/vue';

const showSideBar = ref(true);
</script>
