<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Laravel Crud Application <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
     
      </li>
    </ul>
  </div>
</nav>

<br><br>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    @csrf
                    <input type="text" name="Name" placeholder="Enter Name">
                    <br><br>

                    <input type="text" name="password" placeholder="Enter Password">
                    <br><br>

                    <input type="text" name="Date" placeholder="Enter Date">
                    <br><br>

                    <button class="btn btn-danger" data-dismiss="modal">Cansel</button>

                    <button class="btn btn-primary" type="submit">Add</button>
                    





                </form>
                <!-- Modal body content goes here -->
            </div>
            <div class="modal-footer">
                <!-- Modal footer buttons go here -->
            </div>
        </div>
    </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Date</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($members as $member)
    <tr>

      <td>{{$member['id']}}</td>
      <td>{{$member['Name']}}</td>
      <td>{{$member['password']}}</td>
      <td>{{$member['Date']}}</td>
      <td>
    <a href={{"update/".$member['id']}}  class="text-white btn btn-success ml-2 pt-2">
        <i class="fa-sharp fa-solid fa-pen-to-square">Update</i>

    

    <a href={{"delete/".$member['id']}}  class="text-white btn btn-danger ml-2 pt-2">
        <i class="fas fa-trash">Delete</i>


    

    <a href={{"view/".$member['id']}}  class="text-white btn btn-warning ml-2 pt-2">
        <i class="fas fa-eye">View</i>
    </a>
</td>
   
    </tr>
 @endforeach
   
  </tbody>
</table>
<button class="btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModal">
    Add Student
</button>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>