require('./bootstrap');
window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('navigation-bar', require('./components/NavigationbarComponent.vue').default);
Vue.component('loginform', require('./components/LoginFormComponent.vue').default);

const app = new Vue({
  el: '#app'
});
