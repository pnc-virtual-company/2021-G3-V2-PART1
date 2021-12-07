<template>
    <section>
        <nav-bar></nav-bar>
        <category-form @add-category = "createCategory" ></category-form>
        <category-card  :categoryName="categories" 
        @categoryName="searchName"
        @updateCatgoryData="updateNameCategory"
        @deleteItem="deleteCategory"></category-card>
        
    </section>
    
</template>

<script>
const APP_URL = 'http://127.0.0.1:8000/api/categories';
import axios from 'axios' 
export default {
    props: ['category'],
    data(){
        return{
            categories:[],
            categoryName:[],
            showForm: false,
        };
    },
    methods: {
        getCategory(){
            axios.get(APP_URL).then(res=>{
                this.categories = res.data;
               
            })
        },
        createCategory(categoryName){
                if(categoryName !== ''){
                    const addCategory ={
                    categoryName: categoryName,
                
                };
                axios.post(APP_URL, addCategory).then(res =>{
    
                    this.getCategory();
                    console.log(res.data)
                    
                });
            }
        },
        searchName(name) {
            if(name !== '') {
                axios.get(APP_URL + "/search/" + name).then(res => {
                    this.categories = res.data;
                    console.log(name)
                })
            }else {
                this.getCategory();
            }
            // console.log(name)
        },
        deleteCategory(id){
            axios.delete(APP_URL + '/' + id).then(res =>{
                console.log("deleted",res.data);
                this.getCategory();
            })
        },
        updateNameCategory(ctrId, ctrName){
            axios.put(APP_URL+'/'+ctrId, {categoryName:ctrName})
            .then(res=>{
                console.log(res.data);
                this.getCategory();
            })
            .catch(err=>{
                console.log("Error for update: " + err);


            })
        }
      

    
    },
    mounted() {
            this.getCategory();
        
    },
}
 

</script>

<style>

</style>