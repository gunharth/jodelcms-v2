<template>
	<div class="form-group">
        <select class="form-control" @change="sendChangeRequest" v-model="field">
        <option value="1">Option 1</option>
        <option value="2">2</option>
        </select>
    </div>
</template>

<script>
    export default {
        props: ['fieldName','value'],
        data: function() {
        	return {
        		field: this.value,
        		name: this.fieldName
        	}
        },
        methods: {
        	sendChangeRequest() {
                bus.$emit('setSaveStatusDirty');
        		this.$emit('saveChanges', this.name, this.field);
        	}
        }
    }
</script>