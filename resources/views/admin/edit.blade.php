@include('navbar')
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<body>
  <div style="width:100% ; height:10%;"></div>
  <form method="POST" action="{{ url('home/'.$maps->id) }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <label for="name">地點名稱</label>
    <textarea name="tname">{{ $maps->tname }}</textarea>
    <label for="name">種類編號</label>
    <textarea name="kid">{{ $maps->kid }}</textarea>


    <div class="input-group">
      <span class="input-group-btn">
        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
          <i class="fa fa-picture-o"></i> Choose
        </a>
      </span>
      <input id="thumbnail" class="form-control" type="text" name="picture" value="{{$maps->picture}}">
    </div>
    <img id="holder" style="margin-top:15px;max-height:100px;">
    <button type="submit" class="btn btn-primary">確認</button>
  </form>
  <script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script>
  <script>
  $('#lfm').filemanager('image');
  </script>
</body>
