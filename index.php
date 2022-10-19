<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taskmate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="font-weight: bolder; color: aqua;  font-size:1.5rem;">Taskmate</a>
        </div>
    </nav>
   

    <!-- Create Task (Form) -->

  <form style="width: 30vw; text-align: center; margin: 5vh 0 0 35vw;">
        <div class="mb-3">
          <input type="text" class="form-control" id="nameInput" name="name" placeholder="Enter your name">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" id="dept" name="dept" placeholder="Enter your department">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="task" name="task" placeholder="Task">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Add task</button>
   </form>


    <!-- Display Data (table) -->


    <table class="table" style="margin: 10vh 15vw; width: 70vw; text-align:center;">
        <thead class="table-info" style="color: #272829;">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Department</th>
            <th scope="col">Task</th>
            <th scope="col">Edit/Delete</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
            <td>1</td>
            <td>Alexa</td>
            <td>IOT</td>
            <td>Turn on all the lights</td>
            <td><button class="btn btn-primary" >edit</button><button class="btn btn-danger" style="margin-left: 10px;">delete</button></td>
            </tr>
        </tbody>
   </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
