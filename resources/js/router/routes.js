import Dashboard from "../pages/Dashboard2.vue";
// GeneralViews
import NotFound from "../pages/NotFoundPage.vue";

const routes = [
  {
    path: "/odoo_frontend/public/dashboard",
    component: Dashboard,
  },
  { path: "*", component: NotFound },
];

/**
 * Asynchronously load view (Webpack Lazy loading compatible)
 * The specified component must be inside the Views folder
 * @param  {string} name  the filename (basename) of the view to load.
function view(name) {
   var res= require('../components/Dashboard/Views/' + name + '.vue');
   return res;
};**/

export default routes;
