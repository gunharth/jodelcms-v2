<template>
    <data-viewer :source="source" :thead="thead" :filter="filter" :create="create" :title="title" :direction="direction" :showFilter="showFilter">
        <template slot-scope="props">
            <table-row :props="props" :thead="thead"></table-row>
        </template>
    </data-viewer>
</template>

<script>
	import DataViewer from '../components/DataViewer.vue'
  import TableRow from './TableRow'

	export default {
		name: 'Menus',
		data() {
			return {

			title: 'Menus',
		  source: '/api/menus',
				create: '',
				create: '/collections/timeline/create',
                thead: [
                    {title: '#', key: 'id', sort: true},
                    {title: 'Title', key: 'title', sort: true},
                ],
                direction: 'desc',
                showFilter: false,
                filter: [
                    'id', 'title'
                ]
			}
		},
        components: {
        	DataViewer,
          TableRow
        },
      //   mounted () {
      //   bus.$emit('activeNav', 'collections')
      // }
	}
</script>
