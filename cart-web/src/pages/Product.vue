<template>
    <div>
        <div class="row mt-5" v-if="product">
            <div class="col-4">
                <img class="w-100" :src="product.image" alt="">
            </div>
            <div class="col-8">
                <h1>{{ product.title }}</h1>
                <h3>${{ product.price }}</h3>

                <input v-model.number="quantity" type="text" class="text-center col-1 mr-2 p-1"/>
                <button class="btn btn-primary" @click="addToCart()">Add To Cart</button>

                <p class="mt-4">{{ product.description }}</p>
            </div>
        </div>
    </div>
</template>

<script>
import {mapState, mapActions} from 'vuex'

export default {
    props: ['id'],
    data(){
        return{
            quantity: 1
        }
    },
    computed: {
        ...mapState('product', ['product'])
        // product(){
        //     return this.$store.state.product;
        // }
    },
    mounted() {
        // this.$store.dispatch('getProduct', this.id)
        this.getProduct(this.id)
    },
    methods: {
        ...mapActions('product',['getProduct']),
        ...mapActions('cart',['addProductToCart']),
        addToCart() {
            this.addProductToCart({
                product: this.product,
                quantity: this.quantity
            })
        }
        // addToCart(){
        //     this.$store.dispatch('addProductToCart',{
        //         product: this.product,
        //         quantity: 1
        //     })
        // }
    }
}
</script>

<style scoped>

</style>