<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoB</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/top.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="{{ asset('js/app.css') }}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Todo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            {{-- <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" href="{{ 'tasks.create' }}">Create</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                <div class="dropdown-divider"></div>
                {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
              </div>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link disabled" href="{{ route('tasks.create') }}" tabindex="-1" aria-disabled="true">Create</a>
            </li> --}}
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    @if(isset($tasks) && count($tasks) > 0) 
      <div class="container">
        <div class="row">
          @foreach ($tasks as $task)
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                {{-- <img src="{{ asset('storage/'.$task->image ) }}" class="card-img-top" alt="..."> --}}
                <img src="{{ Storage::url($task->image ) }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $task->title }}</h5>
                  <p class="card-text">{{ $task->contents }}</p>
                  <p class="created_time">投稿日時：{{ $task->created_at }}</p>
                  <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">編集</a>

                  <form action='{{ route('tasks.destroy',$task->id) }}'method='post'>
                    @csrf
                    @method('delete')
                    <input type='submit' value='削除'class="btn btn-danger"onclick='return confirm("本当に削除しますか？");'>
                  </form>
                </div>
              </div>
            </div>
          @endforeach
          {{ $tasks->links() }}
        </div>
      </div>
      {{-- @else
      <p>No tasks found.</p> --}}
    @endif






    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>