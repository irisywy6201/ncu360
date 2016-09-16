@include('navbar')


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/css/modal.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/cwtexyen.css">
<style>
  .upload{
    position:fixed;
    right:2%;
    bottom:2%;
    opacity: 0.85;
  }
  .upload:hover{
    opacity: 1;
    transform: scale(1.2,1.2);
    cursor: hand;
  }
  .pic1{
    width: 429px;
    height: 322px;
    float: left;
    -webkit-filter:contrast(2);
  }
  .titlearea{
    background-color: #eff5f5;
    border-radius:20px;
    width: 50%;
    text-align: center;
  }
  footer{
    top:100%;
    background-color:#5c8a8a;
    height: 200px;
    width:100%;
  }
</style>
<body style="font-family: 'cwTeXYen', sans-serif;">
  <div class="container">
    <div style="width:100% ; height:5%">&nbsp;</div>
    <div>
      <div style=" width:100%;background-color:#f2f2f2;display:inline-block;">

          <img class="pic1" src="{{$map->picture}}">

        <div style="text-align:center;padding-top:5%;">

          <img src="/icon.png" width="40px;"style="display:inline-block;">
          <h1 style="border-bottom:white solid 1px;display:inline-block;">{{ $map->tname }}</h1>
        </div>

      </div>

    </div>

    <div class="titlearea">
      @if (isset($posts))
        <ol>
        @foreach($posts as $post)
          @if($post->tid==$map->id)
          <li>{{ link_to('home/'.$post->id.'/location',$post->subject) }}
            @if(Auth::user())
            <form action="{{ url('home/'.$post->id.'location') }}" method="POST">
              {!! csrf_field() !!}
              {!! method_field('DELETE') !!}
              <button type="submit" id="delete-posts-{{ $post->id }}">刪除</button>
            </form>
            <form action="{{ url('home/'.$post->id.'/location/edit') }}" method="GET">
              <button type="submit" id="edit-posts-{{ $post->id }}">編輯</button>

            @endif
          @endif
        @endforeach
        </ol>
      @endif
    </div>
    <img src="/upload.png" class="upload" data-toggle="modal" data-target="#myModal">
    <div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">新增</h4>
      </div>
      <div class="modal-body">
        <form  role="form" method="POST" action="{{ url('home/'.$post->id) }}">
            {{ csrf_field() }}
                <label for="name" >地點名稱</label>
                <input id="name" type="textarea"  name="subject"><br>
                <label for="name" >文案</label>
                <input id="name" type="text"  name="content"><br>
                <label for="name" >地圖連結</label>
                <input id="name" type="textarea"  name="connection"><br>
                <input id="name" type="text"  name="tid" placeholder="{{ $map->id }}">
                <button type="submit" class="btn btn-primary">
                    確認
                </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<footer>
  <br>
  <h3 style="margin-left:50px;font-family:monospace;"><img src="/about.png" width="18px"><a style="text-decoration:none; color:#fff;" href="#">&nbsp;關於我們</a></h3>
  <h3 style="margin-left:50px;font-family:monospace;"><img src="/fb.png" width="18px"><a style="text-decoration:none; color:#fff;" href="#">&nbsp;NCUx中大磨課師</a></h3>
  <h4 style="font-family:monospace;color:#666666;position:relative;top:70px;text-align:center;">© N C U X 中 大 磨 課 師&nbsp;</h4>
</footer>
  </div>

</body>
