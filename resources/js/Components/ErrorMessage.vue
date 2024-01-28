<template>
    <span class="input-error">{{ props.error }}</span>
  </template>

  <script setup>
  const props = defineProps({
      error: String,
  })
  </script>
