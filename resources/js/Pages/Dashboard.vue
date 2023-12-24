<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
  <div>
    <h1>Dashboard</h1>
    <router-link to="/students">Students</router-link>
  </div>
</template>
