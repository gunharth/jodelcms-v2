window.$ = window.jQuery = require('jquery');

window.nestable = require('nestable-fork');

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


function initNestable(ele) {
        ele.nestable({
            maxDepth: 2
        }).on('change', () => {
            //this.showLoadingIndicator();
            $.ajax({
                type: 'POST',
                url: '/admin/menu/sortorder',
                data: JSON.stringify(ele.nestable('asNestedSet')),
                contentType: "json",
                error: (xhr, ajaxOptions, thrownError) => {
                    console.log(xhr.status);
                    console.log(thrownError);
                }
            }).done(() => {
                //this.hideLoadingIndicator();
            });
        });
    }
