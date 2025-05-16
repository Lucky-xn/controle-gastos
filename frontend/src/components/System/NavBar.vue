<template>
  <div
    class="sticky grid grid-cols-12 items-center w-full p-4 bg-gradient-to-r from-purple-600 to-purple-800 border-b-[3px] border-purple-400 h-16 shadow-lg"
  >
    <div class="col-start-12 flex flex-wrap-reverse items-end justify-end">
      <img @click="dropdown = !dropdown" src="" class="cursor-pointer bg-black h-5 w-5" alt="" />
      <div
        class="absolute border border-neutral-200 top-10 mt-2 bg-white rounded-md shadow-xl transition-all duration-300 min-w-[200px]"
        :class="dropdown ? 'slide-down' : 'slide-up'"
      >
        <a
          href="#"
          class="block px-4 py-2 text-gray-700 hover:bg-purple-50 border-b border-neutral-200 hover:text-purple-600 hover:rounded-md transition-colors duration-200"
        >
            <span class="font-medium">Perfil</span>
        </a>
        <a
          href="#"
          class="block px-4 py-2 text-gray-700 hover:bg-purple-50 border-b border-neutral-200 hover:text-purple-600 hover:rounded-md transition-colors duration-200"
        >
            <span class="font-medium">Configurações</span>
        </a>
        <a
          href="#"
          class="block px-4 py-2 text-gray-700 hover:bg-purple-50 hover:text-purple-600 hover:rounded-md transition-colors duration-200"
        >
            <span class="text-red-600 font-medium">Sair</span>
        </a>
      </div>
    </div>
  </div>
</template>

<script setup>
import { computed, ref } from 'vue'

const dropdown = ref(false)
</script>

<style setup>
.slide-down {
  transform: translateY(0);
  opacity: 1;
  pointer-events: auto;
}

.slide-up {
  transform: translateY(-10px);
  opacity: 0;
  pointer-events: none;
}
</style>
