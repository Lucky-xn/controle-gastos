<template>
	<div class="max-w-6xl mx-auto px-4 mt-10 space-y-10">
		<section class="text-sm text-gray-700">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu nisi tellus...</p>
		</section>

		<section class="space-y-4">
			<div class="grid md:grid-cols-3 gap-4">
				<div class="flex flex-col">
					<label for="cardName" class="text-sm font-semibold text-gray-600">Nome do Cartão:</label>
					<input
						id="cardName"
						type="text"
						placeholder="Apelido do Cartão"
						class="px-3 py-2 rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-sm"
					/>
				</div>
				<div class="flex flex-col">
					<label for="cardType" class="text-sm font-semibold text-gray-600">Tipo:</label>
					<select id="cardType" class="px-3 py-2 rounded-md border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500">
						<option disabled selected>Selecione...</option>
						<option>Crédito</option>
						<option>Débito</option>
						<option>Alimentação</option>
					</select>
				</div>
				<div class="flex flex-col">
					<label for="tags" class="text-sm font-semibold text-gray-600">Tags:</label>
					<input
						id="tags"
						type="text"
						placeholder="Tag do cartão"
						class="px-3 py-2 rounded-md border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500 placeholder:text-sm"
					/>
				</div>
			</div>
			<div class="flex justify-end">
				<button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md shadow-md font-medium transition">Criar novo Cartão</button>
			</div>
		</section>

		<section class="grid md:grid-cols-2 gap-4 border-t pt-6 border-gray-300">
			<CardBank />
			<CardBank />
		</section>
	</div>
</template>

<script setup>
import CardBank from '@/components/Common/CommonCards/CardBank.vue';
</script>
