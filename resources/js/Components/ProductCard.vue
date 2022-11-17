<script setup></script>

<script>
    export default {
      props: ['title', 'description', 'image']
    }
</script>

<template>
    <article class="w-fit h-fit border-solid border-gray-500 border-2  rounded-md">
        <div class="w-96 h-52 bg-gray-300 rounded-t-md">
            <img class="w-full h-full rounded-t-md" src="https://cdn.discordapp.com/attachments/1027118520628166739/1039273650102210631/image.png" alt="">
        </div>
        <div class="bg-gray-300 w-80 h-0.5 rounded-md my-2 justify-self-center mx-auto"></div>
        <div class="w-96 mt-5 px-5 pb-5">
            <form action="" method="" class="flex flex-col">
                <h1 class="font-bold text-xl pb-4">{{ title }}</h1>
                <p class="font-light mb-5">{{ description }}</p>
                <!-- <a class="text-violet-800" href="details">More details...</a> -->
                <input type="number" name="amount" id="amount" value="1" class="rounded-md w-20">
                <input type="submit" value="Add to Cart" class="w-40 h-10 bg-gray-300 rounded-md mt-5">
            </form>
        </div>
    </article>
</template>