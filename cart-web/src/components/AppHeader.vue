<template>
    <div>
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <div class="container">
                <div class="nav navbar-nav">
                    <router-link :to="{name: 'home'}" class="nav-item nav-link active" >Home</router-link>
                    <a class="nav-item nav-link" href="">Product</a>
                </div>

                <div>
                    <div class="dropdown open">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{cartItemCount}} Cart
                        </button>
                        <div @click="$event.stopPropagation()">
                            <mini-cart />
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
import MiniCart from "./MiniCart";
import { mapGetters } from 'vuex'
export default {
    components: {
        MiniCart
    },
    computed:{
        // cartItemCount(){
        //     return this.$store.getters.cartItemCount
        // }
        ...mapGetters('cart',['cartItemCount'])
    }
}
</script>

<style scoped>

</style>