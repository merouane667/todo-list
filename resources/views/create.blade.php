<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Document</title>
</head>
<body class='container' style="background-image:url('https://all4desktop.com/data_images/original/4236532-background-images.jpg')">
@include('errors')

<form class="container" action="/create" method="POST">

    @csrf
  <div class="form-group">
    <label >title</label>
    <input type="text" class="form-control" name="title" >
  </div>
  <div class="form-group">
    <label >task</label>
    <textarea type="text" class="form-control" name="task"> </textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


    
</body>
</html>