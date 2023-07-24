<style scoped>
/* INICIO REGRAS PARA DISPOSITIVOS DE IMPRESSÃO */
@media print {}

/* FIM REGRAS PARA DISPOSITIVOS DE IMPRESSÃO */

/* INICIO REGRAS PARA DISPOSITIVOS COM LARGURA MÍNIMA DE 320 PIXELS. POR EXEMPLO: SMARTHPHONES */
@media screen and (min-width: 320px) {}

/* FIM REGRAS PARA DISPOSITIVOS COM LARGURA MÍNIMA DE 320 PIXELS. POR EXEMPLO: SMARTHPHONES */

/* INICIO REGRAS PARA DISPOSITIVOS COM LARGURA MÍNIMA DE 768 PIXELS. POR EXEMPLO: TABLETS */
@media screen and (max-width: 880px) {

  #food-icon {
    width: 8rem !important;
  }

  .garantia {
    top: 40rem !important;
  }

  .verdes {
    width: 7rem !important;
  }

  #bmi-phase-2 {
    position: relative;
    width: 7rem !important;
  }

  #metabolic-age-phase-1 {
    position: relative;
    right: 1.5rem;
  }

  .js-animation {
    width: 9rem !important;
  }

  .img {
    width: 2.5rem !important;
    position: relative !important;
    right: 2rem !important;
  }

  .texto3L {
    position: relative;
    right: 2rem !important;
  }

  .qtd_agua {
    position: relative;
    width: 10rem !important;
    left: 0.5rem !important;
  }

  .resposta {
    top: -48rem !important;
  }

  .foot {
    top: 84rem !important;
  }

  .quero-agora {
    width: 20rem !important;
    position: relative !important;
    ;
    top: 2rem !important;
    left: -2rem !important;
  }

  a {
    width: 11rem !important;
  }

  .titulo-perguntas {
    position: relative;
    top: -49rem;
    text-align: center;
    font-size: 2rem;
    font-weight: bold;
    color: rgb(59 72 19);
    padding-bottom: 10%;
    width: 95%;
  }

  .garanta-agora {
    display: relative;
    top: 1rem;
  }

  .btn-quero-tem-acesso {
    width: 215% !important;
    width: 215% !important;
    position: relative !important;
    top: 17rem;
  }

  .quadro-branco-tem-acesso {
    right: 1rem !important;
    left: -0.5rem !important;
    width: 90% !important;
    height: 23rem;
  }

  .pergunta {
    top: -50rem;
    left: 1rem !important;
  }

  .perguntas {
    top: 100rem !important;
  }

  .img-garantia {
    right: 4rem;
  }

  .titulo-garantia {
    font-size: 1rem;
  }

  .texto-garantia {
    font-size: 1rem !important;
  }

  .tem-acesso {
    top: 55rem !important;
    height: 70rem !important;
  }

  .ganha-metodo {
    top: 55rem !important;
  }

  .beneficios {
    top: 55rem !important;
  }

  .incluso {
    display: none !important;
  }

  .titulo-o-que-esta-incluso {
    display: none !important;
  }

  .depoimentos {
    display: block !important;
  }

  .bloco-depoimentos {
    position: relative !important;
    top: 50rem !important;
    height: 50rem !important;
  }

  .quero-meu-plano-agora1 {
    display: none;
  }

  .book0 {
    display: none;
  }

  .plano4 {
    font-size: 1rem !important;
    padding-right: 0rem !important;
  }

  .imagem-fruitas {
    display: none !important;
  }

  .bloco-verde-escuro-0 {
    top: 60rem !important;
    font-size: 1rem !important;
    display: none;
  }

  .seta-direita {
    width: 5rem !important;
  }

  .seta-esquerda {
    width: 5rem !important;
  }

  .balao-como-todo {
    top: 30rem !important;
  }

  .como-funciona-2 {
    top: 30rem !important;
  }

  .especialistas {
    top: 30rem !important;
  }

  .ponto-critico {
    top: 28rem !important;
  }

  .como-funciona {
    position: relative !important;
    display: none !important;
  }

  .quero-meu-plano-agora {
    top: 10rem;
  }

  .row-quadro-branco {
    display: block !important;
  }

  .balao {
    display: block !important;
  }

  .capa-imagem {
    display: none !important;
  }

  .balao-horizontal {
    position: relative;
    grid-template-rows: 0% !important;
    font-size: 60% !important;
    position: relative;
    width: 18rem !important;
    right: 3rem;
  }

  .balao-vertical {
    border: 1px white solid !important;
    border-color: white !important;
    border-radius: 20px !important;
    padding: 8% !important;
    display: inherit !important;
    height: 26rem !important;
  }

  a {
    margin-top: 15%;
    font-size: 0.5rem;
  }

  .btn_quero {
    padding-top: 30% !important;
  }

  .b {
    overflow-y: auto !important;
  }

  .quadro-branco {
    height: 34rem !important;
  }
}


/* FIM REGRAS PARA DISPOSITIVOS COM LARGURA MÍNIMA DE 768 PIXELS. POR EXEMPLO: TABLETS */

/* INICIO REGRAS PARA DISPOSITIVOS COM LARGURA MÍNIMA DE 1024 PIXELS. POR EXEMPLO: COMPUTADORES DESKTOP E NOTEBOOKS */
@media screen and (min-width: 1024px) {}


.js-animation .hidden#food-icon-dots,
.js-animation .hidden#food-icon-pan,
.js-animation .hidden#food-icon-vegetables {
  visibility: hidden;
  opacity: 0
}

.js-animation #food-icon-dots {
  animation: .5s dots;
  animation-fill-mode: forwards
}

.js-animation #food-icon-vegetables {
  animation: .5s vegetables;
  animation-fill-mode: forwards
}

.js-animation #food-icon-pan {
  animation: .5s pan;
  animation-fill-mode: forwards
}

.js-animation #food-icon-leafs {
  animation: .5s leafs;
  animation-fill-mode: forwards
}

@keyframes vegetables {
  0% {
    fill-opacity: 0;
    transform: matrix(.984808, -.173648, .173648, .984808, -10.959413, 49.793611)
  }

  100% {
    opacity: 1;
    fill-opacity: .55;
    transform: translate(0, -.209167px)
  }
}

@keyframes pan {
  0% {
    transform: matrix(.984808, -.173648, .173648, .984808, -17.678712, 16.063398)
  }

  100% {
    opacity: 1
  }
}

@keyframes dots {
  0% {
    opacity: 0
  }

  100% {
    opacity: .25
  }
}

@keyframes leafs {
  0% {
    opacity: 0;
    transform: translate(0, -.002153px)
  }

  100% {
    opacity: .35
  }
}

.bottle-container {
  display: flex;
  height: 80px;
}

[dir="rtl"] .bottle-container {
  height: 100%;
}

.single-bottle {
  width: 27px;
  position: relative;
}

.single-bottle:not(:first-child) {
  margin-left: 3px;
}

.single-bottle svg {
  width: 100%;
  height: 100%;
}

.single-bottle span {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: auto;
  background-color: #33c6f5;
  height: 0;
  animation-fill-mode: forwards;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
}

[dir="rtl"] .single-bottle {
  margin-left: 3px;
}

[dir="rtl"] .single-bottle span {
  bottom: 3px;
}

.single-bottle--semifilled span {
  animation: .9s bottleSemifilled;
  animation-fill-mode: forwards
}

@keyframes bottle {
  0% {
    height: 1px;
    opacity: 0
  }

  100% {
    height: 65px;
    opacity: 1
  }
}

@keyframes bottleSemifilled {
  0% {
    height: 1px;
    opacity: 0
  }

  100% {
    height: 35px;
    opacity: 1
  }
}

#calories-phase-2-solid {
  animation: calories-phase-2-solid_c_o 3000ms linear 1 normal forwards
}

@keyframes calories-phase-2-solid_c_o {
  0% {
    opacity: 0
  }

  6.666667% {
    opacity: 0
  }

  16.666667% {
    opacity: 1
  }

  100% {
    opacity: 1
  }
}

#calories-phase-2-calories {
  animation: calories-phase-2-calories_c_o 3000ms linear 1 normal forwards
}

@keyframes calories-phase-2-calories_c_o {
  0% {
    opacity: 0
  }

  16.666667% {
    opacity: 0
  }

  26.666667% {
    opacity: 1
  }

  100% {
    opacity: 1
  }
}

#calories-phase-2-2350-2450 {
  animation: calories-phase-2-2350-2450_c_o 3000ms linear 1 normal forwards
}

@keyframes calories-phase-2-2350-2450_c_o {
  0% {
    opacity: 0
  }

  13.333333% {
    opacity: 0
  }

  26.666667% {
    opacity: 1
  }

  100% {
    opacity: 1
  }
}

#calories-phase-2-placeholder {
  animation: calories-phase-2-placeholder_s_do 3000ms linear 1 normal forwards
}

@keyframes calories-phase-2-placeholder_s_do {
  0% {
    stroke-dashoffset: 417.11
  }

  16.666667% {
    stroke-dashoffset: 0
  }

  100% {
    stroke-dashoffset: 0
  }
}

#calories-phase-2-inidcator-2 {
  animation: calories-phase-2-inidcator-2_s_do 3000ms linear 1 normal forwards
}

@keyframes calories-phase-2-inidcator-2_s_do {
  0% {
    stroke-dashoffset: 110.27
  }

  16.666667% {
    stroke-dashoffset: 0
  }

  100% {
    stroke-dashoffset: 0
  }
}

#bmi-phase-2-chart-gradient {
  animation: bmi-phase-2-chart-gradient_c_o 3000ms linear 1 normal forwards
}

@keyframes bmi-phase-2-chart-gradient_c_o {
  0% {
    opacity: 0
  }

  3.333333% {
    opacity: 0
  }

  20% {
    opacity: 1
  }

  100% {
    opacity: 1
  }
}

#bmi-phase-2-chart-curve {
  animation: bmi-phase-2-chart-curve_s_do 3000ms linear 1 normal forwards
}

@keyframes bmi-phase-2-chart-curve_s_do {
  0% {
    stroke-dashoffset: 385.9
  }

  16.666667% {
    stroke-dashoffset: 0
  }

  100% {
    stroke-dashoffset: 0
  }
}

#bmi-phase-2-pointer-2_ts {
  animation: bmi-phase-2-pointer-2_ts__ts 3000ms linear 1 normal forwards
}

@keyframes bmi-phase-2-pointer-2_ts__ts {
  0% {
    transform: translate(146px, 105px) scale(0, 0)
  }

  3.333333% {
    transform: translate(146px, 105px) scale(0, 0);
    animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1)
  }

  20% {
    transform: translate(146px, 105px) scale(1, 1)
  }

  100% {
    transform: translate(146px, 105px) scale(1, 1)
  }
}

#bmi-phase-2-value-2 {
  animation: bmi-phase-2-value-2_c_o 3000ms linear 1 normal forwards
}

@keyframes bmi-phase-2-value-2_c_o {
  0% {
    opacity: 0
  }

  10% {
    opacity: 0
  }

  20% {
    opacity: 1
  }

  100% {
    opacity: 1
  }
}

#silhouette-male-1_to {
  animation: silhouette-male-1_to__to 3000ms linear 1 normal forwards
}

@keyframes silhouette-male-1_to__to {
  0% {
    transform: translate(50.499935px, 107.500023px);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }

  16.666667% {
    transform: translate(85.455432px, 107.500023px)
  }

  100% {
    transform: translate(85.455432px, 107.500023px)
  }
}

#silhouette-male-1 {
  animation: silhouette-male-1_c_o 3000ms linear 1 normal forwards
}

@keyframes silhouette-male-1_c_o {
  0% {
    opacity: 0;
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }

  16.666667% {
    opacity: 1
  }

  100% {
    opacity: 1
  }
}

#weight-down-chart-solid {
  animation: weight-down-chart-solid_c_o 3000ms linear 1 normal forwards
}

@keyframes weight-down-chart-solid_c_o {
  0% {
    opacity: 0
  }

  3.333333% {
    opacity: 0
  }

  20% {
    opacity: 1
  }

  100% {
    opacity: 1
  }
}

#weight-down-chart-curve {
  animation: weight-down-chart-curve_s_do 3000ms linear 1 normal forwards
}

@keyframes weight-down-chart-curve_s_do {
  0% {
    stroke-dashoffset: 311.43
  }

  16.666667% {
    stroke-dashoffset: 0
  }

  100% {
    stroke-dashoffset: 0
  }
}

#weight-down-pointer_2_ts {
  animation: weight-down-pointer_2_ts__ts 3000ms linear 1 normal forwards
}

@keyframes weight-down-pointer_2_ts__ts {
  0% {
    transform: translate(274px, 149px) scale(0, 0)
  }

  13.333333% {
    transform: translate(274px, 149px) scale(0, 0)
  }

  23.333333% {
    transform: translate(274px, 149px) scale(1, 1)
  }

  100% {
    transform: translate(274px, 149px) scale(1, 1)
  }
}

#weight-down-pointer_1_ts {
  animation: weight-down-pointer_1_ts__ts 3000ms linear 1 normal forwards
}

@keyframes weight-down-pointer_1_ts__ts {
  0% {
    transform: translate(10px, 14px) scale(0, 0)
  }

  10% {
    transform: translate(10px, 14px) scale(1, 1)
  }

  100% {
    transform: translate(10px, 14px) scale(1, 1)
  }
}

#weight-down-value-1 {
  animation: weight-down-value-1_c_o 3000ms linear 1 normal forwards
}

@keyframes weight-down-value-1_c_o {
  0% {
    opacity: 0;
    animation-timing-function: cubic-bezier(0.6, 0.04, 0.98, 0.335)
  }

  10% {
    opacity: 1
  }

  100% {
    opacity: 1
  }
}

#weight-down-value-2 {
  animation: weight-down-value-2_c_o 3000ms linear 1 normal forwards
}

@keyframes weight-down-value-2_c_o {
  0% {
    opacity: 0
  }

  13.333333% {
    opacity: 0;
    animation-timing-function: cubic-bezier(0.6, 0.04, 0.98, 0.335)
  }

  23.333333% {
    opacity: 1
  }

  100% {
    opacity: 1
  }
}


#silhouette-male-purple-male-2 {
  animation: silhouette-male-purple-male-2_c_o 3000ms linear 1 normal forwards
}

@keyframes silhouette-male-purple-male-2_c_o {
  0% {
    opacity: 1
  }

  26.666667% {
    opacity: 0.18
  }

  100% {
    opacity: 0.18
  }
}

#silhouette-male-purple-male-1 {
  animation: silhouette-male-purple-male-1_c_o 3000ms linear 1 normal forwards
}

@keyframes silhouette-male-purple-male-1_c_o {
  0% {
    opacity: 0
  }

  6.666667% {
    opacity: 0
  }

  26.666667% {
    opacity: 1
  }

  100% {
    opacity: 1
  }
}


#silhouette-female-purple-female-2 {
  animation: silhouette-female-purple-female-2_c_o 3000ms linear 1 normal forwards
}

@keyframes silhouette-female-purple-female-2_c_o {
  0% {
    opacity: 1
  }

  26.666667% {
    opacity: 0.18
  }

  100% {
    opacity: 0.18
  }
}

#silhouette-female-purple-female-1 {
  animation: silhouette-female-purple-female-1_c_o 3000ms linear 1 normal forwards
}

@keyframes silhouette-female-purple-female-1_c_o {
  0% {
    opacity: 0
  }

  6.666667% {
    opacity: 0
  }

  26.666667% {
    opacity: 1
  }

  100% {
    opacity: 1
  }
}



.capa-imagem {
  overflow: hidden;
}

.logo {
  width: 50%;
}

div {
  /* border: 1px black solid; */
  font-family: 'Montserrat';
}

.prato_ultima_pagina {
  width: 135%;
}

button {
  -webkit-transition-duration: 0.4s;
  /* Safari */
  transition-duration: 0.4s;
}

.button:hover {
  background-color: #4CAF50;
  /* Green */
  color: white;
}

a {
  background-color: #ee7a0d;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 13px;
  border-radius: 40px 40px 40px;
}

.row0 {
  position: relative;
  top: 78%;
  width: 100%;
  color: white;
  background-image: url('../storage/img/fundo_degrade.png');
  padding: 5rem;
  font-size: 140%;
  top: 29rem;
}

h3 {

  font-weight: bold;
}

.para-de-perder {
  font-size: 166%;

}

.for-logo {
  margin: 5%;
  height: 22%;
  padding-bottom: 2%;
}

.balao {

  color: white;
  margin: 4px 2px;

  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 50px 30px;
  font-size: 70%;
  width: 100%;
  background-size: 100% auto;
}

.balao-vertical {
  border: 1px white solid;
  color: white;
  border-color: white;
  border-radius: 12px;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 50px 30px;
  font-size: 70%;
  width: 100%;
  background-size: cover;
  height: 800%;
  padding: 8%;
}

