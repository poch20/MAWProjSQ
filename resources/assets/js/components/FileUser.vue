<template>
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Stored Files</h3>

          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <!-- Bulk Form Submit -->
            <form enctype="multipart/form-data" method="POST" class="form-horizontal" @submit.prevent="bulkOptPreventFormVSubmit">
            <table class="table table-hover">
              <thead>
                <!-- bulk-opt interface design -->
                <div class="row">
                  <div class="col-sm-8">
                    <div class="row">
                      <div class="col-xs-4">
                        <div class="form-group">
                          <select
                          @change="customChangeSelecTagElem"
                          id=""
                          class="form-control"
                          name="selectTagNameAttrBulkOpts"
                          v-model="selecTagVMAttr"
                          >
                          <option v-for="cruDel in addInsInSelViaOptVFor" v-bind:value="{ id: cruDel.id, text: cruDel.name }">
                            {{ cruDel.name }}
                          </option>
                          </select>
                        </div>
                      </div>
                      <div class="col-xs-8">

                          <input type="submit"
                          name=""
                          value="Apply"
                          class="btn btn-danger"
                          >

                      </div>
                    </div>
                  </div>
                </div>
                <!-- bulk-opt interface design -->
                <tr>
                  <td>
                    <input type="checkbox"
                    id="select-all-boxes-inputTag-id-attrProps"
                    @click="select_all_via_check_box"
                    v-model="all_select"
                    >
                    <span> {{ all_select == true ? 'Uncheck All' : "Select All" }} </span>
                  </td>
                  <th>ID</th>
                  <th>Description</th>
                  <th>Uploads</th>
                  <th>Created @</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <tr v-for="vforVariableCompact in seenData.data" :key="vforVariableCompact.id">
                  <td>
                    <input type="checkbox"
                    v-model="bulkOptVMAttrVal"
                    @change="bulkOptAttrValModVScript($event, vforVariableCompact.id)"
                    class="inputClassAttrVal"
                    id=""
                    name="checkboxNameAttrVal[]"
                    ref="bulkOptAttrValVueRef"
                    :id="vforVariableCompact.id"
                    :value="`${vforVariableCompact.id}`"
                    :style="checkboxNameAttrVal_Modify_Attr.style"
                    >
                  </td>
                  <td>{{ vforVariableCompact.id }}</td>
                  <td>{{ vforVariableCompact.description }}</td>
                  <td>{{ vforVariableCompact.document_files }}</td>
                  <td>{{ vforVariableCompact.created_at | globalVueFilterHelper-Momentjs }}</td>
                  <td>

                    <a href="#" @click="downloadAndGetPDF(vforVariableCompact)">
                      <i class="fa fa-file-pdf-o"></i>
                    </a>
                    /
                    <a href="#" @click="forUpdateSharedReusableModalBoxVueMethod(vforVariableCompact)">
                      <i class="fa fa-edit blue"></i>
                    </a>
                    /
                    <a href="#" @click="deleteAssocFile(vforVariableCompact.id)">
                      <i class="fa fa-trash red"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
            </form>
            <!-- Bulk Form Submit -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <pagination :data="seenData" @pagination-change-page="laraVuePagi"></pagination>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- Twitter Boostrap Modal -->

    <div class="modal fade" id="print-preview-modal-box" tabindex="-1" role="dialog" aria-labelledby="readUploadedFiles" aria-hidden="true">

      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" v-show="!readFileMode" id="readUploadedFiles">Create</h5>
            <h5 class="modal-title" v-show="readFileMode" id="readUploadedFiles">Read Files</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div id="iframe-table" ref="iframeTableRef">HTML</div>
          <div class="myOwnIframe" id="iframe-wrapper" :style="iFrameVueManipAttr.wrapperStyle">
            <iframe
              v-if="isFrameLoaded"
              :src="iFrameVueManipAttr.src"
              :style="iFrameVueManipAttr.style"
              :height="iFrameVueManipAttr.style.height"
              :width="iFrameVueManipAttr.style.width"
              type="application/pdf"
              frameborder="0"
            ></iframe>
          </div>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  data(){
    return {
      RelationTable: {},
      NotAStringButANum:null,
      bulkOptVMAttrVal:[],
      isBulkOptAttrValOnVIf: false,
      selecTagVMAttr:'',
      all_select: false,
      //addInsInSelViaOptVFor:[{id:'', name:'Delete'}],
      addInsInSelViaOptVFor: [
        {id: '', name: 'Delete'},
      ],
      checkboxNameAttrValARR:'',
      checkboxNameAttrVal_Modify_Attr: {
        id: null,
        value: null,
        style: null,
        wrapperStyle: null,
      },
      readFileMode: false,
      isFrameLoaded: false,
      iFrameVueManipAttr: {
        src: `ReadGet/download/`,
        style: null,
        wrapperStyle: null,
      },
      seenData:{},
    }
  },
  methods:{
    getUser(){
        axios.get('api/customGetMtMFs')
             .then((response)=>{
               this.RelationTable = response.data.errors
               console.log(this.RelationTable);
             })
    },
    customChangeSelecTagElem(e){
      let key = e.target.value,
          value = e.target.textContent;
          if(e.target.options.selectedIndex > -1) {
          }
      let id = e.target.value;
      let nameVal = e.target.options[e.target.options.selectedIndex].text;
      this.selecTagVMAttr = nameVal
    },


    bulkOptAttrValModVScript(e, id){
      this.isBulkOptAttrValOnVIf = true
      if(this.isBulkOptAttrValOnVIf){
        let getSomeAttribute = e.target.getAttribute('value');

        let getElemById = document.getElementById(getSomeAttribute).value;
        this.addInsInSelViaOptVFor[0].id = getElemById
        this.checkboxNameAttrValARR = this.bulkOptVMAttrVal //string
        //console.log(this.checkboxNameAttrValARR);
        this.checkboxNameAttrValARR.forEach(element => id);
        let nameVal = this.selecTagVMAttr
        this.NotAStringButANum = id
      }
      //let bulkOptAttrValVueRef = this.$refs.bulkOptAttrValVueRef;
    },
    bulkOptPreventFormVSubmit(){
      let myIdNum = this.NotAStringButANum
      this.$Progress.start()
      //let goodCactus = this.bulkOptForm // Purpose is to have a newly created object with set instances as values
      let goodCactus = new FormData()
      goodCactus.append('selectTagNameAttrBulkOpts', this.selecTagVMAttr)
      goodCactus.append('checkboxNameAttrVal', this.checkboxNameAttrValARR)
      axios.post(`api/bulk-opts/${this.bulkOptVMAttrVal}`, goodCactus, {headers: {'Content-Type': 'multipart/form-data'}} ).then(response => {
        this.getUser()
        this.bulkOptVMAttrVal = []
        this.all_select == true ?
        this.all_select = false : this.all_select = true;
        this.resetForm()
        Swal.fire(
        ).then((result) => {
          Swal.fire(
            'Good job!',
            'File Has Been Deleted',
            'success'
          )
          sendHTTPReqAfterEvryActionIsDone.$emit('AfterDeleting');
        })
        this.$Progress.finish()
      }).catch(error => {
        Swal.fire("Failed!", "There was something wrong.", "warning")
      })

    },
    select_all_via_check_box(){
        if(this.all_select == false){
            this.all_select = true
            this.RelationTable.forEach(row => {
              this.bulkOptVMAttrVal.push(row.id)
            });
        }else{
            this.all_select = false
            this.bulkOptVMAttrVal = []
        }
    },
    downloadAndGetPDF(Value){
      Swal.fire({
        title: 'Get the file via downloading it',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Download File'
      }).then((result)=>{
        if(result.value){
          axios.get('ReadGet/', this.iFrameVueManipAttr.src, {headers: {'Content-Type': 'multipart/form-data'}} ).then(response => {
            let src = this.iFrameVueManipAttr.src+Value.document_files
            console.log(src);
            this.$Progress.start()
            this.readFileMode = true
            let vueFravue = this.$refs.iframeTableRef;
            this.isFrameLoaded = true
            this.iFrameVueManipAttr.src = src
            $('#print-preview-modal-box').modal('show')
            this.iFrameVueManipAttr.style = {
              position: 'absolute',
              width: window.innerWidth,
              height: window.innerHeight,
              top: -vueFravue.offsetTop + "px",
              left: -vueFravue.offsetLeft + "px",
            }
            this.iFrameVueManipAttr.wrapperStyle = {
              overflow: 'hidden',
              height: vueFravue.clientHeight + "px",
              width: vueFravue.clientWidth + "px",
            }
            Swal.fire(
              'Clicked',
              'File Clicked',
              'Requested'
            ).then((result)=>{
              this.resetForm()
            })

            this.$Progress.finish()
          }).catch(error => {
            Swal.fire(
              'Good job!',
              'File Has Not Been Downloaded',
              'success'
            ).then((result)=>{
              this.resetForm()
            })
              this.resetForm()
              Swal.fire("Failed!", "There was something wrong.", "warning")
              this.$Progress.fail()
          })
        }
      })
    },

    deleteAssocFile(id){
      console.log(id);
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        //send request to the server
        if(result.value){
          axios.delete('api/keyOfMtMFs/'+id).then(() => {
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
            sendHTTPReqAfterEvryActionIsDone.$emit('AfterDeleting');
          }).catch(() => {
            Swal.fire("Failed!", "There was something wronge.", "warning")
          })
        }
      })
    },

    resetForm() {
        this.iFrameVueManipAttr.src = `ReadGet/download/`
    },
    requestData(){
      axios.get("api/readDataMtMFTable").then(({data}) => (this.seenData = data))
    },
    laraVuePagi(page = 1){
      axios.get('api/readDataMtMFTable?page=' + page).then(response => {
        this.seenData = response.data;
      });
    }
  },

  created(){
    this.getUser()

    //custom event
    sendHTTPReqAfterEvryActionIsDone.$on('AfterDeleting', () => {
      this.requestData()
    })


    /* for search functionality and pagination request */
    sendHTTPReqAfterEvryActionIsDone.$on('LISTEN TO ME ONLY!! THIS IS A KEYWORD', () => {
      let query = this.$parent.searchVue
      axios.get('api/findAny?anyVar=' + query).then( (data) => {this.seenData = data.data} ).catch( () => {})
    })
    /* for search functionality and pagination request */

    /* v-for table data compact */
    this.requestData()
    /* v-for table data compact */
  }


}
</script>
