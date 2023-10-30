<!DOCTYPE HTML>
<html>  
<body>

<form action="/adduser" method="POST">
@csrf
Name:<input type="text" name="name"><br>
E-mail:<input type="text" name="email"><br>
Address:<input type="text" name="address"><br>
<button type="submit">Submit</button>
</form>
</body>
</html>