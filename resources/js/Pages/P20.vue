<style scoped>
@media only screen and (max-device-width: 750px) {
button{
  width:  12rem !important;
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
} .corpo { 
  font-family: 'Montserrat';
  background-color: #717850;
  color: antiquewhite;
  text-align: center;
  font-size: large;
  padding-left: 5%;
  padding-right: 5%;
  padding-top: 2rem;
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
  color: white;
  background-color: rgb(60, 70, 37);
  text-align: left;
  font-size: large;
  width: 30rem;
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
                    <b style="color: white;">60%</b>
                    <img style="width: 30%;" :src="'../../storage/img/50.png'">
                  </div> -->
                  <div class="pergunta">
                    Com que frequência <B>você come fora de casa durante a semana?</B>
                  </div>
                  <br>
                  <div class="todo">
                      <div class="resposta">
                        <button type="button" name="p1" id="p1" @click="store" class="botao" > DIARIAMENTE</button><br><br>
                  <button type="button" name="p1" id="p1" @click="store" class="botao" > 1 VEZ POR SEMANA</button><br><br>
                  <button type="button" name="p1" id="p1" @click="store" class="botao" > POUCAS VEZES POR MÊS</button><br><br>
                  <button type="button" name="p1" id="p1" @click="store" class="botao" > ARAMENTE</button><br><br>
                  <button type="button" name="p1" id="p1" @click="store" class="botao" > NUNCA</button><br><br>
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
        p1:null,
        p:"P21",
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