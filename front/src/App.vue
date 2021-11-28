<template>
  <router-view></router-view>
</template>

<script>
import http from "./http-common";
export default {
  data(){
    return{
      users:[]
    }
  },
  methods: {
    getStatus(){
      return process.env.VUE_APP_MODE;
    },
    register(username, profile, email, password, confirm){
      if(username !== '' && profile !=='' && password !=='' && confirm !=='' && email !==''){
        const addData = {
          username:username,
          profile:profile,
          email:email,
          password:password,
          confirm:confirm
        };
        http.post('/users', addData).then(res =>{
          this.users.unshift(res.data.user);
        })
      }
    }
  },
  mounted() {
    http.get('/users').then((res) =>{
      this.users = res.data;
    })
  },
}
</script>

<style>

</style>
