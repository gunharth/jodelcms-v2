<template>
	<div class="form-group">
        <input class="form-control" @keyup="sendChangeRequest" v-model="field">
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