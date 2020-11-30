<template>
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Employee History Invoice Recorded Data</h3>

            <div class="card-tools">
              <button class="btn btn-success" @click="forCreateSharedReusableModalBoxVueMethod"><i class="fas fa-user-plus fa-fw"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Type</th>
                  <th>Registered @</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <tr v-for="vforVariableCompact in seenData.data" :key="vforVariableCompact.id">
                  <td>{{ vforVariableCompact.id }}</td>
                  <td>{{ vforVariableCompact.name }}</td>
                  <td>{{ vforVariableCompact.email }}</td>
                  <td>{{ vforVariableCompact.type | globalVueFilterHelper}}</td>
                  <td> {{ vforVariableCompact.created_at | globalVueFilterHelper-Momentjs }}

                  <td>

                    <a href="#" @click="readAndPrintPDF(vforVariableCompact.id)">
                      <i class="fa fa-file-pdf-o"></i>
                    </a>
                    /
                    <a href="#" @click="forUpdateSharedReusableModalBoxVueMethod(vforVariableCompact)">
                      <i class="fa fa-edit blue"></i>
                    </a>
                    /
                    <a href="#" @click="deleteUser(vforVariableCompact.id)">
                      <i class="fa fa-trash red"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
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
    <div class="modal fade" id="editUserOpenModalBoxContent" tabindex="-1" role="dialog" aria-labelledby="updateUserLabelIdTag" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" v-show="!editMode" id="updateUserLabelIdTag">Create</h5>
            <h5 class="modal-title" v-show="editMode" id="updateUserLabelIdTag">Update User's Info</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form @submit.prevent="editMode ? formUpdateMethodAfterSubmit() : this_will_create_an_instanceVAL_from_the_dbtable_specified_tobe_stored_on_toThat_dbtable()">
            <div class="modal-body">
              <div class="form-group">
                <input v-model="userForm.name" type="text" name="name" placeholder="Name" class="form-control" :class="{ 'is-invalid': userForm.errors.has('name') }">
                <has-error :form="userForm" field="name"></has-error>
              </div>

              <div class="form-group">
                <input v-model="userForm.email" type="email" name="email" placeholder="Email Address" class="form-control" :class="{ 'is-invalid': userForm.errors.has('email') }">
                <has-error :form="userForm" field="email"></has-error>
              </div>
              <div class="form-group">
                <textarea v-model="userForm.bio" name="bio" id="bio" placeholder="Short bio for user (Optional)" class="form-control" :class="{ 'is-invalid': userForm.errors.has('bio') }"></textarea>
                <has-error :form="userForm" field="bio"></has-error>
              </div>


              <div class="form-group">
                <select name="type" v-model="userForm.type" id="type" class="form-control" :class="{ 'is-invalid': userForm.errors.has('type') }">
                  <option value="">Select User Role</option>
                  <option value="admin">Admin</option>
                  <option value="user">Standard User</option>
                  <option value="author">Author</option>
                </select>
                <has-error :form="userForm" field="type"></has-error>
              </div>

              <div class="form-group">
                <input v-model="userForm.password" type="password" name="password" id="password" class="form-control" :class="{ 'is-invalid': userForm.errors.has('password') }" placeholder="password">
                <has-error :form="userForm" field="password"></has-error>
              </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button v-show="editMode" type="submit" class="btn btn-success">Update</button>
                <button v-show="!editMode" type="submit" class="btn btn-primary">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        editMode: false,
        seenData: {},
        userForm: new Spanish({
          id: '',
          name: '',
          email: '',
          password: '',
          type: '',
          bio: '',
          photo: '',
        })
      }
    },
    methods: {
      formUpdateMethodAfterSubmit() {
        this.$Progress.start()
        //console.log("Editing Data")
        Swal.fire({
          title: 'Update User Data Information?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Update NOW!'
        }).then((result)=>{
          console.log('down result output');
          console.log(result)
          if(result.value){
            this.userForm.put('api/user/'+this.userForm.id).then(() => {
              $('#editUserOpenModalBoxContent').modal('hide')
              Swal.fire(
                'Good job!',
                'User Information Has Been Updated',
                'success'
              )
              this.$Progress.finish()
              sendHTTPReqAfterEvryActionIsDone.$emit('AfterCreate');
            }).catch(() => {
              Swal.fire("Failed!", "There was something wronge.", "warning")
              this.$Progress.fail()
            })
          }
        })
      },

      readAndPrintPDF(id){
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
            this.userForm.get('api/user/'+id).then(() => {
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
              sendHTTPReqAfterEvryActionIsDone.$emit('AfterCreate');
            }).catch(() => {
              Swal.fire("Failed!", "There was something wronge.", "warning")
            })
          }
        })
      },

      forUpdateSharedReusableModalBoxVueMethod(user) {
        console.log(user);
        this.editMode = true
        this.userForm.reset()
        $('#editUserOpenModalBoxContent').modal('show')

        console.log(this.userForm.fill(user));

      },

      forCreateSharedReusableModalBoxVueMethod() {
        this.editMode = false
        this.userForm.reset()
        $('#editUserOpenModalBoxContent').modal('show')
      },

      deleteUser(id){
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
            this.userForm.delete('api/user/'+id).then(() => {
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
              sendHTTPReqAfterEvryActionIsDone.$emit('AfterCreate');
            }).catch(() => {
              Swal.fire("Failed!", "There was something wronge.", "warning")
            })
          }
        })
      },

      this_will_fetch_the_table_from_the_db() {
        axios.get("api/user").then(({data}) => (this.seenData = data))
      },
      laraVuePagi(){
        axios.get('api/user?page=' + page).then(response => {
          this.seenData = response.data;
        });
      },
      this_will_create_an_instanceVAL_from_the_dbtable_specified_tobe_stored_on_toThat_dbtable() {
        this.$Progress.start()
        this.userForm.post('api/user')

        //condition
        .then( () => {

        //custom event
        sendHTTPReqAfterEvryActionIsDone.$emit('AfterCreate')
        //custom event

        $('#editUserOpenModalBoxContent').modal('hide')

        // https://sweetalert2.github.io/ Functionality Library
        Toast.fire({
          icon: 'success',
          title: 'User Created Successfully'
        })
        // https://sweetalert2.github.io/ Functionality Library

        this.$Progress.finish()
      }).catch( () => {

      })
    }//this_will_create_an_instanceVAL() END
    },// methods: END

    created() {


      //custom event
      sendHTTPReqAfterEvryActionIsDone.$on('AfterCreate', () => {
        this.this_will_fetch_the_table_from_the_db()
      })

      
      sendHTTPReqAfterEvryActionIsDone.$on('LISTEN TO ME ONLY!! THIS IS A KEYWORD', () => {
        let query = this.$parent.searchVue
        axios.get('api/findAnyUsersOnAdmin?anyVar=' + query).then( (data) => {this.seenData = data.data} ).catch( () => {})
      })

      this.this_will_fetch_the_table_from_the_db();
      //custom event
    }//created() END
  }//export default END
</script>
