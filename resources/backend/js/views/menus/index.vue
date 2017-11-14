<template>
    <div class="dd nestable">
                            <ol class="dd-list" id="menuItems" v-html="rawHtml">

                            </ol>
                        </div>
</template>
<script>
    //import DataViewer from '../../components/DataViewer'
    //import TableRow from './TableRow'

    export default {
        name: 'Menu',
        data() {
            return {
                rawHtml: ``
            }
        },
        mounted: function() {
            // let vm = this;
            axios.get('/admin/menu/listMenus/1/en')
                    .then((response) => {
                        // let html = response.data;
                        // console.log(html);
                        this.rawHtml  = `${response.data}`;
                        // console.log(response.data[0]);
                    })
                    // .catch(function(error) {
                    //     console.log('error');
                    //     //Vue.set(this.$data, 'errors', error.response.data)
                    // })



            // var vm = this;
            // axios.get(vm.buildURL())
            //         .then(({data}) => this.model = data)
            //         .catch((error) => { console.log(error) })

            // this.axios.get('/api/customer/get/' + this.$route.params.id)
            // .then(function(response){
            //     this.customer  = response.data[0];
            //     console.log(response.data[0]);
            // }.bind(this));


            let ele = $(this.$el);
                ele.nestable({
                // maxDepth: 2
            }).on('change', () => {
                //this.showLoadingIndicator();
                //
                //
                axios({
                    url: '/admin/menu/sortorder',
                    method: 'post',
                    data: ele.nestable('asNestedSet'),
                  })
                  .then(function (response) {
                    console.log(response);
                  })
                  .catch(function (error) {
                    console.log(error);
                  });

                // $.ajax({
                //     type: 'POST',
                //     url: '/admin/menu/sortorder',
                //     data: JSON.stringify(ele.nestable('asNestedSet')),
                //     contentType: "json",
                //     error: (xhr, ajaxOptions, thrownError) => {
                //         console.log(xhr.status);
                //         console.log(thrownError);
                //     }
                // }).done(() => {
                //     //this.hideLoadingIndicator();
                // });
            });
        },
        components: {
            //DataViewer,
           // TableRow
        }
    }
</script>
