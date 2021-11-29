<template>
<section>
    <div class="register-form">
        <div class="nav"></div>
        <div class="contain-form">
            <div class="image">
                <h3>Event me!!</h3>
                <h2>Special Event!</h2>
                <h5>Welcome to our Event! in this web app you can post and join event. But if you don't have account you can Register.</h5>
              
            </div>
            <div class="form">
                <form @submit.prevent="userRegister" class="list-form">
                    <div class="label-reg">
                        <label for="">Event me!</label>
                    </div>
                    <div>
                        <input type="file" name="" id="image" class="d-none"  v-on:change="profile">
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
                        <router-link to="/signIn"> Please Sign in!</router-link>
                    </div>
                    <div class="button">
                        <button>Register Now</button>
                    </div>
                    
                </form>
            </div>

        </div>
    </div>
</section>
</template>

<script>
export default {
    emits:["user-register"],
    data(){
        return{
            username:'',
            email:'',
            profile:'',
            password:'',
            confirm:''
        }
        
    },
    methods: {
        userRegister(){
            this.$emit('user-register', this.username, this.email,this.password, this.confirm);
            this.username = '';
            this.email ='';
            this.profile = '';
            this.password = '';
            this.confirm = '';
        },
        
    },
}
</script>

<style>
*{
    padding: 0;
    margin: 0;
}
.nav{
    padding: 2%;
    widows: 100%;
    background: #52C6C1;
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
    background: #000;
    color: rgb(255, 230, 0);
}
.list-form{
    width: 350px;
    height: 500px;
    border-radius: 0px 10px 10px 0px;
    background: rgb(61, 59, 59);
    
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
    background-image: url("../../assets/forest.png");
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