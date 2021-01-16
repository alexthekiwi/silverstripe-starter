require('./bootstrap');

import { createApp } from 'vue';
import Example from './components/Example.vue';

createApp({
    components: {
        Example
    }
}).mount('#app');
