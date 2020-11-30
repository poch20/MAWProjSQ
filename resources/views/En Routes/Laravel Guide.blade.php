<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Notes</title>


        <link rel="stylesheet" href="{{asset('assets\css\forLaraGuide.css')}}">
        <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <!-- Styles -->
        <style media="screen">

          html {
            box-sizing: border-box;
          }

          *, *::before, *::after {
            box-sizing: inherit;
          }

          .steprocedure {color:#F5528B}
          .processedure{color:#F5520F}
          .methodanicompute{background-color:#9F4151}

          /*#route-list-parcon::before {
            content: "";
            border: 2px solid grey;
            width: 100%;
            height: 100%;
            position: absolute;
          }*/

          #table-of-contents-fixed {
            position: fixed;
            bottom: 10px;
            right: 40px;
          }
          #table-of-contents-fixed ul {
            list-style: none;
          }
        </style>



    </head>
    <body>

      <div id=table-of-contents-fixed>
        <ul>

          <ol id=""><span class="important">Laravel Extra: Vue.js via Laravel</span>

            <a href="#ci2" id=""><li><span class="important">===2CodeInspire</span></li></a>
            <a href="#ci6" id=""><li><span class="important">===6CodeInspire</span></li></a>
            <a href="#ci7" id=""><li><span class="important">===7CodeInspire</span></li></a>
            <a href="#ci11" id=""><li><span class="important">===11CodeInspire</span></li></a>
            <a href="#ci12" id=""><li><span class="important">===12CodeInspire</span></li></a>
            <a href="#ci13" id=""><li><span class="important">===13CodeInspire</span></li></a>
            <a href="#ci14" id=""><li><span class="important">===13CodeInspire</span></li></a>
            <a href="#ci44-laraACL" id=""><li><span class="important">===44CodeInspire</span></li></a>
            <a href="#ci45" id=""><li><span class="important">===45CodeInspire</span></li></a>
            <a href="#ci46" id=""><li><span class="important">===46CodeInspire</span></li></a>
            <a href="#ci47" id=""><li><span class="important">===47CodeInspire</span></li></a>
            <a href="#ci48" id=""><li><span class="important">===48CodeInspire</span></li></a>
            <a href="#ci49" id=""><li><span class="important">===49CodeInspire</span></li></a>
            <a href="#ci50" id=""><li><span class="important">===50CodeInspire</span></li></a>
            <a href="#ci51" id=""><li><span class="important">===51CodeInspire</span></li></a>
            <a href="#ci52" id=""><li><span class="important">===52CodeInspire</span></li></a>
            <a href="#ci53" id=""><li><span class="important">===53CodeInspire</span></li></a>
            <a href="#noted-lec-of-non-poly-db-relationships" id=""><li><span class="important">===LDER</span></li></a>

          </ol>

        </ul>
      </div>

      <h1 class="edwinDiazCourse">PHP with Laravel for beginners - Become a Master in Laravel</h1>
        <div class="container">
          <section class="sectionDivisions">
            <h1 class="masterBoxTitleSection">Laravel Homestead</h1>
            <p>
              <h4 class="moduleContentBoxTitle">Section 3: Windows</h4>
              <pre>
                <blockquote cite="http://">
                  1)<span class="processedure">pwd</span>
                  2)<span class="processedure">cd ../..</span>
                  3)<span class="processedure">cd ..</span>
                  4)<span class="processedure">cd c</span>
                  4)<span class="processedure">cd c/[Your Desired Project Path]</span>
                </blockquote>
                <strong class="ProceduralProcessBoxTitle">11. Downloading tools</strong>
                  <strong class="methodanicompute"><a href="https://www.vagrantup.com/" target="_blank">Vagrant(Software) - Download SrcLink</strong><b></b>
                    <span class="processedure"></span>


                <strong class="ProceduralProcessBoxTitle"></strong>
              </pre>
            </p>
          </section>
          <section class="sectionDivisions">
            <h1 class="masterBoxTitleSection">===Section 2: Windows - Local Environment Setup===</h1>
            <p>
              <pre>
                <strong class="ProceduralProcessBoxTitle">step 1</strong> : <b><em>https://git-scm.com/download/win</em></b>

                    <b style="color:red">php -v</b>

                <strong class="ProceduralProcessBoxTitle">step 2</strong> : <b><em>https://getcomposer.org/download/</em></b>

                    Choose the command line PHP you want to use: <b class="processedure">C:\xampp\php\php.exe</b>

                    Git Bash  : <b style="color:#F5520F">php -v</b>

                    Git Bash Integrated Terminal IDE : <b class="processedure">inside an IDE or Code Editor of your choice (Install)</b>

                <strong class="ProceduralProcessBoxTitle">step 5</strong> : <b><em class="steprocedure">Edit the system environment variables</em></b>

                  <b style="color:#F5520F">Advanced -> Env Vars => C:\xampp\mysql\bin</b>

                  <b>Example can now do this short handed version</b>
                    <b style="color:#F5520F">C:\Users\irobo>mysql -uroot -p</b>


                <strong class="ProceduralProcessBoxTitle">step 6</strong> : <b><em class="steprocedure">Inside Windows CMD</em></b>
                    create database my_db;

                    show databases;

                    use my_db; - to use the table

                    show tables;

                    ctrl + c will get you out if you made a mistake

                    cls = clear

                    [[[[[[[[[[[[[PinoyFreeCoder]]]]]]]]]]]]]

                    npm install

                    npm run dev
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577732937067641/01F1DF921842C1DD0FB6EACC97F4A4A1779B710F/" alt="">

                    composer require laravel/ui

                    php artisan ui vue --auth

                    [[[[[[[[[[[[[PinoyFreeCoder]]]]]]]]]]]]]





                <strong class="ProceduralProcessBoxTitle">step 7</strong> : <b><em class="steprocedure">https://nodejs.org/en/ it comes with a tool named npm (node package manager)</em></b>
                    Node.js® is a JavaScript runtime built on Chrome's V8 JavaScript engine.

                    After downloading & installing it onto your computer type <em>-node v</em> & <em>npm -v</em> in Git Bash Terminal

                    We can use this tool in downloading js packages out there when we need them just like with composer

                <strong class="ProceduralProcessBoxTitle">step 8</strong> : <b><em class="steprocedure">Installing Laravel</em></b>
                    <strong class="methodanicompute">Method 1</strong> <b>Difficult one</b>
                        <span class="processedure">Create a new folder and use the Git Bash app</span>

                    <b>cd ~/Desktop/New Folder then tab to finish -> it is a shortcut</b>
                        <span class="processedure">paste this command from <a href="https://laravel.com/docs/7.x/installation"><em>https://laravel.com/docs/7.x/installation</em></a> </span>

                        <span class="processedure">composer create-project --prefer-dist laravel/laravel blog</span>

                    <b>type composer for documentation reference</b>
                      <b>ls</b>
                      <b>blog/</b> - return value
                      <b>ls blog/</b> - whole bunch of files

                    <strong class="methodanicompute">Method 2</strong> <b>Difficulty: EZ</b>

                        <span class="processedure">composer global require laravel/installer</span>

                    <b>if want update</b>
                        <span class="processedure">composer global update laravel/installer</span>


                    then

                        <span class="processedure">laravel new new-blog</span> -> creating a project

                    if you type ls you will see 2 folders now the blog and new-blog, now play around with laravel using your favorite editors. In the terminal example type

                        <span class="processedure">php artisan serve then enter</span> -> this is our application already working on a port using the built-in php server! that serve command is a wrapper

                        <span class="processedure">ctrl c</span> -> to turn it off or shutdown the server

                    To change directory example <b> <em>cd : /c/project/</em> </b> & Use the <b>pwd</b> command to see which path you are currently in, handy when you did a right-click
                        <span class="processedure">cd /laravelTuts/laravelNotes</span>
              </pre>
            </p>

          </section>

          <section class="sectionDivisions">
            <h1 class="masterBoxTitleSection">Section 4: Laravel Fundamentals</h1>
            <p>
              <h4 class="moduleContentBoxTitle">===Routes===</h4>
              <pre>
                <b>
                  Route::get('/', function () {
                      return view('welcome');
                  });
                </b>

                <b>
                  Route::get('admin/posts/example', array('as'=>'admin.home' ,function () {

                  }));
                </b>

                <strong class="ProceduralProcessBoxTitle">step 3</strong> : GitBash
                  type
                    <b>php artisan route:list</b>
              </pre>
            </p>

          </section>

          <section class="sectionDivisions">
            <h1 class="masterBoxTitleSection">===Section 5: Laravel Fundamentals - Controllers===</h1>
            <p>
              <pre>

                <strong class="ProceduralProcessBoxTitle">step 1</strong>:
                    In Terminal
                    Sample:
                        <b>php artisan make:controller nameOfYourController then enter</b>
                        <b>php artisan make:controller --resource nameOfYourController then enter</b>
                <strong class="ProceduralProcessBoxTitle">step 2</strong>:
                    In Routes
                      <b>route::get('/post', 'PostsController@index');</b>
                <strong class="ProceduralProcessBoxTitle">step 3</strong>:
                    Then Go to the Controllers and find the function index
                <strong class="ProceduralProcessBoxTitle">step 4</strong>:
                    Updated
                      <b>In Routes : route::get('/post/{id}', 'PostsController@index');</b>


                <strong class="ProceduralProcessBoxTitle">step 5</strong>:
                    A Controller with a resource, a route with a resource
                    A special type of get that will give us access automatically to different types of routes that we can use in our controller

                      <b>In Routes : Route::resource('posts', 'PostsController');</b>

                <strong class="ProceduralProcessBoxTitle">step 6</strong>:
                    In Terminal : <b>php artisan route:list</b>
                      For Example: Method is GET|HEAD, URI is posts/{post}, Name is posts.show, Action is App\Http\Controllers\PostsController\@show, Middleware is web.

                      <b class="important">Important Notice - 1</b>


                      StackOverflow:<strong>https://stackoverflow.com/questions/63807930/target-class-controller-does-not-exist-laravel-8
                                    https://laravel.com/docs/8.x/releases#laravel-8
                                    https://webgradients.com/
                                    https://uigradients.com/#Sunkist
                      </strong>

                <strong class="ProceduralProcessBoxTitle">step 7</strong>:
                    In Controller : choose any method(afunction inside of a class) that you see in the list for example
                    <b>
                      public function show($id){
                        return 'I am Legend ' . $id;
                      }
                    </b>
                <strong class="ProceduralProcessBoxTitle">step 8</strong>:
                    In Browser to see if it is working : <b>http://127.0.0.1:8000/posts/1</b>

                      with the method we use resource() the urls parameters are created for us automatically with the methosds that the data get sent with
                      Not only that but we also have name routes, we could use it in a link


                <strong class="ProceduralProcessBoxTitleTitle">Title : Views 26. Creating views and custom method</strong>
                <strong class="ProceduralProcessBoxTitle">step 1</strong> : Routes
                <strong class="ProceduralProcessBoxTitle">step 2</strong> : create custom controller in Http/Controllers Example:
                <b>
                  public function contact () {
                    return view('contact');
                  }
                </b>

                <strong class="ProceduralProcessBoxTitle">step 3</strong> : <b>create an html php file in resources/views/pages example:contact.blade.php</b>
                    blade is a templating engine use by laravel

              </pre>
            </p>

          </section>

          <section class="sectionDivisions">
            <h1 class="masterBoxTitleSection">Section 6: Laravel Fundamentals</h1>
            <p>
              <h4 class="moduleContentBoxTitle">====Views 27. Passing data to views====</h4>
              <pre>
                <strong class="ProceduralProcessBoxTitle">step 1</strong>
                    resources/views/pages/contact.blade.php

                <strong class="ProceduralProcessBoxTitle">step 2</strong>
                    Route::get('pages/post/{id}', 'PostsController@show_post');

                    public function show_post($id) {

                      return view('pages.post')->with('id',$id);
                    }

                <strong class="ProceduralProcessBoxTitle">step 3</strong>
                    Multiple Params instead on the top above

                    In Routes: Route::get('pages/post/{id}/{name}/{password}', 'PostsController@show_post');
                <strong class="ProceduralProcessBoxTitle">step 4</strong>
                    In Controllers: public function show_post($id, $name, $password) {return view('pages.post', compact('id','name','password'));
                    }
                <strong class="ProceduralProcessBoxTitle">step 5</strong>
                    In Views Echo: &lt;h1&gt;Post{ {$id}} { {$name}} { {$password}}&lt;/h1&gt;
              </pre>
            </p>

          </section>

          <section class="sectionDivisions">
            <h1 class="masterBoxTitleSection">===Section 7: Laravel Fundamentals - Laravel Blade templating engine===</h1>
            <div class="section11">
              <p>
                <h1 class="moduleContentBoxTitle">===29. Master layout setup===</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong> : <b>Create a folder & file called layouts/app.blade.php -> because most developers use this name</b>

                  <strong class="ProceduralProcessBoxTitle">step 2</strong> : <b>Any webpage file type                   &#64;extends('layouts.app'). If you want to put content inside &#64;yield('content&footer') you must
                           Type @section('content') and its closing &#64;stop or &#64;endsection</b>

                           Example <em>inside</em> <b>layouts/app.blade.php</b> or should say Template Markup!!
                           &lt;!DOCTYPE html&gt;
                           &lt;html lang="{{ str_replace('_', '-', app()->getLocale()) }}"&gt;
                               &lt;head&gt;
                                   &lt;meta charset="utf-8">
                                   &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

                                   &lt;title>Laravel uses Blade Engine&lt;/title&gt;



                               &lt;/head&gt;
                               &lt;body&gt;
                                   &lt;div class="container"&gt;
                                     &#64;yield('content')



                                   &lt;/div&gt;

                                     &#64;yield('footer')
                                   &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script&gt;

                                   <!-- Jquery UI - css -->
                                   &lt;link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/blitzer/jquery-ui.css"&gt;
                                   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> Hindi gumagana yung secondary-->
                                   &lt;script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script&gt;
                                   <!-- Jquery UI - js-->



                                   &lt;script&gt;

                                       $(function () {

                                       })


                                   &lt;/script&gt;
                               &lt;/body&gt;
                           &lt;/html&gt;

                  <strong class="ProceduralProcessBoxTitle">step 3</strong> : In any webpage you choose for example in my work flow dir resources/views/pages/<strong>contact.blade.php </strong>. Inside of that file
                           &#64;extends('layouts.app')


                           &#64;section('content')  &lt;!--This is within the div tags--&gt;

                            &lt;h1&gt; Contact Page &lt;/h1&gt;

                           &#64;endsection or &#64;stop

                           &#64;section('footer')

                            &lt;script&gt; alert('Hello World') &lt;/script&gt;

                           &#64;stop


                </pre>
                <h1 class="moduleContentBoxTitle">===Section 7: Laravel Fundamentals - Laravel Blade templating engine 30. Some more blade features===</h1>
                <pre>

                  We also have &#64;include()

                  <strong class="ProceduralProcessBoxTitle">step 1</strong> : <b>In Controller -> PostsController</b>

                  <b>
                    public function contact () {
                      $people = ['Edwin', 'Jose', 'James', 'Peter', 'Maria'];
                      return view('contact', compact('people'));
                    }
                  </b>


                  <strong class="ProceduralProcessBoxTitle">step 2</strong> : <b>In Views -> contact.blade.php </b>
                  &#64;section('content')

                    &lt;h1&gt;Contact Page&lt;/h1&gt;
                    &#64;if (count ($people))

                      &lt;ul&gt;
                        &#64;foreach($people as $person)
                          &lt;li&gt;&#123;&#123;$person&#125;&#125;&lt;/li&gt;
                        &#64;endforeach
                      &lt;/ul&gt;
                    &#64;endif

                  &#64;stop

                  &#64;section('footer')
                  &#64;stop

                </pre>
              </p>
            </div>
          </section>



          <section class="sectionDivisions">
            <h1 class="masterBoxTitleSection">Section 8: Laravel Fundamentals - Database - Laravel Migrations</h1>
            <div class="section11">
              <p>
                <h1 class="moduleContentBoxTitle">===33. New - Windows OS - Migrations===</h1>
                <pre>
                  Laravel takes care of the creation of tables or creates the table for us instead of phpmyadmin
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b>create a database for that project or just create the database and later change the env file to direct that database into that project.</b>
                      In Windows CMD Terminal
                      create database new_cms;

                  <strong class="ProceduralProcessBoxTitle">step 2</strong> : <b>Then go to the folder of that another project then Inside of the files of that folder open the .env file</b>
                      DB_DATABASE=new_cms

                  <strong class="ProceduralProcessBoxTitle">step 3</strong> : <b>In Git Bash, /c/xampp/htdocs/AnotherProject/ToMigrateFolder</b>
                      php artisan migrate

                      For API Documentation Reference
                      https://laravel.com/docs/5.0/schema

                </pre>
                <h1 class="moduleContentBoxTitle">====== 35. Creating migrations and dropping them===</h1>
                <pre>
                  Create a migration from scratch

                  This will be located in the database/migrations folder
                  Legends:
                  -- -> this is a flag

                  In your chosen project folder
                  <strong class="ProceduralProcessBoxTitle">step 1</strong> : <b>In Git Bash, php artisan make:migration create_posts_table --create="posts"</b>
                  <strong class="ProceduralProcessBoxTitle">step 2</strong> : <b>Then after modifying the migration file that was recently created type in Git Bash php artisan migrate</b>
                  <strong class="ProceduralProcessBoxTitle">step 3</strong> : <b>Then goto phpmyadmin to check if it work or not</b>
                  <strong class="ProceduralProcessBoxTitle">step 4</strong> : <b>If you want to undo the changes just simply php artisan migrate:rollback</b>
                </pre>
                <h1 class="moduleContentBoxTitle">======37. Some more migration commands=====</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong> : <b>In Git Bash, php artisan make:migration add_is_admin_column_to_posts_tables --table="posts"</b>

                  <strong class="ProceduralProcessBoxTitle">step 2</strong> : <b>In Git Bash, php artisan make:migration create_posts_table --create="posts" or without the quotes</b>

                  <strong class="ProceduralProcessBoxTitle">step 3</strong> : Once its created go ahead and make some changes/modifications into it for example below:
                  &lt;?php

                  use Illuminate\Database\Migrations\Migration;
                  use Illuminate\Database\Schema\Blueprint;
                  use Illuminate\Support\Facades\Schema;

                  class AddIsAdminColumnToPostsTables extends Migration {
                      /**
                       * Run the migrations.
                       *
                       * @return void
                       */
                      public function up()
                      {
                          Schema::table('posts', function (Blueprint $table) {
                              //
                              $table->tinyInteger('is_admin')->default('0');
                          });
                      }

                      /**
                       * Reverse the migrations.
                       *
                       * @return void
                       */
                      public function down()
                      {
                          Schema::table('posts', function (Blueprint $table) {
                              //
                              $table->dropColumn('is_admin');
                          });
                      }
                    }

                    <strong class="ProceduralProcessBoxTitleTitle">Title: 36. Adding columns to existing tables using migrations</strong>
                    <strong class="ProceduralProcessBoxTitle">step 4</strong> : php artisan migrate
                    <strong><b>php artisan migrate:status</b></strong>
                    <strong><b>php artisan migrate:reset</b></strong>
                    <strong><b>php artisan migrate:status</b></strong>
                    <strong><b>php artisan migrate:refresh</b></strong>

                    For API Documentation Reference
                    Goto: https://laravel.com/docs/7.x/migrations#creating-indexes

                </pre>
              </p>
            </div>
          </section>

          <section class="sectionDivisions">
            <h1 class="masterBoxTitleSection">Section 9: Laravel Fundamentals - Raw SQL Queries</h1>
            <p>
              <h1 class="moduleContentBoxTitle">====39. Inserting data====</h1>
              <pre>
                <strong class="ProceduralProcessBoxTitle">step 1</strong> : <b>In web.php(Routes)</b>
                  Route::get('/insert', function () {
                    DB::insert('insert into posts(title, content) values(?, ?)',['Yua', 'Mikami']);
                  });
              </pre>
              <h1 class="moduleContentBoxTitle">====40. Reading Data====</h1>
              <pre>
                <strong class="ProceduralProcessBoxTitle">step 1</strong> : <b>In web.php(Routes)</b>
                  Route::get('/read', function () {
                    $returnResults = DB::select('select * from posts where id = ?', [1]);

                    return var_dump($returnResults);

                    &gt;!--or--&lt;
                    foreach($returnResults as $cholo){
                      return $cholo->title;
                    }

                  });
              </pre>
              <h1 class="moduleContentBoxTitle">====41. Updating Data====</h1>
              <pre>
                <strong class="ProceduralProcessBoxTitle">step 1</strong> : <b>In web.php(Routes)</b>
                  Route::get('/update', function () {
                    $returnResults = DB::update('update posts set title = "This is me updating" where id = ?', [1]);
                    return $returnResults;

                  });

              </pre>
              <h1 class="moduleContentBoxTitle">====42. Deleting Data====</h1>
              <pre>
                <strong class="ProceduralProcessBoxTitle">step 1</strong> : <b>In web.php(Routes)</b>
                  Route::get('/delete', function () {
                    $returnResults = DB::delete('delete from posts where id = ?', [1]);
                    return $returnResults;

                  });

              </pre>
            </p>
          </section>
          <section class="sectionDivisions">
            <h1 class="masterBoxTitleSection">Section 10: Laravel Fundamentals - Database - Eloquent/ORM</h1>
              <p>
                <h1 class="moduleContentBoxTitle">===44. Reading Data===</h1>
                <pre>

                  <strong> <em>Legends:</em> </strong>
                    <i>-m</i> - create with migration included
                  <strong class="ProceduralProcessBoxTitle">step 1</strong> : In Git Bash, php artisan make:model Post -m
                  This will create a php file located in the app folder

                  <strong class="ProceduralProcessBoxTitle">step 2</strong> : Inside that newly created model  <em>(yun lang tawag ko kasi sa codeigniter may models na folder)</em> basically we are importing
                  this model to the model.php file

                    Right now this model thinks that table name that we have in our db is called posts because it converts the class (ETO->Post) extends Model into lowercase then Plural all the time
                    Its thinking that we have a posts table from this class and its right we do have a posts table

                    But of course there might be an instance that some of us might have a class name like this class PostAdmin extends Model then we have to let laravel
                    know that the table is not postadmins
                    we have to write

                    protected $table = 'posts'; -> Hey listen laravel! my table is not named postadmins but is named posts

                    and by default all model that you create thinks that your table has a primary key named id like this

                    protected $primaryKey = 'id'; -> by default, but of course again what if our primary key is not named id but something like post_id, we have to defined it like the above one


                    &lt;?php

                    namespace App;

                    use Illuminate\Database\Eloquent\Model;

                    class Post extends Model
                    {
                        //
                    }

                  <strong class="ProceduralProcessBoxTitle">step 3</strong> : In Routes, this is just an example thats why we are doing it in routes and the closure function 2nd parameter to show the results faster and easier to understand


                      Route::get('/find', function () {
                        $posts = App\Post;
                      });

                      Notes:


                        $posts = App\Post;  - we are referring to the namespace of the class php file model but we don't have to do it inside the closure function in routes
                        and go all the way to the top like this

                        &lt;?php
                        use App\Post;

                        and now we are pointing this class, this functionality to the model that is created and it has so many properties
                        and methosds because it points or extends to that parent class named Model


                        :: - static

                        $posts = Post::all(); - pulling all the records


                        but for now we do this
                        &lt;?php
                        use App\Post;

                      Route::get('/read', function () {

                        $posts = Post::all();

                        foreach ($posts as $post) {

                          return $post->title;

                        }
                      });

                      You can't see nothing displayed on the viewport or screen becaues we don't have any existing records on the database then kapag meron ka ng records ganito gawin mo
                      pang testing lang naman yung /read o find naka route lang naman yan pwede kahit anong ilagay mo diyan basta alam mo na tama ang iyong inilagay sa code property ng
                      controller na naka set na ang view method sa tamang dir kung saan naka locate yung file

                      Route::get('/find', function () {

                        $existingRecords = Post::find(1);

                        return $existingRecords->title;

                      });

                      This is coming like an object now if we have multiple ones then we should ::all()





                </pre>
                <h1 class="moduleContentBoxTitle">===45. Reading / Finding with Constraints===</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong> : In Routes
                    Route::get('/findwhere', function () {
                      syntax --> $varName = ourCreatedModelNameClass::where('id', idVALOfTheColumn)->orderBy('id', 'desc')->take(idVALOfTheColumn)->get();

                      $cholo = Post::where('id', 2)->orderBy('id', 'desc')->take(2)->get();
                      return $cholo;
                    });

                    Then eto pang testing lang sieympre itry lang natin bagohin itong kinapy-paste ko

                    Route::get('/pangEnterLangParaMaInsert', function () {
                      DB::insert('insert into posts(title, content) values(?, ?)',['Yua', 'Mikami']);
                    });
                  <strong class="ProceduralProcessBoxTitleTitle">Lecture Title</strong> : <b>47. Inserting / Saving Data</b>

                      <strong>GainMoreKnowledge 1</strong> : <b>Different Methosds</b>
                        Route::get('/findwhere', function () {

                          syntax --> $cholo = Post::findOrFail(idVALOfTheColumn);
                          return $cholo;
                        });

                      <strong>GainMoreKnowledge 2</strong> : <b>Different Methosds 2</b>
                        Route::get('/findwhere', function () {

                          syntax --> $varName = Post::where('colName', '<', 50)->findOrFail();
                          return $varName;
                        });
                  <strong class="ProceduralProcessBoxTitleTitle">Lecture Title</strong> : <b>47. Inserting / Saving Data</b>

                    <strong>GainMoreKnowledge</strong> : <b>Creating a new column under an existing model class</b>
                    <strong>NOTE</strong>: This will also create <b>TIMESTAMPS!!</b>
                      Route::get('/basicNaman', function () {
                        $post = new Post;
                        $post->title = 'New Eloquent title insert';
                        $post->content = 'Wow Eloquent is really cool, look at this content';
                        $post->save();
                      });

                      <b>OR To update existing records</b>

                      Route::get('/paUpdateNga', function () {
                        $post = Post::find(idVALOfTheColumn);
                        $post->title = 'Sulat ka bago';
                        $post->content = 'Katol pa';
                        $post->save();
                      });

                  <strong class="ProceduralProcessBoxTitleTitle">Lecture Title</strong> : <b>48. Creating data and configuring mass assignment</b>
                  Better with Forms daw

                      <strong class="ProceduralProcessBoxTitle">step 1</strong> : It needs to know that it is safe, it doesn't allow you to put data in there
                        Route::get('/create', function () {
                          syntax -> ModelClassName::(['columnName'=>'Sulat para gumawa ng bagong column', 'columnName'=>'ganun rin eto escape char I\'am']);
                          Post::create(['title'=>'Bago', 'content'=>'bago nga i\'m']);
                        });

                      <strong class="ProceduralProcessBoxTitle">step 2</strong>:Goto the post class model file then inside that file
                        &lt;?php

                        namespace App;

                        use Illuminate\Database\Eloquent\Model;

                        class Post extends Model {
                            //
                            protected MALI TO&#45;&#45;&#45;>$iAmSafeTodayAndAGlobalInThisModel <&#45;&#45;&#45;&#45;MALI TO = [
                              'title',
                              'content'
                            ];

                            dapat ganito akala ko kasi variable lang ETO DAPAT &#45;&#45;&#45;&#45;><strong>protected $fillable</strong><&#45;&#45;&#45;&#45;&#45;ETO DAPAT

                        }

                  <strong class="ProceduralProcessBoxTitleTitle">Lecture Title</strong>:<b>50. Deleting Data</b>
                      <strong class="ProceduralProcessBoxTitle">step 1</strong>
                        <strong class="methodanicompute">Method 1</strong>:Simple One
                        Route::get('/delete', function () {
                          $deletePost = Post::find(5);
                          $deletePost->delete();
                        });

                        <strong class="methodanicompute">Method 2</strong>
                        Route::get('/destroy', function () {
                          $deletePost = Post::destroy(5);

                          IF Multiple then do this

                          Syntax
                          $deletePost = Post::destroy([idVALOfTheColumn/' s]);
                          Applied Syntax
                          $deletePost = Post::destroy([4,3]);

                          and can you can do this too

                          //Post::where('columnName', valOfThatColumn)->delete();


                        });
                 <strong class="ProceduralProcessBoxTitleTitle">Lecture Title</strong>:<b> 51. Soft Deleting / Trashing</b>
                    <strong class="ProceduralProcessBoxTitle">step 1</strong>

                      Import from the class model
                      &lt;?php

                      namespace App;

                      use Illuminate\Database\Eloquent\Model;



                      <b>&#45;&#45;&#45;&#45;>use Illuminate\Database\Eloquent\SoftDeletes;<&#45;&#45;&#45;</b>


                      class Post extends Model {
                          //
                          <b>&#45;&#45;&#45;>use SoftDeletes;<&#45;&#45;&#45;</b>
                          The reason we do this is because we are letting laravel know to treat this column as a date timestamp column
                          <b>&#45;&#45;&#45;>protected $dates = ['deleted_at'];<&#45;&#45;&#45;</b> This sets to NULL automatically
                          protected $fillable = [
                            'title',
                            'content'
                          ];
                      }
                      <strong class="ProceduralProcessBoxTitle">step 2</strong>: <b>Create a Migration/Model</b>
                          php artisan make:migration add_deleted_at_column_to_posts_tables --table=posts
                          <b>class AddDeletedAtColumnToPostsTables</b>
                      <strong class="ProceduralProcessBoxTitle">step 3</strong>: <b>GoTo database/migrations/your newly created migration php file</b>
                          &lt;?php

                          use Illuminate\Database\Migrations\Migration;
                          use Illuminate\Database\Schema\Blueprint;
                          use Illuminate\Support\Facades\Schema;

                          class AddDeletedAtColumnToPostsTables extends Migration{
                              /**
                               * Run the migrations.
                               *
                               * @return void
                               */
                              public function up()
                              {
                                  Schema::table('posts', function (Blueprint $table) {
                                      // This allows us to create in a faster way
                                      <b>ETO</b> $table->SoftDeletes();
                                  });
                              }

                              /**
                               * Reverse the migrations.
                               *
                               * @return void
                               */
                              public function down()
                              {
                                  Schema::table('posts', function (Blueprint $table) {
                                      //For rollback/reset or whatever
                                      <b>ETO</b> $table->dropColumn('deleted_at');
                                  });
                              }
                            }
                          <strong class="ProceduralProcessBoxTitle">step 4</strong>: <b>In Routes</b>
                              Route::get('/softDelete', function () {
                                Syntax
                                modelClassName::find(idVALOfTheColumn)->delete();
                                Syntax Applied
                                Post::find(1)->delete();
                              });

                    <strong class="ProceduralProcessBoxTitleTitle">Lecture Title</strong>:<b> 52. Retrieving deleted / trashed records</b>

                          <strong class="ProceduralProcessBoxTitle">step 1</strong>:Delete some Data using soft delete from the previews lecture
                            Route::get('/gonnaDelete', function () {
                              Post::find(1)->delete();
                            });
                          <strong class="ProceduralProcessBoxTitle">step 2</strong>:Reading Soft Deleted Data

                            Route::get('/retrieveDelete', function () {

                              /*
                              Syntax
                              modelClassName::find(idVALOfTheColumn);
                              Applied Syntax
                $locateData = Post::find(2);
                              return $locateData;
                              */

                              $locateData = Post::withTrashed()->where('id', 1)->get();
                                                ::onlyTrashed()
                              return $locateData;
                            });

                    <strong class="ProceduralProcessBoxTitleTitle">Lecture Title</strong>:<b> 53. Restoring deleted / trashed records</b>
                          <strong class="ProceduralProcessBoxTitle">step 1</strong>:Restore Soft Deleted Data
                              Route::get('/restoreSoftData', function () {

                                <b>Syntax</b>
                                ModelClassName::withTrashed()->where('columnName', value)->restore();
                                <b>Applied Syntax</b>
                                Post::withTrashed()->where('is_admin', 0)->restore();
                              });
                    <strong class="ProceduralProcessBoxTitleTitle">Lecture Title</strong>:<b> 54. Deleting a record permanently</b>
                          <strong class="ProceduralProcessBoxTitle">step 1</strong>:<span style="color:red">WARNING! PERMANENT DATA DELETION</span>
                              Route::get('/permanentDelete', function () {

                                <b>Syntax</b>
                                ModelClassName::withTrashed()->where('columnName', value)->forceDelete();
                                <b>Applied Syntax</b>
                                Post::withTrashed()->where('id', 1)->forceDelete();
                                      onlyTrashed
                              });


                </pre>
              </p>
          </section>


          <section class="sectionDivisions">
            <h1 class="masterBoxTitleSection">Section 11: Laravel Fundamentals - Database - Eloquent Relationships</h1>
            <div class="section11">
              <p>
                <h1 class="moduleContentBoxTitle">===56. One to One relationship===</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b>Create some column in the migrations for example in 2020_08_26_075011_create_posts_table.php</b>
                      &lt;?php

                      use Illuminate\Database\Migrations\Migration;
                      use Illuminate\Database\Schema\Blueprint;
                      use Illuminate\Support\Facades\Schema;

                      class CreatePostsTable extends Migration{
                          /**
                           * Run the migrations.
                           *
                           * @return void
                           */
                          public function up()
                          {
                              Schema::create('posts', function (Blueprint $table) {
                                  $table->id();
                         Eto<b>&#45;&#45;&#45;&#45;&#45;></b>$table->integer('user_id')->unsigned();
                                  $table->string('title');
                                  $table->text('content');
                                  $table->timestamps();
                              });
                          }

                          <span style="color:#FF184B">GANITO YAN KAPAG WALA KANG $table->integer('user_id')->unsigned();</span>
                          <b>
                          Illuminate\Database\QueryException
                          SQLSTATE[42S22]: Column not found: 1054 Unknown column 'posts.user_id' in
                          'where clause' (SQL: select * from `posts` where `posts`.`user_id` = 1 and `posts`.`user_id`
                          is not null and `posts`.`deleted_at` is null limit 1)

                          <span style="color:#FF184B">PERO KAPAG UPDATE `users` SET `id` = '3' WHERE `users`.`id` = 1;</span>
                          ErrorException
                          Trying to get property 'pullOutUsersPostsTable' of non-object

                          <span style="outline:2px solid #5CF558">PERO KAPAG UPDATE `users` SET `id` = '1' WHERE `users`.`id` = 3;</span>
                          {"id":1,"user_id":1,"title":"D","content":"","created_at":null,"updated_at":null,"is_admin":0,"deleted_at":null}
                          </b>

                          /**
                           * Reverse the migrations.
                           *
                           * @return void
                           */
                          public function down()
                          {
                              Schema::dropIfExists('posts');
                          }
                        }
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>: <span style="outline:2px solid #5CF558">For Testing</span>:<b>Insert some data for example in
                    2020_08_29_121420_create_users_table.php and to 2020_08_26_075011_create_posts_table.php manually in phpmyadmin</b>

                  <strong class="ProceduralProcessBoxTitle">step 3</strong>:<b>GoTo the parent class model for example at app\User.php</b>
                    &lt;?php

                    namespace App;

                    use Illuminate\Contracts\Auth\MustVerifyEmail;
                    use Illuminate\Foundation\Auth\User as Authenticatable;
                    use Illuminate\Notifications\Notifiable;

                    class User extends Authenticatable{
                        use Notifiable;

                        /**
                         * The attributes that are mass assignable.
                         *
                         * @var array
                         */
                        protected $fillable = [
                            'name', 'email', 'password',
                        ];

                        /**
                         * The attributes that should be hidden for arrays.
                         *
                         * @var array
                         */
                        protected $hidden = [
                            'password', 'remember_token',
                        ];

                        <b>/./././././././/./././././././HERE!!!/./././././././/./././././././</b>
                        public function pullOutUsersPostsTable () {

                          <span class="syntax">Syntax</span>
                          return $this->hasOne('namespace'); -> this is going to the [[posts table(<b>phpMyAdmin</b>)|<&#45;>|modelClassName(<b>Post.php</b>)]] and gonna look for column user_id automatically!
                          If you named it differently
                          return $this->hasOne('namespace', 'specify_this_id');
                          <span class="syntax">Applied Syntax</span>
                          return $this->hasOne('App\Post');
                        }
                        <b>/./././././././/./././././././HERE!!!/./././././././/./././././././</b>

                        /**
                         * The attributes that should be cast to native types.
                         *
                         * @var array
                         */
                        protected $casts = [
                            'email_verified_at' => 'datetime',
                        ];
                      }
                    <strong class="ProceduralProcessBoxTitle">step 4: Routes</strong>:<b>So if the above one is finish and we have some data, we can pull out information in the User.php</b>
                    <b>IMPORTANT! Import the User Class Model FIRST!!!</b>
                    <b>use App\User;</b>
                    Route::get('/user/{id}/post', function ($id) {

                      //Access this column's values as properties
                      return User::find($id)->pullOutUsersPostsTable;
                    });
                </pre>
                <h1 class="moduleContentBoxTitle" style="background:red">===57. The inverse relation===</h1>
                <h1>SKIP KO MUNA TO HINDI GUMAGANA ErrorException Trying to get property 'name' of non-object  return Post::find($id)->postsTableThatBelongsToTheUsersTable->name;</h1>
                <pre>

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:Model(Post.php) Create/Declare that functionality
                      public function postsTableThatBelongsToTheUsersTable () {

                        return $this->belongsTo('App\User');

                      }

                  <strong class="ProceduralProcessBoxTitle">step 2</strong>:Route
                      Route::get('/post/{id}/user', function ($id) {
                        <span class="syntax">Syntax</span>
                            <b>return modelClassName::find($id)->functionalityOfModelClassName->name;</b>
                        <span class="appliedSyntax">Applied Syntax</span>
                            <b>
                              Route::get('/post/{id}/user', function ($id) {
                                return Post::find($id)->postsTableThatBelongsToTheUsersTable->name;
                              });

                            </b>


                </pre>
                <h1 class="moduleContentBoxTitle">===58. One to many relationship===</h1>

                <pre>

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:Model (User)



                            <b>
                              public function oneUsersCanPostMany () {
                                return $this->hasMany('App\Post');
                              }
                            </b>


                  <strong class="ProceduralProcessBoxTitle">step 2</strong>:Route
                  Notes: <span class="syntax">Syntax</span>
                        $storedValue->declaredFunction as $forEachNameWhatever
                            <b>
                              Route::get('/onetomany', function () {
                                $user = User::find(1);

                                foreach ($user->oneUsersCanPostMany as $forEveryUserCanPostMany) {
                                  echo $forEveryUserCanPostMany->title . "&lt;br>";
                                }
                              });

                            </b>


                </pre>
                <h1 class="moduleContentBoxTitle"style="background:red">===60-61. Many to many relations Pivot Tables - To Relate Other Tables (OrToRelate Those 2 Tables)===</h1>

                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b>Create a Migration through Terminal (Git Bash Integration within your IDE)</b>
                        <span class="takeNote">Remember/Take Note</span>:Making a Model also creates a <b>Migration Table</b>
                      php artisan make:model Role <span class="takeNote">Remember/Take Note</span>:This will gonna make a Plural Version of this word all lowercase for the table

                      php artisan make:model Role -m

                  <strong class="ProceduralProcessBoxTitle">step 2</strong>:<b>The Pivot Table Migration Creation</b>

                  <span class="takeNote">Remember/Take Note</span>:Its gonna treat it like a pivot table and its gonna <b>Singularize</b> it

                  For example if you want to relate a table named users and roles you should follow this convention in Alphabetical Order and Singular  <b>--create=role_user</b>


                  php artisan make:migration create_users_roles_table --create=role_user

                  <strong class="ProceduralProcessBoxTitle">step 3</strong>:<b>The Model Migration.php file</b>

                      <b>
                        public function up()
                        {
                            Schema::create('roles', function (Blueprint $table) {
                                $table->increments('id');
                                $table->string('name');
                                $table->timestamps();
                            });
                        }

                      </b>
                  <strong class="ProceduralProcessBoxTitle">step 4</strong>:<b>The Pivot Migration.php file</b>
                      <b>
                        public function up()
                        {
                            Schema::create('role_user', function (Blueprint $table) {
                                $table->increments('id');
                                $table->integer('user_id');
                                $table->integer('role_id');
                                $table->timestamps();
                            });
                        }

                      </b>
                  <strong class="ProceduralProcessBoxTitle">step 5</strong>:<b>Model that has many relationships in our case the User.php</b>
                      <b>
                        public function roles () {
                          return $this->belongsToMany('App\Role');
                        }
                      </b>
                  <strong class="ProceduralProcessBoxTitle">step 6</strong>:<b>Routes for Testing</b>
                      <b>
                        Route::get('manyToMany/{id}', function ($id) {
                          $user = User::find($id)->roles;
                          or
                          $user = User::find($id);
                          foreach($user->roles as $role){
                            return $role->name;

                          }
                          or
                          $user = user::find(1)->roles()->orderBy('id', 'desc')->get();
                          return $user;
                        });
                      </b>

                </pre>
                <h1 class="moduleContentBoxTitle">62. Querying intermediate table</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b></b>
                </pre>
                <h1 class="moduleContentBoxTitle">63-64. Has many through relation</h1>
                <pre>
                  Explanation: For example we can have a users table, posts table and of course
                  we can also have and have a country table. Let say the user belongs to country
                  But to another table where the user is from

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b>Create a Model</b>
                  <span class="takeNote">Remember/Take Note</span>:Creating a Model also creates a <b>Migration Table</b> for that Model
                  <span class="takeNote">Remember/Take Note</span>:Laravel makes the class name like this <b>CreateCountriesTable</b> & <b>makes the model a Plural and all lowercase Country->countries</b>
                  In the migrations.php file
                      <b>php artisan make:model Country -m</b>
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>:<b>Add a Col Through Laravel's make:migration through an already existing Database or Migrations Table(Its just what I call it for convenience sake)</b>
                  <span class="takeNote">Remember/Take Note</span>:Laravel makes the class name like this <b>AddCountryIdColumnToUsers</b>
                      <b>php artisan make:migration add_country_id_column_to_users --table=users</b>
                  <strong class="ProceduralProcessBoxTitle">step 3</strong>:<b>Inside Migrations:2020_08_31_124008_add_country_id_column_to_users.php</b>
                  <b>
                  &lt;?php

                  use Illuminate\Database\Migrations\Migration;
                  use Illuminate\Database\Schema\Blueprint;
                  use Illuminate\Support\Facades\Schema;

                  class AddCountryIdColumnToUsers extends Migration
                  {
                      /**
                       * Run the migrations.
                       *
                       * @return void
                       */
                      public function up()
                      {
                          Schema::table('users', function (Blueprint $table) {
                              //
                              $table->integer('country_id');
                          });
                      }

                      /**
                       * Reverse the migrations.
                       *
                       * @return void
                       */
                      public function down()
                      {
                          Schema::table('users', function (Blueprint $table) {
                              //
                              $table->dropColumn('country_id');
                          });
                      }
                  }
                </b>
                  <strong class="ProceduralProcessBoxTitle">step 4</strong>:<b>Inside Migrations:2020_08_31_123817_create_countries_table.php</b>
                  &lt;?php

                  use Illuminate\Database\Migrations\Migration;
                  use Illuminate\Database\Schema\Blueprint;
                  use Illuminate\Support\Facades\Schema;

                  class CreateCountriesTable extends Migration
                  {
                      /**
                       * Run the migrations.
                       *
                       * @return void
                       */
                      public function up()
                      {
                          Schema::create('countries', function (Blueprint $table) {
                              $table->increments('id');
                              $table->string('name');
                              $table->timestamps();
                          });
                      }

                      /**
                       * Reverse the migrations.
                       *
                       * @return void
                       */
                      public function down()
                      {
                          Schema::dropIfExists('countries');
                      }
                  }
                  <strong class="ProceduralProcessBoxTitle">step 5</strong>:<b>Migrate It</b>
                  <strong class="ProceduralProcessBoxTitle">step 6</strong>:<b>phpmyadmin manual data insertion for testing</b>
                  <strong class="ProceduralProcessBoxTitle">step 7</strong>:<b>Model:Country.php</b>
                  &lt;?php

                  namespace App;

                  use Illuminate\Database\Eloquent\Model;

                  class Country extends Model
                  {
                      //
                      public function pullingOutThePostForASpecificCountyThroughThisModel() {
                        return $this->hasManyThrough('App\Post', 'App\User', 'country_id'); <span class="takeNote">
                                                              This Method uses 2 Tables, The first argument passed is the name of the final model we wish to access
                                                                                         2nd Intermediate Model where it gets the country_id from
                                                                                         3rd Customize if you have a different column name not following Laravel's conventions
                                                                                         since we already named it exactly "country_id" no need to add a 3rd Col
                                                                                            </span>
                         <span class="takeNote">
                           In order for us to get the user_id if we have a different name like $table->integer('user_id')->unsigned(); from the migration tables from posts like
                           instead of the "user_id", we have like "the_user_id" -> this will be the 4th Col in the method.

                           <b>App\Post</b> -> locates automatically $table->integer('user_id')->unsigned(); if defined in the table and following the recommended Laravel's
                           Convention of naming models to find id's automatically

                           <b>App\User</b> -> locates automatically $table->integer('country_id'); if defined in the table and following the recommended Laravel's Convention
                           of naming models to find id's automatically

                           for example we have a model created in Git Bash User
                           1)class CreateUsersTable
                           2)users (table name)
                           3)users_id (the users id column -> $table->increments('id');)
                         </span>

                      }
                  }


                  <strong class="ProceduralProcessBoxTitle">step 8</strong>:<b>Routes</b>Pulling out the information for testing
                    Route::get('example/user/country', function () {
                      $country = Country::find(1);

                      <span class="syntax">Syntax</span>
                      foreach ($country->funcDecInSomeClass as $forEachItemGetListFunctionVariable)
                      <span class="appliedSyntax">Applied Syntax</span>

                      use App\Country;
                      <em class="important">Don't forget to include the class or the namespace above!</em>
                      foreach ($country->pullingOutThePostForASpecificCountyThroughThisModel as $post) {
                        return $post->title;
                      }

                      <span class="takeNote">We are going to use the users table to find that country we specified in the column</span>
                    });

                    <strong class="ProceduralProcessBoxTitle">step 9</strong>:<b>Browser</b>Testing phase
                    <span class="error">Class 'app\Post' not found</span>
                    Wala ata kasi akong data sa posts table try natin lagyan
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1608303321482390619/458C51976B71913EEE6D33F160B293935234F1E5/" alt="data columns">
                    <b><span class="fixError">Update: gawin lang pala app->App/Post Pero walang nagpapakita sa screen HAHA</span></b>

                    <b><span class="fixError">Update: Slight Adjustments sa phpmyadmin</span></b>
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1608303321482575248/73FC92DC5714F065541B6C22A1A596FED848DCCB/"
                    style="width: 100vh; height: auto" alt="data columns">

                </pre>
                <h1 class="moduleContentBoxTitle">65-66. Polymorphic relation</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>
                    php artisan make:model Photo -m
                  <strong class="ProceduralProcessBoxTitle">step 2</strong> In <b>2020_09_01_093439_create_photos_table.php </b>
                  &lt;?php

                  use Illuminate\Database\Migrations\Migration;
                  use Illuminate\Database\Schema\Blueprint;
                  use Illuminate\Support\Facades\Schema;

                  class CreatePhotosTable extends Migration
                  {
                      /**
                       * Run the migrations.
                       *
                       * @return void
                       */
                      public function up()
                      {
                          Schema::create('photos', function (Blueprint $table) {
                              $table->increments('id');
                              $table->string('path');
                              $table->integer('imageable_id');
                              $table->string('imageable_type');
                              $table->timestamps();
                          });
                      }

                      /**
                       * Reverse the migrations.
                       *
                       * @return void
                       */
                      public function down()
                      {
                          Schema::dropIfExists('photos');
                      }
                  }
                  <strong class="ProceduralProcessBoxTitle">step 3</strong>
                    php artisan migrate

                    In posts we have the <span class="takeNote">$table->integer('user_id')->unsigned();</span> which we don't want anymore or don't need it
                    because we are going to be using Polymorphic Relations and we will just comment it out or remove it and do a rollback.

                  <strong class="ProceduralProcessBoxTitle">step 4</strong> Manual Data Insertion in phpMyAdmin panoorin mo na lang natamad ako 2.51 66. Polymorphic relation part 2
                  <strong class="ProceduralProcessBoxTitle">step 5</strong> In<b>App\Photo</b>
                  &lt;?php

                  namespace App;

                  use Illuminate\Database\Eloquent\Model;

                  class Photo extends Model {


                    public function imageable () {
                      return $this->morphTo();
                    }

                  }
                  <span class="takeNote"> public function imageable -> We are following the naming convention from the API Docs in the laravel website link at the end of each section </span>
                  <strong class="ProceduralProcessBoxTitle">step 6</strong> In<b>App\Post</b>

                      public function photos () {
                        return $this->morphMany('App\Photo', 'imageable');
                      }
                  <strong class="ProceduralProcessBoxTitle">step 7</strong> In<b>App\User</b>
                      public function photos () {
                        return $this->morphMany('App\Photo', 'imageable');
                      }
                  <strong class="ProceduralProcessBoxTitle">step 8</strong> In<b>Routes</b>

                  Route::get('polymorphismRelate1', function () {
                    $user = User::find(1);

                    foreach ($user->photos as $photoForEach) {
                      return $photoForEach;
                    }
                  });
                  <b><span>Preview</span></b>
                  <img style="width: 60vw; height: auto" src="https://steamuserimages-a.akamaihd.net/ugc/1608303321486567381/6563C01FE80F3DCC962A45E0F1D43B6530DF3BB4/"
                  <b class="assetFiles"> <a style="display:block" href="https://www.facebook.com/groups/298553727448221/permalink/642535243050066/">Asset/Src Reference Files (SQL)</a></b>
                  <strong class="ProceduralProcessBoxTitle">step 9</strong> In<b>Routes:Post</b> Cont'ued
                  Route::get('polymorphismRelate1', function () {
                    $post = Post::find(1);

                    foreach ($post->photos as $photoForEach) {
                      return $photoForEach->path;
                    }
                  });
                  <strong class="ProceduralProcessBoxTitle">step 10</strong> In<b>phpMyAdmin- Making an image for a specific post in depending on the posts id</b> add another picture
                    <span class="processedure">1.photos</span>
                    <span class="processedure">2.insert, path=another.jpg, imageable_id=1, imageable_type=App\Post</span>
                    <span class="processedure">3.Routes</span>
                    <b>
                        Route::get('polymorphismRelate1/{id}', function ($id) {
                          $post = Post::find($id);

                          foreach ($post->photos as $photoForEach) {
                            echo $photoForEach->path . "&lt;br>";
                          }
                        });
                    </b>
                </pre>
                <h1 class="moduleContentBoxTitle">67. Polymorphic relation the inverse - REVIEW </h1>
                <pre>

                  How to pull the owner of the image
                  <p>
                    Polymorphic relations allow a model to belong to more than one other model,
                    on a single association. For example, you might have a photo model that belongs
                    to either a staff model or an order model. We would define this relation like so:
                  </p>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong> <b></b>
                      Route::get('polyInverse/{id}/pullPost', function ($id) {
                        $photo = Photo::findOrFail($id);
                        return $photo->imageable;
                      });

                    API Documentation References: https://laravel.com/docs/4.2/eloquent -> imageable
                                                  https://laravel.com/docs/7.x/eloquent
                </pre>
                <h1 class="moduleContentBoxTitle">68-69. Polymorphic relation many to many</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong> <b>php artisan make:model Video -m</b>
                      Let's just create a model right away just in <b>CASE</b> we need it
                      php artisan make:model Tag -m
                      php artisan make:model Taggable -m
                  <strong class="ProceduralProcessBoxTitle">step 2</strong> <b>Add Col's to migrations</b>
                        public function up()
                        {
                            Schema::create('videos', function (Blueprint $table) {
                                $table->increments('id');
                                $table->string('name');
                                $table->timestamps();
                            });
                        }
                        public function up()
                        {
                            Schema::create('tags', function (Blueprint $table) {
                                $table->increments('id');
                                $table->string('name');
                                $table->timestamps();
                            });
                        }
                        public function up()
                        {
                            Schema::create('taggables', function (Blueprint $table) {
                                $table->increments('id'); -> He said we don't even need this increments to be honet with you so he removed it.
                                $table->integer('tag_id');
                                $table->integer('taggable_id'); -> This means let say we have a video with an id#1 this is where we go
                                $table->string('taggable_type'); -> Here we're gonna have the model so this is gonna be--> App/Video
                            });
                        }
                  <strong class="ProceduralProcessBoxTitle">step 3</strong> <b>App/Post</b>
                    So NOW we are ready to define the relationships on the MODEL, so the post and the video Model should have the tags method in there
                    thats the one that calls the morphToMany Method on the Eloquent Class

                    public function tags () {
                      because we want to be able to tag the post or we wanna be able to say
                      I wanna get all the tags from the post right? So this is where we gonna
                      have the tags method

                      return $this->morphToMany('App\Tag', 'taggable');

                  <strong class="ProceduralProcessBoxTitle">step 3</strong> <b>App/Tag</b>
                      Hey listen! the post wants you so

                      public function posts () {
                        So now on this, this is we're gonna define the method for each of its related models alright
                        Syntax
                        return $this->morphedByMany(<span class="syntax">'Whos goona be shared from'</span>,<span class="syntax">'Taking the singular name of the table'</span>); -> This tag is gonna be shared by many
                        Applied Syntax
                        return $this->morphedByMany(<span class="appliedSyntax">'App\Post'</span>,<span class="syntax">'taggable'</span>); -> This tag is gonna be shared by many
                      }
                      public function videos () {
                        return $this->morphedByMany('App\Video','taggable');
                      }

                    }

                </pre>
                <h1 class="moduleContentBoxTitle">70. Polymorphic relation many to many - retrieving</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong> <b>phpMyAdmin - Manual Data Insertion for Testing purposes</b>
                  <div style="border:4px solid red; margin:5vh 6vw;">
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1637576917128154293/9A8A26D67A9CB9FDECE96C1210B644D5A93E076A/" alt="videos"><img src="https://steamuserimages-a.akamaihd.net/ugc/1637576917128157434/7BB4E5586F6A0D5645E33ACE9ED9528FED195859/" alt="tags">
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1637576917128176686/6960D1FE2AB9B1AE31B8E0C5C4C222B886CEA6BD/" alt="taggables"><img src="https://steamuserimages-a.akamaihd.net/ugc/1637576917128183730/41ED4D9B31F08DF75700482DD8D72C9AEC13AD34/" alt="posts">
                  </div>
                  <strong class="ProceduralProcessBoxTitle">step 2</strong> <b>Routes -> Testing</b>
                  Route::get('polyManyToMany', function () {
                    $polyManyToMany = Post::find(1);
                    foreach ($polyManyToMany->tags as $pullForEachList) {
                      echo $pullForEachList->name;
                    }
                  });
                  as you can see the posts tag for that one is Javascript
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637576917128205484/C55F3060C99D4DE9F72F96483852432CECA0634A/" alt="taggables">
                  <b class="assetFiles"><a href="https://www.facebook.com/groups/298553727448221/permalink/643096252993965/">Asset/Src Reference Files (SQL)->70. Polymorphic relation many to many - retrieving</a></b>
                  So now we can also retrieve the owner of the polymorphic relation from the polymorphic model by testing the name of the method that performs the call to morphedByMany
                </pre>
                <h1 class="moduleContentBoxTitle">71. Polymorphic relation many to many - retrieving owner</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong> <b></b>
                  Is time for us to pull out the owner of our polymorphic relation.
                  Route::get('retrievingOwner', function () {
                    $polyManyToManyTag = Tag::find(1);
                    foreach ($polyManyToManyTag->posts as $pullForEachList) {
                      echo $pullForEachList->title;
                    }
                  });
                  Result: <span class="error">Wala nanaman nag papakita</span>
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637576917128252189/27E8049C4E9496A4A601E97CA5D1530CB1DEA822/" alt="wala display e">
                  Update: <span class="breakDown"> <b class="breakDown">
                    Route::get('retrievingOwner', function () {
                      $polyManyToManyTag = Tag::find(1);
                      return $polyManyToManyTag;
                    });
                    Result: {"id":1,"name":"PHP","created_at":null,"updated_at":null}
                  </b> </span>
                  Update: Located Problem

                  <span class="fixError"><img src="https://steamuserimages-a.akamaihd.net/ugc/1637576917128298607/3D6B4E902DA573B7DDD49BAC15CD1CC5F9BD8FB9/"></span>

                  Route::get('retrievingOwner', function () {
                    $polyManyToManyTag = Tag::find(2);
                    foreach ($polyManyToManyTag->posts as $pullForEachList) {
                      echo $pullForEachList->title;
                    }
                  });
                  Result: <span class="fixError"><img src="https://steamuserimages-a.akamaihd.net/ugc/1637576917128304453/52DF6C77BFCEE6C582EAAE15EF2C8C9AE8AA32ED/"></span>
                </pre>



              </p>
              </p>
            </div>
          </section>


          <section class="sectionDivisions">
            <h1 class="masterBoxTitleSection">Section 12: Laravel Fundamentals - Database - Tinker</h1>
            <div class="section12">
              <p>
                <h1 class="moduleContentBoxTitle">===73. Creating data with tinker===</h1>
                <pre>

                    Tinker is a little command tool that we have, well it works with php artisan
                    but this little tool is going to allow us to play around with our db its called <b>TINKER</b>
                    we can create objects and we can insert data we can do basically the <b>CRUD</b> and we can even
                    check for relationships we can do alot of stuff here without messing around with routes or the browser
                    anything like that

                    <strong class="ProceduralProcessBoxTitle">step 1</strong>:
                        <b>php artisan tinker</b>
                    <strong class="ProceduralProcessBoxTitle">step 2</strong>: <b>Insert some records through tinker mode CLI</b>
                        <span class="syntax">Syntax</span>
                        $createAVariable = AssocArray[Model Namespace::create('yourDbCol'=>'yourInput')];
                        <span class="appliedSyntax">Applied Syntax</span>
                        $post = App\Post::create(['title'=>'PHP post from tinker','content'=>'PHP content from tinker']);
                        <img src="https://steamuserimages-a.akamaihd.net/ugc/1637576917129742146/E6E34CE90415A90049B7FCD4346253226C9ADD40/">
                        if you want to access that array again you just type the variable name
                    <strong class="ProceduralProcessBoxTitle">step 2</strong>: <b>Create an Object</b>
                        <span class="syntax">Syntax</span>
                        <b>$variableName = new ModelNamespace;</b>
                        <span class="appliedSyntax">Applied</span>
                    <b>$post = new App\Post;</b>
                    <strong class="ProceduralProcessBoxTitle">step 3</strong>: <b>Access the object properties/methosds and also we can assign values to them</b>
                        <b>$post->title = "New Title from this object, TINKER";</b>
                        <span class="takeNote">NOTE</span>:<b>It is not yet in the Database yet</b>

                        We can build an object and not put anything there and we can do this
                        <b>$post->content='yeah baby I"m coding; '</b> Oyy may space ah yung quotes sa dulo try lang kung wala pinag iba
                        ganito yung lumabas
                        <img src="https://steamuserimages-a.akamaihd.net/ugc/1637576917129790274/949BD8FBF8BE17DFEE2103B68208E89129FC98BF/">
                    <strong class="ProceduralProcessBoxTitle">step 4</strong>: <b>To save it in the database</b>
                        <b>$post->save()</b>||<b>$post->save();</b>
                        <img src="https://steamuserimages-a.akamaihd.net/ugc/1637576917129805587/5DB168525D1DDD5E8D4FC472AA1BA6077F697358/">
                </pre>
                <h1 class="moduleContentBoxTitle">74. Finding record and using constraints in tinker</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:
                      <b>$post = App\Post::find(6);</b>

                      Remember this is not tinker functionality this is ELOQUENT to pull information out
                      with constraints <b>$post = App\Post::where('id', 6)->first();</b>
                                       <b>$post = App\Post::whereId(6)->first();</b>


                  <strong class="ProceduralProcessBoxTitleTitle">75. Updating and deleting with tinker</strong>:

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:
                      <span class="processedure">1 - Find first the records that you want</span>
                        <b>$post = App\Post::find(3);</b>

                      <span class="processedure">2 - Update/Overwrite/Set the value of the property you want to change</span>
                        <b>$post->title = "Updated record with id of 3";</b>
                        <b>$post->content = "Updated Content record with id of 3";</b>

                        <b class="takeNote">NOTE</b>: Not yet in the Db yet
                      <span class="processedure">3 - Save to update database</span>
                      <b>$post->save()</b>

                  <strong class="ProceduralProcessBoxTitle">step 2</strong>: If you want to DELETE a table column
                          <span class="options">1</span> $post->delete() <b class="takeNote">NOTE</b>: This is just deleted with a timestamp recorded not PERMANENT DELETE
                          <span class="options">2</span> $post=App\Post::onlyTrashed() <b class="takeNote">NOTE</b>: To put it in the trash bin
                          <span class="options">3</span> $post->forceDelete() <b class="takeNote">NOTE</b>: <b style="color:red">PERMANENT DELETE</b>

                  <strong class="ProceduralProcessBoxTitleTitle">76. Playing around with relations in tinker</strong>:

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>: If you set the relations properly in App\Models

                      <b class="processedure">$usr = App\User::find(1);</b>
                      <img src="https://steamuserimages-a.akamaihd.net/ugc/1637576917129926980/070B572C9C51662197BAD3FEAFD75B2703046722/">
                      <b class="options">Opt 1</b>:<b class="processedure">$usr->posts;</b> : Alright so it cannot find the user because it has not been set up. So it is looking for the users table's id in posts table

                      <b class="breakDown">Breakdown</b> To fix this, go to the migrations table:posts then include this in the table

                      <b>
                        public function up()
                        {
                            Schema::create('posts', function (Blueprint $table) {
                                $table->id();

                                $table->string('title');
              &rsaquo;&rsaquo;                $table->integer('user_id')->unsigned();  &lsaquo;&lsaquo; <b class="takeNote">NOTE</b>: When you want to find the id of a table automatically in Laravel just
                                                                                                                                      type the name of the table <b>SINGULAR all lowercase</b>
                                $table->text('content');
                                $table->timestamps();
                            });
                        }

                      </b>
                      but for now kasi kapag minay-grate ko, mawawala yung mga inin-sert nating data kaya eto na lang muna check nalang natin ito
                      <b class="options">Opt 2</b>: <b>$usr->roles</b>

                </pre>
                <h1 class="moduleContentBoxTitle">79. Database configuration and migration (Master Prac: OneToOne Relationships)</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:
                    <span class="processedure">Method 1</span> <b>php artisan make:model Address -m(Address.php)</b> || <span class="options">Opt</span>:<b>php artisan make:model oneToOneAddress -m(oneToOneAddress.php)</b>

                    <span class="processedure">Method 2</span> Inside <b>2020_09_03_053711_create_addresses_table.php</b>


                    class CreateAddressesTable extends Migration                                 class CreateOneToOneAddressesTable extends Migration {
                    {                                                                                 public function up() {}
                        /**                                                                             Schema::create('one_to_one_addresses', function (Blueprint $table) {
                         * Run the migrations.                                                            $table->id();
                         *                                                                                $table->integer('user_id')->unsigned()->nullable();
                         *                                                                                $table->string('name');
                         * @return void                                                                  $table->timestamps();
                         */                                                                             });
                        public function up()                                                          }
                        {                                                                         }
                            Schema::create('addresses', function (Blueprint $table) {
                                $table->id();
                                $table->integer('user_id')->unsigned()->nullable();
                                $table->string('name');
                                $table->timestamps();
                            });
                        }




                    <span class="processedure">Method 3</span> <b>php artisan migrate</b>

                    <span class="ProceduralProcessBoxTitleTitle">Title</span>: <b>80. Setting up Relations</b> Inside its model
                      public function address () {
                        <span class="options">Opt 1</span><b> return $this->hasOne('App\Address');</b>

                        <span class="options">Opt 2</span><b> return $this->hasOne('App\oneToOneAddress');</b>
                      }
                    <span class="ProceduralProcessBoxTitleTitle">Title</span>: <b>81. Creating data for user</b>
                        <span class="takeNote">NOTE</span>:Don't forget to add the namespace of every model on top of the web.php

                        <span class="takeNote">NOTE</span>:START
                        $address - We are going to Instantiate an(INSTANCE and an ASSOC ARRAY) an object from the Address model and put the data in there
                        and then use the relationship if you don't know what this is you need to study OOP

                        new - This is where we instantiating this
                        $address = new ModelClassName[Assoc Array];- you don't need to set it up in the phpMyAdmin
                        save() - takes an instance
                        <span class="takeNote">NOTE</span>:END

                        use App\User;
                        use App\Address;

                    <span class="ProceduralProcessBoxTitle">step 1</span>: <b>Routes-set properties & values</b>
                        Route::get('/insert', function () {
                          $user = User::findOrFail(1);


                   <span class="syntax">Syntax</span>:<b>$address = new ModelClassName then set a (['Property/Method'=>'Value']);</b>
           <span class="appliedSyntax">Applied Syntax</span>:<b>$address = new Address(['name'=>'1234 Houston av NY 11218']);</b>

                   <span class="syntax">Syntax</span>:<b>$varName->method declared in the Model to be use to get the object properties()->save();</b>
           <span class="appliedSyntax">Applied Syntax</span>:<b>$user->address()->save($address);</b>


                        });
                    <span class="ProceduralProcessBoxTitle">step 2</span>: of course <b>Manual Data Insertion</b>for testing
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577030744135160/74FD457601A61DB7AC52CF3AFD6A5F23ED575504/">

                    <span class="ProceduralProcessBoxTitle">step 3</span>:GoTo the hasOne relationship Model In our case<b>Address or oneToOneAddress.php</b>

                    Hey listen! Laravel you need to allow the namefield

                    protected $fillable = [
                      'name'
                    ];
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577030744230666/D53A48C10B2BA0BB0DBC004ED4E1B46F5BCA9C5E/">

                  <span class="ProceduralProcessBoxTitleTitle">Title</span>: <b>82. Updating Data</b>
                  <span class="takeNote">NOTES</span>:START
                  $addr = Address::whereUserId(1)->first(); - returns an object
                  <span class="takeNote">NOTES</span>:END
                  <span class="ProceduralProcessBoxTitle">step 1</span>:<b>Routes-Update an existing record</b>
                      Route::get('/updateOneToOne', function () {
                        $addr = Address::whereUserId(1)->first();
                        $addr->name = "Update new addr";
                        $addr->save();
                      });
                  <span class="ProceduralProcessBoxTitle">step 2</span>:<b>check your database(phpMyAdmin)</b>
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577030744916306/9E06CF66E8842BB7161B9127C75B3637DA10C3E1/">

                  <span class="ProceduralProcessBoxTitleTitle">Title</span>: <b>83. Reading and deleting data</b>
                  <span class="ProceduralProcessBoxTitle">step 1</span>:<b>Routes-Read data</b>
                      Route::get('/readOneToOne', function () {
                        $read = User::findOrFail(1);
                        echo $read->address->name;
                      });

                  <span class="ProceduralProcessBoxTitle">step 2</span>:<b>Routes-Delete data</b>
                      Route::get('/delOneToOne', function () {
                        $findFrstUserThenDelete = User::findOrFail(1);
                        echo $findFrstUserThenDelete->address()->delete();
                        return "done deleted";
                      });
                      <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577030744947158/2702BFC470ABC63C690BEC95143429AD74538188/">


              </p>
            </div>
          </section>
          <section class="sectionDivisions">
            <h1 class="masterBoxTitleSection">Section 14: Database - Eloquent One to Many Relationship CRUD</h1>
            <div class="section12">
              <p>
                <h1 class="moduleContentBoxTitle">===85. Database migrations===</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b>Make:Model</b>
                    php artisan make:model Post -m
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>:<b>Inside the Migrations php file</b>
                  <strong class="processedure">P1</strong><b>2020_08_26_075011_create_posts_table.php</b> <b>class CreatePostsTable</b> <b>'posts'</b>
                  public function up()
                  {
                      Schema::create('posts', function (Blueprint $table) {
                          $table->id();
                          <b class="important">$table->integer('user_id')->unsigned()->nullable()->index();</b>
                          <b>$table->string('title');</b>
                          <b>$table->text('body');</b>
                          $table->text('content');
                          $table->timestamps();
                      });
                  }
                  <strong class="processedure">P2</strong><b>php artisan migrate</b>
                  <strong class="ProceduralProcessBoxTitleTitle">Title</strong>:<b>86. Relationships and mass assignment</b>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong> <b>GoTo Parent Model->(App\User)</b>

                  <span class="takeNote">NOTE</span>:Making the function name plural so that it has to do with many relationships
                    public function postsTableAssignedToUserHasManyPosts () {
                      return $this->hasMany('App\Post');
                    }
                  <span class="processedure">P1</span> In<b>App\Post</b> <b>Mass Assigning</b>
                    <b class="takeNote">NOTE</b>:Hey! Laravel listen, this field is okay
                    to receive a request to create a data in our database

                    protected $fillable = [
                      'title',
                      'body'
                    ];

                    <strong class="ProceduralProcessBoxTitleTitle">Title</strong>:<b>87. Inserting Data</b>
                    <strong class="ProceduralProcessBoxTitle">step 1</strong> creating table database properties in <b>TINKER</b>
                        <span class="processedure">P1</span><b>php artisan tinker</b>
                        <span class="processedure">P2</span><b>App\User::create(['name'=>'Pocholo Armendi','email'=>'cholo@codingfaculty.com','password'=>bcrypt("123")])</b>
                    First of all lets find the user if you know there is none then lets create it in tinker para mapa-iba naman kaysa phpMyAdmin nalang lage at saka
                    tandaan mo yung mga columns galing sa ginawa mong model o migrations dapat match lang sila kung ilan ang inilagay mong column name dapat may value
                    respectively WALANG IWANAN!

                    <b class="takeNote">NOTE</b>:create() is insert values to an existing database column properties
                    <img style="width: 125.5vh" src="https://steamuserimages-a.akamaihd.net/ugc/1637577030750272767/BCF54C417D503A24D1F4CA6B0D07F0EA62F1AD10/">
                    <strong class="ProceduralProcessBoxTitle">step 2</strong> it's time for us to start the <b>Routes CRUD</b>
                      Route::get('/create', function () {
                        $user = User::findOrFail(1);

                        $userHasManyPost = new Post(['title'=>'My first post', 'body'=>'I love Laravel']);

                        $user->postsTableAssignedToUserHasManyPosts()->save($userHasManyPost);
                      });

                    <strong class="ProceduralProcessBoxTitleTitle">Title</strong>:<b>88. Reading Data</b>
                    <strong class="ProceduralProcessBoxTitle">step 1</strong> <b></b>

                    <b class="takeNote">NOTE</b>:START
                    dd($user->postsTableAssignedToUserHasManyPosts);- collections it is different than an php Array
                    dd($user); - returns an objects but because the user has a relationship hasmany then it is a collection like the above
                    <b class="takeNote">NOTE</b>:END

                      <b class="options">Opt 1</b>
                        Route::get('/read', function () {
                          $user = User::findOrFail(1);
                          return $user->postsTableAssignedToUserHasManyPosts;
                        });
                      <b class="options">Opt 2</b>
                        Route::get('/read', function () {
                          $user = User::findOrFail(1);
                          dd($user->postsTableAssignedToUserHasManyPosts);
                        });
                      <b class="options">Opt 3</b>
                        Route::get('/read', function () {
                          $user = User::findOrFail(1);
                          foreach ($user->postsTableAssignedToUserHasManyPosts as $userHasThePostModelProperties) {
                            echo $userHasThePostModelProperties->title . "<br>";
                          }
                        });

                    <strong class="ProceduralProcessBoxTitleTitle">Title</strong>:<b>89. Updating Data</b>
                    <strong class="ProceduralProcessBoxTitle">step 1</strong> <b></b>


                      <b class="options">Opt 1</b>
                        Route::get('/update', function () {
                          $user = User::find(1);
                          $user->postsTableAssignedToUserHasManyPosts()->whereId(1)->update(['title'=>'I Love Laravel 8', 'body'=>'RTX 3070 & 3080']);
                        });
                      <b class="options">Opt 2</b>
                        Route::get('/update', function () {
                          $user = User::findorFail(1);
                          $user->postsTableAssignedToUserHasManyPosts()->where('id', '=', 1)->update(['title'=>'I Love Laravel 8', 'body'=>'RTX 3070 & 3080']);
                        });

                    <strong class="ProceduralProcessBoxTitleTitle">Title</strong>:<b>90. Deleting Data</b>
                    <strong class="ProceduralProcessBoxTitle">step 1</strong> <b></b>


                      <b class="options">Opt 1</b>
                        Route::get('/delete', function () {
                          $user = User::find(1);
                          $user->postsTableAssignedToUserHasManyPosts()->whereId(1)->delete();
                        });

                      <b class="options">Opt 2</b>: Delete All Posts
                        Route::get('/update', function () {
                          $user = User::findorFail(1);
                          $user->postsTableAssignedToUserHasManyPosts()->delete();
                        });




                </pre>
              </p>
            </div>
          </section>
          <section class="sectionDivisions">
            <h1 class="masterBoxTitleSection">Section 15: Database - Eloquent Many to Many Relationship CRUD</h1>
            <div class="section15">
              <p>
                <h1 class="moduleContentBoxTitle">92. Database migrations</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b></b>
                    <span class="takeNote">NOTE</span>:
                    <blockquote>
                      Remember we had 3 tables before when we are still learning the many to many relationships. We
                      had the roles, the_role_users and we had the users table. Those 3 tables need to be related
                    </blockquote>

                    <span class="processedure">P1</span>:<b>php artisan make:model Role -m</b>

                    don't forget the naming convention when creating a migration table example below
                    <span class="processedure">P2</span>:<b>php artisan make:migration create_role_user_table --create=role_user</b>
                    Ganito magiging itsura niya katapos mo ienter

                    1->make:migration <b>create_role_user_table</b> --create=<b>role_user</b>          --- kapag may underscore ka at singular form yung word mo
                    1->class <b>CreateRoleUserTable</b>                                         --- Kinapitalisize lang yung unang letra tapos walang space o underscore
                    2->Schema::create('<b>role_user</b>')                                       --- as is siya singular rin hindi naka plural

                    <blockquote>
                      In that way Laravel can guest or know that this is gonna be a <b>PIVOT</b> table a lookup table.
                      First of all putting it in an <b>ALPHABETHICAL ORDER</b>and then separate it by 2 words via <b>UNDERSCORE</b> separation.
                      Second we make the last word <b>SINGULAR</b>.
                      Third we have to relate the other tables that you want to link by getting their <b>id column field</b>
                    </blockquote>
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>:making some modifications in the <b>migrations php file(2020_09_05_124601_create_role_user_table.php)</b>
                    public function up()
                    {
                        Schema::create('role_user', function (Blueprint $table) {
                            $table->id();
                            $table->integer('user_id')->unsigned()->nullable()->index();
                            $table->integer('role_id')->unsigned()->nullable()->index();
                            $table->timestamps();
                        });
                    }
                  <strong class="ProceduralProcessBoxTitle">step 3</strong>:making some modifications in the <b>migrations php file(2020_09_05_124601_create_role_user_table.php)</b>
                    public function up()
                    {
                        Schema::create('roles', function (Blueprint $table) {
                            $table->increments('id');
                            $table->string('name');
                            $table->timestamps();
                        });
                    }

                  <span class="error">Nyek</span>
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577222256602157/5B1956C4ACFE25DE5032213704324CB871432B83/">
                  <span class="fixError">Parang Alam ko na kung saan</span> so pwede rin pala to <b>2020_08_31_051450_create_users_roles_table.php</b>
                      &lt;?php

                      use Illuminate\Database\Migrations\Migration;
                      use Illuminate\Database\Schema\Blueprint;
                      use Illuminate\Support\Facades\Schema;

                      class CreateUsersRolesTable extends Migration
                      {
                          /**
                           * Run the migrations.
                           *
                           * @return void
                           */
                          public function up()
                          {
                              Schema::create('role_user', function (Blueprint $table) {
                                $table->increments('id');
                                $table->integer('user_id');
                                $table->integer('role_id');
                                $table->timestamps();
                              });
                          }

                          /**
                           * Reverse the migrations.
                           *
                           * @return void
                           */
                          public function down()
                          {
                              Schema::dropIfExists('role_user');
                          }
                      }

                      Ma-review ko nga tong naming convention <b>BALIKAN</b> ko nga ulit!!! yung past section lectures tungkol dito sa UsersRoles na ito
                      hindi naman pala sinusunod yung ALPHABETHICAL ORDER kung whether maauna yung R sa U pwede naman pala U sa R tapos ganung parin
                      table name alam na agad ng LARAVEL <b>role_user</b> parin ang kakalabasan
                      <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577222256686185/C585135F30CEBABDC2A964F7295526A2723799E9/">
                      Ganito pala ginawa niya so pangalan lang yung class na may s konware users at roles tapos ang importante yung = sign Ganoon?
                      Ang naka Alphabetical yung naka = sign <b>REGARDLESS</b> kung may s or wala sa class word ng model OR table name sa phpMyAdmin
                      dapat mag match lang konware gusto mo yung users at roles table edi pwede rin gamiting yung Model Name lang na walang s

                  <strong class="ProceduralProcessBoxTitleTitle">Title</strong>:<b>93. Relationships and mass assignment</b>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b>App/User(Parent)</b>
                      public function rolesTablePropertyBelongingsIsOneOfManyUser () {
                        return $this->belongsToMany('App\Role');
                      }

                      <span class="takeNote">SIDENOTE</span>:
                      Participation   Cardinality

                      ->Mandatory     ->One
                      ->Optional      ->Many
                      ->Unspecified   ->Unspecified

                  <strong class="ProceduralProcessBoxTitle">step 2</strong>:<b>Mass Assignment</b>
                      &lt;?php

                      namespace App;

                      use Illuminate\Database\Eloquent\Model;

                      class Role extends Model {
                        protected $fillable = [
                          'name'
                        ];
                      }
                  <strong class="ProceduralProcessBoxTitleTitle">Title</strong>:<b>94. Inserting Data</b>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b>Manual Data Insertion of Data to tables through phpMyAdmin for Testing of returned results</b>
                      The User (Parent)
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>:<b>Routes</b> for testing if it worked!
                      Route::get('/syntaxCreate', function () {
                        $findUser = User::findOrFail(1);

                        <b>Injecting/Seting up</b> the roles table columns
                        <b class="syntax">Syntax</b>$instantiateTheUser = new classModelName(['Name a Property'=>'Give it a Value']);
                        <b class="appliedSyntax">Applied Syntax</b>$instantiateTheUser = new Role(['name'=>'Administrator']);

                        <b>Save</b> the roles table columns
                        $saveTheInstance = $findUser->methodDeclaredInParent()->save($instantiateTheUser);
                      });
                      Route::get('/create', function () {
                        $findUser = User::findOrFail(1);
                        $instantiateTheUser = new Role(['name'=>'Administrator']);
                        $saveTheInstance = $findUser->rolesTablePropertyBelongingsIsOneOfManyUser()->save($instantiateTheUser);
                      });
                  <strong class="ProceduralProcessBoxTitleTitle">Title</strong>:<b>95. Reading Data</b>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b>Routes</b> for testing if it worked!
                      Route::get('/readManyToMany', function () {
                        $findUser = User::findOrFail(1);
                        foreach ($findUser->rolesTablePropertyBelongingsIsOneOfManyUser as $forEachListObjects) {
                          dd($forEachListObjects);
                        }
                      });
                        OR

                      Route::get('/readManyToMany', function () {
                        $findUser = User::findOrFail(1);
                        dd($findUser->rolesTablePropertyBelongingsIsOneOfManyUser);
                      });

                        OR

                      Route::get('/readManyToMany', function () {
                        $findUser = User::findOrFail(1);
                        foreach ($findUser->rolesTablePropertyBelongingsIsOneOfManyUser as $forEachListObjects) {
                          echo $forEachListObjects->name;
                        }
                      });

                  <strong class="ProceduralProcessBoxTitleTitle">Title</strong>:<b>96. Updating Data</b>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b>Routes</b> for testing if it worked!
                      Route::get('/updateManyToMany', function () {
                        $findUser = User::findOrFail(1);
                        if ($findUser->has('roles')) {
                          foreach ($findUser->rolesTablePropertyBelongingsIsOneOfManyUser as $forEachListObjects) {
                            if ($forEachListObjects->name == 'Administrator') {
                              $forEachListObjects->name = 'admin';
                              $forEachListObjects->save();
                            }

                          }
                        }

                      });
                  <strong class="ProceduralProcessBoxTitleTitle">Title</strong>:<b>97. Deleting Data</b>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b>Routes</b> for testing if it worked!
                  <b class="options">Opt 1</b>
                      Route::get('/deleteManyToMany', function () {
                        $findUser = User::findOrFail(1);
                        $findUser->rolesTablePropertyBelongingsIsOneOfManyUser()->delete();
                      });
                  <b class="options">Opt 2</b>
                      Route::get('/updateManyToMany', function () {
                        $findUser = User::findOrFail(1);

                        foreach ($findUser->rolesTablePropertyBelongingsIsOneOfManyUser as $forEachListObjects) {
                          $forEachListObjects->whereId(1)->delete();
                        }

                      });
                  <strong class="ProceduralProcessBoxTitleTitle">Title</strong>:<b>98. Attaching, detaching and syncing</b>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b>Routes</b> for testing if it worked!
                  <b class="options">Opt 1</b> <b>attach</b>
                      Route::get('/attachManyToMany', function () {
                        $findUser = User::findOrFail(1);
                        $findUser->rolesTablePropertyBelongingsIsOneOfManyUser()->attach(2);
                      });
                  <b class="options">Opt 2</b> <b>detach</b>
                      Route::get('/detachManyToMany', function () {
                        $findUser = User::findOrFail(1);
                        $findUser->rolesTablePropertyBelongingsIsOneOfManyUser()->detach(2);
                        or detach all
                        $findUser->rolesTablePropertyBelongingsIsOneOfManyUser()->detach();
                      });
                      <b class="options">Opt 3</b> <b>sync</b>
                          Route::get('/syncManyToMany', function () {
                            $findUser = User::findOrFail(1);
                            $findUser->rolesTablePropertyBelongingsIsOneOfManyUser()->sync([id]);
                            then or detach all
                            $findUser->rolesTablePropertyBelongingsIsOneOfManyUser()->sync([id,id]);
                          });

                </pre>
              </div>




              </p>

          </section>

          <section class="sectionDivisions">
            <h1 class="masterBoxTitleSection">Section 16: Database - Eloquent Polymorphic Relationship CRUD</h1>
            <div class="section16">
              <p>
                <h1 class="moduleContentBoxTitle">100. Relationships and mass assignment</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:Setting up the main relationship in<b>App\Photo</b>Model php file
                      protected $fillable = ['path'];
                      public function imageable () {
                        return $this->morphTo();
                      }
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>:<b>App\Staff</b>
                      protected $fillable = ['name'];
                      public function photos () {
                        return $this->morphMany('App\Photo', 'imageable');
                      }

                  <strong class="ProceduralProcessBoxTitle">step 3</strong>:<b>App\Product</b>
                      protected $fillable = ['name'];
                      public function photos () {
                        return $this->morphMany('App\Photo', 'imageable');
                      }
                  <strong class="ProceduralProcessBoxTitleTitle">Title</strong>:101. Inserting Data
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">Get some data</em></b>
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>:<b><em class="steprocedure">Routing</em></b>
                      Route::get('/create', function () {
                        $staff = Staff::find(1);
                        $staff->photos()->create(['path'=>'example.jpg']);
                        $product = Product::find(1);
                        $product->photos()->create(['path'=>'thisIsFromProduct.jpg']);
                      });

                      <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577222262190509/B8D93F1318AEB887C090AD2F591DB4B38F62BC83/">
                      <blockquote cite="http://">
                        We can at the same time find the related model and then insert a pic to that specific model
                        Polymorphic Relations allow a model to belong to more than 1 other model in a single association
                        for example we could have a staff table and a product table and they both can be related to one other
                        table called photos

                        Hey listen! this photo belongsTo the staff table with the id of
                        and this belongsTo the product table model with an id of in that same table
                      </blockquote>
                  <strong class="ProceduralProcessBoxTitleTitle">Title</strong>:102. Reading Data

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">Routing</em></b>
                      Route::get('/read', function () {
                        $findStaff = Staff::find(1);

                        foreach ($staff->photos as $forEachListObjects) {
                          return $forEachListObjects->path;
                        }

                      });
                  <strong class="ProceduralProcessBoxTitleTitle">Title</strong>:103. Updating Data

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">Routing</em></b>
                      Route::get('/update', function () {
                        $findStaff = Staff::find(1);

                        $staffType = $staff->photos()->whereId(1)->first();
                        $staffType->path = "Updated example.jpg";
                        $staffType->save();
                      });
                  <strong class="ProceduralProcessBoxTitleTitle">Title</strong>:104. Deleing Data

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">Routing</em></b>
                  <b class="options">Opt 1</b>
                      Route::get('/delete', function () {
                        $findStaff = Staff::findOrFail(1);
                        $staffType = $staff->photos()->delete();
                      });
                  <b class="options">Opt 2</b>
                      Route::get('/delete', function () {
                        $findStaff = Staff::findOrFail(1);
                        $staffType = $staff->photos()->whereId(1)->delete();
                      });
                  <strong class="ProceduralProcessBoxTitleTitle">Title</strong>:105. Extra techniques

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">Data Insertion if there isn't any data to test to</em></b>
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577222264581442/6F954CE6364A518C52A33DC383E19AD17D883838/">
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577222264584120/1D08FC5C86C709F367CFDD99A946AB2F0B310102/">
                  <b class="options">Opt 1</b>
                      Route::get('/assign', function () {
                        $findStaff = Staff::findOrFail(1);
                        $findPhoto = Photo::findOrFail(7);
                        //Assign it to the Staff
                        $staffType = $findStaff->photos()->save($findPhoto);
                      });
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577222264639917/B29E62F7707573D86D0AC329543AF5B104404F7D/">
                  <b class="options">Opt 2</b> If you want to <b>Unassigned</b>
                  Route::get('/unassign', function () {
                    $findStaff = Staff::findOrFail(1);

                    //Unassign to the Staff you assigned
                    $unassigStaffType = $findStaff->photos()->whereId(7)->update(["imageable_id"=>'', 'imageable_type'=>""]);
                  });
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577222264695104/3E0E61D4F512370A4E1CB1434D816F87F0579421/">
                  <span class="fixError">Fix</span> $findStaff->photos()->whereId(7)->update(['imageable_id'=><b style="color:green">0</b>, 'imageable_type'=>'']);
                </pre>
              </div>
              </p>
          </section>
          <section class="sectionDivisions">
            <h1 class="masterBoxTitleSection">Section 17: Database - Eloquent Polymorphic Many to Many Relationship CRUD</h1>
            <div class="containerContentManagementDivision section17">
              <p>
                <h1 class="moduleContentBoxTitle">===107. Relationships and mass assignment===</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b>Making Tags in other Models</b>
                  <span class="takeNote">NOTE</span>:
                  Remember Tag Model - to share between Post & Video and we goona do this relationship in Taggable.

                  <span class="ProceduralProcessBoxTitle">step 1</span> <b class="steprocedure">App/Post</b>
                    public function tagsTableIsBeingMorphToManyByPost () {
                      return $this->morphToMany('App\Tag', 'Taggable');
                    }

                  If you want a tag in Video then you do the same thing
                  <span class="ProceduralProcessBoxTitle">step 2</span> <b class="steprocedure">App/Video</b>
                    public function tagsTableIsBeingMorphToManyByPost () {
                      return $this->morphToMany('App\Tag', 'Taggable');
                    }

                  and make sure to have mass assignments as well
                  <span class="ProceduralProcessBoxTitle">step 3</span> <b class="steprocedure">App/Tag</b>
                      &lt;?php

                      namespace App;

                      use Illuminate\Database\Eloquent\Model;

                      protected $fillable = ['name'];

                      class Tag extends Model {
                          //
                          public function posts () {
                            return $this->morphedByMany('App\Post','taggable');
                          }

                          public function videos () {
                            return $this->morphedByMany('App\Video','taggable');
                          }
                      }
                 <span class="ProceduralProcessBoxTitleTitle">Title</span>: <b>108. Inserting Data</b>
                 <span class="ProceduralProcessBoxTitle">step 1</span>: <b>Data Insertion</b>
                 <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577222264971661/5272B7566D2F14BC76610C7FF58BBC6AC413BDF4/">
                 <span class="ProceduralProcessBoxTitle">step 2</span>: <b>Routes</b> Make sure to also import the models at the very top
                    Route::get('createPolyManyToMany', function () {
                      $findPost = Post::create(['name'=>'My first post ']);
                      $findTag = Tag::findOrFail(1);

                      $findPost->tagsTableIsBeingMorphToManyByPost()->save($findTag);

                      $findVideo = Video::create(['name'=>'My first video.mov ']);
                      $findTag2 = Tag::findOrFail(2);

                      $findVideo->tagsTableIsBeingMorphToManyByVideo()->save($findTag2);
                    });
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577399235814056/D8675BF87652ACC552E2F71229AB83C9E0E026CC/">
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577399235819628/30EE73B13101CF20A039E6EE62172AA71534BD20/">
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577399235831262/4F96A96CA64693DB9FE8960AB4681FDAFA8E906D/">


                  <span class="ProceduralProcessBoxTitleTitle">Title</span>: <b>109. Reading and updating data</b>
                  <span class="ProceduralProcessBoxTitle">step 1</span>: <b class="steprocedure">Read</b>
                        Route::get('readPolyManyToMany', function () {
                          $getAndFindParentWhichIsPost = Post::findOrFail(1);
                          foreach ($getAndFindParentWhichIsPost->tagsTableIsBeingMorphToManyByPost as $forEachListObjects) {
                            echo $forEachListObjects;
                          }
                        });

                        <span class="options">OPT 1</span>then update
                        Route::get('updatePolyManyToMany', function () {
                          $getAndFindParentWhichIsPost = Post::findOrFail(1);
                          foreach ($getAndFindParentWhichIsPost->tagsTableIsBeingMorphToManyByPost as $forEachListObjects) {
                            $forEachListObjects->whereName('Php')->update(['name'=>'Updated PHP']);
                          }
                        });
                        <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577399235864685/529C55018A282FC5FB34A0F2E2D1C2A232BA416F/">
                        <span class="options">OPT 2</span>
                        Route::get('updatePolyManyToMany', function () {
                          $getAndFindParentWhichIsPost = Post::findOrFail(1);
                          $findTagId = Tag::find(2);
                          $getAndFindParentWhichIsPost->tagsTableIsBeingMorphToManyByPost()->save($findTagId);
                        });
                        <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577399235884947/0DD7596ABB26F2B0C2E8261AFC509331C4DD6F70/">
                        <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577399235887122/44158D2B9A91CC3568C6E4F6B2FC5681F4BD5472/">
                        <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577399235896367/26AA3DE2521C92E984EC0CE013974B62EB07C4B9/">
                        <span class="options">OPT 3</span> <b>Attaching Tags to Post</b>
                        Route::get('updatePolyManyToMany', function () {
                          $getAndFindParentWhichIsPost = Post::findOrFail(1);
                          $findTagId = Tag::find(3);
                          $getAndFindParentWhichIsPost->tagsTableIsBeingMorphToManyByPost()->attach($findTagId);
                        });
                        <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577399235906497/450E6A0228F895C511F808C30ABAC04B369757A6/">
                        <span class="options">OPT 4</span> <b>Synchronizing Tags to Post</b>
                        Route::get('updatePolyManyToMany', function () {
                          $getAndFindParentWhichIsPost = Post::findOrFail(1);
                          $findTagId = Tag::find(3);
                          $getAndFindParentWhichIsPost->tagsTableIsBeingMorphToManyByPost()->sync([1]);
                        });
                        <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577399235916473/D46039E290313CCAB0CEF548C5706E0E457603CB/">
                        <span class="options">OPT 5</span> <b>Synchronizing Tags to Post</b>
                        Route::get('updatePolyManyToMany', function () {
                          $getAndFindParentWhichIsPost = Post::findOrFail(1);
                          $findTagId = Tag::find(3);
                          $getAndFindParentWhichIsPost->tagsTableIsBeingMorphToManyByPost()->sync([2]);
                        });
                        <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577399235925818/6F177171F40CE100791F2558AD3057D53F6CC744/">
                        <span class="options">OPT 6</span> <b>Synchronizing Tags to Post</b>
                        Route::get('updatePolyManyToMany', function () {
                          $getAndFindParentWhichIsPost = Post::findOrFail(1);
                          $findTagId = Tag::find(3);
                          $getAndFindParentWhichIsPost->tagsTableIsBeingMorphToManyByPost()->sync([1,2]);
                        });
                        <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577399235929799/6B2D4E9C836729B0459C9316B6E85A8D6A14D0AF/">
                        Because it couldn't find it, it added the 1
                        <a href="https://www.facebook.com/groups/298553727448221/permalink/647163649253892/"><b class="assetFiles">Laravel Document:Source Material</b></a>

                    <span class="ProceduralProcessBoxTitleTitle">Title</span>: <b>110. Deleting Data</b>
                    <span class="ProceduralProcessBoxTitle">step 1</span>: <b class="steprocedure">Read</b>
                        Route::get('deletePolyManyToMany', function () {
                          $getAndFindParentWhichIsPost = Post::findOrFail(1);
                          foreach ($getAndFindParentWhichIsPost->tagsTableIsBeingMorphToManyByPost as $forEachListObjects) {
                            $forEachListObjects->whereId('2')->delete();
                          }
                        });
                        What's inside the accessed elements
                        <img class="adjustImage" src="https://steamuserimages-a.akamaihd.net/ugc/1637577399235966871/974D7DC977ABC2CE44810D2C7F6964738F00612F/">

                        Deleted/Removed Item
                        <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577399236075180/FBC395D3B48EF51107A4AD34B2FB96945B4FE757/">

                        Edwins

                        <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577399236103590/74900A1C1608711E4714302960CFC6326510AAA3/"> - App\Tag
                        <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577399236108065/1AEA8A9C8192B28FCCC20E942991D6D3EF8D16AC/"> - Pivot
                        <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577399236111864/A905560CD96713A825A508BC05DEE75805C565C3/"> - Routes
                        <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577399236115127/680D883A0460DFC288EE5AAE0BF00874E004F538/"> - Pivot
                        <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577399236117038/407BEBA327D34231A2308BAD1890A2EB7AB25763/"> - App\Tag


                </pre>
              </p>
            </div>
          </section>

          <section class="sectionDivisions">
            <h1 class="masterBoxTitleSection">Section 18: Forms and Validation</h1>
            <div class="containerContentManagementDivision" id="section18">
              <p>
                <h1 class="moduleContentBoxTitle">112. Setting up migration and relations</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b class="steprocedure"> <em>2020_08_26_075011_create_posts_table.php</em> </b>
                        public function up()
                        {
                            Schema::create('posts', function (Blueprint $table) {
                              $table->id();
                              $table->integer('user_id')->unsigned();
                              $table->string('title');
                              $table->string('content');
                              $table->timestamps();
                            });
                        }
                   <strong class="ProceduralProcessBoxTitle">step 2</strong>:<b class="steprocedure"> <em>App\User.php</em> </b>
                        public function postsTableIsAssignToHasManyUser () {
                          return $this->hasMany('App\Post');
                        }
                  <span class="ProceduralProcessBoxTitleTitle">TITLE</span>: <b> <em>113. Setting up views and routes</em> </b>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b class="steprocedure"> <em>Routes(CRUD short-mini-app)</em> </b>
                        Route::resource('/posts', 'PostsController');


                  <strong class="ProceduralProcessBoxTitle">step 2</strong>:<b class="steprocedure"> <em>php artisan route:list</em> </b>
                  <strong class="ProceduralProcessBoxTitle">step 3</strong>:<b class="steprocedure"> <em>create a view for that route</em> </b>
                        <b>posts113/ then your views</b>
                  <span class="ProceduralProcessBoxTitleTitle">TITLE</span>: <b> <em>114. 4-Setting the markup for create</em> </b>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b class="steprocedure"> <em>create.blade.php</em> </b>
                    &lt;!!DOCTYPE html>
                    &lt; html lang="en">
                      &lt;head>
                        &lt;meta charset="utf-8">
                        &lt;title>  &lt;/title>
                      &lt;/head>
                      &lt;body>
                      &lt;/body>
                    &lt;/html>

                    or
                    <span class="takeNote">REMEMBER</span>: The Master Layout
                    &#64;extends('layouts.app')
                    &#64;section('content')
                      &lt;form method="post" action="">
                        &lt;input type="text" name="title" placeholder="Enter Title">
                        &lt;input type="submit" name="submit">
                      &lt;/form>

                    &#64;yield('footer')
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>:<b class="steprocedure"> <em>Route Resource List</em> </b>
                    Look at the table
                  <div id="route-list-parcon">
                    <img id="route-lists" src="https://steamuserimages-a.akamaihd.net/ugc/1637577552670707049/66619799B53157634693AABC3D9C13D5B3D924DC/">
                  </div>
                  <strong class="ProceduralProcessBoxTitle">step 3</strong>:<b class="steprocedure"> <em>Apply Route Resource List</em> </b>
                    <b>&lt;form method="post" action="/posts"></b>
                  <span class="ProceduralProcessBoxTitleTitle">TITLE</span>: <b> <em>115. Setting up the controller and view</em> </b>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b class="steprocedure"> <em>Http/Controller/PostsController.php</em> </b>
                      <b> <i>Look at the above image</i> </b>
                      <b> <em>Look at the above image</em> </b>

                      <b class="processedure"> <em>1 - create method</em></b>:
                       Remeber when we go to the posts/create <b> <em>Look at the above image</em> </b>
                       <b>public function create () {
                         return view('posts113.create');
                       }</b>
                       <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577612159513882/9E6695596F3B1B9AE2462CDDFE3EC5C080734CD5/" alt="">
                       <span class="error"><b class="processedure"> <em>2 - store method - ERROR Page Expired WALA RESULTS/RETURN VALUES</em></b>
                       <b>public function store(Request $request) {
                         return $request->all(); || return $request->get('title'); either di na gumana dito  return $request->title;

                       }</b></span>
                    <span class="ProceduralProcessBoxTitleTitle">TITLE</span>: <b> <em>116. Persisting data to database</em> </b>
                    <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b class="steprocedure"> <em>Http/Controller/PostsController.php</em> </b>
                    <span class=option>Opt 1</span>
                    public function store (Request $request) {
                      return $request->all();
                      Post::create($request->all());
                    }
                    <span class=option>Opt 2</span>
                    public function store (Request $request) {
                      $input = $request->all();
                      $input['title'] = $request->title;
                      Post::create($request->all());
                    }
                    <span class=option>Opt 3</span>: <b>Instantiate an OBJECT</b>
                    public function store (Request $request) {
                      $post = new Post;
                      $post->title = $request->title;
                      $post->save();
                    }

                </pre>
              </div>
              </p>
          </section>



          117. Reading data
          118. Showing individual posts and updating
          119. Preparing the edit view and setting up the token
          120. 10- Editing records and redirecting
          121. 11- Deleting

          <h1 class="edwinDiazCourse">YouTube - Laravel 8 Tutorial by Surfside Media</h1>
          <section class="sectionDivisions">
            <div class="containerContentManagementDivision youtube_surfside_media_2">
              <p>
                <h1 class="moduleContentBoxTitle">======1-Laravel 8 Tutorial - Installation======</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:
                      <em class="steprocedure">1. https://getcomposer.org>Download>Composer-Setup.exe </em>
                      <em class="steprocedure">2. cmd then type composer </em>

                </pre>
                <h1 class="moduleContentBoxTitle">======2-Laravel 8 Tutorial - Routing======</h1>
                <pre>
                <strong class="ProceduralProcessBoxTitle">Lesson 1</strong>:routes/api.php
                    Route::get('/users', function () {
                      return 'Hi Users';
                    });

                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1629696433966416163/51D4106D4FA6EEF5AEF9EF411A21AE069B063DDD/" alt="">
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1629696433966417714/B8F80F2C834F6F1E8A73B85987E20FF7F8E30F71/" alt="">
                  <b class="options">Opt 2</b>:
                    Route::get('/users/{parameter}', function ($parameter) {
                      return 'Hi Users ' . $parameter;
                    });
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1629696433966423670/F887700E53A9D4A5360A70CED87EEF8383AF4E1E/" alt="">
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1629696433966426254/FDCFBC4E8DA1878DF69340FF7DE3D5546FF7218D/" alt="">
                 <b class="options">Opt 3</b>: Optional Parameter
                    Route::get('/users/{parameter?}', function ($parameter = null) {
                      return 'Hi Users ' . $parameter;
                    });

                    Route::get('/users/{parameter?}', function ($parameter = null) {
                      return 'Hi Users ' . $parameter;
                    })->where('parameter','[a-zA-Z]+');

                    Route::get('/products/{id?}', function ($id = null) {
                      return 'Product ID is ' . $id;
                    })->where('id','[0-9]+');


                <strong class="ProceduralProcessBoxTitle">Lesson 2</strong>:
                Remove the where from the previous example the api.php routes
                <b>In app\Providers\</b><b class="highlights">RouteServiceProvider.php</b>

                    public function boot(){
                      $this->configureRateLimiting();

                      $this->routes(function () {
                        Route::middleware('web')
                            ->group(base_path('routes/api.php'));

                        Route::prefix('api')
                            ->middleware('api')
                            ->group(base_path('routes/api.php'));

                      });
                      <b class="highlights">Route::pattern('name', '[a-zA-Z]+');</b>
                      <b class="highlights">Route::pattern('id', '[0-9]+');</b>
                    }
                <strong class="ProceduralProcessBoxTitle">Lesson 3</strong>:
                <b>In routes\</b><b class="highlights">api.php</b>
                      Route::match(['get', 'post'], '/students', function (Request $req){
                        return 'Requested method is ' . $req->method();
                      });
                      <img src="https://steamuserimages-a.akamaihd.net/ugc/1629696433966469851/5753C39313CB55795B30E4DDF463C9C0152CCC89/" alt="">
                      <img src="https://steamuserimages-a.akamaihd.net/ugc/1629696433966471275/64820A8FB23FEF0067162E5360C16896F4BE40F7/" alt="">
                      <img src="https://steamuserimages-a.akamaihd.net/ugc/1629696433966473230/101C2D30E662A6D25F0F33E5029C0FBC19A1FA02/" alt="">
                <b>In Postman software</b>
                GET localhost:8000/api/students
                <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577732930262455/70C830D9FA7987D74AD4D6D870A60FA45F43934E/" alt="">
                <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577732930265072/E98CDD37CA53BD112EF3AC158A4B57D349C468BA/" alt="">
                <strong class="options">Optional</strong>:
                    Route::any('/posts', function (Request $please) {
                      return 'Requested method is ' . $please->method();
                    });
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1629696433966484427/969893D6004E2104844F3732319BDBDD824B0982/" alt="">
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1629696433966487498/2BE02BB5675326913DEBD0136992D8F1D734CFD9/" alt="">
                </pre>
                <h1 class="moduleContentBoxTitle">===3-Laravel 8 Tutorial - Controllers===</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>: <b class="steprocedure"> <em>php artisan make:controller SurfsideYouTubeTutsController</em> </b>
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>: <b class="steprocedure"> inside app\Http\Controllers\<em>SurfsideYouTubeTutsController.php</em> </b>
                      &lt;?php

                      namespace App\Http\Controllers;

                      use Illuminate\Http\Request;

                      class SurfsideYouTubeTutsController extends Controller {
                          <b class="highlights">public function index</b> () {
                            return 'Hi from SurfsideYouTubeTutsController';
                          }
                      }
                    <strong class="ProceduralProcessBoxTitle">step 3</strong>: <b class="steprocedure"> inside routes\<em>web.php</em> </b>
                    <b class="important">Don't Fogert</b>: use App\Http\Controllers\SurfsideYouTubeTutsController;
                        <b class="options">Route::get('/surfside-media-tuts-youtube',[SurfsideYouTubeTutsController::class, 'index'])->name('home.index');</b>
                        <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577732934880810/6A6EB5FF73CD7E8314065638BCF567B5067E8CD8/" alt="">
                        <b class="processedure">Route::get('/surfside-media-tuts-youtube/{parameter}',[SurfsideYouTubeTutsController::class, 'index'])->name('home.index');</b>
                        class SurfsideYouTubeTutsController extends Controller {
                            <b class="highlights">public function index</b> (<b class="highlights">$parameter</b>) {
                              return 'Hi from SurfsideYouTubeTutsController, Parameter :' . <b class="highlights">$parameter</b>;
                            }
                        }
                        <b class="options">Opt 2</b>: Optional
                        <b class="processedure">Route::get('/surfside-media-tuts-youtube/{parameter<b class="highlights">?</b>}',[SurfsideYouTubeTutsController::class, 'index'])->name('home.index');</b>
                        class SurfsideYouTubeTutsController extends Controller {
                            <b class="highlights">public function index</b> ($parameter <b class="highlights">= null</b>) {
                              return 'Hi from SurfsideYouTubeTutsController, Parameter :' . $parameter;
                            }
                        }
                        <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577732934890744/1130306C5F2A48762672A8F4E0809FD27C669701/" alt="">

                </pre>
                <h1 class="moduleContentBoxTitle">===4-Laravel 8 Tutorial - Views===</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>: <b class="steprocedure"> <em>resources/views/</em></b><b class="highlights">surfside_tuts/user_surfside_tuts.blade.php</b> <b class="processedure">&lt;-1)VIEWPATH</b>
                      &lt;!DOCTYPE html>
                      &lt;html lang="en" dir="ltr">
                        &lt;head>
                          &lt;meta charset="utf-8">
                          &lt;meta name="viewport" content="width=device-width, initial-scale=1.0">
                          &lt;meta http-equiv="X-UA-Compatible" content="ie=edge">
                          &lt;title>User&lt;/title>
                        &lt;/head>
                        &lt;body>
                          &lt;h1>User View&lt;/h1>
                        &lt;/body>
                      &lt;/html>
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>: <b class="steprocedure"> <em>app/Http/</em></b><b class="highlights">make:controller(UserSurfSideTutsController.php) </b> <b class="processedure">&lt;-1)ControllerName</b>
                      public function <b class="highlights">index</b> () {
                        return view('<b class="highlights">surfside_tuts.user_surfside_tuts</b>'); <b class="processedure"><b class="processedure">&lt;-2)VIEWPATH</b>
                      }
                  <strong class="ProceduralProcessBoxTitle">step 3</strong>: <b class="steprocedure"> <em>routes/web.php</em> </b>
                      Route::get('/user', [<b class="highlights">UserSurfSideTutsController</b>::class, '<b class="highlights">index</b>']);

                  <strong class="options">Opt 1</strong>:<i>Passing Data</i> in <b class="steprocedure"> <em>app/Http/make:controller </em> </b>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:
                      public function index () {
                        <b class="highlights">$name</b> = 'Danica';
                        return view('surfside_tuts.user_surfside_tuts', compact('<b class="highlights">name</b>'));
                      }
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>: <b class="steprocedure"> <em>resources/views/user_surfside_tuts.blade.php</em> </b>
                      &lt;h1>User View&lt;/h1
                      &lt;h1>User Name <b class="highlights">&#123;&#123;$name}}</b> &lt;/h1>
                  <strong class="ProceduralProcessBoxTitle">step 3</strong>: <b class="steprocedure"> <em>routes/web.php</em> </b>
                      Route::get('/user', [<b class="highlights">UserSurfSideTutsController</b>::class, '<b class="highlights">index</b>'])->name('<b class="highlights">user_surfside_tuts.index</b>');

                                          <span class="syntax">Syntax</span>
                                          [<b class="processedure">3)ControllerName</b>::class, '<b class="processedure">4)ControllerNameMethod</b>']->name('<b class="highlights">urldeclaredroute/method(route name)</b>');

                  <strong class="options">Opt 2</strong>:<i>Passing Array Data</i> in <b class="steprocedure"> <em>app/Http/make:controller </em> </b>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:
                      public function index () {
                        $name = 'Danica';
                        <b class="highlights">$users</b> = array(
                          "name" => "Isagre Danica",
                          "email" => "smjohn@gmail.com",
                          "phone" => "21321312312"
                        );
                        return view('surfside_tuts.user_surfside_tuts', compact('name','<b class="highlights">users</b>'));
                      }
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>: <b class="steprocedure"> <em>resources/views/user_surfside_tuts.blade.php</em> </b>
                      &lt;h1>User View&lt;/h1
                      &lt;h1>User Name <b class="highlights">&#123;&#123;$name}}</b> &lt;/h1
                      &lt;p>&#123;&#123;<b class="highlights">$users->name</b>}}&lt;/p>
                      &lt;p>&#123;&#123;<b class="highlights">$users->email</b>}}&lt;/p>
                      &lt;p>&#123;&#123;<b class="highlights">$users->phone</b>}}&lt;/p>
                      <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577732935495277/8A4597EF99A7A671DC6E37D9C62D41BDB435F136/" alt="An Array Thats Why">
                      &lt;p>&#123;&#123;<b class="fixError">$users['name']</b>}}&lt;/p>
                      &lt;p>&#123;&#123;<b class="fixError">$users['email']</b>}}&lt;/p>
                      &lt;p>&#123;&#123;<b class="fixError">$users['phone']</b>}}&lt;/p>

                </pre>
                <h1 class="moduleContentBoxTitle">===5-Laravel 8 Tutorial - Blade Components===</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>: <b class="steprocedure"> <em>php artisan make:component Header</em> </b>

                  <strong class="ProceduralProcessBoxTitle">step 2</strong>: <b class="steprocedure"> <em>resources\views\components\<b class="highlights">header.blade.php</b></em></b>
                    &lt;div>
                        &lt;h1>If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius&lt;/h1>
                    &lt;/div>
                  <strong class="ProceduralProcessBoxTitle">step 3</strong>: <b class="steprocedure"> <em>resources\views\<b class="highlights">welcome.blade.php</b></em></b> &lt;--this could be any but for the sake of
                  learning fast we are gonna use the one that Laravel already created.
                    &lt;body class="antialiased">
                      <b class="highlights">&lt;x-header name="Surfside Tutorial"/></b> &lt;----HERE
                        &lt;div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

                  <strong class="ProceduralProcessBoxTitle">step 4</strong>: <b class="steprocedure"> <em>app\View\Components\<b class="highlights">Header.php</b></em></b>
                        &lt;?php

                        namespace App\View\Components;

                        use Illuminate\View\Component;

                        class Header extends Component
                        {
                            <b class="highlights">public $name;</b>
                            /**
                             * Create a new component instance.
                             *
                             * @return void
                             */
                            public function __construct(<b class="highlights">$name</b>)
                            {
                                <b class="highlights">$this->name = $name;</b>
                            }

                            /**
                             * Get the view / contents that represent the component.
                             *
                             * @return \Illuminate\View\View|string
                             */
                            public function render()
                            {
                                return view('components.header');
                            }
                        }

                  <strong class="ProceduralProcessBoxTitle">step 5</strong>: <b class="steprocedure"> <em>resources\views\components\<b class="highlights">header.blade.php</b></em></b>
                    &lt;div>
                        &lt;h1>If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius&lt;/h1>
                        &lt;h1>&#123;&#123;<b class="highlights">$name</b>}}&lt;/h1>
                    &lt;/div>

                  <strong class="ProceduralProcessBoxTitle">step 6</strong>: <b class="steprocedure"> <em>php artisan make:controller ProductsController</em></b>
                  <strong class="ProceduralProcessBoxTitle">step 7</strong>: <b class="steprocedure"> <em>ProductsController</em></b>
                      public function index () {
                        $fruits = array('Mango', 'Orange', 'Banana', 'Apple', 'Pineapple');
                        return view('<b class="highlights">welcome</b>', compact('<b class="highlights">fruits</b>'));
                      }

                  <strong class="ProceduralProcessBoxTitle">step 8</strong>: <b class="steprocedure"> <em>resources\views\<b class="highlights">welcome.blade.php</b></em></b> &lt;--this could be any but for the sake of
                  learning fast we are gonna use the one that Laravel already created.
                    &lt;body class="antialiased">
                      &lt;x-header name="Surfside Tutorial" <b class="highlights">:fruits="$fruits"</b>> &lt;----HERE
                        &lt;div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

                  <strong class="ProceduralProcessBoxTitle">step 9</strong>: <b class="steprocedure"> <em>app\View\Components\<b class="highlights">Header.php</b></em></b>
                        public $name;
                        <b class="highlights">public $fruits;</b>
                        /**
                         * Create a new component instance.
                         *
                         * @return void
                         */
                         public function __construct($name, <b class="highlights">$fruits</b>)
                         {
                             $this->name = $name;
                             <b class="highlights">$this->fruits = $fruits;</b>
                         }
                   <strong class="ProceduralProcessBoxTitle">step 10</strong>: <b class="steprocedure"> <em>resources\views\components\<b class="highlights">header.blade.php</b></em></b>
                     &lt;div>
                         &lt;h1>If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius&lt;/h1>
                         &lt;h3>&#123;&#123;$name}}&lt;/h3>
                         &lt;h3>Fruits are:&lt;/h3>
                         &lt;ul>
                          &#64;foreach (<b class="highlights">$fruits as $forEachListObjects</b>)
                            &lt;li&#123;&#123;<b class="highlights">$forEachListObjects</b>}}&lt;/li>
                          &#64;endforeach
                         &lt;/ul>
                     &lt;/div>

                   <strong class="ProceduralProcessBoxTitle">step 11</strong>: <b class="steprocedure"> <em><b class="highlights">routes\web.php</b></em></b>
                      Route::get('/', [<b class="highlights">ProductsController</b>::class, '<b class="highlights">index</b>'])->name('product.index');
                      <img src="https://steamuserimages-a.akamaihd.net/ugc/1637577732935956828/BD6E86D2296944C8965D06EA6CF596C94DA88529/" alt="">

                </pre>
                <h1 class="moduleContentBoxTitle">===6-Laravel 8 Tutorial - HTTP Client===</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>: <b class="steprocedure"> <em></em></b>
                    php artisan make:controller ClientController
                    search for JSONPlaceholder in google.com
                    reference
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002433940795/B4E8F9C54E247E709C02ECC740893EE957DEA869/" alt="">

                  <strong class="ProceduralProcessBoxTitle">step 2</strong>: <b class="steprocedure"> <em>ClientController.php</em></b>

                    public function getAllPost() {
                      $response = Http::get('https://jsonplaceholder.typicode.com/posts');
                      return $response->json();
                    }
                    sample
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002433946031/1DF26745906F10FFC6B34C1DAFA5937242A28E1A/" alt="">
                  <strong class="ProceduralProcessBoxTitle">step 3</strong>: <b class="steprocedure"> <em>web.php</em></b>
                      <b class="syntax">Syntax</b>
                      Route::get('/<b class="highlights">fix route see above the reference like php artisan route:list</b>', [ControllerName::class, 'ControllerMethosds'])->name('
                      <b class="highlights">route method like in php artisan route:list</b>');
                      <b class="appliedSyntax">Applied Syntax</b>

                      Route::get('/posts', [ClientController::class, 'getAllPost'])->name(posts.getallpost); - don't forget to use the namespace of the controller where it is located
                  <strong class="ProceduralProcessBoxTitle">step 4</strong>: <b class="steprocedure"> <em>ClientController.php(READ)</em></b>

                    public function getPostById ($id) {
                      $postId = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
                      return $postId->json();
                    }
                  <strong class="ProceduralProcessBoxTitle">step 5</strong>: <b class="steprocedure"> <em>web.php(READ)</em></b>
                      Route::get('/posts/{id}', [ClientController::class, 'getPostById'])->name('posts.getpostbyid');
                      <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002433987648/AB1555DA8835E138A3C2A6294AEC302F5BCE9C61/" alt="">

                  <strong class="ProceduralProcessBoxTitle">step 6</strong>: <b class="steprocedure"> <em>ClientController.php(CREATE)</em></b>

                    public function createPost () {
                      $methodPost = Http::post('https://jsonplaceholder.typicode.com/posts/', [
                        'userId' => 1,
                        'title' => 'New Post Title',
                        'body' => 'New Post Description'
                      ]);

                      return $post->json();
                    }

                  <strong class="ProceduralProcessBoxTitle">step 7</strong>: <b class="steprocedure"> <em>web.php(CREATE)</em></b>
                      Route::get('/add-posts', [ClientController::class, 'createPost'])->name('posts.createpost');
                      <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002434002941/2FB8B7AA878E773BB1714A8CA5ACE6BFA9EAB58C/" alt="">

                  <strong class="ProceduralProcessBoxTitle">step 8</strong>: <b class="steprocedure"> <em>ClientController.php(UPDATE)</em></b>

                    public function updatePost () {
                      $response = Http::post('https://jsonplaceholder.typicode.com/posts/1', [
                        'title' => 'Updated Title',
                        'body' => 'Updated Description'
                      ]);

                      return $response->json();
                    }

                  <strong class="ProceduralProcessBoxTitle">step 9</strong>: <b class="steprocedure"> <em>web.php(UPDATE)</em></b>
                      Route::get('/update-posts', [ClientController::class, 'updatePost'])->name('posts.update');
                      <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002434075597/75AB93E93078DEA92C02C195D95922D92C6EA677/" alt="">

                  <strong class="ProceduralProcessBoxTitle">step 10</strong>: <b class="steprocedure"> <em>ClientController.php(DELETE)</em></b>

                    public function deletePost ($id) {
                      $response = Http::post('https://jsonplaceholder.typicode.com/posts/'.$id);
                      return $response->json();
                    }

                  <strong class="ProceduralProcessBoxTitle">step 11</strong>: <b class="steprocedure"> <em>web.php(DELETE)</em></b>
                      Route::get('/delete-posts/{idToBePass}', [ClientController::class, 'deletePost'])->name('posts.delete');

                      Result: [ ]
                </pre>
                <h1 class="moduleContentBoxTitle">7-Laravel 8 Tutorial - Fluent Strings</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>: <b class="steprocedure"> <em>php artisan make:controller FluentController</em></b>



                  <strong class="ProceduralProcessBoxTitle">step 2</strong>: <b class="steprocedure"> <em>FluentController.php</em></b>
                    public function index () {
                      echo '&lt;h1>Fluent Strings&lt;/h1>';
                    }
                  <strong class="ProceduralProcessBoxTitle">step 3</strong>: <b class="steprocedure"> <em>web.php</em></b>
                  Route::get('fluent-string', [FluentController::class, 'index'])->name('fluent.index');
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002434112320/9C41DBDAEB4D2B71E65D90D64C5F304A6ED40C19/" alt="">

                  <strong class="ProceduralProcessBoxTitle">step 4</strong>: <b class="steprocedure"> <em>FluentController.php</em></b>
                    public function index () {
                      echo '&lt;h1>Fluent Strings&lt;/h1>';
                      $slice = Str::of('Welcome to my domain')->after('Welcome to');
                      echo $slice;
                    }
                    then put this namespace library
                    use Support\Str;
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002434120701/552B43DA97206249CF83997E3675A389AB2113D8/" alt="">
                  <strong class="ProceduralProcessBoxTitle">step 5</strong>: <b class="steprocedure"> <em>FluentController.php</em></b>
                    public function index () {
                      echo '&lt;h1>Fluent Strings&lt;/h1>';
                      $slice = Str::of('Welcome to my domain')->after('Welcome to');
                      echo $slice; . '&lt;br>';
                      <b class="highlights">$slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\')</b>;
                      echo $slice2 . '&lt;br>';
                      <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002434129081/87DF6B2C5D355C1193CCC6775F56B265091ACA61/" alt="">
                    }
                  <strong class="ProceduralProcessBoxTitle">step 6</strong>: <b class="steprocedure"> <em>FluentController.php</em></b>

                  <b class="options">Additionals</b> Additionals
                  $string = Str::of('Hello')->append('World');
                  echo $string;
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002434132240/8391981CC5E14158FB59B6D428A1C5056F9B0359/" alt="">

                  $result = Str::of('LARAVEL8')->lower();
                  echo $result . '&lt;br>';
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002434138574/00ED76E8AE2C1DAE7945A02314483B09F7B50C00/" alt="">
                  $replaced = Str::of('Laravel 7.0')->replace('7.0','8.0');
                  echo $replaced . '&lt;br>';
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002434148801/78E5D03C1FB9D4B357EBB065616AF7298F54BF0F/" alt="">
                  $converted = Str::of('this is title')->title();
                  echo $convert ed . '&lt;br>';

                  $slug = Str::of('Laravel 8 Framework')->slug('-');
                  echo $slug . '&lt;br>';
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002434157153/C9C9A3AAAF1AE4376205463F6BDECCC23A983598/" alt="">
                  $str = Str::of('Laravel Framework')->substr(8);
                  echo $str . '&lt;br>';
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002434164269/5C1E0DCFA7FF1E93C405E504F478514465BDB576/" alt="">
                  $str = Str::of('Laravel Framework')->substr(8,5);
                  echo $str . '&lt;br>';
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002434166193/72B6603CBC041ACB86408FC6A4AC84653189E20B/" alt="">


                  $str2 = Str::of('/Laravel8/')->trim('/');
                  echo $str2 . '&lt;br>';
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002434170409/BC4D0A6B122CC1E6F98D05665845DA3B2C273042/" alt="">

                  $str3 = Str::of('laravel 8')->upper();
                  echo $str3 . '&lt;br>';
                </pre>
                <h1 class="moduleContentBoxTitle">8-Laravel 8 Tutorial - Stub Customization</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>: <b> <em>php artisan stub:publish</em> </b>
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>: <b> <em>php artisan make:controller StudentController</em> </b>
                  <strong class="ProceduralProcessBoxTitle">step 3</strong>: <b> <em>controller.plain.stub(make some adjustments/modifications)</em> </b>
                  class &#123;&#123; class }} extends Controller {
                    public function create () {

                    }
                  }
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>: <b> <em>php artisan make:controller StudentnewController</em> </b>
                </pre>
                <h1 class="moduleContentBoxTitle">9-Laravel 8 Tutorial - HTTP Requests and Html Form</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>: <b> <em>UserController.php</em> </b>
                  &lt;?php

                  namespace App\Http\Controllers;
                  use Illuminate\Http\Request;

                  class UserController extends Controller {
                    public function index (Request $req) {
                      return $req->method();
                      return $req->path();
                      return $req->url();
                      return $req->fullUrl();
                    }
                  }
                  Result:GET
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>: <b> <em>php artisan make:controller LoginController</em> </b>
                      public function index () {
                        return view('login');
                      }
                  <strong class="ProceduralProcessBoxTitle">step 3</strong>: <b> <em>web.php</em> </b>
                      Route::get('/login', [LoginController::class, 'index'])->name('login.index'); don't forget use App\Http\Controllers\LoginController;


                  <strong class="ProceduralProcessBoxTitle">step 4</strong>: <b> <em>LoginController.php</em> </b>
                  add this
                      public function loginSubmit () {
                        return "Form Submitted";
                      }
                  <b class="assetFiles"> <a href="https://www.facebook.com/groups/298553727448221/permalink/651631358807121/">Asset Source Reference Files</a> </b>
                  <strong class="ProceduralProcessBoxTitle">step 5</strong>: <b> <em>web.php</em> </b>
                  add this route
                      Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');

                  <strong class="ProceduralProcessBoxTitle">step 6</strong>: <b> <em>login.blade.php</em> </b>
                  &lt;form method="<b class="highlights">POST</b>" action="&#123;&#123;route('<b class="highlights">login.submit</b>')}}">
                  &#64;csrf

                  FULL FORM
                  &lt;div class="container">
                    &lt;div class="row">
                      &lt;div class="col-md-6 offset-md-3">
                        &lt;div class="card">
                          &lt;div class="card-header">
                            Login
                          &lt;/div>
                          &lt;div class="card-body">
                            &lt;form method="POST" action="&#123;&#123;route('login.submit')}}">
                            &#64;csrf
                              &lt;div class="form-group">
                                &lt;label for="email_id_attr">Email address&lt;/label>
                                &lt;input type="email" class="form-control" id="email_id_attr" aria-describedby="emailHelp" <b class="highlights">name="email_name_attr"</b>>
                                &lt;small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.&lt;/small>
                              &lt;/div>
                              &lt;div class="form-group">
                                &lt;label for="password_id_attr">Password&lt;/label>
                                &lt;input type="password" class="form-control" id="password_id_attr" <b class="highlights">name="password_name_attr"</b>>
                              &lt;/div>
                              &lt;button type="submit" class="btn btn-primary">Submit&lt;/button>
                            &lt;/form>
                          &lt;/div>
                        &lt;/div>
                      &lt;/div>
                    &lt;/div>
                  &lt;/div>

                  <strong class="ProceduralProcessBoxTitle">step 7</strong>: <b> <em>LoginController.php</em> </b>
                  public function loginSubmit(Request $req) {
                    return $req->all();
                  }
                  <strong class="options">Opt</strong>: <b> <em>LoginController.php</em> </b>
                  public function loginSubmit(Request $req) {
                    echo $email = $req->input('<b class="highlights">email_name_attr</b>');
                    echo $password = $req->input('<b class="highlights">password_name_attr</b>');
                    return 'Email . ' .$email . 'Password : ' .$password;
                  }
                </pre>
                <h1 class="moduleContentBoxTitle">10-Laravel 8 Tutorial - Form Validation</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>: <b> <em>LoginController.php</em> </b>
                  public function loginSubmit(Request $req) {
                    <b class="highlights">$validatedData</b> = $request->validate([
                      'email'=>'required|email',
                      'password'=>'required|min:6|max:12'
                    ]);
                    $email = $req->input('email');
                    $password = $req->input('password');
                    return 'Email . ' .$email . 'Password : ' .$password;
                  }
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>: <b> <em>LoginController.php</em> </b>
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002434674029/D23A8E56689762B379C9CA9F63ED830E17EB0837/" alt="">
                  yan yung parang sa codeigniter yung may error kapag mali inputs
                </pre>
                <h1 class="moduleContentBoxTitle">11-Laravel 8 Tutorial - Middleware</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>: <b> <em>php artisan make:middleware CheckUser</em> </b>
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>: <b> <em>app\Http\Middleware\CheckUser.php</em> </b>
                  public function handle ($request, Closure $next) {
                    echo "CheckUser Middleware is applied on this route";
                    return $next($request);
                  }
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>: <b> <em>app\Http\Kernel.php</em> </b>
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002435118578/A57D5B5E38F9C8968B205E92F4A06F84C15F992F/" alt="">
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002435120488/5EAE2C2507CC43014047314A2C2466A4B7F75BA6/" alt="">
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002435142966/5B1755683A3D1FF87F300F8496265738158D57A4/" alt="">
                  <b class="steprocedure">3</b>
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002435132515/7D17F81016C2419BEDCBD6002C54FB45C9DD36CF/" alt="">
                  <b class="steprocedure">4</b>
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002435134863/A9399D32883BF0B651AC7B7451FC8092C7315C9A/" alt="">
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002435145557/C115CD936BA2F2CC4B157EC7DC28F88236FD3D94/" alt="">
                  <b class="steprocedure">5</b>
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002435138328/B403545F96DDFCE0E8194B8BBD7C9DB7C44C3DF7/" alt="">
                  <b class="steprocedure">6</b>
                  api.php<img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002435153960/51846AC84AD74BFC42B2320F34C685CD74417CCC/" alt="">
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002435157686/B4DCC30A550424F65BCF4A84321FE569DE08C97C/" alt="">
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002435148648/57439B22A47675F5EA0FA19362B6139356E808AB/" alt="">
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002435150204/1BDE9ED720A6F5AB66280190AECBF970A60AB701/" alt="">
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002435151664/CFF8ED53A9EF1D067E111D1BCC30C3F198FFCEAF/" alt="">
                  <b class="steprocedure">7</b>
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002435161645/471B1AF48D2BD0C6A070574A7A4546626E5240B6/" alt="">
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002435163909/1CCEE756FEB581202116109A4E4D4BBC81815FF4/" alt="">
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002435166516/540A8E0F5860238DA20FF21BB6C0947B48B3B5C7/" alt="">

                  <b class="steprocedure"8></b>
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002435171358/413C8950BC1FA2E0302EC8A034C15E382FE990D7/" alt="">
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1637578002435172498/BA9A0DB15A1C35FFD066B0FEC37DA2544CB474BD/" alt="">
                </pre>
                <h1 class="moduleContentBoxTitle">12-Laravel 8 Tutorial - Http Session</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em>config.session.php</em></b>
                    <b class="steprocedure">php artisan make:controller SessionController</b>
                    &lt;?php

                    namespace App\Http\Controllers;

                    use Illuminate\Http\Request;

                    class SessionController extends Controller {
                      public function getSessionData (Request $req) {
                        if($req->session()->has('name')) {
                          echo $req->session()->get('name');
                        } else {
                          echo 'No data in the session';
                        }
                      }

                      public function storeSessionData (Request $req) {
                        $req->session()->put('name', 'Jennifer');
                        echo 'Data has been added to session';
                      }
                      public function deleteSessionData (Request $req) {
                        $req->session()->forget('name');
                        echo 'Data has been removed from the session';
                      }
                    }
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>:<b><em>routes</em></b>
                    <b class="steprocedure">Dont forget to add this on the top</b>: use App\Http\Controllers\SessionController;
                    Route::get('session/get',[SessionController::class, 'getSessionData'])->name('session.get');

                    Route::set('session/set',[SessionController::class, 'storeSessionData'])->name('session.store');

                    Route::del('session/get',[SessionController::class, 'deleteSessionData'])->name('session.delete');
                </pre>
                <h1 class="moduleContentBoxTitle">13-Laravel 8 Tutorial - Start with Database</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em>Manually create in phpmyadmin</em></b>
                    <strong class="steprocedure">1Make a controller for this lesson example</strong>
                    &lt;?php

                    namespace App\Http\Controllers;

                    use Illuminate\Http\Request;
                    <b class="important">use Illuminate\Support\Facades\DB;</b>

                    class <b class="highlights"><em>StartDatabaseCon</em></b> extends Controller
                    {
                      public function getAllPost () {
                        <b class="highlights"><em>$getMyPost</em></b> = DB::table('startdbcontable')->get();
                        return view('surfside_tuts.startDB13', compact('<b class="highlights"><em>getMyPost</em></b>'));
                      }
                    }

                    <strong class="steprocedure">2GoTo your view(<b>startDB13.blade.php</b>)</strong>
                    &lt;!DOCTYPE html>
                    &lt;html lang="en" dir="ltr">
                      &lt;head>
                        &lt;meta charset="utf-8">
                        &lt;meta name="viewport" content="width=device-width, initial-scale=1.0">
                        &lt;meta http-equiv="X-UA-Compatible" content="ie=edge">
                        &lt;title>StartDb13&lt;/title>
                      &lt;/head>
                      &lt;body>
                        &lt;h1>All Posts&lt;/h1>
                        &#64;foreach(<b class="highlights"><em>$getMyPost</em></b> as $forEachLoopElements)
                        &lt;h3>&#123;&#123;$forEachLoopElements->title}}&lt;/h3>
                        &lt;p>&#123;&#123;$forEachLoopElements->body}}&lt;/p>
                        &#64;endforeach
                      &lt;/body>
                    &lt;/html>

                    <strong class="steprocedure">3Create a route for that view and controller to redirect that route</strong>
                      Route::get('startDB13', [StartDatabaseCon::class, 'getAllPost'])->name('startdb13.getallpost');

                </pre>

                <h1 class="moduleContentBoxTitle">14-Laravel 8 Tutorial - Database Query Builder and CRUD Operation</h1>
                <pre>
                  this is continued from the last lecture

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>: <b><em>StartDatabaseCon.php</em></b>

                  public function createPost () {
                    return view('surfside_tuts.Crud.create-post-page');
                  }
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>: <b><em>routes/web.php</em></b>
                  Route::get('create-post', [StartDatabaseCon::class, 'createPost'])->name('post.create');

                  <strong class="ProceduralProcessBoxTitle">step 3</strong>: In <b><em>resources\views\surfside_tuts\Crud\create-post-page.blade.php</em></b>
                  create the page layout for the form getbootstrap for faster creation
                  <strong class="ProceduralProcessBoxTitle">step 4</strong>: <b><em>StartDatabaseCon.php</em></b>
                  public function createPostSubmitButton (Request $req) {
                    DB::table('startdbcontable')->insert([
                      'title' => $req->title_name_attr,
                      'body' => $req->body_name_attr
                    ]);
                    return back()->with('post_created', 'Post Has Been Updated Sucessfully!');
                  }
                  <strong class="ProceduralProcessBoxTitle">step 5</strong>: <b><em>routes/web.php</em></b>
                  Route::post('<b class="highlights">create-post</b>', [StartDatabaseCon::class, 'createPostSubmitButton'])->name('<b class="highlights">post.addsubmit</b>');

                  <strong class="ProceduralProcessBoxTitle">step 6</strong>: <b><em>resources\views\surfside_tuts\Crud\create-post-page.blade.php</em></b>
                  &lt;!DOCTYPE html>
                  &lt;html lang="en" dir="ltr">
                    &lt;head>
                      &lt;meta charset="utf-8">
                      &lt;title>Create Page&lt;/title>
                      &lt;link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
                      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

                    &lt;/head>
                    &lt;body>

                      &lt;section>
                        &lt;div class="container">
                          &lt;div class="row">
                            &lt;div class="col-md-6 offset-md-3">
                              &lt;div class="card">
                                &lt;div class="card-header">
                                  Create New Post
                                &lt;/div>
                                &lt;div class="card-body">
                                  if(Session::has('<b class="highlights">create-post</b>'))
                                    &lt;div class="alert alert-success" role="alert">
                                      &#123;&#123;Session::get('<b class="highlights">create-post</b>')}}
                                    &lt;/div>
                                  &#64;endif
                                  &lt;form class="" action="&#123;&#123;route('<b class="highlights">post.addsubmit</b>')}}" method="post">
                                    &#64;csrf
                                    &lt;div class="form-group">
                                      &lt;label for="title-id-attr">Post Title&lt;/label>
                                      &lt;input type="text" name="title_name_attr" id="title-id-attr" placeholder="Enter Post Title">
                                    &lt;/div>
                                    &lt;div class="form-group">
                                      &lt;label for="body-id-attr">Post Title&lt;/label>
                                      &lt;textarea class="form-control" name="body_name_attr" id="body-id-attr" rows="3"> &lt;/textarea>
                                    &lt;/div>
                                    &lt;input type="submit" name="submit_name_attr" value="Submit">
                                  &lt;/form>
                                &lt;/div>
                              &lt;/div>
                            &lt;/div>
                          &lt;/div>
                        &lt;/div>
                      &lt;/section>

                      &lt;!-- bootstrap -->
                      &lt;script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">&lt;/script>
                      &lt;script src="https://cdn.jsdelivr.net/npm/popper.js&#64;1.16.1/dist/umd/popper.min.js"
                      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">&lt;/script>
                      &lt;script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
                      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">&lt;/script>
                    &lt;/body>
                  &lt;/html>

                  <strong class="ProceduralProcessBoxTitle">step 7</strong>: <b><em>startDB13.blade.php</em></b>(BLADE HTML TEMPLATE)
                  &lt;!DOCTYPE html>
                  &lt;html lang="en" dir="ltr">
                    &lt;head>
                      &lt;meta charset="utf-8">
                      &lt;meta name="viewport" content="width=device-width, initial-scale=1.0">
                      &lt;meta http-equiv="X-UA-Compatible" content="ie=edge">
                      &lt;title>StartDb13&lt;/title>
                      &lt;link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
                    &lt;/head>
                    &lt;body>
                      &lt;h1>All Posts&lt;/h1>
                      &#64;foreach($getMyPost as $forEachLoopElements)
                      &lt;h3>&#123;&#123;$forEachLoopElements->title}}&lt;/h3>
                      &lt;p>&#123;&#123;$forEachLoopElements->body}}&lt;/p>
                      &#64;endforeach
                      &lt;section>
                        &lt;div class="container">
                          &lt;div class="row">
                            &lt;div class="col-md-12">
                              &lt;div class="card">
                                &lt;div class="card-header">
                                  All Posts
                                &lt;/div>
                                &lt;div class="card-body">
                                  &lt;table>
                                    &lt;thead>
                                      &lt;tr>
                                        &lt;th>Post Title&lt;/th>
                                        &lt;th>Post Body&lt;/th>
                                      &lt;/tr>
                                    &lt;/thead>
                                    &lt;tbody>
                                      &#64;foreach($getMyPost as $forEach)
                                        &lt;tr>
                                          &lt;td>&#123;&#123;$forEach->title}}&lt;/td>
                                          &lt;td>&#123;&#123;$forEach->body}}&lt;/td>
                                        &lt;/tr>
                                      &#64;endforeach
                                    &lt;/tbody>
                                  &lt;/table>
                                &lt;/div>
                              &lt;/div>
                            &lt;/div>
                          &lt;/div>
                        &lt;/div>
                      &lt;/section>
                      &lt;script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">&lt;/script>
                      &lt;script src="https://cdn.jsdelivr.net/npm/popper.js&#64;1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">&lt;/script>
                      &lt;script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">&lt;/script>
                    &lt;/body>
                  &lt;/html>

                  <strong class="ProceduralProcessBoxTitle">step 8</strong>: <b><em>StartDatabaseCon.php</em></b>(OPTIONAL get by id)
                    public function readPostById ($id) {
                      $readPostById = DB::table('startdbcontable')->where('id', $id)->first();
                      return view('surfside_tuts.Crud.read-get-by-id-page', compact('readPostById'));
                    }
                  <strong class="ProceduralProcessBoxTitle">step 9</strong>: <b><em>Routes</em></b>(OPTIONAL get by id)
                  Route::get('read-by-id-posts/{id}', [StartDatabaseCon::class, 'readPostById'])->name('readbyid');
                  <strong class="ProceduralProcessBoxTitle">step 10</strong>: <b><em>single read post by id</em></b><b class="highlights">(READ BY ID)</b>
                    create a view for that single read
                    &lt;input type="text" name="title_name_attr" value="&#123;&#123;$readPostById->title}}" id="title-id-attr" placeholder="Enter Post Title">
                  <strong class="ProceduralProcessBoxTitle">step 11</strong> <b>resources\views\surfside_tuts\<em class="highlights">startDB13.blade.php</em></b>
                      &lt;td>
                        &lt;a href="readbyid/&#123;&#123;$forEach->id}}">View&lt;/a>
                      &lt;/td>
                  <strong class="ProceduralProcessBoxTitle">step 12</strong> <b><em class="highlights">StartDatabaseCon.php</em></b> <b class="highlights">(DELETE)</b>
                  public function deletePostById ($id) {
                    $readPostById = DB::table('startdbcontable')->where('id', $id)->delete();
                    return back()->with('post_deleted', 'Post Has Been Deleted Successfully!');
                  }
                  <strong class="ProceduralProcessBoxTitle">step 13</strong>: <b><em>Routes</em></b>(OPTIONAL delete by id)
                  Route::get('delete-by-id/{id}', [StartDatabaseCon::class, 'deletePostById'])->name('deletebyid');
                  <strong class="ProceduralProcessBoxTitle">step 14</strong>: <b><em>Read Page</em></b>(OPTIONAL delete by id)
                  &lt;div class="card-body">
                    &#64;if(Session::has('delete-by-id'))
                    &lt;div class="alert alert-success" role="alert">
                      &#123;&#123;Session::get('delete-by-id')}}
                    &lt;/div>
                    &#64;endif
                  &lt;td>
                    &lt;a href="readById/&#123;&#123;$forEach->id}}" class="btn btn-success">View&lt;/a>
                    &lt;a href="delete-by-id/&#123;&#123;$forEach->id}}" class="btn btn-danger">Delete&lt;/a>
                  &lt;/td>
                &lt;/pre>


                <h1>CRUD: Get Edit ID Post Details(id) when Clicking a Link to grab its Data in its Own Webpage to Update</h1>

                <strong class="ProceduralProcessBoxTitle">step 1</strong> The Controller
                  public function getUpdatePostById ($id) {

                    $fetchIdToUpdatePost = DB::table('startdbcontable')->where('id', $id)->first();
                    return view('surfside_tuts.Crud.update-post-page', compact('fetchIdToUpdatePost'));
                  }


                <strong class="ProceduralProcessBoxTitle">step 2</strong> The Route
                  Route::get('fetched-id-to-update/{id}', [StartDatabaseCon::class, 'getUpdatePostById'])->name('fetchtoupdateid');

                <strong class="ProceduralProcessBoxTitle">step 3</strong> The View
                    &lt;!DOCTYPE html>
                    &lt;html lang="en" dir="ltr">
                      &lt;head>
                        &lt;meta charset="utf-8">
                        &lt;title>Create Page&lt;/title>
                        &lt;link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
                        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

                      &lt;/head>
                      &lt;body>

                        &lt;section>
                          &lt;div class="container">
                            &lt;div class="row">

                              &lt;div class="col-md-6 offset-md-3">
                                &lt;div class="card">
                                  &lt;div class="card-header">
                                    Update Post Details
                                  &lt;/div>
                                  &lt;div class="card-body">
                                    &lt;form class="" method="post" action="">
                                      &#64;csrf
                                      &lt;div class="form-group">
                                        &lt;label for="title-id-attr">Post Title&lt;/label>
                                        &lt;input type="text" name="title_name_attr" value="&#123;&#123;$fetchIdToUpdatePost->title}}" id="title-id-attr" placeholder="Enter Post Title">
                                      &lt;/div>
                                      &lt;div class="form-group">
                                        &lt;label for="body-id-attr">Post Body&lt;/label>
                                        &lt;textarea class="form-control" name="body_name_attr" id="body-id-attr" rows="3">&#123;&#123;$fetchIdToUpdatePost->body}}&lt;/textarea>
                                      &lt;/div>
                                      &lt;input type="submit" class="btn btn-success" name="" value="Update">
                                    &lt;/form>
                                  &lt;/div>
                                &lt;/div>
                              &lt;/div>
                            &lt;/div>
                          &lt;/div>
                        &lt;/section>

                        &lt;!-- bootstrap -->
                        &lt;script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">&lt;/script>
                        &lt;script src="https://cdn.jsdelivr.net/npm/popper.js&#64;1.16.1/dist/umd/popper.min.js"
                        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">&lt;/script>
                        &lt;script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
                        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">&lt;/script>
                      &lt;/body>
                    &lt;/html>


                <strong class="ProceduralProcessBoxTitle">step 4</strong> The View (Read Table)
                  &lt;tbody>
                    &#64;foreach($getMyPost as $forEach)
                      &lt;tr>
                        &lt;td>&#123;&#123;$forEach->title}}&lt;/td>
                        &lt;td>&#123;&#123;$forEach->body}}&lt;/td>
                        &lt;td>
                          &lt;a href="readById/&#123;&#123;$forEach->id}}" class="btn btn-success">Read/View&lt;/a>
                          <b class="highlights">&lt;a href="fetched-id-to-update/&#123;&#123;$forEach->id}}" class="btn btn-info">Update/Edit&lt;/a></b>
                          &lt;a href="delete-by-id/&#123;&#123;$forEach->id}}" class="btn btn-danger">Delete&lt;/a>
                        &lt;/td>
                      &lt;/tr>
                    &#64;endforeach
                  &lt;/tbody>

                <h1>CRUD: Update Post</h1>

                <strong class="ProceduralProcessBoxTitle">step 1</strong> The Controller
                  public function updateById (Request $req) {
                    <b class="highlights">$fetchAndUpdate</b> = DB::table('startdbcontable')->where('id', $req->id)->update([
                      'title' => $req->input('<b class="highlights">title_name_attr</b>'),
                      'body' => $req->input('<b class="highlights">body_name_attr</b>')
                    ]);
                    return back()->with('<b class="highlights">fetched-and-update</b>', 'Post Had Been Updated Successfully!');
                  }
                <strong class="ProceduralProcessBoxTitle">step 1</strong> The Route
                  Route::get('<b class="highlights">fetched-and-update</b>', [StartDatabaseCon::class, 'updateById'])->name('<b class="highlights">fetchedandupdate</b>');
                <strong class="ProceduralProcessBoxTitle">step 2</strong> The View
                  &lt;div class="card-body">
                  &#64;if(Session::has('<b class="highlights">fetched-and-update</b>'))
                  &lt;div class="alert alert-success" role="alert">
                    &#123;&#123;Session::get('<b class="highlights">fetched-and-update</b>')}}
                  &lt;/div>
                  &#64;endif
                    &lt;form class="" method="post" action="&#123;&#123;route('<b class="highlights">fetchedandupdate</b>')}}">
                      &#64;csrf
                      &lt;input type="hidden" value="&#123;&#123;<b class="highlights">$fetchIdToUpdatePost->id</b>}}">

                      <span class="error">Naku nga</span>
                      <img style="width:49.5vw"src="https://steamuserimages-a.akamaihd.net/ugc/1629697274814163855/29B4DA03B8A7287E2711CD518004FD1F5B76EED5/" alt="">
                      <span class="fixError">Route::<b class="highlights">post</b>('fetched-and-update', [StartDatabaseCon::class, 'updateById'])->name('fetchedandupdate');</span>

                      <span class="error">Ay pota wala nga error hindi naman nag update HAHAH</span>
                      <span class="fixError">pero napagana ko yung may return back()->with('<b class="highlights">fetched-and-update</b>', 'Post Had Been Updated Successfully!');</span>
                      dahil dito
                      &#64;if(Session::has('<b class="highlights">fetched-and-update</b>'))
                      &lt;div class="alert alert-success" role="alert">
                        &#123;&#123;Session::get('<b class="highlights">fetched-and-update</b>')}}
                      &lt;/div>
                      &#64;endif kapag Post Click ng button

                      <span class="error">Pero bakit null</span>
                      <img src="https://steamuserimages-a.akamaihd.net/ugc/1629697274814275746/CFBA4A3648BCE60D03696369D944496CED9037CF/" alt="">
                      <span class="fixError">Naayos ko gagu &lt;input type="hidden" name="<b class="highlights">id</b>" value="&#123;&#123;$fetchIdToUpdatePost->id}}"></span>
                      <a href="https://www.facebook.com/groups/298553727448221/permalink/651631358807121/">Source Code - postStore115-14-Laravel 8 Tutorial - Database Query Builder (Update Working)</a>
                      <a href="https://www.facebook.com/groups/298553727448221/permalink/656584284978495/">Source Code - SQL</a>
                </pre>
                <h1 class="moduleContentBoxTitle">15-Laravel 8 Tutorial - Join Clauses</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>: Create users table in surfsidelara8proddb database and making a index then relation view fk key manually
                  I will provide the sql source code after this

                  <strong class="ProceduralProcessBoxTitle">step 2</strong>: In Controller (StartDatabaseCon.php)
                    public function innerJoinClause () {
                      $requestDB = DB::table('users')
                               ->join('startdbcontable', 'users.id', '=', 'startdbcontable.user_id')
                               ->select('users.name', 'startdbcontable.title', 'startdbcontable.body')
                               ->get();
                      return $requestDB;

                    }

                    <h1>INNER-JOIN</h1>
                  <strong class="ProceduralProcessBoxTitle">step 3</strong>: In Routes
                    Route::get('/inner-join', [StartDatabaseCon::class, 'innerJoinClause'])->name('startdbcon.innerjoin');

                    <h1>LEFT-JOIN</h1>
                  <strong class="ProceduralProcessBoxTitle">step 4</strong>: In Controller (StartDatabaseCon.php)
                    public function leftJoinClause () {
                      $requestDB = DB::table('users')
                               ->leftJoin('startdbcontable', 'users.id', '=', 'startdbcontable.user_id')
                               ->get();
                      return $requestDB;
                    }
                  <strong class="ProceduralProcessBoxTitle">step 5</strong>: In Routes
                    Route::get('/left-join', [StartDatabaseCon::class, 'leftJoinClause'])->name('startdbcon.leftjoin');

                    <h1>RIGHT-JOIN</h1>
                  <strong class="ProceduralProcessBoxTitle">step 6</strong>: In Controller (StartDatabaseCon.php)
                    public function rightJoinClause () {
                      $requestDB = DB::table('users')
                               ->rightJoin('startdbcontable', 'users.id', '=', 'startdbcontable.user_id')
                               ->get();
                      return $requestDB;
                    }
                  <strong class="ProceduralProcessBoxTitle">step 7</strong>: In Routes
                    Route::get('/right-join', [StartDatabaseCon::class, 'rightJoinClause'])->name('startdbcon.rightjoin');

                </pre>
                <h1 class="moduleContentBoxTitle">16-Laravel 8 Tutorial - Model</h1>
                <pre>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:
                    php artisan make:model SurfsidePost

                  <strong class="ProceduralProcessBoxTitle">step 2</strong>: Inside that model newly created pick a database table
                    &lt;?php

                    namespace App\Models;

                    use Illuminate\Database\Eloquent\Factories\HasFactory;
                    use Illuminate\Database\Eloquent\Model;

                    class SurfsidePost extends Model
                    {
                        use HasFactory;
                        protected $table = 'startdbcontable';
                    }

                    <strong class="ProceduralProcessBoxTitle">step 3</strong>: Use the namespace of the Model in the StartDatabaseCon.php and make use of that model that has the existing database table in it
                      use App\Models\SurfsidePost;
                      public function getAllPostsUsingModel () {
                        $surfSidePostModel = SurfsidePost::all();
                        return $surfSidePostModel;
                      }


                    <strong class="ProceduralProcessBoxTitle">step 4</strong>: The Route
                      Route::get('/all-posts', [StartDatabaseCon::class, 'getAllPostsUsingModel'])->name('startdbcon.getallpostsfromstartdbcontable');
                </pre>
                <h1 class="moduleContentBoxTitle">17-Laravel 8 Tutorial - Migration</h1>
                <pre>
                  For example we don't have tables nor columns in the database
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:
                    php artisan make:migration create_surfsideposts_table --create=surfsidemediaposts
                                         class CreateSurfsidepostsTable
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>: Make some adjustments to that migrations table(2020_09_21_161803_create_surfsideposts_table.php)
                  <strong class="ProceduralProcessBoxTitle">step 3</strong>: Migrate it to phpMyAdmin
                    php artisan migrate
                </pre>
                <h1 class="moduleContentBoxTitle">18-Laravel 8 Tutorial - Seeding</h1>
                <pre>

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:
                    php artisan make:seeder PostTableSeeder


                  <strong class="ProceduralProcessBoxTitle">step 2</strong>:<b class="steprocedure">Inside<em>database\seeders\PostTableSeeder.php</em></b>
                    &lt;?php

                    namespace Database\Seeders;

                    use Illuminate\Database\Seeder;
                    <b class="highlights">use Illuminate\Support\Facades\DB</b>;
                    class PostTableSeeder extends Seeder
                    {
                        /**
                         * Run the database seeds.
                         *
                         * @return void
                         */
                        public function run()
                        {
                            DB::table('startdbcontable')->insert([
                              'title' => 'First Post Title',
                              'body' => 'First Post Body',
                            ]);
                        }
                    }


                  <strong class="ProceduralProcessBoxTitle">step 3</strong>:<b class="steprocedure">Inside<em>database\seeders\DatabaseSeeder.php</em></b>
                    &lt;?php

                    namespace Database\Seeders;

                    use Illuminate\Database\Seeder;

                    class DatabaseSeeder extends Seeder
                    {
                        /**
                         * Seed the application's database.
                         *
                         * @return void
                         */
                        public function run()
                        {
                            // User::factory(10)->create();
                            $this->call([
                              PostTableSeeder::class,
                            ]);
                        }
                    }

                  <strong class="ProceduralProcessBoxTitle">step 4</strong>:<b class="steprocedure"><em></em></b>
                    composer dump-autoload
                    php artisan db:seed


                  <strong class="ProceduralProcessBoxTitle">step 5</strong>:<b class="steprocedure">Inside<em>database\seeders\PostTableSeeder.php</em></b>
                    <b class="highlights">use Faker\Factory as Faker</b>;
                    $faker = Faker::create();
                    foreach(range(1,100) as $index){
                      DB::table('startdbcontable')->insert([
                      'title' => $faker->sentence(5),
                      'body' => $faker->paragraph(4),
                      ]);
                    }


                  <strong class="ProceduralProcessBoxTitle">step 6</strong>:<b class="steprocedure"><em></em></b>
                    php artisan db:seed
                    <img style="width:49.5vw"src="https://steamuserimages-a.akamaihd.net/ugc/1629697274815145954/E87B28126F27DFB77D503B2FDB21C1A3AB9ABDB2/" alt="">
                    php artisan migrate:fresh --seed
                </pre>
                <h1 class="moduleContentBoxTitle">19-Laravel 8 Tutorial - Blade Template</h1> <a target="_blank" href="https://laravel.com/docs/8.x/blade">Detailed Documentation</a>
                <pre>
                  <b class="steprocedure">1</b>
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1629698544124351165/10D2CE93D846E54C649BCF5D74DEC28C4F81CA0F/" alt="">
                </pre>
                <h1 class="moduleContentBoxTitle">20-Laravel 8 Tutorial - Blade Template Layout <a target="_blank" href="https://laravel.com/docs/8.x/blade">Detailed Documentation</a></h1>
                <pre>
                  <b class="steprocedure">1</b>
                  Create layout


                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1629698544124370708/D290C71BC189017DD556C437F2A00FB25AD33821/" alt="">
                  <b class="steprocedure">2</b>
                  Create page
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1629698544124377550/AB7550B53C6F5248CD1CA20F090CE0882639CAA9/" alt="">


                  <b class="steprocedure">3</b>
                  Of course the Routes
                  <img src="https://steamuserimages-a.akamaihd.net/ugc/1629698544124383221/2AB6A4ABD5F8D2F756F39E9FAB5F42C0D7729856/" alt="">




                </pre>
              </p>
            </div>
          </section>


          <section class="sectionDivisions">
            <h1 class="masterBoxTitleSection">Laravel Extra: Using Vue.js with Laravel</h1>

            <div class="containerContentManagementDivision">
              <p>
                <a href="https://www.facebook.com/groups/488912261597776/permalink/928484017640596/">Source Files inside Laravel 8 - My Own Mix of Learning</a>
                <h1 class="moduleContentBoxTitle">Learning Vue.js</h1>
                <pre>
                </pre>
              </p>
            </div>

            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci2">------------Code Inspire 2-Installing AdminLTE 3 on Laravel 5.7 and Bootstrap 4------------</h1>
                <pre>

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure"></em></b>
                  <div class="codeManagement">

                    1resources\assets\js\components\InvoiceCredentials.vue---axios.get("api/readDataMtMFTable").then(({ data }) => (this.profileForm.fill(data)))
                    2routes\api.php---
                    Route::apiResources(['keyOfMtMFs' => 'App\Http\Controllers\API\ManyToManyFormsController']);
                    Route::get('readDataMtMFTable', 'App\Http\Controllers\API\ManyToManyFormsController@many_to_many_forms_table');

                    3Http\Controllers\API\ManyToManyFormsController.php---
                    public function many_to_many_forms_table() {
                      $userInformation = auth('api')->user();
                      return $userInformation->id;
                    }

                    4INSPECT---NETWORK XHR ->OUTPUT RESULT



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

                    -------------------Old Auth-------------------
                    composer require laravel/ui

                    php artisan ui vue

                    php artisan ui:auth

                    php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
                    Link Source:https://github.com/laravel/fortify
                  </div>

                  <strong class="ProceduralProcessBoxTitle">step 2</strong>:<b><em class="steprocedure">Install Package Dependencies</em></b>
                  <div class="codeManagement">
                    npm install admin-lte@v3.0.0-alpha.2 --save
                    npm i bootstrap
                    npm i popper.js@1.14.3 or npm i @popperjs/core
                    npm i jquery
                    npm i vue

                    Later
                    npm i vue-progressbar
                    npm i vue-router
                    npm i --save @fortawesome/fontawesome-free or npm i @fortawesome/fontawesome-free
                  </div>
                  <strong class="ProceduralProcessBoxTitle">step 3</strong>:<b><em class="steprocedure">create DIR resources\assets\js\bootstrap.js</em></b>
                  <div class="codeManagement">
                    window._ = require('lodash');
                    window.Popper = require('popper.js').default;



                    /**
                     * We'll load jQuery and the Bootstrap jQuery plugin which provides support
                     * for JavaScript based Bootstrap features such as modals and tabs. This
                     * code may be modified to fit the specific needs of your application.
                     */

                    try {
                        window.$ = window.jQuery = require('jquery');

                        require('bootstrap');
                        <b class="highlights">require('admin-lte')</b>;
                    } catch (e) {}
                  </div>
                  <strong class="ProceduralProcessBoxTitle">step 4</strong>:<b><em class="steprocedure">create DIR resources\assets\sass\myapp.scss</em></b>
                  <div class="codeManagement">

                    // Fonts
                    @import url('https://fonts.googleapis.com/css?family=Nunito');

                    // Variables
                    @import 'variables';
                    $fa-font-path: "../webfonts";
                    // Bootstrap
                    @import '~bootstrap/scss/bootstrap';
                    <b class="highlights">@import '~admin-lte/dist/css/adminlte.css'</b>;
                    @import '~@fortawesome/fontawesome-free/scss/fontawesome.scss';
                    @import '~@fortawesome/fontawesome-free/scss/solid.scss';
                    @import '~@fortawesome/fontawesome-free/scss/brands.scss';


                    .navbar-laravel {
                      background-color: #fff;
                      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
                    }


                    .router-link-exact-active {
                      background-color: #C1666B;
                      color: red !important;
                    }

                  </div>
                  <strong class="ProceduralProcessBoxTitle">step 5</strong>:<b><em class="steprocedure">create DIR resources\assets\appjs\globalvue.js</em></b>
                  <div class="codeManagement">
                    mix.js('resources/js/app.js', 'public/js')
                        <b class="criticalHighlights">.js('resources/assets/appjs/globalvue.js', 'public/myassets/compiledjs')</b>
                        .postCss('resources/css/app.css', 'public/css', [
                            require('postcss-import'),
                            require('tailwindcss'),
                        ])
                        <b class="criticalHighlights">.sass('resources/assets/appsass/myapp.scss', 'public/myassets/compiledcss')</b>
                        .webpackConfig(require('./webpack.config'));

                  </div>


                  <strong class="ProceduralProcessBoxTitle">step 6</strong>:<b><em class="steprocedure">Adjust Webpack Compiler</em></b>
                  <div class="codeManagement">

                  </div>


                  <strong class="ProceduralProcessBoxTitle">step 7</strong>:<b><em class="steprocedure">Creating a Blade Master Template</em></b>
                  <div class="codeManagement">
                    <a href="https://adminlte.io/themes/dev/AdminLTE/starter.html#" target="_blank">Link:AdminLTE/starter.html</a>
                  </div>

                </pre>
              </p>
            </div>

            <div class="containerContentManagementDivision">
              <h1 class="moduleContentBoxTitle" id="ci6">Learning Points 31 Laravel PDF</h1>
              <p>
                <pre>
                  composer require barryvdh/laravel-dompdf
                  <strong class="ProceduralProcessBoxTitle"></strong>:Configure then Register Our DOMPDF (The alias) in<b><em class="steprocedure">config\<b class="highlights">app.php</b></em></b>
                    <div class="codeManagement">
                      We already have downloaded and installed the necessary requirements for the API Usage of DOMPDF so we can just alias it(related to slugs maybe)
                      <b class="criticalHighlights">Barryvdh\DomPDF\ServiceProvider::class,</b>
                      <b class="criticalHighlights">'PDF' => Barryvdh\DomPDF\Facade::class,</b>
                    </div>
                  <strong class="ProceduralProcessBoxTitle"></strong>:Publish it by executing it in the <b><em class="steprocedure"><b class="highlights">Terminal</b></em></b>
                    <div class="codeManagement">
                      php artisan vendor:publish --provider="Barryvdh\DomPDF\ServiceProvider"
                    </div>
                  <strong class="ProceduralProcessBoxTitle"></strong>:Make a controller <b><em class="steprocedure"><b class="highlights">SPECIFICALLY</b></em> for that DomPDF Libary for organized content</b>
                    <div class="codeManagement">
                      php artisan make:controller API\EmployeeDomPDFController --api
                    </div>
                </pre>
              </p>
            </div>

            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci6">Code Inspire 6-Configure Vue Router to Laravel 5.7 and Admin LTE 3</h1>
                <pre>

                  <strong class="ProceduralProcessBoxTitle">Self-learning</strong>:<b><em class="steprocedure"></em></b>
                  <div class="codeManagement">

                  </div>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">resources\<b class="highlights">assets\appjs\globalvue.js</b></em></b>
                  <strong class="takeNote">Of course create this folder and file if don't have</strong>
                  <div class="codeManagement">
                    <blockquote cite="http://">
                      Reference Links:
                      <a href="https://router.vuejs.org"></a>
                      processedure:
                      <b class="criticalHighlights"><span class="processedure">npm i vue-router</span></b>
                      /**
                       * First we will load all of this project's JavaScript dependencies which
                       * includes Vue and other libraries. It is a great starting point when
                       * building robust, powerful web applications using Vue and Laravel.
                       */
                       require('./bootstrap');
                       <b class="criticalHighlights">window.Vue = require('vue')</b>
                       <b class="criticalHighlights">import Router from 'vue-router'</b>
                       <b class="criticalHighlights">Vue.use(Router)</b>
                       <b class="criticalHighlights">let routes</b> = [
                         <b class="criticalHighlights">{ path: '/vue-component-module-example', component: require('./VueComponents/FirstVueComponentModule.vue').default },</b>
                       ]
                       <b class="criticalHighlights">const router = new Router({</b>
                         mode: 'history',
                         <b class="criticalHighlights">routes</b>
                       })

                       /**
                        * Next, we will create a fresh Vue application instance and attach it to
                        * the page. Then, you may begin adding components to this application
                        * or customize the JavaScript scaffolding to fit your unique needs.
                        */
                        Vue.component('example-component', require('./VueComponents/ExampleComponent.vue'));

                        const app = new Vue({
                            <b class="criticalHighlights">el: '#connect-this-master-layout-to-the-vue-router'</b>,
                            <b class="criticalHighlights">router</b>
                        });

                    </blockquote>
                  </div>
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>:<b><em class="steprocedure">resources\<b class="highlights">assets\appjs\bootstrap.js</b></em></b>
                  <strong class="takeNote">Of course create this folder and file if don't have and this is the <b class="highlights">require('./bootstrap')</b>;</strong>
                  <div class="codeManagement">
                    <blockquote cite="http://">
                      Sa totoo lang hindi ko alam kung saan galing/nakuha to kinopya lang para masundan yung tutorial
                      Reference Links:

                    </blockquote>

                    window._ = require('lodash');
                    window.Popper = require('popper.js').default;



                    /**
                     * We'll load jQuery and the Bootstrap jQuery plugin which provides support
                     * for JavaScript based Bootstrap features such as modals and tabs. This
                     * code may be modified to fit the specific needs of your application.
                     */

                    try {
                        window.$ = window.jQuery = require('jquery');

                        require('bootstrap');
                        require('admin-lte');
                    } catch (e) {}

                    /**
                     * We'll load the axios HTTP library which allows us to easily issue requests
                     * to our Laravel back-end. This library automatically handles sending the
                     * CSRF token as a header based on the value of the "XSRF" token cookie.
                     */

                    window.axios = require('axios');

                    window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

                    /**
                     * Next we will register the CSRF Token as a common header with Axios so that
                     * all outgoing HTTP requests automatically have it attached. This is just
                     * a simple convenience so we don't have to attach every token manually.
                     */

                    let token = document.head.querySelector('meta[name="csrf-token"]');

                    if (token) {
                        window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
                    } else {
                        console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
                    }

                    /**
                     * Echo exposes an expressive API for subscribing to channels and listening
                     * for events that are broadcast by Laravel. Echo and event broadcasting
                     * allows your team to easily build robust real-time web applications.
                     */
                  </div>
                  <strong class="ProceduralProcessBoxTitle">step 3</strong>:<b><em class="steprocedure">resources\views\<b class="highlights">layouts\master.blade.php</b></em></b>
                  <strong class="takeNote">Of course create this folder and file if don't have</strong>
                  <div class="codeManagement">
                    <blockquote cite="http://">
                      Reference Links:
                    </blockquote>
                    &lt;!DOCTYPE html>
                    &lt;html lang="en">
                    &lt;head>
                      &lt;meta charset="utf-8">
                      &lt;meta name="viewport" content="width=device-width, initial-scale=1">
                      &lt;meta http-equiv="x-ua-compatible" content="ie=edge">

                      &lt;title>AdminLTE 3 | Starter&lt;/title>
                      <b class="criticalHighlights">&lt;meta name="csrf-token" content="{{ csrf_token() }}"</b>>
                      &lt;link rel="stylesheet" <b class="criticalHighlights">href="&#123;&#123;asset('myassets\compiledcss\myapp.css(<b class="highlights">app.css</b>)')</b>}}">
                      &lt;link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                    &lt;/head>
                    &lt;body class="hold-transition sidebar-mini">
                      &lt;div class="wrapper" <b class="criticalHighlights">id="connect-this-master-layout-to-the-vue-router"</b>>

                    <!-- Content Wrapper. Contains page content -->
                    &lt;div class="content-wrapper">

                      <!-- Main content -->
                      &lt;div class="content">
                        &lt;div class="container-fluid">
                          <b class="criticalHighlights">&lt;router-view>&lt;/router-view></b>

                          &lt;vue-progress-bar>&lt;/vue-progress-bar>
                        &lt;/div><!-- /.container-fluid -->
                      &lt;/div>
                      <!-- /.content -->
                    &lt;/div>
                    <!-- /.content-wrapper -->
                    ------------------------------------------EXAMPLE------------------------------------------
                    &lt;li class="nav-item">
                      <b class="criticalHighlights">&lt;router-link to="/vue-component-module-example" class="nav-link"></b>

                       &lt;i class="nav-icon fas fa-tachometer-alt blue">&lt;/i>
                       &lt;p>
                         FirstVueComponentModule

                       &lt;/p>
                      <b class="criticalHighlights">&lt;/router-link></b>
                    &lt;/li>

                  </div>
                  <strong class="ProceduralProcessBoxTitle">step 4</strong>:<b><em class="steprocedure">resources\<b class="highlights">assets\appjs\VueComponents\FirstVueComponentModule.vue</b></em></b>
                  <strong class="takeNote">Of course create this folder and file if don't have</strong>
                  <div class="codeManagement">
                    <blockquote cite="http://">
                      Reference Links:
                    </blockquote>
                    &lt;template>
                      &lt;div class="container">
                        &lt;div class="row justify-content-center">
                          &lt;div class="col-md-8">
                            &lt;div class="card card-default">
                              &lt;div class="card-header">My First Vue Module Component Example&lt;/div>

                              &lt;div class="card-body">

                              &lt;/div>
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

                  </div>
                </pre>
              </p>
            </div>
            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci7">Code Inspire 7-Detect Active Menu in Vue Router and Laravel Plus HTML5 History Mode</h1>
                <pre>

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">resources\<b class="highlights">assets\appjs\globalvue.js</b></em></b>
                  <div class="codeManagement">
                    <a href="https://router.vuejs.org/guide/essentials/history-mode.html" target="_blank">Reference Link</a>
                    const router = new Router({
                      <b class="criticalHighlights">mode: 'history',</b>
                      routes
                    })

                  </div>
                  <strong class="ProceduralProcessBoxTitle">step 2</strong>:<b><em class="steprocedure">routes<b class="highlights">\web.php</b></em></b>

                  <div class="codeManagement">
                    <b class="criticalHighlights">Route::get('{path}','App\Http\Controllers\HomeController@index')->where( 'path','([-a-z0-9_\s]+)' )</b>;
                    <strong class="takeNote">Of course create the folder and file if you don't have it</strong>
                  </div>
                  <strong class="ProceduralProcessBoxTitle">step 3</strong>:<b><em class="steprocedure">resources\views\<b class="highlights">layouts\master.blade.php</b></em></b>
                  <div class="codeManagement">

                    &lt;li class="nav-item has-treeview">
                      &lt;a href="#" class="nav-link <b class="criticalHighlights">active"</b>>
                        &lt;i class="nav-icon fa fa-cog green">&lt;/i>
                        &lt;p>
                          Some Vue Module Component
                          &lt;i class="right fas fa-angle-left">&lt;/i>
                        &lt;/p>
                      &lt;/a>
                      &lt;ul class="nav nav-treeview">
                        &lt;li class="nav-item">
                          &lt;router-link to="/users" class="nav-link <b class="criticalHighlights">active"</b>>
                            &lt;i class="fas fa-users nav-icon">&lt;/i>
                            &lt;p>Users&lt;/p>
                          &lt;/router-link>
                        &lt;/li>
                      &lt;/ul>
                    &lt;/li>

                  </div>
                  <strong class="ProceduralProcessBoxTitle">step 4</strong>:<b><em class="steprocedure">resources\<b class="highlights">assets\appsass\myapp.scss</b></em></b>
                  <div class="codeManagement">
                    <b class="criticalHighlights">.router-link-exact-active</b> {
                      background-color: #C1666B;
                      color: red <b class="highlights">!important</b>;
                    }

                  </div>
                </pre>
              </p>
            </div>

            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci11">Code Inspire 11-Using VFrom for Back-end Error Handling in Laravel and Vuejs</h1>
                <pre>

                  <blockquote cite="http://">
                    <a href="https://github.com/cretueusebiu/vform" target="_blank">Github link:vform</a>
                    <a href="https://laracasts.com/series/learn-vue-2-step-by-step" target="_blank">learn-vue-2-step-by-step</a>

                    /**
                     * Submit the from via a POST|PATCH|PUT|DELETE|GET request.
                     *
                     * @param  {String} url
                     * @return {Promise}
                     */
                    HTTP request - post|patch|put|delete|get (url)
                  </blockquote>
                  <strong class="ProceduralProcessBoxTitle">Step 1</strong>:<b><em class="steprocedure"><b class="criticalHighlights">Installation</b></em></b>
                  <div class="codeManagement">

                    npm i axios vform
                  </div>
                  <strong class="ProceduralProcessBoxTitle">Step 2</strong>:<b><em class="steprocedure"><b class="criticalHighlights">Importation for Compiling for use on the application</b></em></b>
                  In <span class="criticalHighlights">resources\assets\appjs\globalvue.js</span>
                  <div class="codeManagement">
                    import { Form, HasError, AlertError } from 'vform'

                    window.<b class="criticalHighlights">AnyValueAddressHolderName</b> = Form
                    <span class="methodanicompute">Access Globally for Usage around the app</span>
                    Vue.component(HasError.name, HasError)
                    Vue.component(AlertError.name, AlertError)

                  </div>

                  <strong class="ProceduralProcessBoxTitle">Step 3</strong><b><em class="steprocedure"><b class="criticalHighlights">Implementation in the Vue Component(Javascript: Declaration, Definition, Conditions and Functionality/Methods for Usage Part)</b></em></b>
                  In ANYWHERE of your Created Vue Components example in <i><span class="criticalHighlights">resources\assets\appjs\VueComponents</span></i>
                  <div class="codeManagement">
                    &lt;script>
                    export default {
                      data() {
                        return {
                          editMode: false,
                          users: {

                          },
                          <i><b class="criticalHighlights">canNameAnythingIWantForm</b></i>: new <i><b class="criticalHighlights">Your Declared Named Variable In Your Main App Vue.js(That will be compiled once save)</b></i>({

                            <strong class="ProceduralProcessBoxTitle">Step 4</strong><b><em class="steprocedure"><b class="criticalHighlights">Check/Modify your Migrations Table(Laravel) or Database Structure of your ER Table(phpMyAdmin)</b></em></b> Example here below
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
                    }
                    &lt;/script>
                  </div>
                  <strong class="ProceduralProcessBoxTitle">Step 5</strong><b><em class="steprocedure"><b class="criticalHighlights">Implementation in the Vue Component(As an HTML Element Attribute That Vue.js Manipulated and Modified in the HTML via Scripts: Ready to use as an
                  HTML Element Attribute)</b></em></b>
                  <div class="codeManagement">
                    <blockquote cite="http://">
                      Brief Review of ERD Database

                      An entity or an entity type or a data object is a representation
                      of something that has several different properties (attributes)
                      that must be understood by software. It is anything that produce
                      or consumes information



                      • Entity instance person, place, object, event, concept
                      (often corresponds to a row in a

                      • Entity Type collection of entities (often corresponds to
                      a table)

                      • Attribute-property or characteristic of an entity or relationship type (often
                      Relationships:

                      • Relationship instance(Relationship Type = Value) link between entities (corresponds to
                      primary key foreign key equivalencies in related tables)

                      • Relationship type category of relationship…link between entity
                      types

                      • Associative Entity combination of relationship and entity

                          Relationships can have attributes

                          Two entities can have more than one type of relationship between them (multiple relationships)
                    </blockquote>
                    Examples: This is a Twp-way Model Binding
                    &lt;form @submit.prevent="editMode ? updateUser() : createUser()">
                      &lt;div class="modal-body">

                        <b class="highlights">-----INPUT EXAMPLE-----</b>
                        &lt;div class="form-group">
                          &lt;input <b class="criticalHighlights">v-model="canNameAnythingIWantForm.YourDatabaseTableAttributes or Entity Instance"</b> type="text" <b class="criticalHighlights">name="nameOfTheHTMLElement"</b>
                          placeholder="Name" class="form-control" <b class="criticalHighlights">:class="{ 'is-invalid': canNameAnythingIWantForm.errors.has('Entity Instance') }"</b>>
                          <b class="criticalHighlights">&lt;has-error :form="canNameAnythingIWantForm" field="Entity Instance">&lt;/has-error></b>
                        &lt;/div>

                        <b class="highlights">-----TEXTAREA EXAMPLE-----</b>
                        &lt;div class="form-group">
                          &lt;textarea><b class="criticalHighlights">v-model="canNameAnythingIWantForm.YourDatabaseTableAttributes or Another Entity Instance"</b> <b class="criticalHighlights">name="nameOfTheHTMLElement"</b> <b class="criticalHighlights">id="idForTheLabel"</b>
                          placeholder="About you (Optional)" class="form-control" <b class="criticalHighlights">:class="{ 'is-invalid': canNameAnythingIWantForm.errors.has('Another Entity Instance') }"</b>>
                          &lt;/textarea>
                          <b class="criticalHighlights">&lt;has-error :form="canNameAnythingIWantForm" field="Another Entity Instance">&lt;/has-error></b>
                        &lt;/div>

                        <b class="highlights">-----SELECT OPTION EXAMPLE-----</b>
                        &lt;div class="form-group">
                          &lt;select><b class="criticalHighlights">v-model="canNameAnythingIWantForm.YourDatabaseTableAttributes or Another Entity Instance"</b> <b class="criticalHighlights">name="nameOfTheHTMLElement"</b> <b class="criticalHighlights">id="idForTheLabel"</b>
                          placeholder="About you (Optional)" class="form-control" <b class="criticalHighlights">:class="{ 'is-invalid': canNameAnythingIWantForm.errors.has('Another Entity Instance') }"</b>>
                            <b class="criticalHighlights">&lt;option value="">Select User Role&lt;/option></b>
                            <b class="criticalHighlights">&lt;option value="Entity Attr/Instance Value">Admin&lt;/option></b>
                            <b class="criticalHighlights">&lt;option value="Entity Attr/Instance Value">User&lt;/option></b>
                          &lt;/select>
                          <b class="criticalHighlights">&lt;has-error :form="canNameAnythingIWantForm" field="Another Entity Instance">&lt;/has-error></b>
                        &lt;/div>

                        <b class="highlights">-----PASSWORD EXAMPLE-----</b>
                        &lt;div class="form-group">
                          &lt;input <b class="criticalHighlights">v-model="canNameAnythingIWantForm.YourDatabaseTableAttributes or Entity Instance"</b> <b class="criticalHighlights">type="password"</b> <b class="criticalHighlights">name="nameOfTheHTMLElement"</b>
                          placeholder="Name" class="form-control" <b class="criticalHighlights">:class="{ 'is-invalid': canNameAnythingIWantForm.errors.has('Entity Instance') }"</b>>
                          <b class="criticalHighlights">&lt;has-error :form="canNameAnythingIWantForm" field="Entity Instance">&lt;/has-error></b>
                        &lt;/div>

                      &lt;/div>
                      &lt;div class="modal-footer">
                          &lt;button type="button" class="btn btn-danger" data-dismiss="modal">Close&lt;/button>
                          &lt;button v-show="editMode" type="submit" class="btn btn-success">Update&lt;/button>
                          &lt;button v-show="!editMode" type="submit" class="btn btn-primary">Create&lt;/button>
                      &lt;/div>
                      &lt;a href="google.com" id="pdfLink">&lt;/a>
                    &lt;/form>

                  </div>

                </pre>
              </p>
            </div>

            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci12">Code Inspire 12-API Resource Controller in Laravel 5.7 with Vuejs</h1>
                <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">HTML PART resources\<b class="highlights">assets\appjs\VueComponents\users.vue</b></em></b>
                <pre>
                  <div class="codeManagement">
                    <blockquote cite="http://">
                      <a target="_blank" href="https://github.com/cretueusebiu/vform/blob/master/example/bootstrap4.html">HTML vform combine with bootstrap code</a>
                    </blockquote>
                    &lt;form <b class="criticalHighlights">@submit.prevent="i_am_from_form_attribute_callback_function"</b>>
                    &lt;/form>
                  </div>
                </pre>
                <h1 class="steprocedure" id="ci12">Javascript Code Part</h1>
                <strong class="ProceduralProcessBoxTitle">step 2</strong>:<b><em class="steprocedure">JAVASCRIPT PART resources\<b class="highlights">assets\appjs\VueComponents\users.vue</b></em></b>
                <pre>
                  <div class="codeManagement">
                    <blockquote cite="http://">
                    </blockquote>
                    &lt;script>
                      export default {
                        methods: {
                          i_am_from_form_attribute_callback_function(){

                            this.canNameAnythingIWantForm.post('api/user')


                            .then( () => {

                              callWhateverYouWant.$emit('AfterCreate')
                              //custom event

                              $('#addNew').modal('hide')
                              // https://sweetalert2.github.io/ Functionality Library
                              Toast.fire({
                                icon: 'success',
                                title: 'User Created Successfully'
                              })
                              // https://sweetalert2.github.io/ Functionality Library

                              this.$Progress.finish()
                            }).catch( () => {

                            })

                          }

                        },
                      }
                    &lt;/script>
                  </div>
                  <h1 class="steprocedure" id="ci12">Creating an api controler for the routes to use and call</h1>
                  <strong class="ProceduralProcessBoxTitle">step 3</strong>:<b><em class="steprocedure">Laravel PHP PART app\Http\Controllers\<b class="highlights">API\UserController.php</b></em></b>
                  <pre>
                    <div class="codeManagement">
                      <blockquote cite="http://">
                      </blockquote>
                      <span class="processedure">php artisan make:controller API/UserController --api</span>
                    </div>
                  <strong class="ProceduralProcessBoxTitle">Step 4</strong>:<b><em class="steprocedure">Laravel PHP PART routes\<b class="highlights">api.php</b></em></b>
                  <pre>
                    <div class="codeManagement">
                      <blockquote cite="http://">
                      </blockquote>
                      Route::apiResources('URI', '<b class="criticalHighlights">API\UserController'</b>);

                      or kapag may error eto na lang
                      Route::<b class="criticalHighlights">apiResources</b>([<b class="criticalHighlights">'URL' => 'App\Http\Controllers\API\UserController'</b>]);

                      then check
                      <b class="highlights">php artisan route:list</b>
                    </div>
                </pre>
              </p>
            </div>

            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci13">Code Inspire 13-Insert User Data to Database Using Axios in Laravel 5.7 and Vue</h1>

                <strong class="ProceduralProcessBoxTitle">Step 1</strong><em class="steprocedure">HTML Part Don't forget the submit button to trigger the action resources\<b class="highlights">assets\appjs\VueComponents\users.vue</b></em></b>
                <pre>
                  <div class="codeManagement">
                    <a href="https://laravel.com/docs/8.x/migrations">Schema Builder</a>
                    <a href="https://laracasts.com/discuss/channels/laravel/sqlstate23000-integrity-constraint-violation-1048-column-product-id-cannot-be-null-sql-insert-into-category-product?page=1">Reference Errors</a>
                    &lt;form <b class="criticalHighlights">@submit.prevent=</b>"editMode ? updateUser() : this_will_create_an_instanceVAL_from_the_dbtable_specified_tobe_stored_on_toThat_dbtable()">
                      &lt;div class="modal-footer">
                        &lt;button type="button" class="btn btn-danger" data-dismiss="modal">Close&lt;/button>
                        &lt;button v-show="editMode" type="submit" class="btn btn-success">Update&lt;/button>
                        <b class="criticalHighlights">&lt;button v-show="!editMode" <b class="highlights">type="submit"</b> class="btn btn-primary">Create&lt;/button></b>
                      &lt;/div>
                    &lt;/form>
                  </div>
                </pre>
                <strong class="ProceduralProcessBoxTitle">Step 1</strong><em class="steprocedure">JS Vue libraries and Installed Implementation scripts Part resources\<b class="highlights">assets\appjs\VueComponents\users.vue</b></em></b>
                <pre>
                  <div class="codeManagement">
                    <b class="criticalHighlights">this_will_create_an_instanceVAL_from_the_dbtable_specified_tobe_stored_on_toThat_dbtable(){</b>
                      <b class="criticalHighlights">this.someVueCompModForm.post('api/key')</b>
                    }, //this_will_create_an_instanceVAL_from_the_dbtable_specified_tobe_stored_on_toThat_dbtable end

                    SEIM-FULL
                    <b class="criticalHighlights">this_will_fetch_the_table_from_the_db() {</b>
                      <b class="criticalHighlights">axios.get("api/user").then(({data}) => (this.someTableWaitingToBeFilledWithData = data.data))</b>
                    },

                    <b class="criticalHighlights">this_will_create_an_instanceVAL_from_the_dbtable_specified_tobe_stored_on_toThat_dbtable() {</b>
                      this.$Progress.start()
                      <b class="criticalHighlights">this.userForm.post('api/user')</b>

                      //condition
                      .then( () => {
                      //custom event
                      sendHTTPReqAfterEvryActionIsDone.$emit('AfterCreate')
                      //custom event

                      $('#addNew').modal('hide')
                      // https://sweetalert2.github.io/ Functionality Library
                      Toast.fire({
                        icon: 'success',
                        title: 'User Created Successfully'
                      })
                      // https://sweetalert2.github.io/ Functionality Library

                      this.$Progress.finish()
                    }).catch( () => {

                    })
                  }<b class="highlights">this_will_create_an_instanceVAL() END</b>
                },<b class="highlights">methods: END</b>

                  created() {
                    <b class="highlights">this.this_will_fetch_the_table_from_the_db();</b>

                    //custom event
                    <b class="highlights">sendHTTPReqAfterEvryActionIsDone.$on('AfterCreate', () => {</b>
                      <b class="highlights">this.this_will_fetch_the_table_from_the_db()</b>
                    })
                    //custom event

                  }<b class="highlights">created() END</B>
                }<b class="highlights">export default END</b>
                    SEMI-FULL
                  </div>
                </pre>
                <strong class="ProceduralProcessBoxTitle">Step 2</strong><em class="steprocedure">Laravel PHP PART app\Http\Controllers\<b class="highlights">API\UserController.php</b></em></b>
                <pre>
                  <div class="codeManagement">
                    <b class="criticalHighlights">use Illuminate\Support\Facades\Hash;</b>
                    <b class="criticalHighlights">use App\Models\User;</b>
                    public function store(Request $request) {

                      return ['message' => 'I have your data'];

                      return $request->all();

                      <blockquote cite="http://">
                        then to see if it work the return data
                        just right-click then inspect(google chrome)
                        Network Tab then XHR Tab
                      </blockquote>


                      $this->validate($request, [
                        'Your_Instance_Table_Attribute' => 'required|string|max:191',
                        'Your_Instance_Table_Attribute' => 'required|string|email|max:191|unique:users',
                        'Your_Instance_Table_Attribute' => 'required|string|min:6',
                      ]);

                      return User::create([
                        'Your_Instance_Table_Attribute' => $request['name'],
                        'Your_Instance_Table_Attribute' => $request['email'],
                        'Your_Instance_Table_Attribute' => $request['type'],
                        'Your_Instance_Table_Attribute' => $request['bio'],
                        'Your_Instance_Table_Attribute' => $request['photo'],
                        'password' => Hash::make($request['name']),
                      ]);


                      $this->validate($request, [
                        'name' => 'required|string|max:191',
                        'email' => 'required|string|email|max:191|unique:users',
                        'password' => 'required|string|min:6',
                      ]);

                      return User::create([
                        'name' => $request['name'],
                        'email' => $request['email'],
                        'type' => $request['type'],
                        'bio' => $request['bio'],
                        'photo' => $request['photo'],
                        'password' => Hash::make($request['name']),
                      ]);
                  </div>
                </pre>
                <strong class="ProceduralProcessBoxTitle">Step 3</strong><em class="steprocedure">Laravel PHP PART app\<b class="highlights">Models\User.php</b></em></b>
                <pre>
                  <div class="codeManagement">
                    protected $fillable = [
                        'name', 'email', 'password', 'bio', 'photo', 'type'
                    ];
                  </div>
                </pre>
              </p>
            </div>

            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci14">Code Inspire 14-😇 Nice Server Validation with Laravel and Vue js (handle with vForm)</h1>
                <strong class="ProceduralProcessBoxTitle">Step 1</strong>:Laravel PHP PART app\Http\Controllers\<b class="highlights">API\UserController.php</b></em></b>
                <pre>
                  <div class="codeManagement">
                    <b class="criticalHighlights">$this->validate($request, [</b>
                      'name' => 'required|string|max:191',
                      'email' => 'required|string|email|max:191|unique:users',
                      'password' => 'required|string|min:6',
                    ]);
                  </div>
                </pre>
              </p>
            </div>
            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci15">Code Inspire 15-Display Users from Database in Table Using Axios in Laravel and Vue</h1>
                <strong class="ProceduralProcessBoxTitle">Step 1</strong>:Laravel PHP PART app\Http\Controllers\<b class="highlights">API\UserController.php</b></em></b>
                <pre>
                  <div class="codeManagement">
                    public function index() {

                        return User::all();
                        return User::latest()->paginate(10);
                        return User::where('type', '=', 'user')->paginate(10);
                    }

                  </div>
                </pre>
                <strong class="ProceduralProcessBoxTitle">Step 2</strong>:JAVASCRIPT PART resources\<b class="highlights">assets\appjs\VueComponents\users.vue</b></em></b>
                <pre>
                  <div class="codeManagement">
                    &lt;script>
                      export default {
                        data() {
                          return {
                            editMode: false,
                            <b class="highlights">1 First Empty but when called the required method it will be filled with data under the hood</b>
                            <b class="criticalHighlights">someTableWaitingToBeFilledWithData: {},</b>
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
                          <b class="highlights">2 Rules of the Method that will be executed when called</b>
                          <b class="criticalHighlights">this_will_fetch_the_table_from_the_db(){</b>
                            <b class="highlights">axios.get("api/URI").then(({ data }) => (this.<b class="highlights">someTableWaitingToBeFilledWithData</b> = data.data))</b>
                          }, //this_will_fetch_the_table_from_the_db end
                        },  //methods end
                        created() {
                          <b class="highlights">3 Call this function when done loading the web page</b>
                          this.<b class="criticalHighlights">this_will_fetch_the_table_from_the_db()</b>
                        }
                      } //export default end
                    &lt;/script>
                  </div>
                </pre>
                <strong class="ProceduralProcessBoxTitle">Step 3</strong>:VUE HTML TEMPLATE ELEM ATTR PART (DISPLAY/OUTPUT DATA) resources\<b class="highlights">assets\appjs\VueComponents\users.vue</b></em></b>
                <pre>
                  <div class="codeManagement">
                    &lt;tr <b class="criticalHighlights">v-for="vforVariableCompact in someTableWaitingToBeFilledWithData" :key="vforVariableCompact.id"</b>>
                      &lt;td>&#123&#123; vforVariableCompact.id }}&lt;/td>
                      &lt;td>&#123&#123; vforVariableCompact.name }}&lt;/td>
                      &lt;td>&#123&#123; vforVariableCompact.email }}&lt;/td>
                      &lt;td>&#123&#123; vforVariableCompact.type | upText}}&lt;/td>
                      &lt;td> &#123&#123; vforVariableCompact.created_at | myDate }}
                  </div>
                </pre>
              </p>
            </div>


              <h1 class="moduleContentBoxTitle" id="ci16">Code Inspire 16-Global Vuejs Filters and Momentjs Instead of Carbon in Laravel and Vue</h1>
              <section class="sectionDivision">
                <div class="containerContentManagementDivision">
                  <p>
                    <h2 class="moduleContentBoxTitle" id=""></h2>
                    <strong class="ProceduralProcessBoxTitle">Step 1</strong>:Compiling PHP-JS PART resources\<b class="highlights">assets\appjs\globalvue.js</b></em></b>
                    <pre>
                      <div class="codeManagement">
                        <a target="_blank" href="https://vuejs.org/v2/guide/filters.html">Src Ref</a>

                        Vue.filter('<b class="criticalHighlights">globalVueFilterHelper or anyNameYouWant</b>', function(text) {
                          <b class="criticalHighlights">return text.charAt(0).toUpperCase() + text.slice(1)</b>
                        })
                      </div>
                    </pre>

                    <h2 class="moduleContentBoxTitle" id=""></h2>
                    <strong class="ProceduralProcessBoxTitle">Step 2</strong>:TERMINAL
                    <pre>
                      <div class="codeManagement">
                        <a target="_blank" href="https://momentjs.com/">Src Ref</a>

                        <span class="processedure">npm i moment --save</span>
                      </div>
                    </pre>

                    <h2 class="moduleContentBoxTitle" id=""></h2>
                    <strong class="ProceduralProcessBoxTitle">Step 3</strong>:Compiling PHP-JS PART resources\<b class="highlights">assets\appjs\globalvue.js</b></em></b>
                    <pre>
                      <div class="codeManagement">
                        <b class="criticalHighlights">import moment from 'moment'</b>

                        THEN

                        <b class="criticalHighlights">Vue.filter('globalVueFilterHelper-Momentjs', function(created){</b>
                          //return created.moment().format('MMMM DO YYYY') wrong
                          return moment(created).format('MMMM Do YYYY')
                        })

                      </div>
                    </pre>


                  </p>
                </div>

              </section>

              <h1 class="moduleContentBoxTitle">CI 17-ProgressBar with Vuejs and Laravel When Create new Record with Ajax.===</h1>
              <section class="sectionDivision">




                <div class="containerContentManagementDivision">
                  <p>
                    <a target="_blank" href="https://github.com/hilongjw/vue-progressbar">Ref. Src:vue-progressbar(Github)</a>
                    <br>
                    <a target="_blank" href="https://hilongjw.github.io/vue-progressbar/">Ref. Src:vue-progressbar(Website)</a>


                    <h2 class="moduleContentBoxTitle" id=""></h2>
                    <strong class="ProceduralProcessBoxTitle">Step 1</strong>:TERMINAL
                    <pre>
                      <div class="codeManagement">
                        npm i vue-progressbar --save
                      </div>
                    </pre>

                    <h2 class="moduleContentBoxTitle" id=""></h2>
                    <strong class="ProceduralProcessBoxTitle">Step 2</strong>:IMPORTING Compiling PHP-JS PART resources\<b class="highlights">assets\appjs\globalvue.js</b></em></b>
                    <pre>
                      <div class="codeManagement">
                        <b class="criticalHighlights">import vueProgressBar from 'vue-progressbar'</b>
                        <b class="criticalHighlights">Vue.use(vueProgressBar, {</b>
                          color: 'rgb(143, 255, 199)',
                          failedColor: 'red',
                          height: '3px',
                        })

                      </div>
                    </pre>

                    <h2 class="moduleContentBoxTitle" id=""></h2>
                    <strong class="ProceduralProcessBoxTitle">Step 3</strong>:FRONT-END(VIEW MODULE) PART resources\<b class="highlights">views\layouts\master.blade.php</b></em></b>
                    <pre>
                      <div class="codeManagement">
                        <blockquote cite="http://">
                          Use the imported(globalvue.js) functionality to the HTML
                        </blockquote>
                        <b class="criticalHighlights">&lt;vue-progress-bar>&lt;/vue-progress-bar></b>
                      </div>
                    </pre>

                    <h2 class="moduleContentBoxTitle" id=""></h2>
                    <strong class="ProceduralProcessBoxTitle">Step 4</strong>:Compiling PHP-JS PART resources\<b class="highlights">assets\appjs\VueComponents\users.vue</b></em></b>
                    <pre>
                      <div class="codeManagement">
                        <blockquote cite="http://">
                          You are now able to access the
                          this.$Progress.start() method
                          <b class="highlights">anywhere in your vue application modules</b>
                          custom functions/methods because it is now compiled from your <b class="highlights">main app.js(globalvue.js)</b>
                        </blockquote>

                        First Create a custom method to be called in this vue module app
                        &lt;script>
                          export default {
                            data() {
                              return {
                                editMode: false,
                                someTableWaitingToBeFilledWithData: {},
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

                              this_will_fetch_the_table_from_the_db(){
                                axios.get("api/URI").then(({ data }) => (this.someTableWaitingToBeFilledWithData = data.data))
                              }, //this_will_fetch_the_table_from_the_db end

                              <b class="criticalHighlights">this_will_create_an_instanceVAL_from_the_dbtable_specified_tobe_stored_on_toThat_dbtable(){</b>
                                <b class="highlights">this.$Progress.start()</b>
                              <b class="highlights">this.userForm.put('api/URI/'+this.userForm.id).then(() => {</b>
                                  //successful
                                  $('#addNew').modal('hide')
                                  Swal.fire.fire(
                                    'Updated!',
                                    'Information has been updated.',
                                    'success  '
                                  )
                                  <b class="highlights">this.$Progress.finish()</b>
                                  callWhateverYouWant.$emit('AfterCreate');
                                }).catch(() => {
                                  this.$Progress.fail()
                                })
                              }, //this_will_create_an_instanceVAL_from_the_dbtable_specified_tobe_stored_on_toThat_dbtable end

                            },  //methods end
                            created() {
                              this.this_will_fetch_the_table_from_the_db()
                            }
                          } //export default end
                        &lt;/script>
                      </div>
                    </pre>



                  </p>
                </div>

              </section>
              <h1 class="moduleContentBoxTitle">CI 18-Sweet Alert in Laravel 5.7 and Vue after Ajax Request</h1>
              <section class="sectionDivision">
                <div class="containerContentManagementDivision">
                  <p>
                    <h2 class="moduleContentBoxTitle" id=""></h2>
                    <strong class="ProceduralProcessBoxTitle">Step 1</strong>:TERMINAL
                    <pre>
                      <a target="_blank" href="https://sweetalert2.github.io">Sweet Alert Link</a>
                      <div class="codeManagement">
                        npm i sweetalert2 --save
                      </div>
                    </pre>

                    <h2 class="moduleContentBoxTitle" id=""></h2>
                    <strong class="ProceduralProcessBoxTitle">Step 2</strong>:IMPORTING COMPILING PHP-JS PART resources\<b class="highlights">assets\appjs\globalvue.js</b></em></b>
                    <pre>
                      <div class="codeManagement">
                        // https://sweetalert2.github.io/ Functionality Library
                        import Swal from 'sweetalert2'
                        window.GlobalSwal = Swal
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

                        window.GlobalSwalToastMeth = Toast
                        // https://sweetalert2.github.io/ Functionality Library
                      </div>
                    </pre>

                    <strong class="ProceduralProcessBoxTitle">Step 3</strong>:Compiling PHP-JS PART resources\<b class="highlights">assets\appjs\VueComponents\users.vue</b></em></b>
                    <pre>
                      <div class="codeManagement">
                        <blockquote cite="http://">
                          You are now able to access the
                          SWAL methods
                          <b class="highlights">anywhere in your vue application modules</b>
                          custom functions/methods because it is now compiled from your <b class="highlights">main app.js(globalvue.js)</b>
                        </blockquote>

                        First Create a custom method to be called in this vue module app
                        &lt;script>
                          export default {
                            data() {
                              return {
                                editMode: false,
                                someTableWaitingToBeFilledWithData: {},
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

                              this_will_fetch_the_table_from_the_db(){
                                axios.get("api/URI").then(({ data }) => (this.someTableWaitingToBeFilledWithData = data.data))
                              }, //this_will_fetch_the_table_from_the_db end

                              this_will_create_an_instanceVAL_from_the_dbtable_specified_tobe_stored_on_toThat_dbtable(){
                                this.$Progress.start()
                              this.userForm.put('api/URI/'+this.userForm.id).then(() => {
                                  //successful
                                  <b class="criticalHighlights">$('#addNew').modal('hide')</b>
                                  <b class="criticalHighlights">GlobalSwalToastMeth({</b>(
                                    icon: 'success',
                                    title: 'User Created Successfully'
                                  )
                                  GlobalSwalToastMeth
                                  this.$Progress.finish()
                                  callWhateverYouWant.$emit('AfterCreate');
                                }).catch(() => {
                                  this.$Progress.fail()
                                })
                              }, //this_will_create_an_instanceVAL_from_the_dbtable_specified_tobe_stored_on_toThat_dbtable end

                            },  //methods end
                            created() {
                              this.this_will_fetch_the_table_from_the_db()
                            }
                          } //export default end
                        &lt;/script>
                      </div>
                    </pre>

                  </p>
                </div>

              </section>
              <h1 class="moduleContentBoxTitle">===CI 19-Send HTTP Request Every 3 Seconds to Update Data in Laravel and Vuejs===</h1>
              <section class="sectionDivision">
                <div class="containerContentManagementDivision">
                  <p>
                    <h2 class="moduleContentBoxTitle" id=""></h2>
                    <strong class="ProceduralProcessBoxTitle">Brief Explanatory</strong>:
                    <pre>
                      <div class="codeManagement">
                        <blockquote cite="http://">
                          <a target="_blank" href="https://www.w3schools.com/jsref/met_win_settimeout.asp">w3schools - set timeout</a>
                          <a target="_blank" href="https://stackoverflow.com/questions/7188145/call-a-javascript-function-every-5-seconds-continuously/">StackOverflow - set interval</a>
                          explanation

                          Send an AJAX request to the server and get new data and display here every specified time you defined like when you scrolldown in social media sites
                          like Fb and Twitter it will send a request to the server everytime you scroll down and it returns back a data
                           see it in the network tab of the dev tool inspect mode in google chrome
                        </blockquote>
                      </div>
                    </pre>
                    <h2 class="moduleContentBoxTitle" id=""></h2>
                    <strong class="ProceduralProcessBoxTitle">Step 2</strong>:resources\assets\appjs\<b class="highlights"><i>globalvue.js</i></b></em></b>
                    <pre>
                      <div class="codeManagement">
                        created() {
                          this.loadUsers();
                          <b class="criticalHighlights">setInterval(this.loadUsers(), 3000)</b>
                          Error Anon Callback Func because we need to bind first because of the this KW
                          <b class="criticalHighlights">setInterval(function(){this.loadUsers()}, 3000)</b>
                          ES6 Arrow Function Anon Callback Func
                          <b class="criticalHighlights">setInterval(() =>this.loadUsers(), 3000)</b>

                          //custom event
                          callWhateverYouWant.$on('AfterCreate', () => {
                            this.loadUsers()
                          })
                          //custom event
                        }
                      </div>
                    </pre>

                  </p>
                </div>

              </section>
              <h1 class="moduleContentBoxTitle">===CI 20-Use Custom Event to Send HTTP Request After You Create the User in Laravel and Vuejs===</h1>
              <section class="sectionDivision">
                <div class="containerContentManagementDivision">
                  <p>
                    <h2 class="moduleContentBoxTitle" id=""></h2>
                    <strong class="ProceduralProcessBoxTitle">Links</strong>:<a target="_blank" href="https://vuejs.org/v2//guide/components-custom-events.html">Offical Vue.js:Custom Event Link Ref.</a>
                    <pre>
                      <div class="codeManagement">

                      </div>
                    </pre>
                    <strong class="ProceduralProcessBoxTitle">Step 1</strong>:Implementation resources\<b class="highlights">assets\appjs\globalvue.js</b></em></b>
                    Send HTTP request to the server when we see any changes or when we do any action
                    <pre>
                      <div class="codeManagement">
                        window.sendHTTPReqAfterEvryActionIsDone  = new Vue()
                        or customEvent
                        <h2>This will create a new INSTANCE of vue.js to have access to the many functional libraries of the framework</h2>
                        this_will_create_an_instanceVAL_from_the_dbtable_specified_tobe_stored_on_toThat_dbtable() {
                          this.$Progress.start()
                          this.userForm.post('api/user')

                          //condition
                          .then( () => {
                          //custom event
                            <b class="criticalHighlights">sendHTTPReqAfterEvryActionIsDone.$emit('AfterCreate')</b>
                            //custom event

                            $('#addNew').modal('hide')
                            // https://sweetalert2.github.io/ Functionality Library
                            Toast.fire({
                              icon: 'success',
                              title: 'User Created Successfully'
                            })
                            // https://sweetalert2.github.io/ Functionality Library

                            this.$Progress.finish()
                          }).catch( () => {

                          })

                        }
                      },// methods: END
                      created() {
                        this.this_will_fetch_the_table_from_the_db();

                        //custom event
                        <b class="criticalHighlights">sendHTTPReqAfterEvryActionIsDone.$on('AfterCreate', () => {</b>
                          this.this_will_fetch_the_table_from_the_db()
                        })
                        //custom event
                      }
                      </div>
                    </pre>
                  </p>
                </div>

              </section>
            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci42">Code Inspire 42-Easily Add ACL to Laravel Without Extra Tables in Database</h1>
                <pre>

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">app\Providers\<b class="highlights">AuthServiceProvider.php</b></em></b>
                  <div class="codeManagement">
                    Sources:
                    <a href="https://laravel.com/docs/5.7/authorization#gates" target="_blank">Laravel 5.7</a>
                    <a href="https://laravel.com/docs/8.x/authorization#writing-gates" target="_blank">Laravel 8</a>

                    public function boot()
                    {
                        $this->registerPolicies();

                        Gate::define('isAdmin', function($currUserType){
                          //condition because laravel by default returns the current user/authenticated user and pass it here
                          return $currUserType->type === 'admin';
                        });

                        Gate::define('isAuthor', function($currUserType){
                          return $currUserType->type === 'author';
                        });

                        Gate::define('isUser', function($currUserType){
                          return $currUserType->type === 'user';
                        });

                        Passport::routes();
                    }

                    then now you can use the blade directive &#64;can('KEY')


                  </div>
                </pre>
              </p>
            </div>

            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci43">Code Inspire 43-Limited Access to Controllers Using ACL in Laravel</h1>
                <pre>

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">app\Http\Controllers\<b class="highlights">API\UserController.php</b></em></b>
                  <div class="codeManagement">
                    public function destroy($id) {
                        <b class="criticalHighlights">$this->authorize('KEY','CONDITIONS')</b>;
                        $deleteUserById = User::findOrFail($id);
                        //return ['message' => 'User Deleted'];
                        $deleteUserById->delete();
                    }
                  </div>

                  <strong class="ProceduralProcessBoxTitle">OPTIONAL</strong>:<b><em class="steprocedure">app\Http\Controllers\<b class="highlights">API\UserController.php</b></em></b>
                  <div class="codeManagement">

                    <blockquote cite="http://">
                      now if you put
                      It is gonna check the user authentication and the user type and this
                      will affect for all functionalities you have declared
                    </blockquote>
                    public function __construct() {
                        $this->middleware('auth:api');
                        <b class="criticalHighlights">$this->authorize('KEY','CONDITIONS')</b>;
                    }
                  </div>
                  <strong class="ProceduralProcessBoxTitle">Disable access to users via url (Explanation)</strong>:<b><em class="steprocedure"><span class="highlights">routes\api.php</span></em></b>
                  <div class="codeManagement">
                    <blockquote cite="http://">
                      but we do not have any <b class="criticalHighlights">ROUTING</b> If for example
                      someone will send an HTTP request to the users(Component Created using vue.js) it should be
                      limited and should not RETURN any data and of course we can do that by simply putting this in <b class="highlights">API\UserController.php</b>

                      public function index() {
                        <b class="criticalHighlights">$this->authorize('isAdmin')</b>;
                          return User::where('type', '=', 'user')->paginate(10);
                      }

                      and this should now be authorize to access this part of the information (not accessible anymore if not admin) and
                      the send HTTP request is on pending but can still access the HTTP web link URL but no data is visible to the user
                      because of the throw 403 error (standard user)

                      but <span class="takeNote">TAKE NOTE</span> this ain't the fix or either the solution to the underlying problem
                      this is just the php server network backend part doing its job
                      about error sending HTTP request and not javascript for the functionality to disable to even access the URL web link
                      itself for redirecting or showing an 404 page (Combination of php and js)
                    </blockquote>
                  </div>
                </pre>
              </p>
            </div>

            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci44-laraACL">Code Inspire 44-Laravel 5.7 ACL in Front-end Using Vue js</h1>
                <pre>

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">resources\views\layouts\master.blade.php</em></b>
                  <div class="codeManagement">

                  &#64;php

                  <a href="https://cssgradient.io/gradient-backgrounds/" target="_blank">CSS Gradient BG Used Link Src</a>


                  <b class="highlights">if(Auth::User()->type === 'user')</b>{

                  } <b class="highlights">else if(Auth::User()->type === 'admin')</b> {
                    <b class="highlights">$onlyForAdminManage = <<&lt;EOD</b>
                    <b class="criticalHighlights">&#64;can('isAdmin')</b>
                    &lt;li class="nav-item has-treeview">
                      &lt;a href="#" class="nav-link">
                        &lt;i class="nav-icon fa fa-cog green">&lt;/i>
                        &lt;p>
                          Management
                          &lt;i class="right fas fa-angle-left">&lt;/i>
                        &lt;/p>
                      &lt;/a>
                      &lt;ul class="nav nav-treeview">
                        &lt;li class="nav-item">
                          &lt;router-link to="/users" class="nav-link">
                            &lt;i class="fas fa-users nav-icon">&lt;/i>
                            &lt;p>Users&lt;/p>
                          &lt;/router-link>
                        &lt;/li>
                      &lt;/ul>
                    &lt;/li>
                    <b class="highlights">EOD</b>;
                    <b class="highlights">echo $onlyForAdminManage</b>;
                  }

                  &#64;endphp

                  &#64;php
                  <b class="highlights">if(Auth::user()->type === 'user')</b>{

                  } <b class="highlights">else if(Auth::user()->type === 'admin')</b> {
                  <b class="highlights">$onlyForAdminDev = <<&lt;EOD</b>
                  &lt;li class="nav-item">
                    &lt;router-link to="/developer" class="nav-link">
                     &lt;i class="nav-icon fas fa-cogs">&lt;/i>
                     &lt;p>
                       Developer
                     &lt;/p>
                   &lt;/router-link>
                  &lt;/li>
                  <b class="highlights">EOD</b>;
                  <b class="highlights">echo $onlyForAdminDev</b>;
                  }
                  &#64;endphp
                  </div>

                  <strong class="ProceduralProcessBoxTitle">step 2</strong>:<b><em class="steprocedure">app\Providers\AuthServiceProvider.php</em></b>
                  <div class="codeManagement">

                    public function boot()
                    {
                        $this->registerPolicies();

                        <b class="criticalHighlights">Gate::define('isAdmin', function($currUserType)</b>{
                          return $currUserType->type === 'admin';
                        });

                        <b class="criticalHighlights">Gate::define('isAuthor', function($currUserType)</b>{
                          return $currUserType->type === 'author';
                        });

                        <b class="criticalHighlights">Gate::define('isUser', function($currUserType)</b>{
                          return $currUserType->type === 'user';
                        });

                        Passport::routes();

                        //
                    }
                  </div>

                  <strong class="ProceduralProcessBoxTitle">step 3</strong>:Create a js file example in <b><em class="steprocedure">resources\assets\js\Gate.js</em></b>
                  <div class="codeManagement">
                    export default class <b class="criticalHighlights">Gate</b>{

                        constructor(user){
                            this.user = user;
                        }


                        isAdmin(){
                            return this.user.type === 'admin';
                        }

                        isUser(){
                            return this.user.type === 'user';
                        }
                    }
                  </div>

                  <strong class="ProceduralProcessBoxTitle">step 4</strong>:To compile and use them in your vue application components (Single Page App) <b><em class="steprocedure">resources\assets\js\app.js</em></b>
                  <div class="codeManagement">
                    import Gate from './<b class="criticalHighlights">Gate</b>'
                  </div>

                  <strong class="ProceduralProcessBoxTitle">step 5</strong>:Prototyping in JS (instance of a constructor) <b><em class="steprocedure">resources\assets\js\app.js</em></b>
                  <div class="codeManagement">
                    <blockquote cite="http://">
                      of course after you've already imported your created custom js class constructor
                    </blockquote>

                    Vue.prototype.<b class="criticalHighlights">$Declare_Your_New_Instance_Variable</b> = new Gate(window.user)
                  </div>

                  <strong class="ProceduralProcessBoxTitle">step 6</strong>:Use the instance variable defined and valued setted in <b><em class="steprocedure">resources\views\layouts\master.blade.php</em></b>
                  <div class="codeManagement">

                    &#64;auth
                    window&#46;<b class="criticalHighlights">$Declare_Your_New_Instance_Variable</b> = &#64;json(auth()->user())
                    &#64;endauth

                    &#64;script src="&#123;&#123;asset('assets/js/iamvue.js(<b class="highlights">app.js</b>)')}}">&#64;/script>
                  </div>

                  <strong class="ProceduralProcessBoxTitle">step 7</strong>:Hide HTML code via vue if conditions<b><em class="steprocedure">resources\assets\js\components\Users.vue</em></b>
                  <div class="codeManagement">
                    &lt;div class="row mt-5" <b class="criticalHighlights">v-if='$Declare_Your_New_Instance_Variable.isAdmin()'</b>>&lt;/div>

                    <blockquote cite="http://">
                      it will return or display the data in json format in which you defined earlier but to fix this use

                      &lt;script>
                      &#64;auth
                      window&#46;<b class="criticalHighlights">$Declare_Your_New_Instance_Variable</b> = &#64;json(auth()->user())
                      &#64;endauth
                      &lt;/script>

                      Then in <b><em class="steprocedure">resources\assets\js\components\Users.vue</em></b> scroll down below the javascript section

                      Change this

                      loadUsers() {
                        axios.get("api/user").then(({ data }) => (this.someTableWaitingToBeFilledWithData = data.data))
                        <blockquote cite="http://">
                          returns a data() object short form of

                          function({ data }) -- give you the value to be pass which is an object as the parameter
                        </blockquote>
                      },

                      To

                      This

                      loadUsers() {
                        <b class="criticalHighlights">if(this.$Declare_Your_New_Instance_Variable.isAdmin())</b>{
                          axios.get("api/user").then(({ data }) => (this.someTableWaitingToBeFilledWithData = data.data))
                        }
                      },




                      And this will result the user to stop sending XHR or http request to the server via to the URL/URI
                    </blockquote>
                  </div>

                </pre>
              </p>
            </div>

            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci45">Code Inspire 45-Design 404 Page for  Front-End If User Doesn't Have Access</h1>
                <pre>

                  <strong class="ProceduralProcessBoxTitle">Explanatory</strong>:<b><em class="steprocedure">resources\views\layouts\master.blade.php</em></b>
                  <div class="codeManagement">
                    <blockquote cite="http://">
                      brief explanatory:
                      In app\Http\Controllers\<b class="highlights">API\UserController.php</b>
                      going to the index method we say that the user should be AUTHORIZE if it is equal to type of admin value to
                      have access to the data available in our database


                      In app\Http\Controllers\resources\assets\js\components\<b class="highlights">Users.vue</b>
                        loadUsers() {
                          if(this.$Declare_Your_New_Instance_Variable.isAdmin()){
                            axios.get("api/user").then(({ data }) => (this.someTableWaitingToBeFilledWithData = data.data))
                          }
                        },

                        explanation here
                        if the user is admin then send the HTTP request otherwise do not send it
                    </blockquote>


                  </div>
                  <b class="takeNote">This stesps or processedurees are INTERCHANGEABLE</b>
                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:Show 404 page instead of accessing the User via URL Web Link and returning empty<b><em class="steprocedure">resources\views\layouts\master.blade.php</em></b>
                  <div class="codeManagement">
                    <blockquote cite="http://">
                      <a href="https://undraw.co/illustrations" target="_blank">Link Source SVG references</a>
                    </blockquote>

                    Create another Vue component module in our case let's just duplicate the existing
                    resources\assets\js\<b class="highlights">components\ExampleComponent.vue</b>
                    and renaming it to
                    resources\assets\js\<b class="highlights">components\NotFound.vue</b>

                    &lt;template>
                        &lt;div class="container">
                            &lt;div class="row justify-content-center">
                                &lt;div class="<b class="highlights">col-md-10</b>">
                                  <b class="highlights">Drag your copied SVG HTML coordinate code here or CDN Link</b>
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

                  </div>

                  <strong class="ProceduralProcessBoxTitle">step 2</strong>:Registering the Vue component module for compiling in <b><em class="steprocedure">&#64;script src="&#123;&#123;asset('assets/js/iamvue.js(<b class="highlights">app.js</b>)')}}">&#64;/script></em></b>

                  <div class="codeManagement">
                    Vue.component(
                      'not-found',
                      require('./components/NotFound.vue').default
                    )

                    then yarn watch or npm run watch
                    and this component module can now be access
                    throughout our application creation using vue-router

                    Mind you this is set GLOBALLY so no need to export it to the module itself
                    Use this in your Vue module components <b class="criticalHighlights">&lt;not-found>&lt;/not-found></b>

                    And adjust some stylings on your own
                  </div>
                  <strong class="ProceduralProcessBoxTitle">step 3</strong>:Using the Component in <em class="steprocedure">resources\assets\js\components\<b class="highlights">Users.vue</b></em>

                  <div class="codeManagement">
                    &lt;div class="container">
                      &lt;div class="row mt-5" <b class="highlights">v-if='$Declare_Your_New_Instance_Variable.isAdmin()'</b>>&lt;/div>
                      &lt;div <b class="criticalHighlights">v-if="!$Declare_Your_New_Instance_Variable.isAdmin()"</b>>
                        <b class="criticalHighlights">&lt;not-found>&lt;/not-found></b>
                      &lt;/div>
                  </div>

                </pre>
              </p>
            </div>

            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci46">Code Inspire 46-How User and Author Can Have The Same Access Level in Laravel 5.7 Front-end and Back-end</h1>
                <pre>

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">resources\views\layouts\master.blade.php</em></b>
                  <div class="codeManagement">
                  </div>
                </pre>
              </p>
            </div>

            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci47">Code Inspire 47-Laravel and Vuejs Pagination Best Packages</h1>
                <pre>

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">resources\views\layouts\master.blade.php</em></b>
                  <div class="codeManagement">
                    Global Declaration in
                    <a href="https://github.com/gilbitron/laravel-vue-pagination" target="_blank">Src. Ref. Lnk.</a>
                    resources\<b class="criticalHighlights">assets\appjs\globalVueDefinitions.js</b>

                    1)<b class="steprocedure">Vue.component('pagination', require('laravel-vue-pagination'));</b>

                    2)<b class="steprocedure">&lt;pagination :data="seenData" &#64;pagination-change-page="laraVuePagi">&lt;/pagination></b>

                    3)
                    &lt;script>
                    export default {
                      data(){
                        return {
                          seenData:{},
                        }
                      },
                      methods:{
                        <b class="steprocedure">requestData(){</b>
                          <b class="steprocedure">axios.get("api/readDataMtMFTable").then(({data}) => (this.seenData = data.data))</b>
                        }
                        <b class="steprocedure">laraVuePagi(){</b>
                          axios.get('api/readDataMtMFTable?page=' + page).then(response => {
                            this.seenData = response.data;
                          });
                        }
                      },

                     4)<b class="steprocedure">axios.get("api/readDataMtMFTable").then(({data}) => (this.seenData = data))</b>
                     5)<b class="steprocedure">&lt;tr v-for="vforVariableCompact in seenData.data" :key="vforVariableCompact.id"></b>


                      created(){
                        this.requestData()
                      }


                    }
                    &lt;/script>



                  </div>
                </pre>
              </p>
            </div>

            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci48">Code Inspire 48-Laravel 5.7 and Vuejs Ajax Pagination</h1>
                <pre>

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">resources\views\layouts\master.blade.php</em></b>
                  <div class="codeManagement">
                  </div>
                </pre>
              </p>
            </div>

            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci49">Code Inspire 49-Review - What Else We Need to Add for Our Laravel + Vue App -</h1>
                <pre>

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">resources\views\layouts\master.blade.php</em></b>
                  <div class="codeManagement">
                  </div>
                </pre>
              </p>
            </div>

            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci50">Code Inspire 50-Vue Router 404 Page with Laravel 5.7</h1>
                <pre>

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">resources\views\layouts\master.blade.php</em></b>
                  <div class="codeManagement">
                  </div>
                </pre>
              </p>
            </div>

            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci51">Code Inspire 51-Re-Usable Search Functionality in Laravel 5.7 and Vuejs ( Ajax, Axios )</h1>
                <pre>

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">resources\views\layouts\master.blade.php</em></b>
                  <div class="codeManagement">
                    This is the main instance of our Vue.js app(Data returns)
                    resources\<b class="criticalHighlights">assets\appjs\globalVueDefinitions.js</b>
                    1) <b class="steprocedure">Return a global data (can be in a single vue component also)</b>
                    const app = new Vue({
                        el: '<b class="highlights">#mast-layout-blade-php-ref-vue</b>--wrappercon-ref-vue.js', --> resources\views\<b class="criticalHighlights">layouts\master.blade.php</b>
                        router,
                        <b class="criticalHighlights">data:{</b>
                          <b class="criticalHighlights">searchVue(any variable name):'',</b>
                        }
                    });
                    <b class="steprocedure">2) Use that data on as a attribute call and the keyup is for listening event when the user type something it will record</b>
                    &lt;input class="form-control form-control-navbar" type="search" <b class="highlights">&#64;keyup="buttonSubmitPrevent(This is the click button name)"</b>
                    <b class="highlights">v-model="searchVue"</b> placeholder="Search" aria-label="Search">
                    <b class="steprocedure">3) When someone press enter(submit) button</b>
                    Change this
                    &lt;button class="btn btn-navbar" <b class="highlights">type="submit"</b>>&lt;/button>
                    to
                    this
                    &lt;button class="btn btn-navbar" <b class="highlights">&#64;click="buttonSubmitPrevent(Any Meth Name)</b>">&lt;/button>

                    <b class="steprocedure">4)Define those methods</b>
                    const app = new Vue({
                      <b class="highlights">methods:{</b>
                        <b class="highlights">buttonSubmitPrevent(){</b>
                          When you console log and type anything it will
                          hit the log it means it is working and calling
                          this function everytime a user types because
                          of the keyup attr function in Vue.js
                        }
                      },
                    });
                    <b class="steprocedure">5)&#64;keyup.enter="buttonSubmitPrevent"</b>
                    This will call the function when you hit enter instead not while
                    your keyupping(keystroking) but this will submit(action) our form
                    Quick Solution is to remove the form html element to prevent any
                    sort of action default

                    <strong class="important">THIS IS BETTER BEC NOW WE CAN SEND HTTP REQ AFTER HITTING ENTER NOT WHILE KEYSTROKING</strong>
                    <b class="steprocedure">6)Send HTTP request after every keyup type(Firing an event handler our custom event)</b>
                    methods:{
                      buttonSubmitPrevent(){
                        <b class="criticalHighlights">sendHTTPReqAfterEvryActionIsDone.$emit('LISTEN TO ME ONLY!! THIS IS A KEYWORD')</b>
                      }
                    },
                    <b class="steprocedure">7)Listening for that event handler request to our vue component that we created</b>
                    created(){
                      <b class="criticalHighlights">sendHTTPReqAfterEvryActionIsDone.$on('LISTEN TO ME ONLY!! THIS IS A KEYWORD', function(){</b>
                        let query = this.$parent.searchVue <b class="highlights">IF YOU WANT TO ACCESS THE RETURN DATA FROM THE PARENT.js</b>
                        console.log(this.$parent.searchVue);
                          <b class="highlights">This will take information from the root return instances of our parent.vue.js</b>

                          <span class="takeNote">old js declaration on function KW wont WORK!! instead use ES6 () => {} </span>

                        <b class="highlights">axios.get('api/findAny<b class="mayError">?anyVar</b>' + query).then( (data) => {} ).catch( () => {})</b>
                        -this will give an error when hit enter because no anyVar no = sign
                        <b class="criticalHighlights">axios.get('api/findAny<b class="criticalHighlights">?anyVar='</b> + query).then( <b class="important">(data) => {this.seenData = data.data}</b> ).catch( () => {})</b>
                        - request coming from the server or yung nakita na ng request na naka store na sa database
                      })
                      this.requestData()
                    }
                    <blockquote cite="http://">
                      <b class="takeNote">This query var should be set to the one you press enter because it listened to the emitted keyword and then triggered
                      an event with a anon func callback and</b>
                    </blockquote>
                    <b class="steprocedure">8)Define route api at routes\api.php</b>
                    <b class="criticalHighlights">Route::get('findAny', 'App\Http\Controllers\API\ManyToManyFormsController@searchReturns');</b>
                    public function searchReturns(){
                      if($search = \Request::get(<b class="criticalHighlights">'anyVar'</b>)){
                        <b class="criticalHighlights">$usersHasManyForms = ManyToManyForms::where(function($queryStrings) use ($search){</b>
                          <b class="criticalHighlights">$queryStrings->where('description','LIKE',"%$search%")</b>
                                -><b class="criticalHighlights">orWhere('document_files','LIKE',"%$search%");</b>
                        })->paginate(20);
                      }
                      <b class="criticalHighlights">return $usersHasManyForms;</b>
                    }
                  </div>
                </pre>
              </p>
            </div>

            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci52">Code Inspire 52-Instant Search With Laravel and Vuejs  Use ( Debounce )</h1>
                <pre>

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">resources\views\layouts\master.blade.php</em></b>
                  <div class="codeManagement">
                    <b class="processedure">1</b> <span class="steprocedure">&#64;keyup.enter="buttonSubmitPrevent" to &#64;keyup="buttonSubmitPrevent"</span>
                    <i>Not good for performance because imagine if you have many users every single day every one of them is gonna
                    search at the same time if you write for example like 10 charater it will send 10 XHR request to your server and
                  your server might go down. </i>

                    <b class="processedure">2</b> <span> <a href="https://lodash.com/" target="_blank">https://lodash.com/</a></span> Default Installation Bundle Package in Laravel

                    <blockquote cite="http://">
                      Extra Knowledge
                      <b class="criticalHighlights">resources\assets\appjs\globalVueDefinitions.js</b>

                      LODASH Brief Description Js Lib
                      (provides utility functions for common programming tasks using the functional programming paradigm.)

                      methods:{
                        buttonSubmitPrevent(){ ES6
                          console.log(this.searchVue);
                          sendHTTPReqAfterEvryActionIsDone.$emit('LISTEN TO ME ONLY!! THIS IS A KEYWORD')
                        }

                        buttonSubmitPrevent:function{ OLD JS STANDARD SYNTAX
                          console.log(this.searchVue);
                          sendHTTPReqAfterEvryActionIsDone.$emit('LISTEN TO ME ONLY!! THIS IS A KEYWORD')
                        }

                        buttonSubmitPrevent: _.debounce(()=>{
                          console.log(this.searchVue) AW <strong class="mayError">app.js:84958 Uncaught TypeError: Cannot read property 'searchVue' of undefined</strong>
                          sendHTTPReqAfterEvryActionIsDone.$emit('LISTEN TO ME ONLY!! THIS IS A KEYWORD')
                        }, 1000)



                        First PAR(Callback), 2nd(define a number(TIME in MILLISECONDS))


                    </blockquote>
                    <b class="processedure">3</b> <em class="steprocedure">When backspacing and press enter it will give us an error
                      because it will return an empty query or string here is the solution for this error problem</em>

                      BEFORE
                      public function searchReturnsForUsers(){
                        if($search = \Request::get('anyVar')){
                          $usersHasManyForms = ManyToManyForms::where(function($queryStrings) use ($search){
                            $queryStrings->where('description','LIKE',"%$search%")
                                  ->orWhere('document_files','LIKE',"%$search%");
                          })->paginate(20);
                        }
                        return $usersHasManyForms;
                      }

                      NOW
                      else{
                        <strong class="criticalHighlights">$usersHasManyForms = ManyToManyForms::latest()->paginate(5)</strong>;
                      }

                  </div>
                </pre>
              </p>
            </div>

            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci53">Code Inspire 53-Print Invoice as PDF in Laravel using JavaScript</h1>
                <pre>

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">resources\views\layouts\master.blade.php</em></b>
                  <div class="codeManagement">
                  </div>
                </pre>
              </p>
            </div>

            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle" id="ci44-laraACL">Code Inspire 54-How to Use Laravel + Vuejs Starter Template  ( Wrap-up and New Series)</h1>
                <pre>

                  <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure">resources\views\layouts\master.blade.php</em></b>
                  <div class="codeManagement">
                  </div>
                </pre>
              </p>
            </div>
          </section>

          <section class="sectionDivisions">
            <h1 id="table of contents navigator ref link" class="masterBoxTitleSection">My Self-Learning Curve Process</h1>

            <div class="containerContentManagementDivision">
              <p>
                <h1 class="moduleContentBoxTitle">Form Vue or vForm</h1>
                <pre>
                  <blockquote cite="http://">
                    $uploadedFile->move('storage/'. $filenameExt);
                    'links' => [
                        public_path('storage') => storage_path('app/public'),
                    ],
                    EXTRA: Helper Laravel php Functions
                    "autoload-dev": {
                        "psr-4": {
                            "Tests\\": "tests/"
                        },
                        "files":[
                          "app/CustomHelpers/myHelpers.php"
                        ]

                    composer dump-autoload
                    if (! function_exists('env')) {
                        function env($key, $default = null) {
                            // ...
                        }
                    }
                    I like to have a URL helper function that I can pass an Eloquent model
                    and get a resource route back using conventions that I define, such as:
                    create_route($model);
                    edit_route($model);
                    show_route($model);
                    destroy_route($model);
                    if (! function_exists('show_route')) {
                        function show_route($model, $resource = null)
                        {
                            $resource = $resource ?? plural_from_model($model);

                            return route("{$resource}.show", $model);
                        }
                    }

                    if (! function_exists('plural_from_model')) {
                        function plural_from_model($model)
                        {
                            $plural = Str::plural(class_basename($model));

                            return Str::kebab($plural);
                        }
                    }
                    $model = new App\LineItem;
                    plural_from_model($model);
                    => line-items

                    plural_from_model(new App\User);
                    => users
                    Using this convention you’d define the resource route like so in routes/web.php:

                    Route::resource('line-items', 'LineItemsController');
                    Route::resource('users', 'UsersController');
                    And then in your blade templates, you could do the following:

                    &lt;a href="&#123;&#123; show_route($lineItem) }}">
                        &#123;&#123; $lineItem->name }}
                    &lt;/a>
                    Which would produce something like the following HTML:

                    &lt;a href="http://localhost/line-items/1">
                        Line Item #1
                    &lt;/a>
                  </blockquote>
                  <div class="codeManagement">
                    <h1>Type File Uploads (HTML)</h1>
                    <a href="https://stackoverflow.com/questions/44063606/whats-the-real-purpose-of-ref-attribute" target="_blank">StackOverflow Ref. Link</a>
                    <a href="https://uicookies.com/html-hr-css/" target="_blank">HR Department: Templates</a>
                    <b class="highlights">&lt;form</b> enctype="multipart/form-data" class="form-horizontal" <b class="criticalHighlights">@submit.prevent="formActionSubmitWillGoHere"</b>>
                    &lt;div class="form-group">
                      &lt;label for="UploadFile-IDAttr"  class="col-sm-2 control-label">
                        &lt;i class="fas fa-file movie-o">&lt;/i> Create File
                      &lt;/label>

                      &lt;div class="col-sm-12">
                        &lt;input <b class="criticalHighlights">@change="modifyDataOfUploadedOfTypeFiles()"</b> type="file" <b class="criticalHighlights">ref="upFileRefVueJsAttr"</b> <b class="criticalHighlights">name="fileNameAttr"</b> <b class="criticalHighlights">id="UploadFile-IDAttr"</b>>
                        ------------------------------------------------------------------------------------Dami kong alam noh HAHA---------------------------------------------------------

                        &lt;input <b class="criticalHighlights">@change="modifyDataOfUploadedOfTypeFiles"</b> type="file" id="UploadFile-IDAttr" class="form-input"
                        :class="{ 'is-invalid': <b class="criticalHighlights">invoiceForm.errors.has('uploadFile')</b> }">
                        &lt;has-error <b class="criticalHighlights">:form="invoiceForm"</b> <b class="criticalHighlights">field="uploadFile"</b>>&lt;/has-error>
                        ------------------------------------------------------------------------------------Dami kong alam noh HAHA---------------------------------------------------------

                      &lt;/div>
                    &lt;/div>
                    &lt;div class="form-group">
                      &lt;div class="col-sm-offset-2 col-sm-12">


                        <b class="highlights">&lt;button type="submit"</b> class="btn btn-primary">Create File<b class="highlights">&lt;/button></b>
                        <hr>
                        <b class="highlights">&lt;button</b> <b class="criticalHighlights">@click.prevent="editReplacePutOverwriteExistingFile_typeFileSubmitButton"</b> type="submit" class="btn btn-success">Submit<b class="highlights">&lt;/button></b>
                        <hr>
                      &lt;/div>
                    &lt;/div>
                    <b class="highlights">&lt;/form></b>
                    <h1>Functionalities (Vue.js or vanilla js)</h1>
                    export default {
                      <b class="criticalHighlights">data(){</b>
                        return {
                          <b class="highlights">files: {},</b>
                          <b class="highlights">file: {},</b>
                          <b class="highlights">formData: {},</b>
                          <b class="highlights">fileName: '',</b>
                          <b class="highlights">attachment: '',</b>
                          afterRequestIsSentToTheServerThisVariableWillStoreVueForValues: {},
                          invoiceForm: new Spanish({
                            id:'',
                            Description:'',
                            uploadFile:'',
                          })
                        }
                      },//END data()
                      <b class="criticalHighlights">methods:{</b>
                        <b class="highlights">modifyDataOfUploadedOfTypeFiles(img_file_event_when_done_selecting_an_image)</b>{
                          this.attachment = this.$refs.upFileRefVueJsAttr.files[0];
                          console.log(this.attachment)
                          <hr>
                          let chosenFile = img_file_event_when_done_selecting_an_image.target.files[0]
                          let consoleMe = this.invoiceForm.uploadFile = chosenFile
                          console.log(consoleMe);
                          let fullPath = document.getElementById('UploadFile-IDAttr').value;
                          console.log(fullPath);
                          if (fullPath) {
                              var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                              var filename = fullPath.substring(startIndex);
                              if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                                  filename = this.invoiceForm.uploadFile = filename.substring(1);
                              }
                              console.log(filename)
                          }
                        },
                        <b class="highlights">formActionSubmitWillGoHere(){</b>
                          <b class="criticalHighlights">this.formData = new FormData();</b>
                          this.formData<b class="criticalHighlights">.append('descNameAttr', this.fileName</b>);
                          this.formData<b class="criticalHighlights">.append('fileNameAttr', this.attachment</b>);

                          //this.$Progress.start()
                          <b class="criticalHighlights">axios.post('api/keyOfMtMFs', this.formData, {headers: {'Content-Type': 'multipart/form-data'}}).then(response => {</b>
                            this.resetForm()
                          }).catch(error => {})
                        },
                      },
                    },
                  </div>
                </pre>
                <h1 class="moduleContentBoxTitle">Update->Edit->Modify->Change</h1>
                <pre>
                  <div class="codeManagement">
                    <b class="highlights"><h1>Vue Component HTML Template</h1></b>
                    &lt;a href="#" <b class="criticalHighlights">@click="forUpdateSharedReusableModalBoxVueMethod</b>(<strong class="criticalHighlights"><i>vforVariableCompact</i></strong>)">
                      &lt;i class="fa fa-edit blue">&lt;/i>
                    &lt;/a>
                    &lt;div class="modal fade" <b class="criticalHighlights">id="editUserOpenModalBoxContent"</b>
                    tabindex="-1" role="dialog" <b class="criticalHighlights">aria-labelledby="updateUserLabelIdTag"</b> aria-hidden="true">
                    &lt;h5 class="modal-title" <strong class="criticalHighlights"><i>v-show="!editMode"</i></strong> <strong class="criticalHighlights"><i>id="updateUserLabelIdTag"</i></strong>>Create&lt;/h5>
                    &lt;h5 class="modal-title" <strong class="criticalHighlights"><i>v-show="editMode"</i></strong> <strong class="criticalHighlights"><i>id="updateUserLabelIdTag"</i></strong>>Update User's Info&lt;/h5>
                    &lt;/div>
                    <b class="highlights"><h1>Vue Component Vanilla Javascript</h1></b>
                    &lt;script>
                      export default {
                        data() {
                          return {
                            <b class="highlights">editMode: true</b>,
                            <b class="highlights">seenData:{}</b>,
                            <b class="highlights">userVForm: new Spanish(</b>{

                                <b class="recall">Recall: in our</b>
                                <b class="criticalHighlights">resources\assets\appjs\globalVueDefinitions.js(To be compiled by <b class="highlights">webpack.mix.js</b> To public folder then src.ref.link)</b>
                                <span class="takeNote">import { Form, HasError, AlertError } from 'vform'</span>
                                <b class="highlights"><span class="takeNote">window.Spanish = Form</span></b>
                                <span class="takeNote">Vue.component(HasError.name, HasError)</span>
                                <span class="takeNote">Vue.component(AlertError.name, AlertError)</span>

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
                        methods:{
                          <b class="highlights">this_will_fetch_the_table_from_the_db(){</b>
                            <strong class="takeNote"><i>axios.get("api/user")</i></strong>.then(({<strong class="takeNote"><i>data</i></strong>}) => (<strong class="takeNote"><i>this.<b class="highlights">seenData</b> = data.data</i></strong>))

                            <blockquote cite="http://">
                              <span class="takeNote">API Documentation</span>
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Attributes</th>
                                    <th scope="col">Method</th>
                                    <th scope="col">URI||CALL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Middleware</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Parameter VAL.</th>
                                    <td>GET|HEAD</td>
                                    <td>api/user</td>
                                    <td>user.index</td>
                                    <td>Con@index</td>
                                    <td>api.php|auth:api</td>
                                  </tr>
                                </tbody>
                              </table>
                            </blockquote>
                          },
                          <b class="highlights">forUpdateSharedReusableModalBoxVueMethod(userDataKeyInVueForLoop(<strong class="criticalHighlights"><i>vforVariableCompact</i></strong>)) {</b>
                            <b class="subStep">this.editMode = true</b>
                            this.userForm.reset(<b class="highlights">vForm Functionality</b>)
                            <b class="subStep">$('#editUserOpenModalBoxContent').modal('show')</b>
                            this.userForm.fill(userDataKeyInVueForLoop(<strong class="criticalHighlights"><i>vforVariableCompact</i></strong>))
                          },
                          <b class="highlights">forCreateSharedReusableModalBoxVueMethod(){</b>
                            <b class="subStep">this.editMode = false</b>
                            this.userForm.reset(<b class="highlights">vForm Functionality</b>)
                            <b class="subStep">$('#editUserOpenModalBoxContent').modal('show')</b>
                          },

                        },
                        created:{
                          Upon creation of this component it will call the ff. methods
                          <b class="highlights">call(this.this_will_fetch_the_table_from_the_db)</b>;
                          Custom Request Event Handler
                          <b class="highlights">setInterval(<i>CALLBACK</i>, 3000)</b>BIND it if you're not using ES6 Functionality Implementation Capabilities
                          <b class="highlights">setInterval(<i>() => Code Property</i>, 3000)</b>ES6 Applied NOT PRACTICAL FOR PERF ISSUES because it will LOAD UP your Computer RAM
                          .then(response => {this.method()})

                          <h1>Vue.js Custom Event Handler Request Action</h1>
                          <a href="https://v3.vuejs.org/guide/component-custom-events.html" target="_blank">Version 3.0 One Piece</a>
                          https://vuejs.org/v2/guide/components-custom-events.html
                          Before proceeding or starting, here are some suggestions you do first
                          <span class="takeNote">Check Vue Version by the ff. commands</span>
                          1.npm list vue
                          2.less package.json | grep vue
                          3.Use Vue.version during the runtime. It is a global API provided in vue.js.
                          <span class="takeNote">To Upgrade or Update to newer ver.</span>
                          npm update -g @vue/cli # OR yarn global upgrade --latest @vue/cli
                          <b class="criticalHighlights">resources\assets\appjs\globalVueDefinitions.js(To be compiled by <b class="highlights">webpack.mix.js</b>)</B>
                          <b class="steprocedure">1. Add an property global variable instance to Vue.js to make it available GLOBALLY|PUBLICLY anywhere of Vue Comps</b>
                          <b class="highlights">window.customVueEventHandler = new Vue()</b>
                          <b class="steprocedure">2. Access and Apply Vue.js to that var because it can now access Vue.js lib. functionalities</b>
                          <b class="highlights">customVueEventHandler.$emit('myEvent')</b> <span class="takeNote"><i>myEvent-any name you want</i></span>
                          <b class="steprocedure">3. Listen to that emitted event beforehand and fire an event thereafter Triggering an event action</b>
                          <b class="highlights">customVueEventHandler.$on('myEvent', () => {</b>
                            this.method()
                          })<span class="takeNote"><i>$on</i></span>
                          <p class="takeNote">
                            Since we use it directly or On the Fly or On the Get Go we don't need this approach of doing it this way
                            Since event names will never be used as variable or property names in JavaScript, there is no reason to
                            use camelCase or PascalCase. Additionally, v-on event listeners inside DOM templates will be automatically
                            transformed to lowercase (due to HTML's case-insensitivity),
                            so @myEvent would become @myevent -- making myEvent impossible to listen to.

                            For these reasons, we recommend you always use kebab-case for event names
                          </p>
                          <b class="recall">Recall: in our</b>
                          app\Http\<b class="criticalHighlights">Controllers\API</b>\<b class="highlights">UserController.php</b>
                          <blockquote cite="http://">
                            It will send a req to the server via a method with its code
                            property functionality rules and conditions applied depending
                            on your instructions on what will that method do upon being
                            called by a URL Request like <b class="highlights">POST|PATCH|PUT|DELETE|GET</b>
                          </blockquote>

                          <hr>
                          <b class="highlights">php artisan make:controller API/UserController <i class="important">--api</i></b>
                          <b class="highlights">Route::middleware('<i class="important">auth:</i>api')->get('/user', function (Request $request) {</b>
                              return $request->user();
                          });

                          <b class="highlights">Route::apiResources(['<i class="important">KEY</i>user' => 'App\Http\Controllers\API\UserController']);</b>
                          public function index() {
                              <b class="highlights">return User::where('type', '=', 'user')->paginate(10);</b>
                          }
                          <hr>

                        }
                      }
                    &lt;/script>
                    <b class="highlights"><h1>Vue Component HTML Template: Form Element and its
                    Vue Attr</h1></b>
                    <b class="highlights">&lt;form <strong class="criticalHighlights"><i>@submit.prevent="editMode ?</i></strong></b>
                      <b class="highlights">updateUser() : this_will_create_an_instanceVAL_from_the_dbtable_specified_tobe_stored_on_toThat_dbtable()"</b>>
                      &lt;div class="modal-footer">
                          &lt;button type="button" class="btn btn-danger" data-dismiss="modal">Close&lt;/button>
                          &lt;button <b class="highlights">v-show="editMode"</b> <i class="important">type="submit"</i> class="btn btn-success">Update&lt;/button>
                          &lt;button <b class="highlights">v-show="!editMode"</b> <i class="important">type="submit"</i> class="btn btn-primary">Create&lt;/button>
                      &lt;/div>
                    <b class="highlights">&lt;/form></b>
                    <b class="highlights"><h1>Vue Component Vanilla Javascript</h1></b>
                    &lt;script>
                      export default {
                        data() {
                          return {
                            <b class="highlights">editMode: true</b>,
                            <b class="highlights">seenData:{}</b>,
                            <b class="highlights">userVForm: new Spanish(</b>{

                                <b class="recall">Recall: in our</b>
                                <b class="criticalHighlights">resources\assets\appjs\globalVueDefinitions.js(To be compiled by <b class="highlights">webpack.mix.js</b> To public folder then src.ref.link)</b>
                                <span class="takeNote">import { Form, HasError, AlertError } from 'vform'</span>
                                <b class="highlights"><span class="takeNote">window.Spanish = Form</span></b>
                                <span class="takeNote">Vue.component(HasError.name, HasError)</span>
                                <span class="takeNote">Vue.component(AlertError.name, AlertError)</span>

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
                        methods:{
                          <b class="highlights">this_will_fetch_the_table_from_the_db(){</b>
                            <strong class="takeNote"><i>axios.get("api/user")</i></strong>.then(({<strong class="takeNote"><i>data</i></strong>}) => (<strong class="takeNote"><i>this.<b class="highlights">seenData</b> = data.data</i></strong>))

                            <blockquote cite="http://">
                              <span class="takeNote">API Documentation</span>
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Attributes</th>
                                    <th scope="col">Method</th>
                                    <th scope="col">URI||CALL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Middleware</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Parameter VAL.</th>
                                    <td>GET|HEAD</td>
                                    <td>api/user</td>
                                    <td>user.index</td>
                                    <td>Con@index</td>
                                    <td>api.php|auth:api</td>
                                  </tr>
                                </tbody>
                              </table>
                            </blockquote>
                          },

                        },
                        created:{
                          Upon creation of this component it will call the ff. methods
                          <b class="highlights">call(this.this_will_fetch_the_table_from_the_db)</b>;
                          Custom Request Event Handler
                          <b class="highlights">setInterval(<i>CALLBACK</i>, 3000)</b>BIND it if you're not using ES6 Functionality Implementation Capabilities
                          <b class="highlights">setInterval(<i>() => Code Property</i>, 3000)</b>ES6 Applied NOT PRACTICAL FOR PERF ISSUES because it will LOAD UP your Computer RAM
                          .then(response => {this.method()})

                          <h1>Vue.js Custom Event Handler Request Action</h1>
                          <a href="https://v3.vuejs.org/guide/component-custom-events.html" target="_blank">Version 3.0 One Piece</a>
                          https://vuejs.org/v2/guide/components-custom-events.html
                          Before proceeding or starting, here are some suggestions you do first
                          <span class="takeNote">Check Vue Version by the ff. commands</span>
                          1.npm list vue
                          2.less package.json | grep vue
                          3.Use Vue.version during the runtime. It is a global API provided in vue.js.
                          <span class="takeNote">To Upgrade or Update to newer ver.</span>
                          npm update -g @vue/cli # OR yarn global upgrade --latest @vue/cli
                          <b class="criticalHighlights">resources\assets\appjs\globalVueDefinitions.js(To be compiled by <b class="highlights">webpack.mix.js</b>)</B>
                          <b class="steprocedure">1. Add an property global variable instance to Vue.js to make it available GLOBALLY|PUBLICLY anywhere of Vue Comps</b>
                          <b class="highlights">window.customVueEventHandler = new Vue()</b>
                          <b class="steprocedure">2. Access and Apply Vue.js to that var because it can now access Vue.js lib. functionalities</b>
                          <b class="highlights">customVueEventHandler.$emit('myEvent')</b> <span class="takeNote"><i>myEvent-any name you want</i></span>
                          <b class="steprocedure">3. Listen to that emitted event beforehand and fire an event thereafter Triggering an event action</b>
                          <b class="highlights">customVueEventHandler.$on('myEvent', () => {</b>
                            this.method()
                          })<span class="takeNote"><i>$on</i></span>
                          <p class="takeNote">
                            Since we use it directly or On the Fly or On the Get Go we don't need this approach of doing it this way
                            Since event names will never be used as variable or property names in JavaScript, there is no reason to
                            use camelCase or PascalCase. Additionally, v-on event listeners inside DOM templates will be automatically
                            transformed to lowercase (due to HTML's case-insensitivity),
                            so @myEvent would become @myevent -- making myEvent impossible to listen to.

                            For these reasons, we recommend you always use kebab-case for event names
                          </p>
                          <b class="recall">Recall: in our</b>
                          app\Http\<b class="criticalHighlights">Controllers\API</b>\<b class="highlights">UserController.php</b>
                          <blockquote cite="http://">
                            It will send a req to the server via a method with its code
                            property functionality rules and conditions applied depending
                            on your instructions on what will that method do upon being
                            called by a URL Request like <b class="highlights">POST|PATCH|PUT|DELETE|GET</b>
                          </blockquote>
                          <span class="takeNote">import { Form, HasError, AlertError } from 'vform'</span>
                          <hr>
                          <b class="highlights">php artisan make:controller API/UserController <i class="important">--api</i></b>
                          <b class="highlights">Route::middleware('<i class="important">auth:</i>api')->get('/user', function (Request $request) {</b>
                              return $request->user();
                          });

                          <b class="highlights">Route::apiResources(['<i class="important">KEY</i>user' => 'App\Http\Controllers\API\UserController']);</b>
                          public function index() {
                              <b class="highlights">return User::where('type', '=', 'user')->paginate(10);</b>
                          }
                          <hr>

                        }
                      }
                    &lt;/script>

                  </div>
                </pre>
              </p>
            </div>
          </section>

          <section class="sectionDivisions">
            <h1 id="noted-lec-of-non-poly-db-relationships" class="masterBoxTitleSection">Laravel Database Relationsips</h1>

            <div class="containerContentManagementDivision">
              <p>
                <a href=""></a>

                <h1 class="moduleContentBoxTitle">Section 12: Laravel Fundamentals - Database - Tinker</h1>
                <pre>
                  <div class="codeManagement">
                    php artisan tinker

                    <blockquote cite="http://">
                      ----------------------74. Creating data with tinker----------------------
                      [TinkerCreate/Insert]
                      >>> $someTableInTheDb = App\Models\ManyToManyForms::create([''=>'']);
                      [TinkerRead]
                      >>>$someTableInTheDb

                      [New Instance Objects]
                      >>> $someModel = new App\Models\ManyToManyForms
                      [TinkerCreate/Insert]
                      >>>$someModel->Attrib = Set or Assign Valuel;
                      [TinkerRead]
                      [TinkerPut Data in the Db]
                      >>>$someModel->save();
                      >>>exit
                      ----------------------74. Creating data with tinker----------------------



                      ----------------------75. Finding record and using constraints in tinker----------------------
                      $findSomeModel = App\Models\ManyToManyForms::findOrFail();
                      [TinkerWith Constraints]
                      $findSomeModel = App\Models\ManyToManyForms::where('id',)->first();

                      $findSomeModel = App\Models\ManyToManyForms::whereId(specify id)->first();
                      ----------------------75. Finding record and using constraints in tinker----------------------


                      ----------------------76. Updating and deleting with tinker----------------------
                      [TinkerUpdate]
                      >>> $findSomeModel = App\Models\ManyToManyForms::findOrFail(specify id);
                      >>> $findSomeModel->Attribute = "write a value";
                      >>> $findSomeModel->save()

                      [TinkerSoftDelete]
                      >>> $findSomeModel->delete()

                      [TinkerPermaDelete]
                      >>> $findSomeModel = App\Models\ManyToManyForms::onlyTrashed()
                      >>> $findSomeModel->forceDelete()
                      ----------------------76. Updating and deleting with tinker----------------------


                      ----------------------77. Playing around with relations in tinker----------------------
                      [Tinker Find Out the Relationship of a Model]
                      >>> $findAnyModelYouWant_with_a_relation_to_otherModels = App\Models\User::findOrFail(specify id)->method();
                      >>> $findAnyModelYouWant_with_a_relation_to_otherModels->Attributes or Method ata HAHAHAHA
                      ----------------------77. Playing around with relations in tinker----------------------

                    </blockquote>
                  </div>

                </pre>

                <h1 class="moduleContentBoxTitle">Section 11: Laravel Fundamentals - Database - Eloquent</h1>
                <pre>
                  <div class="codeManagement">
                    <blockquote cite="http://">
                      <b class="highlights">-----------------------1-57. One to One relationship -START -----------------------</b>
                      <b class="methodanicompute">Step1 : php artisan make:model UserForm or HasOneForm -m</b>


                      <b class="methodanicompute">Step2 : Parent Model(User)</b>
                        public function connectOrRelateOrSyncTableHasOneForms(){
                          return $this->hasOne('App\UserForm');
                        }

                      {
                        looks for the column user_id by default

                        if different
                        return $this->hasOne('App\Models\UserForm', '<b class="criticalHighlights">named_it_differently_id</b>', '<b class="criticalHighlights">childs_named_id</b>');

                        or

                        return $this->hasOne('App\Models\HasOneForm',);
                      }

                      <b class="methodanicompute">Step3 : Relate Tables</b>
                      class CreateUserFormsTable extends Migration
                      {
                          /**
                           * Run the migrations.
                           *
                           * @return void
                           */
                          public function up()
                          {
                              Schema::create('user_forms', function (Blueprint $table) {
                                  $table->id();
                                  $table->integer('<b class="criticalHighlights">named_it_differently_id</b>')->unsigned();
                                  $table->timestamps();
                              });
                          }
                      }

                      <b class="methodanicompute">Step4 : Add Some property attributes to the children tables fortesting</b>
                        php artisan make:migration add_columns_to_hasOne_table --table=has_one_forms

                      <b class="methodanicompute">Step5 : Routes</b>

                      use App\Models\User;
                      use App\Models\UserForm;
                      use App\Models\HasOneForm;

                      Route::get('user/{id}/oneuserform', function($id){
                        return User::findOrFail($id)->connectOrRelateOrSyncTableHasOneForms->table_attrib_property;
                      });
                      <b class="highlights">-----------------------2-58. The inverse relation -START -----------------------</b>
                      <b class="methodanicompute">Child Model</b>

                      public function makeSomeChildModelBelongToAParentTable(){
                        return $this->belongsTo('App\Models\User');
                      }

                      <b class="methodanicompute">Route</b>

                      Route::get('hasoneforms/{id}/oneuserform', function($id){
                        return HasOneForm::findOrFail($id)->makeSomeChildModelBelongToAParentTable->name;
                      });



                      <b class="methodanicompute">Fixed</b>

                      <b class="processedure">Child link sources: https://stackoverflow.com/questions/32469542/trying-to-get-property-of-non-object-laravel-5</b>
                      public function makeSomeChildModelBelongToAParentTable(){
                        return $this->belongsTo('App\Models\User', 'users_id');
                      }

                      <b class="processedure">Main, Parent or Users</b>
                      public function connectOrRelateOrSyncTableHasOneForms(){
                        return $this->hasOne('App\Models\HasOneForm', 'users_id');
                      }
                      or
                      public function connectOrRelateOrSyncTableHasOneForms(){
                        return $this->hasOne('App\Models\HasOneForm',);
                      }

                      <b class="processedure">Routing</b>
                      Route::get('hasoneforms/{id}/oneuserform', function($id){
                        return HasOneForm::findOrFail($id)->makeSomeChildModelBelongToAParentTable['name'];
                      });
                      <b class="highlights">-----------------------2-58. The inverse relation -END -----------------------</b>
                      <b class="highlights">-----------------------1-57. One to One relationship -END -----------------------</b>


                      <b class="highlights">-----------------------3-59. One to many relationship -START -----------------------</b>

                      <b class="methodanicompute">Step1 :php artisan make:model OneToManyForms -m</b>


                      <b class="methodanicompute">Step2 :</b>
                      class CreateOneToManyFormsTable extends Migration
                      {
                          /**
                           * Run the migrations.
                           *
                           * @return void
                           */
                          public function up()
                          {
                              Schema::create('one_to_many_forms', function (Blueprint $table) {
                                  $table->id();
                                  $table->integer('users_id')->unsigned();
                                  $table->text('OneToManyContent');

                      <b class="methodanicompute">Step3 :</b>
                      protected $fillable = [
                        'OneToManyContent',
                      ];

                      <b class="methodanicompute">Step4 : Error</b>
                      ContainerMainParentUser
                      public function connectOrRelateOrSyncTableOneToManyForms(){
                        return $this->hasMany('App\Models\OneToManyForms',);
                      }

                      <b class="methodanicompute">Step5 :</b>
                      Route::get('oneToManyForms/{id}/manyuserform', function($id){
                        $findUserIfRelatedOrConnected =  User::findOrFail($id);

                        foreach($findUserIfRelatedOrConnected->connectOrRelateOrSyncTableOneToManyForms as $forEachLists){
                          echo $forEachLists;
                        }
                      });

                      <b class="mayError">Step4 :</b>
                      This is not the Fixed eto yung sariling table niya e
                      link sources: https://stackoverflow.com/questions/28597762/laravel-5-sqlstate42s22-column-not-found-1054-unknown-column-user-id-in-f
                      ContainerMainParentUser
                      public function connectOrRelateOrSyncTableOneToManyForms(){
                        return $this->hasMany('App\Models\OneToManyForms', 'users_id');
                      }

                      <b class="highlights">Step5 : Inverse of One To Many Relationships</b>

                      public function makeSomeChildModelBelongToAParentTable(){
                        return $this->belongsTo('App\Models\User', 'user_id');
                      }

                      <b class="fixError">Fixed</b>
                      <b class="processedure">Step1 : class CreateOneToManyFormsTable extends Migration</b>
                      Schema::create('one_to_many_forms',
                      $table->integer('user_id')->unsigned();

                      <b class="processedure">Step2 : php artisan migrate:refresh</b>

                      <b class="processedure">Step3 :</b>
                      public function connectOrRelateOrSyncTableOneToManyForms(){
                        return $this->hasMany('App\Models\OneToManyForms', 'user_id');
                      }




                      <b class="highlights">-----------------------3-59. One to many relationship -END -----------------------</b>


                      60. Some random tips

                      <b class="highlights">-----------------------4-61. Many to many relations part 1 -START -----------------------</b>
                      Command Inputs/Terminal/NPM/Dependency
                       <b class="processedure">php artisan make:model Roles -m</b> MGA MODEL DECLA LANG TO NA GUSTO MO EH RELATE

                       <b class="processedure">php artisan make:model ManyToManyForms -m</b> MGA MODEL DECLA LANG TO NA GUSTO MO EH RELATE

                       <b class="processedure">php artisan make:migration user_type_tables_for_roles --create=many_to_many_forms_user</b> DITO YUNG REAL DEAL SA PAG GAMIT NG MGA MODEL PARA MAGING PIVOT
                       Created Migration: 2020_10_12_081935_user_type_tables_for_roles

                      <b class="processedure">Migrations Table</b>
                       Schema::create('many_to_many_forms', function (Blueprint $table) {
                           $table->id();
                           $table->string('form_input1');


                      NOTE Para mag declara ng pivot table gawin mo iall kopyahin mo lang yung ginawa mong Models tapos ilowerCase mo lang mga letters (same rin sa ids) tapos
                      ewan ko kung apply parin yung by alphabethical order pero try mo na lang kung gumagana parin kahit hindi naka alpha order
                       Schema::create('many_to_many_forms_user', function (Blueprint $table) {
                           $table->id();
                           $table->integer('user_id');
                           $table->integer('many_to_many_forms_id');
                           $table->timestamps();
                       });

                      Terminals
                      php artisan migrate:refresh
                      <b class="highlights">-----------------------5-62. Many to many relations part 2 -START -----------------------</b>
                      Manual Data Insertion
                      <a target="_blank" href="https://scontent.fmnl17-1.fna.fbcdn.net/v/t1.15752-9/121040785_334172197649079_4130218234199853252_n.png?_nc_cat=108&_nc_sid=ae9488&_nc_ohc=5lDnH7aOFmQAX944gWK&_nc_ht=scontent.fmnl17-1.fna&oh=ac4811ced90d6bd169c0e9e96f895a62&oe=5FA8670C">Link 1</a>
                      <a target="_blank" href="https://scontent.fmnl17-1.fna.fbcdn.net/v/t1.15752-9/121149353_1022919994843379_4054176025677362134_n.png?_nc_cat=104&_nc_sid=ae9488&_nc_ohc=kPwU_D8cQZYAX9kFz40&_nc_ht=scontent.fmnl17-1.fna&oh=5ca1eeb1d6240d19dd7173ce729d4c06&oe=5FAB524D
">Link 2</a>
                      <b class="criticalHighlights">User Model Container ParentMain</b>
                      public function usersHaveManyToManyForms(){
                        return $this->belongsToMany('App\Models\ManyToManyForms');
                      }


                      <b class="criticalHighlights">Routes FOR TESTING ONLY OR TO SEE THE RESULTS</b>
                      Route::get('manyToManyForms/{id}', function($id){
                        $pullOutOtherModelsBasedOnItsCurrUserRelationModels = User::findOrFail($id)->usersHaveManyToManyForms;

                        dd($pullOutOtherModelsBasedOnItsCurrUserRelationModels->usersHaveManyToManyForms);
                        foreach($pullOutOtherModelsBasedOnItsCurrUserRelationModels as $forEachLists){
                          echo $forEachLists;

                          dd($forEachLists);

                        }
                        or

                        $pullOutOtherModelsBasedOnItsCurrUserRelationModels = User::findOrFail($id)->usersHaveManyToManyForms()->orderBy('id', 'desc')->get();
                        return $pullOutOtherModelsBasedOnItsCurrUserRelationModels;
                      });

                      Route::get('manyToManyForms/{id}', function($id){
                        $findFirstTheModelYouWant_if_it_exists = User::findOrFail($id);

                        foreach($findFirstTheModelYouWant_if_it_exists->usersHaveManyToManyForms as $forEachLists){
                          //dd($forEachLists);
                          echo $forEachLists->pivot;
                        }
                      });



                      <b class="highlights">INVERSE for getting the results of users table</b>

                      public function many_to_many_forms_tableHasManyUsersTable(){
                        return $this->belongsToMany('App\Models\User');
                      }

                      Route::get('manyToManyInverse/{id}', function($id){

                        $findModelInverseRelation = ManyToManyForms::findOrFail($id)->many_to_many_forms_tableHasManyUsersTable;

                        foreach ($findModelInverseRelation as $key => $value) {
                          echo $value;
                        }

                      });
                      <b class="highlights">CRUD SECTION</b>

                      <b class="criticalHighlights">[Create/Insert]</b>
                      Route::get('manyToManyFormsCreate/{id}', function($id){
                        $specifyTheModelYouWantToFind = User::findOrFail($id);
                        $userModelManyToManyRelation = new ManyToManyForms(['table_attrib'=>'Set Value']);// Manual for testing only
                        $specifyTheModelYouWantToFind->usersTableHasManyToManyForms()->save($userModelManyToManyRelation);

                        or
                        $specifyTheModelYouWantToFind->usersTableHasManyToManyForms()->save(new ManyToManyForms(['table_attrib'=>'Set Value']));
                      });

                      <b class="criticalHighlights">[Update/Edit]</b>
                      Route::get('manyToManyFormsUpdate/{id}', function($id){
                        $findFirstTheModelYouWant_if_it_exists = User::findOrFail($id);
                        if($findFirstTheModelYouWant_if_it_exists->has('usersTableHasManyToManyForms')){
                          foreach($findFirstTheModelYouWant_if_it_exists->usersTableHasManyToManyForms as $forEachLists){
                            if($forEachLists->form_input1 == 'Hey'){
                              $forEachLists->form_input1 = 'change_value_here';
                              $forEachLists->save();
                            }
                          }
                        }
                      });

                      <b class="criticalHighlights">[Delete/Remove/Destroy]</b>
                      Route::get('manyToManyFormsDelete/{id}', function($id){
                        $findFirstTheModelYouWant_if_it_exists = User::findOrFail($id);

                        $findFirstTheModelYouWant_if_it_exists->usersTableHasManyToManyForms()->delete(); //deletes all data of the related table

                        or
                        foreach($findFirstTheModelYouWant_if_it_exists->usersTableHasManyToManyForms as $forEachLists){
                          dd($forEachLists->whereId(specify id)->delete());
                        }
                      });


                      <b class="criticalHighlights">[Attaching, DetachingAndSyncing]</b>
                      Route::get('manyToManyFormsAttach/{id}', function($id){
                        $findFirstTheModelYouWant_if_it_exists = User::findOrFail($id);

                        $findFirstTheModelYouWant_if_it_exists->usersTableHasManyToManyForms()->
                        attach(tell it which one do you want to attach the idNum attrib of ManyToManyForms Migration);
                        //deletes all data of the related table

                        Note: Attach Will Create another record not just update it
                      });

                      Route::get('manyToManyFormsDetach/{id}', function($id){
                        $findFirstTheModelYouWant_if_it_exists = User::findOrFail($id);

                        $findFirstTheModelYouWant_if_it_exists->usersTableHasManyToManyForms()->detach(13); //deletes all data of the related table
                        or detach() - will detach all users_id to that many_to_many_forms_id in the pivot table of course
                      });


                      Route::get('manyToManyFormsSynch/{id}', function($id){
                        $findFirstTheModelYouWant_if_it_exists = User::findOrFail($id);

                        $findFirstTheModelYouWant_if_it_exists->usersTableHasManyToManyForms()->synch(13);
                        or
                        synch([specify ids, ids])
                        synch([]) - will delete the database column if no sync was establish

                      });

                      <b class="highlights">-----------------------Has many through relation -START -----------------------</b>
                      <blockquote cite="http://">
                        Description: convenient Shortcut for accessing distant table relations via an intermediate
                        relation without spreading foreign keys or ids all over the
                        database tables
                      </blockquote>


                      <b class="highlights">&lt;-----------Step1 : Create A Model-----------></b>
                      php artisan make:model HasManyThroughTables -m

                      <b class="highlights">&lt;-----------Step2 : Create A Migration Table-----------></b>
                      Laravel recommends you to write a description class name
                      php artisan make:migration add_has_many_through_tables_id_column_to_users --table=users

                      Saakin kung ano gusto ko walang sunod-sunuran

                      php artisan make:migration <b class="highlights">has_many_through_id_willBeAddedToUserModel</b> --table=users
                                           class <b class="highlights">HasManyThroughIdWillBeAddedToUserModel</b> extends Migration


                      <b class="highlights">&lt;-----------Step3 : Migrations Table Migration-----------></b>
                      class AddHasManyThroughTablesIdColumnToUsers extends Migration
                      {
                          /**
                           * Run the migrations.
                           *
                           * @return void
                           */
                          public function up()
                          {
                              Schema::table('users', function (Blueprint $table) {
                                  ----------->$table->integer('has_many_through_tables_id');&lt;-----------
                              });
                          }

                          /**
                           * Reverse the migrations.
                           *
                           * @return void
                           */
                          public function down()
                          {
                              Schema::table('users', function (Blueprint $table) {
                                  ----------->$table->dropColumn('has_many_through_tables_id');&lt;-----------
                              });


                      <b class="highlights">&lt;-----------Step4 : Migrations Table Model-----------></b>
                      class CreateHasManyThroughTablesTable extends Migration
                      {
                          /**
                           * Run the migrations.
                           *
                           * @return void
                           */
                          public function up()
                          {
                              Schema::create('has_many_through_tables', function (Blueprint $table) {
                                  $table->id();
                                  ----------->$table->string('distant_attrib_input');&lt;-----------



                      <b class="highlights">&lt;-----------Step5 : Migrate Tables-----------></b>

                      <b class="highlights">&lt;-----------Step6 : Define Its RulesAndConditions of the Models Specified-----------></b>
                      class HasManyThroughTables extends Model
                      {
                          use HasFactory;

                          public function canRelateToTwoTablesAtOnce(){

                            syntax
                            return $this->hasManyThrough('App\Models\The One That Has The Main Model ID To Get Its ID',
                            'App\Models\The One That Has The HasThroughMany ID or also called the intermediary Model that have its Reference FK atrib',
                            'differentNameID for the HasThroughManyID', 'differentNameID for the Main Model ID');

                            And Here is the destination for the customization of ids for example
                            Schema::create('has_one_forms', function (Blueprint $table) {
                                $table->id();
                                $table->integer('differentNameID for the Main Model ID')->unsigned();

                            applied syntax
                            return $this->hasManyThrough('App\Models\HasOneForm', 'App\Model\User');

                          }

                      <b class="highlights">&lt;-----------Step7 : Pulling Out Information through routes waysormethodsortechniques of getting or to see the results or outputs-----------></b>
                      Route::get('manyToManyHasManyThroughTables/{id}', function ($id){
                        $findModelThatHasAccessDirectlyToManyTables = HasManyThroughTables::findOrFail($id);

                        foreach($findModelThatHasAccessDirectlyToManyTables->canRelateToTwoTablesAtOnce as $forEachLists){
                          dd($forEachLists);
                        }
                      });
                      <b class="highlights">-----------------------Has many through relation -END -----------------------</b>










                      <b class="highlights">-----------------------6-63. Querying intermediate table -START -----------------------</b>

                      <b class="processedure">ParentTable Container Main</b>
                      public function usersHaveManyToManyForms(){
                        return $this->belongsToMany('App\Models\ManyToManyForms', 'pivot_table_name_if_not_following_laravel_convention', 'pivot_table_fk_attrib_of_the_main_table',
                        'pivot_table_fk_attrib_of_the_other_related_table');
                      }

                      <b class="processedure">Tip 2 : Accessing the Intermediate Table or the Pivot table in Routes</b>
                      public function usersTableHasManyToManyForms(){
                        return $this->belongsToMany('App\Models\ManyToManyForms')->withPivot('created_at', 'updated_at');
                      }


                      <b class="processedure">[Testing Phase]</b>
                      Route::get('manyToManyForms-accessing-pivot-table/{id}', function($id){
                        $findFirstTheModelYouWant_if_it_exists = User::findOrFail($id);

                        foreach($findFirstTheModelYouWant_if_it_exists->usersTableHasManyToManyForms as $forEachLists){
                          //dd($forEachLists);
                          echo $forEachLists->pivot;

                        }
                      });
                      <b class="highlights">-----------------------6-63. Querying intermediate table -END -----------------------</b>
                      <b class="highlights">-----------------------5-62. Many to many relations part 2 -END -----------------------</b>










                      <b class="highlights">-----------------------Basic Database CRUD Stuff -END -----------------------</b>
                      <b class="highlights">-----------------------2-46. Reading / Finding with Constraints -START -----------------------</b>
                      route::get('/readDataFromDb', function (){

                          <b class="processedure">[different way of pulling data - 1]</b>
                          $pullingDatabaseStoredRecordData = Post::where('id', specify_the_id_number)->orderBy('id', 'desc')->take(specify_the_quantity)->get();

                          return $pullingDatabaseStoredRecordData;

                          or

                          <b class="processedure">[different way of pulling data - 2]</b>
                          $pullingDatabaseStoredRecordData = Post::where('users_count', 'specify_expression', specify_the_quantity)->firstOrFail();

                          return $pullingDatabaseStoredRecordData;



                      });

                      <b class="highlights">-----------------------2-46. Reading / Finding with Constraints -END -----------------------</b>






                      <b class="highlights">-----------------------3-48. Inserting / Saving Data -START -----------------------</b>
                      Route::get('/basicInsertionToDb', function (){
                        $simplePuttingOfDataToSpecificTableInTheDb = new Post; - instantiate or Post::find(specify_the_id_number); - this will overwrite/update the existing data

                        $simplePuttingOfDataToSpecificTableInTheDb->propert_or_attribute_name = Assign a Value to it;

                        $simplePuttingOfDataToSpecificTableInTheDb->save();
                      });
                      <b class="highlights">-----------------------3-48. Inserting / Saving Data -END -----------------------</b>







                      <b class="highlights">-----------------------4-49. Creating data and configuring mass assignment -START -----------------------</b>
                      Route::get('createMethod', function (){

                        $simplePuttingOfDataToSpecificTableInTheDb = Post::create(['propert_or_attribute_name'=>'set_a_value', 'propert_or_attribute_name'=>'set_a_value']); - mass
                        assignment error unless specified
                      });

                      Model

                      protected $fillable = [
                        'propert_or_attribute_name', - meaning it is safe for putting/updating record in the specified database table
                        'propert_or_attribute_name'
                      ];
                      <b class="highlights">-----------------------4-49. Creating data and configuring mass assignment -END -----------------------</b>




                      <b class="highlights"> -----------------------5-50. Updating with Eloquent -START -----------------------</b>
                      Route::get('updateMethod', function (){

                        $simpleOverwriteOfDataToSpecificTableInTheDb = someModelYouWantToModifyData::where('id', specify_the_id_number)->where('is_admin', specify_the_boolean_0_or_1)
                        ->update(['propert_or_attribute_name'=>'set_a_value']);
                      });
                      <b class="highlights"> -----------------------5-50. Updating with Eloquent -END -----------------------</b>




                      <b class="highlights">-----------------------6-51. Deleting Data -START -----------------------</b>
                      Route::get('deleteMethod', function (){

                        [different way of delete data - 1]
                        $simpleDeleteOfDataToSpecificTableInTheDb = someModelYouWantToModifyData::find(specify_the_id_number);

                        $simpleDeleteOfDataToSpecificTableInTheDb = delete();

                        [different way of delete data - 2]
                        someModelYouWantToModifyData::destroy(specify_the_id_number);

                        [different way of delete data - 3]
                        someModelYouWantToModifyData::destroy([specify_the_id_number, specify_the_id_number]);

                      });
                      <b class="highlights">-----------------------6-51. Deleting Data -END -----------------------</b>






                      <b class="highlights">-----------------------7-52. Soft Deleting / Trashing -START -----------------------</b>

                      [Process of getting it to work - 1]
                      Model
                      use Illuminate\Database\Eloquent\SoftDeletes;

                      class someModelYouWantToModifyData extends Model {
                        use SoftDeletes;

                        protected $data = [
                          'propert_or_attribute_name'
                        ];
                      }

                      [Process of getting it to work - 2]
                      php artisan make:migration add_define_attrib_name --table=specify_db_table


                      [Process of getting it to work - 3]
                      class DefineAttribName extends Migration {


                        public function up(){
                          Schema::table('some_db_table', function (Blueprint $table){
                            $table->tinyInteger('is_admin')->default('0');
                            $table->SoftDeletes();
                          });
                        }

                        public function down(){
                          Schema::table('some_db_table', function (Blueprint $table){
                            $table->dropColumn('propert_or_attribute_name' in our case 'deleted_at' or 'is_admin'); - for migrate rollback,reset or whatever
                          });
                        }


                      }


                      [Process of getting it to work - 4]
                      Route::get('softdelete-a-data', function (){
                        someModelYouWantToModifyData::findOrFail(specify_the_id_number)->delete();
                      });
                      <b class="highlights">-----------------------7-52. Soft Deleting / Trashing -END -----------------------</b>










                      <b class="highlights">-----------------------8-53. Retrieving deleted / trashed records -START -----------------------</b>
                      Route::get('read-trashed-data-softdeletes', function (){

                        [showing the ones with the soft deletes - 1]
                        $readWithTrashData = someModelYouWantToModifyData::withTrashed()->where('is_admin', specify_the_boolean_0_or_1)->get();
                        return $retrievedTrashData;


                        [showing the soft deletes only] The onlyTrashed method will retrieve only soft deleted models:
                        $readTrashData = someModelYouWantToModifyData::onlyTrashed()->where('is_admin', specify_the_boolean_0_or_1)->get();
                        return $retrievedTrashData;
                      });
                      <b class="highlights">-----------------------8-53. Retrieving deleted / trashed records -END -----------------------</b>







                      <b class="highlights">-----------------------9-54. Restoring deleted / trashed records -START -----------------------</b>
                      Route::get('restore-trashed-data-softdeletes', function (){


                        $readFirstThenRestoreTrashedData = someModelYouWantToModifyData::withTrashed()->where('is_admin', specify_the_boolean_0_or_1)->get(); - for checking only optional

                        then restore() it
                      });
                      <b class="highlights">-----------------------9-54. Restoring deleted / trashed records -END -----------------------</b>






                      <b class="highlights">-----------------------10-55. Deleting a record permanently -START -----------------------</b>
                      Route::get('delete-permanently-trashed-data-softdeletes', function (){
                        $permadelete = someModelYouWantToModifyData::onlyTrashed()->where('is_admin', specify_the_boolean_0_or_1)->forceDelete();
                      });
                      <b class="highlights">-----------------------10-55. Deleting a record permanently -END -----------------------</b>


                    </blockquote>
                  </div>


                </pre>

              </p>
            </div>

          </section>




        </div>


        <!-- Vanilla Jquery-->
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous">
        </script>

        <!-- Jquery UI - css -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/blitzer/jquery-ui.css">


        <!-- Jquery UI - js-->
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>

        <!-- CANCEL<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> Hindi gumagana yung secondary-->



        <script>

        $(function () {

          $("html").css({
            background:`#12110F`,
            margin:`2vh 10vw`,
            border:`4px solid aqua`,
            padding:`2vh 3vw`
          })


          $("body").css({
            background:`#FFF0D1`,
            border:`4px solid #0A51FF`,
          })

          $(".edwinDiazCourse").css({"text-align":`center`,})

          $(".container").css({
            position:`relative`,
            border:`4px solid green`,
          })

          $(".containerContentManagementDivision").css({
            position: `relative`,

          })

          $(".masterBoxTitleSection").css({
            "text-align":`center`,
            outline:`14px solid black`,
            margin:0,
            background:`#F7D152`,
          })

          $(".codeManagement").css({
            outline:`14px solid #F7D152`,
            margin:0,
            background:`linear-gradient(0deg, #D9AFD9 0%, #97D9E1 100%)`,
          })

          $(".moduleContentBoxTitle").css({
            "text-align":'center',
            "color":'#1B2224',
          })

          $("#route-list-parcon").css({
            width: `50vw`,
            margin:`3px auto`,
            border:`5px solid red`,
          })
            $("#route-list-parcon #route-lists").css({
              width: `100%`,
              display:`block`,
            })

            /*position:`absolute`,
            top:`50%`,
            left:`50%`,
            "margin-top":'-300px',
            "margin-left":'-300px',
            border:`solid 1px red`,
            width:`600px`,
            height:`600px`,
            "border-radius":'100%',*/

          $(".ProceduralProcessBoxTitle").css("background-image","linear-gradient(160deg, #0093E9 0%, #80D0C7 100%)")
          $(".ProceduralProcessBoxTitleTitle").css("background",'#1EFC97')

          /*custom css helpers*/
          $(".syntax").css(`color`,`#E67027`)
          $(".appliedSyntax").css(`color`,`#00F521`)
          $(".takeNote").css(`color`,`#C925F5`)
          $(".options").css(`background`,`radial-gradient(circle, rgba(63,94,251,1) 27%, rgba(252,70,107,1) 79%)`)
          $(".important").css(`background-image`,`linear-gradient(to right, #eea2a2 0%, #bbc1bf 19%, #57c6e1 42%, #b49fda 79%, #7ac5d8 100%)`),
          $(".mayError").css(`background-image`,`linear-gradient(225deg, #ff1212 0%, #d1a7c4 33%, #f09292 66%, #ffb4b4 100%)`)
          $(".fixError").css(`background-image`,`linear-gradient(90deg, #00DBDE 0%, #FC00FF 100%)`)
          $(".breakDown").css(`outline`,`2px solid #242F40`)
          $(".assetFiles").css(`border`,`4px solid #000000`)
          $(".numerality").css(`background-image`,`linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%)`)
          $(".highlights").css(`background-image`,`linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%)`)
          $(".criticalHighlights").css("background-image", "linear-gradient(225deg, #85FFBD 0%, #FFFB7D 75%, #ffffff 98%)")
          $(".recall").css(`background-image`,`linear-gradient(180deg, #2af598 0%, #009efd 100%)`)
          $(".elements_to_be_styled").css(`background-image`,`linear-gradient(to right, #e4afcb 0%, #b8cbb8 0%, #b8cbb8 0%, #e2c58b 30%, #c2ce9c 64%, #7edbdc 100%)`)
          /*Proccess*/
          $(".steprocedure").css(`color`,`#F5528B`)
          $(".subStep").css(`color`,`#e85d04`)
          $(".processedure").css(`background-image`,`linear-gradient(45deg, #ffffff 0%, #85FFBD 24%, #ffffff 49%, #dcd616 75%, #ffffff 100%)`)
          $(".methodanicompute").css(`background-image`,`linear-gradient(46deg, #ffffff 0%, #eef0f5 15%, #ffffff 33%, #eae0c9 62%, #ffffff 100%)`)


          /*Barely Used*/
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
