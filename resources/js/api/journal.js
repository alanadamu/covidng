/*
* Imports the API URL from the config.
*/
import { APP_CONFIG } from '../app_config.js';
import axios from 'axios';
export default {

    /**
     * GET /api/v1/journal_account
     */
    getAccounts: function (url = null) {
        url = url || APP_CONFIG.API_URL + '/journal_account';
        return axios.get(
            url
        );
    },
    /** 
     * POST  /api/v1/user
    */
    addJournalEntries: function (
        payload
    ) {
        return axios.post(APP_CONFIG.API_URL + '/journal_account', {
            payload: payload
        });
    },
};