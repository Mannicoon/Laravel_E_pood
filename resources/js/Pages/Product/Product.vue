<script setup>
import PageHeader from '@/Components/PageHeader.vue';
import ProductCard from '../../Components/ProductCard.vue';

const props = defineProps({
    products: {
        type: Object,
        default: null,
    }
})

console.log(props.products)
console.log(props.products[0].name)
</script>
<template>
    <PageHeader></PageHeader>
    <div class="max-w-screen-lg mx-auto mt-10 mb-10 ">

        <h1 class="text-3xl font-bold pb-4">Produktid</h1>

        <div class="flex flex-wrap gap-4">
            
            <!-- <ProductCard title="XD" description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, placeat?"></ProductCard>
            <ProductCard title="XD" description="Lorem ipsum dolor sit amet consectetur."></ProductCard>
            <ProductCard title="XD" description="Lorem ipsum dolor."></ProductCard>
            <ProductCard title="XD" description="Lorem ipsum dolor sit amet consectetur adipisicing elit."></ProductCard>
            <ProductCard title="XD" description="Lorem ipsum dolor sit amet."></ProductCard> -->

            <ProductCard
                v-for="product in products" :key="product" :product="product"

                :title="product.name" :description="product.description" :image="xd"
            >{{ product }}</ProductCard>
        </div>

    </div>
</template>