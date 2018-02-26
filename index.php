<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Yenten coin - Yenten-pool.ml Faucet</title>
<meta name="robots" content="noindex,nofollow, noodp,noydir"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="maValidation" content="e82052b9150719960116d6fbe762f40f" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body style="background:#e3f0fb; margin: 30px; padding-top: 50px;">
<?php
	require_once("jsonRPCClient.php");

$alt = new jsonRPCClient('http://login:parol@127.0.0.1:9982');
	?>


<style>
.faucet-nav {
    text-shadow: 0 -1px 0 rgba(0,0,0,.15);
    background-color: #3D597C;
    border-color: #5478A5;
    box-shadow: 0 1px 0 rgba(255,255,255,.1);
}
.faucet-nav .navbar-nav>.active>a, .faucet-nav .navbar-nav>.active>a:hover {
    color: #fff;
    background-color: #2F4561;
}
.faucet-nav .navbar-nav>li>a {
    color: #BFE0E3;
}
.faucet-nav .navbar-brand {
    color: #fff;
}
</style>

<div class="navbar navbar-inverse navbar-fixed-top faucet-nav" role="navigation">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Yenten Faucet</a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li class="active"><a href="#">Home</a></li>
<li><a href="http://www.bubasik.com/yenten-coin-tablica-skorosti-majninga-na-processore/">Speed table CPU</a></li>
<li><a href="http://www.bubasik.com/yenten-coin-ytn-majning-pool-valyuta-dlya-cpu/">О монете</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">How to <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="http://www.bubasik.com/how-to-use-faucet-yenten-coin-free-coins/">How to use faucet Yenten Coin — free coins</a></li>
<li><a href="http://www.bubasik.com/how-to-install-and-setup-yenten-coin-wallet-on-windows/">How to install and setup Yenten Coin wallet on windows</a></li>
<li><a href="http://www.bubasik.com/how-to-install-the-yiimp-pool-on-the-ubuntu-16-04-server-and-configure-yenten-coin-stratum-yescryptr16/">How to install the yiimp pool on the ubuntu 16.04 server and configure yenten coin</a></li>
</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Инструкции <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="http://www.bubasik.com/kran-yenten-coin-kak-polzovatsya-ytn-besplatnaya-razdacha-monet/">Кран Yenten Coin как пользоваться, YTN — бесплатная раздача монет</a></li>
<li><a href="http://www.bubasik.com/kak-ustanovit-i-nastroit-koshelek-yenten-coin-v-windows/">Как установить и настроить кошелек yenten coin в windows</a></li>
<li><a href="http://www.bubasik.com/ustanavlivaem-pul-yiimp-pool-na-server-ubuntu-16-04-i-nastraivaem-yenten-coin-stratum-yescryptr16/">Устанавливаем пул yiimp pool на сервер ubuntu 16.04 и настраиваем yenten coin</a></li>
<li><a href="http://www.bubasik.com/ustanavlivaem-ununtu-live-usb-na-fleshku-kompiliruem-majner-cpuminer-opt-i-dobyvaem-yenten-coin-vyyasnyaem-raznicu-majninga-yenten-coin-v-linux-i-windows/">Устанавливаем Ununtu live usb на флешку, компилируем майнер cpuminer-opt</a></li>
</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pools for mining<b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="http://yenten-pool.ml/">yenten-pool.ml</a></li>
<li><a href="#">...</a></li>
</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Forums<b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="https://forum.bits.media/index.php?/topic/61231-ytn-cpu-mining-yenten-v131-%D0%B0%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC-yescryptr16/">Russian Forum</a></li>
<li><a href="https://bitcointalk.org/index.php?topic=2329470.new#new">World Forum</a></li>
</ul>
</li>
<li><a target="_blank" href="https://bitflip.cc/?ref=1596oiqhiaxj">Биржа (stock)</a></li>
</ul>
</div>
</div>
</div>


<div id="container">
<div class="row">
<div class="col-md-4 col-md-offset-4" style="font-size: 13px;">
<img style="width: 95px; float: left; margin-right: 10px;" src="logo.png">  
Yenten is a cryptocurrency of the cpu, by the cpu, for the cpu.
<br>No ASIC mineable.
<br>Mining coins at using PC. On any PC! Anyone. 
<br>It's great!
</div>
</div>
<div class="row">
	<div class="col-md-12" style="margin-top: 4px;">
	<h1 align="center">Yenten-pool.ml Faucet</h1>
  <h2 align="center">The best crypto currency for mining on cpu.</h2>
<div align="center">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- pool - adaptive - 1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7194611144688008"
     data-ad-slot="1713173598"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br>
<script type="text/javascript"><!--
zone = "30";
pl = "5927";
url = "https://bitraffic.com";
//--></script>
<script type="text/javascript" src="https://bitraffic.com/show.js"></script>

<ins class="bmadblock-5a84123c52a8140020e41de8" style="display:inline-block;width:728px;height:90px;"></ins>
<script async type="application/javascript" src="//ad.bitmedia.io/js/adbybm.js/5a84123c52a8140020e41de8"></script>

</div>  
	</div>
