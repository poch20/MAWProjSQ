
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



          <div class="card-footer">
            <div class="row">

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
                <a class="nav-link active show" href="#settings" data-toggle="tab">Form</a>
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
                <form enctype="multipart/form-data" method="POST" class="form-horizontal" @submit.prevent="formActionSubmitWillGoHere">

                  <div class="form-group">
                    <input type="text" placeholder="File Description" class="form-control"
                    name="descNameAttr"
                    v-model="fileName"
                    >

                    <input type="text" style="display:none" class="form-control"
                    name="fileNameRegExAttr"
                    v-model="RegExInMemoryData"
                    >

                  </div>

                  <div class="form-group">
                    <label for="UploadFile-IDAttr"  class="col-sm-2 control-label">
                      <i class="fas fa-file movie-o"></i> Create File
                    </label>

                    <div class="col-sm-12">
                      <input @change="modifyDataOfUploadedOfTypeFiles" type="file" ref="upFileRefVueJsAttr" name="fileNameAttr" id="UploadFile-IDAttr">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-12">
                      <!-- <button @click.prevent="addInfo" type="submit" class="btn btn-success">Submit</button> -->
                      <button type="submit" class="btn btn-primary">Create File</button>
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
      files: {},
      file: {},
      pagination: {},
      offset: 5,
      activeTab: 'image',
      isVideo: false,
      loading: false,
      formData: {},
      fileName: '',
      RegExInMemoryData: '',
      attachment: '',
      afterRequestIsSentToTheServerThisVariableWillStoreVueForValues: {},
      invoiceForm: new Spanish({
        id:'',
        Description:'',
        uploadFile:'',
      })
    }
  },//EMD data()
  methods:{
    readUploadedPhoto(){
      let readPhotoFromDB = (this.invoiceForm.UploadedFile.length > 200) ? this.invoiceForm.UploadedFile : "file_uploads/"+ this.invoiceForm.UploadedFile
      return readPhotoFromDB
    },
    /*for Getting the Data from the Database and displaying it here*/
    fetchMainTableForInvoiceStoreData(){
      //axios.get("api/profile").then(({data}) => (this.afterRequestIsSentToTheServerThisVariableWillStoreVueForValues = data.data))
      //axios.get("api/profile").then(({ data }) => (this.invoiceForm.fill(data)))
      //axios.get("api/keyOfMtMFs").then(({data}) => (this.invoiceForm.fill(data)))
      axios.get("api/keyOfMtMFs").then(({data}) => (this.formData = data.data))
    },

    callFileName(someText){
      return someText
    },

    modifyDataOfUploadedOfTypeFiles(eventTriggered){
      let chosenFile = eventTriggered.target.files[0]

      /*
      <div class="col-sm-12">
        <input @change="docuFile" type="file" id="UploadFile-IDAttr" class="form-input">
      </div>
      <div class="col-sm-12">
        <input @change="modifyDataOfUploadedOfTypeFiles()" type="file" ref="upFileRefVueJsAttr" name="fileNameAttr" id="UploadFile-IDAttr">
      </div>
      */

      if(chosenFile['size'] < 30111775){

        this.attachment = this.$refs.upFileRefVueJsAttr.files[0]; //meta data

        console.log(this.attachment)
        function projFileName(){
          let fullPath = document.getElementById('UploadFile-IDAttr').value;
          console.log(fullPath);
          if (fullPath) {
              var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
              var filename = fullPath.substring(startIndex);
              if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                  filename = filename.substring(1);
              }
              return filename
          }
        }
        let gungGong = this.callFileName(projFileName())
        this.RegExInMemoryData = gungGong
        console.log(this.RegExInMemoryData)

      } else {
        Swal.fire({
          title: "You are uploading more than 2 MB's",
          text: 'Oops...',
          icon: 'error',
          confirmButtonText: 'Close'
        })
      }


      //ES6 let

/*
      let reader = new FileReader()
      // before we change it to base64
      if(chosenFile['size'] < 10111775){
        console.log(chosenFile['size']);
        reader.onloadend = (chosenFile) => {
          //console.log('RESULT', reader.result);
          let consoleMe = this.invoiceForm.uploadFile = reader.result
        }
        reader.readAsDataURL(chosenFile)
      }
*/
    },

    editReplacePutOverwriteExistingFile_typeFileSubmitButton(){

    },

    formActionSubmitWillGoHere(){
      this.$Progress.start()
      let goodCactus = this.formData
      goodCactus = new FormData()
      goodCactus.append('descNameAttr', this.fileName)
      goodCactus.append('fileNameAttr', this.attachment)
      goodCactus.append('fileNameRegExAttr', this.RegExInMemoryData)

      //this.$Progress.start()
      axios.post('api/keyOfMtMFs', goodCactus, {headers: {'Content-Type': 'multipart/form-data'}} ).then(response => {
        this.resetForm()
        Swal.fire(
          'Good job!',
          'File Has Been Created',
          'success'
        )
        this.$Progress.finish()
      }).catch(error => {})

    },
    resetForm() {
        this.formData = {};
        this.fileName = '',
        this.attachment = '';
    },

  },

  created(){
    this.fetchMainTableForInvoiceStoreData()

    //custom event
    sendHTTPReqAfterEvryActionIsDone.$on('AfterCreate', () => {
      this.fetchMainTableForInvoiceStoreData()
    })

    //custom event
  },
}// export default END
</script>
