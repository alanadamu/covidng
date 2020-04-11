/*
|-------------------------------------------------------------------------------
| routes.js
|-------------------------------------------------------------------------------
| Contains all of the routes for the application
*/

/*
    Imports Vue and VueRouter to extend with the routes.
*/
import Vue from 'vue';
import VueRouter from 'vue-router';

import PaymentVoucher from './components/Payment/PaymentVoucher.vue';
import PaymentVoucherCreate from './components/Payment/PaymentVoucherCreate.vue';

import ProjectShow from './components/Project/ProjectShow.vue';
import ProjectTaskView from './components/Project/ProjectTaskView.vue';
import ProjectColumnView from './components/Project/ProjectColumnView.vue';
import ProjectTimeline from './components/Project/ProjectTimeline.vue';
import Memo from './components/Memo/Memo.vue';
import MemoShow from './components/Memo/MemoShow.vue';
import MemoCreate from './components/Memo/MemoCreate.vue';
import MemoTemplate from './components/Memo/MemoTemplate.vue';
import MemoTemplateCreate from './components/Memo/MemoTemplateCreate.vue';
import MemoTemplateEdit from './components/Memo/MemoTemplateEdit.vue';
/*
    Extends Vue to use Vue Router
*/
Vue.use(VueRouter);
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/payment_voucher/',
            name: 'payment_voucher',
            component: PaymentVoucher,
            children: [
                {
                    path: 'create_pv/:request_id',
                    name: 'payment_voucher_create',
                    component: PaymentVoucherCreate
                },
            ]
        },
        {
            path: '/project/:id',
            name: 'project',
            component: ProjectShow,
            children: [
                {
                    path: 'task/:task_id',
                    name: 'project_task',
                    component: ProjectTaskView
                },
                {
                    path: 'column/:column_id',
                    name: 'project_column',
                    component: ProjectColumnView
                },
            ]
        },
        {
            path: '/project_timeline/:project_id',
            name: 'project_timeline',
            component: ProjectTimeline
        },
        {
            path: '/memo/create',
            name: 'memo_create',
            component: MemoCreate
        },
        {
            path: '/memo/:id',
            name: 'memo_show',
            component: MemoShow,
        },

        {
            path: '/memo_template',
            name: 'memo_template',
            component: MemoTemplate,
            children: [
                {
                    path: 'create',
                    name: 'memo_template_create',
                    component: MemoTemplateCreate
                },
                {
                    path: ':id/edit',
                    name: 'memo_template_edit',
                    component: MemoTemplateEdit
                },
            ]
        },

    ],
});


export default router;