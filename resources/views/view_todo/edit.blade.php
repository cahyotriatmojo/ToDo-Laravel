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
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        @endif
    </div>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">Edit Todo List Kamu</h1>
            </div>
            <div class="col-md-20 mx-auto col-lg-15">
                <form class="p-4 p-md-5 border rounded-3 bg-light" method="post"
                    action="{{ route('todo.update', ['paramtodo' => $todo]) }}">
                    @csrf
                    @method('put')
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" value="{{ $todo->title }}" name="title"
                            placeholder="Isi YAAAA">
                        <label for="todo">Judul</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" value="{{ $todo->description }}" name="description"
                            placeholder="Isi JADWAL KAMU">
                        <label for="todo">Deskripsi</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="Update">Update</button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
