<template>
<div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3">
    <Box v-for="listing in listings" :key="listing.id">
    <div>
        <Link :href="route('listing.show', listing.id)">
                <ListingAddress :listing="listing" />
        </Link>
    </div>
    <div>
        <Link :href="route('listing.edit', listing.id)">Editar</Link>
    </div>
    <div>
        <Link :href="route('listing.destroy', listing.id)" method="DELETE">Excluir</Link>
    </div>
    </Box>
</div>
</template>

<script setup>

import { Link } from '@inertiajs/vue3';
import ListingAddress from '@/Components/ListingAddress.vue';
import Box from '@/Components/UI/Box.vue';
defineProps({
    listings: Array,
})
</script>
