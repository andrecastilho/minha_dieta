
<style scoped>
@media screen and (max-width: 880px) {
    .group_scrollingBanner {
        height: 70rem !important;

    }

    .head {
        width: 100% !important;
    }

    .load {
        position: relative !important;
        width: 10rem !important;
        left: -30rem !important;
        text-align: center !important;
    }

    .logo {
        position: relative !important;
        width: 40rem !important;
        left: 23rem !important;
        top: 3rem;
    }

    .group_scrollingBanner {
        position: relative;
        width: 50rem !important;
        height: 100vh;
        display: flex;
        overflow: hidden;
        left: 0rem !important;
    }

}

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
    background-color: rgb(60, 70, 37);
    position: absolute;
    width: 100%;
    height: 70rem;
}

@keyframes go-back {
    from {
        transform: translateX(100px);
    }

    to {
        transform: translateX(0);
    }
}

h2{
    margin-top: -307px;
}
.group_scrollingBanner {
    position: relative;
    height: 20rem;
    display: flex;
    overflow: hidden;
    left: 18rem;
    padding-bottom: 2%;
    bottom: 1rem;
}

.group_scrollingBanner div {
    position: relative;
    width: 50%;
    overflow: hidden;
    left: 0rem;
    border-radius: 20px;
    height: 3rem;
}



.first_column h2 {
    -webkit-text-stroke: 2.5px;
    -webkit-text-stroke-color: yellowgreen;
    -webkit-text-fill-color: transparent blue;
    left: 100%;
}

.phrase {
    position: absolute;
    white-space: nowrap;
    font-size: 2em;
    line-height: 100vh;
    color:yellowgreen;
    animation: scroll 3s 1s linear infinite;
}

@keyframes scroll {
    0% {
        background-color: yellowgreen;
        transform: translateX(0);
    }

    100% {
        transform: translateX(-200%);
    }
}

.logo {
    position: relative;
    width: 40rem;
    left: 43.5rem;
    top: 3rem;
}

.titulo {
    position: relative;
    text-align: center;
    top: 5rem;
    color: yellowgreen;
    font-size: 20px;
    font-weight: bold;

}

.load {
    position: relative;
    width: 10rem;
    left: -20rem;
    text-align: center;
}
</style>
<template >
    <container>
        <div class="head">
            <div class="lo">
                <div class="titulo">Processando Plano Alimentar</div>
                <div class="load">
                    <img class="logo" :src="'../../storage/img/Load.gif'">
                </div>
            </div>
            <section class="group_scrollingBanner">
                <div class="first_column">
                    <h2 class="phrase">Processando informações... </h2>
                </div>
            </section>
        </div>
    </container>
</template>

<script >



import { defineComponent } from 'vue';


const form = defineComponent({
    p1: "P1",

})

let vm = this;

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

        chama(e) {

            setTimeout(() => {
                  this.form.post(route("doadores.redirectVendas"));
            }, 6000);

        },

    },
    beforeMount() {

        this.chama();
    },
})

</script>

