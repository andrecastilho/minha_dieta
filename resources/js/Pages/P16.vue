<style scoped>
@media only screen and (max-device-width: 600px) {  
   .botao{
    position: relative !important;
    width: 15rem !important;
    text-align: center;
    left: -5rem;
    height: 5.5rem !important;
    padding: 0.5rem;
  }
  .btn{
    position: relative;
    left: -2rem;
  }
.avancar{
  width: 165% !important;
  padding-left: -1% !important;
}
.button{
  width: 150% !important;
}
.botao-comida{
  width: 12rem;
  padding: 29% !important;
  word-wrap: break-word;
}
.logo{
  width: 20% !important;
}

}
.head{
    text-align: right;
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
.botao:hover{
  background-color: blue;
}
.botao{
  position: relative;
  border-radius: 20px;
  height: 4rem;
  border: 0;
  width: 15rem;
  text-align: center;
  right: 13rem;
} .corpo { 
  font-family: 'Montserrat';
  background-color: #717850;
  color: antiquewhite;
  text-align: center;
  font-size: large;
  padding-left: 18%;
    padding-right: 147px;
    padding-top: 2rem;
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
    /* width: 100%; */
    position: relative;
    right: 10rem;
}
.porcentagem{
  width: 100%;
  text-align: center;
  background-color: #717850;
  padding-top: 1%;
}
.porcentagem{
  width: 100%;
  text-align: center;
  background-color: #717850;
  padding-top: 1%;
}
input[type=checkbox] {
    outline: none;
    position: relative;
    z-index: 1;
    margin: 10px;
    padding: 0;
    cursor: pointer;
    width: 48px;
    height: 24px;
    overflow: hidden;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    float: right;
}

/*cria os elementos before e after*/
input[type=checkbox]::before, input[type=checkbox]::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;

    /*efeito animado*/
    transition: left .15s cubic-bezier(.25, .8, .25, .1),
                transform .15s ease-in;
}

/*Cor padrão de quando o elemento não esta selecionado*/
input[type=checkbox]::before {
    background-color: #ccc;
    width: 100%;
    height: 100%;
    border-radius: 28px;
}

/*estiliza para parecer um botão toggle*/
input[type=checkbox]::after {
    margin: 2px 0 0 2px;
    background: #fff;
    width: 20px;
    height: 20px;
    border-radius: 100%;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
}

/*troca a cor se estiver com a propriedade checked no html ou o usuário "checar"*/
input[type=checkbox]:checked::before {
    background-color: #75a940;
}

/*muda a posição do botão toggle se estiver checado*/
input[type=checkbox]:checked::after {
    left: 24px;
}

/*Efeito opcional de quando pressiona o botão*/
input[type=checkbox]:not([disabled]):active::after {
    transform: scale(1.15, 0.85);
}

/*Se o input tiver com o atributo disabled a cor é alterada*/
input[type=checkbox]:disabled::before {
     background-color: #b1b4b7 !important;
}

/*Se o input tiver com o atributo disabled a cor é alterada*/
input[type=checkbox]:disabled::after {
     background-color: #dcd8d8 !important;
}

/*OUTRAS CORES = Cores alternativas*/

input[type=checkbox].red:checked::before {
     background-color: #fd4554;
}

input[type=checkbox].blue:checked::before {
     background-color: #0f90dc;
}

input[type=checkbox].red:checked::before {
     background-color: #fd4554;
}

input[type=checkbox].purple:checked::before {
     background-color: #9e3eff;
}
.botao-comida{
  background-color: rgb(60, 70, 37);
  text-align: left;
  border-radius: 40px;
  padding: 2%;
}
.avancar{
  text-align: center;
  position: relative;
  padding-left: 70%;
}

