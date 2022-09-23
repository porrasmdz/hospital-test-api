<script>
import { reactive, computed, defineProps } from 'vue'
import { Link } from '@inertiajs/inertia-vue3'

export default {

    components: {
        Link,
    },
    computed: {
        name() {
            return this.$page.props?.auth.user.name
        }
    }

}
</script>

<template>
    <div
        class="relative flex items-top justify-center min-h-screen bg-zinc-100 dark:bg-zinc-900 sm:items-center py-4 sm:pt-0">
        <header v-if="$page.props?.auth?.user?.name"
            class="absolute top-0 sm:px-12 w-full bg-indigo-500 shadow-xl z-20 h-20 p-4 flex justify-between items-center">
            <span class="text-white font-bold text-2xl">¡Bienvenido Dr.{{name}}!</span>
            <nav>
                <ul class="text-white font-bold flex gap-4">
                    <li>
                        <Link href='/'>Pacientes</Link>

                    </li>

                    <li>
                        <Link href='/logout' method="post" as="button">Logout</Link>
                    </li>
                </ul>
            </nav>
        </header>
        <slot />
    </div>

</template>
