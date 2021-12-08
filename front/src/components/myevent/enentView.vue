<template>
    <section>
        <event-card></event-card>
        <event-form></event-form>
    </section>
</template>
<script>

import axios from '../../http-common.js' 
export default {
    data(){
        return{
            events:[],
            title:'',
            description:'',
            start_date:'',
            end_date:''
        }
    },
    methods: {
        getEvent(){
            axios.get('/event').then(res=>{
                this.events = res.data;
            
            })
        }
    },
}
</script>