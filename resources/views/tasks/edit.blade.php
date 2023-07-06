<!DOCTYPE html>
<html>
<head>
    <title>編集画面</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>編集画面</h1>
        <form method="POST" action="{{ route('tasks.update', $task->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        
            <div class="mb-3">
                <label for="title" class="form-label">タイトル</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}">
            </div>
        
            <div class="mb-3">
                <label for="contents" class="form-label">投稿内容</label>
                <textarea class="form-control" id="contents" name="contents" rows="4">{{ $task->contents }}</textarea>
            </div>
        
            <div class="mb-3">
                <label for="image" class="form-label">画像</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
        
            {{-- <div class="mb-3">
                <img src="{{ $task->image }}" alt="Task Image" class="img-thumbnail" style="max-width: 200px;">
            </div> --}}
            
            <button type="submit" class="btn btn-primary">更新 <a href="{{ route('tasks.top', $task->id) }}"></a></button>
        </form>
        

        {{-- <form method="POST" action="{{ route('tasks.update', $task->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="title" class="form-label">タイトル</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}">
            </div>

            <div class="mb-3">
                <label for="contents" class="form-label">投稿内容</label>
                <textarea class="form-control" id="contents" name="contents" rows="4">{{ $task->contents }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">画像</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <div class="mb-3">
                <img src="{{ $task->image }}" alt="Task Image" class="img-thumbnail" style="max-width: 200px;">
            </div>
            <a href="{{ route('tasks.top', $task->id) }}" class="btn btn-primary">更新</a>
        </form> --}}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>