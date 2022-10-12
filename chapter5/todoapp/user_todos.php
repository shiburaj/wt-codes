<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
</head>
<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
        <div class="d-flex flex-wrap gx-3 align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width: 2.5em;">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
            </svg>

            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
            <li><a href="users_list.php" class="nav-link px-2 text-secondary">Users</a></li>
            <li><a href="user_todos.php" class="nav-link px-2 text-white">My Todos</a></li>
            </ul>

            

            <div class="text-end">
            <a href="login.php" class="btn btn-outline-light me-2">Login</a>
            <a href="register.php" class="btn btn-warning">Sign-up</a>
            </div>
        </div>
        </div>
    </header>

    <div class="px-4 py-5 my-5 text-center">
        <h3 class="text-start">My Todos</h3>
        <div class="card-body p-4">
        
        
                    <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
                    <div class="col-12">
                        <div class="form-outline">
                        <input type="text" placeholder="Enter task here" id="form1" class="form-control">
                        </div>
                    </div>
        
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
        
                    <div class="col-12">
                        <button type="submit" class="btn btn-warning">Get tasks</button>
                    </div>
                    </form>
        
                    <table class="table mb-4">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Todo item</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Buy groceries for next week</td>
                        <td>
                            <span class="in-progress">In Progress</span>
                            <span class="complete">Complete</span>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="submit" class="btn btn-success ms-1">Finished</button>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Renew car insurance</td>
                        <td>
                            <span class="in-progress">In Progress</span>
                            <span class="complete">Complete</span>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="submit" class="btn btn-success ms-1">Finished</button>
                        </td>
                        </tr>
                        <tr class="finished">
                        <th scope="row">3</th>
                        <td>Sign up for online course</td>
                        <td>
                            <span class="in-progress">In Progress</span>
                            <span class="complete">Complete</span>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="submit" class="btn btn-success ms-1">Finished</button>
                        </td>
                        </tr>
                    </tbody>
                    </table>
        
                </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
</body>
</html>