<template>
    <section>
        <event-card></event-card>
        <event-form></event-form>
    </section>
</template>
<script>
const APP_URL = 'http://127.0.0.1:8000/api/events';
import axios from 'axios'
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
            axios.get(APP_URL).then(res=>{
                this.events = res.data;
                console.log(events);
            })
        }
    },
}
</script>