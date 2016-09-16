@include('navbar')

<body>
  <div style="width:100% ; height:10%;"></div>
  <form method="POST" action="{{ url('home/'.$maps->id.'/location') }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <label for="name">地點名稱</label>
    <textarea name="subject">{{ $maps->subject }}</textarea>
    <label for="name">文案</label>
    <textarea name="content">{{ $maps->content }}</textarea>
    <label for="name">地圖連結</label>
    <textarea name="connection">{{ $maps->connection }}</textarea>
    <button type="submit" class="btn btn-primary">確認</button>
  </form>
</body>
