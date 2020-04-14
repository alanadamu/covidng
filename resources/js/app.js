const axios = require('axios').default;

import Vue from "vue";
import store from './store.js';
import "vue-trix";
import VueRouter from "vue-router";
import App from "./App.vue";
// TIP: change to import router from "./router/starterRouter"; to start with a clean layout
import router from "./router/index";

import { BaseInput, Card, BaseDropdown, BaseButton, BaseCheckbox } from "./components/index";
/**
 * You can register global components here and use them as a plugin in your main Vue instance
 */


window.Vue = require('vue');
Vue.config.ignoredElements = [
  'trix-editor',
];

Vue.component(BaseInput.name, BaseInput);
Vue.component(Card.name, Card);
Vue.component(BaseDropdown.name, BaseDropdown);
Vue.component(BaseButton.name, BaseButton);
Vue.component(BaseCheckbox.name, BaseCheckbox);
Vue.component('journal-lines', require('./components/Global/JournalLine.vue').default);
Vue.component('journal-create', require('./components/Global/JournalCreate.vue').default);
Vue.component('stat-card', require('./components/Global/StatCard.vue').default);

import './registerServiceWorker'
Vue.use(VueRouter);

/* eslint-disable no-new */
const app = new Vue({
  el: '#app',
  store,
  router,
});
