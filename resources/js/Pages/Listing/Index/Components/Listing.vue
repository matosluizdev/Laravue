<template>
    <Box>
    <div>
        <Link :href="route('listing.show', listing.id)">
            <div class="flex items-center">
                <Price :price="listing.price" class="text-2xl" />
                <div class="gap-2 text-xs text-gray-500">
                    <Price :price="monthlyPayment" />
                </div>
            </div>

            <ListingSpace :listing="listing" class="text-lg" />
            <ListingAddress :listing="listing" class="text-gray-500" />
        </Link>
    </div>
    <div>
        <Link :href="route('listing.edit', listing.id)">Editar</Link>
    </div>
    <div>
        <Link :href="route('listing.destroy', listing.id)" method="DELETE">Excluir</Link>
    </div>
    </Box>
</template>

<script setup>

import { Link } from '@inertiajs/vue3';
import ListingAddress from '@/Components/ListingAddress.vue';
import Box from '@/Components/UI/Box.vue';
import ListingSpace from '@/Components/ListingSpace.vue';
import Price from '@/Components/Price.vue'
const props = defineProps({
    listings: Object,
})
const {monthlyPayment} = useMonthlyPayment(
    props.listing.price, 2.5, 25,
)

import {useMonthlyPayment} from '@/Composables/useMonthlyPayment'
</script>
