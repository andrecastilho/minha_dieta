<style scoped>
.head{
    text-align: right;
    padding: 0.5%;
    background-color: rgb(60, 70, 37);
}
.logo {
  width: 17%;
}
.rodape{
  background-color: rgb(60, 70, 37);
  padding: 10%;
}
.direitos{
  color: white;
    font-size: 12px;
    text-align: center;
    padding-top: 20%;
}
.corpo{
  font-family: 'Montserrat';
  background-color: #717850;
  color: antiquewhite;
  text-align: center;
  font-size: large;
  padding-left: 5%;
  padding-right: 5%;
}

.pergunta{
  padding: 1%;
  font-size: 28px;
  
}
.todo{
  width: 100%;
}
.resposta{
  padding-left: 20%;
  padding-right: 17%;
}
button{
color: white;
background-color: rgb(60, 70, 37);
text-align: left;
font-size: large;
width: 100%;
}
.boxPlano{
display: inline;
padding-left: 10%;
width: 100%;
position: relative;

}
.conteudo-box-plano{
text-align: center;
width: 100%;
padding: 0%;
background-color: #717850;
border: 10cap;
}
div.container {
  background-color: #717850;
  width: 100%;
  overflow: hidden;
}
button{
overflow: hidden;
background-image: linear-gradient(to right, rgb(48, 117, 214), rgb(32, 71, 114));
text-align: center;
padding: 5vw 0vw 5vw 0vw;
border: 10px solid #717850;
width: 20%;
height: 20%;
}

div.op2 {
  overflow: hidden;
  background-color: rgb(12, 67, 185);
  display: inline-block;
  margin-right: 0vw;
  text-align: center;
  padding: 5vw 0vw 5vw 0vw;
  min-width:20vw;
  border: 10px solid #717850;
  font-family: 'Montserrat';
}
div.op3 {
  overflow: hidden;
  background-color: rgb(12, 67, 185);
  display: inline-block;
  margin-right: 0vw;
  text-align: center;
  padding: 5vw 0vw 5vw 0vw;
  min-width:20vw;
  border: 10px solid #717850;
  font-family: 'Montserrat';
}
</style>
        <template> 
          <container>
            <div class="head" >
              <div style="text-align: center;">
                <img class="logo" :src="'../../storage/img2/LOGOTIPO.png'">
              </div>
            </div>
               <div style="width: 100%; height: 2px;background-color: blue; "> </div>
                <div class="corpo">
                  <div class="pergunta">
                    Processando informações ...
                  </div>
                  <div class="todo">
                    <di class="pergunta">
                      <h1>Obtenha seu plano na dieta Cetogênica e o acesso ao conteudo Vip</h1>
                    </di>
                    <div class="pergunta">
                      <b>Escolha seu plano</b>
                    </div>
                  </div>
                  <div class="container">
                    <button class="op1">
                      <div>3 Mêses Plano Keto Diet</div>
                      <div>R$2.30</div>
                      <div >Cobrado a cada 3 mêses</div>
                    </button>
                    <button class="op2">1 Mêses Plano Keto Diet
                      <div>R$4.60</div>
                      <div >Cobrado a cada 1 mêses</div>
                    </button>
                    <button class="op3">6 Mêses Plano Keto Diet
                      <div>R$50</div>
                      <div >Cobrado a cada 6 mêses</div>
                    </button>
              </div>
            </div>
             
          <div class="rodape">
              <div>
                <img class="logo" :src="'../../storage/img2/LOGOTIPO.png'">
              </div>
              <div class="direitos">
                Cetogênica | Todos os direitos reservados
              </div>
          </div>
         </container>
</template>

<script lang="ts">

import { defineComponent } from 'vue'


export default defineComponent({

 
});
 
</script>