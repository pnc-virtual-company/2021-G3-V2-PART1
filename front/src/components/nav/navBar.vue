<template>
  <header>
     <nav class="navbar navbar-expand-lg navbar-light bg-secondary position-sticky sticky-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
           <div class="menu">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
                    <li class="nav-item mr-2">
                         <img
                            src="https://mdbootstrap.com/img/new/avatars/2.jpg"
                            class="rounded-circle"
                            height="40"
                            alt=""
                            loading="lazy"  
                        />
                    </li>
                    <li class="nav-item active mr-3 ">
                        <h5 class="mt-2">{{username}}</h5>
                        
                    </li>
                    <li class="nav-item active mr-3">
                        <router-link to="/allevent" class="nav-link text-white">All EVENTS </router-link>
                    </li>
                    <li class="nav-item mr-3">
                        <router-link to="/myevent" class="nav-link text-white">MY EVENTS</router-link>
                    </li>
                    <li class="nav-item mr-3">
                        <router-link to="/category" class="nav-link text-white">CATAGORIES</router-link>
                    </li>
                    <li class="nav-item mr-3">
                        <router-link to="/findEvent" class="nav-link text-white">FIND EVENT</router-link>
                    </li>
                </ul>
           </div>
           <div class="logout">
               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                   <li>
                       <button  class="btn btn-outline-warning " @click="logOut"><router-link to="/signIn" class="signIn">Logout</router-link></button>

                   </li>
               </ul>

           </div>
           
        </div>
        </nav>
  </header>
</template>

<script>
export default {
    emits:['isNotHidden'],
    data(){
        return{
            username:localStorage.getItem('name'),
            isNav:true
        }
    },
    methods: {
        logOut(){
            localStorage.removeItem('name');
            localStorage.removeItem('id');
            this.$emit('isNotHidden', false);
        }
    },
};
</script>

<style scoped>
    
    #navbarTogglerDemo01{
        display: flex;
        justify-content: space-between;
    }
 
    .signIn{
        text-decoration: none;
        color: white;
    }
    .router-link-active{
        background: rgb(173, 4, 55);
        border-radius: 10px;
    }
    h5{
        color: white;
        font-size: 20px;
    }
</style>