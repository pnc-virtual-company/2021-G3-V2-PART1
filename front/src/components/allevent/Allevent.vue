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
            
                <div class=" p-2"  v-for="event of allevents" :key="event.id">
            
                    <div class="row mt-4">
                        <div class="col-sm-8">
                            <div class="card">
                            <div class="card-body d-flex">
                                <div class="img">
                                    <img :src="url + event.image" alt="" class="image">
                                </div>
                                <div class="text ml-4">
                                    <div class="card-date d-flex ">
                                        <p class="tart-date">Start date: {{event.start_date}} </p>
                                        <p class="end-date ml-3">End date: {{event.end_date}}</p>
                                    </div>
                                    

                                    <h3 class="card-title">{{event.title}}</h3>
                                    <p class="card-text">{{event.description}}</p>
                                    <div class="store ">
                                        <h5 class="member">Memer: </h5>
                                        <div class="button">
                                            <button @click="getJoin" class="join border border-0" >Join</button>
                                            <button  v-if="isShow" class="quice border border-0">Quice</button>
                                        </div>
                                    </div>
                                </div>
                                
                              
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
          isShow:false
      }
    },
    methods: {
      getEvent(){
            axios.get('/events').then(res=>{
            this.allevents = res.data;
            console.log(this.allevents)
          })
          
      },
      getJoin(){
          this.isShow = true;
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
.row{
    margin-left: 250px;
}

.image{
    width:250px;
    height: 190px;
}
.store{
    display: flex;
    justify-content: space-between;
}
.join,
.quice{
    border-radius: 10px;
    margin-left: 10px;
    color: cornsilk;
    font-weight: bold;
}
.join{
    background: rgb(47, 27, 226);
   
  
}
.quice{
    background: crimson;
    
}

</style>