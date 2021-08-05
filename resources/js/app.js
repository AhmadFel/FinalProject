require('./bootstrap');

import Vue from 'vue';
import Room from './Components/Room.vue';
new Vue({
    el: '#app',
    router,
    components: {
        'room': Room
    }    
})
