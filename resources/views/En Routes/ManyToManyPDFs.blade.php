<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="1">
      <tr>
        <th>Attribute</th>
        <th>File Desc</th>
        <th>View</th>
        <th>Download</th>
      </tr>
      @foreach($showFile as $key => $data)
      <tr>
        <td>{{++$key}}</td>
        <td>{{$data->description}}</td>
        <td>{{$data->document_files}}</td>
        <td><a href="/ReadGet/{{$data->id}}">View</a></td>
        <td><a href="/ReadGet/download/{{$data->document_files}}">Download</a></td>
      </tr>
      @endforeach
    </table>

  </body>
</html>
