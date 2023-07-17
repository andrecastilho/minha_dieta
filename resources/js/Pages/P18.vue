<style scoped>
@media only screen and (max-device-width: 600px) {

.avancar{
  width: 130%;
  word-wrap: none;
  left: -0rem;
}
.btn{
  position: relative;
  left: 7rem;
}
}
.avancar{
 
 padding-left: 86%;
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
  padding-top: 9%;
  height: 72rem;
}

.pergunta{
  padding: 6%;
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
.contain {
  display: flex;
  padding-top: 2%;
}
.contain > div {
  flex: 1; /*grow*/
  font-size: 20px;
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


                  <svg  style="width: 33%; background-color: black;" class="h-full w-full rounded-lg shadow-card rtl:-scale-x-100" viewBox="0 0 404 366" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="appetite">
<path id="card-bgr" d="M392 -6.10352e-05H12C5.37258 -6.10352e-05 0 5.37253 0 11.9999V354C0 360.627 5.37258 366 12 366H392C398.627 366 404 360.627 404 354V11.9999C404 5.37252 398.627 -6.10352e-05 392 -6.10352e-05Z" fill="var(--delta)"></path>
<g id="chart">
<g id="grid">
<line id="Line" x1="27.5" y1="318.5" x2="27.5001" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
<line id="Line_2" x1="56.5" y1="318.5" x2="56.5001" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
<line id="Line_3" x1="85.5001" y1="318.5" x2="85.5001" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
<line id="Line_4" x1="114.5" y1="318.5" x2="114.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
<line id="Line_5" x1="143.5" y1="318.5" x2="143.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
<line id="Line_6" x1="172.5" y1="318.5" x2="172.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
<line id="Line_7" x1="201.5" y1="318.5" x2="201.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
<line id="Line_8" x1="230.5" y1="318.5" x2="230.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
<line id="Line_9" x1="259.5" y1="318.5" x2="259.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
<line id="Line_10" x1="288.5" y1="318.5" x2="288.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
<line id="Line_11" x1="317.5" y1="318.5" x2="317.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
<line id="Line_12" x1="346.5" y1="318.5" x2="346.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
<line id="Line_13" x1="375.5" y1="318.5" x2="375.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
</g>
<path id="curve" d="M31.6375 128.852C31.0033 127.947 29.7561 127.728 28.8517 128.362C27.9473 128.997 27.7283 130.244 28.3625 131.148L31.6375 128.852ZM374.214 289.988C375.313 289.87 376.107 288.884 375.988 287.786C375.87 286.687 374.884 285.893 373.786 286.012L374.214 289.988ZM174.303 179.355L172.772 178.068L174.303 179.355ZM147.988 210.66L146.457 209.374L147.988 210.66ZM28.3625 131.148L82.9812 209.037L86.2562 206.74L31.6375 128.852L28.3625 131.148ZM149.519 211.947L175.834 180.642L172.772 178.068L146.457 209.374L149.519 211.947ZM221.348 184.371L262.538 253.792L265.978 251.751L224.788 182.33L221.348 184.371ZM341.846 293.477L374.214 289.988L373.786 286.012L341.417 289.5L341.846 293.477ZM262.538 253.792C278.923 281.408 309.92 296.918 341.846 293.477L341.417 289.5C311.049 292.774 281.564 278.02 265.978 251.751L262.538 253.792ZM175.834 180.642C188.242 165.881 211.508 167.787 221.348 184.371L224.788 182.33C213.543 163.377 186.952 161.198 172.772 178.068L175.834 180.642ZM82.9812 209.037C98.8213 231.625 131.767 233.066 149.519 211.947L146.457 209.374C130.396 228.481 100.588 227.177 86.2562 206.74L82.9812 209.037Z" fill="#A8E532"></path>
<g id="pointers">
<g id="5">
<circle id="Ellipse" opacity="0.2" cx="376" cy="288" r="16" fill="#33C6F5"></circle>
<circle id="Ellipse_2" cx="376" cy="288" r="9" fill="#33C6F5"></circle>
</g>
<g id="4">
<circle id="Ellipse_3" opacity="0.2" cx="289" cy="279" r="16" fill="#33C6F5"></circle>
<circle id="Ellipse_4" cx="289" cy="279" r="9" fill="#33C6F5"></circle>
</g>
<g id="3">
<circle id="Ellipse_5" opacity="0.2" cx="202" cy="169" r="16" fill="#33C6F5"></circle>
<circle id="Ellipse_6" cx="202" cy="169" r="9" fill="#33C6F5"></circle>
</g>
<g id="2">
<circle id="Ellipse_7" opacity="0.2" cx="115" cy="224" r="16" fill="#33C6F5"></circle>
<circle id="Ellipse_8" cx="115" cy="224" r="9" fill="#33C6F5"></circle>
</g>
<g id="1">
<circle id="Ellipse_9" opacity="0.2" cx="28" cy="130" r="16" fill="#33C6F5"></circle>
<circle id="Ellipse_10" cx="28" cy="130" r="9" fill="#33C6F5"></circle>
</g>
</g>
</g>
</g>
</svg>
<div class="contain">
                  <div style="padding-left: 28%;">Iniciar a dieta</div>
                  <div style="padding-right: 28%;">Mantendo o estilo</div>
                </div>


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
                  <div class="todo">
                      <div class="resposta">
                        <div class="avancar" style="left:-15rem;text-align: center;position: relative;padding-left: 80%;"> 
                        <button type="button" name="p1" id="p1" @click="store" class="btn  btn-lg " > Avançar</button><br><br>
                        </div>
                      </div>
                  </div>
              </div>
                   
           
         </container>
</template>

<script lang="ts">

import { defineComponent } from 'vue'

const form = defineComponent({
        p1:null,
        p:null
        
})

export default defineComponent({


  data() {
    return {
      form: this.$inertia.form({
        p1:false,
        p:"P19",
      }),
    }
  },

  el:'#app',

  methods: {
    
    store(e) {
      e = e || window.event;
      e = e.target || e.srcElement;
    
      let selecionado = document.getElementById(e.id) ;
      
      this.form.post(route("doadores.saveP",[[selecionado?.textContent],selecionado?.textContent]));
    },
  },
})
</script>