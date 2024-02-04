<template>
    <div class="flex flex-col-reverse grid-cols-12 gap-4 md:grid">
        <Box class="flex items-center w-full md:col-span-7">
            <div class="w-full font-medium text-center text-gray-500">
                Sem imagens
            </div>
        </Box>
        <div class="flex flex-col gap-4 md:col-span-5">
            <Box>
                <template #header>
                    Informações
                </template>
                <Price :price="listing.price" class="text-2xl" />
                <ListingSpace :listing="listing" class="text-lg" />
                <ListingAddress :listing="listing" class="text-gray-500" />
            </Box>
            <Box>
            <template #header>
                Pagamento Mensal
            </template>
                <label> Taxa de Juros ({{ interestRate }}%)</label>
                <input v-model.number="interestRate" type="range" min="0.1" max="30" step="0.1" class="w-full h-4 bg-gray-200 appearance-none cursor-pointer rounde-lg dark:bg-gray-700">
                <label> Duração ({{ duration }} anos)</label>
                <input v-model.number="duration" type="range" min="3" max="35" step="1" class="w-full h-4 bg-gray-200 appearance-none cursor-pointer rounde-lg dark:bg-gray-700">
                <div class="text-gray-600 dark:text-gray-300 mt 2">
                    <div class="text-gray-400">Seu pagamento mensal</div>
                    <Price :price="monthlyPayment" class="text-3xl"/>
                </div>
            </Box>
        </div>
    </div>
</template>

<script setup>
import ListingAddress from '@/Components/ListingAddress.vue';
import ListingSpace from '@/Components/ListingSpace.vue';
import Price from '@/Components/Price.vue';
import Box from '@/Components/UI/Box.vue';
import {ref} from 'vue'
import {useMonthlyPayment} from '@/Composables/useMonthlyPayment'

const interestRate = ref(2.5)
const duration = ref(25)

const props = defineProps({
    listing: Object,
})

const { monthlyPayment } = useMonthlyPayment(
  props.listing.price, interestRate, duration,
)

</script>
