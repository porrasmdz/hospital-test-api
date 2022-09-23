<script setup lang="ts">
import { useForm } from '@inertiajs/inertia-vue3';

let form = useForm({
    email: '',
    password: '',
});

let submit = () =>
{
    console.log(form.email, form.password)
    form.post('/login');
}
</script>
<template layout>
    <form>
        <div class="flex items-center justify-center">
            <p class="text-2xl w-full text-center mb-0 font-bold ">Iniciar Sesión</p>

        </div>

        <div
            class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5">
            <p class="text-center font-semibold mx-4 mb-0 text-slate-400 select-none">o</p>
        </div>

        <!-- Email input -->
        <div class="mb-6">
            <input type="text" v-model="form.email"
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                id="email" placeholder="Email address" />
        </div>

        <!-- Password input -->
        <div class="mb-6">
            <input type="password" v-model="form.password"
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                id="password" placeholder="Password" />
        </div>

        <div class="mx-auto text-center">
            <button type="button" @click.prevent="submit"
                class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                Login
            </button>

        </div>
    </form>
</template>
