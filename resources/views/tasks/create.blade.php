<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新規投稿</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>新規投稿</h1>
    <form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="title">タイトル</label>
        <input type="text" class="form-control" id="title" placeholder="タイトルを入力してください" name="title">
      </div>
      <div class="form-group">
        <label for="content">内容</label>
        <textarea class="form-control" id="content" rows="5" placeholder="内容を入力してください" name="contents"></textarea>
      </div>
      
      <div class="form-group">
        <label for="image">画像</label>
        <input type="file" class="form-control-file" id="image" name="image">
      </div>

      <button type="submit" class="btn btn-primary">投稿</button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
