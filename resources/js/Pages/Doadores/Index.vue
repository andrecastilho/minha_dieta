<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Criar Section</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                      <div class="flex items-center justify-end mb-6">
                        <breeze-link :href="route('section.create')"
                          
                        >Criar Section</breeze-link
                          >
                      </div>
                      <table class="w-full whitespace-nowrap">
                        <thead>
                          <tr class="font-bold text-left">
                            <td class="border px-4 py-2">ID</td>
                            <td class="border px-4 py-2">id_user</td>
                            <td class="border px-4 py-2">template_ids</td>
                            <td class="border px-4 py-2"> </td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="sections in section" :key="sections.id">
                             <td class="border px-4 py-2">1</td>
                            <td class="border px-4 py-2">{{ section.id }}</td>
                            <td class="border px-4 py-2"> {{ section.user_id }} </td>
                             <td class="border px-4 py-2">{{ section.template_ids}}</td>
                            <td>
                              <breeze-link mode="edit" :href="route('section.edit', section.id)"
                              >Editar</breeze-link>
                              <breeze-link mode="delete" @click="destroy(section.id)"
                              >Excluir</breeze-link> 
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import BreezeLink from "@/Components/AnchorLink.vue"

export default{
  components: {
    BreezeLink,
  },
  props: {
    templates: Object,
  },
  methods: {
     destroy(id) {
      if(confirm('Você realmente deseja excluir este template?')) {
        this.$inertia.delete(route('templateQuestion.destroy', id), {preserveScroll: true, preserveState: false})
      }
        
    },
  }
}
</script>
