<template>
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/hello">Show Page</Link>
    <div>Contador: {{ timer }} </div>
    <slot>Valor padrão caso falhe</slot>
</template>

<script setup>
    import {Link} from '@inertiajs/vue3'
    import {ref} from 'vue'
    const timer = ref(0)
    setInterval(() => timer.value++, 1000)
</script>
