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
                  <div class="porcentagem">
                    <b style="color: white;">25%</b>
                    <img style="width: 30%;" :src="'../../storage/img/25.png'">
                  </div>
                    <div class="pergunta">
                      Como é o seu dia a dia normal?
                    </div>
                  <div class="todo">
                      <div class="resposta">
                        <button type="button" name="p1" id="p1" @click="store" class="btn  btn-lg " >NO ESCRITÓRIO</button><br><br>
                      </div>
                      <div class="resposta">
                        <button type="button" name="p2" id="p2" @click="store" class="btn  btn-lg " >NO ESCRITÓRIO, MAS SAIO COM FREQUÊNCIA</button><br><br>
                      </div>
                      <div class="resposta">
                        <button type="button" name="p3" id="p3" @click="store" class="btn  btn-lg " >PASSO A MAIOR PARTE DO DIA DE PÉ</button><br><br>
                      </div>
                      <div class="resposta">
                        <button type="button" name="p4" id="p4" @click="store" class="btn  btn-lg " >TRABALHO BRAÇAL</button><br><br>
                      </div>
                      <div class="resposta">
                        <button type="button" name="p5" id="p5" @click="store" class="btn  btn-lg " >PASSO A MAIOR PARTE DO DIA EM CASA</button><br><br>
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
        p:"P12",
        p1:false
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