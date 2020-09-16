require('./bootstrap');
window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('navigation-bar', require('./components/NavigationbarComponent.vue').default);
Vue.component('loginform', require('./components/LoginFormComponent.vue').default);

Vue.component('studenten-tabel', require('./components/StudentenTabelComponent.vue').default);
Vue.component('opleidingen-tabel', require('./components/OpleidingenTabelComponent.vue').default);  

import vuetify from './vuetify'

const app = new Vue({
  vuetify,
  el: '#app'
});
