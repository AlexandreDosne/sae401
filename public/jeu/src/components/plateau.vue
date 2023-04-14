<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'
import { useRoute } from 'vue-router'

const route = useRoute()
const idpartie = ref()
const partie = ref()

onMounted(async() =>{
  idpartie.value = route.params.idpartie('idpartie')
  const response = await axios.get('api_URL/' + idpartie.value)

  partie.value = response.data
  console.log(partie.value)

  .then()
})






</script>
<template>
  <div class="mots">

    <div class="{{ couleur_j1.trouver.jeton_2 }}"> => neutre
        <h2>{{ ID_mot.position. }}</h2>
    </div>  
    
    
    
    
    <div class="mot"> 
        <h2>machin 1</h2>
     </div>
      <div class="mot"> 
          <h2>machin 2</h2>
      </div>
      <div class="mot"> 
        <h2>machin 1</h2>
     </div>
      <div class="mot"> 
          <h2>machin 2</h2>
      </div>
      <div class="mot"> 
        <h2>machin 1</h2>
     </div>
      <div class="mot"> 
          <h2>machin 2</h2>
      </div>
      <div class="mot"> 
        <h2>machin 1</h2>
     </div>
      <div class="mot"> 
          <h2>machin 2</h2>
      </div>
      <div class="mot"> 
        <h2>machin 1</h2>
     </div>
      <div class="mot"> 
          <h2>machin 2</h2>
      </div>
      <div class="mot"> 
        <h2>machin 1</h2>
     </div>
      <div class="mot"> 
          <h2>machin 2</h2>
      </div>
      <div class="mot"> 
        <h2>machin 1</h2>
     </div>
      <div class="mot"> 
          <h2>machin 2</h2>
      </div>
      <div class="mot"> 
        <h2>machin 1</h2>
     </div>
      <div class="mot"> 
          <h2>machin 2</h2>
      </div>
      <div class="mot"> 
        <h2>machin 1</h2>
     </div>
      <div class="mot"> 
          <h2>machin 2</h2>
      </div>
      <div class="mot"> 
        <h2>machin 1</h2>
     </div>
      <div class="mot"> 
          <h2>machin 2</h2>
      </div>
      <div class="mot"> 
        <h2>machin 1</h2>
     </div>
      <div class="mot"> 
          <h2>machin 2</h2>
      </div>
      <div class="mot"> 
        <h2>machin 1</h2>
     </div>
      <div class="mot"> 
          <h2>machin 2</h2>
      </div>
      <div class="mot"> 
        <h2>machin 1</h2>
      </div>
  </div>
</template>


<style scoped>
.mots{
    display: flex;
    flex-wrap: wrap;
    width: 98vh;
    margin: 2vh;
}
.mot{
    border: 1px solid;
    width: 17vh;
    height: 14vh;
    text-align: center;
    margin: 1vh;
}
#motvert{
    background-color: green;
}
#motnoir{
    background-color: black;
    color: wheat;
}
#motblanc{
  background-color: aliceblue;
}
</style>