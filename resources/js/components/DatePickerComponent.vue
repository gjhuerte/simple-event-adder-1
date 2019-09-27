<template>
    <div>
        <datepicker 
            type="date"
            input-class="form-control"
            v-bind:name="this.pickerName"
            v-bind:value="this.pickerDefaultValue"
            v-bind:id="this.pickerId"
        ></datepicker>
    </div>
</template>

<script>
    import Datepicker from 'vuejs-datepicker';

    export default {
        props: [
            'pickerClass',
            'pickerId',
            'pickerName',
            'pickerDefaultValue',
        ],
        components: {
            datepicker: Datepicker,
        },
    }
</script>
