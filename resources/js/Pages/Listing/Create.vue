<template>
    <form @submit.prevent="create">
      <div class="grid grid-cols-2 gap-4">
        <div class="col-span-2">
          <label class="label">Quartos</label>
          <input type="text" v-model.number="form.beds" class="input"/>
          <ErrorMessage v-if="form.errors.beds" :error="form.errors.beds" />
        </div>

        <div class="col-span-2">
          <label class="label">Banheiros</label>
          <input type="text" v-model.number="form.baths" class="input"/>
          <ErrorMessage v-if="form.errors.baths" :error="form.errors.baths" />
        </div>

        <div class="col-span-2">
          <label class="label">Area</label>
          <input type="text" v-model.number="form.area" class="input"/>
          <ErrorMessage v-if="form.errors.area" :error="form.errors.area" />
        </div>

        <div class="col-span-4">
          <label class="label">Cidade</label>
          <input type="text" v-model.number="form.city" class="input"/>
          <ErrorMessage v-if="form.errors.city" :error="form.errors.city" />
        </div>

        <div class="col-span-2">
          <label class="label">CEP</label>
          <input type="text" v-model.number="form.code" class="input"/>
          <ErrorMessage v-if="form.errors.code" :error="form.errors.code" />
        </div>

        <div class="col-span-4">
          <label class="label">Endereço</label>
          <input type="text" v-model.number="form.street" class="input"/>
          <ErrorMessage v-if="form.errors.street" :error="form.errors.street" />
        </div>

        <div class="col-span-2">
          <label class="label">Número</label>
          <input type="text" v-model.number="form.street_number" class="input"/>
          <ErrorMessage v-if="form.errors.street_number" :error="form.errors.street_number" />
        </div>

        <div class="col-span-6">
          <label class="label">Preço</label>
          <input type="text" v-model.number="form.price" class="input"/>
          <ErrorMessage v-if="form.errors.price" :error="form.errors.price" />
        </div>

        <div class="col-span-6">
          <button class="btn-primary" type="submit">Postar</button>
        </div>
      </div>
    </form>
  </template>

<script setup>
    import { useForm } from '@inertiajs/vue3'
import ErrorMessage from '../../Components/ErrorMessage.vue';

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
