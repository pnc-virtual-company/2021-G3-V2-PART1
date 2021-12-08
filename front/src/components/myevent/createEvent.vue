<template>
  <section>
    <div class="container">
      <!-- button create an event -->
      <button
        type="button p-4"
        class="btn btn-primary"
        data-toggle="modal"
        data-target="#Modal-create"
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
            <form action="">
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
                  <input type="text" placeholder="Event Catigories" required />
                </div>
                <div class="city">
                  <input type="text" placeholder="City" required />
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
                        type="date"
                        placeholder="Start Date"
                        v-model="StartDate"
                        required
                      />
                    </div>
                    <div>
                      <input
                        type="date"
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

    <!-- ======================Card View================================== -->
    <!-- card event -->
    <div class="row mr-3">
      <div class="col-sm-4 m-auto">
        <div class="card mt-2 " v-for="event of eventLists" :key="event.id">
          <div class="card-body row " >
            <div class="image">
              <img
                :src="url + event.image"
                style="width: 100%"
                alt=""
              />
            </div>
            <div class="text col-sm-6">
                <div>
                  <h3 class="card-title">{{event.title}}</h3>
                  <p class="card-text">
                   {{event.description}}
                  </p>
                  <!-- <h6>{{event.city}}</h6> -->
                  <p>{{event.start_date}}</p>
                </div>
                <div class="d-flex justify-content-end align-items-end ">
                  <button class="btn btn-outline-danger mr-2">Delete</button>
                  <button class="btn btn-outline-primary">Update</button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>


<script>
import axios from "axios";
const APP_URL = "http://127.0.0.1:8000/api/events";
export default {
  data() {
    return {
      title: "",
      description: "",
      StartDate: "",
      EndDate: "",
      image: "",
      eventLists: [],
      url: "http://127.0.0.1:8000/storage/image/"
    };
  },
  methods: {
    onFileselected(event) {
      this.image = event.target.files[0];
      console.log(this.image);
    },

    addEvent() {
      const newEvent = new FormData();
      newEvent.append("title",this.title);
      newEvent.append("description",this.description);
      newEvent.append("image",this.image);
      newEvent.append("start_date",this.StartDate);
      newEvent.append("end_date",this.EndDate);

      console.log(this.description);

      axios.post(APP_URL, newEvent).then(res => {
        console.log(res.data);
        console.log("Created");
        this.getevents();
      });
    },
    getevents() {
        axios.get(APP_URL).then(res => {
          this.eventLists = res.data;
          console.log(this.eventLists);
        });
    },
  },
  mounted() {
    this.getevents();
  },

};
</script>

<style scoped>

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
input[type="date"] {
  width: 85%;
  padding: 1%;
}
a {
  color: white;
}


.card {
  width: 700px;
  border: 1px solid #ccc;
  box-shadow: 0 5px 8px rgba(0, 0, 0, 0.26);
}
img{
  width: 150px;
  height: 150px;
  position: center;
}
</style>