<style scoped>
@media only screen and (min-device-width: 1000px) {

  /* label {
    font-size: 1vh !important;
    padding: 9%;
    flex-wrap: nowrap;
    width: 60%;
  } */

}


@media only screen and (max-device-width: 750px) {

  .textos{
  background-color: #fff !important;
}
  .prato2{
    display: none;
  }
  .junte-se{
    font-size: 10%;
  }
  .o_que_e_citogenica{
    padding-top: 2rem !important;
  }
  #textoImagem1{
    position: absolute;
    font-size: 50% !important;
  }
  .mulher-homen{
    position: unset !important;
  }
  .homem{
    font-size: 57% !important;
    padding-bottom: 2% !important;
    width: 33% !important;
  }
  .mulher{
    font-size: 67% !important;
  }
  .plano{
    padding-left: 0% !important;
    padding-right: 0% !important;
  }
  button{
    font-size: 60% !important;
  }
  .oque-vai-receber{
    width: 100% !important;
  }
}



.corpo {
  font-family: 'Montserrat';
  background-color: #717850;
  color: antiquewhite;
  text-align: center;
  font-size: large;
  width: 85%;
}

.table-responsive {
  height: 100%;
  width: 94%;
}

.head {
  text-align: right;
  padding: 2%;
  background-color: rgb(60, 70, 37);
}

.menu {
  padding-right: 10%;
  z-index: 1;
}

.logo {
  width: 15%;
  float: left;
  padding-left: 3%;
}

.prato {
  width: 50%;
}

container {
  position: relative;
}

#textoImagem1 {
  position: absolute;
  font-size: 180%;
  left: 5%;
  top: 135px;
  color: rgb(60, 60, 03);
}

#textoImagem2 {
  position: absolute;
  font-size: 32px;
  left: 5%;
  top: 180px;
  color: rgb(60, 60, 03);
  font-family: 'Montserrat';
}

.plano {
     padding-left: 32%;
    padding-right: 15%;
    word-wrap: break-word;
}

button {
  color: white;
  background-color: rgb(60, 70, 37);
  text-align: left;
  font-size: large;
  width: 77%;
}

span {
  font-size: 35px;
  background-image: linear-gradient(to right, rgb(224, 70, 70), rgb(222, 51, 117));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

d {
  position: relative;
}

.jornais {
  width: 50%;
}

.objetivos-emagrecimento {
  padding: 6%;
}

.todo-plano {
  text-align: left;
}

.oque-vai-receber {
  color: white;
  background-color: rgb(60, 70, 37);
  text-align: left;
  font-size: large;
  width: 50%;
  border-radius: 3%;
  padding: 2%;
  float: left;
  word-wrap: break-word;
  font-size: 80%;
}

.junte-se {
  padding: 7%;
  background-color: #717850;
  color: white;
  text-align: center;
  font-family: 'Montserrat';
  font-size: 22px;
}

.prato2 {
  width: 50%;
  border-radius: 2%;
  padding-top: 20%;
}

.btn-comece-agora {
  border-radius: 40px 40px 40px;
  background-image: linear-gradient(to right, rgb(224, 70, 70), rgb(222, 51, 117));
  width: 24%;
  text-align: center;
  margin: 10%;
}

.botao-comece-agora {
  padding-left: 10%;
}

.rodape {
  background-color: rgb(60, 70, 37);
  padding: 10%;
}

.direitos {
  color: white;
  font-size: 12px;
  text-align: center;
  padding-top: 20%;
}

#btn-comece-agora {
  padding: 10%;
}

#prato2 {
  padding-top: 33%;
}

