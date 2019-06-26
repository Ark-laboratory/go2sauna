<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible"
content="IE=edge">
<meta name="viewport" content="width=device-width,
initial-scale=1">
  <title>World</title>
  <link rel="stylesheet" type="text/css" href="modules/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link  href="modules/fotorama/fotorama.css" rel="stylesheet">
  <script src="modules/fotorama/fotorama.js"></script>
  <link rel="stylesheet" type="text/css" href="modules/popup/magnific-popup.css">
  <script type="text/javascript" src="modules/popup/query.js"></script>

</head>
<body>
<header class="header container-fluid">
  <div class="navcont"><nav><img src=""></nav>
  <div class="logo" style="margin-left: 85%; font-family: sans-serif;"><a href="" style="text-decoration: none; color: white;"><h1 style="font-size: 3vw">Sauna<span style="color: #FFD700; font-size: 4vw">2</span>.ru</h1></a></div>
  </div>
  <div class="citycont">
  <p class="citytxt">Ваш город:</p>
  <ul class="city" id="inline-popups">
    <li id="c1"><a href="#test-popup" data-effect="mfp-zoom-in">Самара</a></li>
  </ul>
  <div id="test-popup" class="white-popup mfp-with-anim mfp-hide">
  <ul>
    <li id="c2"><a href="#">Казань</a></li>
    <li id="c3"><a href="#">Тольятти</a></li>
    <li id="c4"><a href="#">Екатеринбург</a></li>
  </ul>
</div>

  </div>
</header>
<main class="container mainer">

  <div class="filter jumbotron" >filter</div>
  <div class="maine">

    <div class="maps" style="height: 6% ;background: white;padding-left: 5%;box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.26);margin-left: 10px;margin-right: 10px">map</div>

    <div id="content" class="content">

      <div id="id1" class="elofcont" style="margin:10px;width:97%;background: white;padding: 15px 15px 5px;box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.26);">

          <div class="name-of-elem-cont"><h2>Name</h2><p class="adre h2">Adress</p></div>
          <hr>
          <div class="wrap container">
              <div class="row cont-of-desc">
                <div class="slider-wrapper">
             <div class="fotorama fotorama1561579818121"  data-fit="scaledown" data-width="100%" data-ratio="900/300" data-nav="thumbs" data-vertical="true" data-allowfullscreen="true" data-arrows="true" data-click="false" data-nav-inside="false" style="margin-bottom: 10px;cursor: pointer; ">
                  <a href="1.jpg"><img src="img/1.jpg" width="128" height="64"></a>
                  <a href="2.jpg"><img src="img/2.jpg" width="128" height="64"></a>
                  <a href="3.jpg"><img src="img/3.jpg" width="128" height="64"></a>
                  <a href="4.jpg"><img src="img/4.jpg" width="128" height="64"></a>
                </div>
                </div>
              <div class="desc-cont">
                <div class="price">от 900 руб</div>
                <hr>
                <div class="desc-table">
                  <div class="types-desc"><p class="type-desc">1</p><p class="type-desc">2</p><p class="type-desc">3</p></div>
                  <div class="values-desc"><p class="value-desc">a</p><p class="value-desc">b</p><p class="value-desc">c</p></div>
                </div>
                </div>
              </div>
              <div class="row but-cont">
                <button type="button" class="btn btn-warning">Подробнее</button>
              </div>
            </div>
          </div>
            </div>
           </div>
    </div>
</main>

<footer class="container-fluid">
  
</footer>


<script type="text/javascript">
  // Inline popups
$('#inline-popups').magnificPopup({
  delegate: 'a',
  removalDelay: 500, //delay removal by X to allow out-animation
  callbacks: {
    beforeOpen: function() {
       this.st.mainClass = this.st.el.attr('data-effect');
    }
  },
  midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
});
</script>
<script type="text/javascript" src="modules/jquery-3.4.1.js"></script>
<script type="text/javascript" src="modules/js/bootstrap.js"></script>

</body>
</html>