.balao-horizontal {
  border: 1px white solid;
  color: white;
  margin: 4px 2px;
  border-color: white;
  border-radius: 12px;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 50px 30px;
  width: 63%;
  text-align: center;
  font-size: 80%;
  background-size: cover;
}

.row {
  position: absolute;
  top: 0;
}

.medidas {
  font-size: 150%;
  color: #8fcb27;
  ;

}

.estimativa_porcento {
  color: #8fcb27;
}

.b {
  margin: 1%;
  /* overflow-y: auto !important; */
}

.btn_quero {
  padding-top: 10%;
}

.quadro-branco {
  background-color: white;
  color: dimgrey;
  padding: 21%;
  margin: 1rem;
  border-radius: 40px 40px 40px;
  height: 25rem;
  font-size: 60%;
}

.row-quadro-branco {
  padding-top: 35%;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  margin: 2%;
}

.font-bold {
  font-weight: bold;
}

.bloco-verde-escuro {
  position: relative;
  width: 100%;
  padding: 10%;
  background-color: rgb(59 72 19);
  color: white;
  top: 29rem;


}

.bloco-verde-escuro-0 {
  position: relative;
  width: 100%;
  padding: 10%;
  background-color: rgb(59 72 19);
  color: white;
  top: 36rem;


}

.remuso-pessoal {
  top: 30rem;
  position: relative;
  margin: 10%;
  text-align: center;
}

.ponto-critico {
  position: relative;
  top: 25rem;
  background-color: rgb(150, 204, 68);
  padding: 10%;
}

.como-funciona {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-template-rows: 100%;
  word-wrap: break-word;
  text-align: center;
  padding: 7%;
  position: relative;
  top: 21rem;

}

.itens-como-funciona {

  background-color: #4e5337;
  border: 1px black solid;
  padding: 10%;
  border-radius: 40px 40px 40px;
  margin: 2%;
  color: rgb(162, 197, 101);


}

.descricao-item-como-funciona {
  color: white;
  padding: 5%;


}

.especialistas {
  font-size: larger;
  margin-left: 10%;
  position: relative;
  top: 25rem;
  padding: 7%;

}

.metodo {
  font-size: 200%;
  color: rgb(162, 197, 101);
}

.emagreca {
  font-size: 150%;

}

.titulo-como-funciona {
  font-size: 400%;
  color: #4e5337;
  margin: 25%;
  width: 100%;

}

.quero-meu-plano-agora {

  text-align: center;
  padding: 10%;
  top: 0rem;
  position: relative;
}

#silhouette-male-purple-silhouette-male-purple {
  fill: chartreuse;
}

#silhouette-male-1_to {
  fill: chartreuse;
}

#silhouette-male-2 {
  fill: #8fcb27;
}

#metabolic-age-phase-1-pink-main {
  fill: silver;
}

#metabolic-age-phase-1-pink-shadow {
  fill: #97998f;
}

#metabolic-age-phase-1-purple-main {
  fill: rgb(96, 143, 50);
}

#calories-phase-2-solid {
  fill: silver;
}

#calories-phase-2-placeholder {
  fill: filver;
}

#js-animation {
  padding-top: 80px;
}

h3 {
  font-size: calc(0.9rem + 0.6vw);
}

.como-funciona-2 {
  text-align: center;
  font-size: 3rem;
  font-weight: 900;
  position: relative;
  top: 15rem;
  color: rgb(96, 143, 50);
}

.como {
  font-size: 1.5rem;
  color: rgb(96, 143, 50);
  font-weight: bold;
  width: 100%;

}

.balao-como {
  border: 2px solid rgb(96, 143, 50);
  ;
  border-radius: 40px;
  padding: 2%;
  width: 50%;
  font-size: 0.8rem;

}

.balao-como-todo {
  top: 10rem;
  position: relative;
  padding: 8%;
}

.seta-direita {
  width: 10rem;
}

.seta-esquerda {
  float: right;
}

.imagem-fruitas {
  position: relative;
  top: -13.0rem;
  width: 75%;
  left: 15.5rem;
}

.plano4 {
  color: #8fcb27;
  font-size: 1.5rem;
  padding: 1rem;
  font-weight: 700;
  float: left;
  padding-right: 13rem
}

.titulo-o-que-esta-incluso {
  position: relative;
  top: 37rem;
  left: 15rem;
  font-size: 2rem;
  font-weight: bold;
  width: 80%;
}

.o-que-esta-incluso {
  position: relative;
  top: 30rem;
  left: 10rem;
  display: flex;
  width: 90%;
  margin: 1%;
  text-align: left;
  padding-left: 2%;
  font-size: 85%;
  font-weight: bold;
}

.incluso {
  width: 80%;
  display: inherit;

}

.book {
  position: relative;
  top: 34rem;
  left: 10rem;
  width: 94%;
}

.texto-book {
  position: relative;
  top: 35rem;
  font-size: 1rem;
  width: 80%;
}

.livro-divital-titulo {
  font-size: 3rem;
  font-weight: bold;
  color: rgb(96, 143, 50);

}

.texto-book {
  font-size: 100%;
  position: relative;
  width: 18rem;
  top: 5rem;
  left: 37rem;
}

.alem {
  position: relative;
  top: 2rem;
  font-size: 1rem;
  color: darkolivegreen;
}

.texto-boo-2 {
  color: darkolivegreen;
}

.depoimentos {
  position: relative;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
}

.bloco-depoimentos {
  position: relative;
  width: 30%;
  background-color: aquamarine;
  top: 20rem;
  width: 100%;
  text-align: center;
  background-color: rgb(150, 204, 68);
  height: 25rem;
  padding-top: 5%;
}

.titulo-depoimentos {
  position: relative;
  font-size: 150%;
}

.depoimento {
  position: relative;
  font-size: 85%;
  border-radius: 40px;
  background-color: white;
  margin: 2%;
  padding: 5%;
  width: 70%;
  left: 3rem;


}

.js-animation {
  position: relative;
  right: 0rem;
}

.dep {}

.dep_nome {
  font-weight: bold;

}

.dep_profissao {}

.quero-agora {
  position: relative;
  left: 2rem;
  top: 2rem
}

.img {
  width: 5rem;
}

.quero-meu-plano-agora1 {
  position: relative;
  top: 72rem;
  left: 11rem;
}

.foot {
  position: relative;
  top: 15rem;
  background: rgb(59 72 19);
  height: 40rem;
}

.pergunta {
  position: relative;
  top: -50rem;
  text-align: left;
  margin: 10%;
  color: rgb(162, 197, 101);
  font-weight: bold;
  font-size: 2rem;
}

.resposta {
  position: relative;
  top: -55rem;
  margin: 10%;
}

.titulo-perguntas {
  position: relative;
  top: -45rem;
  text-align: center;
  font-size: 3rem;
  font-weight: bold;
  color: rgb(59 72 19);
}

.perguntas {
  position: relative;
  top: 56rem;
  background-color: white;
}

.sub-garantia {
  color: rgb(162, 197, 101);
  font-size: 1rem;
}

.img-garantia {
  position: relative;
  float: left;
  width: 50%;
}

.texto-garantia {
  position: relative;
  float: right;
  width: 50%;
}

.garantia {
  position: relative;
  top: 30rem;
  background-color: rgb(59 72 19);
  float: left;
  color: white;
  padding: 10%;
  height: 50rem;
}

.titulo-garantia {
  position: relative;
  font-size: 2rem;
  font-weight: bold;
}

.valor-plano {
  font-size: 3rem;
  color: rgb(162, 197, 101);
  font-weight: bold;
  padding: 2%;
  margin: 2%;
}

.btn-quero-tem-acesso {
  font-size: 0.8rem;
  position: relative;
}

.garanta-agora {
  position: relative;
  top: 7rem;
  left: 1rem;
  font-size: 0.8rem;
}

.quadro-branco-tem-acesso {
  position: relative;
  left: 8rem;
  background-color: white;
  border-radius: 40px;
  width: 70%;
  text-align: center;
  margin: 2rem;
  height: 25rem;

}

.titulo-tem-acesso {
  font-size: 2rem;
  text-align: center;
}

.tem-acesso {
  position: relative;
  top: 30rem;
  background-color: rgb(150, 204, 68);
  height: 40rem;
  padding-top: 5%;
}

.quadro-branco-2 {
  display: grid;
  grid-template-columns: 1fr 1fr;
  padding: 5%;
}

.quadro-branco-4 {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  padding: 5%;
  font-size: 0.8rem;
}

.titulo-ganha-metodo {
  font-size: 2rem;
  font-weight: bold;
  color: rgb(162, 197, 101);
  text-align: center;
  padding: 2%;


}

.sub-titulo-ganha-metodo {
  font-size: 1rem;
  text-align: center;
  font-weight: bold;
}

.ganha-metodo {
  position: relative;
  top: 25rem;
  width: 100%;
  left: 1rem;
}

.quadro-ganha-metodo {

  display: grid;
  grid-template-columns: 1fr 1fr;
  padding: 5%;

}

.beneficios {
  position: relative;
  top: 25rem;


}

.titulo-beneficios {
  font-size: 2rem;
  text-align: center;
}

.beneficios-quadros {
  display: grid;
  grid-template-columns: 1fr 1fr;
  padding: 5%;

}

.b-quadros {
  border: 2px black solid;
  border-radius: 40px;
  padding: 5%;
  margin: 1%;
}

.frutas {
  float: right;
  position: relative;
  width: 5rem;
}

.idMetabolica {
  display: grid;
  grid-template-columns: 2fr 2fr;
  padding: 10%;

}

.sua-idade-metabolica {
  position: relative;
  font-size: 0.7rem;
  left: -1rem;
}
</style>

