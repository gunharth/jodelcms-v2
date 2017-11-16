<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            {{title}}
        </div>
        <div class="panel-body">
            <form class="form" @submit.prevent="save">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" v-model="form.name">
                            <small class="text-danger" v-if="errors.name">{{errors.name[0]}}</small>
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Page</label>
                            <select-field></select-field>
                            <small class="text-danger" v-if="errors.name">{{errors.name[0]}}</small>
                        </div>

                    </div>


                </div>
                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
</template>
<script>
    import Vue from 'vue'
    import axios from 'axios'
    import SelectField from '../../components/SelectField'

    export default {
        name: 'EntryForm',
        data() {
            return {
                form: {},
                errors: {},
                option: {},
                title: 'Create',
                initialize: '',
                redirect: '/collections/timeline',
                store: '/api/collections/timeline',
                method: 'post',
                // params: {
                //     column: 'id',
                //     direction: 'desc',
                // },
                // thead: [
                //     {title: 'Job Item #', key: 'id', sort: true},
                //     {title: 'Product', key: 'product_id', sort: true},
                // ]
            }
        },
        beforeMount() {
            if(this.$route.meta.mode === 'edit') {
                this.title = 'Edit'
                this.initialize = '/api/menu/' + this.$route.params.id + '/edit'
                this.redirect = '/collections/timeline',
                this.store = '/api/collections/timeline/' + this.$route.params.id
                this.method = 'put',
                this.fetchData()
            }

        },
        watch: {
            '$route': 'fetchData'
        },
        methods: {
            fetchData() {
                var vm = this
                axios.get(this.initialize)
                    .then(function(response) {
                        Vue.set(vm.$data, 'form', response.data.form)
                        Vue.set(vm.$data, 'option', response.data.option)
                    })
                    .catch(function(error) {
                        console.log(error)
                    })
            },
            save() {
                var vm = this
                axios[this.method](this.store, this.form)
                    .then(function(response) {
                        if(response.data.saved) {
                            // if(response.data.id !== undefined) {
                            //     this.redirect = '/collections/timeline/'+response.data.id+'/edit';
                            // }
                            vm.$router.push(vm.redirect)
                        }
                    })
                    .catch(function(error) {
                        Vue.set(vm.$data, 'errors', error.response.data)
                    })
            }
        },
        components: {
            SelectField
        }
    }
</script>
