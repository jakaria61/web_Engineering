<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Employee Dashboard</title>
</head>
<body class='container m-5'>
    <div class="d-flex">
      <div  class='col-md-6'>
      <h4>All Emlopyee</h4>
    <a class='btn btn-primary' href="/employee-add">Add Employee</a>
    </div>
     <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">search employee </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" required/>
            <button class='btn btn-success m-1'>Search</button>
        </div>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">S.L</th>
      <th scope="col">Name</th>
      <th scope="col">Job_title</th>
      <th scope="col">joining</th>
      <th scope="col">Salary</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile_no</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($employees as $employe)
            <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$employe->name}}</td>
            <td>{{$employe->job_title}}</td>
            <td>{{$employe->joining_date}}</td>
            <td>{{$employe->salary}}</td>
            <td>{{$employe->email}}</td>
            <td>{{$employe->mobile}}</td>
            <td>{{$employe->address}}</td>
         
            <td>
                <a class='btn btn-primary' href="/edit-employe/{{$employe->id}}">Edit</a>
                <a  class='btn btn-danger' href="/delete-employe/{{$employe->id}}">Delete</a>
            </td>
            </tr>
    @endforeach   
  </tbody>
 
</table>
{{$employees->links()}}


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>