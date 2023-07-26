<style scoped>
@media only screen and (max-device-width: 600px) {   .botao{
    position: relative !important;
    height: 5.5rem !important;
    padding: 0.5rem;
  }

 
  .img{
    position: relative !important;
    left: 2rem !important;

  }
  .contain{
    font-size: 1rem !important;
  }
.btn{
     width: 8rem !important;
    position: relative;

    left: 13rem;
}
.botao{
  position: relative !important;
  left: 0.5rem !important;

}
  .avancar{
    width: 120%;
    word-wrap: none;
  }
.grafico{
  position: relative;
  width: 100% !important;
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
    /* padding-left: 5%; */
    /* padding-right: 5%; */
    /* padding-top: 9%; */
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
  text-align: center;
  font-size: large;
  width: 30rem;
  position: relative;
  right: 7rem;
  
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
  width: 100%;
  background-color:#717850;
  position: relative;
}
.avancar{
 
  padding-left: 86%;
}
.grafico1{
  width: 60%;
}

.botao:hover{
  background-color: blue;
}
.botao{
  position: relative;
  left: 0rem;
  top: 0.5rem;
  width: 20rem;
}
.img{
  width: 20rem;
    left: 32rem;
    top: 2rem;
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

               <div class="grafico">
                  <img class="img" :src="'../../storage/img/acucar_no_sangue.png'">
                </div>

                
                <div class="corpo" style="">
                
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
                  <button type="button" @click="store(checkedNames)" class="botao" >AVANÇAR</button><br><br>
              </div>
              <input type="hidden"  id="check" value="{{ checkedNames }}"/>
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