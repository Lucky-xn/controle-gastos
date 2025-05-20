<template>
  		<Dropdown>
			<template #handler>
				<Icon icon="solar:user-circle-bold-duotone" class="cursor-pointer text-gray-800 h-10 w-10" />
			</template>
			<div
				class="flex gap-1 font-medium items-center px-4 py-2 text-gray-700 cursor-pointer hover:bg-purple-50 border-b border-neutral-200 hover:text-purple-600 hover:rounded-md transition-colors duration-300"
			>
				<Icon icon="solar:user-bold" class="h-5 w-5" />
				Perfil
			</div>
			<div
				@click="changeURL('/Settings/Card')"
				class="flex gap-1 font-medium items-center px-4 py-2 text-gray-700 cursor-pointer hover:bg-purple-50 border-b border-neutral-200 hover:text-purple-600 hover:rounded-md transition-colors duration-300"
			>
				<Icon icon="solar:settings-bold-duotone" class="h-5 w-5" />
				Configurações
			</div>
			<div
				@click="logOut()"
				class="flex gap-1 font-medium items-center px-4 py-2 text-gray-700 cursor-pointer hover:bg-purple-50 border-b border-neutral-200 hover:text-purple-600 hover:rounded-md transition-colors duration-300"
			>
				<Icon icon="solar:login-2-bold-duotone" class="h-5 w-5" />
				Sair
			</div>
		</Dropdown>
</template>

<script setup>
import { useRouter } from 'vue-router';
import { Icon } from '@iconify/vue';

import Dropdown from '../../Common/Dropdown.vue';

const router = useRouter();

function changeURL(value) {
	router.push(`${value}`);
}

function logOut() {
	localStorage.removeItem('token');
	router.replace('/');
	// window.location.reload();
}
</script>