<style scoped>
@media only screen and (max-device-width: 900px) {

.balao{
  
  margin-top: -7% !important;
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
  padding: 10%;

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

               <div class="balao">
                <div class="drop">
                  <div style="padding-left: 50%; transform: rotate(90deg); color: white;">
                    6%
                  </div>
                </div>
              </div>
            
                <div class="corpo">
                    <div class="pergunta">
                      É fácil para <b>você perder peso</b>?
                    </div>
                    Nos conte o quão é difícil é o processo de perder peso para você:<br><br>
                  <div class="todo">
                      <div class="resposta">
                        <button type="button" name="p2" id="p2" @click="store" class="btn  btn-lg " >SE EU ME DEDICAR - PERCO PESO FÁCIL</button><br><br>
                      </div>
                      <div class="resposta">
                        <button type="button" name="p3" id="p3" @click="store" class="btn  btn-lg " >PERDER PESO É UM POUCO DIFÍCIL PARA MIM</button><br><br>
                      </div>
                     
                      <div class="resposta">
                        <button type="button" name="p5" id="p5" @click="store" class="btn  btn-lg " >SEMPRE FOI MUITO DIFÍCIL</button><br><br>
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
        p:"P4",
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