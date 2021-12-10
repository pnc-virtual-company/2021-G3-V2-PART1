<template>
<section>
    <div class="register-form">
        <div class="nav"></div>
        <div class="contain-form">
            <div class="image">
                <h3 class="text-black">Event me!!</h3>
                <h2 class="text-black">Special Event!</h2>
                <h5 class="text-black">Welcome to our Event! in this web app you can post and join event. But if you don't have account you can Register.</h5>
              
            </div>
            <div class="form">
                <form @submit.prevent="userRegister" class="list-form">
                    <div class="label-reg">
                        <label for="" class="text-black">Event me!</label>
                    </div>
                    <div>
                        <input type="file" name="" id="image" class="d-none" >
                        <label for="image" class="d-flex"><img src="../../assets/avatar.png" alt="" style="width:90px; height:90px; text-align:center;"></label>
                    </div>
                    <div>
                        <input type="text" placeholder="USERNAME" v-model="username">
                    </div>
                    <div>
                        <input type="text" placeholder="EMAIL" v-model="email">
                    </div>
                    <div>
                        <input type="password" placeholder="PASSWORD" v-model="password">
                    </div>
                    <div>
                        <input type="password" placeholder="COMFIRM PASSWORD" v-model="confirm">
                    </div>
                    <div class="p">
                        <router-link to="/signIn" class="text-black"> Please Sign in!</router-link>
                    </div>
                    <div class="button">
                        <button>Regiser</button>
                    </div>
                    
                </form>
            </div>

        </div>
    </div>
</section>
</template>

<script>
    import axios from '../../http-common.js'
    export default {
        emits: ['isNotHidden'],
        data(){
        
            return{
                username:'',
                email:'',
                password:'',
                confirm:'',
            }
            
        },
        methods: {
            userRegister(){
                let addData = {
                name:this.username,
                email:this.email,
                    password:this.password,
                    password_confirmation:this.confirm
                }
                
                axios.post('/register', addData).then(res =>{
                    this.$router.push('/myevent');
                    localStorage.setItem('name', res.data.data.name);
                    console.log(res.data.data.name);
                    this.$emit('isNotHidden',true);
                }).catch(error => {
                    let errorStatus = error.response.status;
                    if(errorStatus === 422) {
                        this.messacongeError = 'Invalid data, please try again';
                        window.confirm('Please enter confirm matching to password or your gmail already Register');
                    }
                
                })

            
                
            }
            
        },
    }
</script>

<style scoped>
section{
    background:rgb(151, 238, 216) ;
}
*{
    padding: 0;
    margin: 0;
}

.contain-form{
    display: flex;
    justify-content: center;
}

.label-reg{
    margin-top:10% ;
    font-size: 30px;
    text-align: center;
    color: white;
    font-weight: bold;
}  
input{
    width: 90%;
    padding-left: 15px;
    
    margin: 5px;
    height: 40px;
    background: rgb(149, 170, 169);
    color: rgb(255, 230, 0);
}
.list-form{
    width: 330px;
    height: 500px;
    border-radius: 0px 15px 15px 0px;
    background: rgb(183, 246, 243);
    margin-bottom: 20px;
    
}
.form{
    margin-top: 5px;
}
.button{
    text-align: center;
  
}
button{
    border-radius: 20px;
    width: 200px;
    height: 40px;
    color: white;
    background: rgb(83, 208, 224);
    font-weight: bold;
   border: none;
    
}
label{
    margin-top: 5px;
}
.p{
    font-weight:bold ;
    margin-left: 15px;
}
.image{
    height: 500px;
    width: 350px;
    background-image: url("../../assets/bgres.png");
    margin-top: 40px;
    border-radius: 10px 0px 0px 10px;
    color: white;
}
h2{
    
    margin-left: 20px;
    margin-top: 35%;
}
h5{
    margin-left: 20px;
}
h3{
    margin: 10px;
}
.d-flex{
    display: flex;
    justify-content: center;
    cursor: pointer;
}
#image{
    display: none;
}
</style>