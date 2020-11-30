<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap PDF.js Viewer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <ul class="nav nav-tabs">
    <li class="nav-item active">
      <a class="nav-link" href="/">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/Pdfjsformhtml">PDFJSForm</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/Pdfjstronhtml">PDFJSTron</a>
    </li>
    <li class="nav-item disabled">
      <a class="nav-link" href="#">Disabled</a>
    </li>
  </ul>
  <div class="row">
    <div style="height: 75vh" class="col-sm-6">
      <iframe height="100%" width=100% src='lib/web/viewer.html?file=pdf-js-express-default-doc-v2.pdf#zoom=40'></iframe>
    </div>
    <div class="col-sm-6">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Bootstrap</h3>
        </div>
        <div class="panel-body">
          Bootstrap is a free and open-source CSS framework directed at responsive,
          mobile-first front-end web development. It contains CSS- and JavaScript-based design
          templates for typography, forms, buttons, navigation, and other interface components.
        </div>
      </div>
    </div>
  </div>
</body>

</html>
