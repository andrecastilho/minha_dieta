<style scoped>
@media only screen and (max-device-width: 600px) {
  span{
  left: 2.5rem !important;
    position: relative !important;
}
.btn{
  width: 7.5rem;
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
  height: 40rem;
  padding-top: 2rem;
}

.pergunt{
  font-size: 28px;
}

.todo{
  width: 100%;
}

 button{
  color: white;
  background-color: rgb(60, 70, 37);
  text-align: left;
  font-size: large;
  width: 30%;
  text-align: center;
}
span{
  left: 21rem;
    position: relative;
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
                          
                          <input type="text" name="idade" id="idade" @blur="checkForm" v-model="form.idade" placeholder="Idade">
                          <span id="err_idade" style="display: none;">*Obrigatório</span> <br><br>
                          <input @blur="checkForm"  type="text" name="altura" id="altura" v-model="form.altura" placeholder="Altura"> 
                          <span id="err_altura" style="display: none;">*Obrigatório</span> <br><br>
                          <input @blur="checkForm"  type="text" name="peso" id="peso" v-model="form.peso" placeholder="Peso kg"> 
                          <span id="err_peso" style="display: none;">*Obrigatório</span> <br><br>
                          <input @blur="checkForm"  type="text" name="peso_desejado" id="peso_desejado" v-model="form.peso_desejado" placeholder="Peso desejado kg">
                          <span id="err_peso_desejado" style="display: none;">*Obrigatório</span>  <br><br>
                          <input @blur="checkForm"  type="text" name="email" id="email" v-model="form.email" placeholder="Email"> 
                          <span id="err_email" style="display: none;">*Obrigatório</span> <br><br>
                          <div style="bottom"> 
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
        sexo:form.sexo

      }),
    }
  },

  el:'#app',

  methods: {

    store(e) {
     
      this.form.post(route("doadores.saveFormulario",[]));
    },


    checkForm: function (e) {

     var idade = document.getElementById('idade');
     var err_idade = document.getElementById('err_idade');

     var altura = document.getElementById('altura');
     var err_altura = document.getElementById('err_altura');

     var peso = document.getElementById('peso');
     var err_peso = document.getElementById('err_peso');

     var peso_desejado = document.getElementById('peso_desejado');
     var err_peso_desejado = document.getElementById('err_peso_desejado');
     var email = document.getElementById('email');
     var err_email = document.getElementById('err_email');

     


      if (idade.value == "") {
        idade?.focus();
        err_idade.style.display = 'flex';
        return true;
        
      }else{
        err_idade.style.display = 'none';
        //return false;
      }
      if (altura.value == "") {
        altura?.focus();
        err_altura.style.display = 'flex';
        return true;
        
      }else{
        err_altura.style.display = 'none';
      }

      if (peso.value == "") {
        peso?.focus();
        err_peso.style.display = 'flex';
        return true;
        
      }else{
        err_peso.style.display = 'none';
        //return false;
      }

      if (peso_desejado.value == "") {
        peso_desejado?.focus();
        err_peso_desejado.style.display = 'flex';
        return true;
        
      }else{
        err_peso_desejado.style.display = 'none';
        //return false;
      }
      
      if (email.value == "") {
        email?.focus();
        err_email.style.display = 'flex';
        return true;
        
      }else{
        err_email.style.display = 'none';
        //return false;
      }
   

      e.preventDefault();
    }

  },
})
</script>