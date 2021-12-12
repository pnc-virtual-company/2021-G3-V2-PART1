
<template>
  <section>
    <nav-bar></nav-bar>
    <div class="container">
      <!-- button create an event -->
      <button
        type="button"
        class="btn btn-primary"
        data-toggle="modal"
        data-target="#Modal-create"
        id="btnCreate"
      >
        CREATE EVENT!
      </button>

      <!-- modal create an event -->
      <div
        class="modal fade"
        id="Modal-create"
        tabindex="-1"
        role="dialog"
        aria-labelledby="modal-mode"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="" class="ml-5">
              <div class="modal-header">
                <h5 class="modal-title text-danger" id="modal-mode">
                  CREATE EVENT
                </h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div>
                  <input
                    type="text"
                    placeholder="Title"
                    v-model="title"
                    required
                  />
                </div>
                

                <div>
                    <select name="Category" id="category" class="form-control"  v-model="category_id">
                      <option v-for="category of categories" :key="category.id" :value="category.id"> {{category.categoryName}} </option>
                    </select>
                </div>
                <div class="country">
                  <input type="text" v-model="country" list ="dataCountries" placeholder="Countries" required />
                  <datalist id="dataCountries">
                        <option  v-for="country of countries" :key="country">{{country}}</option>
                  </datalist>
                </div>
                <div class="city">
                  <input type="text" v-model="city" list ="dataCities" placeholder="City" required />
                  <datalist id="dataCities">
                        
                        <option v-for="city of allCountry[country]" :key="city">{{city}}</option>
                  </datalist>
                   
                   
                </div>
                <textarea
                  name="message"
                  rows="10"
                  cols="30"
                  placeholder="You desciption"
                  v-model="description"
                  required
                ></textarea>

                <div class="row">
                  <div class="column">
                    <div>
                      <input
                        type="datetime-local"
                        placeholder="Start Date"
                        v-model="StartDate"
                        required
                      />
                    </div>
                    <div>
                      <input
                        type="datetime-local"
                        placeholder="End Date"
                        v-model="EndDate"
                        required
                      />
                    </div>
                  </div>
                </div>
                <br />
                <div class="intFile">
                  <input type="file" @change="onFileselected" />
                </div>
                <div v-if="imagepreview">
                  <img :src="imagepreview" alt="" class="img-fluid mr-2" />
                </div>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal"
                >
                  CENCEL
                </button>
                <button
                  type="button"
                  class="btn btn-info"
                  data-dismiss="modal"
                  @click="addEvent"
                >
                  CREATE
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- search  -->
    <div>
      <div class="search">
        <form class="input-group" style="width: 65%" id="search">
          <input
            type="search"
            class="form-control rounded"
            placeholder="Search"
            v-model="search"
            aria-label="Search"
            aria-describedby="search-addon"
            v-on:keyup="searchEvent"
          />
          <button
            type="submit"
            id="btnsearch"
            class="btn btn-outline-warning ml-4"
            @click.prevent="addName"
          >
            search
          </button>
        </form>
      </div>
    </div>

    <!-- ======================Card View================================== -->
    <!-- card event -->
    <div class="bigCard">
      <div class="row mr-3" v-for="event of eventLists" :key="event.id">
        <!-- modal delete  item-->
        <div
          class="modal fade"
          id="deleteButton"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                  Delete myevent
                </h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">Are you sure you want to delete?</div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal"
                >
                  Cencel
                </button>
                <button
                  @click="deleleMyEvent(event.id)"
                  type="submit"
                  class="btn btn-primary"
                  data-dismiss="modal"
                >
                  Yes
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- end delete item -->
        <div class="d-flex">
          <div class="col-sm-4 m-auto">
            <div class="card mt-2">
              <div class="card-body row">
                <div class="d-flex">
                  <div class="image">
                    <img :src="url + event.image" alt="" class="hvr-buzz" />
                  </div>
                  <div class="text col-sm-6">
                    <div>
                      <h3 class="card-title">{{ event.title }}</h3>
                      <p class="card-text">
                        {{ event.description }}
                      </p>
                      <!-- <h6>{{event.city}}</h6> -->
                      <p>{{ event.start_date }}</p>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end align-items-end">
                    <button
                      class="btn btn-outline-danger mr-2"
                      data-toggle="modal"
                      data-target="#deleteButton"
                    >
                      Delete
                    </button>
                    <button class="btn btn-outline-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END CARD -->
  </section>
</template>


