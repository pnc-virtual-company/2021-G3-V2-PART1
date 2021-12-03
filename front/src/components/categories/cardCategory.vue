<template>
  <section>
    <div class=" p-4">
        <div>
        <form class="input-group p-4">
            <input type="search" class="form-control rounded" placeholder="Search" v-model="search"
            aria-label="Search"
            aria-describedby="search-addon"
            />
            <button type="submit" class="btn btn-outline-warning ml-4" @click.prevent="addName">search</button>
        </form>
        </div>
  </div>
  <hr>
    <div
      class="container  hover-zoom"
      v-for="(category, index) of categoryName"
      :key="index"
    >
        <div class="left">
            <h3>{{ category.categoryName }}</h3>
        </div>
        <div class="right">
            <button class="mr-2 btn btn-danger text-white" @click="showDialog = true">Delete</button>
            <button class="text-white"><category-edit></category-edit></button>
        </div>
        <Dialog :cancel="cancel"
                :confirm="confirm"
                :show="showDialog"
                title="are you sure?"
                />
       
    </div>
  </section>

</template>

<script>
//
import Dialog from './dialog.vue';
export default {
  props: ["categoryName"],
  components: {Dialog},
  data() {
    return {
        search:'',
        showDialog : true,
    };
  

  },
    methods: {
        addName() {
          this.$emit('categoryName', this.search)
        },
        cancel() {
            this.showDialog = false
        },
        confirm() {
            this.showDialog = false
        } 
    },
        

};
</script>

<style scoped>
.container {
    margin: 0.3rem auto;
    max-width: 50rem;
    padding: 1rem;
    background: rgb(230, 225, 225);
    border-radius: 5px;
    box-shadow: rgba(77, 77, 200, 0.25) 0px 2px 5px -1px,
        rgba(158, 153, 153, 0.3) 0px 1px 3px -1px;
    display: flex;
    justify-content: space-between; 
    border-left: 3px solid #0e2ee1;
    margin-bottom: 20px; 
}
.right {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 25%;
}
.right button {
    padding: 0.3rem 1rem;
    border-radius: 5px;
    cursor: pointer;
    border: none;
    color: rgb(10, 9, 9);
}
.left {
    padding: 10px;
    text-align: left;
    width: 75%;
}
h3 {
    font-weight: 600;
    margin: 0;
}
</style>