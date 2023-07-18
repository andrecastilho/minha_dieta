<style scoped>
@media only screen and (max-device-width: 600px) {
button{
  position: relative;
  left: -8rem;
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

.corpo{
  font-family: 'Montserrat';
  background-color: #717850;
  color: antiquewhite;
  text-align: center;
  font-size: large;
  padding-left: 5%;
  padding-right: 5%;
  padding-top: 9%;
  height: 35rem;
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
  right: 20rem;
}

</style>
        <template> 
          <container>
            <div class="head" >
              <div style="text-align: center;">
                <img class="logo" :src="'../../storage/img2/LOGOTIPO.png'">
              </div>
            </div>
                <div style="width: 100%;padding-left: 30% ;padding-top: 2%;background-color:#717850;">
                        <img style="padding-left: 2%; width: 40%;" :src="'../storage/img/GRÁFICO.png'" alt="">
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
                    <div style="text-align: center;position: relative;padding-left: 68%;"> 
                        <button type="button" name="p1" id="p1" @click="store" class="btn  btn-lg " >AVANÇAR</button><br><br>
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