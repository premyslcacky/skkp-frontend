window.Vue = require('vue');
window.axios = require('axios');


Vue.component('main-menu', require('./components/main-menu/MainMenu.vue').default);
Vue.component('menu-list', require('./components/main-menu/MenuList.vue').default);

Vue.component('cultural-heroes', require('./components/cultural-heroes/CulturalHeroes.vue').default);


const mainMenu = new Vue({
    el: '#main-menu',
});

const culturalHeroes = new Vue({
    el: '#cultural-heroes',
});




