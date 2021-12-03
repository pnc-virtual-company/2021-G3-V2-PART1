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
    <div
      class="container"
      v-for="(category, index) of categoryName"
      :key="index"
    >
      <div class="left">
        <h3>{{ category.categoryName }}</h3>
      </div>
      <div class="right">
        <button class="mr-2 btn btn-danger text-white">Delete</button>
        <button class="btn btn-primary text-white">Udate</button>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  props: ["categoryName"],
  data() {
    return {
        search:'',
    };

  },
  methods: {
      addName() {
          this.$emit('categoryName', this.search)
      }
      
    }

};
</script>

<style scoped>
.container {
  margin: 0.5rem auto;
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
}
h3 {
  font-weight: 400;
  margin: 0;
}
</style>