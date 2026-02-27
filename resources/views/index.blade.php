<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>
    {{-- Main Content --}}
    <br>

    <div style="display: flex; justify-content: center;">
        <div class="div">
            <form action="/addTask" method="POST">
                @csrf 
                <div style="display: flex;">
                    <input type="text" placeholder="Enter a task" name="task" class="form-control">
                    <button class="btn btn-primary" style="margin-left: 15px;">Enter</button>
                </div>
            </form>
        </div>
    </div><br>

    <div style="display: flex; justify-content: center;">
        <table class="table">
            <thead>
                <tr>
                    <th style="text-align: center; height: 50px; font-size: 25px; background-color: black; color: white;">Task</th>
                    <th style="text-align: center; height: 50px; font-size: 25px; background-color: black; color: white;">Action</th>
                </tr>                
            </thead>

            @foreach ($readRecord as $read_record)
            <tbody>
                <tr>
                    <td style="text-align: center; height: 30px; font-size: 17px;">{{ $read_record->task }}</td>
                    <td style="text-align: center; height: 30px; font-size: 17px;"><a href="/edit/{{$read_record->id}}"><button class="btn btn-warning">Edit</button></a> <a href="/deleteTask/{{$read_record->id}}"><button class="btn btn-danger">Delete</button></a></td>
                </tr>
            </tbody>
            @endforeach

        </table>
    </div>

    {{-- Php --}}
    @if (isset($exeAddTask))
        @if ($exeAddTask == 1)
            <script>
                Swal.fire({
                    title:'Task Added',
                    text:'The task has been added successfully',
                    icon:'success',
                    timer:1500,
                    showConfirmButton:false,
                    willClose: () => {
                        window.location.href='/';
                    }
                })
            </script>
        @else
            <script>
                Swal.fire({
                    title:'Error Adding Task',
                    text:'There has been error in adding task',
                    icon:'error',
                    timer:1500,
                    showConfirmButton:false,
                    willClose: () => {
                        window.location.href='/';
                    }
                })
            </script>
        @endif
    @endif

    @if (isset($exeDeleteTask))
        @if ($exeDeleteTask == 1)
            <script>
                Swal.fire({
                    title:'Task Deleted',
                    text:'The task has been deleted successfully',
                    icon:'success',
                    timer:1500,
                    showConfirmButton:false,
                    willClose: () => {
                        window.location.href='/';
                    }
                })
            </script>
        @else
            <script>
                Swal.fire({
                    title:'Error Deleting Task',
                    text:'There has been error in deleting task',
                    icon:'error',
                    timer:1500,
                    showConfirmButton:false,
                    willClose: () => {
                        window.location.href='/';
                    }
                })
            </script>
        @endif
    @endif
    {{-- Php End --}}

    {{-- JavaScript --}}
    {{-- JavaScript End --}}
</body>
</html>