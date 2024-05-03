// resources/js/app.js

// Import Bootstrap (jika belum diimpor)
import './bootstrap';

// Import Swiper JS
import Swiper from 'swiper';

// Import Swiper styles
import 'swiper/swiper-bundle.css';

// Initialize Swiper
const swiper = new Swiper('.swiper-container', {
  // Your Swiper configuration options here
});

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
});

