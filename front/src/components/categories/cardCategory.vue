<template>
  <section>
      <!-- form search -->
    <div class=" p-4 ">
        <div class=" search ">
            <form class="input-group p-4" style="width:65%;">
                <input type="search" class="form-control rounded" placeholder="Search" v-model="search"
                aria-label="Search"
                aria-describedby="search-addon"
                v-on:keyup="addName"
                />
                <button type="submit" id="search" class="btn btn-outline-warning ml-4" @click.prevent="addName">search</button>
            </form>
        </div>
  </div>
  <!-- function card  -->
    <div v-if="isEdited">
        <update-category></update-category>
    </div>
    
    <div
      class="container  hover-zoom"
      v-for="(category, index) of categoryName"
      :key="index"
    >
        <div class="left">
            <h3>{{ category.categoryName }}</h3>
        </div>
        <div class="right">
            <button class="mr-2 btn btn-danger text-white" data-toggle="modal" data-target="#deleteButton" @click="getIdremove(category.id)">Delete</button>
            <button class="btn btn-primary text-white" data-toggle="modal" data-target="#exampleModal" @click="getCategoryName(category)">update</button>
        </div>
        <Dialog :cancel="cancel"
                :confirm="confirm"
                :show="showDialog"
                title="are you sure?"
                />
       
    </div>
    <!-- modal delete  item-->
        <div class="modal fade" id="deleteButton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cencel</button>
                <button type="submit" class="btn btn-primary" data-dismiss="modal" @click="deleteItem(deleteId)">Yes</button> 

            </div>
            </div>
        </div>
        </div>
        <!-- end delete item -->
        <!-- update form -->
       
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success" id="exampleModalLabel">Update Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" placeholder="Category Name" style="width:100%;" v-model="cateName" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cencel</button>
                <button type="submit" class="btn btn-success" data-dismiss="modal" @click="updateCategory(this.ctrId,this.cateName)">Update</button> 

            </div>
            </div>
        </div>
        </div>
    
  </section>

</template>

<script>
//
import Dialog from './dialog.vue';
export default {
  props: ["categoryName"],
  $emits:['deleteItem'],
  components: {Dialog},
  data() {
    return {
        search:'',
        showDialog : true,
        deleteId:0,
        updateId:0,
        categories:'',
        ctrId:null,
        cateId: null,
        isEdited: false,
        cateName:'',
    
    };
  

  },
    methods: {
        // function search
        addName() {
          this.$emit('categoryName', this.search)
        },
        // end function search
        cancel() {
            this.showDialog = false
        },
        confirm() {
            this.showDialog = false
        } ,
        // function delete
        getIdremove(id){
            this.deleteId = id;
            console.log("Deleted",this.deleteId);
        },
        deleteItem(id){
            this.$emit("deleteItem",id);
            console.log("deleted",id);
        },
        // end function delete

       //function Update
        getCategoryName(cate){
            let category = JSON.parse(JSON.stringify(cate))
            this.cateName = category.categoryName
            this.ctrId = category.id
        },
        updateCategory(ctrId, cateName){
            this.$emit('updateCatgoryData',ctrId,cateName);
        }

        
    },

        

};
</script>

<style scoped>
.container {
    margin: 0.3rem auto;
    max-width: 50rem;
    padding: 1rem;
    background: rgb(230, 225, 225);
    border-radius: 5px;
    box-shadow: rgba(77, 77, 200, 0.25) 0px 2px 5px -1px,
        rgba(158, 153, 153, 0.3) 0px 1px 3px -1px;
    display: flex;
    justify-content: space-between; 
    border-left: 3px solid #0e2ee1;
    margin-bottom: 20px; 
}
.right {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 25%;
}
.right button {
    padding: 0.3rem 1rem;
    border-radius: 5px;
    cursor: pointer;
    border: none;
    color: rgb(10, 9, 9);
}
.left {
    padding: 10px;
    text-align: left;
    width: 75%;
}
h3 {
    font-weight: 600;
    margin: 0;
}
.search{
    /* margin: auto;
    margin-left: 15%; */
    display: flex;
    justify-content: center;
    
}
input[type=search],
#search{
    border: 1px solid #ccc;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26);
}
</style>