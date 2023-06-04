<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TGKXNV7');
  </script>
  <!-- End Google Tag Manager -->

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="個人でWeb開発をしているBuchiのポートフォリオサイトです。
    このページでは、SlickやjQuery-cookie.jsなど、jQueryのプラグインを使った機能を、素のJavaScriptのみを使って出来るだけ忠実に再現したものを掲載しています。">
  <link rel="canonical" href="https://www.buchi.work/pages/works/js-work.php">
  <title>js_works_BUCHI</title>
  <!-- ********** meta OGP ********** -->
  <meta property="og:site_name" content="Buchiのポートフォリオサイト">
  <meta property="og:title" content="Buchiのポートフォリオサイト">
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://www.buchi.work/pages/works/js-work.php">
  <meta property="og:image" content="https://www.buchi.work/img/meta/ogp-js-works.jpg">
  <meta property="og:description" content="個人でWeb開発をしているBuchiのポートフォリオサイトです。
    このページでは、SlickやjQuery-cookie.jsなど、jQueryのプラグインを使った機能を、素のJavaScriptのみを使って出来るだけ忠実に再現したものを掲載しています。">
  <meta name="twitter:card" content="summary_large_image">
  <!-- ********** favicon ********** -->
  <link rel="icon" href="https://buchi.work/favicon/favicon.ico">
  <link rel="apple-touch-icon" href="https://buchi.work/favicon/apple-touch-icon-180-180.png">
  <link rel="icon" type="image/png" href="https://buchi.work/favicon/android-chrome-192-192.png">
  <!-- ********** css ********** -->
  <link rel="stylesheet" href="../../css/common.css">
  <link rel="stylesheet" href="../css/pages.css">
  <link rel="stylesheet" href="../../iFrames/css/iFrame.css">
  <!-- ********** パンクズ 構造化データ ********** -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "TOP",
        "item": "https://www.buchi.work/"
      }, {
        "@type": "ListItem",
        "position": 2,
        "name": "JAVASCRIPT WORKS",
        "item": "https://www.buchi.work/pages/works/js-work.php"
      }]
    }
  </script>
</head>

