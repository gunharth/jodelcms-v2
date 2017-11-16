<template>
    <div class="dd">
        <component :is="transformed" :textString="textString" /></component>
    </div>
</template>
<script>
    export default {
        props: {
          textString: {
            type: String,
            default: 'hallo'
          }
      },
        data() {
            return {
                rawHtml: `sss`,
                // this.textString: 'dslfksjlf',
            }
        },
        mounted: function() {
            axios
                .get('/admin/menu/listMenus/1/en')
                .then((response) => {
                    this.rawHtml  = `${response.data}`;
                    // this.rawHtml = response.data;
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
        },
//         computed: {
//   transformed() {
//     //alert(JSON.stringify(this.$options.props.text));
//     let text = `${this.rawHtml}`;
//     return {
//       // props: ['textString'],
//       data() {
//             return {
//                 textString: text
//                 // this.textString: 'dslfksjlf',
//             }
//         },
//       template: `<ol class="dd-list">{{ textString }}</ol>`,
//       //props: this.$options.props
//     }
//   }
// }


    }
</script>
