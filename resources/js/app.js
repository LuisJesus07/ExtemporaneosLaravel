
require('./bootstrap');

window.Vue = require('vue');



Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('registro-alumnos', require('./components/alumnos/RegistroAlumnos.vue').default);




const app = new Vue({
    el: '#app',
});
