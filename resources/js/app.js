import Turbolinks  from 'turbolinks'
Turbolinks.start()

import Swal from 'sweetalert2'
window.Swal = Swal;
window.addEventListener('swal',function(e){
    window.Swal.fire(e.detail);
});
/*
|----------------------------------------------------------------
| Vue 3
|----------------------------------------------------------------
*/

/*
import { createApp, h } from 'vue'
import { App, plugin } from '@inertiajs/inertia-vue3'

const el = document.getElementById('app')

createApp({
    render: () => h(App, {
        initialPage: JSON.parse(el.dataset.page),
        resolveComponent: name => require(`./Pages/${name}`).default,
    })
}).use(plugin).mount(el)
*/
