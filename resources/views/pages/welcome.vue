<script setup lang="ts">
import LaravelLogo from '@/views/components/laravel-logo.vue'
import InertiaLogo from '@/views/components/inertia-logo.vue'
import ResourceBlock from '@/views/components/resource-block.vue'
import ModalBasic from '@/views/components/ModalBasic.vue'
import { Link } from '@inertiajs/inertia-vue3'
import { ref } from 'vue'
import { Inertia } from '@inertiajs/inertia'

const createPatientModalOpen = ref(true);


const props = defineProps(['patients'])
const consult = (id:number) => {
    if(confirm('Esta seguro?')) {
        Inertia.delete(route('patients.destroy', id))
    }
}
</script>

<template layout>
    <div>
        <h1 class="text-4xl font-bold mt-24 my-4">
            Mis pacientes
        </h1>

        <div class="container ">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="max-w-full overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead>
                                <tr class="bg-indigo-500 text-center">
                                    <th class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    border-l border-transparent
                                    ">
                                        Nombre
                                    </th>
                                    <th class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    ">
                                        Apellidos
                                    </th>
                                    <th class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    ">
                                        Genero
                                    </th>
                                    <th class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    ">
                                        Celular
                                    </th>
                                    <th class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    ">
                                        Edad
                                    </th>
                                    <th class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    border-r border-transparent
                                    ">
                                        Accion
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="patient in patients.data">
                                    <td class="
                                    text-center text-dark
                                    font-medium
                                    text-base
                                    py-5
                                    px-2
                                    bg-[#F3F6FF]
                                    border-b border-l border-[#E8E8E8]
                                    ">
                                        {{patient?.names}}

                                    </td>
                                    <td class="
                                    text-center text-dark
                                    font-medium
                                    text-base
                                    py-5
                                    px-2
                                    bg-white
                                    border-b border-[#E8E8E8]
                                    ">
                                        {{patient?.lastnames}}

                                    </td>
                                    <td class="
                                    text-center text-dark
                                    font-medium
                                    text-base
                                    py-5
                                    px-2
                                    bg-[#F3F6FF]
                                    border-b border-[#E8E8E8]
                                    ">
                                        {{patient?.gender}}

                                    </td>
                                    <td class="
                                    text-center text-dark
                                    font-medium
                                    text-base
                                    py-5
                                    px-2
                                    bg-white
                                    border-b border-[#E8E8E8]
                                    ">
                                        {{patient?.cellphone}}

                                    </td>
                                    <td class="
                                    text-center text-dark
                                    font-medium
                                    text-base
                                    py-5
                                    px-2
                                    bg-[#F3F6FF]
                                    border-b border-[#E8E8E8]
                                    ">
                                        {{patient?.age}}


                                    </td>
                                    <td class="
                                    text-center text-dark
                                    font-medium
                                    text-base
                                    py-5
                                    px-2
                                    bg-white
                                    border-b border-r border-[#E8E8E8]
                                    ">
                                        <Link :href="`patients/${patient?.id}`" class="
                                        border border-blue-500
                                        py-2
                                        px-6
                                        text-blue-500
                                        inline-block
                                        rounded
                                        hover:bg-blue-500 hover:text-white
                                        ">
                                            Consultar
                                        </Link>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <ul class="flex gap-2 justify-between items-center my-4 w-1/2">
            <li class="inline-block bg-white rounded px-6 border border-gray-200 p-4 shadow"
                v-for="link in patients.links">
                <Link class="inline-block w-full h-full" :href="link.url"><span>{{link.label }}</span></Link>

            </li>
        </ul>


    </div>
</template>
