<script setup>
    import Dropdown from '@/Components/Dropdown.vue';
    import DropdownLink from '@/Components/DropdownLink.vue';
</script>
<template>
    <nav class="w-full px-5 h-20 bg-gray-800">
        <div class="max-w-screen-lg mx-auto h-full flex flex-row items-center justify-between">
            <a href="/"><h1 class="uppercase font-bold text-2xl text-white">Iteenused</h1></a>

        
            <div class="justify-around"></div>

            <div class="flex items-center">
                <a href="/products/" class="text-gray-500 hover:text-gray-300 transition ease-in-out duration-150">Products</a>
                <div class="px-5"></div>
                <a href="#" class="text-gray-500 hover:text-gray-300 transition ease-in-out duration-150">🛒</a>
                <!-- <div class="flex items-center border-solid border-gray-500 border-2 p-2 rounded-md">
                    <a href="/login" class="text-gray-500 hover:text-gray-300 transition ease-in-out duration-150">Login</a>
                    <div class="w-0.5 h-4 bg-gray-600 mx-1"></div>
                    <a href="/register" class="text-gray-500 hover:text-gray-300 transition ease-in-out duration-150">Register</a>
                </div> -->
                
            </div>
        </div>
    </nav>
</template>