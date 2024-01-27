<template>
    <form @submit.prevent="create">
      <div class="grid grid-cols-2 gap-4">
        <div class="col-span-2">
          <label class="block mb-2 font-medium text-gray-700 dark:text-gray-300">Quartos</label>
          <input type="text" v-model.number="form.beds" class="block w-full p-2 text-gray-700 border border-gray-300 rounded-md shadow-sm dark:border-gray-600"/>
          <div v-if="form.errors.beds">
                {{ form.errors.beds }}
          </div>
        </div>

        <div class="col-span-2">
          <label class="block mb-2 font-medium text-gray-700 dark:text-gray-300">Banheiros</label>
          <input type="text" v-model.number="form.baths" class="block w-full p-2 text-gray-700 border border-gray-300 rounded-md shadow-sm dark:border-gray-600"/>
          <div v-if="form.errors.baths">
                {{ form.errors.baths }}
          </div>
        </div>

        <div class="col-span-2">
          <label class="block mb-2 font-medium text-gray-700 dark:text-gray-300">Area</label>
          <input type="text" v-model.number="form.area" class="block w-full p-2 text-gray-700 border border-gray-300 rounded-md shadow-sm dark:border-gray-600"/>
          <div v-if="form.errors.area">
                {{ form.errors.area }}
          </div>
        </div>

        <div class="col-span-4">
          <label class="block mb-2 font-medium text-gray-700 dark:text-gray-300">Cidade</label>
          <input type="text" v-model.number="form.city" class="block w-full p-2 text-gray-700 border border-gray-300 rounded-md shadow-sm dark:border-gray-600"/>
          <div v-if="form.errors.city">
                {{ form.errors.city }}
          </div>
        </div>

        <div class="col-span-2">
          <label class="block mb-2 font-medium text-gray-700 dark:text-gray-300">CEP</label>
          <input type="text" v-model.number="form.code" class="block w-full p-2 text-gray-700 border border-gray-300 rounded-md shadow-sm dark:border-gray-600"/>
          <div v-if="form.errors.code">
                {{ form.errors.code }}
          </div>
        </div>

        <div class="col-span-4">
          <label class="block mb-2 font-medium text-gray-700 dark:text-gray-300">Endereço</label>
          <input type="text" v-model.number="form.street" class="block w-full p-2 text-gray-700 border border-gray-300 rounded-md shadow-sm dark:border-gray-600"/>
          <div v-if="form.errors.street">
                {{ form.errors.street }}
          </div>
        </div>

        <div class="col-span-2">
          <label class="block mb-2 font-medium text-gray-700 dark:text-gray-300">Número</label>
          <input type="text" v-model.number="form.street_number" class="block w-full p-2 text-gray-700 border border-gray-300 rounded-md shadow-sm dark:border-gray-600"/>
          <div v-if="form.errors.street_number">
                {{ form.errors.street_number }}
          </div>
        </div>

        <div class="col-span-6">
          <label class="block mb-2 font-medium text-gray-700 dark:text-gray-300">Preço</label>
          <input type="text" v-model.number="form.price" class="block w-full p-2 text-gray-700 border border-gray-300 rounded-md shadow-sm dark:border-gray-600"/>
          <div v-if="form.errors.price">
                {{ form.errors.price }}
          </div>
        </div>

        <div class="col-span-6">
          <button class="p-2 font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-500" type="submit">Postar</button>
        </div>
      </div>
    </form>
  </template>

<script setup>
    import { useForm } from '@inertiajs/vue3'

    const form = useForm({
        beds: 0,
        baths: 0,
        area: 0,
        city: null,
        code: null,
        street: null,
        street_number: null,
        price: 0,
    })

    const create = () => form.post(route('listing.store'), form)
</script>

  <style scoped>
  label {
    margin-right: 2em;
  }

  div {
    padding: 2px
  }
  </style>