<script>
// import axios from "axios";
// const APP_URL = "http://127.0.0.1:8000/api/events";
import axios from '../../http-common.js'
export default {
  data() {
    return {
      title: "",
      description: "",
      StartDate: "",
      EndDate: "",
      image: "",
      category_id:null,
      eventLists: [],
      url: "http://127.0.0.1:8000/storage/image/",
      imagepreview: null,
      country: "",
      city:"",
      search:"",
      user_id:localStorage.getItem('id'),
      categories:[],
      countries:[],
      cities:[],
      allCountry: []
    };
  },
  methods: {
    deleleMyEvent(id) {
      axios.delete("/events/" + id).then(() => {
        this.getevents();
      });
    },
    onFileselected(event) {
      this.image = event.target.files[0];

      let reader = new FileReader();
      reader.readAsDataURL(this.image);
      reader.onload = (event) => {
        this.imagepreview = event.target.result;
      };
    },

    addEvent() {
      const newEvent = new FormData();
      newEvent.append("title", this.title);
      newEvent.append("description", this.description);
      newEvent.append("image", this.image);
      newEvent.append("start_date", this.StartDate);
      newEvent.append("end_date", this.EndDate);
      newEvent.append("city",this.city);
      newEvent.append("country",this.country);
      newEvent.append("category_id", this.category_id);
      newEvent.append("user_id",this.user_id);
      // console.log(this.description);
      axios.post('/events', newEvent).then((res) => {
        console.log(res.data);
        console.log("Created");
        this.getevents();
      });
      this.title = '';
      this.description = "";
      this.StartDate = "";
      this.EndDate = "";
      this.city = "";
      this.country = "";
    },
    getevents() {
      axios.get('/events').then((res) => {
        this.eventLists = res.data;
        console.log(this.eventLists);
      });
    },

    // function delete
    deleteevent(id) {
      axios.delete('/events' + id).then((res) => {
        console.log("deleted", res.data);
        this.getevents();
      });
    },
    getIdremove(id) {
      this.deleteId = id;
      console.log("Deleted", this.deleteId);
    },
    // search value on event
    searchEvent(){
      if(this.search !== ''){
        console.log(this.search);
        axios.get('events/search/' + this.search).then(res =>{
          this.eventLists = res.data;
        })
        
      }else{
        this.getevents();
      }
    },
    getCountries(){
        axios.get('/countries').then(res=>{
          
          this.allCountry = res.data
          for (let country in this.allCountry) {
            this.countries.push(country)
            
          }
        })
    },
    // get categories
    getCategory(){
      axios.get('/categories').then(res =>{
        this.categories = res.data;
        console.log(this.categories);
      })
    }
  },
  
  mounted() {
    this.getevents();
    this.getCountries();
    this.getCategory();
  },
};
</script>

<style scoped>
#btnCreate {
  margin-left: 71%;
  margin-top: 20px;
}
.search {
  width: 74%;
}
#search {
  margin-top: 2%;
  margin-left: 39%;
}
form div {
  margin: 1rem 0;
}

input[type="text"] {
  width: 80%;
  padding: 5px;
  margin-left: 6%;
}
textarea {
  width: 80%;
  margin-left: 6%;
  height: 10vh;
}
.intFile {
  width: 85%;
  margin-left: 6%;
  margin-bottom: 3%;
  margin-top: -30px;
}
label {
  font-weight: bold;
  margin-right: 1rem;
  width: 7rem;
  display: inline-block;
  color: #777;
  font-size: 15px;
  padding: 10px 0;
}

.add {
  display: flex;
  justify-content: space-between;
  text-decoration: none;
  width: 80%;
  margin-left: 8%;
  margin-top: 6%;
}

.button-3:focus:not(:focus-visible):not(.focus-visible) {
  box-shadow: none;
  outline: none;
}

.button-3:hover {
  background-color: #8b890b;
}

.button-3:disabled {
  background-color: #40db62;
  border-color: rgba(27, 31, 35, 0.1);
  color: rgba(255, 255, 255, 0.8);
  cursor: default;
}

.button-3 {
  background-color: rgb(71, 73, 173);
  padding: 7px 25px;
  text-decoration: none;
  border-radius: 5px;
  border: none;
}

.button-2 {
  border: none;
  background: #03911a;
  border-radius: 5px;
  padding: 7px 10px;
  color: white;
}

.column {
  float: left;
  width: 100%;
  padding: 0%;
  margin-top: -20px;
  margin-left: 6%;
  margin-bottom: 0;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
input[type="datetime-local"] {
  width: 85%;
  padding: 1%;
}
a {
  color: white;
}

/* card event  */
.bigCard {
  overflow-y: auto;
  height: 69vh;
  margin-top: 20px;
  margin-left: -7%;
  margin-right: 10px;
}

.card {
  width: 750px;
  border: 1px solid #ccc;
  box-shadow: 0 5px 8px rgba(0, 0, 0, 0.26);
}
img {
  width: 200px;
  height: 180px;
  position: center;
}
.d-flex {
  display: flex;
}
select{
  width: 335px;
  margin-left: 25px;
}
</style>