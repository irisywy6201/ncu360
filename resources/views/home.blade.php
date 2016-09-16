@include('navbar')

<html>
<head>
  <meta charset="utf-8">
  <script src="js/jquery2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/picshow.css"/>
  <link rel="stylesheet" type="text/css" href="css/modal.css"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script src="js/modernizr.custom.97074.js"></script>
  <noscript><link rel="stylesheet" type="text/css" href="css/noJS.css"/></noscript>
  <title>NUCX</title>
</head>
<style>
  body{
    background-color: #f5f5ef;
  }
  .bck{
    padding: 0px;
    margin: 0px;
    background-image: url("21bck.jpg");
    background-size:cover;
    height: 100%;
    width: 100%;
  }


  #arrow{
    position:absolute;
    top:85%;
    right:2%;
    opacity: 0.7;

  }
  #arrow:hover{
    transform: scale(1.2,1.2);
    opacity: 1;
  }
  }

.upload{
  position:fixed;
  left:100%;
  top:99%;
  opacity: 0.85;
}
.upload:hover{
  opacity: 1;
  transform: scale(1.2,1.2);
  cursor: hand;
}
.maincho{
  width:100%;

  padding:0;
  margin-top: 0px;
  margin-left: 0px;
  position: fixed;
  left:0px;
  z-index: 10;
}
footer{
  background-color:#5c8a8a;
  height: 200px;
  width:100%;
  float:left;
  top:100%;


}


