<style scoped>
@media only screen and (max-device-width: 600px) {   
  .botao{
    position: relative !important;
    height: 5.5rem !important;
    padding: 0.5rem;
    left: 1rem;
    width: 15rem;
  }

  .img{
    width: 17rem !important;
  }
.corpo { 
    position: relative;
    height: 70rem !important;
  }
  .btn{
    width: 7.5rem;
    left: 7rem;
    position: relative;
  }
  .pergunta{
    position: relative !important;
    left: 3rem !important;
    font-size: 1rem;
    width: 15rem !important;      
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
.botao:hover{
  background-color: blue;
}
.botao{
  position: relative;
  border-radius: 20px;
  height: 4rem;
  border: 0;
  width: 20rem;
  right: 80%;
} .corpo { 
  font-family: 'Montserrat';
  background-color: #717850;
  color: antiquewhite;
  text-align: center;
  font-size: large;
  padding-left: 5%;
  padding-right: 5%;
  height: 150%;
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
  color: white;
  background-color: rgb(60, 70, 37);
  text-align: center;
  font-size: large;
}
.pergunta{
  position: relative;
  width: 25rem;
  left: 35%;
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

                  <div style="text-align: center;padding-top: 2%;">
                <img style="width: 36%;" class="img" :src="'../../storage/img/GRAFICO5.png'">
              </div>
                  <br>
                  <div class="pergunta">
                  A maioria das pessoas obteve
                  resultados ainda melhores combinando
                  a dieta Cetogênica com maior ingestão
                  de água. No ﬁnal do questionário,
                  iremos recomendar-lhe uma ingestão
                  pessoal de água diária durante a sua
                  transformação Cetogênica.
                  </div>
                  <br>
                  <div class="todo">
                      <div class="resposta">
                        <div style="left:-15rem;text-align: center;position: relative;padding-left: 78%;"> 
                          <button type="button" name="p1" id="p1" @click="store" class="botao" > AVANÇAR</button><br><br>
                        </div>
                       
                      </div>
                  </div>
              </div>
                   
           
         </container>
</template>

<script lang="ts">

import { defineComponent } from 'vue'

const form = defineComponent({
        p1:null,
        p:null
        
})

export default defineComponent({


  data() {
    return {
      form: this.$inertia.form({
        p1:false,
        p:"P26",
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