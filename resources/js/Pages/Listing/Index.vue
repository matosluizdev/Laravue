<template>
    <div v-for="listing in listings" :key="listing.id">
    <div>
        <Link :href="show.replace(':id', listing.id)">
                <ListingAddress :listing="listing" />
        </Link>
    </div>
    <div>
        <Link :href="edit.replace(':id', listing.id)">Edit</Link>
    </div>
    <div>
        <Link :href="destroy.replace(':id', listing.id)" method="DELETE">Delete</Link>
    </div>
    </div>
</template>

<script setup>

import { Link } from '@inertiajs/vue3';
import ListingAddress from '../../Components/ListingAddress.vue';
defineProps({
    listings: Array,
    show: String,
    edit: String,
    destroy: String
})
</script>
