<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=deivice-width, initial-scale=1.0">
    <title>CMS Project 1 Note</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Jquery UI - css -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/blitzer/jquery-ui.css">


    <style media="screen">
      html {
        box-sizing: border-box;
      }
      *, *::before, *::after {
        box-sizing: inherit;
      }

      #table-of-contents-fixed {
        position: fixed;
        bottom: 10px;
        left: 40px;
      }
        #table-of-contents-fixed ul {
          list-style: none;
        }

    </style>

  </head>
  <body>

    <h1 class="top_title">Let's Build a Multi-Purpose Laravel + Vue Application</h1>
    <div id="table-of-contents-fixed">
      <ul>
        <ul>
          <li id=""><span class="important">Sections</span></li>
          <a href="#section1-inspire"><li><span class="important">===Sec 1</span></li></a>
          <a href="#section2-inspire" id=""><li><span class="important">===Sec 6</span></li></a>
          <a href="#section15-inspire"><li><span class="important">===Sec 15</span></li></a>
          <a href="#section16-inspire" id=""><li><span class="important">===Sec 16</span></li></a>
          <a href="#section17-inspire" id=""><li><span class="important">===Sec 17</span></li></a>
          <a href="#section18-inspire" id=""><li><span class="important">===Sec 18</span></li></a>
          <a href="#section19-inspire" id=""><li><span class="important">===Sec 19</span></li></a>
          <a href="#section20-inspire" id=""><li><span class="important">===Sec 20</span></li></a>
          <a href="#section21-inspire" id=""><li><span class="important">===Sec 21</span></li></a>
          <a href="#section22-inspire" id=""><li><span class="important">===Sec 22</span></li></a>
          <a href="#section23-inspire" id=""><li><span class="important">===Sec 23</span></li></a>
          <a href="#section24-inspire" id=""><li><span class="important">===Sec 24</span></li></a>
          <a href="#section25-inspire" id=""><li><span class="important">===Sec 25</span></li></a>
          <a href="#section26-inspire" id=""><li><span class="important">===Sec 26</span></li></a>
          <a href="#section27-inspire" id=""><li><span class="important">===Sec 27</span></li></a>
          <a href="#section28-inspire" id=""><li><span class="important">===Sec 28</span></li></a>
          <a href="#section29-inspire" id=""><li><span class="important">===Sec 29</span></li></a>
          <a href="#section30-inspire" id=""><li><span class="important">===Sec 30</span></li></a>
        </ul>
      </ul>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle">Section 1. Installing AdminLTE 3 on Laravel 5.7 and Bootstrap 4</h1>
        <div class="sectionContainerDivs" id="section1-inspire">
          <p>
            <h1 class="sectionLectures">===Installing AdminLTE 3 on Laravel 5.7 and Bootstrap 4===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>:

              Full Reset of NPM
              rm -rf node_modules
              rm package-lock.json yarn.lock
              npm cache clear --force
              npm install


                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1629697460008014137/080C1F463913FD83C657734A696B0A6EA9D78363/" alt="">


                  <span class="step">1</span>. <b class="subStep">webpack.mix.js</b>
                    mix.js('resources/js/app.js', 'public/js')
                        .<b class="greenMarkerH">sass('resources/sass/app.scss', 'public/css',</b> [
                            //
                        ]);
                    then create a folder in resources/sass/app.scss
                  <span class="step">2</span>. <b class="subStep">webpack.mix.js</b>
                    window._ = require('lodash');

                    /**
                     * We'll load the axios HTTP library which allows us to easily issue requests
                     * to our Laravel back-end. This library automatically handles sending the
                     * CSRF token as a header based on the value of the "XSRF" token cookie.
                     */

                    try {
                      window.Popper = require('popper.js').default;
                      window.$ = window.jQuery = require('jQuery');

                      require('bootstrap');
                    } catch (e) {}

                    window.axios = require('axios');

                    window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
                  <span class="step">1</span>. <b class="subStep">php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"</b>
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1629697460008158317/1E2981152B4905F8F8706580DE9BFA9444A21C5A/" alt="">
                    Link Source:https://github.com/laravel/fortify

                  <span class="step">1</span>. <b class="subStep">Adjust Database</b>
                    The env file then migrate it

                  <span class="step">1</span>. <b class="subStep">composer create-project --prefer-dist laravel/laravel blog-vue</b>
                      npm install --save @fortawesome/fontawesome-free or npm i @fortawesome/fontawesome-free
                      npm i bootstrap
                      npm i jquery
                      npm i laravel-vue-pagination
                      npm i popper.js@1.14.3 or npm i @popperjs/core
                      npm i vue
                      npm i vue-progressbar
                      npm install vue-router
                  <span class="step">1</span>. <b class="subStep">npm install admin-lte@v3.0.0-alpha.2 --save</b>

                  <span class="step">2</span>. <b class="subStep">DB_DATABASE=cmspdfproj</b>

                  <span class="step">3</span>. <b class="subStep">php artisan make:auth</b>

                  <span class="step">4</span>. <b class="subStep">resources\views\Layouts\master.blade.php</b>
                  <a href="https://www.facebook.com/groups/298553727448221/permalink/657034968266760/">Source Code: master.blade.php</a>
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1629697274817723561/C5FB3861F699BEB55C39F2C69A5EDCE530A1D2D8/" alt="">
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1629697274817734416/1ECAC98652F494F9BBECE5B78D7E2E87DCE23A85/" alt="">
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1629697274817742783/AB125E9B2DF71280B2F3AAF584FFE441A8FE4C29/" alt="">


            </pre>
          </p>
        </div>
      </section>
    </div>

    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle">Section 6-Configure Vue Router to Laravel 5.7 and Admin LTE 3</h1>
        <div class="sectionContainerDivs" id="section2-inspire">
          <p>
            <h1 class="sectionLectures">===6-Configure Vue Router to Laravel 5.7 and Admin LTE 3===</h1>
            <pre>
              Errors
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1629697460009555371/8C7CB5F1E9E96977EF8A1B13BAF0D58B71CF7F26/" alt="">
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1629697460009559583/9F0C877F9C282D76A8C70AB823FED632D2847C61/" alt="">
              <strong class="combinedLecturesStrongTags">Step 1</strong>:
                  https://router.vuejs.org/installation.html
                  npm install vue-router


              <strong class="combinedLecturesStrongTags">Step 2</strong>:<b><em class="subStep">resources\assets\js\app.js</em></b>
                  /**
                   * First we will load all of this project's JavaScript dependencies which
                   * includes Vue and other libraries. It is a great starting point when
                   * building robust, powerful web applications using Vue and Laravel.
                   */

                  require('./bootstrap');

                  window.Vue = require('vue'); -&gt; <b class="greenMarkerH">import Vue from 'vue'</b>

                  <b class="greenMarkerH">import VueRouter from 'vue-router'</b>

                  <b class="greenMarkerH">Vue.use(VueRouter)</b>

                  /**
                   * Next, we will create a fresh Vue application instance and attach it to
                   * the page. Then, you may begin adding components to this application
                   * or customize the JavaScript scaffolding to fit your unique needs.
                   */


                  Vue.component('example-component', require('./components/ExampleComponent.vue'));

                  const app = new Vue({
                      el: '#app',
                  });


              <strong class="combinedLecturesStrongTags">Step 3</strong>:<b><em class="subStep">resources\assets\js\components\Profile.vue</em></b>
                  Delete this file and create our own



              <strong class="combinedLecturesStrongTags">Step 4</strong>:<b><em class="subStep">Recompile/compile</em></b>
                  npm run watch
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1629697460009606575/5923ABF06F9B39D5BB69B9FC77BD1EBB8BE53DD9/" alt="">



              <strong class="combinedLecturesStrongTags">Step 5</strong>:<b><em class="subStep">Route views in master template</em></b>
                  https://router.vuejs.org/guide/ pull one of the component and display it in <b class="greenMarkerH">&lt;router-view>&lt;/router-view></b>

              <strong class="combinedLecturesStrongTags">Step 6</strong>:<b><em class="subStep">resources\views\layouts\master.blade.php</em></b>
                  &lt;div class="content-wrapper">

                    <!-- Main content -->
                    &lt;div class="content">
                      &lt;div class="container-fluid">
                        <b class="greenMarkerH">&lt;router-view>&lt;/router-view></b>
                      &lt;/div><!-- /.container-fluid -->
                    &lt;/div>
                    <!-- /.content -->
                  &lt;/div>
                  <!-- /.content-wrapper -->


                <strong class="combinedLecturesStrongTags">Step 7</strong>:<b><em class="subStep">resources\assets\js\app.js</em></b> Configure Javascripts
                    require('./bootstrap');


                    window.Vue = require('vue');

                    import VueRouter from 'vue-router'

                    Vue.use(VueRouter)


                    <b class="greenMarkerH">const/let routes</b> = [
                      { path: '/<b class="greenMarkerH">dashboard</b>', component: require('./components/<b class="greenMarkerH">Dashboard.vue</b>') },
                      { path: '/<b class="greenMarkerH">profile</b>', component: require('./components/<b class="greenMarkerH">Profile.vue</b>') }
                    ]

                    /**
                     * Next, we will create a fresh Vue application instance and attach it to
                     * the page. Then, you may begin adding components to this application
                     * or customize the JavaScript scaffolding to fit your unique needs.
                     */


                    Vue.component('example-component', require('./components/ExampleComponent.vue'));

                    const app = new Vue({
                        el: '#app',
                    });
                <strong class="combinedLecturesStrongTags">Step 8</strong>:<b><em class="subStep">resources\assets\js\components\Dashboard.vue</em></b>
                    &lt;template>
                      &lt;div class="container">
                        &lt;div class="row justify-content-center">
                          &lt;div class="col-md-8">
                            &lt;div class="card card-default">
                              &lt;div class="card-header">Dashboard Component&lt;/div>

                              &lt;div class="card-body">

                              &lt;&lt;div>
                            &lt;/div>
                          &lt;/div>
                        &lt;/div>
                      &lt;/div>
                    &lt;/template>

                    &lt;script>
                      export default {
                        mounted() {
                          console.log('Component mounted.')
                        }
                      }
                    &lt;/script>

                    Same with <b class="greenMarkerH">Profile.vue</b>
                    &lt;div class="card-header">Profile Component&lt;/div>

                <strong class="combinedLecturesStrongTags">Step 9</strong>:<b><em class="subStep">resources\assets\js\app.js</em></b>
                    let routes = [
                      { path: '/dashboard', component: require('./components/Dashboard.vue') },
                      { path: '/profile', component: require('./components/Profile.vue') }
                    ]

                    <b class="greenMarkerH">const router = new vueRouter({</b>
                      routes // short for `routes: routes`
                    })
                    Vue.component('example-component', require('./components/ExampleComponent.vue'));

                    const app = new Vue({
                        el: '#app',
                        <b class="greenMarkerH"></b>
                    });
                <strong class="combinedLecturesStrongTags">Step 10</strong>:<b><em class="subStep">resources\assets\js\app.js</em></b>
                see this
                const app = new Vue({
                    <b class="greenMarkerH">el: '#app',</b>
                    router
                });

                go to master layout and add an id
                &lt;div class="wrapper"" <b class="greenMarkerH">id="app"</b>>


            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle">Section 7-Detect Active Menu in Vue Router and Laravel Plus HTML5 History Mode</h1>
        <div class="sectionContainerDivs ">
          <p>
            <h1 class="sectionLectures">===7-Detect Active Menu in Vue Router and Laravel Plus HTML5 History Mode===</h1>
            <pre>

              <strong class="combinedLecturesStrongTags">Step 1</strong>:resources\assets\js\app.js
                  const router = new VueRouter({
                    mode: 'history',, <a href="https://dev.to/cguttweb/vue-router-1a09">Source to study further</a>
                    routes
                  })
                  More references:https://www.knowyourstack.com/vuejs/


              <strong class="combinedLecturesStrongTags">Step 2</strong>:routes\web.php
                  Route::get('/', function () {
                    return view('welcome');
                  })

                  Auth::routes();

                  Route::get('/home', 'HomeController@index')->name('home');
                  Route::get('{path}','HomeController@index')->where( 'path', '<b class="error">([A-z\d-/_.]+)?</b>' );<b class="fixError"><a href="https://stackoverflow.com/questions/17346591/preg-match-with-php-compilation-failed">This works for me</a></b>


              <strong class="combinedLecturesStrongTags">Step 3</strong>:resources\views\layouts\master.blade.php
                 &lt;a href="#" <b class="greenMarkerH">He remove all the class that has this</b> -&gt; class="<b class="greenMarkerH">nav-link active</b>">
                 <img style="width:45.9vw" src="https://steamuserimages-a.akamaihd.net/ugc/1549758863560593207/F583AA5319EC0D8F227FD80AF9372641568FBAAC/" alt="">
                 <img style="width:45.9vw" src="https://steamuserimages-a.akamaihd.net/ugc/1549758863560599793/09EECF9EF2924E09BA87B4A1E275848F0E474BF9/" alt="">


              <strong class="combinedLecturesStrongTags">Step 3</strong>:resources\assets\sass\app.scss
                Add this
                .router-link-exact-active {
                  background-color: #C1666B;
                  color: #E4DFDA !important;
                }



            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle">Section 8-Custom Color for Font Awesome Icons and How Logout Works in Laravel</h1>
        <div class="sectionContainerDivs ">
          <p>
            <h1 class="sectionLectures">===8-Custom Color for Font Awesome Icons and How Logout Works in Laravel===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>:

            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle">Section 9-Create User Managment Component in Vue and Laravel</h1>
        <div class="sectionContainerDivs ">
          <p>
            <h1 class="sectionLectures">===9-Create User Managment Component in Vue and Laravel===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>:

            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle">Section 10-Display Users in Table and Modal Window for Creating new User in Laravel and Vue</h1>
        <div class="sectionContainerDivs ">
          <p>
            <h1 class="sectionLectures">===10-Display Users in Table and Modal Window for Creating new User in Laravel and Vue===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>:
                  npm install admin-lte@v3.0.0-alpha.2


            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle">Section 11-Using VForm for Back-end Error Handling in Laravel and Vuejs</h1>
        <div class="sectionContainerDivs ">
          <p>
            <h1 class="sectionLectures">===11-Using VFrom for Back-end Error Handling in Laravel and Vuejs===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>:
                  <a href="https://github.com/cretueusebiu/vform">Source Download</a>
                  <a href="https://laracasts.com/series/learn-vue-2-step-by-step">Udemy-Like</a>

            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle">Section 12-API Resource Controller in Laravel 5.7 with Vuejs</h1>
        <div class="sectionContainerDivs ">
          <p>
            <h1 class="sectionLectures">===12-API Resource Controller in Laravel 5.7 with Vuejs===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>: <b>resources\assets\js\components\<em class="important">Users.Vue</em></b>
                  &lt;form @submit.prevent="<b class="greenMarkerH">createUser</b>">
                    &lt;div class="modal-body">
                  &lt;/form>



              <strong class="combinedLecturesStrongTags">Step 2</strong>: <b>resources\assets\js\components\<em class="important">Users.Vue</em></b>
                  &lt;script>
                    export default {
                      data() {
                        return {
                          form: new Form({
                            name: '',
                            email: '',
                            password: '',
                            type: '',
                            bio: '',
                            photo: '',
                          })
                        }
                      },
                      <b class="greenMarkerH">
                      methods: {
                        createUser() {
                          this.form.post('<b class="greenMarkerH">api</b>/user');
                        }
                      },
                      </b>
                      mounted() {
                        console.log('Component mounted.')
                      }
                    }
                  &lt;/script>




              <strong class="combinedLecturesStrongTags">Step 3</strong>: <b>routes\<em class="important">api.php</em></b>
                  This was done and setup by 7.x/authentication <b class="takeNote">NOTE</b>: <em class="greenMarkerH">compose require laravel/ui > php artisan ui vue --auth or laravel new blog --auth</em>
                  Route::middleware('auth:<b class="greenMarkerH">api</b>')->get('/user', function (Request $request) {
                      return $request->user();
                  });




              <strong class="combinedLecturesStrongTags">Step 4</strong>: <b>~/.composer/vendor/bin directory in your PATH (or C:\%HOMEPATH%\AppData\Roaming\Composer\vendor<em class="important">Any Terminal Command Prompt</em></b>
                  php artisan make:controller <b class="greenMarkerH">API/UserController --api</b>





              <strong class="combinedLecturesStrongTags">Step 5</strong>: <b>app\Http\Controllers\API\<em class="important">UserController.php</em></b>




              <strong class="combinedLecturesStrongTags">Step 6</strong>: <b>routes\<em class="important">api.php</em></b>
                  1.Route::apiResource('users', '<b class="greenMarkerH">API\UserController</b>');

                  <b class="step">2</b>:php artisan route:list

                  <b class="step">3 This is a fix</b>:Route::apiResources(['user' => '<b class="greenMarkerH">API\UserController</b>']);

                  In Laravel 8 make sure to put this on routes api and web.php
                  use App\Http\Controllers\API\NameOfYourController;



            </pre>
          </p>
        </div>
      </section>
    </div>

    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle">Section 13-Insert User Data to Database Using Axios in Laravel 5.7 and Vue</h1>
        <div class="sectionContainerDivs ">
          <p>
            <h1 class="sectionLectures">===13-Insert User Data to Database Using Axios in Laravel 5.7 and Vue===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>: <b>app\Http\Controllers\API\<em class="important">UserController.php</em></b>
                  <b class="step">1</b>:
                  public function store(Request $request) {
                    //return ['message' => 'I have your data']; Testing only
                    return $request->all();
                  }


              <strong class="combinedLecturesStrongTags">Step 2</strong>: <b><em class="important">Terminal Cmd Prompt</em></b>
                  npm run watch

                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1549758863564741770/2FC84F6DF083572F6B2EE4D6873A92B265F3D733/" alt="">
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1549758863565634033/2A916D1F001053C770FF85A199CB2F72908DF199/" alt="">



              <strong class="combinedLecturesStrongTags">Step 3</strong>: <b>app\Models\<em class="important">User.php</em></b>
                  protected $fillable = [
                      'name', 'email', 'password', 'bio', 'photo', 'type'
                  ];
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1549758863564753378/28812B7EFCAF190AF5ED14B5972567FBC089F9F2/" alt="">


              <strong class="combinedLecturesStrongTags">Step 4</strong>: <b>app\Http\Controllers\API\<em class="important">UserController.php</em></b>
                  <b class="step">1</b>: use App\User;

                  <b class="step">2</b>: use Illuminate\Support\Facades\Hash;


                  <b class="step">3</b>:
                  public function store(Request $request) {
                    return User::create([
                      'name' => $request['name'],
                      'email' => $request['email'],
                      'type' => $request['type'],
                      'bio' => $request['bio'],
                      'photo' => $request['photo'],
                      'password' => Hash::make($request['password']),
                    ]);

                  }


            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle">Section 14-😇 Nice Server Validation with Laravel and Vue js (handle with vForm)</h1>
        <div class="sectionContainerDivs ">
          <p>
            <h1 class="sectionLectures">===14-😇 Nice Server Validation with Laravel and Vue js (handle with vForm)===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>: <b>app\Http\Controllers\API\<em class="important">UserController.php</em></b>
                  <b class="step">1</b>: use App\User;

                  <b class="step">2</b>: use Illuminate\Support\Facades\Hash;


                  <b class="step">3</b>:
                  public function store(Request $request) {

                    <b class="greenMarkerH">
                    $this->validate($request), [
                      'name' => 'required|string|max:191',
                      'email' => 'required|string|email|max:191|unique:users',
                      'password' => 'required|string|min:6',
                    ]
                    </b>


                    return User::create([
                      'name' => $request['name'],
                      'email' => $request['email'],
                      'type' => $request['type'],
                      'bio' => $request['bio'],
                      'photo' => $request['photo'],
                      'password' => Hash::make($request['name']),
                    ]);

                  }


            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle">Section 15-Display Users from Database in Table Using Axios in Laravel and Vue</h1>
        <div class="sectionContainerDivs" id="section15-inspire">
          <p>
            <h1 class="sectionLectures">===15-Display Users from Database in Table Using Axios in Laravel and Vue===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>: <b>app\Http\Controllers\API\<em class="important">UserController.php</em></b>
                  public function index () {
                    return User::latest()->paginate(10);
                  }
              <strong class="combinedLecturesStrongTags">Step 2</strong>: <b>resources\assets\js\components\<em class="important">Users.vue</em></b>

                    <b class="step">1</b>:
                        &lt;thead>
                          &lt;tr>
                            &lt;th>ID&lt;/th>
                            &lt;th>Name&lt;/th>
                            &lt;th>Email&lt;/th>
                            &lt;th>Type&lt;/th>
                            &lt;th>Registered @&lt;/th>
                            &lt;th>Modify&lt;/th>
                          &lt;/tr>
                        &lt;/thead>
                        &lt;tbody>
                          &lt;tr v-for="user in users" :key="user.id">
                            &lt;td>&#123;&#123; user.id }}&lt;/td>
                            &lt;td>&#123;&#123; user.name }}&lt;/td>
                            &lt;td>&#123;&#123; user.email }}&lt;/td>
                            &lt;td>&#123;&#123; user.type }}&lt;/td>
                            &lt;td>&#123;&#123; user.created_at }}&lt;/td>

                    <b class="step">2</b>:
                    &lt;script>
                      export default {
                        data() {
                          return {
                            <b class="greenMarkerH">users: {</b>

                            <b class="greenMarkerH">},</b>
                            form: new Form({
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
                        <b class="greenMarkerH">loadUsers() {</b>
                          <b class="error">axios.get("api/user").then(({ data }) => (this.users = data))</b>
                          <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048737247581/6B197A577A96057E59A9417AA4AB662F20941904/" alt="">
                          <b class="greenMarkerH">axios.get("api/user").then(({ data }) => (this.users = data.data))</b>
                        <b class="greenMarkerH">},</b>
                        createUser() {
                            this.form.post('api/user')
                          }
                        },
                        mounted to <b class="greenMarkerH">created()</b> {
                          <b class="greenMarkerH">this.loadUsers();</b>
                        }
                      }
                    &lt;/script>

            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle" id="section16-inspire">Section 16-Global Vuejs Filters and Momentjs Instead of Carbon in Laravel and Vue</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===16-Global Vuejs Filters and Momentjs Instead of Carbon in Laravel and Vue===</h1>
            <pre>
              <a href="https://vuejs.org/v2/guide/filters.html">Before we start here is the Src Ref.</a>


              <strong class="combinedLecturesStrongTags">Step 1</strong>:<b class="subStep">resources\assets\js\<em class="important">app.js</em><b>

                  const router = new Router({
                    mode: 'history',
                    routes
                  })

                  <b class="greenMarkerH">
                  Vue.filter('upText', function(text) {
                    return text.toUpperCase()
                  })
                  </b>

                  Vue.component('example-component', require('./components/ExampleComponent.vue'));


              <strong class="combinedLecturesStrongTags">Step 2</strong>:<b class="subStep">resources\assets\js\components\<em class="important">Users.Vue</em><b>
                  &lt;td>&#123;&#123; user.email}}&lt;/td>
                  <b class="greenMarkerH">&lt;td>&#123;&#123; user.type | upText}}&lt;/td></b>


              <strong class="combinedLecturesStrongTags">Step 3</strong>:<b class="subStep">resources\assets\js\<em class="important">app.js</em><b>
                  <b class="greenMarkerH"></b>
                  Vue.filter('upText', function(text) {
                    //return value.charAt(0).toUpperCase() + value.slice(1)
                    <b class="greenMarkerH">return text.charAt(0).toUpperCase() + text.slice(1)</b>
                  })


              <strong class="combinedLecturesStrongTags">Step 4</strong>: <b class="important">https://momentjs.com</b>
                  npm i moment --save


              <strong class="combinedLecturesStrongTags">Step 5</strong>:<b class="subStep">resources\assets\js\<em class="important">app.js</em><b>

                  window.Vue = require('vue')
                  <b class="greenMarkerH">import moment from 'moment'</b>
                  import { Form, HasError, AlertError } from 'vform'

                  window.Form = Form

                  <b class="greenMarkerH">Vue.filter('myDate', function(created){
                    //return created.moment().format('MMMM DO YYYY') wrong
                    return moment(created).format('MMMM Do YYYY')
                  })</b>

              <strong class="combinedLecturesStrongTags">Step 6</strong>:resources\assets\js\components\<em class="important">Users.Vue</em><b>
                  &lt;td> &#123;&#123; user.created_at | myDate }}
            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle" id="section17-inspire">Section 17-ProgressBar with Vuejs and Laravel When Create new Record with Ajax.</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===17-ProgressBar with Vuejs and Laravel When Create new Record with Ajax.===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>:
                  <b class="step">1</b>:<a href="https://hilongjw.github.io/vue-progressbar">Source Reference</a>


                  <b class="step">2</b>:npm i vue-progressbar


              <strong class="combinedLecturesStrongTags">Step 2</strong>:
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1549758863565583037/FECCF14E721E87540A508858870F604D7F02A6A6/" alt="">


              <strong class="combinedLecturesStrongTags">Step 3</strong>:
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1549758863565587933/882EF8B7869BFE7801D679768FB0CCD9B794C07D/" alt="">

              <strong class="combinedLecturesStrongTags">Step 4</strong>:resources\assets\js\components\<em class="important">Users.Vue</em><b>
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1549758863565594656/82C8E69901196CE7733E20EEB8C6ED95C0E48DEC/" alt="">


            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle" id="section18-inspire">Section 18-Sweet Alert in Laravel 5.7 and Vue after Ajax Request</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===18-Sweet Alert in Laravel 5.7 and Vue after Ajax Request===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>:
                  <a href="https://sweetalert2.github.io">Src Ref</a>
                  npm i sweetalert2 --save

              <strong class="combinedLecturesStrongTags">Step 2</strong>:
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1549758863565610728/963C8D5D9988161DD65CB5A4A52FB7E2C467CEBE/" alt="">
                  <b class="takeNote">IMPORTANT!</b>: As of my use @ Sept. 28, 2020 3:00 PM
                  // https://sweetalert2.github.io/ Functionality Library
                  import Swal from 'sweetalert2'
                  const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                  })

                  window.Toast = Toast
                  // https://sweetalert2.github.io/ Functionality Library


              <strong class="combinedLecturesStrongTags">Step 3</strong>:resources\assets\js\components\<em class="important">Users.Vue</em><b>
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1549758863565615328/BF5034E290B2846B6BA053290BD2892E357DD6FD/" alt="">
                  <b class="takeNote">IMPORTANT!</b>: As of my use @ Sept. 28, 2020 3:00 PM
                  // https://sweetalert2.github.io/ Functionality Library
                  Toast.fire({
                    icon: 'success',
                    title: 'User Created Successfully'
                  })
                  // https://sweetalert2.github.io/ Functionality Library
                  <b class="method">OUTPUT RESULT</b>:
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048737471790/FE6E3E42233F914B7EDA9C91377E8CB6A8E6AE2C/" alt="">


              <strong class="combinedLecturesStrongTags">Step 4</strong>:resources\assets\js\components\<em class="important">Users.Vue</em><b>
                  <a href="https://getbootstrap.com/docs/4.1/components/modal/">Src Ref:Bootstrap</a>
                  <a href="https://getbootstrap.com/docs/4.5/components/modal/">Src Ref:Bootstrap 4.5</a>

                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1549758863565619478/79053A4838247B009D424D82C7CDA6359FCD79F7/" alt="">

              <strong class="combinedLecturesStrongTags">Step 5</strong>:
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1549758863565621807/A0D610E26EE45803D06DEBCC5BEE82AD0ADF0D22/" alt="">
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1549758863565624586/F4E8D9BCDD59A11D6C4E50C51EA89AF05453B2ED/" alt="">
            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle" id="section19-inspire">Section 19-Send HTTP Request Every 3 Seconds to Update Data in Laravel and Vuejs</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===19-Send HTTP Request Every 3 Seconds to Update Data in Laravel and Vuejs===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>:resources\assets\js\components\<em class="important">Users.Vue</em><b>
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048738954554/0140C5B3DD043AB9D40F824E614BA13DF9480815/" alt="">
            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle" id="section20-inspire">Section 20-Use Custom Event to Send HTTP Request After You Create the User in Laravel and Vuejs</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===20-Use Custom Event to Send HTTP Request After You Create the User in Laravel and Vuejs===</h1>
            <pre>
              <a href="https://vuejs.org/v2/guide/components-custom-events.html">Src Ref:v2/guide/components-custom-events</a>
              <blockquote cite="http://">
                custom events is when you do something and you want your component
                to know what you have done for example when you create a user
                we tell our comp we have created a user if you want to do something
                do it.

                it works like this you create an event

                &lt;b class="greenMarkerH">this.$emit('myEvent')&lt;/b> he says it will work only in 1 component
                Listening to the kebab-cased version will have no effect:

                <span class="hljs-comment">&lt;!-- Won't work --&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">my-component</span> <span class="hljs-attr">v-on:my-event</span>=<span class="hljs-string">"doSomething"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">my-component</span>&gt;</span>

                in doSomething it can be a callback function and it will going to send an http request to a server and fetch the new data
              </blockquote>
              <strong class="combinedLecturesStrongTags">Step 1</strong>:resources\assets\js\<em class="important">app.js</em><b>
                  let Fire = new Vue() - to create a custom event
                  window.callWhateverYouWant = Fire - new instance of vue

                  or to make even more shorter

                <b class="greenMarkerH">  window.callWhateverYouWant = new Vue()</b>

                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048738968888/BB8BB235B5EFF7FFD19E7B774637698F6709F718/" alt="">



              <strong class="combinedLecturesStrongTags">Step 2</strong>:resources\assets\js\components\<em class="important">Users.Vue</em><b> Component
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048738974831/75F3EC14C8102E219BAB1A1345FFE26F4DE683D0/" alt="">
            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle" id="section21-inspire">Section 21-Using Promise to Detect Successfull HTTP Request in Laravel and Vue</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===21-Using Promise to Detect Successfull HTTP Request in Laravel and Vue===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>:resources\assets\js\components\<em class="important">Users.Vue</em><b>
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048740962852/B22A252ED8ED74CC70FA8AFEB4113BCF31FD169B/" alt="">
            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle" id="section22-inspire">Section 22-Delete User with Ajax Request and SweetAlert Modal in Laravel and Vuejs</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===22-Delete User with Ajax Request and SweetAlert Modal in Laravel and Vuejs===</h1>
            <pre>
              <a href="https://sweetalert2.github.io">SweetAlert2</a>
              <strong class="combinedLecturesStrongTags">Step 1</strong>:resources\assets\js\components\<em class="important">Users.Vue</em><b>

                  <b class="process">1</b>
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048741056043/908F474D77517470BF5423D9C552AC545F22A7CD/" alt="">



                  <b class="process">2</b>
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048741136468/49DCE42C62F5B74907EB0EC4CB2B12CF1A1AB63A/" alt="">
                    <img  src="https://steamuserimages-a.akamaihd.net/ugc/1549759048741064289/F9328DBCE136F1C811B39FAEE3198013FA181E75/" alt="">


                  <b class="process">3</b>
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048741068290/1921A93FD150210F96C56582ACB028DE99900F3D/" alt="">
                    <b class="method">OUTPUT RESULT</b>:
                    <img style="width:35.9vw" src="https://steamuserimages-a.akamaihd.net/ugc/1549759048741090896/A06A7DA57EEA19118E0D3ECD1BB4AD4F913A7D9F/" alt="">

                    Saakin
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759232555206668/6092C9A017CDB2270887EA41DC99EE6DF802D521/" alt="">
                    <b class="fixError">window.Swal = Swal</b>




                  <b class="process">4</b>
                  <a href="https://github.com/cretueusebiu/vform/tree/master/example">Src Ref:Vform</a>
                  <img style="width: 48.9vw" src="https://steamuserimages-a.akamaihd.net/ugc/1549759232555293025/B008B54836B3878692F1079C4AD57E680235D79B/" alt="">

                  <b class="process">5</b>
                  <img style="width: 48.9vw" src="https://steamuserimages-a.akamaihd.net/ugc/1549759232555293506/23A75DDE75683752A8B826A6EF7DDB4174B0DAF2/" alt="">
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759232555306619/7CA01057FE008A00F8CC003068F78FB55C99993E/" alt="">

            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle" id="section23-inspire">Section 23-Using One Modal Window for Creating and Updating Data in Laravel and Vuejs</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===23-Using One Modal Window for Creating and Updating Data in Laravel and Vuejs===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>:resources\assets\js\components\<em class="important">Users.Vue</em><b>

                <b class="process">1</b>
                <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742417041/9B34FF52D903BA4B218CA66CDECE0A67C7B49BD5/" alt="">



                <b class="process">2</b>
                <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742420727/A19C890DABC1922D491F1187F467A3F98BE31912/" alt="">



                <b class="process">3</b>
                <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742426427/6332CCCDFBB0E88A58FA80F1B45FF28820FB1780/" alt="">
                <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742427654/0DCB4C21AAE13C62CA97E81FB35E5C4C599E1F00/" alt="">


                <b class="process">4</b>
                <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742431180/C4541A17AD1D244DEA43E21A6FCA97F9A4FFE648/" alt="">
                <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742437226/8C0618BB5C9E77905DF4BDFF2EB70368D4193849/" alt="">


                <b class="process">5</b>
                <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742442450/D3B20CC4C1CD124E5F6017B97EB3904B169C3D84/" alt="">


                <b class="process">6</b>
                <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742445194/ACE4A52BCE7C140CBE2CF776047EA87B4FE4F83B/" alt="">


                <b class="process">7</b>
                <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742447766/755F6D9D4551AADC1A50D98A706FD836BC872D35/" alt="">




            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle" id="section24-inspire">Section 24-Conditionally Switch Between Edit Mode and Create Mode of Modal Window</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===24-Conditionally Switch Between Edit Mode and Create Mode of Modal Window===</h1>
            <pre>


              resources\assets\js\components\<em class="important">Users.Vue</em><b>


              <b class="process">1</b>
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742455382/BEB685D1A65CFECD88D6A0B2E087020CED0441A4/" alt="">


              <b class="process">2</b>
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742458878/C7F28864EDF090706ED0167444CC9E1B7E2DF945/" alt="">


              <b class="process">3</b>
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742461574/7C15C2A07CD968BDE81CE47118845A55A62A1E16/" alt="">
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742466234/F4D7D678236E1EEC4A98223C55279B4360062F08/" alt="">


              <b class="process">4</b>
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742468868/6672AFD31F5D97892D7C822EE71E07E5CC108AA4/" alt="">


              <b class="process">5</b>
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742470263/D699FCF021C15B53984E71F0B7F4570F577151DB/" alt="">


              <b class="process">6</b>
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742472505/C695F93A05ED93D4D15F0455936DC2733491815B/" alt="">
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742477130/CC162E8D7B09DD697E8691CD7A0839608A8EE4A8/" alt="">


              <b class="process">7</b>
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742480342/DC6154E8C136EA2F798E6916551293E6A1702D07/" alt="">
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742482493/54A459CF36C293D3202B03EAA3E3193886E908AF/" alt="">
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742484255/1889C507336B2AD63D2F723CEC5C97E3A4E04ABE/" alt="">

              <b class="process">7</b>
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742486100/6657CD0321C4002760FDCD96BF3E1E327AB4BF8D/" alt="">
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742488773/A57A17641AA0BFAD1D546106504401F93D096940/" alt="">
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742490329/1E72E9B6C4D445C63C90D45F285C598E8132A647/" alt="">

              <b class="process">8</b>
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742493119/605EF6EC69CAAD82C77C078ABD644D4AC11416FC/" alt="">

              <b class="process">8</b>
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1549759048742495730/0A40236ADE34693CEA3D0F9DE15D2AE723B5C0CF/" alt="">


            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle" id="section25-inspire">Section 25-Correctly Update User Information with Unique Email in Database with Laravel and Vue</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===25-Correctly Update User Information with Unique Email in Database with Laravel and Vue===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>:
                  <a href="https://steamuserimages-a.akamaihd.net/ugc/1549759232555377616/271CBC45242255D212C00854F78D3D24D6C0793F/">1</a>
                  <a href="https://steamuserimages-a.akamaihd.net/ugc/1549759232555383253/F49A77A1B4A904F9CAED223093A2F7D7D3E17043/">2</a>
                  <a href="https://steamuserimages-a.akamaihd.net/ugc/1549759232555391106/30B92665351461CDC4CA3FCD9F6BC6A8E098DEFD/">3</a>
                  <a href="https://steamuserimages-a.akamaihd.net/ugc/1549759232555392936/0285C291E4C63D0A6F9A89E99154143E18EF1B10/">4</a>
                  <a href="https://steamuserimages-a.akamaihd.net/ugc/1549759232555395037/223A88A49E1D1C47B38981AB1597B4B9B7921D33/">5</a>
                  <a href="https://steamuserimages-a.akamaihd.net/ugc/1549759232555396689/50858B9105699EE3E8CC69E6A25A1D37213E82CB/">6</a>
                  <a href="https://steamuserimages-a.akamaihd.net/ugc/1549759232555398683/06967E65F3A3FBB74BC784AEDB04F528EA31089A/">7</a>
                  <a href="https://steamuserimages-a.akamaihd.net/ugc/1549759232555400820/1AA9AD4CD622713A36E7A9485EF7855E67AA935F/">8</a>
                  <a href="https://steamuserimages-a.akamaihd.net/ugc/1549759232555403685/16D8FE7F69535A12A4007BAEE6B21D3CD039421E/">9</a>
                  <a href="https://steamuserimages-a.akamaihd.net/ugc/1549759232555409267/D7DAA957023F6A4851C069FC86CC6ED8EEC809BE/">10</a>
                  <a href="https://steamuserimages-a.akamaihd.net/ugc/1549759232555411464/F68A11C44B1D69531EA24C161EA2519B54F52E8A/">11</a>
                  <a href="https://steamuserimages-a.akamaihd.net/ugc/1549759232555413315/08D087B500E2EB0C2C7ACD9F66402AB659A4A2AC/">12</a>
                  <a href="https://steamuserimages-a.akamaihd.net/ugc/1549759232555417280/B451A3E17AC88B14D0464B57B36CD24A8FED68AB/">13</a>
                  <a href="https://steamuserimages-a.akamaihd.net/ugc/1549759232555420174/70F7BACFA91729E8F527A984EC8F3DC6E0764E48/">14</a>
                  <a href="https://steamuserimages-a.akamaihd.net/ugc/1549759232555450217/509F6847B1C25C78854DEDE0E431DE1FDF36A52A/">15</a>
            </pre>
          </p>
        </div>
      </section>
    </div>

    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle" id="section26-inspire">Section 26-Security Issues While Developing API in Laravel and Vuejs</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===26-Security Issues While Developing API in Laravel and Vuejs===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>:

            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle" id="section27-inspire">Section 27-Installing Laravel Passport for API Auth in Laravel 5.7</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===27-Installing Laravel Passport for API Auth in Laravel 5.7===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>:
                  Personal access client created successfully.
                  Client ID: 1
                  Client secret: 8UlsjDfxw6iIKe8uuzXn0auDTxE75y3rMMF0fx51
                  Password grant client created successfully.
                  Client ID: 2
                  Client secret: 7LJl9ewwQjVlHdtJZ7HZkTedwRgb0CDHLfJoByLq
            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle" id="section28-inspire">Section 28-All we need is JWT for Laravel API Authentication</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===28-All we need is JWT for Laravel API Authentication===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>:
            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions" id="section29-inspire">
        <h1 class="LectureSectionTitle">Section 29-Let's Make User Profile Component for User In Laravel and Vuejs</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===29-Let's Make User Profile Component for User In Laravel and Vuejs===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>:
              <a href="https://adminlte.io/themes/dev/AdminLTE/pages/widgets.html">AdminLTE Widgets</a>
              <a href="https://adminlte.io/themes/dev/AdminLTE/pages/examples/profile.html">AdminLTE Widgets</a>
            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions" id="section30-inspire">
        <h1 class="LectureSectionTitle">Section 30-Populate Login User Information in User Profile with Laravel and Vuejs</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===30-Populate Login User Information in User Profile with Laravel and Vuejs===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">Step 1</strong>:app\Http\Controllers\<b class="greenMarkerH">API\UserController.php</b>
              <blockquote cite="http://">
                but when you are dealing with API instead of this
                <b class="greenMarkerH">return Auth::user();</b>
                and you don't need to import the auth at the top
                because it is already a helper function and you
                can use it anywhere in your application

                Now anyone who sends a request they should have to
                access to the authenticated user information to
                this function and it must have a router in routes api.php
              </blockquote>
                  <img style="width:32.9vw; height: 30vh" src="https://steamuserimages-a.akamaihd.net/ugc/1629698156023427558/A3BC7A1ED19EED6567C903EE8D5B6570254EC145/" alt="">



              <strong class="combinedLecturesStrongTags">Step 2</strong>:routes\<b class="greenMarkerH">api.php</b>
                  <img style="width:32.9vw; height: 50vh" src="https://steamuserimages-a.akamaihd.net/ugc/1629698156023437711/1E7A78622529A84022766B748EED19A82BB606ED/" alt="">


            </pre>
          </p>
        </div>
      </section>
    </div>

    <div class="container">
      <section class="sectionDivisions" id="section37-inspire">
        <h1 class="LectureSectionTitle">Section 37-How to Delete Old Photo From Server if User Change Profile Photo in Laravel 5.7 an Vue</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===37-How to Delete Old Photo From Server if User Change Profile Photo in Laravel 5.7 an Vue===</h1>
            <pre>

              <strong class="combinedLecturesStrongTags">Step 1</strong>:resources\assets\js\<b class="greenMarkerH">components\Profile.vue</b>

              <b class="process">1</b>
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1629698544128256905/4B293A5E504BE1971B9FA4ED97F43CA38090778A/" alt="">

              <b class="process">2</b>
              Test it upload a picture and see if it deletes


            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions" id="section38-inspire">
        <h1 class="LectureSectionTitle">Section 38-How to Display Profile Picture in Vuejs file and Laravel 5.7</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===38-How to Display Profile Picture in Vuejs file and Laravel 5.7===</h1>
            <pre>

              <strong class="combinedLecturesStrongTags">Step 1</strong>:resources\assets\js\<b class="greenMarkerH">components\Profile.vue</b>

              <b class="process">1</b>
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1629698544129778657/94FEFDA48AC60A23410A9EC964D4E40D74A49424/" alt="">

              <b class="process">2</b>
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1629698544129788453/3E13F473B4683BC1BD4FE5ECB3D306D3D89391A7/" alt="">
              this.profileForm.photo
            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions" id="section39-inspire">
        <h1 class="LectureSectionTitle">Section 39-Different Ways to Apply Access Conltrol List for Users in Laravel</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===39-Different Ways to Apply Access Conltrol List for Users in Laravel===</h1>
            <pre>

              <b class="process">1</b>
              <a href="https://github.com/JosephSilber/bouncer">Github-Bouncer</a>

              <b class="process">2</b>
              <a href="https://github.com/Zizaco/entrust">Github-Entrust</a>

              <b class="process">3</b>
              <a href="https://github.com/kodeine/laravel-acl">Github-Bouncer</a>

              <b class="process">4</b>
              <a href="https://laravel.com/docs/8.x/authorization#creating-policies">LaravelDocs-Authorization</a>
              creating your own ACL

              Policies are basically limitations of what the users can do and can't do

              <b class="takeNote">
                Laravel Models can have policies of its own and its just a rule that you define
                for your specific needs for any model you want to have a policy

                Policy is just basically just a limitation
              </b>

              for example in
              <b class="combinedLecturesStrongTags">Example 1</b>:app\Providers\<b class="greenMarkerH">AuthServiceProvider.php</b>
              we have a
              public function boot(<b class="greenMarkerH">GateContract $gate</b>) {
                  $this->registerPolicies($gate);

                  $gate->define('isAdmin', function($user){
                    return $user->type === 'admin';
                  });

                  <b class="greenMarkerH">this gate is for admin</b> and anywhere you use isAdmin it knows it's an Administrator

                  $gate->define('isUser', function($user){
                    return $user->type === 'user';
                  });

                  $gate->define('isOrganization', function($user){
                    return $user->type === 'organization';
                  });

                  $gate->define('isMyAccount', function($user, $profileUser){
                    return $user->id === $profileUser->id;
                  });

                  Passport::routes();

              }

              <blockquote cite="http://">
                They are a package that lets you
                do like role-based permissions system
                for laravel app built in Auth system
              </blockquote>
            </pre>
          </p>
        </div>
      </section>
    </div>

    <div class="container">
      <section class="sectionDivisions" id="section41-inspire">
        <h1 class="LectureSectionTitle">Section 41-Update Profile Picture Instantly After Uploading in Laravel and Vuejs</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===41-Update Profile Picture Instantly After Uploading in Laravel and Vuejs===</h1>
            <pre>

              <strong class="combinedLecturesStrongTags">Step 1</strong>:resources\assets\js\<b class="greenMarkerH">components\Profile.vue</b>

              <b class="process">1</b>
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1629698544129854013/45312A787CF5B15A06D06FB9BB9843EA326D11E9/" alt="">
              Then it goes here instantly
              <img src="https://steamuserimages-a.akamaihd.net/ugc/1629698544129855161/893FF171F75F00A0DD3D0DECD2C0BCFC9A2556CC/" alt="">
            </pre>
          </p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="sectionDivisions" id="section42-inspire">
        <h1 class="LectureSectionTitle">Section 42-Easily Add ACL to Laravel Without Extra Tables in Database</h1>
        <div class="sectionContainerDivs">
          <p>
            <h1 class="sectionLectures">===42-Easily Add ACL to Laravel Without Extra Tables in Database===</h1>
            <pre>
              <strong class="combinedLecturesStrongTags">1</strong>:app\Providers\<b class="greenMarkerH">AuthServiceProvider.php</b>
                <img src="https://steamuserimages-a.akamaihd.net/ugc/1629698544134114026/D9558C2376D83438C70EA9B8675269A042B03D62/" alt="">

              <strong class="combinedLecturesStrongTags">2</strong>:resources\views\layouts\<b class="greenMarkerH">master.blade.php</b>
                <img src="https://steamuserimages-a.akamaihd.net/ugc/1629698544134121689/4F651BE675E18F515DA3C2C984F3774AC36295F1/" alt="">


            </pre>
          </p>
        </div>
      </section>
    </div>



    <div class="container">
      <section class="sectionDivisions">
        <h1 class="LectureSectionTitle">Extras</h1>
        <div class="sectionContainerDivs extra">
          <p>
            <h1 class="sectionLectures">===Laravel Workarounds===</h1>
            <pre>

             <a href="https://laravel.com/docs/7.x/frontend"></a>
             <a href="https://jetstream.laravel.com/1.x/installation.html"></a>
                composer require laravel/jetstream

                // Install Jetstream with the Livewire stack...
                php artisan jetstream:install livewire

                // Install Jetstream with the Inertia stack...
                php artisan jetstream:install inertia

                // global laravel installer
                composer global require laravel/installer then laravel new blog
                or
                laravel new project-name --jet -> php artisan migrate
                laravel new kitetail --jet
            </pre>
            <h1 class="sectionLectures">===Vue Environment and its workarounds===</h1>
            <pre>
              <strong class="error">E</strong>:
                <img src="https://steamuserimages-a.akamaihd.net/ugc/1549758863560413057/173182BA3194BCFA58213917548312D8F1E51905/" alt="">
              <strong class="fixError">FE</strong>
                <img src="https://steamuserimages-a.akamaihd.net/ugc/1549758863560410368/57719C3FE5F2261036E6E2CA1E28E5F82E832201/" alt="">

            </pre>
          </p>
        </div>
      </section>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Jquery UI - js-->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> Hindi gumagana yung secondary-->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    <script>
      $(function (){
        $('html').css({
          background:`#12110F`,
          border:`4px solid aqua`,
          margin:`2vh 10vw`,
          padding:`2vh 3vw`
        })
        $("body").css({
          background:`#FFF0D1`,
          border:`4px solid #0A51FF`,
        })
        $(".top_title").css({"text-align":`center`,})
        $(".container").css({
          position:`relative`,
          border:`4px solid green`,
        })
        $(".container").css({
          position:`relative`,
          border:`4px solid green`,
        })
        $(".sectionContainerDivs").css({
          position: `relative`,

        })

        $(".LectureSectionTitle").css({
          "text-align":`center`,
          outline:`14px solid black`,
          margin:0,
          background:`#F7D152`,
        })

        $(".sectionLectures").css({
          "text-align":'center',
          "color":'#1B2224',
        })

        $(".viewportPosFix").css({
          position:`fix`,
          top:`15px`,
          left:`15px`,
        })


        $(".combinedLecturesStrongTags").css("background",'linear-gradient(to right, #dbe6f6, #c5796d)')
        $(".combinedLecturesStrongTagsTitle").css("background",'#1EFC97')
        $(".syntax").css(`color`,`#E67027`)
        $(".appliedSyntax").css(`color`,`#00F521`)
        $(".takeNote").css(`color`,`#C925F5`)
        $(".options").css(`background`,`radial-gradient(circle, rgba(63,94,251,1) 27%, rgba(252,70,107,1) 79%)`)
        $(".important").css(`background-image`,`linear-gradient(to right, #eea2a2 0%, #bbc1bf 19%, #57c6e1 42%, #b49fda 79%, #7ac5d8 100%)`),
        $(".error").css(`color`,`#F50105`)
        $(".breakDown").css(`outline`,`2px solid #242F40`)
        $(".fixError").css(`outline`,`5px solid #9CF5B6`)
        $(".assetFiles").css(`border`,`4px solid #000000`)
        $(".numerality").css(`background-image`,`linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%)`)
        $(".step").css(`color`,`#F5528B`)
        $(".subStep").css(`color`,`#e85d04`)
        $(".process").css(`color`,`#F5520F`)
        $(".methods").css(`background-color`,`#9F4151`)
        $(".greenMarkerH").css(`background-image`,`linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%)`)
        $(".recall").css(`background-image`,`linear-gradient(180deg, #2af598 0%, #009efd 100%)`)
        $(".elements_to_be_styled").css(`background-image`,`linear-gradient(to right, #e4afcb 0%, #b8cbb8 0%, #b8cbb8 0%, #e2c58b 30%, #c2ce9c 64%, #7edbdc 100%)`)
        $(".section17").css({
          outline:`4px solid pink`,
        })
          $(".adjustImage").css({
            width:`65.5vw`,
            left: 100,
          })
      })

    </script>
  </body>
</html>
