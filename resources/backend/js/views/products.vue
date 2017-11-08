<template>
    <data-viewer :source="source" :thead="thead" :filter="filter" :create="create" :title="title">
        <template scope-slots="props">
            <tr @click="$router.push('/products/' + props.item.id)">
                <td>{{props.item.id}}</td>
                <td>{{props.item.type}}</td>
                <td>{{props.item.name}}</td>
            </tr>
        </template>
    </data-viewer>
</template>

<script>
	import DataViewer from '../components/DataViewer'

	export default {
		name: 'Products',
		data() {
            return {
    			title: 'Products',
                source: '/api/products',
                create: '/customer/create',
                thead: [
                    {title: 'ID', key: 'id', sort: true},
                    {title: 'Type', key: 'type', sort: true},
                    {title: 'Name', key: 'name', sort: true},
                ],
                filter: [
                    'id', 'type', 'name'
                ]
            }
		},
		components: {
			DataViewer
		}
	}
</script>
