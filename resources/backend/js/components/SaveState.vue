<template>
	<div><span>{{message}}</span></div>
</template>
<script>

	export default {
      	data() {
      		return {
	      		message: 'All good',
	      		// activeNav: 'test'
	      	}
      	},
      	created() {
      		let vm = this;
      		bus.$on('setSaveStatusDirty', function() {
				vm.message = 'Unsaved Changes'
			}),

			bus.$on('setSaveStatusClean', function() {
				vm.message = 'All good'
			})

			// bus.$on('activeNav', function(activeNav) {
			// 	console.log('called');
			// 	vm.activeNav = activeNav;
			// })
      	}
    }
</script>
