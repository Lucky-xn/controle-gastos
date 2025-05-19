<template>
  <div>
    <div class="mx-[20vw] mt-10">
      <span
        >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu nisi tellus. Vestibulum
        rutrum sit amet nisi tincidunt fringilla. Aliquam nulla orci, dignissim sit amet egestas in,
        volutpat at dui. Donec suscipit sapien at aliquam finibus. Duis pretium velit ac augue
        dignissim, nec fermentum quam sagittis. Quisque ut molestie arcu. Fusce porttitor, urna ut
        accumsan pulvinar, urna orci feugiat metus, id elementum lorem urna quis lacus. Nulla
        vehicula orci sit amet augue pulvinar laoreet.</span
      >
    </div>
    <div class="flex justify-end items-center mr-[20rem]">
      <button class="bg-blue-600 px-2 py-2 rounded-md text-white">Criar novo Cartão</button>
    </div>
    <section class="grid grid-cols-6 grid-rows-4 grid-flow-row gap-3 border-t pt-4 border-neutral-400 mx-[20vw] mt-10">
      <CardBank class="col-span-3" />
      <CardBank class="col-span-3" />
      <CardBank class="col-span-3" />
      <CardBank class="col-span-3" />
      <CardBank class="col-span-3" />
      <CardBank class="col-span-3" />
      <CardBank class="col-span-3" />
      <CardBank class="col-span-3" />
      <CardBank class="col-span-3" />
    </section>
  </div>
</template>

<script setup>
import CardBank from '@/components/Common/CommonCards/CardBank.vue';
</script>
