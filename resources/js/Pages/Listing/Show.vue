<template>
    <div class="flex flex-col-reverse grid-cols-12 gap-4 md:grid">
        <Box class="flex items-center w-full md:col-span-7">
            <div class="w-full font-medium text-center text-gray-500">
                No images
            </div>
        </Box>
        <div class="flex flex-col gap-4 md:col-span-5">
            <Box>
                <template #header>
                    Basic Info
                </template>
                <Price :price="listing.price" class="text-2xl" />
                <ListingSpace :listing="listing" class="text-lg" />
                <ListingAddress :listing="listing" class="text-gray-500" />
            </Box>
            <Box>
            <template #header>
                Offer
            </template>
                Make an offer
            </Box>
        </div>
    </div>
</template>

<script setup>
import ListingAddress from '@/Components/ListingAddress.vue';
import ListingSpace from '@/Components/ListingSpace.vue';
import Price from '@/Components/Price.vue';
import Box from '@/Components/UI/Box.vue';
defineProps({
    listing: Object,
})
</script>
