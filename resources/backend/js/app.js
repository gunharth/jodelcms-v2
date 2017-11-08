import './bootstrap';
import router from './routes';

import SaveState from './components/SaveState'

window.bus = new Vue();

new Vue({
    el: '#app',
    router,
    components: {
    	SaveState
    }
});