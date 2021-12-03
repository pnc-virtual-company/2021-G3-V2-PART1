<template> 
    <section>
        <!-- <nav-bar> </nav-bar> -->
        <div class="container">
                <div class="name mt-3">
                    <h4> Name:Welcome</h4>

                </div>
                <div class="icon mt-3">
                    <button @click="showDialog = true" class="mr-1 btn btn-outline-dark">Delete</button>
                    <button class="btn btn-outline-info">Update</button>

                </div>
                  <Dialog :cancel="cancel"
                        :confirm="confirm"
                        :show="showDialog"
                        title="Are u sure ?" />

        </div>
        
    </section>
   
</template>

<script>
import Dialog from './dialog.vue';
export default {
    components: {Dialog},
    data() {
        return{
            showDialog : true
        }
    },
    methods: {
        cancel() {
            this.showDialog = false
        },
        confirm() {
            this.showDialog = false
        }

    },

}
</script>

<style scoped>

.container{
    display: flex;
    width: 800px;
    height: 10vh;
    justify-content: space-between;
    background: rgb(221, 228, 219);
  
    border-radius: 5px;
}
.icon>{
   margin-top: 7px;
  
}

</style>