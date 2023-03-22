<script setup>
defineProps({
  mots: {
    type: String,
    required: true,
  }
})
</script>
<template>
  <div class="mots">
     <!-- <div class="mot">{{ mots }}</div>   -->
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