.checked {
  width: 10%;
  filter: url(svg#ee3e03)
}

.painel-duplo {
  background-color: #717850;
}

.mulher-homen {
  -webkit-display: flex;
-moz-display: flex;
-ms-display: flex;
-o-display: flex;
display: flex;
  position: absolute;
  top: 10.5%;
  left: 9%;
}

.mulher {
  padding-left: 20%;

}

.mulher a {
  background-image: linear-gradient(to right, rgb(224, 70, 70), rgb(225, 111, 144));
  font-size: 90%;

}

.homem {
  padding-left: 1%;
}

.homem a {
  font-size: 90%;
}

.bloco2 {
  margin: 10%;
  padding-left: 12%;
}

.o_que_e_citogenica{
    box-sizing: border-box;
    display: block;
    justify-content: center;
    align-items: center;
    -webkit-flex-wrap: wrap;
-moz-flex-wrap: wrap;
-ms-flex-wrap: wrap;
-o-flex-wrap: wrap;
flex-wrap: wrap;
    padding-top: 12rem;
    font-size: 2rem;
}

#menu__toggle {
  opacity: 0;
  z-index: 1;
}
#menu__toggle:checked + .menu__btn > span {
  transform: rotate(45deg);
  z-index: 1;
}
#menu__toggle:checked + .menu__btn > span::before {
  top: 0;
  transform: rotate(0deg);
}
#menu__toggle:checked + .menu__btn > span::after {
  top: 0;
  transform: rotate(90deg);
}
#menu__toggle:checked ~ .menu__box {
  left: 0 !important;
}
.menu__btn {
  position: fixed;
  top: 20px;
  width: 26px;
  height: 26px;
  cursor: pointer;
  z-index: 1;
}
.menu__btn > span,
.menu__btn > span::before,
.menu__btn > span::after {
  display: block;
  position: absolute;
  width: 100%;
  height: 2px;
  background-color: #fff;
  transition-duration: .25s;
}
.menu__btn > span::before {
  content: '';
  top: -8px;
}
.menu__btn > span::after {
  content: '';
  top: 8px;
}
.menu__box {
  display: block;
  position: fixed;
  top: 0;
  left: 100%;
  width: 30%;
  height: 100%;
  margin: 0;
  padding: 80px 0;
  list-style: none;
  background-color: #ECEFF1;
  box-shadow: 2px 2px 6px rgba(0, 0, 0, .4);
  transition-duration: .25s;
  z-index: 1;
}
.menu__item {
  display: block;
  padding: 12px 24px;
  color: #333;
  font-family: 'Roboto', sans-serif;
  font-size: 20px;
  font-weight: 600;
  text-decoration: none;
  transition-duration: .25s;
}
.menu__item:hover {
  background-color: #CFD8DC;
}
.textos{
  background-color: #717850;
}

