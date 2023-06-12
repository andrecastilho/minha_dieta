import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
//import { ZiggyVue } from 'ziggy';
import { Ziggy } from './ziggy';

import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';


import VueSidebarMenu from 'vue-sidebar-menu'
import 'vue-sidebar-menu/dist/vue-sidebar-menu.css'
import { SidebarMenu } from 'vue-sidebar-menu'

createInertiaApp({
  resolve: name => import(`./Pages/${name}.vue`),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin, Ziggy,VueSidebarMenu,SidebarMenu)
      .mixin({ methods: { route } })
      .mount(el)
  },
})