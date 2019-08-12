<template>
    <div class="component">
        <b-form-select v-model="selected" :options="options"></b-form-select>
        <div class="mt-3">Selected: <strong>{{ selected }}</strong></div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                selected: null,
                options: [
                  { value: null, text: 'Please select an option' },
                  { value: 'a', text: 'This is First option' },
                  { value: 'b', text: 'Selected Option' },
                  { value: { C: '3PO' }, text: 'This is an option with object value' },
                  { value: 'd', text: 'This one is disabled', disabled: true }
                ]
            };
        }
    }
</script>
