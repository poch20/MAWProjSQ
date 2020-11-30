
<style media="screen">
  .widget-user-header {
    background-position: center center;
    background-size: cover;
    height: 250px;
  }
</style>

<template>
  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-3">
        <div class="card card-widget widget-user">
          <!--Add the bg color to the header using any of the bg-* classes-->
          <div class="widget-user-header text-white" style="background-image:url('./img/user-cover.jpg')">
            <h3 class="widget-user-username"></h3>
            <h5 class="widget-user-desc">Web Developer</h5>
          </div>
          <div class="widget-user-image">
            <img class="img-circle" :src="readUploadedPhoto()" alt="User Avatar">
          </div>

          <div class="card-footer">
            <div class="row">
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">0</h5>
                  <span class="description-text">SALES</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">2</h5>
                  <span class="description-text">FOLLOWERS</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4">
                <div class="description-block">
                  <h5 class="description-header">0</h5>
                  <span class="description-text">PRODUCTS</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
      </div>


      <!-- tab -->

      <div class="col-md-12">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">

              <li class="nav-item">
                <a class="nav-link" href="#activity" data-toggle="tab">Preview Your Invoice Data</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active show" href="#settings" data-toggle="tab">Settings</a>
              </li>
            </ul>

          </div><!--/.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <!-- Activity Tab -->
              <div class="tab-pane" id="activity">
                <h3 class="text-center">Display User Activity</h3>
              </div>

              <!-- Setting Tab -->
              <div class="tab-pane active show" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputNameID" class="col-sm-2 control-label">
                      Name
                    </label>

                    <div class="col-sm-12">
                      <input v-model="profileForm.name" type="email" id="inputNameID" class="form-control" :class="{ 'is-invalid': profileForm.errors.has('name') }" placeholder="Name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmailID" class="col-sm-2 control-label">
                      Email
                    </label>

                    <div class="col-sm-12">
                      <input v-model="profileForm.email" type="email" id="inputEmailID" class="form-control" :class="{ 'is-invalid': profileForm.errors.has('email') }"  placeholder="Email">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputExperienceID" class="col-sm-2 control-label">
                      Biography
                    </label>

                    <div class="col-sm-12">
                      <textarea class="form-control" id="inputExperienceID" placeholder="Hello" :class="{ 'is-invalid': profileForm.errors.has('bio') }"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="photo-id-attr"  class="col-sm-2 control-label">
                      Profile Photo
                    </label>

                  </div>
                  <div class="form-group">
                    <label for="UploadFile-IDAttr"  class="col-sm-2 control-label">
                      <i class="fas fa-file movie-o"></i> Create File
                    </label>

                    <div class="col-sm-12">
                      <input @change="docuFile" type="file" id="UploadFile-IDAttr" class="form-input">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="passportID" class="col-sm-12 control-label">
                      Password (leave empty if not changing)
                    </label>

                    <div class="col-sm-12">
                      <input v-model="profileForm.password" type="passpord" class="form-control" :class="{ 'is-invalid': profileForm.errors.has('password') }" id="passportID" placeholder="Password">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-12">
                      <button @click.prevent="updateInfo" type="submit" class="btn btn-success">Update</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab content -->
          </div> <!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- end tabs -->
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return {
      profileForm: new Spanish({
        id:'',
        name:'',
        email:'',
        password:'',
        type:'',
        bio:'',
        photo:'',
        document_file:'',
      })
    }
  },
  mounted(){
    console.log('Component mounted.')
  },

  methods:{

    readUploadedPhoto(){

      let readPhotoFromDB = (this.profileForm.photo.length > 200) ? this.profileForm.photo : "img/profile/"+ this.profileForm.photo
      return readPhotoFromDB
    },

    updateInfo(){
      this.$Progress.start()
      this.profileForm.put('api/profile').then(() => {
        callWhateverYouWant.$emit('AfterCreate');
        this.$Progress.finish()
      }).catch(() => {
        this.$Progress.fail()
      })
    },
    updateProfilePhoto(img_file_event_when_done_selecting_an_image){


      //ES6 let
      let chosenFile = img_file_event_when_done_selecting_an_image.target.files[0]
      console.log(chosenFile);
      let reader = new FileReader()

      // before we change it to base64
      if(chosenFile['size'] < 2111775){
        console.log(chosenFile['size']);
        reader.onloadend = (chosenFile) => {
          //console.log('RESULT', reader.result);
          let consoleMe = this.profileForm.photo = reader.result

        }
        reader.readAsDataURL(chosenFile)
      } else {
        Swal.fire({
          title: "You are uploading more than 2 MB's",
          text: 'Oops...',
          icon: 'error',
          confirmButtonText: 'Close'
        })
      }

    },

    docuFile(eventTriggered){
      let chosenFile = eventTriggered.target.files[0]
      console.log(chosenFile);
      let reader = new FileReader()

      // before we change it to base64
      if(chosenFile['size'] < 10111775){
        console.log(chosenFile['size']);
        reader.onloadend = (chosenFile) => {
          //console.log('RESULT', reader.result);
          let consoleMe = this.profileForm.document_file = reader.result

        }
        reader.readAsDataURL(chosenFile)
      } else {
        Swal.fire({
          title: "You are uploading more than 2 MB's",
          text: 'Oops...',
          icon: 'error',
          confirmButtonText: 'Close'
        })
      }
    }
  },
  created(){
    axios.get("api/profile").then(({ data }) => (this.profileForm.fill(data)))
  }
}
</script>
