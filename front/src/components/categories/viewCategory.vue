<template>
    <section>
        <nav-bar></nav-bar>
        <search-category></search-category>
        <category-form @add-category = "createCategory" ></category-form>
        <category-card :categoryName="categories" @categoryName="searchName"></category-card>
        
        
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
            categoryName:[]
        };
    },
    methods: {
        getCategory(){
            axios.get(APP_URL).then(res=>{
                this.categories = res.data;
                console.log(this.categories);
            })
        },
        createCategory(categoryName){
                if(categoryName !== ''){
                    const addCategory ={
                    categoryName: categoryName
                
                };
                axios.post(APP_URL, addCategory).then(res =>{
                    // this.categories.unshift(res.data.categoryName);
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
        }

    
    },
    mounted() {
            this.getCategory();
        
    },
}
 

</script>

<style>

</style>