</style>
<template>
  <container>
    <div class="head">
      <div>
        <img class="logo" :src="'../storage/img/LOGOTIPO.png'">
      </div>
      <div class="menu">
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
              <span></span>
            </label>

            <ul class="menu__box">
              <li><a class="menu__item" href="#">Home</a></li>
              <li><a class="menu__item" href="#">About</a></li>
              <li><a class="menu__item" href="#">Team</a></li>
              <li><a class="menu__item" href="#">Contact</a></li>
              <li><a class="menu__item" href="#">Twitter</a></li>
            </ul>
          </div>
      </div>
    </div>
    <div>
      <div>
        <div class="imagem_prato">
          <img class="d-block w-100" :src="'../storage/img/PRATO.jpg'" alt="">
        </div>
        <div class="textos">
          <a id="textoImagem1" style="font-family: 'Montserrat';">Faça Um Teste de Um Minuto para Criar<br>
            <br>Sua Dieta Cetogênica Personalizada </a>
          <br><br>
        </div>



        <div class="mulher-homen">
          <div class="mulher">
            <a class="btn btn-primary btn-lg " href="p/?sexo=mulher" id="mulher" role="button" aria-pressed="true"><img
                style="float:right;width: 15%; ;" :src="'../storage/img/MULHER.png'" alt="homem"> Mulher </a>
          </div>
          <div class="homem">
            <a class="btn btn-primary btn-lg " href="p/?sexo=homem" id="homem" role="button" aria-pressed="true"><img
                style="float:right;width: 18%; ;" :src="'../storage/img/HOMEM.png'" alt="homem">Homem</a>
          </div>
        </div>

      </div>
    </div>
    <div style="background-color: #717850;">
      <div class="corpo">
        <div class="objetivos-emagrecimento">
          Atinja seus <b>objetivos de emagrecimento </b><br> com o nosso <b>plano cetogênico</b>
        </div>
        <div class="todo-plano">
          <div class="plano">
            <button type="button" class="btn  btn-lg ">
              <div style="float: left;"><span><b>01</b></span> </div>
              <div style="text-align: right;padding-top: 10px;;">
                <d>Perﬁl de dieta instantâneo gratuito</d>
              </div>
            </button><br><br>
            <button type="button" class="btn  btn-lg ">
              <div style="float: left;"><span><b>02</b></span> </div>
              <div style="text-align: right;padding-top: 10px;;">
                <d>Plano alimentar super rápido</d>
              </div>
            </button><br><br>
            <button type="button" class="btn  btn-lg ">
              <div style="float: left;"><span><b>03</b></span> </div>
              <div style="text-align: right;padding-top: 10px;;">
                <d>Desenhado exclusivo pra você</d>
              </div>
            </button><br><br>
            <button type="button" class="btn  btn-lg ">
              <div style="float: left;"><span><b>04</b></span> </div>
              <div style="text-align: right;padding-top: 10px;;">
                <d>Uma assinatura para grandes resultados</d>
              </div>
            </button><br><br>
            <button type="button" class="btn  btn-lg ">
              <div style="float: left;"><span><b>05</b></span> </div>
              <div style="text-align: right;padding-top: 12px;;">
                <d>Guia deﬁnitivo para dieta cetogênica</d>
              </div>
            </button><br><br><br><br>
          </div>
        </div>

        <div style="overflow: hidden;">
          <img class="jornais" :src="'../storage/img2/JORNAIS.png'">
        </div>
        <br>
        <div class="junte-se">
          Junte-se a mais de <b>50MIL+</b> de pessoas <br>por todo o Brasil
        </div>

        <div class="bloco2">
          <div class="oque-vai-receber">
            <h3 style="padding:10%;"> O que você vai receber:</h3>
            <div style="padding: 5%;">
              <img class="checked" :src="'../storage/img/checked.png'"> Plano alimentar para um emagrecimento saudável e
              eﬁcaz<br>
              <img class="checked" :src="'../storage/img/checked.png'"> Receitas deliciosas de fácil preparo<br>
              <img class="checked" :src="'../storage/img/checked.png'">Grupo de acompanhamento mensal no telegram<br>
              <img class="checked" :src="'../storage/img/checked.png'"> Dieta cetogênica personalizada com 4 refeições
              diárias<br>
              <img class="checked" :src="'../storage/img/checked.png'">Suporte para tirar todas as suas dúvidas<br>
            </div>
          </div>
          <div class="">
            <img class="prato2" :src="'../storage/img2/prato2.jpg'">
          </div>

          <div class="o_que_e_citogenica">
            O que é cetogênica?
          </div>
          <br>
          <div class="painel-duplo">
            <div class="oque-vai-receber" style="float: right;width:45%;">
              <b>A dieta Cetogênica é bem simples</b> -
              alimente-se de gorduras para eliminar
              gordura. A ideia básica deste estilo de
              vida é que <b>ele ensina o seu corpo </b>a
              substituir a glicose como a principal
              fonte de energia e no lugar <b>queima
                gordura como combustível.</b><br>
            </div>
            <div class="oque-vai-receber" style="float: left;width:45%;">
              <b>A dieta Cetogênica envolve uma
                drástica redução da ingestão de
                carboidratos</b> para não mais que 5% da
              sua alimentação diária, que passa a ter
              <b>75% de gorduras e 20% de proteínas.</b>
              O mundo <b>está louco por esta dieta</b>
              porque são muitos os benefícios ao
              segui-la.<br>
            </div>
          </div>
        </div>

        <div class="botao-comece-agora">
          <button type="button" class="btn-comece-agora">Comece Agora</button>
        </div>
      </div>
    </div>

    <div class="rodape">
      <div>
        <img class="logo" :src="'../storage/img2/LOGOTIPO.png'">
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
  p1: null,

})

export default defineComponent({


  data() {
    return {
      form: this.$inertia.form({
        sexo: null
      }),
    }
  },

  el: '#app',

  methods: {

    store(e) {

      e = e || window.event;
      e = e.target || e.srcElement;

      let homemMulher = document.getElementById(e.id);

      this.form.post(route("doadores.save", [homemMulher?.textContent]));
    },
  },
})
</script>