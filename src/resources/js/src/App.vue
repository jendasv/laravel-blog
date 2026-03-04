<script setup>
import {ref} from "vue";

const query = ref('')

</script>

<template>
<div >
    <h3>Vue init!</h3>
    <form >
        <input v-model="query" type="text" placeholder="Zadejte text">
        <p v-if="query">Obsah inputu je: {{query}}</p>
    </form>
</div>
</template>

<style scoped>
input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 10px;
}
</style>
