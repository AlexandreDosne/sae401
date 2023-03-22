<script setup>
import plateauvue from '/src/components/plateau.vue';
import indicevue from '/src/components/indice.vue';
import logsvue from '/src/components/logs.vue';
import jeton from '/src/components/jeton.vue';
import plateau2 from '/src/components/plateau2.vue';
</script>

<template>
    <div class="jeu">
        <jeton />
        <plateauvue />
        <indicevue />
        <!-- <logsvue /> -->

        <br>
        <hr>
        <plateau2 />
        <indicevue />

        
    </div>
</template> 

<style scoped >
* {
    margin: 0;
    padding: 0;
}

.jeu {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}
</style>