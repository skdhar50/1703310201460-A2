<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="{{ route('/add') }}">
        @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name">

            </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email">

            </div>
            <div class="form-group">
              <label for="dob">Date of Birth:</label>
              <input type="date" class="form-control" id="dob">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Salary:</label>
                <input type="number" class="form-control" id="salary">
              </div>
            <div class="form-check">
                <label for="gender">Gender:</label>
                <input class="form-check-input" type="radio" name="male" id="male" value="male">
                <label class="form-check-label" for="male">
                  Male
                </label>
                <input class="form-check-input" type="radio" name="female" id="female" value="female">
                <label class="form-check-label" for="female">
                  Female
                </label>
            </div>
            <div class="form-check">
                <label for="gender">Status:</label>
                <input class="form-check-input" type="checkbox" name="active" id="active" value="active">
                <label class="form-check-label" for="active">
                  Active
                </label>
                <input class="form-check-input" type="checkbox" name="female" id="female" value="female">
                <label class="form-check-label" for="female">
                  Inactive
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>