<body style="background: var(--base-bg)">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGKXNV7" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- loading html -->
  <div id="loader" class="page-loading">
    <div class="spinner">
      <div class="cube1"></div>
      <div class="cube2"></div>
    </div>
    <p class="loading">buchi.works</p>
  </div>

  <script>
    window.onload = () => {
      const loader = document.getElementById('loader');
      loader.classList.add('loaded');
    }
  </script>
  <!-- /loading html -->

  <!-- ************************* -->
  <!-- header -->
  <!-- ************************* -->
  <?php
  include("../../_php_app/_parts/_header.php");
  ?>

  <!-- ************************* -->
  <!-- main image -->
  <!-- ************************* -->

  <div class="pages-main-image">
    <div class="page-main-title">
      <h2>JAVASCRIPT WORKS</h2>
    </div>
  </div>
  <div id="breadcrumb">
    <div class="breadcrumb_wrap">
      <div>
        <a href="https://www.buchi.work/">TOP</a> &gt;
        <a href="https://www.buchi.work/pages/works/js-work.php">JAVASCRIPT WORKS</a>
      </div>
    </div>
  </div>

  <main>
    <div class="wrapper">
      <p class="summary">
        SlickやjQuery-cookie.jsなど、jQueryのプラグインを使った機能を、素のJavaScriptのみを使って出来るだけ忠実に再現しました。
      </p>
      <div class="index-wrap">
        <p class="index-title">INDEX</p>
        <ul>
          <li><a href="#slider">Slider（slick）</a></li>
          <li><a href="#modal">Modal（Lity）</a></li>
          <li>
            <a href="#cookie">
              using cookie to ...<span class="sp-hidden">（cookie.js）</span></a>
          </li>
        </ul>
      </div>
      <!-- ************************* -->
      <!-- Slider -->
      <!-- ************************* -->
      <section id="slider" class="work-wrap">
        <!-- Slider（slick） -->
        <h2 class="page-section-title">Slider（slick）</h2>
        <div class="js-work-item">
          <div class="iframe-header">
            <a href="https://github.com/Buchi-18/slider-slick" target="_blank" rel="noreferrer noopener nofollow">
              githubでsrcを見る
              <span class="icon-image">
                <img src="../../img/fontAwesome/github-white.svg" alt="github icon">
              </span>
            </a>
          </div>
          <div id="inlineFrameWrap">
            <iframe id="iframe" loading="lazy" src="../../iFrames/slider-slick.html" style="height: 380px" frameborder="0" title="Slider with slick.js"></iframe>
          </div>
          <div class="description">
            <p>
              <span class="bold sp-hidden">▲&nbsp;jQueryとSlickを使用してスライダー機能を実装</span>
            </p>
            <span class="bold pc-hidden">▲&nbsp;jQueryとSlickを使用</span>
          </div>
        </div>
        <!-- Slider（vanilla.js） -->
        <div class="js-work-item">
          <h2 class="page-section-title">Slider（Vanilla.js）</h2>
          <div class="iframe-header">
            <a href="https://github.com/Buchi-18/slider_vanilla" target="_blank" rel="noreferrer noopener nofollow">
              githubでsrcを見る
              <span class="icon-image">
                <img src="../../img/fontAwesome/github-white.svg" alt="github icon">
              </span>
            </a>
          </div>
          <div id="inlineFrameWrap">
            <iframe id="iframe" loading="lazy" src="../../iFrames/slider-vanilla.html" style="height: 380px" frameborder="0" title="Slider with vanilla.js"></iframe>
          </div>
          <div class="description">
            <p>
              <span class="bold sp-hidden">▲&nbsp;jQueryとSlickを使用してスライダー機能を実装</span>
            </p>
            <span class="bold pc-hidden">▲&nbsp;jQuery使用無し</span>
            <ul>
              <li>スライドアニメーションはWeb Animations APIを使用</li>
              <li>centerMode = true;で先頭のスライドを中央表示（複数枚時）</li>
            </ul>
          </div>
        </div>
      </section>
      <hr>
      <hr>
      <!-- ************************* -->
      <!-- Modal -->
      <!-- ************************* -->
      <section id="modal" class="work-wrap">
        <!-- Modal（Lity） -->
        <div class="js-work-item">
          <h2 class="page-section-title">Modal（Lity）</h2>
          <div class="iframe-header">
            <a href="https://github.com/Buchi-18/modal-lity" target="_blank" rel="noreferrer noopener nofollow">
              githubでsrcを見る
              <span class="icon-image">
                <img src="../../img/fontAwesome/github-white.svg" alt="github icon">
              </span>
            </a>
          </div>
          <div id="inlineFrameWrap">
            <iframe id="iframe" loading="lazy" src="../../iFrames/modal-lity.html" style="height: 450px" frameborder="0" title="Modal with lity.js"></iframe>
          </div>
          <div class="description">
            <p>
              <span class="bold sp-hidden">▲&nbsp;jQueryとLityを使用してモーダルウインドウをポップアップ</span>
            </p>
            <span class="bold pc-hidden">▲&nbsp;jQueryとLityを使用</span>
          </div>
        </div>
        <!-- ********** Modal（Vanilla.js） ********** -->
        <div class="js-work-item">
          <h2 class="page-section-title">Modal（Vanilla.js）</h2>
          <div class="iframe-header">
            <a href="https://github.com/Buchi-18/modal-vanilla" target="_blank" rel="noreferrer noopener nofollow">
              githubでsrcを見る
              <span class="icon-image">
                <img src="../../img/fontAwesome/github-white.svg" alt="github icon">
              </span>
            </a>
          </div>
          <div id="inlineFrameWrap">
            <iframe id="iframe" loading="lazy" src="../../iFrames/modal-vanilla.html" style="height: 450px" frameborder="0" title="Modal with vanilla.js"></iframe>
          </div>
          <div class="description">
            <p>
              <span class="bold sp-hidden">▲&nbsp;jQueryとLityを使用してモーダルウインドウをポップアップ</span>
            </p>
            <span class="bold pc-hidden">▲&nbsp;jQuery使用無し</span>
            <ul>
              <li>
                モーダルが閉じる際のフェードアウトのアニメーションは
                @keyframes（css）、setTimeout()（js）で調整
              </li>
              <li>Escキーで、モーダルが閉じる機能</li>
            </ul>
          </div>
        </div>
      </section>
      <hr>
      <hr>
      <!-- ************************* -->
      <!-- using cookie to ... -->
      <!-- ************************* -->
      <section id="cookie" class="work-wrap">
        <div class="js-work-item">
          <h2 style="letter-spacing: -1.5px;" class="page-section-title">using&nbsp;cookie&nbsp;to&nbsp;...</h2>
          <div class="iframe-header">
            <a href="https://github.com/Buchi-18/using-cookies-to" target="_blank" rel="noreferrer noopener nofollow">
              githubでsrcを見る
              <span class="icon-image">
                <img src="../../img/fontAwesome/github-white.svg" alt="github icon">
              </span>
            </a>
          </div>
          <div id="inlineFrameWrap">
            <iframe id="iframe" loading="lazy" src="../../iFrames/using-cookie-to.html" style="height: 400px" frameborder="0" title="cookie with vanilla.js"></iframe>
          </div>
          <div class="description">
            <p>
              <span class="bold sp-hidden">▲&nbsp;jQuery使用なしでcookieを使って訪問回数を取得</span>
            </p>
            <span class="bold pc-hidden">▲&nbsp;jQuery使用無し</span>
            <ul>
              <li>Document.cookieを使用してcookieを操作</li>
              <li>cookieで計測した訪問回数が三の倍数の時にイメージレイヤーを表示（Reloadから1秒後）</li>
              <li>6分後にcookie自動削除</li>
            </ul>
          </div>
        </div>
      </section>
    </div>
  </main>
  <!-- ************************* -->
  <!-- banner -->
  <!-- ************************* -->
  <aside class="banner">
    <a data-gtm="banner_03" href="https://buchi.work/pages/demo-page.html" target="_blank" rel="noopener noreferrer nofollow">
      <picture class="loading-box aspect-4-1">
        <source media="(max-width:750px )" srcset="https://www.buchi.work/img/banner/dummy-banner.webp">
        <source media="(max-width:750px )" srcset="https://www.buchi.work/img/banner/dummy-banner.jpg">
        <source srcset="https://www.buchi.work/img/banner/dummy-banner-pc.webp">
        <img loading="lazy" src="https://www.buchi.work/img/banner/dummy-banner-pc.jpg" alt="banner_03">
      </picture>
    </a>
    <a data-gtm="banner_04" href="https://buchi.work/pages/demo-page.html" target="_blank" rel="noopener noreferrer nofollow">
      <picture class="loading-box aspect-4-1">
        <source media="(max-width:750px )" srcset="https://www.buchi.work/img/banner/dummy-banner.webp">
        <source media="(max-width:750px )" srcset="https://www.buchi.work/img/banner/dummy-banner.jpg">
        <source srcset="https://www.buchi.work/img/banner/dummy-banner-pc.webp">
        <img loading="lazy" src="https://www.buchi.work/img/banner/dummy-banner-pc.jpg" alt="banner_04">
      </picture>
    </a>
  </aside>

  <!-- ************************* -->
  <!-- clipping of works -horizontal- -->
  <!-- ************************* -->
  <aside id="clippingOfWorks" class="horizontal">
    <div class="left">
      <div class="clipping-title">
        <span class="en">clipping of works</span>
        <span class="ja">作品切抜</span>
      </div>
    </div>
    <div class="right">
      <ul class="clipping-horizontal-box">
        <li>
          <div class="clipping-horizontal-img">
            <figure>
              <a href="https://www.buchi.work/pages/works/app-work.php#fakeWeather">
                <div class="width-bg-anim bg-light-blue"><!-- background animation div --></div>
                <div class="img-scale-anim">
                  <picture>
                    <source srcset="../../img/clipping/clipping-app-01.webp">
                    <img loading="lazy" src="../../img/clipping/clipping-app-01.jpg" alt="clipping-app-01 image">
                  </picture>
                </div>
              </a>
            </figure>
          </div>
          <div class="clipping-horizontal-text">
            <span class="en">Fake&nbsp;weather</span>
            <span class="ja">仮想お天気アプリ</span>
            <a href="https://www.buchi.work/pages/works/app-work.php#fakeWeather">#app works</a>
          </div>
        </li>
        <li>
          <div class="clipping-horizontal-img">
            <figure>
              <a href="https://www.buchi.work/pages/works/app-work.php#keepImitationApp">
                <div class="width-bg-anim bg-light-blue"><!-- background animation div --></div>
                <div class="img-scale-anim">
                  <picture>
                    <source srcset="../../img/clipping/clipping-app-02.webp">
                    <img loading="lazy" src="../../img/clipping/clipping-app-02.jpg" alt="clipping-app-02 image">
                  </picture>
                </div>
              </a>
            </figure>
          </div>
          <div class="clipping-horizontal-text">
            <span class="en">Keep&nbsp;...Imitation</span>
            <span class="ja">Keep 模倣アプリ</span>
            <a href="https://www.buchi.work/pages/works/app-work.php#keepImitationApp">#app works</a>
          </div>
        </li>
        <li>
          <div class="clipping-horizontal-img">
            <figure>
              <a href="https://www.buchi.work/pages/works/app-work.php#passGenerator">
                <div class="width-bg-anim bg-light-blue"><!-- background animation div --></div>
                <div class="img-scale-anim">
                  <picture>
                    <source srcset="../../img/clipping/clipping-app-03.webp">
                    <img loading="lazy" src="../../img/clipping/clipping-app-03.jpg" alt="clipping-app-03 image">
                  </picture>
                </div>
              </a>
            </figure>
          </div>
          <div class="clipping-horizontal-text">
            <span class="en">Pass generator</span>
            <span class="ja">パスワード自動生成</span>
            <a href="https://www.buchi.work/pages/works/app-work.php#passGenerator">#app works</a>
          </div>
        </li>
        <li>
          <div class="clipping-horizontal-img">
            <figure>
              <a href="https://www.buchi.work/pages/works/app-work.php#todos">
                <div class="width-bg-anim bg-light-blue"><!-- background animation div --></div>
                <div class="img-scale-anim">
                  <img loading="lazy" src="../../img/clipping/clipping-app-04.jpg" alt="clipping-app-04 image">
                </div>
              </a>
            </figure>
          </div>
          <div class="clipping-horizontal-text">
            <span class="en">Todo App</span>
            <span class="ja">Todo アプリ (PHP)</span>
            <a href="https://www.buchi.work/pages/works/app-work.php#todos">#app works</a>
          </div>
        </li>
      </ul>
    </div>
  </aside>

  <!-- ************************* -->
  <!-- footer -->
  <!-- ************************* -->
  <?php
  include("../../_php_app/_parts/_footer.php");
  ?>

  <script src="../../js/main.js"></script>
  <script src="../../iFrames/js/iFrame.js"></script>
</body>

</html>