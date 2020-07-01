import Vue from "vue";
import Route from './router.js';

import Vuetify from "vuetify";
import 'vuetify/dist/vuetify.min.css';
import Layout from './layout/layout';

Vue.use(Vuetify);

const app = new Vue({
    router: Route,
    el: '#chat',
    components: { Layout },
    vuetify: new Vuetify({}),
})

export default new Vuetify(app)