</div>
<div class="row">
<div id="error" class="col-md-4 col-md-offset-4" style="margin-top: 5px; margin-bottom: 5px;">
</div>
</div>
<div class="row">
<div class="col-md-4 col-md-offset-3" style="margin-top: 25px; margin-bottom: 30px;">
<form role="form"  id="faucet">
  <div class="form-group">
    <label for="address">Yenten Address</label>
    <input type="address" name="address" class="form-control" id="address" placeholder="YXMimwx7AHmDe1L6CssCpD4i6f6gg8UFML">
  </div>
   <div class="captcha_wrapper">
	<div class="g-recaptcha" data-sitekey="6LfBGEIUAAAAAGQM9FSpVpf9yAhkGm4oRWfEi7l2"></div>
		<br/>
	</div>
<!--  <button type="submit" class="btn btn-default" name="submit">Submit</button> -->
  
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Submit
</button>

<!-- Modal  modal-lg -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Confirm submit Yenten</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<div align="center">
<!-- место при нажатии на кнопку  -->
<iframe data-aa='838911' src='https://acceptable.a-ads.com/838911' scrolling='no' style='border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>
<br><br>
<button type="submit" class="btn btn-default" name="submit">Submit</button>

<br>
<ins class="bmadblock-5a84135d52a8140020e41e0d" style="display:inline-block;width:300px;height:250px;"></ins>
<script async type="application/javascript" src="//ad.bitmedia.io/js/adbybm.js/5a84135d52a8140020e41e0d"></script>

</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>  

</form>
</div>

<div align="center" style="text-align: center; float: left;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- pool - right 3 -->
<ins class="adsbygoogle"
     style="display:block;float: right;max-width:300px;height:250px"
     data-ad-client="ca-pub-7194611144688008"
     data-ad-slot="4824820041"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br>
<!-- место срава от формы логирования -->
<iframe data-aa='838911' src='https://acceptable.a-ads.com/838911' scrolling='no' style='border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>

</div>

</div>


<div class="row">
<div class="col-md-6" style="margin-top: 30px; ">
Yenten coin — Японская свежая валюта для майнига на CPU. 
<p>Посмотрим на неё поближе и решим, можно ли её майнить на простом офисном комьютере.</p>
<p>Обозначение валюты — YTN<br>
  Валюта появилась — 28 октября 2017г.<br>
  Официальный сайт - <a href="https://conan-equal-newone.github.io/yenten/index2.html" target="_blank">https://conan-equal-newone.github.io/yenten/index2.html</a></p>
<p>Клиент есть 32 и 64 битный, что конечно плюс.<br>
  Есть solo майнинг, но он настраивается через конфиг сайта кошелка и для большинства 
  народа он не интересен.<br>
  Алгоритм для майнинга - YescryptR16</p>
<p>Программы для майнинга (cpu mining):<br>
  - cpuminer-opt -windows — скачать <a href="https://github.com/JayDDee/cpuminer-opt/releases" target="_blank">cpuminer-opt</a><br>
  - yenten_minerd_win64</p>
<p>Майнить можно на 64 и 32 битных системах, алгоритму не обязателен AVX, но с 
  ним будет значительно быстрее (x32 на amd не работает).</p>
<p>На процессоре G3250 получается: 320 H/s</p>
<p>За один блок дают 50 YTN, так что еще есть время набрать побольше монеток, 
  пока сложность майнинга не очень высокая.</p>
</div>
<div class="col-md-6" style="margin-top: 30px; ">
Yenten is a cryptocurrency of the cpu, by the cpu, for the cpu. No ASIC mineable.
<p>Website - <a href="https://conan-equal-newone.github.io/yenten/" target="_blank">https://conan-equal-newone.github.io/yenten/</a></p>
<p>Algorithm: YescryptR16 (GPU is slower than CPU) <br>
  Block time: 2.0 minutes <br>
  Max Block size: 2M <br>
  Block reward of block #1: 50 YTN <br>
  Total YTN: 84,000,000 YTN <br>
  SubsidyHalvingInterval: 800,000 blocks <br>
  Difficulty re-target: every block (DarkGravityWave v3-1) <br>
  Premine: none <br>
  P2P Port: 9981 <br>
  RPC Port: 9982 </p>
<p><a href="https://github.com/JayDDee/cpuminer-opt/releases" target="_blank">Download</a> 
  cpuminer-opt -windows</p>
<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script><div class="coinmarketcap-currency-widget" data-currency="yenten" data-base="USD" data-secondary="BTC" data-ticker="true" data-rank="true" data-marketcap="false" data-volume="true" data-stats="USD" data-statsticker="true">  
</div>
</div>

<div class="row">
<div class="col-md-6 col-md-offset-3" style="margin-top: 30px; ">


<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- pool - adaptive - 1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7194611144688008"
     data-ad-slot="1713173598"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

<h5 align="center">Faucet Balance: <?php print_r($alt->getbalance()); ?> | YTN 1 to 3 payout.
<br><br>
 Donate to the faucet: <a href="YXMimwx7AHmDe1L6CssCpD4i6f6gg8UFML">YXMimwx7AHmDe1L6CssCpD4i6f6gg8UFML</a>
<br><br>
<a href="http://yenten-pool.ml/faucet/" target="_blank">yenten-pool.ml/faucet/</a> <?php echo date("Y") ?> </h5>
</div>
</div>
</div>

<script src="faucet.js?ver2"></script>
<!--LiveInternet counter--><script type="text/javascript">
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t26.12;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,150))+";"+Math.random()+
"' alt='' title='LiveInternet: показано число посетителей за"+
" сегодня' "+
"border='0' width='1' height='1'><\/a>")
</script><!--/LiveInternet-->

</body>

</html>
