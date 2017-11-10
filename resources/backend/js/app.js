import './bootstrap';
import router from './routes';

// import SaveState from './components/SaveState'
// import collections from './views/collections'
// import Navigation from './components/Navigation'

// let store = {
// 	activeNav: ''
// };
//
// let sourceOfTruth = { activeNav: '' };



window.bus = new Vue();

new Vue({
    el: '#app',
    data: {
    	// sourceOfTruth: { activeNav: '' }
    },
    router,
    components: {
    	// SaveState,
    },
    // created() {
    //   		bus.$emit('activeNav', '');
    //   	}
   //  mounted () {
	  //   bus.$emit('activeNav', 'dfsdfsdf')
	  // }
});
