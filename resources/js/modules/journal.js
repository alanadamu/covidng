/*
|-------------------------------------------------------------------------------
| VUEX modules/misc.js
|-------------------------------------------------------------------------------
| The Vuex data store for the misc
*/

import JournalAPI from '../api/journal';

export const journal = {
    state: {
        accounts: [],
        journalLines: {
            credit: [{
                account_id: 0,
                amount: 0
            }],
            debit: [{
                account_id: 0,
                amount: 0
            }],
            date: "",
            reference: ""
        },
        journalLinesLoadStatus: 0,
        accountsLoadStatus: 0,
        saveJournalEntriesLoadStatus: 0,
        saveJournalEntriesResult: {},
    },
    actions: {
        getAccounts({ commit }, data) {
            commit('setAccountsLoadStatus', 1);

            JournalAPI.getAccounts(
                data.url
            ).then(function (response) {
                commit('setAccountsLoadStatus', 2);
                commit('setAccounts', response.data.data);
            }).catch(function () {
                commit('setAccountsLoadStatus', 3);
                commit('setAccounts', {});
            });
        },
        addJournalLine({ commit }, data) {
            commit('journalLinesLoadStatus', 1);
            commit('addJournalLine', data);
            commit('journalLinesLoadStatus', 2);

        },
        updateJournalLines({ commit }, data) {
            commit('journalLinesLoadStatus', 1);
            commit('updateJournalLines', data);
            commit('journalLinesLoadStatus', 2);

        },
        saveJournalEntries({ commit }, data) {
            JournalAPI.addJournalEntries(
                data
            ).then(function (response) {
                commit('setSaveJournalEntriesLoadStatus', 2);
                commit('setSaveJournalEntriesResult', response.data);
            }).catch(function () {
                commit('setSaveJournalEntriesLoadStatus', 3);
                commit('setSaveJournalEntriesResult', {
                    success: 0,
                    message: 'Something went wrong. Try again!'
                });
            });
        }

    },
    mutations: {
        setAccountsLoadStatus(state, status) {
            state.accountsLoadStatus = status;
        },
        setAccounts(state, accounts) {
            state.accounts = accounts;
        },
        journalLinesLoadStatus(state, status) {
            state.journalLinesLoadStatus = status;
        },
        addJournalLine(state, data) {
            state.journalLines[data.type].push(data.data);
        },
        updateJournalLines(state, data) {
            state.journalLines[data.type] = data.data;
        },
        setSaveJournalEntriesResult(state, result) {
            state.saveJournalEntriesResult = result;
        },
        setSaveJournalEntriesLoadStatus(state, status) {
            state.saveJournalEntriesLoadStatus = status;
        },
    },
    getters: {
        getAccounts(state) {
            return state.accounts;
        },
        getJournalLines: (state) => (type) => {
            return state.journalLines[type];
        },
        getJournalLinesAll: (state) => () => {
            return state.journalLines;
        },
        journalLinesLoadStatus: (state) => () => {
            return state.journalLinesLoadStatus;
        },
        getJournalLineTotal: (state) => (type) => {
            return state.journalLines[type].reduce(function (result, item) {
                return result + parseFloat(item.amount);
            }, 0);;
        },
        saveJournalEntriesLoadStatus: (state) => () => {
            return state.saveJournalEntriesLoadStatus;
        },
    }
}