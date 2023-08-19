<!DOCTYPE HTML>
<html>  
<body>

<form action="/update" method="POST">
@csrf
Name:<input type="text" name="name" value="{{$memberResult['name']}}"><br>
<input type="hidden" name="id" value="{{$memberResult['id']}}">
E-mail:<input type="text" name="email" value="{{$memberResult['email']}}"><br>
Address:<input type="text" name="address" value ="{{$memberResult['address']}}"><br>
<button type="submit">Submit</button>
</form>
</body>
</html>