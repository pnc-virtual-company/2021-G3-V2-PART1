<template>

    <section>
       
        <div class="container">
            <div class="contain-first d-flex p-4">
                <button class="border border-0 bg-danger text-white">FIND EVENT</button>
                <h4 class="ml-3">EVENT ME</h4>
            </div>
            <div class="contain-img">
                <img src="https://cdn.pixabay.com/photo/2017/07/24/12/43/schrecksee-2534484_960_720.jpg" alt="">
            </div>
            
            <!-- search form -->
            <div class="main">
                
                <div class="form-group has-search mt-4">
                    <!-- <label for="">Search By Country</label>
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" v-on:keyup="findByCountry" v-model="country" placeholder="Search"> -->
                    
                </div>
                <div class="form-group has-search mt-4">
                    <label for="">Search By City</label>
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" list="dataCountires" v-on:keyup="findByCity" v-model="city" placeholder="Search">
                    <datalist id="dataCountires">
                        <option  v-for="city of cities" :key="city">{{city}}</option>
                    </datalist>
                    
                </div>
            </div>
            <!-- contain card -->
            <div class="contain-dard">
                <div class=" p-2"  v-for="event of allevent" :key="event.id">
            
                    <div class="row mt-4">
                        <div class="col-sm-12">
                            <div class="card">
                            <div class="card-body d-flex">
                                <div class="img">
                                    <img :src="url + event.image" alt="" class="image">
                                </div>
                                <div class="text ml-4">
                                    <div class="card-date d-flex ">
                                        <p class="tart-date">Start date: {{event.start_date}} </p>
                                        <p class="end-date ml-3">End date: {{event.end_date}}</p>
                                        <p class="end-date ml-3">Country: {{event.country}}</p>
                                        <p class="end-date ml-3">City: {{event.city}}</p>
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
        </div>
        
    </section>
</template>

<script>
import axios from '../../http-common.js'
export default {
    data(){
        return{
            url: "http://127.0.0.1:8000/storage/image/",
            events:[],
            allCountry:[],
            cities:[],
            city:'',
            country:'',
            allevent:[]
        }
    },
    methods: {
        findByCity(){
            if(this.city !== ''){
                axios.get('events/search/' + this.city).then(res=>{
                    this.allevent = res.data;
                    console.log(this.allevent);
                })
            }else{
                this.getEvents();
             }
            
        },
        getCountries(){
        axios.get('/countries').then(res=>{
            
            for (let country in res.data) {
           
                for(let city of res.data[country]){
                    this.cities.push(city);
                }
            }
        })
    },
    getEvents(){
        axios.get('/events').then(res=>{
            this.allevent = res.data;
            })
        }
    },
    mounted() {
        this.findByCity();
        this.getCountries();
        this.getEvents();
    },
}
</script>

<style scoped>
.main {
    width: 100%;
    display: flex;
    justify-content: space-around;
   
}
.image{
    width:250px;
    height: 190px;
}


.has-search .form-control {
    padding-left: 2.375rem;
} 

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
}
label{
    font-weight: bold;
    font-size: 20px;
}
input{
    width: 100%;
}
.contain-img{
    margin-left: 80px;
}
</style>