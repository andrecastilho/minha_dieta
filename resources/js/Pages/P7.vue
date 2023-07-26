<style scoped>

@media only screen and (max-device-width: 600px) {

  .logo{
    position: relative;
    right: 8rem !important;
    width: 8rem !important;
  }
  .botao {
    position: relative !important;
    height: 5.5rem !important;
    padding: 0.5rem;
    bottom: 3rem !important;
  }

  .avancar {
    padding-left: 0rem;
    top: 6rem;
    position: relative;
  }

  .pergunta {
    font-size: 20px;
  }

  button {
    width: 16rem !important;
  }

  .pergunta {
    position: relative;
    width: 20rem !important;
    left: 5rem !important;
    font-size: 1rem !important;
    height: 10rem !important;
    left: 2rem !important;
  }

}

.head {
  text-align: right;
  padding: 0.5%;
  background-color: rgb(60, 70, 37);
}

.logo {
  width: 17%;
  text-align: center;
  right: 35rem;
  position: relative;
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

.botao:hover{
  background-color: blue;
}
.botao {
  position: relative;
  border-radius: 20px;
  height: 4rem;
  border: 0;
}

.corpo {
  font-family: 'Montserrat';
  background-color: #717850;
  color: antiquewhite;
  text-align: center;
  font-size: large;
  /* padding-left: 5%; */
  /* padding-right: 5%; */
  /* padding-top: 9%; */
  height: 70rem;
}

.pergunta {
  padding: 3%;
  font-size: 20px;
  width: 40rem;
  left: 22rem;
  position: relative;
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
  width: 30rem;
}

.avancar {
  padding-left: 0rem;
}

.img {
  position: relative;
  width: 20rem;
}
</style>
<template>
  <container>
    <div class="head">
      <div>
        <img class="logo" :src="'../../storage/img2/LOGOTIPO.png'">
      </div>
    </div>
    <div class="corpo">
      <div style="top: -2rem;width: 100%;padding-left: 0% ;padding-top: 2%;background-color:#717850;">
        <img class="img" :src="'../storage/img/CALORIAS.png'" alt="">
      </div>

      <div class="pergunta">

        Com a dieta Cetogênica, você pode
        esquecer a contagem de calorias.
        Cada uma das suas refeições é pré-
        calculada e contém apenas os
        produtos que você pode comer sem
        culpa.
      </div>
      <div class="avancar">
        <button type="button" style="text-align: center;" name="p1" id="p1" @click="store"
          class="botao">AVANÇAR</button><br><br>
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
        p1: form.p1,
        p: "P8",
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