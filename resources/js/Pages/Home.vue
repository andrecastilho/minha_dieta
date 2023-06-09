<style scoped>
html{
  background-color: #717850;
  
}
body{
  background-color: #717850;
}
.corpo{
  font-family: 'Montserrat';
  background-color: #717850;
  color: antiquewhite;
  text-align: center;
  font-size: large;
  padding-left: 5%;
  padding-right: 5%;
}
.table-responsive {
  height: 100%;
  width: 94%;
}
.head{
    text-align: right;
    padding: 0.5%;
    background-color: rgb(60, 70, 37);
}
.menu{
  padding-right: 10%;
}
.logo {
  width: 17%;
  float: left;
}
.prato{
  width: 100%;
  position: absolute;
}
container {
  position: relative;
}
#textoImagem1 {
  position: absolute;
  font-size: 32px;
  left: 5%;
  top: 135px;
  color:rgb(60, 60, 03);
}
#textoImagem2 {
  position: absolute;
  font-size: 32px;
  left: 5%;
  top: 180px;
  color:rgb(60, 60, 03);
}
@media only screen and (min-width: 768px) {
  
label { 
    font-size: small;
   }
}
.plano{
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
span{
  font-size: 35px;
  background-image: linear-gradient(to right, rgb(224, 70, 70) , rgb(222, 51, 117));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
d{
  position: relative;
  margin: 0px 57px 0px 100px;
}
.jornais{
  width: 50%;
}
.objetivos-emagrecimento{
  padding: 6%;
  font-size: 28px;
}
.todo-plano{
  text-align: left;
}
.oque-vai-receber{
  color: white;
  background-color: rgb(60, 70, 37);
  text-align: left;
  font-size: large;
  width: 50%;
  border-radius: 3%;
  padding: 5%;
  float: left;
}
.junte-se{
  padding:10%;
  background-color: #717850;
  color: white;
  text-align: center;
  font-family: 'Montserrat';font-size: 22px;
}

.prato2{
  width: 50%;
  border-radius: 2%;
  padding-top: 11%; 
}
.btn-comece-agora{
  border-radius: 10%;
  background-image: linear-gradient(to right, rgb(224, 70, 70) , rgb(222, 51, 117));
  position: inherit;
  width: 14%;
  text-align: center;
}
.botao-comece-agora{
  position: relative;
  width: 136%;
  padding-right: 35%;
  padding-top: 40%;
  padding-bottom: 10%;
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
#btn-comece-agora{
  padding: 10%;
}
#prato2{
  padding-top: 33%;
}
.checked{
  width: 10%;
  filter: url(svg#ee3e03)
}
.painel-duplo{
  background-color: #717850;
}
.mulher-homen{
  
}
.mulher{
  position: relative;
  width: 30%;
  float: left;
  padding-bottom: 8%;
  padding-left: 14%;
  
}
.mulher a {
  background-image: linear-gradient(to right, rgb(224, 70, 70), rgb(225, 111, 144));
}
.homem{
  padding-left: 25%;
  background-image: linear-gradient(to right, rgb(48, 117, 214), rgb(32, 71, 114));
}
</style>
        <template>
          <container>
            <div class="head" >
              <div>
                <img class="logo" :src="'../storage/img2/LOGOTIPO.png'">
              </div>
              <div class="menu">
                <a class="btn btn-primary btn-lg active" role="button" aria-pressed="true" >Menu</a>
              </div>
              </div>
              <div id="" class="carousel slide" data-ride="">
                <div class="carousel-inner">
                      <div class="carousel-item;" style="height: 300px;">
                        <img class="d-block w-100" :src="'../storage/img2/PRATO.jpg'" alt="">
                        <label id="textoImagem1" style="font-family: 'Montserrat';">Faça Um Teste de Um Minuto para Criar</label>
                        <label id="textoImagem2" style="font-family: 'Montserrat';">Sua <b>Dieta Cetogênica Personalizada</b></label>
                      </div>
                     
                <div class="mulher-homen">
                  <div  class="mulher">
                     <a  class="btn btn-primary btn-lg " role="button" aria-pressed="true" ><img style="float: left;" :src="'../storage/img/MULHER.png'" alt=""> Mulher</a>
                  </div>
                  <div class="homem" >
                     <a class="btn btn-primary btn-lg " role="button" aria-pressed="true" ><img style="float:right ;" :src="'../storage/img/HOMEM.png'" alt="">Homem</a>
                  </div>
              </div>
            </div>
          </div>
              <div class="corpo">
                <div class="objetivos-emagrecimento">
                  Atinja seus <b>objetivos de emagrecimento </b><br> com o nosso <b>plano cetogênico</b>  
                </div>
                <div class="todo-plano">
                  <div class="plano">
                    <button type="button" class="btn  btn-lg "><div style="float: left;"><span><b>01</b></span> </div><div style="text-align: right;padding-top: 10px;;"><d>Perﬁl de dieta instantâneo gratuito</d></div></button><br><br>
                    <button type="button" class="btn  btn-lg "><div style="float: left;"><span><b>02</b></span> </div><div style="text-align: right;padding-top: 10px;;"><d>Plano alimentar super rápido</d></div></button><br><br>
                    <button type="button" class="btn  btn-lg "><div style="float: left;"><span><b>03</b></span> </div><div style="text-align: right;padding-top: 10px;;"><d>Desenhado exclusivo pra você</d></div></button><br><br>
                    <button type="button" class="btn  btn-lg "><div style="float: left;"><span><b>04</b></span> </div><div style="text-align: right;padding-top: 10px;;"><d>Uma assinatura para grandes resultados</d></div></button><br><br>
                    <button type="button" class="btn  btn-lg "><div style="float: left;"><span><b>05</b></span> </div><div style="text-align: right;padding-top: 10px;;"><d>Guia deﬁnitivo para dieta cetogênica</d></div></button><br><br>
                  </div>
              </div>

              <div style="overflow: hidden;">
                  <img class="jornais" :src="'../storage/img2/JORNAIS.png'">
                </div>
                <div class="junte-se">
                  Junte-se a mais de <b>50MIL+</b> de pessoas <br>por todo o Brasil
                </div>
                <div class="oque-vai-receber">
                  <h1 style="padding:10%;"> O que você vai receber:</h1>
                  <div style="padding: 5%;">
                    <img class="checked" :src="'../storage/img/checked.png'"> Plano alimentar para um emagrecimento saudável e eﬁcaz<br>
                    <img class="checked" :src="'../storage/img/checked.png'"> Receitas deliciosas de fácil preparo<br>
                    <img class="checked" :src="'../storage/img/checked.png'">Grupo de acompanhamento mensal no telegram<br>
                    <img class="checked" :src="'../storage/img/checked.png'"> Dieta cetogênica personalizada com 4 :srcei'ções diárias<br>
                    <img class="checked" :src="'../storage/img/checked.png'">Suporte para tirar todas  as suas dúvidas<br>
                  </div>
                </div>
                <div>
                  <img class="prato2" :src="'../storage/img2/prato2.jpg'">
                </div>
             
                 <div style="padding-top: 32%;padding-bottom: 10%;font-size: 200%;">
                    O que é cetogênica?
                </div>
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
               
              <div class="botao-comece-agora" style="position: relative; padding-top: 45%;" >
            <button type="button" class="btn-comece-agora">Comece Agora</button>
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

7<script lang="ts">

export default{
 
  props: {
    doadores: Array,
    info:String
  },
}
</script>