<template>
  <container>
    <div class="content" @load="calculos()">
      <div class="row">
        <div class="col-sm" style="padding-left: 10%;">
          <div class="for-logo">
            <img style="width: 50%;" :src="'../storage/img/Cetogenica v1.png'">
          </div>
          <div class="para-de-perder">
            Pare de perder tempo com dietas que não funcionam, <br>
            <b style="font-weight: bold;">emageça com saúde
              e seja mais confiante !
            </b>
          </div>
          <div class="quero-meu-plano-agora">
            <a href="https://checkout.minhadietacetogenica.com/OF2E1224A" style="color: white;"> Quero meu plano agora</a>
          </div>
        </div>

        <div class="col-sm" style="z-index: 1000;">
          <div class="capa-imagem">
            <img class="prato_ultima_pagina" :src="'../storage/img/prato_ultima_pagina.png'">
          </div>
        </div>
      </div>
      <div class="row0">
        <div class="col-sm">
          Lucas com base em suas respostas, recomendamos o
        </div>
        <br>
        <div class="col-sm" style="padding-top: 0%; ">
          <b>
            <h3 style="color: #8fcb27; font-weight: unset;">Método CETO30</h3>
          </b>
        </div>
        <div class="col-sm" style="padding-top: 0%;padding-bottom: 5%;">
          <b>o plano de dieta cetogênica que vai <br>acelerar seu ema recimento em 4 semanas .</b>
        </div>

        <div class="balao-horizontal">
          <div>
            <div class="medidas">
              <b>{{ form.idade }}</b>
            </div>
            <div>Sua idade</div>
          </div>
          <div>
            <div class="medidas">
              <b>{{ form.altura }}</b>
            </div>
            <div>Sua Altura (cm )</div>
          </div>
          <div>
            <div class="medidas">
              <b>{{ peso }}</b>
            </div>
            <div>Seu Peso (kg)</div>
          </div>
        </div>
        <br>
        <div class="balao">
          <div class="b">
            <div class="balao-vertical">
              <div>
                <div style=" white-space: nowrap;">
                  <h3 class="">Meu peso</h3>
                </div>
                <div style="width: 150%;font-size: 150%;">
                  <span class="font-bold">Peso alcançável</span> no final das primeiras 4 semanas
                </div>


                <svg style=" white-space: nowrap;width: 150%;" class="js-weight js-loose-weight" viewBox="0 0 285 196"
                  shape-rendering="geometricPrecision" text-rendering="geometricPrecision">

                  <defs>
                    <linearGradient id="weight-down-chart-solid-fill" x1="142" y1="15" x2="142" y2="173"
                      spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
                      <stop id="weight-down-chart-solid-fill-0" offset="0%" stop-color="var(--weight)" stop-opacity=".35">
                      </stop>
                      <stop id="weight-down-chart-solid-fill-1" offset="100%" stop-color="var(--weight)" stop-opacity="0">
                      </stop>
                    </linearGradient>
                  </defs>
                  <g id="weight-down-weight-down">
                    <g id="weight-down-chart-grid">
                      <line id="weight-down-line_2" x1="221.5" y1="172.5" x2="221.5" y2="0.5" fill="none"
                        stroke="var(--main-color)" stroke-opacity="0.15" stroke-linecap="round" stroke-dasharray="8,12">
                      </line>
                      <line id="weight-down-line_1" x1="274.5" y1="172.5" x2="274.5" y2="0.5" fill="none"
                        stroke="var(--main-color)" stroke-opacity="0.15" stroke-linecap="round" stroke-dasharray="8,12">
                      </line>
                      <line id="weight-down-line_3" x1="168.5" y1="172.5" x2="168.5" y2="0.5" fill="none"
                        stroke="var(--main-color)" stroke-opacity="0.15" stroke-linecap="round" stroke-dasharray="8,12">
                      </line>
                      <line id="weight-down-line_4" x1="115.5" y1="172.5" x2="115.5" y2="0.5" fill="none"
                        stroke="var(--main-color)" stroke-opacity="0.15" stroke-linecap="round" stroke-dasharray="8,12">
                      </line>
                      <line id="weight-down-line_5" x1="62.5" y1="172.5" x2="62.5" y2="0.5" fill="none"
                        stroke="var(--main-color)" stroke-opacity="0.15" stroke-linecap="round" stroke-dasharray="8,12">
                      </line>
                      <line id="weight-down-line_6" x1="9.5" y1="172.5" x2="9.50001" y2="0.5" fill="none"
                        stroke="var(--main-color)" stroke-opacity="0.15" stroke-linecap="round" stroke-dasharray="8,12">
                      </line>
                    </g>
                    <path id="weight-down-chart-solid"
                      d="M62,60.5C40.0898,45.0026,9,14,9,14v159h266v-25c0,0-25.5,9.5-53.5-18.5C206.596,114.596,203,100,169,100c-21,0-28.5-28-53.5-28.5-21.3258-.4265-33,3.5-53.5-11Z"
                      opacity="0" fill="url(#weight-down-chart-solid-fill)"></path>
                    <path id="weight-down-chart-curve"
                      d="M9,14c0,0,31.0898,31.0026,53,46.5c20.5,14.5,32.1742,10.5735,53.5,11C140.5,72,148,100,169,100c34,0,37.596,14.596,52.5,29.5c28,28,53.5,18.5,53.5,18.5"
                      fill="none" stroke="var(--weight-line)" stroke-width="3" stroke-linecap="round"
                      stroke-dashoffset="311.43" stroke-dasharray="311.43"></path>
                    <g id="weight-down-pointer_2_ts" transform="translate(274,149) scale(0,0)">
                      <circle id="weight-down-pointer_2" r="7.5" transform="translate(0,0)" fill="var(--weight-fill)"
                        stroke="var(--weight-stroke)" stroke-width="3"></circle>
                    </g>
                    <g id="weight-down-pointer_1_ts" transform="translate(10,14) scale(0,0)">
                      <circle id="weight-down-pointer_1" r="8" transform="translate(0,0)" fill="var(--weight-fill)"
                        stroke="var(--weight-stroke)" stroke-width="4"></circle>
                    </g><text id="weight-down-value-1" dx="0" dy="0" font-size="18" font-weight="700" opacity="0"
                      fill="#fff">
                      <tspan id="weight-down-tspan7" x="31" y="20.1523" font-size="18" font-weight="700"
                        font-style="normal" fill="#fff">
                      </tspan>
                    </text><text id="weight-down-value-2" dx="0" dy="0" font-size="18" font-weight="700" opacity="0"
                      fill="#fff">
                      <tspan id="weight-down-tspan8" x="230" y="125.152" font-size="18" font-weight="700"
                        font-style="normal" fill="#fff">
                      </tspan>
                    </text>
                  </g>
                </svg>
                <div style="width: 150%;padding: 1%;">
                  <span>Dia 1</span>
                  <span>Dia 6</span>
                  <span>Dia 12</span>
                  <span>Dia 18</span>
                  <span>Dia 24</span>
                  <span>Dia 30</span>
                </div>
              </div>
            </div>
          </div>
          <div class="b">
            <div class="balao-vertical">
              <div class="">
                <h4 style="width: 200%;">Estimativas de mudança corporal</h4>
                <div style="width: 150%;margin: 11%;font-size: 120%;">Com base no sucesso dos outros
                  utili z adores com o mesmo tipo metabólico
                </div>
                <div style="width: 160%;">
                  <div class="" style="width: 40%;float: left;position: relative;">
                    <svg id="silhouette" class="gender-mode__man !h-[215px] !w-[114px]" data-e2e="estimates-graph-male"
                      xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 121 215"
                      shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
                      <defs>
                        <linearGradient id="silhouette-male-2-fill" x1="50.5" y1="1" x2="50.5" y2="215" spreadMethod="pad"
                          gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
                          <stop id="silhouette-male-2-fill-0" offset="0%" stop-color="var(--body-estimates)"
                            stop-opacity=".35"></stop>
                          <stop id="silhouette-male-2-fill-1" offset="100%" stop-color="var(--body-estimates)"
                            stop-opacity="0"></stop>
                        </linearGradient>
                      </defs>
                      <g id="silhouette-male-green">
                        <path id="silhouette-male-2"
                          d="M100.474,102.994c.023-.103.038-.21.042-.323.03-1.036-.234-2.229-.223-3.5008.091-11.0936.014-17.0879-2.0182-21.7143-.0473-.2999-.0917-.5618-.0965-.7644C97.6154,52.8538,84.5665,38.4403,72.034,36.048c-.0629-.0187-.1317-.0408-.1966-.06-.217-.0659-.4418-.1357-.6725-.2099-.0112-.0034-.0234-.0074-.0346-.0113-.2239-.0718-.4536-.1475-.6872-.2271-.0152-.0049-.0303-.0103-.0449-.0152-.2336-.0797-.4707-.1622-.7106-.2483-.0151-.0054-.0303-.0108-.0454-.0162-.2438-.0875-.4906-.1779-.7389-.2718-.0092-.0029-.018-.0064-.0268-.0098-.2565-.0969-.5155-.1962-.7745-.2989-.0005-.0005-.001-.0005-.0015-.0005-.7915-.3136-1.5865-.6518-2.3439-1.0042v.0005c-1.7997-.8376-3.3839-1.7523-4.1862-2.6012-1.2032-1.2731-1.9045-2.5472-2.3342-3.7259.5092-.7201.8623-1.4427,1.0667-2.0822.3814-1.1969.8954-2.3151,1.1344-3.6698.5262-.7831.9369-1.6202,1.2593-2.472.4146-1.0951-.0761-1.5641.5258-2.6012.4482-.7718.6872-1.63.5457-2.4459-.1429-.8234.3395-1.4737.4229-2.2316.0843-.7683-.3214-1.5007-.4702-2.23802-.1595-.78401.0917-1.48053-.2063-2.24389-.2253-.57756-.914-1.03224-1.272-1.52722-.4453-.61787-.5891-1.12022-1.0905-1.71646-.5531-.65572-1.2681-.76435-2.0192-1.14726-1.0457-.53283-1.4758-1.08434-2.6415-1.31094-1.9972-.3893-3.8193-.703393-5.9224-.65719h-.137c-2.104-.046203-3.9252.26789-5.9234.65719-1.1656.2266-1.5953.77811-2.641,1.31094-.7511.38291-1.4661.49154-2.0196,1.14726-.5014.59624-.6453,1.09859-1.0906,1.71646-.357.49498-1.0461.94966-1.271,1.52722-.2989.76336-.0478,1.45988-.2063,2.24389-.1497.73732-.555,1.46972-.4711,2.23802.0844.7579.5662,1.4082.4228,2.2316-.1409.8159.0981,1.6741.5458,2.4459.6023,1.0371.1117,1.5061.5262,2.6012.3219.8518.7331,1.6894,1.2593,2.472.239,1.3547.7531,2.4729,1.135,3.6698.2038.6395.5569,1.3616,1.0656,2.0817-.4296,1.1787-1.1305,2.4528-2.3342,3.7264-.8023.8489-2.3859,1.7636-4.1856,2.6007-1.0086.4694-2.0845.9133-3.1297,1.307-.0029.0015-.0059.0025-.0088.0035-.2546.0958-.5077.1887-.7569.2782-.0098.0034-.0191.0069-.0288.0103-.2453.088-.4868.172-.7243.2531-.0117.0035-.0224.0074-.0341.0113-.237.0807-.4697.1573-.696.2306-.0093.0029-.0185.0059-.0278.0088-.2321.0742-.458.1445-.676.2104-.0644.0197-.1326.0413-.1955.06C16.4344,38.4403,3.38492,52.8538,2.82209,76.6915c-.00439.2026-.04877.4641-.09706.7639-2.031841,4.6269-2.1089,10.6212-2.017697,21.7148.01073,1.2718-.253127,2.4648-.222888,3.5008.003414.113.018534.22.040969.323-1.011532,2.942-.420903,6.185.576486,8.906c2.43129,6.634,7.23484,9.632,8.25515,8.647c1.01935-.986-.45894-2.278-1.55826-4.615-1.73775-3.699-.36189-5.679-.48089-7.259.76669,1.221,1.25197.692,2.50151,4.232.51549,1.468,2.96539,1.796,2.94729,1.665-.1605-1.371-.4892-2.871-.7799-4.425-.7818-4.17-1.9494-5.165-2.79167-6.133.04877-.097.09462-.198.12583-.311c0,.001.04243-1.178.2741-2.103c1.43684-5.7477,6.42134-11.4648,6.46524-19.9124.0102-2.0134-.0746-3.604-.237-4.8702c1.7036-2.3633,3.7139-5.7805,5.6673-9.4523v.0005c.0131.083.018.1784.0185.2787v.0054c.0005.0383-.0024.0816-.0039.1224c0,.0029-.0005.0059-.0005.0088-.0024.0664-.0068.1342-.0137.207l-.0014.0137c-.0049.0502-.0122.1032-.0185.1568c0,.0015-.0005.003-.0005.004-.0117.0835-.0244.17-.0405.2605-.0005.0044-.0015.0088-.0025.0132-.0092.0517-.0185.1047-.0297.1588-.001.0064-.0024.0123-.0034.0182-.0186.0939-.0395.1912-.0624.292-.001.0069-.003.0137-.0044.0211-.0142.0605-.0278.1214-.043.1843-.0004.0025-.0009.005-.0019.0074-.0307.1273-.0639.2591-.1.3957-.0005.002-.001.0034-.0015.0049-.0112.0408-.0209.0801-.0326.1219-.0005.003-.0015.0069-.0025.0103-.0302.1111-.0639.2291-.0975.3466-.0303.1066-.0595.2104-.0927.3219-.0029.0108-.0068.0231-.0102.034-.0532.1808-.1093.3666-.1678.5598l-.0034.0108c-.0859.2802-.179.5776-.2761.8833C18.8954,76.87,15.934,85.4036,15.7008,95.636c-.0005.0069-.0009.0133-.0009.0202v.0019c0,.0069,0,.0148-.0005.0222-.0308.6414-.0478,1.2971-.0566,1.9607-.0015.1352-.001.2733-.0015.409-.0029.4674-.0019.9388.0049,1.4151.0034.2566.0088.5147.0156.7739.0083.345.0205.692.0342,1.042.0126.334.0253.666.0424,1.004.0088.178.0214.357.0317.536.1892,3.321.5721,6.779,1.0905,10.215.003.001.0064.002.0098.003c1.8036,11.903,5.1596,23.463,7.1583,27.647c2.3498,4.918,4.5358,7.439,5.441,13.523.5487,3.685-.3546,8.58-.2697,14.4.1268,8.792,5.3195,22.447,8.496,31.301.2776.771-1.4914,4.055-1.686,5.565-.3502,2.717-2.0055,4.256-2.3211,5.851-.4818,2.445,5.762,3.203,7.4514,3.322c1.39.098,7.6933,1.409,7.7782-1.752.0307-1.102-1.1603-4.013-1.4441-7.097-.2902-3.174-.4965-4.859-.5848-6.429-.3839-6.703,2.2976-18.304,2.7137-28.311.3238-7.777-1.1447-11.382-1.4149-15.487-.2219-3.376,1.1417-4.955.2053-12.267-.2004-1.566,1.8285-14.722,2.0806-27.985h.001c.0161-.85.0336-.85.0497,0h.001c.2522,13.263,2.2816,26.419,2.0806,27.985-.9359,7.312.4268,8.891.2054,12.267-.2702,4.105-1.7392,7.71-1.4154,15.487.4165,10.007,3.0985,21.608,2.7142,28.311-.0888,1.57-.2951,3.255-.5853,6.429-.2834,3.084-1.4744,5.995-1.4437,7.097.0844,3.161,6.3882,1.85,7.7787,1.752c1.6885-.119,7.9328-.877,7.4504-3.322-.3151-1.595-1.9709-3.134-2.3206-5.851-.1946-1.51-1.963-4.794-1.6865-5.565c3.177-8.854,8.3698-22.509,8.4966-31.301.0844-5.82-.8184-10.715-.2697-14.4.9052-6.084,3.0911-8.605,5.4415-13.523c1.9982-4.184,5.3537-15.744,7.1573-27.647.0034-.001.0073-.002.0107-.003.5204-3.449.9037-6.921,1.0925-10.253.0097-.165.021-.33.0293-.493.0175-.341.0297-.678.0424-1.015.0141-.348.0253-.693.0346-1.036.0059-.2582.0117-.5153.0151-.7714.0074-.4837.0083-.961.0054-1.4353-.001-.1273,0-.2571-.002-.3839-.0087-.669-.0263-1.3296-.057-1.976v-.0143-.0019c0-.0039-.0005-.0079-.0005-.0118-.2322-10.2359-3.1946-18.773-4.7982-23.8393-.0966-.3057-.1902-.6031-.276-.8833-.001-.0029-.002-.0064-.003-.0093-.0663-.2168-.1282-.4237-.1873-.6252-.0263-.088-.0492-.1706-.0736-.2556-.0371-.1303-.0741-.2606-.1073-.383-.001-.0034-.002-.0073-.0029-.0103-.0117-.0418-.0215-.0811-.0327-.1219c0-.0005-.0005-.001-.0005-.0015-.0366-.1386-.0697-.2708-.101-.3991-.0009-.0024-.0014-.0049-.0019-.0074-.0146-.0614-.0283-.1209-.0419-.1799-.0259-.1125-.0488-.2202-.0693-.3244-.0005-.0034-.0015-.0074-.002-.0113-.0107-.0541-.0209-.1071-.0297-.1588c0-.0009-.0005-.0024-.0005-.0034-.0171-.0944-.0302-.1833-.0419-.2703c0-.001-.0005-.0025-.0005-.004-.0069-.0536-.0147-.1066-.0186-.1568-.0005-.0039-.0009-.0078-.0014-.0118-.0073-.0737-.0117-.143-.0142-.2104-.0005-.0019-.0005-.0049-.0005-.0073-.0019-.0408-.0043-.0841-.0039-.1224v-.0005c.0005-.1027.0049-.1991.0191-.2836v-.0005c1.9533,3.6723,3.9637,7.0895,5.6673,9.4528-.1629,1.2662-.2478,2.8568-.2375,4.8697.0438,8.4476,5.0279,14.1647,6.4652,19.9124.2316.925.2746,2.104.2746,2.103.0307.113.076.214.1258.31-.8428.969-2.0104,1.964-2.7922,6.134-.2907,1.554-.6199,3.054-.7804,4.425-.018.131,2.4328-.197,2.9478-1.665c1.2501-3.54,1.7344-3.011,2.5015-4.232-.1194,1.58,1.2569,3.56-.4813,7.259-1.0989,2.337-2.5767,3.629-1.5573,4.615c1.0193.985,5.8229-2.013,8.2546-8.647.9976-2.721,1.5876-5.964.5756-8.906Z"
                          clip-rule="evenodd" fill="url(#silhouette-male-2-fill)" fill-rule="evenodd"></path>
                        <g id="silhouette-male-1_to" transform="translate(50.499935,107.500023)">
                          <path id="silhouette-male-1"
                            d="M120.386,100.689c1.165-12.4078.588-19.3356-1.017-23.895-.15-5.276-.847-12.1183-1.796-16.3237-1.228-5.4419-3.314-9.3367-3.517-13.9163-.313-7.0311-2.641-11.4216-10.941-12.2641-.297-.0656-.589-.1145-.877-.1565-.048-.0069-.097-.0143-.144-.0207-2.9781-.405-5.5862.157-8.5139-2.8849-1.0997-1.1432-1.6165-2.6227-1.8813-4.3299-.0371-.238-.0679-.4819-.0962-.7288-.0059-.0504-.0113-.1013-.0166-.1521-.003-.0292-.0049-.0588-.0078-.0879.6389-.7383,1.2183-1.4499,1.467-1.8528.3385-.5492.5622-1.2168.7215-1.961.0318-.042.063-.082.0953-.1249.8231-1.0914,1.3913-2.359,1.7962-3.6573.3469-1.1076-.063-1.5817.4397-2.631.3742-.7808.574-1.6489.4558-2.4741-.1192-.8326.2833-1.4903.3532-2.2572.0708-.7768.2008-1.51803.0757-2.26419-.1324-.79308.0772-1.49727-.1724-2.26911-.1881-.58418-.7631-1.04492-1.0611-1.54466-.3723-.62518-.4924-1.13381-.9111-1.73628-.4621-.66369-1.0591-.77332-1.6863-1.16047-.873-.53925-1.2321-1.09727-2.2052-1.326403-1.6683-.393574-3.19-.711594-4.9467-.665175-1.7562-.046419-3.2779.271601-4.9462.665175-.9731.229133-1.3322.787153-2.2052,1.326403-.6272.38715-1.2247.49678-1.6863,1.16047-.4187.60247-.5384,1.1111-.9111,1.73628-.298.49974-.873.96048-1.0616,1.54466-.2486.77184-.0395,1.47603-.1719,2.26911-.1251.74616.0054,1.48739.0757,2.26419.0699.7669.4724,1.4246.3527,2.2572-.1172.8252.0821,1.6933.4563,2.4741.5027,1.0493.0928,1.5234.4397,2.631.4049,1.2983.9731,2.5659,1.7962,3.6573.0323.0424.063.0829.0953.1249.1597.7442.383,1.4113.7215,1.961.2487.4029.8281,1.1145,1.467,1.8528-.0024.0296-.0049.0602-.0083.0898-.0049.0499-.0102.0998-.0161.1492-.0283.2469-.0591.4913-.0962.7298-.2648,1.7072-.7812,3.1867-1.8818,4.3299-2.9267,3.0419-5.5354,2.4799-8.5133,2.8849-.0474.0064-.0953.0138-.1432.0207-.2892.042-.5808.0904-.8778.1565-8.3004.8425-10.6282,5.233-10.9408,12.2641-.2037,4.5796-2.2892,8.4744-3.5168,13.9163-.9487,4.2054-1.6463,11.0477-1.7963,16.3237-1.6048,4.5594-2.1822,11.4872-1.0171,23.895.1192,1.272.3424,2.974.4616,4.008-.6409,2.762-1.2315,7.647-.1836,10.388c2.5349,6.628,7.3907,9.567,8.397,8.561s-.4934-2.281-1.6287-4.612c-1.7957-3.688-1.2393-5.23-1.383-6.815.787,1.214,1.2638.675,2.5687,4.212.5378,1.467,1.7933,1.04,1.7728.908-.1813-1.374-.5325-2.878-.8476-4.434-1.1719-5.792-3.2344-6.241-3.9379-8.208c0,0,.2516-1.672.403-2.617.9419-5.8784,2.9028-13.8634,3.1304-22.9571.0113-2.6701,4.1607-11.6097,6.4709-25.3409.193.9249.4089,1.9397.6487,3.0182.002.0079.0039.0158.0059.0237.1216.5457.2496,1.1087.3835,1.682.0093.04.0186.079.0278.1185.1334.5699.2726,1.1506.4182,1.7397.0112.045.0225.0894.0332.1338.1471.5936.3,1.1941.4597,1.7985.0088.0346.0181.0692.0269.1033.1646.6227.3351,1.2488.5124,1.8755c2.023,7.1436,1.5262,15.0911,1.6243,19.3153.0841,3.6389-.4997,3.6863-1.1113,5.6754-.0826.2682-.1676.5279-.255.7817-.0044.0124-.0088.0242-.0127.0361-.0836.2415-.1691.4775-.2555.7091-.0078.0208-.0157.0415-.0235.0622-.0835.2223-.168.4415-.254.6578-.0117.0301-.0235.0602-.0352.0899-.0811.2034-.1627.4059-.2442.6079-.0631.154-.1256.3081-.1886.4622l-.0176.0439c-.0547.1339-.1089.2677-.1631.402-.0118.0296-.024.0598-.0357.0894-.0445.1111-.0894.2232-.1339.3358-.0171.0424-.0337.0854-.0508.1284-.0034.0084-.0068.0173-.0102.0257-.0425.1096-.0855.2197-.128.3308-.0122.0311-.024.0622-.0357.0938-.0356.0924-.0708.1867-.1055.281-.0039.0109-.0083.0218-.0122.0326-.0147.0405-.0298.081-.045.122-.0136.038-.0273.0765-.041.115-.042.1171-.084.2356-.1255.3551-.0147.043-.0294.0854-.0445.1289-.0024.0084-.0054.0168-.0083.0247-.002.0054-.0039.0104-.0054.0158-.0483.1422-.0957.2864-.1426.4331-.0049.0148-.0093.0296-.0137.0444-.0464.1462-.0918.2958-.1368.4469-.0142.0474-.0278.0948-.042.1427-.0401.1388-.0796.2795-.1182.4232-.0093.0346-.0191.0687-.0283.1032-.0465.1749-.0914.3541-.1354.5363-.0107.044-.021.0889-.0312.1329-.0342.1471-.0679.2973-.1012.4498-.0112.0529-.0229.1052-.0337.1591-.041.1965-.0811.3965-.1192.6029-.0014.0074-.0024.0153-.0039.0227-.0361.1985-.0708.403-.104.6114-.0093.0587-.0186.118-.0274.1782-.0278.1788-.0542.3615-.0791.5485-.0064.047-.0132.094-.0196.141-.0298.231-.0576.467-.084.709-.0054.054-.0107.11-.0161.164-.0205.198-.0396.4-.0572.607-.0058.07-.0122.141-.018.212-.0206.261-.0401.528-.0567.804-.0445.508-.0835,1.006-.1197,1.5-.0107.147-.02.292-.0303.437-.0249.366-.0479.728-.0684,1.087-.0078.136-.0156.271-.0229.406-.0518.982-.087,1.939-.106,2.876-.0015.06-.002.12-.0035.18-.0078.431-.0117.857-.0131,1.28-.0005.054-.0005.109-.0005.163-.0118,9.476,1.5911,17.151,3.4508,28.936.7509,4.76,2.4016,11.9,2.0064,15.624-.3928,3.722-.7313,7.275-.5218,13.447.2931,8.606,3.595,16.415,3.7435,31.278.0078.825-1.4943,4.075-1.6893,5.591-.3502,2.729-2.4777,4.275-2.7933,5.879-.4831,2.456,5.7708,3.217,7.4631,3.337c1.3922.098,4.9139,1.313,4.9989-1.863.0313-1.108-1.1621-4.031-1.446-7.13-.2906-3.189-.4973-4.882-.5862-6.459-.3845-6.734,2.4025-18.326,2.8197-28.379.3244-7.813-1.147-11.435-1.4177-15.559-.2217-3.392,1.1046-5.816.8686-11.582-.0698-1.689-.3932-3.494-.104-5.309c1.3038-8.183,1.7635-18.614,1.7176-26.486.363.152.7347.26,1.1177.308v0c.0044.001.0083,0,.0132.001.15.018.3014.029.4553.028.1539.001.3058-.01.4558-.028.0049-.001.0088,0,.0132-.001v0c.3835-.048.7547-.156,1.1177-.308-.0454,7.872.4138,18.303,1.7181,26.486.2887,1.815-.0347,3.62-.104,5.309-.2365,5.766,1.0903,8.19.868,11.582-.2706,4.124-1.742,7.746-1.4176,15.559.4172,10.053,3.2041,21.645,2.8197,28.379-.0889,1.577-.2951,3.27-.5862,6.459-.2839,3.099-1.4773,6.022-1.446,7.13.0845,3.176,3.6067,1.961,4.9989,1.863c1.6923-.12,7.9466-.881,7.4626-3.337-.315-1.604-2.4426-3.15-2.7928-5.879-.195-1.516-1.6976-4.766-1.6893-5.591.1485-14.863,3.4501-22.672,3.7431-31.278.21-6.172-.129-9.725-.521-13.447-.395-3.724,1.255-10.864,2.006-15.624c1.574-9.978,2.964-17.009,3.347-24.682v-.003c.07-1.39.106-2.802.104-4.256c0-.05,0-.101,0-.152-.002-.428-.007-.859-.014-1.296-.001-.055-.002-.11-.003-.165-.019-.941-.054-1.903-.107-2.89-.007-.128-.014-.256-.021-.384-.021-.367-.045-.737-.07-1.11-.01-.141-.019-.28-.029-.422-.037-.495-.076-.996-.121-1.505-.016-.275-.035-.541-.056-.801-.006-.074-.012-.147-.019-.22-.017-.203-.036-.402-.056-.596-.005-.057-.011-.116-.017-.172-.026-.24-.053-.474-.083-.702-.007-.054-.015-.107-.022-.161-.024-.1779-.049-.3522-.075-.5236-.01-.0657-.02-.1318-.031-.1965-.031-.1961-.064-.3882-.098-.5758-.003-.0183-.006-.0371-.01-.0548-.037-.2025-.076-.3981-.116-.5911-.013-.0598-.025-.1181-.038-.1773-.031-.1427-.063-.2835-.095-.4217-.012-.0524-.024-.1057-.037-.1576-.042-.1773-.086-.3511-.131-.5205-.013-.0459-.025-.0898-.037-.1348-.036-.1308-.071-.2592-.108-.3861-.017-.0558-.033-.1121-.049-.1674-.04-.1348-.081-.2677-.122-.3986-.01-.0301-.018-.0607-.028-.0903-.046-.1437-.093-.285-.14-.4242v-.0005c-.004-.0104-.007-.0207-.011-.0316-.017-.0509-.035-.1008-.052-.1511-.038-.1101-.077-.2198-.116-.3274-.016-.0455-.032-.0909-.049-.1358-.014-.041-.029-.081-.044-.1215-.002-.004-.003-.0079-.004-.0119-.037-.0982-.073-.196-.11-.2928-.013-.0346-.026-.0686-.039-.1022-.043-.1126-.087-.2242-.13-.3348-.001-.002-.001-.0045-.002-.0064-.001-.001-.001-.002-.002-.003-.016-.0425-.033-.0854-.05-.1274-.052-.1314-.104-.2617-.156-.3911-.003-.0074-.006-.0148-.009-.0222-.125-.3102-.25-.6173-.375-.925-.084-.2064-.167-.4128-.25-.6217-.01-.0242-.02-.0484-.029-.0726-.087-.2212-.174-.4444-.259-.6706-.007-.0173-.013-.0345-.019-.0518-.088-.2351-.175-.4741-.259-.7185-.004-.0094-.007-.0183-.01-.0277-.087-.2548-.173-.5155-.256-.7842-.612-1.9891-1.195-2.0365-1.111-5.6754.098-4.2242-.399-12.1717,1.624-19.3153.178-.6292.349-1.2578.514-1.883.008-.0301.016-.0597.024-.0893.161-.6119.316-1.2188.464-1.8183.009-.0355.017-.0706.027-.1062.149-.6039.291-1.1989.428-1.7822.004-.0158.008-.0316.011-.0479.405-1.7318.754-3.3545,1.048-4.7668c2.31,13.7317,6.46,22.6713,6.471,25.3414.228,9.0937,2.189,17.0787,3.131,22.9571.151.945.403,2.617.403,2.617-.704,1.967-2.767,2.416-3.938,8.208-.315,1.556-.667,3.06-.848,4.434-.02.132,1.235.559,1.773-.908c1.305-3.537,1.782-2.998,2.569-4.212-.144,1.585.412,3.127-1.383,6.815-1.136,2.331-2.635,3.606-1.629,4.612s5.862-1.933,8.397-8.561c1.048-2.741.457-7.626-.183-10.388.119-1.034.341-2.736.461-4.008Z"
                            transform="translate(-86.000118,-107.500023)" opacity="0" clip-rule="evenodd"
                            fill="var(--body-estimates)" fill-rule="evenodd"></path>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="text-center font-normal text-zeta"
                    style="width: 50%;float: right;margin: 0%;font-size: 150%;">
                    <div><span class="estimativa_porcento">7%</span> Pescoço</div>
                    <div><span class="estimativa_porcento">12%</span> Braços</div>
                    <div><span class="estimativa_porcento">42%</span> Cintura</div>
                    <div><span class="estimativa_porcento">23%</span> Anca</div>
                    <div><span class="estimativa_porcento">16%</span> Coxas</div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="b">
            <div class="balao-vertical">
              <div class="max-w-[145px]">
                <div style="font-size: 2.5rem;padding-bottom: 40%;"><b>94</b><span>%</span></div>
                <span class="font-bold text-base" style="font-size: 0.9rem;">
                  Pessoas semelhantes a si alcançaram os resultados desejados em menos de 4 semana</span>
              </div>
              <div>
                <svg style="width: 150%;  padding-top: 0%;" id="silhouette-male-purple" data-e2e="similarity-graph-male"
                  class="gender-mode__man" viewBox="0 0 140 296" shape-rendering="geometricPrecision"
                  text-rendering="geometricPrecision">
                  <g id="silhouette-male-purple-silhouette-male-purple">
                    <path id="silhouette-male-purple-male-1"
                      d="M117.158,138.624c1.597-17.083.806-26.621-1.395-32.898-.206-7.264-1.162-16.6842-2.463-22.4739-1.684-7.4921-4.544-12.8542-4.823-19.1592-.429-9.6799-3.622-15.7246-15.0051-16.8844-.4073-.0905-.8073-.1578-1.2032-.2155-.0657-.0096-.132-.0198-.197-.0286-4.0841-.5575-7.6611.2162-11.6761-3.9718-1.5081-1.5738-2.217-3.6107-2.5801-5.961-.0509-.3277-.0931-.6636-.132-1.0035-.008-.0693-.0154-.1394-.0227-.2094-.0041-.0401-.0067-.0809-.0108-.121.8764-1.0164,1.6709-1.9961,2.0119-2.5508.4643-.7561.7712-1.6752.9896-2.6998.0435-.0578.0864-.1128.1306-.172c1.1289-1.5025,1.9081-3.2477,2.4635-5.0351.4757-1.5249-.0864-2.1776.6029-3.6223.5132-1.0748.7873-2.27.6251-3.4061-.1634-1.1462.3886-2.0518.4844-3.1077.0972-1.0694.2754-2.0899.1038-3.1171-.1815-1.0919.1059-2.06138-.2364-3.124-.258-.80428-1.0465-1.4386-1.4552-2.12662-.5105-.8607-.6753-1.56096-1.2495-2.3904-.6338-.91373-1.4525-1.06466-2.3127-1.59768-1.1972-.74241-1.6896-1.51066-3.0242-1.826112-2.2879-.541851-4.3749-.979683-6.7841-.915776-2.4085-.063907-4.4954.373925-6.7834.915776-1.3345.315452-1.8269,1.083702-3.0242,1.826112-.8602.53302-1.6796.68395-2.3127,1.59768-.5741.82944-.7383,1.5297-1.2495,2.3904-.4086.68802-1.1972,1.32234-1.4558,2.12662-.341,1.06262-.0543,2.0321-.2358,3.124-.1715,1.0272.0073,2.0477.1038,3.1171.0958,1.0559.6479,1.9615.4837,3.1077-.1608,1.1361.1126,2.3313.6258,3.4061.6894,1.4447.1273,2.0974.6029,3.6223.5554,1.7874,1.3346,3.5326,2.4635,5.0351.0442.0585.0864.1142.1306.172.2191,1.0246.5253,1.9431.9896,2.6998.341.5547,1.1356,1.5344,2.0119,2.5508-.0034.0408-.0067.0829-.0114.1237-.0067.0687-.0141.1374-.0221.2053-.0389.34-.0811.6765-.132,1.0049-.3631,2.3503-1.0713,4.3872-2.5807,5.961-4.0138,4.188-7.5914,3.4143-11.6755,3.9718-.0649.0088-.1306.019-.1963.0286-.3966.0577-.7965.1244-1.2039.2155-11.3833,1.1598-14.5757,7.2045-15.0045,16.8844-.2794,6.305-3.1394,11.6671-4.8231,19.1592-1.301,5.7897-2.2577,15.2099-2.4634,22.4739-2.2008,6.277-2.9927,15.815-1.3949,32.898.1635,1.75.4697,4.093.6331,5.517-.879,3.803-1.6889,10.528-.2519,14.302c3.4765,9.125,10.1359,13.17,11.516,11.786c1.3802-1.385-.6766-3.14-2.2336-6.35-2.4628-5.078-1.6997-7.2-1.8967-9.382c1.0793,1.671,1.7332.929,3.5227,5.799.7376,2.02,2.4594,1.432,2.4313,1.249-.2486-1.891-.7303-3.962-1.1624-6.104-1.6073-7.974-4.4358-8.592-5.4006-11.3c0,0,.345-2.302.5527-3.603c1.2917-8.093,3.981-19.086,4.2932-31.606.0154-3.676,5.706-15.9837,8.8743-34.8879.2646,1.2733.5608,2.6705.8897,4.1553.0027.0109.0054.0217.0081.0326.1668.7513.3423,1.5263.5259,2.3156.0127.0551.0254.1088.0382.1632.1829.7846.3738,1.5841.5735,2.3952.0154.0618.0308.123.0455.1842.2017.8172.4114,1.6439.6304,2.4761.0121.0476.0248.0951.0369.1421.2258.8573.4596,1.7193.7028,2.5821c2.7743,9.8349,2.093,20.7765,2.2276,26.5925.1152,5.01-.6854,5.075-1.5242,7.813-.1132.37-.2298.727-.3497,1.077-.006.017-.012.033-.0174.049-.1146.333-.2318.658-.3504.976-.0107.029-.0214.058-.0321.086-.1146.306-.2305.608-.3484.906-.0161.041-.0322.083-.0483.123-.1112.281-.2231.559-.3349.837-.0865.212-.1722.425-.2587.637l-.0241.06c-.075.184-.1494.369-.2237.554-.0161.04-.0329.082-.0489.123-.061.153-.1226.307-.1836.462-.0235.058-.0462.118-.0697.177-.0047.011-.0094.024-.0141.035-.0582.151-.1172.303-.1755.456-.0167.042-.0328.085-.0489.129-.0489.127-.0971.257-.1447.387-.0054.015-.0114.03-.0168.045-.0201.055-.0408.111-.0616.167-.0188.053-.0375.106-.0563.159-.0576.161-.1152.324-.1722.489-.0201.059-.0402.117-.0609.177-.0034.012-.0074.023-.0114.034-.0027.008-.0054.014-.0074.022-.0663.196-.1313.394-.1956.596-.0067.02-.0127.041-.0188.061-.0636.202-.1259.408-.1876.616-.0194.065-.0381.13-.0576.196-.0549.191-.1092.385-.1621.583-.0127.047-.0261.094-.0389.142-.0636.24-.1252.487-.1855.738-.0148.061-.0289.122-.0429.183-.0469.203-.0931.409-.1387.619-.0154.073-.0315.145-.0462.219-.0563.271-.1112.546-.1635.83-.002.011-.0034.021-.0054.032-.0495.273-.0971.554-.1427.841-.0127.081-.0254.163-.0375.246-.0382.246-.0743.497-.1085.754-.0087.066-.0181.13-.0268.196-.0409.316-.0791.641-.1152.975-.0074.074-.0148.151-.0222.226-.0281.272-.0542.551-.0783.835-.0081.097-.0168.194-.0248.292-.0282.36-.055.727-.0777,1.107-.061.699-.1146,1.385-.1642,2.065-.0147.202-.0275.402-.0415.602-.0342.504-.0657,1.003-.0938,1.496-.0107.187-.0215.374-.0315.559-.071,1.352-.1193,2.67-.1454,3.96-.002.083-.0027.166-.0047.248-.0107.593-.0161,1.18-.0181,1.763-.0006.074-.0006.149-.0006.223-.0161,13.047,2.182,23.613,4.7326,39.838c1.0297,6.554,3.2935,16.384,2.7515,21.51-.5386,5.125-1.0029,10.016-.7155,18.514.402,11.847,4.9303,22.598,5.1339,43.061.0108,1.136-2.0494,5.61-2.3167,7.698-.4804,3.757-3.3981,5.885-3.8309,8.093-.6625,3.381,7.9143,4.429,10.2351,4.595c1.9094.135,6.7391,1.807,6.8557-2.566.0429-1.524-1.5938-5.55-1.9831-9.815-.3986-4.391-.682-6.721-.8039-8.893-.5273-9.271,3.2949-25.23,3.867-39.071.4449-10.757-1.5731-15.743-1.9442-21.421-.3042-4.669,1.5148-8.007,1.1912-15.944-.0958-2.327-.5394-4.811-.1427-7.31c1.7881-11.265,2.4185-25.627,2.3556-36.464.4977.209,1.0076.358,1.5328.423v.001c.0061.001.0114,0,.0181.001.2057.025.4134.04.6244.039.2111.001.4194-.014.6251-.039.0067-.001.0121,0,.0181-.001v-.001c.5259-.065,1.0351-.214,1.5329-.423-.0623,10.837.5674,25.199,2.3562,36.464.396,2.499-.0475,4.983-.1427,7.31-.3242,7.937,1.4954,11.275,1.1906,15.944-.3712,5.678-2.3891,10.664-1.9443,21.421.5722,13.841,4.3943,29.8,3.867,39.071-.1219,2.172-.4046,4.502-.8039,8.893-.3893,4.265-2.026,8.291-1.9831,9.815.1159,4.373,4.9463,2.701,6.8557,2.566c2.3208-.166,10.8977-1.214,10.2351-4.595-.4328-2.208-3.3505-4.336-3.8309-8.093-.2673-2.088-2.3281-6.562-2.3167-7.698.2037-20.463,4.7319-31.214,5.1339-43.061.2881-8.498-.1769-13.389-.7148-18.514-.542-5.126,1.7211-14.956,2.7508-21.51c2.1593-13.737,4.0654-23.417,4.5906-33.981v-.004c.0952-1.913.1447-3.858.1427-5.859c0-.069-.0006-.139-.0006-.209-.0021-.59-.0087-1.184-.0195-1.785-.0013-.075-.002-.151-.004-.227-.0261-1.296-.0744-2.62-.146-3.979-.0094-.175-.0195-.353-.0295-.528-.0288-.505-.061-1.015-.0958-1.529-.0134-.193-.0261-.386-.0402-.581-.0496-.682-.1032-1.371-.1648-2.072-.0228-.379-.0489-.744-.0777-1.103-.0081-.102-.0168-.202-.0255-.302-.0241-.28-.0496-.553-.0764-.821-.008-.078-.0161-.159-.0241-.237-.0355-.33-.073-.652-.1139-.966-.0094-.075-.0201-.147-.0301-.221-.0329-.246-.067-.486-.1032-.722-.0134-.09-.0275-.181-.0415-.27-.0436-.27-.0878-.535-.1347-.793-.0047-.025-.0087-.051-.0134-.075-.0509-.279-.1045-.548-.1595-.814-.0174-.082-.0348-.163-.0522-.244-.0429-.197-.0858-.391-.13-.581-.0167-.072-.0335-.145-.0509-.217-.0583-.244-.1186-.483-.1802-.716-.0168-.064-.0335-.124-.0503-.186-.0489-.18-.0978-.357-.148-.532-.0228-.076-.0449-.154-.0677-.23-.0549-.186-.1106-.369-.1668-.549-.0134-.041-.0255-.083-.0389-.124-.0623-.198-.1266-.392-.1916-.584v-.001c-.0054-.014-.01-.028-.0147-.043-.0235-.07-.0483-.139-.0717-.208-.0523-.152-.1052-.303-.1588-.451-.0221-.063-.0442-.125-.067-.187-.0201-.057-.0409-.112-.061-.167-.002-.006-.004-.011-.006-.017-.0496-.135-.0998-.27-.1501-.403-.0181-.047-.0361-.094-.0542-.141-.059-.155-.1186-.308-.1782-.46-.0007-.003-.0014-.007-.0027-.009-.0007-.002-.0014-.003-.002-.004-.0228-.059-.0456-.118-.069-.176-.0711-.181-.1421-.36-.2138-.538-.004-.01-.008-.021-.012-.031-.1715-.427-.3437-.85-.5152-1.273-.1146-.284-.2292-.569-.3424-.856-.0134-.033-.0268-.067-.0402-.1-.1192-.305-.2378-.612-.3544-.923-.0094-.024-.0181-.048-.0268-.072-.1206-.323-.2392-.652-.3551-.989-.0047-.013-.0087-.025-.0134-.038-.1199-.351-.2371-.71-.351-1.08-.8388-2.738-1.6394-2.803-1.5242-7.813.1347-5.816-.5467-16.7576,2.2276-26.5925.2446-.8662.4791-1.7316.7055-2.5923.0107-.0415.0221-.0823.0328-.1231.2205-.8424.4328-1.6779.6365-2.5033.0121-.0489.0235-.0972.0362-.1461.2043-.8315.3999-1.6507.5875-2.4537.0047-.0217.0101-.0435.0148-.0659.5554-2.3843,1.0344-4.6183,1.4377-6.5627c3.1683,18.9049,8.8593,31.2126,8.8743,34.8886.312,12.52,3.001,23.513,4.293,31.606.208,1.301.554,3.603.554,3.603-.966,2.708-3.795,3.326-5.402,11.3-.432,2.142-.913,4.213-1.162,6.104-.028.183,1.694.771,2.431-1.249c1.79-4.87,2.444-4.128,3.523-5.799-.197,2.182.566,4.304-1.897,9.382-1.557,3.21-3.613,4.965-2.233,6.35c1.38,1.384,8.039-2.661,11.516-11.786c1.437-3.774.626-10.499-.252-14.302.164-1.424.469-3.767.633-5.517Z"
                      opacity="0" clip-rule="evenodd" fill="var(--similar-weight)" fill-rule="evenodd"></path>
                  </g>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="row-quadro-branco">
          <div class="quadro-branco">
            <div class="">
              <div class="">
                <h3 class="" style="padding: 0%;">O seu <span class="text-hilite-2">IMC</span>
                  atual</h3>
              </div>
              <div class="js-animation" style="  position: relative; right: 1rem;">
                <svg style="width: 10rem; " id="bmi-phase-2" class="bmi-animations w-full"
                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 345 167"
                  shape-rendering="geometricPrecision" text-rendering="geometricPrecision">

                  <defs>
                    <linearGradient id="bmi-phase-2-chart-gradient-fill" x1="0" y1="0" x2="0" y2="0" spreadMethod="pad"
                      gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
                      <stop id="bmi-phase-2-chart-gradient-fill-0" offset="0%" stop-color="var(--bmi-arch-shadow-from)">
                      </stop>
                      <stop id="bmi-phase-2-chart-gradient-fill-1" offset="100%" stop-color="var(--bmi-arch-shadow-to)">
                      </stop>
                    </linearGradient>
                    <linearGradient id="bmi-phase-2-chart-curve-stroke" x1="2" y1="158" x2="344" y2="92"
                      spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">

                      <stop id="bmi-phase-2-chart-curve-stroke-5" offset="100%" stop-color="#8fcb27"></stop>
                    </linearGradient>
                  </defs>
                  <g id="bmi-phase-2-bmi-phase-2">

                    <path id="bmi-phase-2-chart-curve"
                      d="M1.5,158c6.5-.5,58-4,90.5-19c81.236-37.493,84.5-85,155-113C291.5,8.32623,338.5,2.5,343.5,2"
                      fill="none" stroke="url(#bmi-phase-2-chart-curve-stroke)" stroke-width="3" stroke-linecap="round"
                      stroke-dashoffset="0" stroke-dasharray="0"></path>

                    <g id="bmi-phase-2-pointer-2_ts" transform="translate(0,0) scale(0,0)">
                      <circle id="bmi-phase-2-pointer-2" r="10" transform="translate(60,-55)" fill="var(--bmi-dot)"
                        stroke="var(--main-bg)" stroke-width="0">
                      </circle>
                    </g>
                    <text id="bmi-phase-2-value-2" dx="0" dy="0" class="rtl:translate-x-18" font-size="0"
                      font-weight="700" opacity="0" fill="var(--main-color)">
                      <tspan id="bmi-phase-2-tspan1" x="167.268" y="143.621" font-size="34" font-weight="700"
                        font-style="normal" fill="var(--main-color)">{{ (peso / (altura ** 2) * 10000).toFixed(1) }}
                      </tspan>
                    </text>
                  </g>
                </svg>
              </div>
              <div class="" style="padding-top: 10%;">
                <span class="font-bold">Com base na OMS</span>, o IMC recomendado é de <span
                  class="font-bold text-hilite-2">22.5</span> para estar dentro de uma faixa saudável
              </div>
            </div>
          </div>
          <div class="quadro-branco">
            <div class="flex h-full flex-col justify-between p-7.5 pb-[50px]">
              <h3 class="" style="padding-top: 10%;">

                <div id="result"></div> Idade Metabólica
              </h3>
              <div class="text-base text-zeta">A <span class="font-bold"> idade metabólica</span> é um indicador da idade
                seu corpo</div>
              <div class="">
                <div class="idMetabolica">
                  <div class="sua-idade-metabolica"><b>Sua idade Metabolica</b>
                    <div id="idade_metabolica2">*</div>
                  </div>
                  <div style="font-size: 80%;" id="idade_metabolica1"><b>Sua idade </b> {{ idade }}</div>
                </div>
                <svg id="metabolic-age-phase-1" style="top: -1rem;position: relative;width: 119px;"
                  class="js-metabolic metabolic-age-phase-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 285 252"
                  shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
                  <g id="metabolic-age-phase-1-metabolic-age-phase-1">
                    <g id="metabolic-age-phase-1-pink-bar">
                      <rect id="metabolic-age-phase-1-pink-main" width="141" height="190" rx="4" ry="4"
                        transform="translate(0 62)" fill="#f53373"></rect>
                    </g>
                    <g id="metabolic-age-phase-1-purple-bar">
                      <rect id="metabolic-age-phase-1-purple-main" width="141" height="140" rx="4" ry="4"
                        transform="translate(144 112)" fill="var(--metabolic-age-purple)"></rect>
                    </g>
                  </g>
                </svg>
              </div>
            </div>
          </div>
          <div class="quadro-branco">
            <div class="flex h-full flex-col justify-between p-7.5 pb-[50px]">
              <h3 class="mb-1 max-w-[87%] text-2xl font-bold leading-[1.33]">Calorias Diárias</h3>
              <div>
                <div class="text-base text-zeta">Recomendado</div>
                <div class="space-x-1 text-2xl font-bold leading-[1.33] rtl:space-x-reverse"><span
                    class="js-calories-from">1500</span>-<span class="js-calories-to">1600</span>Cal</div>
              </div>
              <div class="js-animation" style="    width: 10rem; right: 1rem; position: relative;  top: 2rem;">

                <svg id="calories-phase-2" class="js-cal ltr-dir" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 279 180" shape-rendering="geometricPrecision"
                  text-rendering="geometricPrecision">

                  <defs>
                    <linearGradient id="calories-phase-2-solid-fill" x1="140" y1="9" x2="140" y2="142" spreadMethod="pad"
                      gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
                      <stop id="calories-phase-2-solid-fill-0" offset="0%" stop-color="var(--calories-arch-shadow-from)">
                      </stop>
                      <stop id="calories-phase-2-solid-fill-1" offset="100%" stop-color="var(--calories-arch-shadow-to)">
                      </stop>
                    </linearGradient>
                    <linearGradient id="calories-phase-2-2350-2450-fill" x1="74" y1="87" x2="206" y2="87"
                      spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
                      <stop id="calories-phase-2-2350-2450-fill-0" offset="0%" stop-color="#ff592d"></stop>
                      <stop id="calories-phase-2-2350-2450-fill-1" offset="100%" stop-color="#f90"></stop>
                    </linearGradient>
                    <linearGradient id="calories-phase-2-tspan4-fill" x1="-0.492203" y1="-14.603106" x2="131.507797"
                      y2="-14.603106" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                      gradientTransform="translate(0 0)">
                      <stop id="calories-phase-2-tspan4-fill-0" offset="0%" stop-color="#ff592d"></stop>
                      <stop id="calories-phase-2-tspan4-fill-1" offset="100%" stop-color="#f90"></stop>
                    </linearGradient>
                    <linearGradient id="calories-phase-2-inidcator-2-stroke" x1="6.99999" y1="149" x2="139" y2="5"
                      spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
                      <stop id="calories-phase-2-inidcator-2-stroke-0" offset="0%" stop-color="#ff592d"></stop>
                      <stop id="calories-phase-2-inidcator-2-stroke-1" offset="100%" stop-color="#f90"></stop>
                    </linearGradient>
                  </defs>
                  <g id="calories-phase-2-calories-phase-2"><text id="calories-phase-2-0" dx="0" dy="0" font-size="18"
                      font-weight="400" fill="var(--main-color)">
                      <tspan id="calories-phase-2-tspan1" x="1" y="177.152" font-size="18" font-weight="400"
                        font-style="normal" fill="var(--main-color)">
                        0
                      </tspan>
                    </text><text id="calories-phase-2-5000" dx="-10" dy="0" font-size="18" font-weight="400"
                      fill="var(--main-color)">
                      <tspan id="calories-phase-2-tspan2" x="237.57" y="177.152" font-size="18" font-weight="400"
                        font-style="normal" fill="var(--main-color)">
                        5000
                      </tspan>
                    </text>
                    <path style="fill: rgb(96, 143, 50);" id="calories-phase-2-solid"
                      d="M139.5,9C66.3223,9,7,68.5461,7,142h265C272,68.5461,212.678,9,139.5,9Z" opacity="0"
                      fill="url(#calories-phase-2-solid-fill)"></path><text id="calories-phase-2-calories" dx="0" dy="0"
                      font-size="18" font-weight="400" opacity="0" fill="#fff">
                      <tspan id="calories-phase-2-tspan3" x="107.539" y="119.152" font-size="18" font-weight="400"
                        font-style="normal" fill="var(--main-color)">
                        Calorias
                      </tspan>
                    </text><text id="calories-phase-2-2350-2450" dx="0" dy="0" font-size="24" font-weight="700"
                      opacity="0" fill="url(#calories-phase-2-2350-2450-fill)">
                      <tspan id="calories-phase-2-tspan4" x="74.4922" y="95.2031" font-size="24" font-weight="700"
                        font-style="normal" fill="url(#calories-phase-2-tspan4-fill)">1500 - 1600</tspan>
                    </text>
                    <path id="calories-phase-2-placeholder"
                      d="M272,142C272,68.5461,212.678,9,139.5,9C66.3223,9,7,68.5461,7,142"
                      transform="matrix(-1 0 0 1 279 0)" fill="none" stroke="var(--calories-arch)" stroke-width="14"
                      stroke-linecap="round" stroke-dashoffset="417.11" stroke-dasharray="417.11"></path>
                    <path id="calories-phase-2-inidcator-2" d="M139.27,9C100.497,9,65.6214,25.7746,41.4282,52.5"
                      fill="none" stroke="url(#calories-phase-2-inidcator-2-stroke)" stroke-width="18"
                      stroke-linecap="round" stroke-dashoffset="110.27" stroke-dasharray="110.27"></path>
                  </g>
                </svg>


              </div>
            </div>
          </div>
          <div class="quadro-branco">
            <div class="flex h-full flex-col justify-between p-7.5">
              <h3 class="mb-7.5 max-w-[87%] text-2xl font-bold leading-[1.33]">Ingestão de água</h3>
              <div
                class="js-animation relative flex space-x-5 py-3 before:absolute before:bottom-0 before:h-[1px] before:w-full before:bg-dashes before:bg-[length:22px_1px] before:bg-repeat-x after:absolute after:top-0 after:h-[1px] after:w-full after:bg-dashes after:bg-[length:22px_1px] after:bg-repeat-x rtl:space-x-reverse">
                <div class="bottle-container">

                  <div class="qtd_agua">
                    <img class="img" :src="'../../storage/img/qtd_agua.png'">
                  </div>



                  <div class="texto3L">
                    <span class="block text-[31.3px] font-bold leading-[1.22] text-hilite-7">3 L </span><br>
                    A sua ingestão de água recomendada
                  </div>
                </div>


              </div>
              <div class="mx-auto max-w-[285px] text-center text-base font-light" style="    margin: 10%;">
                <span class="font-bold">Com base na OMS</span>, a perda de água diária típica está entre <span
                  class="font-bold text-hilite-3">2,5</span> <span class="font-bold">e</span> <span
                  class="font-bold text-hilite-3">3 L</span>, sendo que <span class="font-bold text-hilite-3">0,7 L</span>
                de
                água são fornecidos através dos alimentos diariamente.
              </div>

            </div>
          </div>
          <div class="quadro-branco">
            <div class="flex h-full flex-col items-center justify-between p-[40px] pb-[27px]">
              <h3 class="mb-1 max-w-[87%] text-center text-2xl font-bold leading-[1.33]">
                <div class="text-hilite-1">20+</div>
                Receitas
              </h3>
              <div class="js-animation h-[187px] w-[187px]">
                <svg style="fill: rgb(96, 143, 50);" id="food-icon" class="" viewBox="0 0 165 165"
                  shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
                  <g id="food-icon-food-icon">
                    <path id="food-icon-pan"
                      d="M165.304,66.8489c-2.31-5.4364-17.957,3.5561-35.561,15.1422-10.598,6.9747-31.4202,28.8149-31.4202,28.8149L0.476074,134.428C3.62311,147.469,17.0208,155.42,30.3995,152.19l58.5252-14.13c13.3783-3.229,21.6733-16.419,18.5243-29.457l-8.0779,1.95l8.0779-1.951c0,0,19.176-15.7054,26.82-20.4715c1.964-1.2259,5.121-2.8683,8.689-4.7245c10.316-5.3658,24.065-12.5179,22.346-16.5571Z"
                      transform="translate(0 0)" clip-rule="evenodd" fill="var(--recipies-blue)" fill-rule="evenodd">
                    </path>
                    <path id="food-icon-dots"
                      d="M54.8455,14.5301c-2.1209-1.1137-3.8465,2.1674-1.7256,3.2811c2.1209,1.1138,3.8466-2.1673,1.7256-3.2811ZM68.513,24.5868c-2.1209-1.1138-3.8465,2.1673-1.7256,3.2811c2.1209,1.112,3.8466-2.1674,1.7256-3.2811ZM51.7721,30.8724c-2.121-1.1121-3.8483,2.1673-1.7256,3.2811c2.1209,1.1137,3.8465-2.1674,1.7256-3.2811ZM18.7135,104.736c-2.1209-1.114-3.8482,2.167-1.7273,3.281c2.1226,1.114,3.8483-2.169,1.7273-3.281Zm11.0244,12.057c-2.1209-1.112-3.8483,2.169-1.7256,3.281c2.1192,1.114,3.8465-2.168,1.7256-3.281Zm8.4854-72.9342c-2.1209-1.1137-3.8483,2.1657-1.7273,3.2794c2.1209,1.1138,3.8482-2.1673,1.7273-3.2794Zm27.9985,2.252c-2.1209-1.1154-3.8483,2.1657-1.7256,3.2794c2.1209,1.1138,3.8482-2.1673,1.7256-3.2794ZM27.1234,76.017c-2.1209-1.1155-3.8465,2.1673-1.7273,3.2811c2.1226,1.112,3.8482-2.1674,1.7273-3.2811Zm-3.5662,7.664c-2.1209-1.1121-3.8482,2.1673-1.7256,3.2811c2.121,1.1154,3.8466-2.1674,1.7256-3.2811Zm12.0501-2.5148c-2.121-1.112-3.8466,2.1691-1.7257,3.2828c2.121,1.1138,3.8483-2.1673,1.7257-3.2828Zm8.073-2.0418c-2.1209-1.1138-3.8482,2.1673-1.7273,3.2811c2.1226,1.1137,3.8483-2.1674,1.7273-3.2811Zm6.667-10.4571c-2.121-1.1137-3.8483,2.1674-1.7256,3.2811c2.1209,1.1138,3.8482-2.1673,1.7256-3.2811Zm5.4519-14.3515c-2.121-1.1138-3.8466,2.1673-1.7257,3.2811s3.8466-2.1674,1.7257-3.2811ZM25.1864,57.0902c-2.1192-1.1138-3.8465,2.1673-1.7239,3.2794c2.1192,1.1137,3.8466-2.1674,1.7239-3.2794Zm19.8465-4.4706c-2.121-1.1154-3.8483,2.1657-1.7274,3.2794s3.8483-2.1673,1.7274-3.2794Zm34.64,2.7055c-2.1227-1.1138-3.8483,2.1673-1.7274,3.281c2.1227,1.1138,3.8483-2.1673,1.7274-3.281ZM64.2931,82.5019c-2.121-1.1138-3.8483,2.1656-1.7256,3.2794c2.1209,1.1154,3.8465-2.1674,1.7256-3.2794ZM55.447,95.7689c-2.1226-1.1137-3.8465,2.1673-1.7273,3.2794c2.1226,1.1157,3.8483-2.1656,1.7273-3.2794ZM47.4961,119.742c-2.1193-1.114-3.8466,2.169-1.7257,3.281c2.121,1.114,3.8483-2.167,1.7257-3.281Zm8.2601-83.0087c-2.121-1.1138-3.8466,2.1673-1.7256,3.2793c2.1209,1.1155,3.8482-2.1673,1.7256-3.2793ZM25.214,129.702c-2.1209-1.114-3.8483,2.167-1.7273,3.281s3.8483-2.167,1.7273-3.281ZM40.6553,25.9447c-2.1227-1.1154-3.8483,2.1674-1.7273,3.2794c2.1226,1.1138,3.8482-2.1656,1.7273-3.2794Z"
                      clip-rule="evenodd" fill="var(--recipies-blue)" fill-rule="evenodd"></path>
                    <path styley="fill: brown;" id="food-icon-vegetables"
                      d="M49.2044,41.3956c-.0149-.0084-.0298-.0168-.0447-.0237-.5827-.3059-1.2873-.2819-1.8494.0688-.3626.2268-.7012.3575-.9797.3832-.2578.0207-.4761-.0206-.6892-.1323-.7975-.4194-1.3423-1.6792-1.5726-2.2172-.55-1.2787-.9539-2.5644-.1753-3.3206.2234-.2131.5757-.3953,1.026-.5208.6635-.1873,1.1705-.7253,1.3115-1.3991.1426-.6737-.098-1.3698-.6291-1.8098-.3506-.2905-.5981-.5895-.6978-.8491-.3885-.99.5208-2.004,1.5658-2.9545.7562-.6858,1.564-1.332,2.3478-1.4025.2612-.0223.4847.0206.7115.1409h.0018c.256.1375.5053.385.7425.7408.3815.5689,1.0484.8817,1.7325.813.6823-.067,1.2718-.5088,1.5314-1.143.1701-.4176.3815-.7408.6118-.9367.22-.1873.4589-.287.7614-.3128.5225-.0464,1.1224.1255,1.9457.5586.1753.0928.3471.189.519.287c1.6088.9299,2.2275,1.6861,2.0694,2.5283-.0533.2819-.2406.6342-.5208.9934-.428.5414-.5173,1.2736-.2355,1.9027.2819.6273.8886,1.0484,1.5761,1.0948.4246.0258.7649.1152,1.021.2716.7184.4486.8422,1.3973.4262,3.2794-.3025,1.3784-.7304,2.6726-1.7789,2.829-.0052.0006-.0102.0013-.0152.0019-.0232.0027-.0446.0053-.0673.0067-.2818.0258-.629-.0361-1.0089-.1718-.6445-.2372-1.3664-.098-1.8769.3592s-.7253,1.1584-.5603,1.8236c.11.4451.1255.8267.0482,1.1343-.2664,1.0502-1.5864,1.3407-2.97,1.4988-.1341.0155-.275.0309-.4263.0447l-.0183.0015c-.4532.0388-1.4726.1259-2.1559-.2335-.263-.1375-.4349-.3197-.562-.5913-.1272-.2681-.1822-.6239-.1668-1.0553.0258-.6841-.3317-1.3303-.9264-1.6758-.0074-.004-.0149-.0082-.0223-.0124Zm-2.2481,4.3162c.4761,1.0089,1.2168,1.7823,2.2,2.2996c1.6637.8749,3.532.7082,4.2367.6429.1822-.0155.3575-.0344.519-.0533c1.2874-.1478,5.2061-.5981,6.1411-4.266.031-.1186.0568-.2423.0774-.3643.0189,0,.0361-.0018.0533-.0035.0928-.0086.1856-.0189.2887-.0344c3.7331-.5499,4.5891-4.4223,4.8692-5.6959l.0009-.0039c.2845-1.2913,1.1457-5.2008-2.0926-7.22-.0722-.0447-.1478-.0894-.2217-.1306.0258-.1014.0481-.1994.067-.2991.4727-2.5111-.8267-4.6733-3.8603-6.4247-.2131-.1237-.4314-.2458-.6514-.3609-.9281-.4881-2.353-1.1189-4.0081-.9711-1.0605.0945-2.0402.5036-2.8411,1.1859-.0791.0671-.153.1358-.2269.2063-.0739-.0447-.1495-.0877-.2251-.1272l-.0344-.0172c-.8577-.452-1.7892-.6359-2.7638-.5483-1.8854.1685-3.3412,1.2822-4.5203,2.3547l-.0017.0016c-.9643.8782-3.8921,3.5446-2.5162,7.0436.0412.1083.0876.2114.1375.3162-.098.0808-.1925.165-.2802.251-2.7179,2.6354-1.1615,6.2497-.6486,7.4407l.0006.0015c.3867.9006,1.296,3.006,3.2605,4.0373.8422.4417,1.7548.6256,2.7105.5483.0037-.0006.009-.001.0146-.0015.0099-.0007.0205-.0015.0249-.0037.0653-.0034.1289-.0103.1942-.0189.031.0705.0636.1427.0963.2149ZM43.4296,57.829c-2.9855-1.9491-5.9383-2.5902-12.2564,2.1553-6.3198,4.742-6.5227,7.7498-5.4725,11.1512.5552,1.8081,3.5853,4.84,5.2903,5.5894c1.5486.6823,3.3756.6823,3.8191-1.4936.2109-1.0403-.3497-1.6698-.9047-2.293-.5261-.5908-1.0473-1.1759-.9017-2.1001.0098-.0605.0146-.135.0198-.2146.0183-.2827.0408-.6291.305-.6345c2.1656-.0309,5.4519,7.2291,5.4519,7.2291.3798.5036,1.1412.5723,1.6998.1529l4.8589-3.6471c.5586-.4194.703-1.1671.3232-1.6724c0,0-6.0827-5.1631-5.4502-7.2273.0767-.2544.4189-.1789.6967-.1177v0c.077.017.149.0329.2091.0403.9298.1171,1.3495.7788,1.773,1.4465.4471.7049.8984,1.4164,1.9584,1.5012c2.2189.1787,2.7225-1.5727,2.4973-3.245-.2492-1.8442-2.3306-5.586-3.917-6.6206Zm27.3021,6.4954c.2011-.2321.3421-.5139.4022-.8147.1925-.9625-.4451-1.9027-1.418-2.0986-.6325-.1272-1.289.0945-1.7101.5758-.2028.232-.342.5139-.4022.8147-.0945.4709.0052.9504.2784,1.3492.2682.3884.6721.6548,1.1379.7476.6342.1272,1.289-.0928,1.7118-.574Zm2.9219,5.8678c.2028-.2303.3403-.5139.3988-.8147.1942-.9608-.44-1.9027-1.4146-2.0969-.6325-.1272-1.289.0928-1.7119.5758-.2028.2303-.342.5122-.4021.8147-.1908.9608.4434,1.9009,1.4162,2.0969.6325.1271,1.2908-.0929,1.7136-.5758Zm-6.2614-.7958c.2028-.2337.3403-.5156.4005-.8164.0945-.4709-.0035-.9505-.2768-1.3492-.2664-.3885-.672-.6549-1.1378-.7477-.6359-.1272-1.289.0945-1.7118.5758-.2029.232-.3421.5122-.4022.813-.0928.4726.0051.9504.2784,1.3492.2681.3901.672.6565,1.1361.7494.6342.1254,1.2908-.0946,1.7136-.5741Zm2.1897,5.8352c.2011-.2304.342-.5122.4005-.813.1942-.9625-.44-1.9027-1.4163-2.1003-.6308-.1255-1.2891.0962-1.7102.5775-.2028.232-.342.5122-.4021.8129-.0946.4727.0034.9505.2767,1.3493.2698.3901.6737.6565,1.1395.7493.6342.1272,1.2891-.0928,1.7119-.5757Zm-5.9967-1.2014c.2045-.2321.342-.514.4039-.8147.0945-.471-.0069-.9522-.2802-1.351-.2664-.3867-.672-.6548-1.1344-.7459-.6359-.1289-1.2925.0928-1.7136.574-.2028.2321-.342.514-.4021.813-.1943.9625.4434,1.9027,1.4145,2.0986.6359.1272,1.2908-.0928,1.7119-.574Zm-5.9555-7.2669c-.0945.4692.0034.9504.2767,1.3492.2681.3884.6738.6548,1.1378.7494.6342.1272,1.2891-.0946,1.7136-.5758.2011-.232.3421-.5122.4005-.8147.0962-.4709-.0034-.9488-.2784-1.3492-.2665-.3885-.6704-.6549-1.1361-.7477-.6343-.1272-1.2908.0911-1.7136.5741-.2011.2337-.3421.5139-.4005.8147Zm4.2917-3.7435c-.0962.4727.0035.9522.2767,1.3493.2682.3884.6738.6565,1.1378.7493.636.1272,1.2908-.0945,1.7119-.5758.2028-.232.3438-.5121.4039-.8146.1925-.9608-.4451-1.9027-1.4179-2.0986-.6343-.1255-1.2891.0945-1.7102.5758-.2045.232-.342.5139-.4022.8146Zm-7.1861,3.1643c1.2186-6.093,7.3821-9.9946,13.7672-8.7107c6.3852,1.2805,10.572,7.2549,9.3517,13.3461-1.2186,6.093-7.3837,9.9928-13.7689,8.7124-6.3834-1.2805-10.572-7.2566-9.35-13.3478ZM40.7284,105.243l.0025-.002.0026-.003c.7486-.738,2.3015-2.269,1.5701-3.821-.33-.702-1.0794-1.205-1.6483-1.5044-1.8339-.9625-4.4911-1.2581-5.5034-.1805-.5947.5429-.8267,1.5589-.6566,2.8599.2063,1.583,1.0502,3.517,2.2567,4.151.0361.021.0705.036.1066.051c1.5726.715,3.1229-.814,3.8698-1.551Zm-11.8362,1.959c.9298.459,2.8669,1.413,4.1439.228.9969-.923,1.2358-2.963,1.0347-4.468-.1839-1.365-.7064-2.37-1.4386-2.754-.0292-.015-.0602-.031-.0825-.039-.9935-.5228-2.365.029-3.0955.405-1.4145.726-3.0181,2.126-3.2055,3.493-.1976,1.468,1.186,2.377,2.2447,2.932.1193.063.2361.122.3449.176h.0008l.0531.027ZM23.5348,96.7449c-.1598.9419-.5311,3.1522.9986,3.9721l.0138.007c1.1876.622,3.2948.18,4.7644-.578.7184-.3726,1.9421-1.1564,2.0796-2.2254.2922-1.3991-1.344-3.1849-3.0937-4.1027-.9419-.4933-1.8356-.6909-2.5197-.5569-1.7119.3404-2.0711,2.4647-2.243,3.4839Zm11.7339-8.2465c-.8903-.4675-2.0642-.3575-3.202-.1702l-.0072.0012c-1.0375.1741-3.1819.5338-3.5231,2.2177-.3455,1.6964,1.4919,4.3296,3.1814,5.2182.5638.2956,1.088.397,1.5314.3059.8405-.1083,1.6964-.9023,2.3427-2.1794.7029-1.3853,1.1584-3.4134.5053-4.5908-.1891-.3437-.4692-.6136-.8285-.8026Zm5.5,2.7139c-.397-.208-.8181-.2853-1.2529-.2286-1.3785.1856-2.86,1.7978-3.6111,3.3-.5999,1.1962-.715,2.2395-.3369,2.9081.1788.3867.5174.7133,1.0089.9694v.0017c1.717.9006,5.1099.8216,6.3645-.495c1.2049-1.2684.1925-3.2467-.2423-4.0923-.4916-.9591-1.0656-1.9096-1.9302-2.3633ZM27.323,86.5304c6.7753-3.4512,15.0098-.8955,18.3923,5.7063c3.3825,6.6034.6308,14.7533-6.1428,18.2033-6.777,3.451-15.0098.895-18.3941-5.706-3.3807-6.6055-.629-14.7541,6.1446-18.2036Z"
                      clip-rule="evenodd" fill="var(--recipies-blue)" fill-rule="evenodd"></path>
                    <path id="food-icon-leafs"
                      d="M78.057,35.2982c.2423.0034,1.1017.0378,2.059.3197c1.1241.3351,1.999.7322,1.9525.8886s-.9968.0137-2.1226-.3214c-.9539-.2819-1.6964-.7254-1.8975-.8508-.0309-.0207-.0258-.0361.0086-.0361Zm-1.5452,1.8751c-.9539-.2818-1.6947-.7253-1.8975-.8507-.0292-.0224-.0275-.0379.0103-.0379.2407.0052,1.1018.0379,2.0574.3232c1.124.3334,1.9989.7322,1.9525.8886s-.9969.012-2.1227-.3232Zm-3.2072,1.1378c-.7665-.2251-1.3526-.6015-1.5125-.7098-.024-.0189-.0223-.0327.0069-.0327.1942-.0034.8903.0018,1.6569.2304.9006.2681,1.5967.5998,1.5555.739-.0413.1444-.8079.0413-1.7068-.2269Zm10.8265-1.4403c.0601.1994-3.1815,1.3097-7.2377,2.475-3.4427.9935-6.4075,1.5641-7.2274,1.7153-.1237.0224-.1289,0-.0103-.0464.7717-.3093,3.5836-1.4025,7.0263-2.3925c4.0562-1.1687,7.3923-1.9525,7.4491-1.7514Zm-4.9844,2.3891c.1237.1083-.4022.9109-1.1739,1.7927-.6583.7459-1.3682,1.2323-1.5693,1.3646-.0292.0189-.0412.0086-.0275-.024.1032-.2166.495-.9831,1.1499-1.7325.7717-.88,1.497-1.5074,1.6208-1.4008Zm3.4358-.9866c.122.1083-.404.9093-1.1757,1.791-.6565.7459-1.3681,1.2323-1.5692,1.3629-.0292.0207-.043.0104-.0275-.024.1031-.2149.4933-.9831,1.1481-1.7291.7735-.8817,1.5005-1.509,1.6243-1.4008Zm-9.2779,4.5375c.0757-.1753.373-.8043.8972-1.4059.6188-.7047,1.21-1.1963,1.3217-1.0983.1135.0963-.299.7477-.9178,1.4541-.5276.5981-1.112.9728-1.277,1.0725-.0241.0154-.0361.0069-.0241-.0224Zm-4.7282-1.7497c-.0963.184-.0258.428.1546.5329c1.1808.6823,5.3797,2.8479,9.3054,1.717c4.6217-1.3303,7.8082-4.3467,7.1156-6.7358-.6927-2.389-5.0033-3.245-9.6267-1.913-3.9274,1.1293-6.3164,5.1958-6.9489,6.3989ZM15.5579,68.0214c.0705-.2286.3472-1.0432.8886-1.8768.6394-.9814,1.2702-1.705,1.406-1.6174.1375.0894-.2681.9574-.9075,1.9388-.5414.8353-1.1774,1.4179-1.3561,1.5743-.0275.0241-.0395.0138-.031-.0189Zm1.3665,2.0127c-.5415.8336-1.1757,1.418-1.3544,1.5744-.0292.0223-.043.0154-.0327-.0207.0722-.2268.3472-1.0432.8903-1.8768.6394-.9814,1.2685-1.705,1.406-1.6157.1375.0894-.2699.9591-.9092,1.9388Zm.1856,3.3945c-.4331.6703-.9591,1.1224-1.1086,1.2461-.0241.0172-.0378.0121-.0292-.0172.0515-.1873.2543-.8507.6892-1.5211.5105-.7854,1.0261-1.3561,1.1515-1.277.1255.0808-.1907.7855-.7029,1.5692Zm1.6758-10.7714c.2079-.0017.3592,3.4186.3334,7.633-.0172,3.575-.3077,6.5759-.3953,7.4026-.0138.1272-.0344.1255-.0464-.0017-.0774-.8267-.3335-3.8311-.3146-7.4061.0241-4.2143.2132-7.6312.4229-7.6278Zm.8868,5.4519c.1393-.0894.7614.6428,1.3905,1.6328.5328.8405.7992,1.6586.868,1.8906.0103.0327-.0017.043-.031.0189-.177-.1615-.8043-.7528-1.3389-1.5932-.6273-.99-1.0243-1.8614-.8886-1.9491Zm.0224-3.5699c.1375-.0859.7579.6446,1.3887,1.6346.5311.8422.7975,1.6603.8663,1.8889.012.0344-.0035.0447-.031.0206-.177-.1598-.8043-.7528-1.3371-1.5916-.6291-.9917-1.0261-1.8648-.8869-1.9525Zm1.7394,10.1716c-.1479-.1237-.6686-.5861-1.0966-1.2598-.5019-.7924-.8095-1.5005-.6841-1.5778.1255-.0808.636.4984,1.1396,1.2925.4245.6737.6204,1.3423.6686,1.5262.0085.0292-.0018.0378-.0275.0189Zm-3.0165,4.0253c.1496.1444.404.1478.5569.0035.9883-.935,4.2539-4.3364,4.278-8.415.0258-4.8039-1.9714-8.7124-4.4619-8.7279-2.4922-.0189-4.5323,3.8655-4.5598,8.6677-.0224,4.0803,3.2089,7.5247,4.1868,8.4717Zm31.445,5.9913c-.0808-.2252-.3455-1.045-.4091-2.0385-.0739-1.1687,0-2.1243.1633-2.1346.1633-.0086.3558.9298.4279,2.1003.0654.99-.0962,1.839-.1461,2.0694-.0085.0378-.024.036-.036.0034Zm2.2979.8061c.0619.9917-.0979,1.8373-.1461,2.0711-.0103.0361-.0258.0361-.0395.0034-.0773-.2269-.3438-1.0467-.4056-2.0384-.0739-1.1705-.0017-2.1261.1615-2.1364.165-.0103.3575.9315.4297,2.1003Zm2.176,2.6176c.0515.7958-.0997,1.473-.1461,1.6621-.0086.0275-.0224.0292-.0344.0017-.0688-.1805-.3042-.8353-.3541-1.6311-.0584-.9367.0138-1.7016.1616-1.7119s.3162.7425.373,1.6792Zm-5.091-9.6542c.1685-.1237,2.3306,2.5335,4.828,5.9349c2.1209,2.8857,3.6798,5.469,4.1044,6.1857.0653.1083.0464.1204-.0378.0258-.5586-.6187-2.5575-2.8806-4.6768-5.7664-2.4973-3.3997-4.3862-6.258-4.2178-6.38Zm3.9703,3.8517c.0585-.1512.9935.0654,2.09.4882.9299.3592,1.6328.8576,1.8254,1.002.0292.0206.0223.0361-.0138.0344-.2372-.0241-1.0948-.1255-2.0247-.4847-1.0966-.4228-1.9336-.8869-1.8769-1.0399Zm-2.114-2.8806c.0584-.1495.9934.0688,2.09.4899.9281.3592,1.6311.8576,1.8236,1.0003.0292.0223.0223.0378-.0121.0361-.2389-.0241-1.0965-.1272-2.0247-.483-1.0965-.4228-1.9353-.8903-1.8768-1.0433Zm7.4697,7.1397c-.1925-.0103-.8869-.0722-1.6329-.3592-.8765-.3386-1.5451-.7236-1.4901-.8611.0533-.1392.8061.0241,1.6844.3609.7442.2888,1.2993.7099,1.4506.8302.0223.0189.0189.0309-.012.0292Zm-.0172,5.0325c.2079.0258.4142-.1237.4503-.33.2337-1.3389.8233-6.0156-1.595-9.307-2.8463-3.8758-6.7839-5.83-8.7931-4.3622-2.0093,1.4695-1.3252,5.8025,1.5211,9.6783c2.4182,3.2931,7.0657,4.1387,8.4167,4.3209ZM47.2139,114.885c.9831-.169,1.7686-.517,1.9868-.621.031-.017.0275-.032-.0085-.036-.2355-.025-1.0983-.094-2.078.072-1.1567.198-2.0728.49-2.0453.65.0292.162.9883.133,2.145-.065Zm4.6183-3.061c-.2389-.024-1.0983-.093-2.0797.074-1.1568.197-2.0728.486-2.0453.648.0292.161.9882.132,2.145-.066.9814-.166,1.7685-.517,1.9868-.62.0327-.016.0292-.031-.0068-.036Zm1.961-2.394c-.1907-.026-.8834-.105-1.6689.03-.9264.157-1.6586.403-1.6328.55.0258.145.7958.135,1.7239-.022.7872-.136,1.4128-.438,1.5864-.526.0258-.014.0224-.027-.0086-.032Zm-5.3453.687c-3.1178,2.838-5.5309,5.266-5.3882,5.419.1409.155,2.7826-2.023,5.8987-4.86c2.6452-2.41,4.6819-4.636,5.237-5.255.0843-.094.0705-.111-.0326-.034-.6652.497-3.0714,2.317-5.7149,4.73Zm-1.7239-1.054c-.3008,1.131-.4159,2.084-.2578,2.127.1581.039.5311-.843.8336-1.974.2544-.96.263-1.823.2595-2.06-.0017-.038-.0171-.042-.036-.011-.1204.207-.5415.958-.7993,1.918Zm-2.6382,2.403c-.3008,1.133-.416,2.083-.2596,2.126.1581.043.5328-.84.8336-1.973.2561-.959.2647-1.82.263-2.059-.0035-.038-.0189-.041-.0361-.01-.122.206-.5431.957-.8009,1.916Zm5.8609-4.386c.2045-.77.1908-1.464.1805-1.657-.0018-.031-.0155-.034-.031-.008-.1031.161-.4623.758-.6703,1.526-.2389.906-.3197,1.672-.1753,1.71.1426.038.4537-.665.6961-1.571Zm4.8194-2.585c.2079.012.3798.201.3746.411-.0326,1.358-.3712,6.062-3.3876,8.808-3.5527,3.237-7.7963,4.375-9.4772,2.537-1.6826-1.837-.1633-5.952,3.3894-9.188c3.0181-2.748,7.7395-2.661,9.1008-2.568ZM26.0581,45.2649c.9796-.1822,1.7617-.5414,1.9765-.648.0327-.0172.031-.0327-.0069-.0361-.2354-.0206-1.0982-.0791-2.0779.1031-1.1533.2114-2.0642.5156-2.035.6755.0309.1598.99.1186,2.1433-.0945Zm4.5753-3.1247c-.2372-.0207-1.0983-.0774-2.0763.1014-1.155.2131-2.0659.5156-2.0367.6772.0292.1598.99.1186,2.1433-.0946.9797-.1787,1.7617-.5414,1.9783-.6462.0326-.0155.0292-.0327-.0086-.0378Zm1.9318-2.42c-.1925-.0241-.8868-.0928-1.6723.0533-.923.1684-1.65.4262-1.6225.5723.0258.1444.7975.1237,1.7222-.0464.7855-.1461,1.4076-.4555,1.5795-.5449.0258-.0154.0206-.0292-.0069-.0343Zm-5.3384.7597c-3.0783,2.8806-5.457,5.3401-5.3144,5.4914.1427.1529,2.7552-2.0591,5.8335-4.9397c2.6107-2.4458,4.6165-4.6974,5.1648-5.3247.0825-.0945.0688-.1117-.0326-.0344-.6618.507-3.0405,2.3599-5.6513,4.8074Zm-1.7376-1.0313c-.2854,1.1361-.3868,2.09-.2286,2.1313.1581.0378.519-.8491.8043-1.9835.2424-.9659.2407-1.827.2338-2.0642-.0017-.0378-.0189-.0412-.0361-.0103-.1186.2097-.5294.9642-.7734,1.9267Zm-2.6057,2.4406c-.2853,1.1378-.3884,2.0883-.2303,2.1296.1581.0378.5208-.8491.8061-1.9852.2424-.9625.2406-1.8236.2355-2.0625-.0035-.0361-.0189-.0412-.0361-.0086-.1186.208-.5294.9625-.7752,1.9267Zm5.8008-4.4653c.1942-.7751.1719-1.4695.1598-1.6603-.0034-.0309-.0171-.0326-.0326-.0086-.1014.1633-.452.7631-.648,1.5366-.2286.9092-.299,1.6758-.1547,1.7119.1444.036.4452-.6721.6755-1.5796Zm4.7833-2.652c.208.0103.3833.1976.3815.4056-.0154,1.3595-.2887,6.0672-3.2673,8.8567-3.5097,3.2828-7.7378,4.4791-9.4428,2.6641-1.705-1.8133-.2441-5.9486,3.2639-9.2331c2.9803-2.7896,7.7017-2.7655,9.0647-2.6933Z"
                      clip-rule="evenodd" fill="var(--recipies-blue)" fill-rule="evenodd"></path>
                  </g>
                </svg>

              </div>
              <div class="w-[138px] text-center text-base font-normal">Pratos deliciosos no nosso plano alimentar</div>
            </div>
          </div>
          <div class="quadro-branco">
            <div class="flex h-full flex-col justify-between p-7.5" style="padding: 10%;">
              <h3 class="mb-1 max-w-[87%] text-2xl font-bold leading-[1.33]">Porquê o nosso plano?</h3>
              <div class="text-base text-zeta">Pode estar confiante que o <span class="font-bold">Plano alimentar
                </span> irá levá-lo onde quer.</div>
              <div class="js-animation relative">
                <svg style="fill:black" class="mt-10" viewBox="0 0 285 238" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke="var(--main-color)" stroke-opacity=".1" stroke-linecap="round" stroke-dasharray="8 12"
                    d="M22.5 237.5h262M22.5 195.5h262M22.5 153.5h179M22.5 111.5h262M22.5 69.5h262M22.5 27.5h262"></path>
                  <path fill="url(#tfhsvngaea)" d="M140 27h62v168h-62z"></path>
                  <path stroke="var(--plan-col-bg)" stroke-width="3" stroke-linecap="round"
                    d="M139.5 195.5h63M139.5 26.5h63">
                  </path>
                  <circle cx="171" cy="196" r="8" fill="var(--plan-dot-right)" stroke="var(--plan-circle)"
                    stroke-width="4">
                  </circle>
                  <path d="M172.5 41a1.5 1.5 0 0 0-3 0h3zM171 182l8.66-15h-17.32l8.66 15zm-1.5-141v127.5h3V41h-3z"
                    fill="var(--plan-pointer-right)"></path>
                  <circle cx="171" cy="27" r="8" fill="var(--plan-dot-right)" stroke="var(--plan-circle)"
                    stroke-width="4">
                  </circle>
                  <path fill="url(#leqh2u4f0b)" d="M54 27h62v84H54z"></path>
                  <path stroke="#F53373" stroke-width="3" stroke-linecap="round" d="M53.5 110.5h63M53.5 26.5h63"></path>
                  <circle cx="85" cy="111" r="8" fill="var(--plan-dot-left)" stroke="var(--plan-circle)" stroke-width="4">
                  </circle>
                  <path d="M86.5 41a1.5 1.5 0 0 0-3 0h3zM85 97l8.66-15H76.34L85 97zm-1.5-56v42.5h3V41h-3z"
                    fill="var(--plan-pointer-left)"></path>
                  <circle cx="85" cy="27" r="8" fill="var(--plan-dot-left)" stroke="var(--plan-circle)" stroke-width="4">
                  </circle>
                  <defs>
                    <linearGradient id="tfhsvngaea" x1="171" y1="27" x2="171" y2="195" gradientUnits="userSpaceOnUse">
                      <stop stop-color="var(--plan-col-bg)" stop-opacity="0"></stop>
                      <stop offset="1" stop-color="var(--plan-col-bg)" stop-opacity=".3"></stop>
                    </linearGradient>
                    <linearGradient id="leqh2u4f0b" x1="85" y1="27" x2="85" y2="111" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#F53373" stop-opacity="0"></stop>
                      <stop offset="1" stop-color="#F53373" stop-opacity=".3"></stop>
                    </linearGradient>
                  </defs>
                </svg>
              </div>
            </div>
          </div>
          <div style="text-align: center;font-size: 6rem;color:rgb(143, 203, 39)">92%</div>
          <div style="font-size: 80%;">
            das pessoas que fazem dieta cetogênica perdem peso muito mais rápido de forma saudável
          </div>
          <div class="quero-agora">
            <a href="https://checkout.minhadietacetogenica.com/OF2E1224A">QUERO MEU PLANO AGORA !</a>
          </div>
        </div>
      </div>

      <div class="bloco-verde-escuro">
        <div class="" style="color:#8fcb27;font-size: 2rem;padding: 1rem;font-weight: 700;">
          O que é dieta citogênica ?
        </div>
        <div class="frutas">
          <img class="verdes" :src="'../storage/img/frutas_verdes.png'">
        </div>
        <div class="texto-bloco-verde-escuro">
          A dieta cetogênica é um tipo de dieta de baixo teor de
          carboidratos e alta em gorduras saudáveis, que tem como
          objetivo principal fazer com que o corpo entre em um
          estado metabólico chamado cetose. Na cetose, o organismo
          utiliza a gordura como principal fonte de energia em vez dos
          carboidratos.
          <br>

          A dieta cetogênica é composta principalmente por
          alimentos ricos em gorduras saudáveis, como abacate,
          nozes, sementes, azeite de oliva e óleo de coco. Alimentos
          ricos em proteínas, como carnes magras, peixes e ovos,
          também são incluídos na dieta. Por outro lado, alimentos
          ricos em carboidratos, como pães, massas, arroz, açúcar e
          frutas doces, são limitados ou evitados.
        </div>
      </div>

      <div class="remuso-pessoal">

        <div style="color:#8fcb27;font-size: 2rem;padding: 1rem;font-weight: 700; ">Resumo pessoal</div>
        <div style="color:darkolivegreen;font-size: 1.5rem;padding: 1rem;font-weight: 700; ">Suas respostas indicam que
          você
          pode estar sofrendo com :</div>
        <div style="    border: 2px darkolivegreen solid; border-radius: 40px; padding: 2%;">
          <div class="" style="float: left;">
            <img style="margin:5% ;width: 13rem;" :src="'../storage/img/coracao.png'">
          </div>
          <div style="color:darkolivegreen;font-size: 1rem;padding: 1rem;font-weight: 700; "><b>Risco de doêncas
              cardiovasculares</b></div>
          <div
            style="text-align: left;margin: 2%; color:darkolivegreen;font-size: 1rem;padding: 1rem;padding-left: 36%; ">A
            obesidade está associdada a um maior risco de
            desenvolvimento de doenças cardíacas como hipertensão
            arterial ,
            doença arterialcoronariana e acidade vascular cerebral.
          </div>
        </div>
      </div>
      <br>
      <div class="ponto-critico">

        <div class="" style="float: left;">
          <img style="margin:0% ;width: 13rem;" :src="'../storage/img/interrogacao.png'">
        </div>
        <div style="color: white;
    font-size: 2.3rem;
    font-weight: 700;">Ponto Critico</div>

        <div style="font-size: 0.85rem;"><b>Uma pessoa o b esa q ue nã o pratica atividade física pode
            enfrentar um ponto crítico em relação
            à sua saúde . A
            o b esidade , por si só, já traz uma série de problemas , como
            o aumento do risco de desenvolvimento de doenças
            cardiovasculares , diabetes tipo 2 e dist úrbios articulares .
            No entanto , quando combinada com afalta de exercícios
            físicos , esses problemas se tornam ainda mais graves .

            <br>
            O sedentarismo contribui para o acúmulo de gordura
            corporal , o
            que aumenta o risco de complicações
            cardiovasculares , como
            hipertensã o arterial , doença
            arterial coronariana e acidente vascular cerebral .
            disso , a
            Além
            falta de atividade física dificulta o controle do peso
            e do açúcar no sangue , tornando a pessoa mais propensa
            a desenvolver diabetes tipo 2
          </b>
        </div>
      </div>

      <div class="especialistas">
        <div>Especialisas da cetogênica recomendam o Método CEETO30</div>

        <div class="metodo">
          <b>Método CETO30</b>
        </div>
        <DIV class="emagreca">Emagreça de forma definitiva e aceleradaem 4 semanas,
          utilizando apenas o que você gosta de comer</DIV>
      </div>

      <div class="como-funciona">
        <div class="itens-como-funciona">
          <div>Pare de perder tempo e dinheiro com dietas que não funcionam</div>
          <div class="descricao-item-como-funciona">Emagreça de forma
            definitivae aumente sua
            autoestimaconquista
            ndo o corpo dosseus
            sonhos</div>
        </div>
        <div class="itens-como-funciona">
          <div>Fortaleça seu corpo com saúde</div>
          <div class="descricao-item-como-funciona">
            Tenha muito mais
            disposição para
            enfrentar a rotina do dia
            a dia
          </div>
        </div>
        <div class="itens-como-funciona">
          <div>Transforme sua saúde mental</div>
          <div class="descricao-item-como-funciona">
            Com sua saúde mental
            ajustada você evita
            problemas emocionais
            como depressão e
            ansiedade
          </div>
        </div>
        <div class="itens-como-funciona">
          <div>Seja melhor versão</div>
          <div class="descricao-item-como-funciona">
            Imagine irá se sentir
            quando chegar no
            corpo que sempre
            desejou
          </div>
        </div>
      </div>

      <div class="quero-meu-plano-agora1">
        <a href="https://checkout.minhadietacetogenica.com/OF2E1224A">QUERO MEU PLANO AGORA !</a>
      </div>
      <div class="como-funciona-2">
        Como funciona:
      </div>
      <div class="balao-como-todo">

        <div class="balao-como">
          <div class="como">
            1 Semana ? Adaptação inicial
          </div>
          <div class="funci">
            O coporco começa a se adaptar a queima de gordura como fonte de energia,
            entrando em cetose gradualmente.Pode ocorrer fadiga, tontura e mau hálito durante essa fase.
          </div>
        </div>

        <div class="" style="float: left;">
          <img class="seta-direita" :src="'../storage/img/seta_direita.png'">
        </div>
        <div class="balao-como" style="float:right">
          <div class="como">
            2 semana:Cetose esabelecida
          </div>
          <div class="funci">
            Nessa fase, o corpo se torna mais eficiente na queima de gordura.
            A maioria dos efeitos colaterais iniciais diminu, e muitas pessoas relatam maior clareza mental e energia.
          </div>
        </div>

        <div class="balao-como" style="position:relative;top:15rem">
          <div class="como">
            3 semana: Adaptação contínua
          </div>
          <div class="funci" style="position: relative;">
            O corpo continua a se adaptar à cetose. A sensação de fome pode diminuir, pois as cetonas suprimem o apetite.
            A perda de peso pode continuar de forma estável.
          </div>
        </div>
        <div>
          <img class="seta-esquerda" :src="'../storage/img/seta_esquerda.png'">
        </div>
        <br><br>
        <div class="" style="float: left;position: relative;top: 15.5rem;">
          <img class="seta-direita" :src="'../storage/img/seta_direita.png'">
        </div>

        <div class="balao-como" style="position:relative;top:16rem;float: right;width: 18rem;">
          <div class="como">
            4 semana:Estabilização
          </div>
          <div class="funci">
            O corpo está totalmente adaptado à cetose e à queima de fordura como fonte de energia.
          </div>
        </div>
        <!-- <div class="quero-meu-plano-agora2" style="position: relative;top:32rem">
          <a href="" style="color: white;"> Quero meu plano agora</a>
        </div> -->
      </div>
      <div class="bloco-verde-escuro-0">
        <div class="plano4">
          Um plano completo de 4
          semanas , para eliminar
          gordura do seu corpo
        </div>
        <div class="" style="float: right;">
          <img class="imagem-fruitas" :src="'../storage/img/fruitas.png'">
        </div>
        <div class="texto-bloco-verde-escuro">
          de uma vez por todas,
          aumentar sua
          autoestima e se tornar
          uma melhor versão de si mesmo .
        </div>
      </div>
      <div class="titulo-o-que-esta-incluso">O que está incluso</div>

      <div class="o-que-esta-incluso">
        <div class="incluso">
          <div class="" style="float: left;position: relative;top: 0rem;">
            <img class="comida" :src="'../storage/img/comida.png'">
          </div>
          <div style="position: relative;width: 40%;">
            Um plano alimentar de 4 semanas personalizado e exclusivo, desenvolvido por especialistas da nutrição
          </div>
          <div class="" style="float: right;position: relative;top: 0rem;">
            <img class="mercado" :src="'../storage/img/mercado.png'">
          </div>
          <div style="    width: 27%;">
            Lista de mercado contendo todos do produtos necessários para sua dieta cetogênica personalisada
          </div>
        </div>
      </div>

      <div class="book0">
        <div class="book">
          <img class="mercado" :src="'../storage/img/book.png'">
        </div>
        <div class="texto-book">
          <div class="livro-divital-titulo"><b>Livro Digital:</b></div>
          <div class="texto-boo-2">
            Dieta Cetogênica:20
            Deliciosas Receitas para
            uma Vida Saudável
          </div>
          <div class="alem">
            Além Disso, Por Tempo Limitado, Tenha
            Acesso A Esse Bônus Incrível De Graça !
          </div>
        </div>
      </div>
      <div class="bloco-depoimentos">
        <div class="titulo-depoimentos">Veja os depoimentos das nossas clientes</div>
        <div class="depoimentos">
          <div class="depoimento">
            <div class="dep">Comecei a fazer essa dieta
              para melhorar minha saúde
              e estou apaixonada com a
              forma que me entregaram o
              meu plano alimentar com
              gamificação, me sinto muito
              mais motivada a seguir em
              frente
            </div>
            <div class="dep_nome">Patrícia Silveira</div>
            <div class="dep_profissao">Advogada</div>
          </div>
          <div class="depoimento">
            <div class="dep">Eu já tinha tentado de tudo,
              mas nenhum outro método
              me fez emagrecer tão
              rápido quanto o ceto30,
              estou amando o meu novo
              corpo, eu recomendo
            </div>
            <div class="dep_nome">Eliane Silva</div>
            <div class="dep_profissao">Professora</div>
          </div>
          <div class="depoimento">
            <div class="dep">
              Estou muito feliz e satisfeita
              com o meu plano ceto30,
              minha disposição agora é
              outra, me sinto com muito
              mais energia para as tarefas
              do dia a dia e isso é
              realmente incrível
            </div>
            <div class="dep_nome">Gisele Freitas</div>
            <div class="dep_profissao">Recepcionista</div>
          </div>
        </div>
      </div>
    </div>

    <div class="beneficios">
      <div class="titulo-beneficios">
        <b>Benefícios comprovados ciêntificamente</b>
      </div>
      <div class="beneficios-quadros">
        <div class="b-quadros">
          <div class="imagem-b">
            <img class="mercado" :src="'../storage/img/cintura1.png'">
          </div>
          <div><b>Perda de Peso</b></div>
          <div>
            Estudos mostram que a dieta cetogênica pode ser
            efica z na redução de peso. A judando a controlar o
            apetite e promove a queima de gordura como
            fonte primária de energia, devido à restrição de
            carboidratos.
          </div>
        </div>
        <div class="b-quadros">
          <div class="imagem-b">
            <img class="mercado" :src="'../storage/img/gota.png'">
          </div>
          <div><b>Contole do açúca no sangue</b></div>
          <div>
            A dieta cetogênica tem benefícios no controle da
            glicemia em pessoas com diabetes tipo 2 . Ao
            limitar a ingestão de carboidratos, a dieta reduza
            Estudos mostram que a dieta cetogênica pode ser
            eficaz na redução de peso. A judando a controlar o
            apetite e promove a queima de gordura como
            fonte primária de energia, devido à restrição de
            carboidratos.
            necessidade de insulina e melhora a sensibilidade
            à insulina, ajudando a estabilizarosníveis de
            açúcar no sangue.
          </div>
        </div>
        <div class="b-quadros">
          <div class="imagem-b">
            <img class="mercado" :src="'../storage/img/coracao1.png'">
          </div>
          <div> <b>Diminui fatores de reisco cardiovasculasr</b><br></div>
          <div>
            Estudos indicam que a dieta cetogênica pode levar
            a melhorias nos fatores de risco cardiovascular,
            como redução dos níveis de triglicerídeos, aumento
            do colesterol HDL ( o " bom " colesterol ) e diminuição
            da pressão arterial
          </div>
        </div>
        <div class="b-quadros">
          <div class="imagem-b">
            <img class="mercado" :src="'../storage/img/cerebro.png'">
          </div>
          <div>
            <b>Aumento da função cerebral</b><br>
          </div>
          <div>
            A dieta cetogênica tem sido associada a benef í cios
            cognitivos, incluindo melhora na clare z a mental e
            na concentração. A lguns estudos sugerem que a dieta pode ser benéfica para condições neurológicas
          </div>
        </div>
      </div>
    </div>

    <div class="ganha-metodo">
      <div class="titulo-ganha-metodo">O que você ganha com o método CETO30?</div>
      <div class="sub-titulo-ganha-metodo">O método ideal para você emagrecer e transformar sua vida</div>
      <div class="quadro-ganha-metodo">
        <div>Economia de tempo e dinheiro emagrecendo de forma acelerada</div>
        <div>Organização de dietas personalizadas divididas por semana</div>
        <div>Emagrecimento saudável e duradouro</div>
        <div>Aumento da energia e disposição </div>
        <div>Diminuiç]ao da fome e controle do apetite</div>
        <div>Redução da inflemaçao do corpo</div>
        <div>Emagrecimento seguro, rápido e saudável</div>
        <div>Eleva sua auto-estima conquistando o corpo dos seus sonhos</div>
        <div>Redução dos níveis de açucas no sangue</div>
        <div>Melhora a concentração e clarez mental</div>
        <div>Melhora a saúde ardiovascular</div>
        <div>Melhora a sensibilidade à insulina</div>
      </div>
    </div>

    <div class="tem-acesso">
      <div class="titulo-tem-acesso">
        Veja o que você terá acesso no MÉTODO CETO30<br>
        garantindo sua vaga abora com <b>63% de desconto !</b>
      </div>

      <div class="quadro-branco-tem-acesso">
        <div class="quadro-branco-2">
          <div>
            apenas 12x de
          </div>
          <div>Vazio</div>
          <div class="valor-plano">R$ 6,73</div>


          <div class="garanta-agora"><b>Garnta agora o seu plano com essa condição especial, enquanto ainda há tempo !</b>
          </div>
          <div class="btn-quero-tem-acesso">
            <a>QUERO MEU PLANO AGORA</a>
          </div>
        </div>
        <div class="quadro-branco-4">
          <div>Plano alimentar personalizado de 4 semanas</div>
          <div>Lista de compras no supermercado</div>
          <div>Livro digital +20 receitas deliciosas</div>
          <div>Suporte para tirar dúvidas</div>
        </div>
      </div>

    </div>

    <div class="garantia">
      <div class="img-garantia">
        <img style="width: 15rem;" :src="'../storage/img/garantia.png'">
      </div>
      <div class="texto-garantia">
        <div class="titulo-garantia">
          Satisfação Garantida Caso esteja pensando
        </div>
        <div class="sub-garantia"> "e se o Método CETO30 não funcionar para mim?" </div>
        <div> Fique tranquila, você poderá tetar o produto por 7 dias, e desfrutar dos benefícios que ele traz para sua
          vida.
          Mas se mesmo assim, achar que o método não é para você, basta entrar em contato conosco e pedir seu dinheiro de
          volta.
          Devolvemos 100% do seu dinheiro.
        </div>
      </div>
    </div>

    <div class="perguntas">
      <div class="titulo-perguntas">
        As pessoas sempre nos perguntam
      </div>
      <div class="pergunta">
        O que é dieta cetogênica ?
      </div>
      <div class="resposta">
        A dieta cetogênica é um plano alimentar que se caracteriza por ser rico em gorduras,
        moderado em proteínas e extremamente baixo em carboidratos, visando induzir o
        estado de cetose, em que o corpo utiliza a gordura como principal fonte de energia.
        <hr>
      </div>

      <div class="pergunta">
        A dieta cetogênica é segura ?
      </div>
      <div class="resposta">
        Sim, a dieta cetogênica é geralmente segura quando feita corretamente, seguindo um
        plano alimentar adequado.
        <hr>
      </div>

      <div class="pergunta">
        Quais alimentos são permitidos na dieta cetogênica ?
      </div>
      <div class="resposta">
        A limentos permitidos incluem carnes, peixes, ovos, gorduras saudáveis, vegetais não
        amiláceos e laticínios com baixo teor de gordura. Dentro do seu plano alimentar
        personalizado, trazemos todos esses alimentos.
        <hr>
      </div>

      <div class="pergunta">
        Quanto tempo leva para entrar em cetose ?
      </div>
      <div class="resposta">
        O tempo necessário para entrar em cetose varia, mas geralmente leva de 2 a 7 dias com
        uma ingestão muito baixa de carboidratos.
        <hr>
      </div>


      <div class="pergunta">
        A dieta cetogênica é adequada para todos ?
      </div>
      <div class="resposta">
        O tempo necessário para entrar em cetose varia, mas geralmente leva de 2 a 7 dias com
        uma ingestão muito baixa de carboidratos.
        <hr>
      </div>

      <div class="pergunta">
        Posso fazer exercícios físicos enquanto estou em dieta
        cetogênica ?
      </div>
      <div class="resposta">
        O tempo necessário para entrar em cetose varia, mas geralmente leva de 2 a 7 dias com
        uma ingestão muito baixa de carboidratos.
        <hr>
      </div>

      <div class="pergunta">
        Porque a dieta cetogênica tem resultados mais rápidos
        que uma dieta convencional ?
      </div>
      <div class="resposta">
        A dieta cetogênica tem resultados mais rápidos do que uma dieta convencional devido
        à restrição de carboidratos, que leva o corpo a entrar em cetose e queimar gordura
        como principal fonte de energia.
        <hr>
      </div>
    </div>

    <div class="foot"></div>
  </container>
