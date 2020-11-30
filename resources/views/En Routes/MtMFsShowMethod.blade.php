<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link rel="stylesheet" media="screen" href="https://du11hjcvx0uqb.cloudfront.net/br/dist/brandable_css/no_variables/bundles/lato_extended-38dc7d1774.css">

    <script>
      function _earlyClick(e){
        var c = e.target
        while (c && c.ownerDocument) {
          if (c.getAttribute('href') == '#' || c.getAttribute('data-method')) {
            e.preventDefault()
            (_earlyClick.clicks = _earlyClick.clicks || []).push(c)
            break
          }
          c = c.parentNode
        }
      }
      document.addEventListener('click', _earlyClick)
    </script>

  </head>
  <body>
    <p>
      <div>
        <a href="#" style="font-size: 0.8em;" class="hide_file_preview_link">Minimize File Preview</a>
        <div style="overflow: auto; resize: vertical; border: 1px solid transparent; height: 100%;">
          <iframe type="application/pdf" src="{{url('/storage/'.$data->document_files)}}" allowfullscreen="1" style="width: 100%; border: 0px; overflow: auto; height: 99%; min-height: 800px;"></iframe>
        </div>
      </div>
    </p>

    <h2>{{$data->description}}</h2>
    <p>
      <object data="{{url('/storage/')}}" type="application/pdf">
          <embed src="{{url('/storage/')}}" type="application/pdf" />
      </object>
    </p>
  </body>
</html>
