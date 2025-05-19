<template>
  <section class="border-l-4 border-purple-500 bg-white text-sm text-gray-800 font-medium px-4 py-3 shadow-purple-600/25 shadow-xl/30 rounded-md w-full max-w-xl">
    <div class="grid grid-cols-6 items-start gap-4">
      <!-- Cabeçalho / Título -->
      <div class="col-span-2 pr-2 border-r h-full border-slate-600">
        <h2 class="font-semibold">Template de Item</h2>
      </div>

      <!-- Informações -->
      <div class="col-span-4 grid grid-cols-8 gap-y-2 gap-x-3 text-xs">
        <div class="col-span-3 flex items-center gap-1">
          <span>Tag:</span>
          <span class="bg-blue-600/20 border border-blue-600/40 text-blue-500 font-bold px-2 rounded">Comida</span>
        </div>

        <div class="col-span-4 flex items-center gap-1">
          <span>Limite:</span>
          <span>R$ 1.500,00</span>
        </div>

        <div class="col-span-4 flex items-center gap-1">
          <span>Gasto Atual:</span>
          <span class="text-red-500 font-semibold">R$-600,00</span>
        </div>

        <div class="col-span-4 flex items-center gap-1">
          <span>Tipo:</span>
          <span>Crédito</span>
        </div>
      </div>
    </div>
  </section>
</template>
