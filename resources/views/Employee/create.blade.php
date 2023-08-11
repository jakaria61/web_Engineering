<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class='container m-5'>
    <h1>Add your new book</h1>
    <form method='post' action="/employe-store">
        @csrf
        
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter employe name </label>
            <input type="text" name='name' class="form-control" id="exampleFormControlInput1" required/>
        </div>
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter job title </label>
            <input type="text" name='job_title' class="form-control" id="exampleFormControlInput1" required/>
        </div>
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter joining date </label>
            <input type="text" name='joining_date' class="form-control" id="exampleFormControlInput1" required/>
        </div>
        
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter salary </label>
            <input type="number" name='salary' class="form-control" id="exampleFormControlInput1" required/>
        </div>
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter Email </label>
            <input type="text" name='email' class="form-control" id="exampleFormControlInput1" required/>
        </div>
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter Mobile </label>
            <input type="text" name='mobile' class="form-control" id="exampleFormControlInput1" required/>
        </div>
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter address </label>
            <input type="text" name='address' class="form-control" id="exampleFormControlInput1" required/>
        </div>
       
        <button class='btn btn-success 'type='submit'>Add Now</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>