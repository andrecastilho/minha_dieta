<style scoped>
@media only screen and (max-device-width: 750px) {

  .botao{
    position: relative !important;
    left: 0rem !important;
    height: 5.5rem !important;
    padding: 0.5rem;
    text-align: center;
    width: 15rem !important;

  }
  .img{
    left: 0rem !important;
  }
  .meiaporcento {
    position: relative;
    right: 13rem !important;
  }

  .porcento {
    position: relative;
    top: 15rem !important;
    left: 13rem;
  }

  .btn {
    position: relative;
    width: 10rem;
    left: 4rem !important;
    width: 14rem !important;
    text-align: center;
  }

 .corpo { 
    width: 100% !important;
  }

  .pergunta {
    width: 20rem !important;
    font-size: 1rem !important;
    left: 0rem !important;
  }

}

.head {
  text-align: right;
  padding: 0.5%;
  background-color: rgb(60, 70, 37);
}

.logo {
  width: 17%;
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
.botao:hover{
  background-color: blue;
}
.botao{
  position: relative;
  border-radius: 20px;
  height: 4rem;
  border: 0;
  width: 20rem;
  left: 0rem;
  text-align: center;

} .corpo { 
  font-family: 'Montserrat';
  background-color: #717850;
  color: antiquewhite;
  text-align: center;
  font-size: large;
  padding-left: 5%;
  padding-right: 5%;
  padding-top: 1%;
  height: 72rem;
}

.pergunt {
  font-size: 28px;
}

.todo {
  width: 100%;
}

.resposta {
  padding-left: 20%;
  padding-right: 17%;
}

button {
  color: white;
  background-color: rgb(60, 70, 37);
  text-align: left;
  font-size: large;
  left: 10rem;
}

.porcentagem {
  width: 100%;
  text-align: center;
  background-color: #717850;
  padding-top: 1%;
}

.porcento {
  display: flex;
  position: absolute;
  top: 46%;
  right: 44%;
}

.meiaporcento {
  display: flex;
  position: absolute;
  top: 25%;
  right: 35%;
  width: 30%;
}

.pergunta {
  width: 27rem;
  position: relative;
  left: 25rem;
}

.grafico {
  width: 100%;
  background-color: #717850;
}

.img {
  position: relative;
  width: 20rem;
  left: 0rem;
  top: 1rem;
}
</style>
<template>
  <container>
    <div class="head">
      <div style="text-align: center;">
        <img class="logo" :src="'../../storage/img2/LOGOTIPO.png'">
      </div>
    </div>
    <div style="width: 100%; height: 2px;background-color: blue; "> </div>
    <div class="corpo">

      <div class="grafico">
        <img class="img" :src="'../../storage/img/GRAFICO4.png'">
      </div>

      <br>
      <div class="pergunta">
        <b>A dieta Cetogênica não requer que
          você prepare todas as suas refeições
          sozinho. </b>São inúmeras as opções que
        encontra num restaurante local, ou
        até mesmo no supermercado.
      </div>
      <br>
        <div class="">
            <button type="button" name="p1" id="p1" @click="store" class="botao">
              Avançar</button><br><br>
        </div>
    </div>
  </container>
</template>

<script lang="ts">

import { defineComponent } from 'vue'

const form = defineComponent({
  p1: null,
  p: null

})

export default defineComponent({


  data() {
    return {
      form: this.$inertia.form({
        p1: false,
        p: "P22",
      }),
    }
  },

  el: '#app',

  methods: {

    store(e) {
      e = e || window.event;
      e = e.target || e.srcElement;

      let selecionado = document.getElementById(e.id);

      this.form.post(route("doadores.saveP", [[selecionado?.textContent], selecionado?.textContent]));
    },
  },
})
</script>