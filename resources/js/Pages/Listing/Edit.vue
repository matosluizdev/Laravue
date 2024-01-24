<template>
    <form @submit.prevent="update">
      <div>
        <div>
          <label>Beds</label>
          <input type="text" v-model.number="form.beds"/>
          <div v-if="form.errors.beds">
                {{ form.errors.beds }}
          </div>
        </div>

        <div>
          <label>Baths</label>
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
          <label>City</label>
          <input type="text" v-model.number="form.city"/>
          <div v-if="form.errors.city">
                {{ form.errors.city }}
          </div>
        </div>

        <div>
          <label>Post Code</label>
          <input type="text" v-model.number="form.code"/>
          <div v-if="form.errors.code">
                {{ form.errors.code }}
          </div>
        </div>

        <div>
          <label>Street</label>
          <input type="text" v-model.number="form.street"/>
          <div v-if="form.errors.street">
                {{ form.errors.street }}
          </div>
        </div>

        <div>
          <label>Street Nr</label>
          <input type="text" v-model.number="form.street_number"/>
          <div v-if="form.errors.street_number">
                {{ form.errors.street_number }}
          </div>
        </div>

        <div>
          <label>Price</label>
          <input type="text" v-model.number="form.price"/>
          <div v-if="form.errors.price">
                {{ form.errors.price }}
          </div>
        </div>

        <div>
          <button type="submit">Update</button>
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
