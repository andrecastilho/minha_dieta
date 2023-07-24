<style scoped>
@media only screen and (max-device-width: 900px) {

  .botao{
    position: relative !important;
    height: 5.5rem !important;
    padding: 0.5rem;
  }
  button{
    width: 13rem !important;
  }
.balao{
  
  margin-top: -6% !important;
}

}
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

.botao{
  position: relative;
  border-radius: 20px;
  height: 4rem;
  border: 0;
} .corpo { 
  font-family: 'Montserrat';
  background-color: #717850;
  color: antiquewhite;
  text-align: center;
  font-size: large;
  height: 100%;
  padding: 5%;

}

.pergunta{
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
  width: 30rem;
}
.porcentagem{
  width: 100%;
  text-align: center;
  background-color: #717850;
  padding-top: 1%;
}
.drop {
  background-color: #0288d1;
    height: 50px;
    width: 30px;
    border-radius: 160% 56% 39% 193%;
    transform: rotate(-90deg);
    float: right;
    margin: 30%;
}
.balao{
   float: right;
   padding-right: 48%;
   margin-top: -2%;
   display: flex;
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

              <!-- <div class="balao">
                <div class="drop">
                  <div style="padding-left: 50%; transform: rotate(90deg);color: white;">
                    2%
                  </div>
                </div>
              </div> -->
             
                <div class="corpo">
                    <div class="pergunta">
                      <b>Você tem a energia e o foco necessários </b>para enfrentar os seus desaﬁos diários?
                    </div>
                    Selecione a opção que melhor se aplica a vocês:<br><br>
                  <div class="todo">
                      <div class="resposta">
                        <button type="button" name="p1" id="p1" @click="store" class="botao" >SIM! TENHO MUITO FOCO E ENERGIA</button><br><br>
                      </div>
                      <div class="resposta">
                        <button type="button" name="p2" id="p2" @click="store" class="botao" >OS MEUS NÍVEIS DE ENERGIA DIMINUEM
DURANTE O DIA</button><br><br>
                      </div>
                      <div class="resposta">
                        <button type="button" name="p3" id="p3" @click="store" class="botao" >ME SINTO SEM ENERGIA E PREGUIÇOSO</button><br><br>
                      </div>
                      <div class="resposta">
                        <button type="button" name="p4" id="p4" @click="store" class="botao" >ME DISTRAIO COM FACILIDADE MESMO
COM ENERGIA ALTA</button><br><br>
                      </div>
                      <div class="resposta">
                        <button type="button" name="p5" id="p5" @click="store" class="botao" >EU ME EXERCITO DE 5 A 7 VEZES POR SEMANA</button><br><br>
                      </div>
                  </div>
              </div>
                   
           
         </container>
</template>

<script lang="ts">

import { defineComponent } from 'vue'

const form = defineComponent({
        p1:null,
        
})

export default defineComponent({


  data() {
    return {
      form: this.$inertia.form({
        p1:null,
        p:"P3",
      }),
    }
  },

  el:'#app',

  methods: {
    
    store(e) {
      e = e || window.event;
      e = e.target || e.srcElement;
    
      let selecionado = document.getElementById(e.id) ;
      this.form.post(route("doadores.saveP",[[selecionado?.textContent],selecionado?.textContent]));
    },
  },
})
</script>