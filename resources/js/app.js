require('./bootstrap');

import Vue from "vue";
import VueRouter from "vue-router";
import App from "./App.vue";
// TIP: change to import router from "./router/starterRouter"; to start with a clean layout
import router from "./router/index";

import { BaseInput, Card, BaseDropdown, BaseButton, BaseCheckbox } from "./components/index";
/**
 * You can register global components here and use them as a plugin in your main Vue instance
 */
Vue.component(BaseInput.name, BaseInput);
Vue.component(Card.name, Card);
Vue.component(BaseDropdown.name, BaseDropdown);
Vue.component(BaseButton.name, BaseButton);
Vue.component(BaseCheckbox.name, BaseCheckbox);
import './registerServiceWorker'
Vue.use(VueRouter);

/* eslint-disable no-new */
const app = new Vue({
  el: '#app',
  router,
});
