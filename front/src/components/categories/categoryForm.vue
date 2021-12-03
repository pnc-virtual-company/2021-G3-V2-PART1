
<template>
  <header>
    <section>
        
            

    </section>
    <div class="wrapper">
      <!--================================|-NAVBAR-RIGHT-|================================-->
      <div class="navbar-right">
        <div>
          <button
            class="btn-add ms-1 h-50 mt-2"
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#staticBackdrop"
          >
            +Create Categories
          </button>
        </div>
        <!--================================|-BOOTSTRAP-CARD-|================================-->
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-1 ms-2 me-2 mb-4">
          <!--================================|-MODAL-|================================-->
          <div
            class="modal fade"
            id="staticBackdrop"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="staticBackdropLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">
                    Create New Categories
                  </h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body">
                  <input type="text" placeholder="Enter New Categories...">
                </div>
                <div class="modal-footer">
                   <button class="button-15" role="button">Create</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>
<script>
export default ({
    data() {
        return{
           events:[],

        }
    },
    // methods: {
    //     createMyevent(){
    //       let data={}
    //       let url =""
    //       axios
    //         .post(url,data)
    //         .then(response=>{
    //           console.log(response.data)
    //         })
    //     }
    // }
})
</script>
<style scoped>

.btn-add{
  background: #ffe836;
  color: #000000;
  font-family: Georgia, 'Times New Roman', Times, serif;
  border-radius: 0px 15px 0px 15px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: auto;

}
.wrapper{
  /* display: flex; */
  margin-left: 1000px;
  font-size: 15px;

}
.modal-body{
  font-weight: normal;
  font-family: Calibri;
  color:blue;

}
.button-15 {
  background-image: linear-gradient(#42A1EC, #0070C9);
  border: 1px solid #0077CC;
  border-radius: 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  direction: ltr;
  display: block;
  font-family: "SF Pro Text","SF Pro Icons","AOS Icons","Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 17px;
  font-weight: 400;
  letter-spacing: -.022em;
  line-height: 1.47059;
  min-width: 30px;
  overflow: visible;
  padding: 4px 15px;
  text-align: center;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  font-weight: bold;
  margin-right: 175px;
}
.button-15:disabled {
  cursor: default;
  opacity: .3;
}

.button-15:hover {
  background-image: linear-gradient(#51A9EE, #147BCD);
  border-color: #1482D0;
  text-decoration: none;
}

.button-15:active {
  background-image: linear-gradient(#3D94D9, #0067B9);
  border-color: #006DBC;
  outline: none;
}

.button-15:focus {
  box-shadow: rgba(131, 192, 253, 0.5) 0 0 0 3px;
  outline: none;
}

.btn:hover {
  background: #3c0f01;
  color: white;
}
.modal-title{
  justify-content: center;
  align-items: center;
  margin: auto;
  margin-left: 25%;
  font-weight: bold;  
}
/* =================|-MODAL-|=================*/
.modal-dialog {
  background: #004f6c;
}
.modal-header h5 {
  font-size: 20px;
  font-weight: 900;
}
.modal-body input {
  width: 100%;
  border: none;
  border-bottom: solid #ebd1c9 2px;
  font-size: 20px;
  font-weight: 800;
  color: #004f6c;
}
.modal-body ::placeholder {
  color: #004f6c;
}
@media (max-width: 880px) {
  .wrapper {
    display: block;
  }
  
}
</style>