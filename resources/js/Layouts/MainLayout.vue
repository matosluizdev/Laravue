<template>
    <header class="w-full bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-700">
        <div class="container mx-auto">
            <nav class="flex items-center justify-between p-4">
                <div class="text-lg">
                    <Link :href="route('listing.index')">Anúncios</Link>
                </div>
                <div class="text-lg font-bold text-center text-indigo-600 dark:text-indigo-300">
                    <Link :href="route('listing.index')">LaraLouis</Link>
                </div>
                <div>
                    <Link :href="route('listing.create')" class="p-2 font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-500">+ Novo Anúncio</Link>
                </div>
            </nav>
        </div>
    </header>
    <div v-if="flashSuccess" class="success">
{{ flashSuccess }}
    </div>
    <slot>Valor padrão caso falhe</slot>
</template>

<script setup>
    import {Link, usePage} from '@inertiajs/vue3'
    import {computed} from 'vue';

    const page = usePage()
    const flashSuccess = computed(
        () => page.props.flash.success,
    )
</script>
