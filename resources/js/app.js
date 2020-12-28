require('./bootstrap');

// require('moment');

import Swal from 'sweetalert2'

window.addEventListener('swal',function(e){
    Swal.fire(e.detail);
});

let Turbolinks = require("turbolinks")
Turbolinks.start()

// document.addEventListener("livewire:load", function(event) {
//     turbolinks.start();
// });

// import Vue from 'vue';
//
// import { InertiaApp } from '@inertiajs/inertia-vue';
// import { InertiaForm } from 'laravel-jetstream';
// import PortalVue from 'portal-vue';
//
// Vue.mixin({ methods: { route } });
// Vue.use(InertiaApp);
// Vue.use(InertiaForm);
// Vue.use(PortalVue);
//
// const app = document.getElementById('app');
//
// new Vue({
//     render: (h) =>
//         h(InertiaApp, {
//             props: {
//                 initialPage: JSON.parse(app.dataset.page),
//                 resolveComponent: (name) => require(`./Pages/${name}`).default,
//             },
//         }),
// }).$mount(app);
