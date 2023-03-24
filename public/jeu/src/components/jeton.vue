<script setup>
import { ref } from 'vue';
const jeton_vert = ref('12');
const jeton_blanc =ref('9');



</script>
<template>

    <div>
        <p>
          nb de mots a trouver : {{ jeton_vert }}
        </p>
        <p>
           essaie restant : {{ jeton_blanc }}
        </p>
    </div>



</template>