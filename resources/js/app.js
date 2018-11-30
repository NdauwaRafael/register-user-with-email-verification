require('./bootstrap');
require('./components/components');
require('./imports');
require('./routes');


import router from './routes';
import store from './store';

const app = new Vue({
    el: '#app',
    router,
    store
});
