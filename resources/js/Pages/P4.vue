<style scoped>
@media only screen and (max-device-width: 600px) {   .botao{
    position: relative !important;
    height: 5.5rem !important;
    padding: 0.5rem;
    bottom: -2rem !important;
  }
  button{
    width: 13rem !important;
    position: relative;
    left: -10rem;
  }
  .imagem{
    width: 15rem !important;
    position: relative;
    right: 3.5rem !important;
  }
 
.pergunta{
  position: relative !important;
    width: 20rem !important;
    left: 5rem !important;
    font-size: 1rem !important;
    left: 1rem !important;
    top: 0.5rem;
}
.logo{
  left: 0rem;
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
  bottom: 3rem;
  left: 0rem;
} .corpo { 
  font-family: 'Montserrat';
  background-color: #717850;
  color: antiquewhite;
  text-align: center;
  font-size: large;
  padding-left: 5%;
  padding-right: 5%;
  padding-top: 9%;
  height: 70rem;
}

.pergunt{
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
  position: relative;
  color: white;
  background-color: rgb(60, 70, 37);
  font-size: large;
  text-align: center;
  right: 25rem;
  width: 30rem;
}

.pergunta{
  width: 37rem;
    position: relative;
    left: 20rem;
    bottom: 4rem;
}
.texto{
  width: 100%;
  padding-left: 34% ;
  padding-top: 2%;
  background-color:#717850;
}
.imagem{
  padding-left: 2%;
   width: 46%;
}
.botao:hover{
  background-color: blue;
}
</style>
        <template> 
          <container>
            <div class="head" >
              <div style="text-align: center;">
                <img class="logo" :src="'../../storage/img2/LOGOTIPO.png'">
              </div>
            </div>
                <div class="texto">
                        <img class="imagem" style="" :src="'../storage/img/peso.png'" alt="">
                </div>
                <div class="corpo">
                    <div class="pergunta">
                      <b>A dieta Cetogênica pode ser
                      realmente eﬁcaz, mesmo sem fazer
                      exercícios.</b> Em média, as pessoas que
                      seguem uma dieta Cetogênica
                      durante vários meses são capazes de
                      obter resultados sustentáveis sem um
                      efeito sanfona.
                    </div>
                    <br>
                  <div class="todo">
                    <div> 
                        <button type="button" name="p1" id="p1" @click="store" class="botao" >AVANÇAR</button><br><br>
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
        p1:form.p1,
        p:"P5",
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