<template>
    <section>
        <div class="contain-all">
            <div class="top p-4 d-flex">
                <button class="bg-danger border border-0 text-white">ALL EVENTS</button>
                <h3 class="ml-3 mt-1">EVENT-ME</h3>
            </div>
            <div class="contain-img">
                <img src="" alt="">
            </div>
            <!-- containt-card -->
            <div class="p-4" v-for="event of allevents" :key="event.id">
                <div class="card mb-3 ml-4" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img
                            src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg"
                            alt="Trendy Pants and Shoes"
                            class="img-fluid rounded-start"
                        />
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">{{event.title}}</h3>
                            <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                            </p>
                            <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                        </div>
                    </div>
                </div> 

            </div>
            

      </div>
       
    
    </section>
</template>

<script>
// import axios from "axios";
// const APP_URL = "http://127.0.0.1:8000/api/events";
 import axios from '../../http-common.js'
export default {
    data(){
      return{
          allevents:[],
          url: "http://127.0.0.1:8000/storage/image/",
      }
    },
    methods: {
      getEvent(){
            axios.get('/events').then(res=>{
            this.allevents = res.data;
            console.log(this.allevents)
          })
          
      }
      
    },
    mounted() {
      this.getEvent();
    },
}
</script>

<style scoped>
.bg-danger{
    font-size: 20px;
}

.p-4{
    display: flex;
    
}


</style>