<style scoped>
@media only screen and (max-device-width: 600px) {   
  .botao{
    position: relative !important;
    left: 3rem !important;
    height: 5.5rem !important;
    padding: 0.5rem;
    width: 15rem !important;
  }
  .img{
    left: 2rem !important;
  }
  .contain {
    display: none !important;
  }

  .avancar {
    width: 130%;
    word-wrap: none;
    left: -0rem;
  }

  .btn {
    position: relative;
    left: 7rem;
    width: 10rem !important;
  }

  button {
    width: 10rem !important;
  }

  .pergunta {
    width: 20rem !important;
    position: relative;
    left: 1rem !important;
  }
}

.avancar {

  padding-left: 86%;
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
  text-align: center;
  font-size: large;
  width: 25rem;
  position: relative;
  right: 10rem;
}

.porcentagem {
  width: 100%;
  text-align: center;
  background-color: #717850;
  padding-top: 1%;
}

.contain {
  display: flex;
  padding-top: 0%;
}

.contain>div {
  flex: 1;
  /*grow*/
  font-size: 20px;
}

.pergunta {
  position: relative;
  width: 30rem;
  left: 12rem;
}

.grafico {
  width: 100%;
  background-color: #717850;
}

.img {
  position: relative;
  width: 20rem;
  left: 20rem;
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

    <div class="grafico">
      <img class="img" :src="'../../storage/img/GR├БFICO3.png'">
    </div>

    <div class="corpo">
      <br>
      <div class="pergunta">
        A dieta Cetogênica é um método
        comprovado na redução do apetite.
        Depois de entrar em cetose, você irá
        esquecer-se repentinamente dos seus
        desejos de carboidratos, enquanto a
        variedade de alimentos e porções pré-
        calculadas o irão manter satisfeito
        durante o dia.
      </div>
      <br>
      <div class="todo">
        <div class="resposta">
          <div class="avancar" style="left:-15rem;text-align: center;position: relative;padding-left: 80%;">
            <button type="button" name="p1" id="p1" @click="store" class="botao"> Avançar</button><br><br>
          </div>
        </div>
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
        p: "P19",
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