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
                    <b>Medidas</b>
                  </div>
                  <div class="todo">
                      <div class="resposta">
                        <form @submit.prevent="store">
                          
                          <input type="text" name="idade" id="idade" v-model="form.idade" placeholder="Idade"> <br><br>
                          <input type="text" name="altura" id="altura" v-model="form.altura" placeholder="Altura"> <br><br>
                          <input type="text" name="peso" id="peso" v-model="form.peso" placeholder="Peso kg"> <br><br>
                          <input type="text" name="peso_desejado" id="peso_desejado" v-model="form.peso_desejado" placeholder="Peso desejado kg"> <br><br>
                          <input type="text" name="email" id="email" v-model="form.email" placeholder="Email"> <br><br>
                          <div style="text-align: center;position: relative;padding-left: 78%;"> 
                            <button type="submit" id="p1" class="btn  btn-lg " >FINALIZAR</button><br><br>
                          </div>
                        </form>
                      </div>
                  </div>
              </div>
                   
           
         </container>
</template>

<script lang="ts">

import { defineComponent } from 'vue'

const form = defineComponent({
        p1:null,
        p:null,
})

export default defineComponent({


  data() {
    return {
      form: this.$inertia.form({
        p1:false,
        p:"P30",
        idade:form.idade,
        peso:form.peso,
        altura:form.altura,
        peso_desejado:form.peso_desejado,
        email:form.email,

      }),
    }
  },

  el:'#app',

  methods: {

  
    
    store(e) {
     
      this.form.post(route("doadores.saveFormulario",[]));
    },
  },
})
</script>