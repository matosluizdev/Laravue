<template>
    <header class="w-full bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-800">
        <div class="container mx-auto">
            <nav class="flex items-center justify-between p-4">
                <div class="text-lg">
                    <Link :href="route('listing.index')">Anúncios</Link>
                </div>
                <div class="text-lg font-bold text-center text-indigo-600 dark:text-indigo-300">
                    <Link :href="route('listing.index')">LaraLouis</Link>
                </div>
                <div v-if="user" class="flex items-center gap-4" >
                    <div class="text-sm text-gray-500">{{ user.name }}</div>
                    <Link :href="route('listing.create')" class="btn-primary">+ Novo Anúncio</Link>
                    <Link :href="route('logout')" method="delete" as="button">Logout</Link>
                </div>
                <div v-else class="flex items-center gap-2">
                    <Link :href="route('user.create')">Register</Link>
                    <Link :href="route('login')">Sign In</Link>
                </div>
            </nav>
        </div>
    </header>

    <main class="container p-5 mx-auto">
        <div v-if="flashSuccess" class="p-2 mb-5 bg-green-300 border border-green-200 rounded-md shadow-sm dark:bg-green-900 dark:border-green-700">
            {{ flashSuccess }}
        </div>
        <slot>Valor padrão</slot>
    </main>

</template>

<script setup>
    import {Link, usePage} from '@inertiajs/vue3'
    import {computed} from 'vue';

    const page = usePage()
    const flashSuccess = computed(
        () => page.props.flash.success,
    )

    const user = computed(
        () => page.props.user,
    )
</script>
