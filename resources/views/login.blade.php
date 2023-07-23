<!DOCTYPE HTML>
<html>  
<body>

<form action="/user_login" method="POST">
@csrf
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<button type="submit">Submit</button>
</form>

</body>
</html>