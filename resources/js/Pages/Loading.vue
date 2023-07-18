
<style scoped>
body {
    text-align: center;
    font-family: 'Comfortaa', cursive;
}

svg {
    width: 100px;
    height: 100px;
    margin: 20px;
    display: inline-block;
}

h1 {
    text-align: center;
    margin: 0 0 100px;
    font-size: 34px;
    font-weight: 100;
    text-transform: uppercase;
    padding: 20px 0;

    b {
        font-weight: 700;
    }
}

.made-with-love {
    margin-top: 20px;
    padding: 10px;
    font-size: 10px;
    font-family: arial;
    color: #fff;

    i {
        font-style: normal;
        color: #fff;
        font-size: 14px;
        position: relative;
        top: 2px;
    }

    a {
        color: #fff;
        text-decoration: none;

        &:hover {
            text-decoration: underline;
        }
    }
}

container {
    background-color: red;
    position: absolute;
    width: 70%;
}

</style>
<template >
    <container>
        <div class="head" >
            <div style="text-align: center;">
                <img class="logo" :src="'../../storage/img2/LOGOTIPO.png'">
            </div>
        </div>
        LOading.....dddd
   
        <!-- Loader 7 -->

        <svg version="1.1" id="L7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
            y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
            <path fill="#fff" d="M31.6,3.5C5.9,13.6-6.6,42.7,3.5,68.4c10.1,25.7,39.2,38.3,64.9,28.1l-3.1-7.9c-21.3,8.4-45.4-2-53.8-23.3
  c-8.4-21.3,2-45.4,23.3-53.8L31.6,3.5z">
                <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="2s" from="0 50 50"
                    to="360 50 50" repeatCount="indefinite" />
            </path>
            <path fill="#fff" d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
  c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z">
                <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s" from="0 50 50"
                    to="-360 50 50" repeatCount="indefinite" />
            </path>
            <path fill="#fff" d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
  L82,35.7z">
                <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="2s" from="0 50 50"
                    to="360 50 50" repeatCount="indefinite" />
            </path>
        </svg>

        

        <!-- follow me template -->
        <div class="made-with-love">
            Made with
            <i>♥</i> by
            <a target="_blank" href="https://codepen.io/nikhil8krishnan">Nikhil Krishnan</a>
        </div>
{{ idade }}



    </container>
</template>

<script >



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

  },
  beforeMount() 
  {
        alert("oi");
        setTimeout(function () {
        
            //return route("doadores.redirectVendas"); 
            return this.$router.push({ path: 'vendas' })
           // return route("doadores.redirectVendas");
            //return route("doadores.redirectVendas"); 
        }, 5000);
    },

})

</script>

