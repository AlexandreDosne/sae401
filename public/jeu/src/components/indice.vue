<script setup>
import { ref } from 'vue';

const indice = ref('');
const indicenb = ref('');
const INDIDE_ET_NOMBRE = ref('');

function afficher() {
    INDIDE_ET_NOMBRE.value = indice.value + ' ' + indicenb.value;
}
</script>

<template>
    <div>
        <h1>{{ INDIDE_ET_NOMBRE  }}</h1>
        <input v-model="indice" placeholder="mettez votre indice">
        <select v-model="indicenb" name="" id="">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button @click="afficher">Envoyer votre indice</button>
    </div>
</template>

<style scoped></style>