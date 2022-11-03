window.axios = require('axios');
window.Vue = require('vue');

// import VueRouter from 'vue-router';
// import Home from './paafes/Home.vue';


// stiamo importando

import router from './router';

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
import App from './views/App';

// const routes = [
//     {
//         path:'/',
//         name: 'home',
//         component: Home,
//     },
// ];

// // creato istanza
// const router = new VueRouter({
//     mode: 'history',
//     routes: routes,
// });

// va a montare il nostro componente con ID app dottvue

const app = new Vue({
    el: '#app',
    render: (h) => h(App),
    router: router,
});

