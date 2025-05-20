<template>
  <div
    :class="[
      'fixed flex flex-col items-center top-0 px-4 py-4 left-0 z-50 shadow-md shadow-black/30 bg-white duration-300 h-full overflow-hidden',
      showSideBar ? 'w-96' : 'w-20',
    ]"
  >
      <span class="text-xl font-bold mt-1 cursor-pointer">Titulo da Aplicação</span>
    <div class="mt-20 w-full">
      <div class="flex items-center gap-1 py-1 bg-blue-600/30 rounded-4xl">
        <div class="min-w-[2.5rem] ml-1 flex justify-center">
          <Icon icon="solar:card-bold" class="h-10 w-10 text-indigo-800" />
        </div>
        <span
          class="transition-all hover:text-blue-600 cursor-pointer font-medium duration-400 whitespace-nowrap"
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
