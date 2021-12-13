<template>
    <section>
        <div class="register-form">
            <div class="contain-form">
                <div class="image">
                    <h3 class="text-black">Event me!!</h3>
                    <h2 class="text-black">Special Event!</h2>
                    <h5 class="text-black">Welcome to our Event! in this web app you can post and join events. But if you have account you just sign in your account.</h5>
                </div>
                <div class="form">
                    <form @submit.prevent="userLogin" class="list-form">
                        <div class="label-reg" >
                            <label  class="label text-black" for="">Sign in!</label>
                        </div>
                        
                        <div>
                            <input type="text" placeholder="EMAIL" class="form-control" v-model="email" id='input'>
                        </div>
                        <div>
                            <input type="password" placeholder="PASSWORD" class="form-control" v-model="password" id=input>
                        </div>
                        
                        <div>
                            <p class="text-danger ml-3 ">{{errorMessage}}</p>
                        </div>
                        <div class="p">
                            <router-link to="/rigister" class="text-black"> Please Register Account!</router-link>
                        </div>
                        <div class="button">
                            <button> Sign In </button>
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
    data() {
        return {
        userData: {},
        email: "",
        password: "",
        errorMessage: "",
        
        };
    },

    methods: {
        userLogin() {
        let userData = {
            email: this.email,
            password: this.password,
            
        };

        axios.post('/signin', userData)
        .then(res => {
            this.userData = res.data.user;
            localStorage.setItem('name', res.data.user.name);
            localStorage.setItem('id',res.data.user.id);
            localStorage.setItem('isNotHidden', true);
            this.$router.push('/category');
            this.errorMessage = '';
            this.$emit('isNotHidden', true);
        
        })
        .catch(error => {
            let statusCode = error.response.status;
            if(statusCode === 401) {
                this.errorMessage = 'Invalid data, please try again';
            }
        })
        }
    },
    
    };
</script>


<style scoped>
*{
    padding: 0;
    margin: 0;
}
section{
    background: rgb(163, 243, 223);
    width: 100%;
    height: 100%;
    
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
#input{
    width: 90%;
    padding-left: 15px;
    margin: 15px;
    height: 40px;
    background: rgb(143, 168, 164);
    color: rgb(255, 230, 0);
    border-radius:1% ;
}
.list-form{
    width: 350px;
    height: 500px;
    border-radius: 0px 10px 10px 0px;
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
    margin-top: 30px;
    border: none;
}
.label{
    margin-top: 60px;
}
.p{
    font-weight:bold ;
    margin-left: 15px;
}
.image{
    height: 500px;
    width: 350px;
    background-image: url("../../assets/flower.jpg");
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

img{
    margin: 5px;
    cursor: pointer;
}
</style>