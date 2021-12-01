<template> 
    <section>
        <nav-bar> </nav-bar>
        <div class="container">
            <div class="nameIcon">
                <div class="name">
                    <h2>Computer shop</h2>

                </div>
                <div class="icon">
                    <button class="mr-1">Delete</button>
                    <button>Update</button>

                </div>
            </div>
            

        </div>
    </section>
   
</template>

<script>
export default {

}
</script>

<style>

.nameIcon{
    display: flex;
    width: 900px;
    justify-content: space-between;
    background: rgb(93, 141, 81);
    margin-top: 12px;
}
.icon{
   margin-top: 7px;
  
}

</style>