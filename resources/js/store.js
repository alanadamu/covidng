/*
|-------------------------------------------------------------------------------
| VUEX store.js
|-------------------------------------------------------------------------------
| Builds the data store from all of the modules for the ARewametoo app.
*/

/*
Adds the promise polyfill for IE 11
*/
require('es6-promise').polyfill();

/*
Imports Vue and Vuex
*/
import Vue from 'vue';
import Vuex from 'vuex';

/**
 * VueX persisted store
 * https://github.com/robinvdvleuten/vuex-persistedstate
 */
import createPersistedState from 'vuex-persistedstate'

/*
Initializes Vuex on Vue.
*/
Vue.use(Vuex);

/*
    Imports all of the modules used in the application to build the data store.
*/
import { journal } from './modules/journal.js';
import { paymentVoucher } from './modules/paymentVoucher.js';
import { project } from './modules/project.js';
import { memo } from './modules/memo.js';
import { user } from './modules/user.js';
/*
Exports our data store.
*/
export default new Vuex.Store({
    modules: {
        journal,
        paymentVoucher,
        project,
        memo,
        user
    }
});