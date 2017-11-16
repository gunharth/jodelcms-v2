<template>
    <div class="dd">
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
            axios
                .get('/admin/menu/listMenus/1/en')
                .then((response) => {
                    this.rawHtml  = `${response.data}`;
                    })
                .catch((error) => {
                    console.log('error');
                })

        },
        updated: function() {
            let ele = $(this.$el);
            ele.nestable({
            // maxDepth: 2
            threshold: 10,
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
