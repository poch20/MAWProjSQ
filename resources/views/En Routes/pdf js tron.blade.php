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
    <li class="nav-item">
      <a class="nav-link" href="/">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/form">Form</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="/pdftron">PDFTron</a>
    </li>
    <li class="nav-item disabled">
      <a class="nav-link" href="#">Disabled</a>
    </li>
  </ul>
  <div class="row">
    <div style="height: 75vh" class="col-sm-6">
      <iframe height="100%" width=100% src='lib/web/viewer.html?file=demo.pdf#zoom=50'></iframe>
    </div>
    <div class="col-sm-6">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">PDFTron WebViewer.</h3>
        </div>
        <div class="panel-body">
          If you need high-fidelity rendering, increased reliability, and faster performance,
          you could consider PDFTron WebViewer.
          It’s a JavaScript PDF library that integrates
          with with many frameworks and offers hundreds of features, like redaction, editing,
          page manipulation, real-time document collaboration, digital signatures, and much more.
        </div>
      </div>
    </div>
  </div>
</body>

</html>
