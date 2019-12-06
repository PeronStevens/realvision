<template>
    <div class="flex mb-4">
        <div class="md:w-1/2 flex flex-col mx-auto">
            <img class="bg-black p-3 mx-auto"  src="https://www.realvision.com/wp/app/themes/prospect/images/logos/generic/white/logo-generic2x.png" alt="">
            <ShowComponent v-for="show in shows" 
                           :key="show.id" 
                           :name="show.name"
                           :description="show.description"
                           :image="show.image"
                            />
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
    data: function() {
        return {
            shows: []
        }
    },
    mounted: function() {
        axios.get('api/data')
        .then((response) => {
            console.log(response.data);
            this.shows = response.data
        });
    },
}
</script>