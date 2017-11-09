<template>
    <data-viewer :source="source" :thead="thead" :filter="filter" :create="create" :title="title">
        <template slot-scope="props">
            <table-row :props="props" :thead="thead"></table-row>
        </template>
    </data-viewer>
</template>
<script>
    import DataViewer from '../../components/DataViewer'
    import TableRow from './TableRow'

    export default {
        name: 'Timeline',
        data() {
            return {
                title: 'All Entries',
                source: '/api/timeline',
                create: '/customer/create',
                thead: [
                    {title: '#', key: 'id', sort: true},
                    {title: 'Project', key: 'title', sort: true},
                    {title: 'Started at', key: 'started_at', sort: true},
                ],
                filter: [
                    'id', 'title', 'started_at'
                ]
            }
        },
        components: {
            DataViewer,
            TableRow
        }
    }
</script>
