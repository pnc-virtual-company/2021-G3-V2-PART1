<template>
  <header>
     <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
           <div class="menu">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
                    <li class="nav-item mr-5">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHgwL4r2DN1qg91OOqIViiv0Uxw-9yqo-PiQ&usqp=CAU" alt="Cinque Terre" width="60" height="60">
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
                   <li class="d-flex mr-3">
                        <input id="search-input" type="search" class="form-control" />
                        <button id="search-button " type="button" class="btn btn-secondary">
                            <i class="fas fa-search"></i>
                        </button>
                   </li>
                   <li>
                       <button  class="btn btn-outline-dark "><router-link to="/signIn">Logout</router-link></button>

                   </li>
                   
                
               </ul>

           </div>
           
        </div>
        </nav>
  </header>
</template>

<script>
export default {

}
</script>

<style scoped>
#navbarTogglerDemo01{
    display: flex;
    justify-content: space-between;
}

</style>