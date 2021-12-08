
<template>
  <header>
    <section>
      <h1>MyEvent</h1>
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
            +Create My Event
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
                    Create New My Event
                  </h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body">
                  <input
                    type="text"
                    placeholder="Enter New MyEvent..."
                  /><br /><br />
                  <input
                    type="file"
                    id="img"
                    name="img"
                    accept="image/*"
                  /><br /><br />
                  <textarea
                    rows="3"
                    cols="65"
                    name="comment"
                    form="usrform"
                    placeholder="Enter New here..."
                  ></textarea>
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
export default {
  data() {
    return {
      categories: [],
    };
  },
  // methods: {
  //     CreateCategory(){
  //         let data={}
  //         let url="";
  //         axios
  //           .post(url,data)
  //           .then(response=>{
  //               console.log(response.data)
  //           })
  //     },
  //   }
};
</script>
<style scoped>
.btn-add {
  background: #ffe836;
  color: #000000;
  font-family: Georgia, "Times New Roman", Times, serif;
  border-radius: 0px 15px 0px 15px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: auto;
}
.wrapper {
  /* display: flex; */
  margin-left: 1000px;
  font-size: 15px;
}
.modal-body {
  font-weight: normal;
  font-family: Calibri;
  color: blue;
}
.button-15 {
  background-image: linear-gradient(#42a1ec, #0070c9);
  border: 1px solid #0077cc;
  border-radius: 4px;
  box-sizing: border-box;
  color: #ffffff;
  cursor: pointer;
  direction: ltr;
  display: block;
  font-family: "SF Pro Text", "SF Pro Icons", "AOS Icons", "Helvetica Neue",
    Helvetica, Arial, sans-serif;
  font-size: 17px;
  font-weight: 400;
  letter-spacing: -0.022em;
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
  opacity: 0.3;
}

.button-15:hover {
  background-image: linear-gradient(#51a9ee, #147bcd);
  border-color: #1482d0;
  text-decoration: none;
}

.button-15:active {
  background-image: linear-gradient(#3d94d9, #0067b9);
  border-color: #006dbc;
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
.modal-title {
  justify-content: center;
  align-items: center;
  margin: auto;
  margin-left: 25%;
  font-weight: bold;
}
textarea {
  width: 100%;
  border: none;
  border-bottom: solid #ebd1c9 2px;
  font-size: 20px;
  font-weight: 800;
  color: #004f6c;
}
h1 {
  margin-top: 0px;
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