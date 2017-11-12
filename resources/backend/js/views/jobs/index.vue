<template>
    <data-viewer :source="source" :thead="thead" :filter="filter" :create="create" :title="title">
        <template slot-scope="props">
            <table-row :props="props" :thead="thead"></table-row>
        </template>
    </data-viewer>
</template>
<script>
    import DataViewer from '../../components/DataViewer'
    import TableRow from '../../components/TableRow'

    export default {
        name: 'Jobs',
        data() {
            return {
                active: false,
                title: 'All Jobs',
                source: '/api/jobs',
                create: '/customer/create',
                thead: [
                    {title: 'Job #', key: 'id', sort: true},
                    {title: 'Client', key: 'client', sort: true},
                    // {title: 'Project', key: 'project', sort: true},
                    // {title: 'Job Status', key: 'job_status', sort: true},
                    // {title: 'Order Type', key: 'order_type', sort: true},
                    // {title: 'Shipping Date', key: 'shipping_date', sort: true},
                    // {title: 'Payment', key: 'payment', sort: true},
                    // {title: 'Parts Status', key: 'parts_status', sort: true},
                    // {title: 'Qty Items', key: 'qty_items', sort: true},
                    // {title: 'notes', key: 'notes', sort: true},
                ],
                //direction: 'desc',
                filter: [
                    'id', 'client'
                ],
            }
        },
        components: {
            DataViewer,
            TableRow
        }
    }
</script>
