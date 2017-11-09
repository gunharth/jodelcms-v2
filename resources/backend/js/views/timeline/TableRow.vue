<template>
    <tr>
        <td><a @click.prevent="$router.push('/collections/timeline/' + props.item.id + '/edit')">{{props.item.id}}</a></td>
        <td>{{props.item.title}}</td>
        <td>{{props.item.started_at}}</td>
    </tr>
</template>

<script>
    export default {
        props: ['props','thead'],
        data: function() {
            return {
                id: this.props.item.id,
                title: this.props.item.title,
                started_at: this.props.item.started_at,
            }
        },
        methods: {

        },
        components: {

        }
    }
</script>
