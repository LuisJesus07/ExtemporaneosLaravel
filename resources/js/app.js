
require('./bootstrap');

window.Vue = require('vue');



Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('registro-alumnos', require('./components/alumnos/RegistroAlumnos.vue').default);
Vue.component('solicitud-examen', require('./components/alumnos/SolicitudExamen.vue').default);
Vue.component('consultar-examen', require('./components/alumnos/ConsultarExamen.vue').default);
Vue.component('filtrar-carrera', require('./components/admin/FiltradoPorCarrera.vue').default);
Vue.component('filtrar-plan', require('./components/admin/FiltradoPorPlan.vue').default);
Vue.component('filtrar-materia', require('./components/admin/FiltradoPorMateria.vue').default);
Vue.component('aceptar-solicitudes', require('./components/admin/AceptarSolicitudes.vue').default);
Vue.component('crear-periodo', require('./components/admin/CrearPeriodo.vue').default);
Vue.component('desactivar-periodo', require('./components/admin/DesactivarPeriodo.vue').default);




const app = new Vue({
    el: '#app',
});
