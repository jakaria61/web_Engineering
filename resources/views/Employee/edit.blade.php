<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class='container m-5'>
    <h1>update your  book</h1>
    <form method='post' action="/employe-update/{{$employe->id}}">
        @csrf
        @method('put')
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter name </label>
            <input type="text" value='{{$employe->name}}' name='name' class="form-control" id="exampleFormControlInput1" required/>
        </div>
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter  job_title</label>
            <input type="text" value='{{$employe->job_title}}' name='job_title' class="form-control" id="exampleFormControlInput1" required/>
        </div>
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter joining_date </label>
            <input type="text" value='{{$employe->joining_date}}' name='joining_date' class="form-control" id="exampleFormControlInput1" required/>
        </div>
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter salary </label>
            <input type="number" value='{{$employe->salary}} 'name='salary' class="form-control" id="exampleFormControlInput1" required/>
        </div>
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter email number</label>
            <input type="text" value='{{$employe->email}}' name='email' class="form-control" id="exampleFormControlInput1" required/>
        </div>
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter mobile </label>
            <input type="number" value='{{$employe->mobile}}' name='mobile' class="form-control" id="exampleFormControlInput1" required/>
        </div>
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter address </label>
            <input type="text" value='{{$employe->address}}' name='address' class="form-control" id="exampleFormControlInput1" required/>
        </div>
        <button class='btn btn-success 'type='submit'>Update Now</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>