</template>

<script >






// }

import { defineComponent } from 'vue'

const form = defineComponent({
  p1: "P1",

})

export default defineComponent({



  props: {
    idade: String,
    altura: String,
    peso: String,
    peso_desejado: String,
    email: String,
    sexo: String
  },

  data(props) {
    return {
      form: this.$inertia.form({
        p1: false,
        p: "P30",
        idade: props.idade,
        peso: props.peso,
        altura: props.altura,
        peso_desejado: props.peso_desejado,
        email: props.email,
        sexo: props.sexo

      }),
    }
  },

  methods: {

    calculos() {

      // alert(this.sexo);
      const gender = this.sexo;
      const age = this.idade;
      const weight = this.peso;
      const height = this.altura;
      const activityLevel = (1);
      let idade_metabolica = null;

      const tmb = Math.round(
        gender === 'homem'
          ? (655 + (13.75 * weight) + (5.003 * height) - (6.755 * age)) //if (cálculo pronto)
          : (66 + (9.563 * weight) + (1.850 * height) - (4.676 * age)) //else
      );

      const maintenance = Math.round(tmb * Number(activityLevel));
      const loseWeight = maintenance - 70 + 2000;
      const gainWeight = maintenance + 70 + 2000;

      // document.getElementById("idade_metabolica1").innerHTML = loseWeight;
      document.getElementById("idade_metabolica2").innerHTML = "<div class='resultIdadeMetabolica'>" + gainWeight + "</div>";
    },
  },

  beforeMount() {

    setTimeout(() => {
      this.calculos()
    }, 1000);

  },

})



</script>


