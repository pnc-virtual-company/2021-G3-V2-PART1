<template>
    <section>
        <div class="container mt-4">
            
            <div class="class mt-4">
                <img src="https://cdn.pixabay.com/photo/2018/05/14/16/54/alpine-3400788__340.jpg" alt="">
            </div>

            <!-- card-image for the best -->
            <div class="contain-card">
                <div v-for="(event, index) of events" :key="index">
                    <div class="card mt-4 " >
                    <div class="card-body d-flex" >
                        
                        <img src="https://cdn.pixabay.com/photo/2018/12/15/18/02/forest-3877365__340.jpg" style="width:30%; height:30%;" alt="">
                        
                        <div class="text ml-4">
                            <p>12:34:26 12:00AM {{event.date}}</p>
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-member"> Member: 12345</p>
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
    props:['events'],
    data(){
        return{

        }
    }
}
</script>

<style scoped>
    
</style>