</style>
<script src="js/jquery.min.js" language="javascript"></script>
<script type="text/javascript" src="js/model1.js"></script>
<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
<script language="javascript">
$(function(){
  $('#arrow').click(function(){
     $('html,body').animate({scrollTop:$('#test').offset().top},900);
     });

});
</script>
<body>


  <div class="container" >
    <div id="gal">
    <nav class="galnav">
    <ul>
    <li>
    <input type="radio" name="btn" value="one" checked="checked"/>
    <label for="btn"></label>
    <figure>
    <img src="images/cover4.png"/>

    </figure>
    </li>
    <li>
    <input type="radio" name="btn" value="two"/>
    <label for="btn"></label>
    <figure>
    <img src="images/cover1.png"/>

    </figure>
    </li>

    <li>
    <input type="radio" name="btn" value="three"/>
    <label for="btn"></label>
    <figure>
    <img src="images/cover2.png"/>

    </figure>
    </li>

    <li>
    <input type="radio" name="btn" value="four"/>
    <label for="btn"></label>
    <figure>
    <img src="images/cover5.png"/>

    </figure>
    </li>

    <li>
    <input type="radio" name="btn" value="five"/>
    <label for="btn"></label>
    <figure>
    <img src="images/cover3.png"/>

    </figure>
    </li>

    </ul>
    </nav>
    </div>


    <div style="margin-top:5%;">
    <!-- <img id="arrow" src="arrow.png" style="cursor: pointer;"> -->

    <div id="test" style="margin-left:8%;"><p style="font-size:28px;font-weight:800;color:#00bbd6;padding:10px;border-left:5px solid #00bbd6;line-height:2rem;">
      1.行政服務</p>
    </div>
    <div style="width:97%;">
      <div>
        @if (isset($maps))
          <ul id="da-thumbs" class="da-thumbs">
          @foreach($maps as $map)
            @if(($map->kid==1))
            <li>
              <a href="{{ url('home/'.$map->id) }}">
                <img src="{{$map->picture}}" style="width:330px;height:248px;">
                <div><span>{{ $map->tname }}</span></div>
              </a>
              <p style="color:gray;">{{ $map->tname }}</p><br>
              @if(Auth::user())
              <form action="{{ url('home/'.$map->id) }}" method="POST">
                {!! csrf_field() !!}
                {!! method_field('DELETE') !!}
                <button type="submit" id="delete-buildings-{{ $map->id }}">刪除</button>
              </form>
              <form action="{{ url('home/'.$map->id.'/edit') }}" method="GET">
                <button type="submit" id="edit-buildings-{{ $map->id }}">edit</button>

              @endif
            </li>
            @endif
          @endforeach
          </ul>
        @endif
      </div>
    </div>

    <div style="width:90%;float:left;margin-left:8%;"><p style="font-size:28px;font-weight:800;color:#00bbd6;padding:10px;border-left:5px solid #00bbd6;line-height:2rem;">
      2.教學研究</p>
    </div>
    <div style="width:95%;">
      <div>
        @if (isset($maps))
          <ul id="da-thumbs" class="da-thumbs">
          @foreach($maps as $map)
            @if(($map->kid==2))
            <li>
              <a href="{{ url('home/'.$map->id) }}">
                <img src="{{$map->picture}}" style="width:330px;height:248px;">
                <div><span>{{ $map->tname }}</span></div>
              </a>
              <p style="color:gray;">{{ $map->tname }}</p><br>
              @if(Auth::user())
              <form action="{{ url('home/'.$map->id) }}" method="POST">
                {!! csrf_field() !!}
                {!! method_field('DELETE') !!}
                <button type="submit" id="delete-buildings-{{ $map->id }}">刪除</button>
              </form>
              <form action="{{ url('home/'.$map->id.'/edit') }}" method="GET">
                <button type="submit" id="edit-buildings-{{ $map->id }}">edit</button>

              @endif
            </li>
            @endif
          @endforeach
          </ul>
        @endif
      </div>
    </div>

    <div style="width:90%;float:left;margin-left:8%;"><p style="font-size:28px;font-weight:800;color:#00bbd6;padding:10px;border-left:5px solid #00bbd6;line-height:2rem;">
      3.休閒生活</h2>
    </div>
    <div style="width:95%;">
      <div>
        @if (isset($maps))
          <ul id="da-thumbs" class="da-thumbs">
          @foreach($maps as $map)
            @if(($map->kid==3))
            <li>
              <a href="{{ url('home/'.$map->id) }}">
                <img src="{{$map->picture}}" style="width:330px;height:248px;">
                <div><span>{{ $map->tname }}</span></div>
              </a>
              <p style="color:gray;">{{ $map->tname }}</p><br>
              @if(Auth::user())
              <form action="{{ url('home/'.$map->id) }}" method="POST">
                {!! csrf_field() !!}
                {!! method_field('DELETE') !!}
                <button type="submit" id="delete-buildings-{{ $map->id }}">刪除</button>
              </form>
              <form action="{{ url('home/'.$map->id.'/edit') }}" method="GET">
                <button type="submit" id="edit-buildings-{{ $map->id }}">edit</button>

              @endif
            </li>
            @endif
          @endforeach
          </ul>
        @endif
      </div>
    </div>

    <div style="width:90%;float:left;margin-left:8%"><p style="font-size:28px;font-weight:800;color:#00bbd6;padding:10px;border-left:5px solid #00bbd6;line-height:2rem;">
      4.飲食</h2>
    </div>
    <div style="width:95%;">
      <div>
        @if (isset($maps))
          <ul id="da-thumbs" class="da-thumbs">
          @foreach($maps as $map)
            @if(($map->kid==4))
            <li>
              <a href="{{ url('home/'.$map->id) }}">
                <img src="{{$map->picture}}" style="width:330px;height:248px;">
                <div><span>{{ $map->tname }}</span></div>
              </a>
              <p style="color:gray;">{{ $map->tname }}</p><br>
              @if(Auth::user())
              <form action="{{ url('home/'.$map->id) }}" method="POST">
                {!! csrf_field() !!}
                {!! method_field('DELETE') !!}
                <button type="submit" id="delete-buildings-{{ $map->id }}">刪除</button>
              </form>
              <form action="{{ url('home/'.$map->id.'/edit') }}" method="GET">
                <button type="submit" id="edit-buildings-{{ $map->id }}">edit</button>

              @endif
            </li>
            @endif
          @endforeach
          </ul>
        @endif
      </div>
    </div>

    <div style="width:90%;float:left;margin-left:8%"><p style="font-size:28px;font-weight:800;color:#00bbd6;padding:10px;border-left:5px solid #00bbd6;line-height:2rem;">
      5.運動</h2>
    </div>
    <div style="width:95%;">
      <div>
        @if (isset($maps))
          <ul id="da-thumbs" class="da-thumbs">
          @foreach($maps as $map)
            @if(($map->kid==5))
            <li>
              <a href="{{ url('home/'.$map->id) }}">
                <img src="{{$map->picture}}" style="width:330px;height:248px;">
                <div><span>{{ $map->tname }}</span></div>
              </a>
              <p style="color:gray;">{{ $map->tname }}</p><br>
              @if(Auth::user())
              <form action="{{ url('home/'.$map->id) }}" method="POST">
                {!! csrf_field() !!}
                {!! method_field('DELETE') !!}
                <button type="submit" id="delete-buildings-{{ $map->id }}">刪除</button>
              </form>
              <form action="{{ url('home/'.$map->id.'/edit') }}" method="GET">
                <button type="submit" id="edit-buildings-{{ $map->id }}">edit</button>

              @endif
            </li>
            @endif
          @endforeach
          </ul>
        @endif
      </div>
    </div>

    <div style="width:90%;float:left;margin-left:8%"><p style="font-size:28px;font-weight:800;color:#00bbd6;padding:10px;border-left:5px solid #00bbd6;line-height:2rem;">
      6.宿舍</p>
    </div>
    <div style="width:95%;">
      <div>
        @if (isset($maps))
          <ul id="da-thumbs" class="da-thumbs">
          @foreach($maps as $map)
            @if(($map->kid==6))
            <li>
              <a href="{{ url('home/'.$map->id) }}">
                <img src="{{$map->picture}}" style="width:330px;height:248px;">
                <div><span>{{ $map->tname }}</span></div>
              </a>
              <p style="color:gray;">{{ $map->tname }}</p><br>
              @if(Auth::user())
              <form action="{{ url('home/'.$map->id) }}" method="POST">
                {!! csrf_field() !!}
                {!! method_field('DELETE') !!}
                <button type="submit" id="delete-buildings-{{ $map->id }}">刪除</button>
              </form>
              <form action="{{ url('home/'.$map->id.'/edit') }}" method="GET">
                <button type="submit" id="edit-buildings-{{ $map->id }}">編輯</button>

              @endif
            </li>
            @endif
          @endforeach
          </ul>
        @endif
      </div>
    </div>
  </div>
    @if(Auth::user())
    <img src="upload.png" class="upload" data-toggle="modal" data-target="#myModal" style="position:fixed;bottom:2%;right:2%;">
    @endif
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <form  role="form" method="POST" action="{{ url('home') }}">
              {{ csrf_field() }}
              <label for="name" >地點名稱</label>
              <input id="name" type="text"  name="tname"><br>
              <label for="name" >種類編號</label>
              <input id="name" type="text"  name="kid"><br>

              <div class="input-group">
                <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                    <i class="fa fa-picture-o"></i> Choose
                  </a>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="picture" value="{{$map->picture}}">
              </div>
              <img id="holder" style="margin-top:15px;max-height:100px;">

              <button type="submit" class="btn btn-primary">確認</button>
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
    @if(Auth::guest())
    <h3 style="margin-left:50px;font-family:monospace;"><img src="/people.png" width="18px"><a style="text-decoration:none; color:#fff;" href="{{ url('adminlogin') }}">&nbsp;管理者登入</a></h3>
    @endif
    <h4 style="font-family:monospace;color:#666666;position:relative;top:70px;text-align:center;">© N C U X 中 大 磨 課 師&nbsp;</h4>

  </footer>

  <script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script>
  <script>
  $('#lfm').filemanager('image');
  </script>

  <script type="text/javascript">
    $(function() {
      $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
    });

  </script>
</div>
</body>
</html>