.botao-comida:active{
  background-color: #0f90dc !important;
}
.clicado{
  background-color: #0f90dc;
}
.desclicado{
  background-color: rgb(60, 70, 37);
}
input[type=checkbox]{
  display: none;

}
.pergunta{
  position: relative;
    left: 2rem;
}
</style>
        <template> 
          <container>
            <div class="head" >
              <div style="text-align: center;">
                <img class="logo" :src="'../../storage/img/LOGOTIPO.png'">
              </div>
            </div>
               <div style="width: 100%; height: 2px;background-color: blue; "> </div>
                <div class="corpo">
                  <!-- <div class="porcentagem">
                    <b style="color: white;">36%</b>
                    <img style="width: 30%;" :src="'../../storage/img/25.png'">
                  </div> -->
                  <div class="pergunta">
                    Escolha a opção que <b>mais tem a ver com você</b>
                  </div>
                  <br>
                  <div class="todo">
                      <div class="resposta">
                        <form >
                          <div class = "botao-comida" >
                            <label for="nao-durmo-suficiente" style="width: 100%;">
                              <img class="logo" for="nao-durmo-suficiente" style="width: 10%; color: ;" :src="'../../storage/img/com-sono.png'">
                          Não durmo o suficiente
                              <input type="checkbox" id="nao-durmo-suficiente" value="nao-durmo-suficiente" v-model="checkedNames">
                            
                            </label>
                          </div>
                          <br>
                          <div class="botao-comida">
                            <label for="como-tarde-da-noite" style="width: 100%;">
                              <img class="logo" style="width: 10%;" :src="'../../storage/img/lua.png'">
                              Como tarde da noite
                            <input type="checkbox" id="como-tarde-da-noite" value="como-tarde-da-noite" v-model="checkedNames">
                            
                           </label>
                          </div><br>

                          <div class="botao-comida">
                            <label for="consumo muito sal" style="width: 100%;">
                              <img class="logo" style="width: 10%;" :src="'../../storage/img/sal.png'">
                              Consumo muito sal
                            <input type="checkbox" id="consumo muito sal" value="consumo muito sal" v-model="checkedNames">
                            
                            </label>
                          </div><br>
                          <div class="botao-comida">
                            <label for="nao-consigo-laragar-o-acucar" style="width: 100%;">
                              <img class="logo" style="width: 10%;" :src="'../../storage/img/cubo-de-acucar.png'">
                              Não consigo largar o açucar
                            <input type="checkbox" id="nao-consigo-laragar-o-acucar" value="nao-consigo-laragar-o-acucar" v-model="checkedNames">
                            
                            </label>
                          </div><br>

                          <div class="botao-comida">
                            <label for="amo-refrigerante" style="width: 100%;">
                              <img class="logo" style="width: 10%;" :src="'../../storage/img/refrigerantes.png'">
                              Amo refrigerante
                            <input type="checkbox" id="amo-refrigerante" value="amo-refrigerante" v-model="checkedNames">
                            
                            </label>
                          </div><br>


                          <div class="botao-comida">
                            <label for="nenhuma" style="width: 100%;">
                              <img class="logo" style="width: 10%;" :src="'../../storage/img/XIS.png'">
                              Nenhuma
                            <input type="checkbox" id="nenhuma" value="nenhuma" v-model="checkedNames">
                            </label>
                          </div><br>

                                <div class="avancar" > 
                                    <button type="button" @click="store(checkedNames)" class="botao" >AVANÇAR</button><br><br>
                                </div>
                                <input type="hidden"  id="check" value="{{ checkedNames }}"/>
                     
                        </form>
                        <br>
                        <!-- <span>Selecionados: {{ checkedNames }}</span> -->
                      </div>
                     
                  </div>
              </div>
         </container>
</template>

<script lang="ts">

$(document).ready(function() {
   
   $('.botao-comida').change(function() {
 
     if($(this).hasClass('clicado')){
 
       $(this).addClass('desclicado');
       $(this).removeClass('clicado');
 
     }else{
       $(this).addClass('clicado');
       $(this).removeClass('desclicado');
 
     }
   });
 
  });


import { defineComponent } from 'vue'

const form = defineComponent({
        p1:null,
        
})

const checkedNames=[];

export default defineComponent({


  data() {
    return {
      checkedNames: [],
      form: this.$inertia.form({
        p1:"MULTIPLE",
        p:"P17",
      }),
    }
  },


  methods: {
    
    store(checkedNames) {
     
      this.form.post(route("doadores.saveP",[[checkedNames],checkedNames]));
    },
  },
})
</script>