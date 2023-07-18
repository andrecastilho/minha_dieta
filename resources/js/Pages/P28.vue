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
  padding-top: 9%;
  height: 72rem;
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
  text-align: center;
  background-color: #717850;
  padding-top: 1%;
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
                  <!-- <div class="porcentagem">
                    <b style="color: white;">100%</b>
                    <img style="width: 30%;" :src="'../../storage/img/100.png'">
                  </div> -->
                  <div class="pergunta">
                    Em que parte do corpo você quer se concentrar durante o processo de perda de peso?
                  </div>
                  <br>
                  <div class="todo">
                      <div class="resposta">
                        
                        <button type="button" name="p1" id="p1" @click="store" class="btn  btn-lg " ><img class="logo" style="width: 10%;" :src="'../../storage/img/barriga.png'"> BARRIGA</button><br><br>
                        <button type="button" name="p1" id="p1" @click="store" class="btn  btn-lg " ><img class="logo" style="width: 10%;" :src="'../../storage/img/braco.png'"> BRAÇOS</button><br><br>
                        <button type="button" name="p1" id="p1" @click="store" class="btn  btn-lg " ><img class="logo" style="width: 10%;" :src="'../../storage/img/cintura.png'"> CINTURA</button><br><br>
                        <button type="button" name="p1" id="p1" @click="store" class="btn  btn-lg " ><img class="logo" style="width: 10%;" :src="'../../storage/img/coxa.png'"> COXAS</button><br><br>
                        <button type="button" name="p1" id="p1" @click="store" class="btn  btn-lg " ><img class="logo" style="width: 10%;" :src="'../../storage/img/XIS.png'"> NENHUMA DAS ANTERIORES</button><br><br>
                        
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
        p:"P29",
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