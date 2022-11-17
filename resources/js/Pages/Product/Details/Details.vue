<script setup>
import PageHeader from '@/Components/PageHeader.vue';
import ProductCard from '../../../Components/ProductCard.vue';
</script>
<template>
    <PageHeader></PageHeader>
    <div class="w-full h-fit">
        <div class="h-fit flex flex-col items-center t-10 mb-1">
            <h1 class="m-5 mt-10 text-xl">Item Title</h1>
            <h3><b>Price:</b> [HIND]</h3>
            <p class="mx-10 py-5 text-center border-b-2 border-gray-300">
                Lorem ipsum dolor sit amet, 
                consectetur adipisicing elit. 
                Sint provident mollitia similique 
                dolores consectetur cupiditate 
                molestiae doloribus. Tempore, 
                omnis consequatur!
            </p>
        </div>
        <div class="w-full h-fit mt-1 p-1">
            <div class="flex flex-wrap justify-center gap-2 ">
                <img class="h-fit max-h-60 rounded-md object-contain lg:w-auto" src="https://tailwindcss.com/_next/static/media/tailwindui-small@75.8bb955b2.jpg" alt="">
                <img class="h-fit max-h-60 rounded-md object-contain lg:w-auto" src="https://tailwindcss.com/_next/static/media/tailwindui-small@75.8bb955b2.jpg" alt="">
                <img class="h-fit max-h-60 rounded-md object-contain lg:w-auto" src="https://tailwindcss.com/_next/static/media/tailwindui-small@75.8bb955b2.jpg" alt="">
                <img class="h-fit max-h-60 rounded-md object-contain lg:w-auto" src="https://tailwindcss.com/_next/static/media/tailwindui-small@75.8bb955b2.jpg" alt="">
            </div>
        </div>
    </div>
</template>