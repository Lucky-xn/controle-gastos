<template>
  <section
    class="cursor-pointer border-l-4 border-l-purple-500 border border-gray-300 bg-white text-sm text-gray-800 font-medium px-4 py-3 shadow-purple-600/25 shadow-xl/30 rounded-md w-full max-w-xl"
  >
    <div class="">
      <!-- Cabeçalho / Título -->
      <div class="flex justify-between items-center">
        <div class="flex flex-col gap-5 py-2">
          <p class="font-semibold">Template de Item / Credito</p>
          <p class="text-[10px] text-gray-600 font-semibold">
            Criado dia 24/05/2024 as 14:00hrs * Ultimo Gasto dia 25/05/2025 as 07:50hrs
          </p>
        </div>
        <div class="flex items-center gap-3">
          <div class="flex px-2 py-0.5 rounded-xl bg-blue-600/30 border border-blue-600 text-blue-600/90">Comida</div>
          <Icon icon="weui:arrow-filled" class="h-5 w-5 text-gray-400 transition-all duration-300 hover:rotate-90"/>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { Icon } from '@iconify/vue';

</script>
