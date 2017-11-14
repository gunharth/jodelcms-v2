<template>
    <div class="dd nestable">
        <ol class="dd-list" v-html="rawHtml"></ol>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                rawHtml: ``,
            }
        },
        mounted: function() {
            // let vm = this;
            axios.get('/admin/menu/listMenus/1/en')
                .then((response) => {
                    this.rawHtml  = `${response.data}`;
                })
                .catch((error) => {
                    console.log('error');
                    //Vue.set(this.$data, 'errors', error.response.data)
                })




            let ele = $(this.$el);
                ele.nestable({
                // maxDepth: 2
            }).on('change', () => {
                axios({
                    url: '/admin/menu/sortorder',
                    method: 'post',
                    data: ele.nestable('asNestedSet'),
                  })
                  .then(function (response) {
                    console.log('updated');
                  })
                  .catch(function (error) {
                    console.log(error);
                  });
            });
        }
    }
</script>
