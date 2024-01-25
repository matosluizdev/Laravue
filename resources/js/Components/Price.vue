<template>
    <span>{{ formattedPrice }}</span>
</template>

<script setup>
import { computed } from 'vue'

    const props = defineProps({
        price: [Number, String],
    })

    const formattedPrice = computed(
        () => Number(props.price).toLocaleString('pt-BR', {
            style: 'currency',
            currency: 'BRL',
            maximumFractionDigits: 0,
        }),
    )
</script>
