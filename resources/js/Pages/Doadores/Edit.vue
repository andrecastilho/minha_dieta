<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
  <Head title="Dashboard" />

  <AppLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Editar Template {{ form.template }} 
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">
            
            <form @submit.prevent="submit">
              
               <div class="mt-4">
        <breeze-label for="crop_id" value="crop_id"></breeze-label>
        <breeze-select
          type="text"
          id="crop_id"
          class="mt-1 block w-1/2"
          v-model="form.crop_id"
          :error="form.errors.crop_id"
          :options="crops"
        >
        </breeze-select>
        <breeze-input-error :message="form.errors.crop_id"></breeze-input-error>
      </div>
              <div>
                <breeze-label for="title" value="title">Título</breeze-label>
                <breeze-input
                  type="text"
                  id="title"
                  class="mt-1 block w-1/2"
                  v-model="form.title"
                  required
                  autofocus
                  :error="form.errors.title"
                > {{ title }}
                </breeze-input>
                <breeze-input-error
                  :message="form.errors.title"
                ></breeze-input-error>
              </div>
              <div>
                <breeze-label for="description" value="description">Descrição</breeze-label>
                <breeze-input
                  type="text"
                  id="description"
                  class="mt-1 block w-1/2"
                  v-model="form.description"
                  required
                  autofocus
                  :error="form.errors.description"
                > {{ description }}
                </breeze-input>
                <breeze-input-error
                  :message="form.errors.description"
                ></breeze-input-error>
              </div>
             
              <!-- submit -->
              <div class="flex items-center justify-end mt-4">
               
                <breeze-button :loading="form.processing">Atualizar</breeze-button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

<script>
import { useForm } from "@inertiajs/vue3";
import BreezeLink from "@/Components/AnchorLink.vue";
import BreezeInputLabel from "@/Components/InputLabel.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeInputError from "@/Components/InputError.vue";
import BreezeLabel from "@/Components/Label.vue";
import BreezeButton from "@/Components/Button.vue";
import BreezeSelect from '@/Components/Select.vue';

export default {
  components: {
    BreezeLink,
    BreezeInputLabel,
    BreezeInput,
    BreezeInputError,
    BreezeLabel,
    BreezeButton,
    BreezeSelect,
    useForm,
  },
  props: {
    templates: Object,
    crops: Object,
  },
 
  data(props) {
    return {
      form: useForm({
        crop_id: props.templates.crop_id,
        title: props.templates.title,
        description: props.templates.description,

      }),
    };
  },
  methods: {
    submit() {
      this.form.put(route("templateQuestion.update", this.templates.id));
    },
  },
};
</script>
