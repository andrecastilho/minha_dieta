<style scoped>
@media only screen and (max-device-width: 600px) {
  .contain{
    font-size: 1rem !important;
  }
.btn{
     width: 8rem !important;
    position: relative;

    left: 11rem;
}
.botao{
  position: relative !important;
  left: -5rem !important;

}
  .avancar{
    width: 120%;
    word-wrap: none;
  }
.grafico{
  width: 85% !important;
  left: 2rem !important;
}

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
.contain {
  display: flex;
  padding-top: 2%;
}
.contain > div {
  flex: 1; /*grow*/
  font-size: 20px;
}
.grafico{
  width: 50%;
  background-color: black;
  left: 15rem;
  position: relative;
}
.avancar{
 
  padding-left: 86%;
}
.grafico1{
  width: 60%;
}
.botao{
  position: relative;
  width: 8rem;
  left: 25rem;
  top: 2rem;
  text-align: center;
  position: relative;
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
                <div class="corpo" style="">
                  <div class="grafico">
                    <svg style="width: 60%;" class="grafico1" viewBox="0 0 404 366" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="blood-sugar">
                    <path id="card-bgr" d="M392 -6.10352e-05H12C5.37258 -6.10352e-05 0 5.37253 0 11.9999V354C0 360.627 5.37258 366 12 366H392C398.627 366 404 360.627 404 354V11.9999C404 5.37252 398.627 -6.10352e-05 392 -6.10352e-05Z" fill="var(--delta)"></path>
                    <g id="chart">
                    <g id="grid">
                    <line id="Line" x1="27.5" y1="301.5" x2="27.5001" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
                    <line id="Line_2" x1="56.5" y1="301.5" x2="56.5001" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
                    <line id="Line_3" x1="85.5001" y1="301.5" x2="85.5001" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
                    <line id="Line_4" x1="114.5" y1="301.5" x2="114.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
                    <line id="Line_5" x1="143.5" y1="301.5" x2="143.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
                    <line id="Line_6" x1="172.5" y1="301.5" x2="172.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
                    <line id="Line_7" x1="201.5" y1="301.5" x2="201.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
                    <line id="Line_8" x1="230.5" y1="301.5" x2="230.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
                    <line id="Line_9" x1="259.5" y1="301.5" x2="259.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
                    <line id="Line_10" x1="288.5" y1="301.5" x2="288.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
                    <line id="Line_11" x1="317.5" y1="301.5" x2="317.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
                    <line id="Line_12" x1="346.5" y1="301.5" x2="346.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
                    <line id="Line_13" x1="375.5" y1="301.5" x2="375.5" y2="88.5" stroke="var(--tau)" stroke-opacity="0.1" stroke-linecap="round" stroke-dasharray="4 8"></line>
                    </g>
                    <path id="curve" d="M110.5 183.5L109.346 185.133L110.5 183.5ZM202 258L201.714 259.979L202 258ZM289 214L288.647 212.031L289 214ZM374.554 222.95C375.63 223.196 376.703 222.523 376.95 221.446C377.196 220.37 376.523 219.297 375.446 219.05L374.554 222.95ZM28 149.5C27.6712 151.473 27.671 151.473 27.6709 151.473C27.6711 151.473 27.6712 151.473 27.6716 151.473C27.6724 151.473 27.6739 151.473 27.676 151.474C27.6804 151.474 27.6874 151.476 27.6972 151.477C27.7166 151.48 27.7469 151.486 27.7877 151.493C27.8694 151.507 27.9933 151.529 28.1578 151.559C28.487 151.618 28.9787 151.71 29.6203 151.836C30.9035 152.089 32.7855 152.481 35.1642 153.034C39.9224 154.14 46.6629 155.891 54.5685 158.464C70.3945 163.616 90.8162 172.039 109.346 185.133L111.654 181.867C92.6838 168.461 71.8555 159.884 55.8065 154.661C47.7746 152.046 40.9213 150.266 36.0701 149.138C33.6441 148.574 31.7176 148.173 30.3934 147.912C29.7313 147.781 29.2196 147.686 28.8712 147.623C28.6971 147.591 28.5637 147.568 28.4728 147.552C28.4273 147.544 28.3924 147.538 28.3684 147.534C28.3563 147.532 28.347 147.53 28.3404 147.529C28.3371 147.529 28.3345 147.528 28.3325 147.528C28.3316 147.528 28.3306 147.528 28.3302 147.527C28.3294 147.527 28.3288 147.527 28 149.5ZM109.346 185.133C131.831 201.023 141.724 217.466 152.657 231.305C158.114 238.213 163.844 244.47 171.517 249.457C179.204 254.452 188.731 258.102 201.714 259.979L202.286 256.021C189.78 254.212 180.822 250.734 173.696 246.103C166.556 241.462 161.143 235.595 155.795 228.825C145.117 215.309 134.749 198.187 111.654 181.867L109.346 185.133ZM201.714 259.979C213.791 261.725 223.053 260.234 230.752 256.803C238.408 253.39 244.369 248.12 249.913 242.589C261.103 231.424 270.613 219.332 289.353 215.969L288.647 212.031C268.387 215.668 257.897 228.973 247.087 239.757C241.631 245.201 236.092 250.043 229.123 253.149C222.197 256.237 213.709 257.672 202.286 256.021L201.714 259.979ZM289.353 215.969C304.548 213.241 325.772 214.945 343.375 217.39C352.14 218.607 359.941 219.999 365.551 221.086C368.355 221.629 370.61 222.096 372.162 222.427C372.938 222.592 373.538 222.723 373.943 222.813C374.146 222.858 374.299 222.892 374.402 222.915C374.453 222.927 374.492 222.935 374.517 222.941C374.53 222.944 374.539 222.946 374.545 222.948C374.548 222.948 374.551 222.949 374.552 222.949C374.553 222.949 374.553 222.949 374.553 222.95C374.554 222.95 374.554 222.95 375 221C375.446 219.05 375.446 219.05 375.445 219.05C375.445 219.05 375.444 219.05 375.443 219.05C375.441 219.049 375.438 219.049 375.435 219.048C375.427 219.046 375.417 219.044 375.403 219.041C375.375 219.034 375.335 219.025 375.281 219.013C375.174 218.989 375.015 218.953 374.808 218.907C374.393 218.816 373.783 218.682 372.996 218.514C371.422 218.179 369.143 217.707 366.312 217.159C360.651 216.062 352.777 214.658 343.925 213.428C326.295 210.979 304.519 209.183 288.647 212.031L289.353 215.969Z" fill="#F53373"></path>
                    <g id="pointers">
                    <g id="5">
                    <circle id="Ellipse" opacity="0.2" cx="376" cy="221" r="16" fill="#F39800"></circle>
                    <circle id="Ellipse_2" cx="376" cy="221" r="9" fill="#F39800"></circle>
                    </g>
                    <g id="4">
                    <circle id="Ellipse_3" opacity="0.2" cx="289" cy="214" r="16" fill="#F39800"></circle>
                    <circle id="Ellipse_4" cx="289" cy="214" r="9" fill="#F39800"></circle>
                    </g>
                    <g id="3">
                    <circle id="Ellipse_5" opacity="0.2" cx="202" cy="257" r="16" fill="#F39800"></circle>
                    <circle id="Ellipse_6" cx="202" cy="257" r="9" fill="#F39800"></circle>
                    </g>
                    <g id="2">
                    <circle id="Ellipse_7" opacity="0.2" cx="115" cy="186" r="16" fill="#F39800"></circle>
                    <circle id="Ellipse_8" cx="115" cy="186" r="9" fill="#F39800"></circle>
                    </g>
                    <g id="1">
                    <circle id="Ellipse_9" opacity="0.2" cx="28" cy="150" r="16" fill="#F39800"></circle>
                    <circle id="Ellipse_10" cx="28" cy="150" r="9" fill="#F39800"></circle>
                    </g>
                    </g>
                    </g>
                    </g>
                    </svg>
                    <div class="contain">
                      <div>Iniciar a dieta</div>
                      <div>Entrando em cetose</div>
                      <div>Mantendo o estilo</div>
                    </div>
                </div>
                <br>
                <br>

              <div class="resposta">
                Reduzir a ingestão diária de
                carboidratos para 5% ou menos pode
                reduzir drasticamente os níveis de
                açúcar no sangue. Especialistas
                médicos costumam recomendar a
                dieta Cetogênica para pessoas com
                diabetes 2 porque os hidratos de
                carbono transformam-se em açúcar e
                podem causar picos de açúcar no
                sangue.

              
         
      </div>
                   
            <div class="todo">
              <div class="botao"> 
                  <button type="button" @click="store(checkedNames)" class="btn  btn-lg " >AVANÇAR</button><br><br>
              </div>
              <input type="hidden"  id="check" value="{{ checkedNames }}"/>
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
        p:"P16",
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