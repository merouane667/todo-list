<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('js/confirm.js') }}"></script>
    <title>Document</title>
</head>

<body class='container'
    style="background-image:url('https://all4desktop.com/data_images/original/4236532-background-images.jpg');background-attachment: fixed;">
    @include('errors')

    <h1>TODO LIST</h1>

    <a href='/create' class="btn btn-primary ">ADD TASKS</a>

    <h3 style="MARGIN-TOP:40PX;"><i class="fa fa-sort-desc"></i> ALL TASKS</h3>

    <div class="row">

        @if(count($tasks) > 0)
        <div class="container">
        @foreach($tasks as $task)

        
            <div class="row">
                <div class="col-12 mt-3">

                    <div class="card text-white bg-secondary ">

                        <div class="card-header">TASK NUMBER : {{$task->id}}</div>
                        @if($task->completed == 0)

                        <a href="/completed/{{$task->id}}" class='btn btn-success'>completed</a>

                        @else

                        <div class=" text-success" style="font-size:2em;"><i class="fa fa-check-circle"></i>completed</div>

                        @endif

                        <div class="card-body">
                            <h5 class="card-title">{{$task->title}}</h5>
                            <p class="card-text">{{$task->task}}</p>
                        </div>
                        <div style="display:flex;">
                            <a href='/edit/{{$task->id}}' class="btn btn-warning col-lg-2"
                                style='margin-right:20px'>edit</a>
                            <a onClick="deleteme({{$task->id}})" class="btn btn-danger col-lg-2">delete</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        @endforeach

        @else

        <div class="bg-danger text-white">No task registered</div>
        @endif

        <div class='d-flex justify-content-center' >
            {{$tasks->links()}}
           
        </div>

</body>

</html>