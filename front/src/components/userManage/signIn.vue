<template>
<section>
    <div class="register-form">
        <div class="nav"></div>
        <div class="contain-form">
            <div class="image">
                <h3>Event me!!</h3>
                <h2>Special Event!</h2>
                <h5>Welcome to our Event! in this web app you can post and join events. But if you have account you just sign in your account.</h5>
            </div>
            <div class="form">
                <form @submit.prevent="userLogin" class="list-form">
                    <div class="label-reg" >
                        <label  class="label" for="">Sign in!</label>
                    </div>
                    
                    <div>
                        <input type="text" placeholder="EMAIL" class="input" v-model="email">
                    </div>
                    <div>
                        <input type="password" placeholder="PASSWORD" class="input" v-model="password">
                    </div>
                    
                    <div>
                        <p class="text-danger ml-3">{{errorMessage}}</p>
                    </div>
                    <div class="p">
                        <router-link to="/rigister"> Please Register Account!</router-link>
                    </div>
                    <div class="button">
                        <button> Sign In </button>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Facebook_colored_svg_copy-128.png" style="width:40px; height:40px;" alt="">
                        <img src="https://cdn3.iconfinder.com/data/icons/social-icons-33/512/Telegram-128.png" style="width:40px; height:40px;" alt="">
                        <img src="https://cdn0.iconfinder.com/data/icons/social-media-circle-6/1024/instagram-128.png" style="width:42px; height:42px;" alt="">
                        <img src="https://cdn3.iconfinder.com/data/icons/2018-social-media-logotypes/1000/2018_social_media_popular_app_logo_skype-128.png" style="width:40px; height:40px;" alt="">
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
</template>

<script>

    
import axios from 'axios';
const url = "http://127.0.0.1:8000/api/signin";
export default {
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

      axios.post(url, userData)
      .then(res => {
        this.userData = res.data.user;
        this.$router.push('/nav');
        this.errorMessage = '';
        // console.log(this.userData);
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
.input{
    width: 90%;
    padding-left: 15px;
    margin: 15px;
    height: 40px;
    background: #000;
    color: rgb(255, 230, 0);
    border-radius:1% ;
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

img{
    margin: 5px;
    cursor: pointer;
}
</style>