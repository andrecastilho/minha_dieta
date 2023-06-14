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
                    <b style="color: white;">20%</b>
                    <img style="width: 30%;" :src="'../../storage/img/25.png'">
                  </div>
                  <div class="pergunta">
                    <b>Qual alimento não pode</b>
                      faltar na sua alimentação?
                  </div>
                  <div class="todo">
                      <div class="resposta">
                        <button type="button" name="p1" id="p1" @click="store" class="btn  btn-lg " ><img class="logo" style="width: 10%;" :src="'../../storage/img/ovo-frito.png'"> Ovo</button><br><br>
                        <button type="button" name="p2" id="p2" @click="store" class="btn  btn-lg " ><img class="logo" style="width: 10%;" :src="'../../storage/img/castanha.png'"> Castanhas</button><br><br>
                                                <button type="button" name="p2" id="p2" @click="store" class="btn  btn-lg " ><img class="logo" style="width: 10%;" :src="'../../storage/img/queijo.png'"> Queijo</button><br><br>
                        <button type="button" name="p2" id="p2" @click="store" class="btn  btn-lg " ><img class="logo" style="width: 10%;" :src="'../../storage/img/queijo.png'"> Queijo cottage</button><br><br>
                        <button type="button" name="p2" id="p2" @click="store" class="btn  btn-lg " ><img class="logo" style="width: 10%;" :src="'../../storage/img/manteiga.png'"> Manteiga</button><br><br>
                        <button type="button" name="p2" id="p2" @click="store" class="btn  btn-lg " ><img class="logo" style="width: 10%;" :src="'../../storage/img/coco.png'"> Coco</button><br><br>
                        <button type="button" name="p2" id="p2" @click="store" class="btn  btn-lg " ><img class="logo" style="width: 10%;" :src="'../../storage/img/banana.png'"> Banana</button><br><br>
                        
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
        p1:null,
        p:"P11",
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