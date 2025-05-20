<template>
	<div ref="dropdownRef">
		<div @click="dropdown = !dropdown" class="cursor-pointer">
			<slot name="handler" />
		</div>

		<!-- Dropdown -->
		<transition name="fade-slide" mode="out-in">
			<div
				v-if="dropdown"
				@click="dropdown = false"
				class="absolute z-100 border border-neutral-200 top-11 right-7.5 mt-2 bg-white rounded-md shadow-xl transition-all duration-300 min-w-[200px]"
			>
				<slot />
			</div>
		</transition>
	</div>
</template>

<script setup>
import { ref } from 'vue';
import { onClickOutside } from '@vueuse/core';

const dropdown = ref(false);
const dropdownRef = ref(null);

onClickOutside(dropdownRef, () => {
	dropdown.value = false;
});
</script>

<style scoped>
/* Transition personalizada */
.fade-slide-enter-active,
.fade-slide-leave-active {
	transition: all 0.3s ease;
}
.fade-slide-enter-from {
	opacity: 0;
	transform: translateY(-1rem);
}
.fade-slide-enter-to {
	opacity: 1;
	transform: translateY(0);
}
.fade-slide-leave-from {
	opacity: 1;
	transform: translateY(0);
}
.fade-slide-leave-to {
	opacity: 0;
	transform: translateY(-1rem);
}
</style>
