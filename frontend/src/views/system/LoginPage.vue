<template>
  <div class="flex flex-col pt-50 justify-center items-center">
    <form
    @submit.prevent="enviarDados"
      class="transition-all duration-300 flex flex-col items-center gap-5 w-full max-w-[25vw] bg-[#171717] border-[#404040] border rounded-md p-3 pb-10"
    >
      <div class="flex flex-col items-center">
        <h1 class="">Login</h1>
      </div>
      <div class="flex flex-col gap-4 w-full max-w-[20vw]">
        <div class="flex flex-col gap-2">
          <label class="font-medium text-xs">Login</label>
          <input
            required
            v-model="user"
            type="text"
            placeholder="Digite Seu Nome De Usuario"
            name="user"
            class="block w-full px-4 py-3 border border-[#404040] rounded-md shadow-sm placeholder-gray-400 bg-[#303030] text-white transition-all duration-300"
          />
        </div>
        <div class="flex flex-col gap-2">
          <label class="font-medium text-xs">Senha</label>
          <div class="relative">
            <input
              required
              v-model="password"
              :type="viewPass ? 'text' : 'password'"
              placeholder="Digite sua senha"
              name="password"
              class="block w-full px-4 py-3 border border-[#404040] rounded-md shadow-sm placeholder-gray-400 bg-[#303030] text-white transition-all duration-300"
            />
            <button
              @click="viewPass = !viewPass"
              type="button"
              class="absolute inset-y-0 right-3 flex items-center text-gray-400 hover:text-white transition-colors duration-200"
            >
              teste
            </button>
          </div>
        </div>
      </div>
      <button
        class="bg-blue-600 px-10 text-white font-medium cursor-pointer py-1 rounded-md"
        type="submit"
      >
        Login
      </button>
    </form>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { userRequest } from '@/config/userRequest'

import { useRouter } from 'vue-router'

const router = useRouter();
const { makeRequest } = userRequest('/teste', 'POST');

const viewPass = ref(false);
const password = ref('');
const user = ref('');


const enviarDados = async () => {
  const response = await makeRequest({
    name: user.value,
    password: password.value
  });

  console.log(response);

  if (!response.dados.success) throw new Error('Erro ao buscar user');

  console.log('buscado com sucesso')
  localStorage.setItem('token', response.dados.token);
  router.push('/HomePage')
}

</script>
