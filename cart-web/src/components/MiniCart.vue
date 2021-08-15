<template>
    <div>
        <div class="dropdown-menu p-2" style="min-width: 320px; right:0; left:auto;"
             aria-labelledby="dropdownMenuButton">
            <div v-for="item in cart" :key="item.product.id">
                <div class="px-2 d-flex justify-content-between">
                    <div>
                        <strong>{{item.product.title}}</strong>
                        <br/>{{item.quantity}} x {{item.product.price}}
                    </div>
                    <div>
                        <a href="#" @click.prevent="removeProductFromCart(item.product)" class="badge badge-danger p-2">Remove</a>
                    </div>
                </div>
                <hr/>
            </div>
            <div class="d-flex justify-content-between">
                <span class="mt-1">Total: {{cartTotalPrice}}</span>
                <a class="btn btn-primary btn-sm"  @click.prevent="clearCartItems()">Clear Cart</a>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from 'vuex';
export default {
    computed:{
        ...mapState('cart', ['cart']),
        // ...mapState({
        //     cart: state =>  state.cart.cart,
        // }),
        ...mapGetters('cart', ['cartTotalPrice'])
        // cart(){
        //    return this.$store.state.cart
        // },
        // cartTotalPrice(){
        //     return this.$store.getters.cartTotalPrice
        // }
    },
    mounted() {
        this.getCartItems()
        // this.$store.dispatch('getCartItems')
    },
    methods: {
        ...mapActions('cart', ['removeProductFromCart', 'clearCartItems', 'getCartItems']),
        // removeProductFromCart(product){
        //     this.$store.dispatch('removeProductFromCart', product)
        // },
        // clearCartItems(){
        //     return this.$store.dispatch('clearCartItems')
        // }
    }
}
</script>

<style scoped>

</style>