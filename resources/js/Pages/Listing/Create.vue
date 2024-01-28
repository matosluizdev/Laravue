<template>
    <form @submit.prevent="create">
      <div class="grid grid-cols-2 gap-4">
        <div class="col-span-2">
          <label class="label">Quartos</label>
          <input type="text" v-model.number="form.beds" class="input"/>
          <div v-if="form.errors.beds" class="input-error">
                {{ form.errors.beds }}
          </div>
        </div>

        <div class="col-span-2">
          <label class="label">Banheiros</label>
          <input type="text" v-model.number="form.baths" class="input"/>
          <div v-if="form.errors.baths" class="input-error">
                {{ form.errors.baths }}
          </div>
        </div>

        <div class="col-span-2">
          <label class="label">Area</label>
          <input type="text" v-model.number="form.area" class="input"/>
          <div v-if="form.errors.area" class="input-error">
                {{ form.errors.area }}
          </div>
        </div>

        <div class="col-span-4">
          <label class="label">Cidade</label>
          <input type="text" v-model.number="form.city" class="input"/>
          <div v-if="form.errors.city" class="input-error">
                {{ form.errors.city }}
          </div>
        </div>

        <div class="col-span-2">
          <label class="label">CEP</label>
          <input type="text" v-model.number="form.code" class="input"/>
          <div v-if="form.errors.code" class="input-error">
                {{ form.errors.code }}
          </div>
        </div>

        <div class="col-span-4">
          <label class="label">Endereço</label>
          <input type="text" v-model.number="form.street" class="input"/>
          <div v-if="form.errors.street" class="input-error">
                {{ form.errors.street }}
          </div>
        </div>

        <div class="col-span-2">
          <label class="label">Número</label>
          <input type="text" v-model.number="form.street_number" class="input"/>
          <div v-if="form.errors.street_number" class="input-error">
                {{ form.errors.street_number }}
          </div>
        </div>

        <div class="col-span-6">
          <label class="label">Preço</label>
          <input type="text" v-model.number="form.price" class="input"/>
          <div v-if="form.errors.price" class="input-error">
                {{ form.errors.price }}
          </div>
        </div>

        <div class="col-span-6">
          <button class="btn-primary" type="submit">Postar</button>
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
