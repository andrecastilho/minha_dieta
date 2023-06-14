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
  padding: 6%;
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

</style>
        <template> 
          <container>
            <div class="head" >
              <div>
                <img class="logo" :src="'../../storage/img2/LOGOTIPO.png'">
              </div>
            </div>
                <div style="width: 100%;padding-left: 28% ;background-color:#717850;">
                        <img style="width: 50%;" :src="'../storage/img/GRÁFICO.jpg'" alt="">
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
                  <div class="todo">
                      <div class="resposta">
                        <button type="button" name="p1" id="p1" @click="store" class="btn  btn-lg " >AVANÇAR</button><br><br>
                      </div>
                     
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