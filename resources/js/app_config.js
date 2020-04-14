/*
    Defines the API route we are using.
*/

var api_url = '';
var url = '';

switch (process.env.NODE_ENV) {
    case 'development':
        api_url = 'http://localhost/odoo_frontend/public/api/v1';
        url = 'http://localhost/odoo_frontend/public';
        break;
    case 'production':
        api_url = '';
        url = '';
        break;
}

export const CONFIG = {
    API_URL: api_url,
    URL: url
};