<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Users List</title>
</head>
<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="col-sm-12 mt-4">
                        <table class="table table-hover">
                            <thread>
                               
<tr>
    <th scope="col">Id</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Action</th>
</tr>
                            </thread>
                            <tbody>
                                @foreach ($users as $user) 
                                <tr>
                                    <th>{{$user->id}}</th>
                                    <th>{{$user->name}}</th>
                                    <th>{{$user->email}}</th>
                                    <td>
                                        <a href="{{url('/edit',$user->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        <a href="{{url('/delete',$user->id) }}" class="btn btn-danger btn-sm" onclick='return checkdelete()'>Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function checkdelete(){
        return confirm('Are you sure? you want to Delete this Record!');
    }
  </script>
</body>
</html>

   

