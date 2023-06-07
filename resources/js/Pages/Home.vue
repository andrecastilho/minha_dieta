
<style scoped>
 table {
  white-space: nowrap;
  overflow-x: hidden;
  text-overflow: ellipsis; 
}
.table-responsive {
  height: 100%;
  width: 94%;
}

</style>
        <template>
          <container style="scroll-snap-type: none;">
            <div class="container">
                <h1>Seja bem vindo!<br><br>{{ info }}</h1>
            </div>
              <div style="text-align: right;">
                <a class="btn btn-primary btn-lg active" role="button" aria-pressed="true" :href="route('doadores.create')">Criar</a>
              </div><br>
                <div class="table-responsive" >
                    <table class="table table-hover table-sm col-999" >
                        <thead class="thead-dark">
                          <tr scope="row"   class="font-bold text-left">
                            <td scope="col" class="border px-4 py-2">ID</td>
                            <td scope="col" class="border px-4 py-2">Nome</td>
                            <td scope="col" class="border px-4 py-2">Email</td>
                            <td class="border px-4 py-2">Cpf</td>
                            <td class="border px-4 py-2">Telefone</td>
                            <td class="border px-4 py-2">Data Nascimento</td>
                            <td class="border px-4 py-2">Data Cadastro</td>
                            <td class="border px-4 py-2">Intervalo Doação</td>
                            <td class="border px-4 py-2">Valor Doação</td>
                            <td class="border px-4 py-2">Valor Doação</td>
                            <td class="border px-4 py-2"> </td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="doador in doadores" :key="doadores.id">
                            <td class="border px-4 py-2">{{ doador.id }}</td>
                            <td class="border px-4 py-2"> {{ doador.nome }} </td>
                            <td class="border px-4 py-2"> {{ doador.email }} </td>
                            <td class="border px-4 py-2"> {{ doador.cpf }} </td>
                            <td class="border px-4 py-2"> {{ doador.telefone }} </td>
                            <td class="border px-4 py-2"> {{ doador.dt_nascimento }} </td>
                            <td class="border px-4 py-2"> {{ doador.dt_cadastro }} </td>
                            <td class="border px-4 py-2"> {{ doador.intervalo_doacao }} </td>
                            <td class="border px-4 py-2"> {{ doador.vl_doacao }} </td>
                            <td class="border px-4 py-2"> {{ doador.endereco }} </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </container>
                     
</template>

<script lang="ts">

export default{
 
  props: {
    doadores: Array,
    info:String
  },
}
</script>

<style>
</style>