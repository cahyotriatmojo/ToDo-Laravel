<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <div>
        @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">Todolist</h1>
                <p class="col-lg-10 fs-4">by <a target="_blank" href="{{ route('todo.create') }}">Create Todo-List</a>
                </p>
            </div>
        </div>
        <div class="row align-items-right g-lg-5 py-5">
            <div class="mx-auto">
                <form id="deleteForm" method="post" style="display: none">

                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Todo-List</th>
                            <th scope="col">Ingat selalu Jadwal Anda</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                        </tr>
                        @foreach ($todos as $todo)
                            <tr>
                                <td>{{ $todo->id }}</td>
                                <td>{{ $todo->title }}</td>
                                <td>{{ $todo->description }}</td>
                                <td>
                                    <a class="w-100 btn btn-lg btn-primary"
                                        href="{{ route('todo.edit', ['paramtodo' => $todo]) }}">Edit</a>
                                </td>
                                <td>
                                    <form method="post" action="{{ route('todo.destroy', ['paramtodo' => $todo]) }}">
                                        @csrf
                                        @method('delete')
                                <td>
                                    <button class="w-100 btn btn-lg btn-danger" value="Delete"
                                        type="submit">Remove</button>
                                </td>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
