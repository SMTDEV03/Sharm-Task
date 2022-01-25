<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>First Name</td>
<td>Email</td>
<td>Phone</td>
<td>Action</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->fname }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->phone }}</td>
<td><a href='edit/{{$user->id}}'>Edit</a>
<a href='delete/{{$user->id}}' onclick="return myFunction();">Delete</a></td>
</tr>
@endforeach
</table>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script>
  function myFunction() {
      if(!confirm("Are You Sure to delete this"))
      event.preventDefault();
  }
 </script>