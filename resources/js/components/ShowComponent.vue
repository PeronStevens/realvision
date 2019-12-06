<template>
    <div class="flex p-3 bg-gray-100" >
        <div class="w-3/4">
            <h2 class="text-lg" >
                {{ name }}
            </h2>
            <p class="p-3" >
                {{ description }}
            </p>
        </div>
        <div class="flex w-1/4 justify-center" >
            <img :src="image" class="h-40" width="100" height="150" alt="">
        </div>
    </div>
</template>

<script>
export default {
    props: ['name', 'description', 'image']
}
</script>