<style scoped>
@media only screen and (max-device-width: 600px) {  

  .botao-comida{
    width: 13rem !important;
    height: 6rem;
  }

  .icon{
    width: 3.8rem !important;
  }
   .botao{
    position: relative !important;
    height: 3.5rem !important;
    padding: 0.5rem;
    right: 5rem !important;
  }

  .btn{
    text-align: center;
    width: 10rem !important;
    POSITION: relative;
    left:-2rem;

}
  .botao-comida{
    width: 13rem !important;
  }
  .pergunta{
    position: relative;
    left: 2rem !important;
  }

  #cafe{
    width: 20rem !important;
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
  right: 190%;
  width: 15rem;
  text-align: center;
} .corpo { 
  font-family: 'Montserrat';
  background-color: #717850;
  color: antiquewhite;
  text-align: center;
  font-size: large;
  padding-left: 18%;
    padding-right: 147px;
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
  width: 100%;
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
    margin: 8px;
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


.botao-comida{
  background-color: rgb(60, 70, 37);
  text-align: left;
  border-radius: 40px;
  padding: 3%;
  width: 26rem;
}
.btn{
  position: relative;
  right: 9rem;
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
                    <b style="color: white;">18%</b>
                    <img style="width: 30%;" :src="'../../storage/img/25.png'">
                  </div> -->
                  <div class="pergunta">
                  O que você bebe <b>durante o dia?</b>
                  </div>
                  <br>
                  <div class="todo">
                      <div class="resposta">
                        <form >
                          <div class = "botao-comida" >
                            <label for="cafe">
                            <input type="checkbox" id="cafe" value="cafe" v-model="checkedNames">
                            <img class="icon" for="cafe" style="width: 10%; color: ;" :src="'../../storage/img/xicara-de-cafe.png'">
                           Café</label>
                          </div>
                          <br>
                          <div class="botao-comida">
                            <label for="cha">
                            <input type="checkbox" id="cha" value="cha" v-model="checkedNames">
                            <img class="icon" style="width: 10%;" :src="'../../storage/img/cha-verde.png'">
                              Chá</label>
                          </div><br>

                          <div class="botao-comida">
                            <label for="agua">
                            <input type="checkbox" id="agua" value="agua" v-model="checkedNames">
                            <img class="icon" style="width: 10%;" :src="'../../storage/img/garrafa-de-agua.png'">
                              Água</label>
                          </div><br>
                          <div class="botao-comida">
                            <label for="refrigerante">
                            <input type="checkbox" id="refrigerante" value="refrigerante" v-model="checkedNames">
                            <img class="icon" style="width: 10%;" :src="'../../storage/img/refrigerantes.png'">
                            Refrigerante
                            </label>

                          </div><br>

                          <div class="botao-comida">
                            <label for="suco">
                              <img class="icon" style="width: 10%;" :src="'../../storage/img/suco.png'">
                            <input type="checkbox" id="suco" value="suco" v-model="checkedNames">
                            
                             Suco</label>
                          </div><br>


                          <div class="botao-comida">
                            <label for="agua-com-gas">
                            <input type="checkbox" id="agua-com-gas" value="agua-com-gas" v-model="checkedNames">
                            <img class="icon" style="width: 10%;" :src="'../../storage/img/agua-com-gas.png'">
                             Agua com Gás</label>
                          </div><br>


                              <div class="todo">
                                <div style="text-align: center;position: relative;padding-left: 70%;"> 
                                    <button type="button" @click="store(checkedNames)" class="botao" >AVANÇAR</button><br><br>
                                </div>
                                <input type="hidden"  id="check" value="{{ checkedNames }}"/>
                     
                              </div>
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
        p1:false,
        p:"P24",
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