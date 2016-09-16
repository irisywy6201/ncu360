@include('navbar')
<html>
<head>
  <title>{{ $post->subject }}</title>

</head>
<style>
  body{
    background-image: url("/bckgrd.jpg");
    background-repeat: repeat;

  }
  .map{
    z-index: -9;
    margin: 0px;
    padding: 0px;

  }
  .locationicon{
    background-color:#000;
    color: white;
    font-family: 微軟正黑體;
    font-size: 18px;
    width: 99%;
    padding-left:1%;
  }
  .text{
    font-family:微軟正黑體;
    color:#0d0d0d;
    padding-left: 5%;
    width: 70%;
  }
  footer{
    top:100%;
    background-color:#5c8a8a;
    height: 200px;
    width:100%;
  }
</style>
<body>
  <div class="container">
    <div style="width:100%;height:10%">&nbsp;</div>
    <div class="locationicon">
      <img src="/icon.png" width="25px;"style="padding-right:1px;display:inline-block;padding-bottom:-2px;"><p style="display:inline-block;">{{ $post->subject }}</p>
    </div>
    <div class="map">

      <iframe src="{{ $post->connection }}" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="text">
      <h2>{{ $post->subject }}</h2>
      <p>{{ $post->content }}</p>
      {{link_to(URL::previous(),'回上一頁')}}
    </div>
    <footer>
      <br>
      <h3 style="margin-left:50px;font-family:monospace;"><img src="/about.png" width="18px"><a style="text-decoration:none; color:#fff;" href="#">&nbsp;關於我們</a></h3>
      <h3 style="margin-left:50px;font-family:monospace;"><img src="/fb.png" width="18px"><a style="text-decoration:none; color:#fff;" href="#">&nbsp;NCUx中大磨課師</a></h3>
      <h4 style="font-family:monospace;color:#666666;position:relative;top:70px;text-align:center;">© N C U X 中 大 磨 課 師&nbsp;</h4>
    </footer>


</body>
</html>
