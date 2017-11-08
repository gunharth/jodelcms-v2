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
                            <label>Client</label>
                            <input type="text" class="form-control" v-model="form.client">
                            <small class="text-danger" v-if="errors.client">{{errors.client[0]}}</small>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" v-model="form.name">
                            <small class="text-danger" v-if="errors.name">{{errors.name[0]}}</small>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" class="form-control" v-model="form.email">
                            <small class="text-danger" v-if="errors.email">{{errors.email[0]}}</small>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" v-model="form.phone">
                            <small class="text-danger" v-if="errors.phone">{{errors.phone[0]}}</small>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" v-model="form.address"></textarea>
                            <small class="text-danger" v-if="errors.address">{{errors.address[0]}}</small>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success">Save</button>
            </form>
        </div>
        <table class="table table-striped">
        <thead>
                    <tr>
                        <th v-for="item in thead">
                            <div class="dataviewer-th" @click="sort(item.key)" v-if="item.sort">
                                <span>{{item.title}}</span>
                                <span v-if="params.column === item.key">
                                    <span v-if="params.direction === 'asc'">&#x25B2;</span>
                                    <span v-else>&#x25BC;</span>
                                </span>
                            </div>
                            <div v-else>
                                <span>{{item.title}}</span>
                            </div>
                        </th>
                    </tr>
                </thead>
        <tbody>
            <tr v-for="item in form.items" :item="item">
                <td>{{item.id}}</td>
                <td>{{item.product_id}}</td>
            </tr>
        </tbody>
    </table>
    </div>

    

</template>
<script>
    import Vue from 'vue'
    import axios from 'axios'

    export default {
        name: 'JobForm',
        data() {
            return {
                form: {},
                errors: {},
                option: {},
                title: 'Create',
                initialize: '/api/jobs/create',
                redirect: '/',
                store: '/api/jobs',
                method: 'post',
                params: {
                    column: 'id',
                    direction: 'desc',
                },
                thead: [
                    {title: 'Job Item #', key: 'id', sort: true},
                    {title: 'Product', key: 'product_id', sort: true},
                ]
            }
        },
        beforeMount() {
            if(this.$route.meta.mode === 'edit') {
                this.title = 'Edit'
                this.initialize = '/api/jobs/' + this.$route.params.id + '/edit'
                this.store = '/api/jobs/' + this.$route.params.id
                this.method = 'put'
            }
            this.fetchData()
        },
        watch: {
            '$route': 'fetchData'
        },
        methods: {
            sort(column) {
                if(column === this.params.column) {
                    if(this.params.direction === 'desc') {
                        this.params.direction = 'asc'
                    } else {
                        this.params.direction = 'desc'
                    }
                } else {
                    this.params.column = column
                    this.params.direction = 'asc'
                }

                this.fetchData()
            },
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
                            vm.$router.push(vm.redirect)
                        }
                    })
                    .catch(function(error) {
                        Vue.set(vm.$data, 'errors', error.response.data)
                    })
            }
        }
    }
</script>