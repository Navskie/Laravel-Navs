<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student</title>
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
  <table>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Gender</th>
      <th>Age</th>
      <th>Email</th>
    </tr>
    @foreach ($students as $student)
    <tr>
      <td>{{ $student->fname }}</td>
      <td>{{ $student->lname }}</td>
      <td>{{ $student->gender }}</td>
      <td>{{ $student->age }}</td>
      <td>{{ $student->email }}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>