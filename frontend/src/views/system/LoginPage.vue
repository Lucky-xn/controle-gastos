<template>
  <div class="flex flex-col pt-50 justify-center items-center">
    <form
    @submit.prevent="Login"
      class="transition-all duration-300 flex flex-col items-center gap-5 w-full max-w-[25vw] bg-zinc-900 border-slate-600 hover:border-slate-700 border rounded-md p-3 pb-10"
    >
      <div class="flex flex-col items-center">
        <h1>Login</h1>
      </div>
      <div class="flex flex-col gap-4 w-full max-w-[20vw]">
        <div class="flex flex-col gap-2">
          <label class="font-medium text-xs">Login</label>
          <input
            required
            type="text"
            placeholder="Digite Seu Nome De Usuario..."
            name="user"
            class="block w-full px-4 py-3 border border-gray-700/50 rounded-lg shadow-sm placeholder-gray-400 focus:border-[#01aba1] bg-gray-800/50 text-white transition-all duration-300 backdrop-blur-sm"
          />
        </div>
        <div>
          <label class="font-medium text-xs">Senha</label>
          <div class="relative">
            <input
              required
              :type="togglePassword(password)"
              placeholder="Digite sua senha"
              name="password"
              class="block w-full px-4 py-3 border border-gray-700/50 rounded-lg shadow-sm placeholder-gray-400 focus:border-[#01aba1] bg-gray-800/50 text-white transition-all duration-300 backdrop-blur-sm"
            />
            <button
              @click="password = !password"
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

const { makeRequest } = userRequest('', '');

const password = ref(false)

const togglePassword = (password) => {
  if (password) {
    return 'text'
  } else {
    return 'password'
  }
}

const login = async (e) => {
  const formData = new FormData(e.target);
  const data = Object.fromEntries(formData.entries(formData));

  const response = await makeRequest({
    data,
  })
}

</script>
