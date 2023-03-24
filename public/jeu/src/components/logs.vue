<script setup>

</script>

<template>
    <div class="logs">
        <div class="logsmsg">
            <p>{{ INDIDE_ET_NOMBRE }}</p>
        </div>
    </div>
</template>

<style scoped>
.logs {
    border: 1px solid;
    border-radius: 10px;
    width: 20vh;

}

.logs p:nth-child(even) {
    background-color: red;
}
</style>