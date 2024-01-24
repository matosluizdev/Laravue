<template>
    <Link href="/listing">Anunciados </Link>&nbsp;
    <Link href="/listing/create">Novo Anúncio</Link>
    <!-- <div>Contador: {{ timer }} </div> -->
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
    // import {ref} from 'vue'
    // const timer = ref(0)
    // setInterval(() => timer.value++, 1000)
</script>

<style scoped>
.success {
    background-color: green;
    color: white;
}
</style>
