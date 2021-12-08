<template>
  <section>
    <!-- card event -->
    <div class="row mr-3">
      <div class="col-sm-4 m-auto">
        <div class="card mt-2 " v-for="value of event" :key="value.id">
          <div class="card-body row " >
            <div class="col-sm-6">
              <img
                src="https://s.w-x.co/in-cat_in_glasses.jpg"
                style="width: 100%"
                alt=""
              />
            </div>
            <div class="text col-sm-6">
                <div>
                  <h3 class="card-title">{{value.title}}</h3>
                  <p class="card-text">
                   {{value.discrption}}
                  </p>
                  <h6>{{value.city}}</h6>
                  <p>{{value.date}}</p>
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

export default {
  props: ["event"],

  
};
</script>
<style scoped>

.card {
  width: 700px;
  border: 1px solid #ccc;
  box-shadow: 0 5px 8px rgba(0, 0, 0, 0.26);
  

  
}


</style>