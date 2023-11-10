<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <br/>   
  <a href="{{route("create")}}"  class="btn btn-info" role="button">Add Details</a>  
  {{-- <a href="{{route("edit_view")}}">post_2</a>--}} 
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>email</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($members as $member)
          <td>{{$member["name"]}}</td>
          <td>{{$member["email"]}}</td>
          <td>{{$member["address"]}}</td>
          <td><a href='{{"delete/".$member["id"]}}'>Delete</a>|<a href='{{"edit/".$member["id"]}}'>Edit</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
