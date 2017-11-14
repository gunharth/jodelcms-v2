<template>
    <tr>
        <td><a @click.prevent="$router.push('/menus/' + props.item.id + '/en')">{{props.item.id}}</a></td>
        <td>{{props.item.title}}</td>
    </tr>
</template>

<script>
    export default {
        props: ['props','thead'],
        data: function() {
            return {
                id: this.props.item.id,
                title: this.props.item.title,
            }
        },
        methods: {

        },
        components: {

        }
    }
</script>
