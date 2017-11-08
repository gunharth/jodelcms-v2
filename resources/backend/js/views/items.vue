<template>
    <data-viewer :source="source" :thead="thead" :filter="filter" :create="create" :title="title">
        <template scope-slot="props">
            <tr @click="$router.push('/items/' + props.item.id)">
                <td>{{props.item.id}}</td>
                <td>{{props.item.job_id}}</td>
                <td>{{props.item.product_id}}</td>
                <td>{{props.item.description}}</td>
            </tr>
        </template>
    </data-viewer>
</template>

<script>
	import DataViewer from '../components/DataViewer.vue'

	export default {
		name: 'Items',
		data() {
			return {
				title: 'Job Items',
				source: '/api/items',
				create: '',
				thead: [
                    {title: 'ID', key: 'id', sort: true},
                    {title: 'Job', key: 'job_id', sort: true},
                    {title: 'product_id', key: 'product_id', sort: true},
                    {title: 'description', key: 'description', sort: true},
                ],
                filter: [
                	'id', 'job_id', 'product_id', 'description'
                ]
			}
		},
        components: {
        	DataViewer
        }
	}
</script>
