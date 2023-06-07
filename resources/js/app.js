import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
//import { ZiggyVue } from 'ziggy';
import { Ziggy } from './ziggy';

import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

createInertiaApp({
  resolve: name => import(`./Pages/${name}.vue`),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin, Ziggy)
      .mixin({ methods: { route } })
      .mount(el)
  },
})