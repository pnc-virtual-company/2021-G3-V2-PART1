<template>

    <section>
       
        <div class="container mt-4">
            
            <div class="contain-img">
                <img src="https://cdn.pixabay.com/photo/2017/07/24/12/43/schrecksee-2534484_960_720.jpg" alt="">
            </div>
            
            <!-- search form -->
            <div class="main">
                
                <div class="form-group has-search mt-4">
                    <label for="">Search By Title</label>
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" v-on:keyup="findByTitle" v-model="title" placeholder="Search">
                    
                </div>
                <div class="form-group has-search mt-4">
                    <label for="">Search By City</label>
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" list="dataCountires" v-on:change="findByCity" v-model="city" placeholder="Search">
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
                                    

                                    <h5 class="card-title">{{event.title}}</h5>
                                    <p class="card-text">{{event.description}}</p>
                                    <div class="store-user ">
                                        <p class="text-success">Category: {{event.category.categoryName}}</p> 
                                        <p class="text-info">Username: {{event.user.name}} </p>
                                    </div>
                                    <div class="store ">
                                        <p class="member">Memer: </p>
                                        <div class="button">
                                            <button @click="getJoin" class="join border border-0 bg-primary text-white" >Join</button>
                                            <button  v-if="isShow" class="quice border border-0 bg-red text-white">Quice</button>
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
            title:'',
            allevent:[]
        }
    },
    methods: {
        findByTitle(){
            if(this.title !== ''){
                axios.get('events/search/' + this.title).then(res=>{
                    this.allevent = res.data.filter(event => event.user_id !== parseInt(localStorage.getItem("id")) );
                   
                })
            }else{
                this.getEvents();
             }
            
        },
        findByCity(){
            if(this.city !== ''){
                axios.get('events/searchCity/' + this.city).then(res=>{
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
            this.allevent = res.data.filter(event => event.user_id !== parseInt(localStorage.getItem("id")) );
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

.store{
    display: flex;
    justify-content: space-between;
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
.store-user{
  display: flex;
  justify-content: space-between;
}
.join{
    border-radius: 10px;
}
</style>