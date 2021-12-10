
<template>
  <section>
    <navbar v-if="isNotHidden" @isNotHidden="navHidden" @isNothide="navHidden"></navbar>
    <router-view @isNotHidden="navHidden"/>
  </section>
</template>

<script>
    import Navbar from "./components/nav/navBar.vue";
    import axios from './http-common.js' 
   
    export default {
      components: {
        'navbar': Navbar,
      },
      data() {
        return {
          users: [],
          isNotHidden: false
        };
      },
      methods: {
        navHidden(isHidden){
          this.isNotHidden = isHidden;
        }
      },
      mounted() {
        axios.get("/users").then((res) => {
          this.users = res.data;
          console.log(this.users);
        });
      },
    };
</script>

<style>
</style>
