
<template>
  <router-view></router-view>
</template>

<script>
// import http from "./http-common";
import axios from 'axios';
const APP_URL='http://127.0.0.1:3000/api';
export default {
  data(){
    return{
      users:[]
    }
  },
  mounted() {
    axios.get(APP_URL + '/users').then(res=>{
      this.users = res.data;
      // console.log(this.users);
    })
  },
};
</script>

<style>

</style>
