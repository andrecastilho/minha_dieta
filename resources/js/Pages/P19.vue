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
              <div style="text-align: center;">
                <img class="logo" :src="'../../storage/img2/LOGOTIPO.png'">
              </div>
            </div>
               <div style="width: 100%; height: 2px;background-color: blue; "> </div>
                <div class="corpo">
                  <div class="pergunta">
                    <img class="logo" :src="'../../storage/img2/APETITE.png'">
                  </div>
                  <div class="todo">
                      <div class="resposta">
                        <b>Você costuma comer por impulso </b>emocional?
                      </div>
                  </div>
                  <button type="button" name="p1" id="p1" @click="store" class="btn  btn-lg " >SIM, MUITO</button><br><br>
                  <button type="button" name="p1" id="p1" @click="store" class="btn  btn-lg " >MUITO AS VEZES</button><br><br>
                  <button type="button" name="p1" id="p1" @click="store" class="btn  btn-lg " >RARAMENTE</button><br><br>
                  <button type="button" name="p1" id="p1" @click="store" class="btn  btn-lg " >NUNCA</button><br><br>
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
        p:null
        
})

export default defineComponent({


  data() {
    return {
      form: this.$inertia.form({
        p1:false,
        p:"P20",
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