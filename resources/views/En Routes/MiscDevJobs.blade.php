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
          <ol id=""><span class="important"></span>
            <a href="#noted-lec-of-non-poly-db-relationships" id=""><li><span class="important">===LDER</span></li></a>
          </ol>
        </ul>
      </div>
      <h1 class="edwinDiazCourse">PHP with Laravel for beginners - Become a Master in Laravel</h1>
      <div class="containerContentManagementDivision">
        <p>
          <h1 class="moduleContentBoxTitle" id="ci2">------------Jobs that I think is necessary------------</h1>
          <pre>
            <strong class="ProceduralProcessBoxTitle">step 1</strong>:<b><em class="steprocedure"></em></b>
            <div class="codeManagement">
            </div>
          </pre>
        </p>
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
