import Vue from 'vue';
import VueRouter from 'vue-router';

import ChatMess from './composants/Chat.vue';
import Login from './auth/Login.vue';

import { authenticationService } from '../_services/authentication.service';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'chatmess',
            component: ChatMess,
            meta: { authorize: [] }
        },
        {
            path: '/login',
            name: 'login',
            component: Login,
            meta: { authorize: [] }
        },
    ]
})

router.beforeEach((to, from, next) => {

    // redirect to login page if not logged in and trying to access a restricted page
    const { authorize } = to.meta;

    if (authorize && !_.isEmpty(authorize)) {

        const currentUser = authenticationService.currentUserValue;
        // console.log(authenticationService.currentUserValue);
        if (!currentUser) {
            // not logged in so redirect to login page with the return url
            return next({ path: "/login", query: { returnUrl: to.path } });
        }

        // check if route is restricted by role
        if (authorize.length && !authorize.includes(currentUser.role.intitule)) {
            // role not authorised so redirect to home page
            return next({ path: "/" });
        }
    }

    return next();
});

export default router;