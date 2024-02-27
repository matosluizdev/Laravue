<template>
    <form @submit.prevent="register">
        <div class="w-1/2 mx-auto">
            <div>
                <label for="name" class="label"> Name</label>
                <input type="text" id="name" class="input" v-model="form.name">
                <div v-if="form.errors.name" class="input-error">{{ form.errors.name }}</div>
            </div>
            <div class="mt-4">
                <label for="email" class="label"> E-mail</label>
                <input type="email" id="email" class="input" v-model="form.email">
                <div v-if="form.errors.email" class="input-error">{{ form.errors.email }}</div>
            </div>
            <div class="mt-4">
                <label for="password" class="label"> Password</label>
                <input type="password" id="password" class="input" v-model="form.password">
                <div v-if="form.errors.password" class="input-error">{{ form.errors.password }}</div>
            </div>
            <div class="mt-4">
                <label for="password_confirmation" class="label"> Confirm Password</label>
                <input type="password" id="password_confirmation" class="input" v-model="form.password_confirmation">
            </div>
            <div class="mt-4 ">
                <button type="submit" class="w-full btn-primary">Create Account</button>
            </div>
            <div class="mt-2 text-center">
                <Link :href="route('login')" class="text-sm text-gray-500">
                    Already have an account? Click here!
                </Link>
            </div>
        </div>
    </form>
</template>

<script setup>
    import { useForm, Link } from '@inertiajs/vue3'

    const form = useForm({
        name: null,
        email: null,
        password: null,
        password_confirmation: null
    })

    const register = () => form.post(route('user.store'))
</script>
