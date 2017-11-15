<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            <span class="panel-title">{{title}}</span>
            <div>
                <router-link :to="create" class="btn btn-primary btn-sm">Create</router-link>
            </div>
        </div>
        <div class="panel-body">
            <nested-list></nested-list>
        </div>
    </div>
</template>
<script>
    import NestedList from './NestedList'

    export default {
        name: 'Menus',
        data() {
            return {
                title: 'Menus',
                create: 'makeneewmenu'
            }
        },
        components: {
           NestedList
        }
    }
</script>
