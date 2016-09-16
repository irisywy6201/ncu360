<html>
<head>
  <meta charset="utf-8">

</head>
<style>
  body{
    margin-top: 0px;
    margin: 0px;
    padding: 0px;
    /*background-image: url("/bckgrd.jpg");*/
  }
  ul { /* 取消ul預設的內縮及樣式 */
    list-style-type: none;
    margin: 0;
    padding: 0;
    /*opacity: 0.95;*/
    background-color: #476b6b;

    font-family: 微軟正黑體;

    }

    ul.drop-down-menu {
        border: #000 0px solid;
        display: inline-block;
        font-family: 'Open Sans', Arial, sans-serif;
        font-size: 17px;
    }

    ul.drop-down-menu li {
        position: relative;
        white-space: nowrap;
        border-right: #000 0px solid;
    }

    ul.drop-down-menu > li:last-child {
        border-right: none;
    }

    ul.drop-down-menu > li {
        float: left; /* 只有第一層是靠左對齊*/
    }

     ul.drop-down-menu a {
        background-color: #476b6b;
        color: #ebebe0;
        display: block;
        padding: 0 30px;
        text-decoration: none;
        line-height: 50px;

    }
    ul.drop-down-menu a:hover { /* 滑鼠滑入按鈕變色*/
        background-color: #ebebe0;
        color: #476b6b;
    }
    ul.drop-down-menu li:hover > a { /* 滑鼠移入次選單上層按鈕保持變色*/
        background-color:#ebebe0;
        color: #476b6b;
    }
    ul.drop-down-menu ul {
         border: #ccc 0.5px solid;
         position: absolute;
         z-index: 99;
         left: -1px;
         top: 100%;
         min-width: 20%;
     }

     ul.drop-down-menu ul li {
         border-bottom: #ccc 0px solid;
     }

     ul.drop-down-menu ul li:last-child {
         border-bottom: none;
     }

     ul.drop-down-menu ul ul { /*第三層以後的選單出現位置與第二層不同*/
         z-index: 999;
         top: 10px;
         left: 90%;
     }
     ul.drop-down-menu ul { /*隱藏次選單*/
             left: 99999px;
             opacity: 0;
             -webkit-transition: opacity 0.3s;
             transition: opacity 0.3s;
         }

         ul.drop-down-menu li:hover > ul { /* 滑鼠滑入展開次選單*/
             opacity: 1;
             -webkit-transition: opacity 0.3s;
             transition: opacity 0.3s;
             left: -1px;
             border-right: 5px;
         }

         ul.drop-down-menu li:hover > ul ul { /* 滑鼠滑入之後、次選單之後的選單依舊隱藏*/
             left: 99999px;
         }

         ul.drop-down-menu ul li:hover > ul { /* 第二層之後的選單展開位置*/
             left: 90%;
         }
  .maincho{
    width:100%;
    background-color:#476b6b;
    padding:0;
    margin-top: 0px;
    margin-left: 0px;
    position: fixed;
    left:0px;
    z-index: 10;
  }


</style>

</script>
<body>
<div class="container">
  <div>
    <div class="maincho">
      <ul class="drop-down-menu">
              <li><a href="{{ url('home/') }}">看見中央</a>
              </li>
              <li id="arrow1"><a href="#">行政服務</a>
                <ul>
                  <li><a href="#">行政大樓</a>
                  </li>
                  <li><a href="#">宿舍服務中心</a>
                  </li>
                  <li><a href="#">總圖書館</a>
                  </li>
                  <li><a href="#">中正圖書館</a>
                  </li>
                  <li><a href="#">國鼎</a>
                  </li>
                  <li><a href="#">中大會館</a>
                  </li>
                  <li><a href="#">志希館</a>
                  </li>
                  <li><a href="#">依仁堂</a>
                  </li>
                  <li><a href="#">大講堂</a>
                  </li>
                </ul>
              </li>
              <li id="arrow2"><a href="#">教學研究</a>
                <ul>
                  <li ><a href="{{ url('post') }}">綜教館</a>
                  </li>
                  <li ><a href="#">文學院</a>
                    <ul>
                      <li><a href="#">文學一館</a>
                      </li>
                      <li><a href="#">文學二館</a>
                      </li>
                      <li><a href="#">人文社會科學大樓</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">理學院</a>
                    <ul>
                      <li><a href="#">鴻經管</a>
                      </li>
                      <li><a href="#">健雄館</a>
                      </li>
                      <li><a href="#">理學院教學館</a>
                      </li>
                      <li><a href="#">科學二館</a>
                      </li>
                      <li><a href="#">科學三館</a>
                      </li>
                      <li><a href="#">科學五館</a>
                      </li>
                      <li><a href="#">光電大樓</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">工學院</a>
                    <ul>
                      <li><a href="#">工程一館</a>
                      </li>

                      <li><a href="#">機械館</a>
                      </li>
                      <li><a href="#">實習一廠</a>
                      </li>
                      <li><a href="#">實習三廠</a>
                      </li>
                      <li><a href="#">環工化工館</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">管理學院</a>
                    <ul>
                      <li><a href="#">管理二館</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">資電學院</a>
                    <ul>
                      <li><a href="#">工程五館</a>
                      </li>
                      <li><a href="#">工程二館</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">地科學院</a>
                    <ul>
                      <li><a href="#">科學一館</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">客家學院</a>
                  </li>
                  <li><a href="#">生醫理工學院</a>
                  </li>
                </ul>
              </li>
              <li><a href="#">休閒生活</a>
                <ul>
                  <li><a href="#">休閒景點</a>
                  </li>
                  <li><a href="#">郵局</a>
                  </li>
                </ul>
              </li>
              <li><a href="#">飲食</a>
              </li>
              <li><a href="#">運動</a>
              </li>
              <li><a href="#">宿舍</a>
              </li>
              @if(Auth::guest())

              @else
              <li><a href="{{ url('/register') }}">Register</a></li>
              <li>
                  <a href="#">
                      {{ Auth::user()->name }}
                  </a>

                  <ul>
                      <li>
                          <a href="{{ url('/logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endif

          </ul>
  </div>

</body>
</html>
