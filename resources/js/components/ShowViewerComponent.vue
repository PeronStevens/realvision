<template>
    <div class="flex mb-4">
        <div class="w-full bg-gray-500 h-12">

        </div>
    </div>
</template>

<script>

import ShowComponent from './ShowComponent';
import axios from 'axios';

export default {
    components: {
        ShowComponent
    },
    data: () => {
        return {
            shows: []
        }
    },
    mounted: () => {
        axios.get('api/data')
        .then(response => console.log(response));
    }
}
</script>