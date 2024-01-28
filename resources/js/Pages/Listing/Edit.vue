<template>
    <form @submit.prevent="update">
      <div class="grid grid-cols-2 gap-4">
        <div class="col-span-2">
            <label class="label">Quartos</label>
          <input class="input" type="text" v-model.number="form.beds"/>
          <div v-if="form.errors.beds" class="input-error">
                {{ form.errors.beds }}
          </div>
        </div>

        <div class="col-span-2">
          <label class="label">Banheiros</label>
          <input class="input" type="text" v-model.number="form.baths"/>
          <div v-if="form.errors.baths" class="input-error">
                {{ form.errors.baths }}
          </div>
        </div>

        <div class="col-span-2">
          <label class="label">Area</label>
          <input class="input" type="text" v-model.number="form.area"/>
          <div v-if="form.errors.area" class="input-error">
                {{ form.errors.area }}
          </div>
        </div>

        <div class="col-span-4">
          <label class="label">Cidade</label>
          <input class="input" type="text" v-model.number="form.city"/>
          <div v-if="form.errors.city" class="input-error">
                {{ form.errors.city }}
          </div>
        </div>

        <div class="col-span-2">
          <label class="label">CEP</label>
          <input class="input" type="text" v-model.number="form.code"/>
          <div v-if="form.errors.code" class="input-error">
                {{ form.errors.code }}
          </div>
        </div>

        <div class="col-span-4">
          <label class="label">Endereço</label>
          <input class="input" type="text" v-model.number="form.street"/>
          <div v-if="form.errors.street" class="input-error">
                {{ form.errors.street }}
          </div>
        </div>

        <div class="col-span-2">
          <label class="label">Número</label>
          <input class="input" type="text" v-model.number="form.street_number"/>
          <div v-if="form.errors.street_number" class="input-error">
                {{ form.errors.street_number }}
          </div>
        </div>

        <div class="col-span-6">
          <label class="label">Preço</label>
          <input class="input" type="text" v-model.number="form.price"/>
          <div v-if="form.errors.price" class="input-error">
                {{ form.errors.price }}
          </div>
        </div>
        <div class="col-span-6">
          <button class="btn-primary" type="submit">Atualizar</button>
        </div>
      </div>
    </form>
  </template>

<script setup>
    import { useForm } from '@inertiajs/vue3'

    const props = defineProps({
        listing: Object,
    })

    const form = useForm({
        beds: props.listing.beds,
        baths: props.listing.baths,
        area: props.listing.area,
        city: props.listing.city,
        code: props.listing.code,
        street: props.listing.street,
        street_number: props.listing.street_number,
        price: props.listing.price,
    })

    const update = () => form.put(route('listing.update', {listing: props.listing.id}), form)
</script>

  <style scoped>
  label {
    margin-right: 2em;
  }

  div {
    padding: 2px
  }
  </style>
