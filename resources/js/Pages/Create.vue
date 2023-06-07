<style scoped>
  fieldset {
    padding: 42px;
    
  }
  input {
    padding: 0.3%;
    position:relative;
  }
  .form-group{
    padding: 1%;
  }
  label{
    padding: 1%;
  }
  table {
  page-break-inside: auto;
  width: 100%;
  }

  tr {
    page-break-inside: avoid;
    page-break-after: auto
  }

  thead {
    display: table-header-group
  }
  fieldset{
    width: 70%;
  }


</style>


<template>

  <form @submit.prevent="form.post('/doadores/save')">
   
    <fieldset>
        <legend>Formulário</legend>

        <div class="form-group">
            <input class="form-control form-control-lg" @input="checkForm" type="text" name="nome" placeholder="Nome" v-model="form.nome">
          <div v-if="form.errors.nome">{{ form.errors.nome }}</div>
        </div>

        <div class="form-group">
          <input class="form-control form-control-lg" @input="checkForm"  type="text" name="email" placeholder="Email" v-model="form.email">
          <div v-if="form.errors.email">{{ form.errors.email }}</div><br>
        </div>

        <div class="form-group">
          <input class="form-control form-control-lg" @input="checkForm"  type="text" name="cpf" placeholder="Cpf" v-model="form.cpf">
          <div v-if="form.errors.cpf">{{ form.errors.cpf }}</div>
        </div>

          <div class="form-group">
            <input class="form-control form-control-lg" @blur="checkForm" @input="acceptNumber"  type="tel" name="telefone" placeholder="Telefone" v-model="form.telefone">
            <div v-if="form.errors.telefone">{{ form.errors.telefone }}</div>
          </div>

          <div class="form-group">
            <input class="form-control form-control-lg" @input="checkForm" type="date" name="dt_nascimento" placeholder="Sua Data de Nascimento" v-model="form.dt_nascimento">
            <div v-if="form.errors.dt_nascimento">{{ form.errors.dt_nascimento }}</div>
          </div>

          <div class="form-group">
            <input class="form-control form-control-lg" @input="checkForm" type="date" name="dt_cadastro" placeholder="Sua Data de Cadastro" v-model="form.dt_cadastro">
            <div v-if="form.errors.dt_cadastro">{{ form.errors.dt_cadastro }}</div>
          </div>

          <div class="form-group">
            <label>Intervalo de Doação</label>
            <select @change="checkForm" v-model="form.intervalo_doacao" name="intervalo_doacao">
              <option value="Único">Único</option>
              <option value="Bimestral">Bimestral</option>
              <option value="Semestral">Semestral</option>
              <option value="Anual">Anual</option>
            </select>
          </div>

          <div class="form-group">
            <label>Forma de Pagamento</label>
            <select @change="checkForm"  v-model="form.forma_pagamento" name="forma_pagamento">
                <option value="Débito">Débito</option>
                <option value="Crédito">Crédito</option>
              </select>
          </div>

          <div class="form-group">
          <input @input="checkForm" class="form-control form-control-lg" type="fone" name="endereco" placeholder="Endereço completo" v-model="form.endereco">
          <div v-if="form.errors.endereco">{{ form.errors.endereco }}</div>
          </div>

          <div class="form-group">
          <input @input="checkForm"  class="form-control form-control-lg"  type="number"  name="vl_doacao" placeholder="Valor da doação"  v-model="form.vl_doacao">
          <div v-if="form.errors.vl_doacao">{{ form.errors.vl_doacao }}</div>
          </div>

          <p v-if="errors.length">
            <b>Por favor, corrija o(s) seguinte(s) erro(s):</b>
              <ul>
                <li v-for="error in errors">{{ error }}</li>
              </ul>
          </p>
        
          <!-- submit -->
          <button @input="checkForm" name="enviar" type="submit" >Enviar</button>  
          <button type="button" onclick="window. history. back() ">Voltar</button>  
        </fieldset>
    </form>
</template>

<script lang="ts">
import { defineComponent } from 'vue'

const form = defineComponent({
        nome:null,
        email:null,
        cpf:null ,
        telefone:null,
        dt_nascimento:null,
        dt_cadastro:null,
        intervalo_doacao:null,
        vl_doacao:null,
        forma_pagamento:null,
        endereco:null
})

export default defineComponent({
  data() {
    return {
    errors: [],
      form: this.$inertia.form({
        nome:form.nome,
        email:form.email,
        cpf:form.cpf ,
        telefone:form.telefone,
        dt_nascimento:form.dt_nascimento,
        dt_cadastro:form.dt_cadastro,
        intervalo_doacao:form.intervalo_doacao,
        vl_doacao:form.vl_doacao,
        forma_pagamento:form.forma_pagamento,
        endereco:form.endereco
      }),
    }
  },
  methods: {
    checkForm: function (e) {
     
      console.log(this.form.nome ? this.errors.push("Nome obrigatório"): 0);

      this.errors = [];

    
      if (!this.form.nome) {
        this.errors.push('O nome é obrigatório.');
        document.getElementsByName("enviar").disabled = true;
      }

      if (!this.form.email) {
        document.getElementsByName("enviar").disabled = true;
        this.errors.push('O e-mail é obrigatório.');
      } else if (!this.validEmail(this.form.email)) {
        this.errors.push('Utilize um e-mail válido.');
        document.getElementsByName("enviar").disabled = true;
      }

      if (!this.form.cpf) {
        document.getElementsByName("enviar").disabled = true;
        this.errors.push('O CPF é obrigatório.');
      }
      if (!this.form.telefone) {
        document.getElementsByName("enviar").disabled = true;
        this.errors.push('O celular é obrigatório.');
      }
       if (!this.form.dt_nascimento) {
        document.getElementsByName("enviar").disabled = true;
        this.errors.push('A data de nascimento é obrigatório.');
      }

       if (!this.form.dt_cadastro) {
        document.getElementsByName("enviar").disabled = true;
        this.errors.push('A data do cadastro é obrigatório.');
      }
       if (!this.form.intervalo_doacao) {
        document.getElementsByName("enviar").disabled = true;
        this.errors.push('Intervalo de doação obrigatório.');
      }
       if (!this.form.forma_pagamento) {
        document.getElementsByName("enviar").disabled = true;
        this.errors.push('Forma de pagamento obrigatório.');
      }
     
       if (!this.form.endereco) {
        document.getElementsByName("enviar").disabled = true;
        this.errors.push('Endereço completo obrigatório.');
      }
       if (!this.form.vl_doacao) {
        document.getElementsByName("enviar").disabled = true;
        this.errors.push('Valor doação obrigatório.');
      }

      e.preventDefault();
    },
    acceptNumber() {
        var x = this.form.telefone.replace(/\D/g, '').match(/(\d{0,2})(\d{0,4})(\d{0,5})/);
        console.log(x);
        this.form.telefone = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    },

    validEmail: function (email) {
      var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }

  }

})
</script>