/*
    Defines the API route we are using.
*/

var api_url = '';
var url = '';

switch (process.env.NODE_ENV) {
    case 'development':
        api_url = 'http://covidng.afivenet.com/api/v1';
        url = 'http://covidng.afivenet.com';
        break;
    case 'production':
        api_url = 'http://covidng.afivenet.com/api/v1';
        url = 'http://covidng.afivenet.com';
        break;
}

export const APP_CONFIG = {
    API_URL: api_url,
    URL: url
};