<template>
  <header>
     <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex" id="navbarTogglerDemo01">
           <div class="navbar">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item mr-4">
                        <img src="https://albassas.com/wp-content/uploads/2020/05/kisspng-computer-icons-portable-network-graphics-avatar-ic-5ba3c66dae9957.9805960115374598217152.jpg" class="img-rounded" alt="Cinque Terre" width="50" height="50"> 
                    </li>
                    <li class="nav-item active mr-3">
                        <router-link to="/allevent" class="nav-link">All EVENTS </router-link>
                    </li>
                    <li class="nav-item mr-3">
                        <router-link to="/myevent " class="nav-link">MY EVENTS</router-link>
                    </li>
                    <li class="nav-item mr-3">
                        <router-link to="/category" class="nav-link">CATAGORIES</router-link>
                    </li>
                    <li class="nav-item mr-3">
                        <router-link to="/findEvent" class="nav-link">FIND EVENT</router-link>
                    </li>
            </ul>
           </div>
           <div class="logout">
               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="d-flex mr-3">
                         <input id="search-focus" type="search" class="form-control" draggable="search"/>
                         <button type="button" class="btn btn-primary mr-2">
                            <i class="fas fa-search"></i>
                         </button>
                    </li>
                    <li>
                        <button class="btn btn-outline-danger">logout</button>
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

<style>
#navbarTogglerDemo01{
    display: flex;
    justify-content: space-between;
}


</style>