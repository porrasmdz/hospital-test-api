<script setup lang="ts">
import LaravelLogo from '@/views/components/laravel-logo.vue'
import InertiaLogo from '@/views/components/inertia-logo.vue'
import ResourceBlock from '@/views/components/resource-block.vue'

defineProps(['resource'])
</script>

<template layout>
    <div class="mt-28 mb-8 w-full flex ">

        <div class="bg-white relative shadow rounded-lg lg:w-2/6 pt-2 ml-8 pb-12 ">


            <div class="mt-16">
                <h1 class="font-bold text-center text-3xl text-gray-900">{{resource?.data.nombres}}
                    {{resource?.data.apellidos}}</h1>
                <p class="text-center text-xl my-2 text-gray-800 font-medium">Genero: {{resource?.data.genero}} | Edad:
                    {{resource?.data.edad}}</p>

                <p class="text-center text-xl my-2 text-gray-800 font-medium">Fecha Nac.: {{resource?.data.nacimiento}}
                </p>

                <p class="text-center text-xl my-2 text-gray-800 font-medium">Estado Civil.:
                    {{resource?.data.estado_civil}}</p>
                <p class="text-center text-xl my-2 text-gray-800 font-medium">Registrado:
                    {{resource?.data.registrado_en}}</p>
                <p class="text-center text-xl my-2 text-gray-800 font-medium">Últ. Actualizacion:
                    {{resource?.data.actualizado_en}}</p>
                <p class="text-center text-xl my-2 text-gray-800 font-medium">Oficio: {{resource?.data.oficio}}</p>

                <p class="text-center text-xl my-2 text-gray-800 font-medium">Nacionalidad:
                    {{resource?.data.nacionalidad}}</p>
                <p class="text-center text-xl my-2 text-gray-800 font-medium">Ciudad:
                    {{resource?.data.ciudad_residencia}}</p>
                <p class="text-center text-xl my-2 text-gray-800 font-medium">Domicilio: {{resource?.data.domicilio}}
                </p>
                <p class="text-center text-xl my-2 text-gray-800 font-medium">Educacion:
                    {{resource?.data.grado_educativo}}</p>
                <p class="text-center text-xl my-2 text-gray-800 font-medium">Correo: {{resource?.data.email}}</p>
                <p class="text-center text-xl my-2 text-gray-800 font-medium">Cedula: {{resource?.data.cedula}}</p>


            </div>
        </div>
        <div class="flex flex-col w-3/5">
            <h1 class="font-bold text-left text-3xl text-gray-900 mx-8 mb-2">Citas Medicas</h1>

            <div class="relative flex gap-4 overflow-x-scroll mx-8 w-full">
                <div v-for="cita in resource.data.citas_medicas" class="bg-white rounded-lg p-8">
                    <p class="text-center text-xl my-2 text-gray-800 font-medium">
                        Cita: {{cita.id}}
                        </p>
                        <p class="text-center text-xl my-2 text-gray-800 font-medium">Agendado para: {{cita.citation}}
                       </p>
                       <p class="text-center text-xl my-2 text-gray-800 font-medium"> Hora: {{cita.time}}</p>


                </div>
            </div>

            <div class="mb-4 mt-8 mx-8 overflow-scroll h-screen">
                <h1 class="font-bold text-left text-3xl text-gray-900 ">Fichas Medica</h1>
                <div v-for="ficha in resource.data.fichas_medicas" class="w-fit bg-white rounded-lg m-8 ml-0  py-8">
                    <p class="text-justify px-8 text-xl my-2 text-gray-800 font-medium">Ficha #{{ficha.id}}</p>

                    <p class="text-justify px-8 text-xl my-2 text-gray-800 font-medium">Fecha de Registro: {{ficha.created_at}}</p>
                    <p class="text-justify px-8 text-xl my-2 text-gray-800 font-medium">Motivo hospitalizacion: {{ficha.hospital_motive}}</p>
                    <p class="text-justify px-8 text-xl my-2 text-gray-800 font-medium">Antecedentes de enfermedad: {{ficha.disease_bg}}</p>
                    <p class="text-justify px-8 text-xl my-2 text-gray-800 font-medium">Antecedentes familiares: {{ficha.family_bg}}</p>
                    <p class="text-justify px-8 text-xl my-2 text-gray-800 font-medium">Habitos: {{ficha.habits}}</p>
                    <p class="text-justify px-8 text-xl my-2 text-gray-800 font-medium">Tabaco: {{ficha.smoke}}</p>
                    <p class="text-justify px-8 text-xl my-2 text-gray-800 font-medium">Drogas: {{ficha.drugs}}</p>
                    <p class="text-justify px-8 text-xl my-2 text-gray-800 font-medium">Bebidas: {{ficha.drinks}}</p>
                    <p class="text-justify px-8 text-xl my-2 text-gray-800 font-medium">Pareja: {{ficha.couple}}</p>
                    <p class="text-justify px-8 text-xl my-2 text-gray-800 font-medium">Alimentacion: {{ficha.eating}}</p>
                    <p class="text-justify px-8 text-xl my-2 text-gray-800 font-medium">Sueño: {{ficha.sleep}}</p>
                    <p class="text-justify px-8 text-xl my-2 text-gray-800 font-medium">Sexualidad: {{ficha.sexuality}}</p>
                    <p class="text-justify px-8 text-xl my-2 text-gray-800 font-medium">Ejercicio: {{ficha.workout}}</p>
                    <p class="text-justify px-8 text-xl my-2 text-gray-800 font-medium">Alergias: {{ficha.allergies}}</p>

                </div>
            </div>

        </div>

    </div>
</template>
