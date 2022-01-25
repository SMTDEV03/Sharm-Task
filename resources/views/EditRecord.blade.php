<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<form action="/edit" method="POST">
@csrf
<input type="hidden" name="id" value="{{$data['id']}}" ><br><br>   
Name: <input type="text" name="fname" value="{{$data['fname']}}" ><br><br>    
Email:<input type="text" name="email" value="{{$data['email']}}" ><br><br>
Phone:<input type="text" name="phone" value="{{$data['phone']}}" ><br><br>
<button type="submit" name="submit">Updated</button>
</form>
</body>
</html>