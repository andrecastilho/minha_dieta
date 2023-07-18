<style scoped>
@media only screen and (max-device-width: 1000px)  {

.balao{
  
  margin-top: -13% !important;
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
  height: 100%;
  padding: 5%;
  height: 40rem;

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
  text-align: left;
  font-size: large;
  width: 100%;
}
.porcentagem{
  width: 100%;
  background-color: #717850;
  padding-top: 0%;
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
   margin-top: -7.5%;
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
               
              
               <div class="corpo">
                <!-- <div class="balao">
                <div class="drop">
                  <div style="padding-left: 50%; transform: rotate(90deg); color: white;">
                    7%
                  </div>
                </div>
              </div> -->

                  <div style=" float: right;; padding-right: 48%;margin-top: -8.8%;">
               
              </div>
                    <div class="pergunta">
                      Quanto tempo já se passou <b>desde a última vez</b>
                        que você <b>esteve no seu peso ideal?</b>
                    </div>
                    Selecione a opção que melhor se aplica a você:<br><br>
                  <div class="todo">
                      <div class="resposta">
                        <button type="button" name="p1" id="p1" @click="store" class="btn  btn-lg " >ESTOU NO MEU PESO IDEAL AGORA</button><br><br>
                        <button type="button" name="p1" id="p1" @click="store" class="btn  btn-lg " >MENOS DE UM ANO ATRÁS</button><br><br>
                        <button type="button" name="p1" id="p1" @click="store" class="btn  btn-lg " >MAIS DE UM ANO ATRÁS</button><br><br>
                        <button type="button" name="p1" id="p1" @click="store" class="btn  btn-lg " >NÃO CONSIGO ME LEMBRAR</button><br><br>
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
        p:"P6",
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