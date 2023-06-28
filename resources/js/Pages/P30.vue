<style scoped>
/* INICIO REGRAS PARA DISPOSITIVOS DE IMPRESSÃO */
@media print {

}
/* FIM REGRAS PARA DISPOSITIVOS DE IMPRESSÃO */

/* INICIO REGRAS PARA DISPOSITIVOS COM LARGURA MÍNIMA DE 320 PIXELS. POR EXEMPLO: SMARTHPHONES */
@media screen and (min-width: 320px) {

}
/* FIM REGRAS PARA DISPOSITIVOS COM LARGURA MÍNIMA DE 320 PIXELS. POR EXEMPLO: SMARTHPHONES */

/* INICIO REGRAS PARA DISPOSITIVOS COM LARGURA MÍNIMA DE 768 PIXELS. POR EXEMPLO: TABLETS */
@media screen and (max-width: 580px) {
.capa-imagem{
  display: none !important;
}
}
/* FIM REGRAS PARA DISPOSITIVOS COM LARGURA MÍNIMA DE 768 PIXELS. POR EXEMPLO: TABLETS */

/* INICIO REGRAS PARA DISPOSITIVOS COM LARGURA MÍNIMA DE 1024 PIXELS. POR EXEMPLO: COMPUTADORES DESKTOP E NOTEBOOKS */
@media screen and (min-width: 1024px) {

}

container{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .capa-imagem{
   overflow: hidden;
  }

  .logo {
  width: 30%;
  padding: 2%;
  background-color: rgb(60, 70, 37);
}
div{
  border: 1px black solid;
  font-family: 'Montserrat';
}.prato_ultima_pagina{
  width: 135%;
}
button {
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button:hover {
    background-color: #4CAF50; /* Green */
    color: white;
}
a {
    background-color: #ee7a0d; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    border-radius: 20% 10%;
    margin: 10% ;
}
.row0{
  position: absolute;
    top: 78%;
    width: 100%;
    background-color: rgb(60, 70, 37);
    color: white;
    padding: 10%;
    padding-top: 5%;
    font-size: 140%;

}
h3{
  color: #4CAF50;
  font-size: 150%;
  padding-top: 1%;
  font-weight: bold;
}
.para-de-perder{
  font-size: 150%;
  margin: 10%;
}
.for-logo{
  margin: 10%;
}
.balao-horizontal{
  border: 1px white solid;
  color: white;
  margin: 4px 2px;
  border-color: white;
  border-radius: 12px;
    display: grid;  
    grid-template-columns: 1fr 1fr 1fr;  
    grid-template-rows: 50px 30px;  
    width: 63%;
    text-align: center;
    font-size: 80%;
}
.row{
  position: absolute;
    width: 100%;
    background-color: rgb(60, 70, 37);
}
.medidas{
  font-size: 110%;
  color: darkolivegreen;
  ;

}
</style>
        <template> 
          <container>

            <div class="row" style="background-color: bisque;">
              <div class="col-sm" style="margin: 2%; text-align: center;margin-top: 10%;padding-left: 4%;text-align: left;">
                <div class="for-logo">
                  <img class="logo" :src="'../storage/img/LOGOTIPO.png'">
                </div>
                <div class="para-de-perder">
                  Pare de perder tempo com dietas que não funcionam, <br>
                  <b style="font-weight: bold;">emageça com saúde
                  e seja mais confiante !</b>
                </div>
                <a class=""> Quero meu plano agora</a>
              </div>
              
              <div class="col-sm" style="z-index: 1000;">
                <div class="capa-imagem">
                  <img class="prato_ultima_pagina" :src="'../storage/img/prato_ultima_pagina.png'">
                </div>
              </div>
            </div>
              <div class="row0">
                <div class="col-sm" >
                   Lucas com base em suas respostas, recomendamos o
                  </div>
                  <div class="col-sm" style="padding-top: 0%;">
                  <b><h3>Método CETO30</h3></b>
                </div>
                <div class="col-sm" style="padding-top: 0%;">
                <b>o plano de dieta cetogênica que vai <br>acelerar seu ema recimento em 4 semanas .</b>
                </div>

                <div class="balao-horizontal">
                  <div>
                    <div class="medidas">
                      <b>33</b></div>
                    <div>Sua idade</div>
                  </div>
                  <div>
                    <div class="medidas">
                      <b>1.74</b></div>
                    <div>Sua Altura (cm )</div>
                  </div>
                  <div>
                    <div class="medidas">
                       <b>33</b> </div>
                    <div>Seu Peso (kg)</div>
                  </div>
                </div>       
              </div>  
                    
        
         </container>
</template>



<script lang="ts">
// import { defineComponent } from 'vue'
// export default defineComponent({

// });
 
</script>