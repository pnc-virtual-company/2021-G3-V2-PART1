<template>
    <section>
        <category-form @add-category="createCategory" ></category-form>
        <category-card  
        :categoryName="categories" 
        :message="messege_error"
        @categoryName="searchName"
        @updateCatgoryData="updateNameCategory"
        @deleteItem="deleteCategory"></category-card>
        
    </section>
    
</template>

<script>
import cardCategory from "./cardCategory.vue";
import CategoryForm from "./categoryForm.vue";
import axios from '../../http-common.js' 
export default {
    components: {
        'category-form': CategoryForm,
        'category-card': cardCategory,
    },
    props: ['category'],
    data(){
        return{
            categories:[],
            categoryName:[],
            showForm: false,
            messege_error: '',
        };
    },
    methods: {
        getCategory(){
            axios.get('/categories').then(res=>{
                this.categories = res.data;
               
            })
        },
        createCategory(categoryName){
                if(categoryName !== ''){
                    const addCategory ={
                    categoryName: categoryName,
                
                };
                axios.post('/categories', addCategory).then(res =>{
                    this.getCategory();
                    console.log(res.data)
                })
                .catch(error => {
                    let errorStatus = error.response.status;
                    if(errorStatus === 422) {
                        this.messege_error = 'Invalid data, please try another name';
                        console.log(this.messege_error);
                        
                    }
            
                });
            }
        },
        searchName(name) {
            if(name !== '') {
                axios.get("/categories/search/" + name).then(res => {
                    this.categories = res.data;
                    
                })
            }else {
                this.getCategory();
            }
        },
        deleteCategory(id){
            axios.delete( '/categories/' + id).then(res =>{
                console.log("deleted",res.data);
                this.getCategory();
            })
        },
        updateNameCategory(ctrId, ctrName){
            axios.put('categories/'+ctrId, {categoryName:ctrName})
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