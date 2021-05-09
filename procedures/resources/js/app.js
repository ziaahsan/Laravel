require('./bootstrap');

// Vue
import Vue from 'vue'

// Adding router to Vue
import VueRouter from 'vue-router'
Vue.use(VueRouter)


// Idenitify app root element
const app = new Vue({ 
    el: '#app-root',
    components: {
        'page-header': require('./components/header.vue').default,
        'lists': require('./components/lists.vue').default,
        'success-message': require('./components/success.vue').default
    }
});

