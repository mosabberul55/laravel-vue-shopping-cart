<template>
    <div class="d-flex align-items-stretch flex-wrap">
        <ProductCard v-for="product in products" :key="product.id" :product="product"/>

    </div>
</template>

<script>
import ProductCard from "./ProductCard";
import { mapState, mapActions } from 'vuex'
export default {
    components: {
        ProductCard
    },
    computed:{
        ...mapState('product', ['products'])
        // products(){
        //     return this.$store.state.products
        // }
    },
    mounted() {
        this.getProducts();
        // this.$store.dispatch('getProducts')
    },
    methods:{
        ...mapActions('product' ,['getProducts'])
    }
}
</script>

<style scoped>

</style>