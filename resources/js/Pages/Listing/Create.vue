<template>
    <form @submit.prevent="create">
      <div>
        <div>
          <label>Quartos</label>
          <input type="text" v-model.number="form.beds"/>
          <div v-if="form.errors.beds">
                {{ form.errors.beds }}
          </div>
        </div>

        <div>
          <label>Banheiros</label>
          <input type="text" v-model.number="form.baths"/>
          <div v-if="form.errors.baths">
                {{ form.errors.baths }}
          </div>
        </div>

        <div>
          <label>Area</label>
          <input type="text" v-model.number="form.area"/>
          <div v-if="form.errors.area">
                {{ form.errors.area }}
          </div>
        </div>

        <div>
          <label>Cidade</label>
          <input type="text" v-model.number="form.city"/>
          <div v-if="form.errors.city">
                {{ form.errors.city }}
          </div>
        </div>

        <div>
          <label>CEP</label>
          <input type="text" v-model.number="form.code"/>
          <div v-if="form.errors.code">
                {{ form.errors.code }}
          </div>
        </div>

        <div>
          <label>Endereço</label>
          <input type="text" v-model.number="form.street"/>
          <div v-if="form.errors.street">
                {{ form.errors.street }}
          </div>
        </div>

        <div>
          <label>Número</label>
          <input type="text" v-model.number="form.street_number"/>
          <div v-if="form.errors.street_number">
                {{ form.errors.street_number }}
          </div>
        </div>

        <div>
          <label>Preço</label>
          <input type="text" v-model.number="form.price"/>
          <div v-if="form.errors.price">
                {{ form.errors.price }}
          </div>
        </div>

        <div>
          <button type="submit">Criar</button>
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
