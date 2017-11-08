<template>
	<tr>
	    <td><a @click.prevent="$router.push('/jobs/' + props.item.id + '/edit')">RB{{props.item.id}}</a></td>
	    <td><input-field @saveChanges="delaySave" v-model="client" field-name="client"></input-field></td>
	    <td><input-field @saveChanges="delaySave" v-model="project" field-name="project"></input-field></td>
	    <td><select-field @saveChanges="instantSave" v-model="job_status" field-name="job_status"></select-field></td>
	    <td>{{props.item.order_type}}</td>
	    <td>{{props.item.shipping_date}}</td>
	    <td>{{props.item.payment}}</td>
	    <td>{{props.item.parts_status}}</td>
	    <td>{{props.item.qty_items}}</td>
	    <td><text-field @saveChanges="delaySave" v-model="notes" field-name="notes"></text-field></td>
	</tr>
</template>

<script>
    import TextField from './TextField'
    import InputField from './InputField'
    import SelectField from './SelectField'

    export default {
        props: ['props','thead'],
        data: function() {
        	return {
        		id: this.props.item.id,
        		client: this.props.item.client,
        		project: this.props.item.project,
        		job_status: this.props.item.job_status,
        		notes: this.props.item.notes,
        	}
        },
        methods: {

			delaySave: _.debounce(function(name,value) {
				this.$data[name] = value;
				this.save();
			}, 700),

			instantSave: function(name,value) {
				this.$data[name] = value;
		      	this.save();
		    },

		    save: function() {
				axios.post('/api/jobs/'+this.id,this.$data)
                    .then(function(response) {
                        if(response.data.saved) {
                        	setTimeout(function() {
						        bus.$emit('setSaveStatusClean');
						      }, 400);
                        }
                    })
                    .catch(function(error) {
                        Vue.set(vm.$data, 'errors', error.response.data)
                    })
		    }

		},
        components: {
            TextField,
            InputField,
            SelectField
        }
    }
</script>