<template>
    <section>
       
        <div class="container d-flex justify-content-center">
            <div class="card mt-4" style="max-width: 650px;">
            <div class="row ">
                <div class="col-md-4" >
                    <img
                        style="max-width:200px"
                        src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg"
                        alt="..."
                        class="img-fluid rounded-start"
                    />
                </div>
                <div class="col-md-8 ">
                    <div class="button d-flex justify-content-end p-1">
                         <div class="dropdown">
                            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu " aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item text-danger" type="button">Delete</button>
                                <button class="dropdown-item text-success" type="button">Update</button>
                               
                            </div>
                        </div>
                    </div>
                    <div class="card-body ml-2">
                        <h5 class="card-title"> Title</h5>
                        <p class="card-text">
                        The meaning of picture and you create event what you want to so 
                        thank of using my app
                        </p>
                        <p class="card-text">
                        <small class="text-muted fas fa-alarm-clock f34e ">:3/5/221</small>
                        </p>
                     <div class="icont">

                     </div>
                    </div>  
                </div>
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
.myevent{
    
    margin-top: 15px;
    display: flex;
    justify-content: space-between;
    width:80%;
    height: 15vh;
    
    background: rgb(218, 115, 115);

}
.logo{
    width:25%;
    background: rgb(46, 45, 45);

}
.img{
    width:30% ;
    background: rgb(71, 71, 71);
}
.action{
    width: 25%;
    background: rgb(102, 101, 101);
}

</style>