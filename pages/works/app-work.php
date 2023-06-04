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
  このページでは、独自に開発したアプリやフロントエンドエンジニアの学習サービスを参考に作成したアプリを掲載しています。">
  <link rel="canonical" href="https://www.buchi.work/pages/works/app-work.php">
  <title>app_works_BUCHI</title>
  <!-- ********** meta OGP ********** -->
  <meta property="og:site_name" content="Buchiのポートフォリオサイト">
  <meta property="og:title" content="Buchiのポートフォリオサイト">
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://www.buchi.work/pages/works/app-work.php">
  <meta property="og:image" content="https://www.buchi.work/img/meta/ogp-app-works.jpg">
  <meta property="og:description" content="個人でWeb開発をしているBuchiのポートフォリオサイトです。
  このページでは、独自に開発したアプリやフロントエンドエンジニアの学習サービスを参考に作成したアプリを掲載しています。">
  <meta name="twitter:card" content="summary_large_image">
  <!-- ********** favicon ********** -->
  <link rel="icon" href="https://buchi.work/favicon/favicon.ico">
  <link rel="apple-touch-icon" href="https://buchi.work/favicon/apple-touch-icon-180-180.png">
  <link rel="icon" type="image/png" href="https://buchi.work/favicon/android-chrome-192-192.png">
  <!-- ********** css ********** -->
  <link rel="stylesheet" href="../../css/common.css">
  <link rel="stylesheet" href="../css/pages.css">
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
        "name": "APP WORKS",
        "item": "https://www.buchi.work/pages/works/app-work.php"
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
      <h2>APP WORKS</h2>
    </div>
  </div>
  <div id="breadcrumb">
    <div class="breadcrumb_wrap">
      <div>
        <a href="https://www.buchi.work/">TOP</a> &gt;
        <a href="https://www.buchi.work/pages/works/app-work.php">APP WORKS</a>
      </div>
    </div>
  </div>

  <main>
    <div class="wrapper">
      <p class="summary">
        独自に開発したアプリや<br>
        学習サービスを参考に作成したアプリを載せています。
      </p>
      <div class="index-wrap">
        <p class="index-title">INDEX</p>
        <ul>
          <li><a href="#fakeWeather">Fake&nbsp;weather</a></li>
          <li><a href="#keepImitationApp">Keep&nbsp;...Imitation&nbsp;app</a></li>
          <li><a href="#passGenerator">Pass&nbsp;generator</a></li>
          <li><a href="#todos">Todo&nbsp;App</a></li>

        </ul>
      </div>
      <!-- ************************* -->
      <!-- app works -->
      <!-- ************************* -->
      <section id="appWorkLists" class="work-wrap">
        <div class="app-lists">
          <ul>
            <!-- fake weather app -->
            <li id="fakeWeather">
              <a href="./applications/fakeWeather/weather.html" target="_blank" rel="noopener noreferrer nofollow">
                <img src="../img/appThumbnail/app-weather.jpg" alt="fake weather サムネイル">
              </a>
              <div class="text-box">
                <span class="date">Update&nbsp;:&nbsp;2023.03.16</span>
                <span class="languages">Coding&nbsp;:&nbsp;HTML/CSS/JS/JSON</span>
                <span class="languages"><a href="https://github.com/Buchi-18/weather-app" target="_blank" rel="noopener noreferrer nofollow"> Learning&nbsp;:&nbsp;独自開発</a>
                </span>
                <p class="app-work-title"><a href="./applications/fakeWeather/weather.html" target="_blank" rel="noopener noreferrer nofollow">Fake&nbsp;weather</a></p>
                <p class="app-work-text">
                  2100年の仮想お天気アプリです<br>
                  <span class="bold">API利用の開発を想定して、JSONファイルをAsync/await構文で表示データを読み込んでいます。</span>
                  <br>
                  JSONファイルは<a href="https://json-generator.com/" target="_blank" rel="noopener noreferrer nofollow">JSON
                    GENERATOR</a>で作成しました。
                  <br>
                  アプリ内のアイコンは<a href="https://www.ac-illust.com/main/detail.php?id=23460744&word=%E5%A4%A9%E6%B0%97%E3%81%AE%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B3%E3%81%A8%E3%82%A4%E3%83%B3%E3%83%95%E3%82%A9%E3%82%B0%E3%83%A9%E3%83%95%E3%82%A3%E3%83%83%E3%82%AF%E9%9B%86
                  ">イラストACのフリー素材</a>を利用しました。

                </p>
                <div class="view-link">
                  <a href="./applications/fakeWeather/weather.html" target="_blank" rel="noopener noreferrer nofollow">アプリを見に行く</a>
                </div>
              </div>
            </li>
            <!-- keep imitation app -->
            <li id="keepImitationApp">
              <a href="./applications/keepImitationApp/keep-imitation.html" target="_blank" rel="noopener noreferrer nofollow">
                <img src="../img/appThumbnail/app-keep-imitation.jpg" alt="keep imitation app サムネイル">
              </a>
              <div class="text-box">
                <span class="date">Update&nbsp;:&nbsp;2023.03.02</span>
                <span class="languages">Coding&nbsp;:&nbsp;HTML/CSS/JS</span>
                <span class="languages"><a href="https://scrimba.com/" target="_blank" rel="noopener noreferrer nofollow"> Learning&nbsp;:&nbsp;Scrimba</a>
                </span>
                <p class="app-work-title"><a href="./applications/keepImitationApp/keep-imitation.html" target="_blank" rel="noopener noreferrer nofollow">Keep&nbsp;...Imitation app</a></p>
                <p class="app-work-text">
                  google Keep の模倣アプリです。<br>
                  <span class="bold">ストレッチゴールとしてダークモードの切り替えを実装しました。</span>
                  <br>
                  ※メモの保存にはローカルストレージを使用しているため、重要なユーザー情報の保存はしないでください。
                </p>
                <div class="view-link">
                  <a href="./applications/keepImitationApp/keep-imitation.html" target="_blank" rel="noopener noreferrer nofollow">アプリを見に行く</a>
                </div>
              </div>
            </li>
            <!-- pass generator -->
            <li id="passGenerator">
              <a href="./applications/passGenerator/pass-generator.html" target="_blank" rel="noopener noreferrer nofollow">
                <img src="../img/appThumbnail/app-pass-generator.jpg" alt="pass generator サムネイル">
              </a>
              <div class="text-box">
                <span class="date">Update&nbsp;:&nbsp;2023.03.02</span>
                <span class="languages">Coding&nbsp;:&nbsp;HTML/CSS/JS</span>
                <span class="languages"><a href="https://scrimba.com/" target="_blank" rel="noopener noreferrer nofollow"> Learning&nbsp;:&nbsp;Scrimba</a>
                </span>
                <p class="app-work-title"><a href="./applications/passGenerator/pass-generator.html" target="_blank" rel="noopener noreferrer nofollow">Pass&nbsp;generator</a></p>
                <p class="app-work-text">
                  パスワード自動生成アプリです<br>
                  数字を含む/含まないの選択ができます<br>
                  <span class="bold">ストレッチゴールとして文字数の選択(8~25文字)・コピーボタンクリックでクリップボードに保存機能を追加しました。</span>

                </p>
                <div class="view-link">
                  <a href="./applications/passGenerator/pass-generator.html" target="_blank" rel="noopener noreferrer nofollow">アプリを見に行く</a>
                </div>
              </div>
            </li>
            <!-- todos -->
            <li id="todos">
              <a href="./applications/todo_php" target="_blank" rel="noopener noreferrer nofollow">
                <img src="../img/appThumbnail/app-todo.jpg" alt="Todo App サムネイル">
              </a>
              <div class="text-box">
                <span class="date">Update&nbsp;:&nbsp;2023.06.04</span>
                <span class="languages">Coding&nbsp;:&nbsp;HTML/CSS/PHP/JS</span>
                <span class="languages"><a href="https://dotinstall.com/" target="_blank" rel="noopener noreferrer nofollow"> dot install</a>
                </span>
                <p class="app-work-title"><a href="./applications/todo_php" target="_blank" rel="noopener noreferrer nofollow">Todo App</a></p>
                <p class="app-work-text">
                  PHPを使用したTodoアプリです<br>
                  このページはベーシック認証を取り入れ、アクセス制限をかけております。<br>
                </p>
                <div class="view-link">
                  <a href="./applications/todo_php" target="_blank" rel="noopener noreferrer nofollow">アプリを見に行く</a>
                </div>
              </div>
            </li>

          </ul>
        </div>
      </section>

    </div>
  </main>
  <!-- ************************* -->
  <!-- banner -->
  <!-- ************************* -->
  <aside class="banner">
    <a data-gtm="banner_777" href="https://buchi.work/pages/demo-page.html" target="_blank" rel="noopener noreferrer nofollow">
      <picture class="loading-box aspect-4-1">
        <source media="(max-width:750px )" srcset="../../img/banner/dummy-banner.webp">
        <source media="(max-width:750px )" srcset="../../img/banner/dummy-banner.jpeg">
        <source srcset="../../img/banner/dummy-banner-pc.webp">
        <img loading="lazy" src="../../img/banner/dummy-banner-pc.jpeg" alt="banner_777">
      </picture>
    </a>
    <a data-gtm="banner_999" href="https://buchi.work/pages/demo-page.html" target="_blank" rel="noopener noreferrer nofollow">
      <picture class="loading-box aspect-4-1">
        <source media="(max-width:750px )" srcset="../../img/banner/dummy-banner.webp">
        <source media="(max-width:750px )" srcset="../../img/banner/dummy-banner.jpeg">
        <source srcset="../../img/banner/dummy-banner-pc.webp">
        <img loading="lazy" src="../../img/banner/dummy-banner-pc.jpeg" alt="banner_999">
      </picture>
    </a>
  </aside>
  <!-- ************************* -->
  <!-- clipping of works -vertical- -->
  <!-- ************************* -->
  <aside id="clippingOfWorks" class="vertical">
    <div class="clipping-title">
      <span class="en">clipping of works</span>
      <span class="ja">作品切抜</span>
    </div>
    <ul class="clipping-vertical-box">
      <li>
        <figure><a href="https://buchi.work/pages/works/adobe-work.php#digitalMakeover">
            <div class="width-bg-anim bg-brown">
              <!-- background animation div -->
            </div>
            <div class="img-scale-anim">
              <img loading="lazy" src="../../img/clipping/clipping-makeover-01.jpg" alt="make over image 01">
            </div>
          </a></figure>
      </li>
      <li>
        <figure>
          <a href="https://buchi.work/pages/works/adobe-work.php#digitalMakeover">
            <div class="width-bg-anim bg-blue">
              <!-- background animation div -->
            </div>
            <div class="img-scale-anim">
              <img loading="lazy" src="../../img/clipping/clipping-makeover-02.jpg" alt="make over image 02">
            </div>
          </a>
        </figure>
      </li>
      <li>
        <figure>
          <a href="https://buchi.work/pages/works/adobe-work.php#digitalMakeover">
            <div class="width-bg-anim bg-purple">
              <!-- background animation div -->
            </div>
            <div class="img-scale-anim">
              <img loading="lazy" src="../../img/clipping/clipping-makeover-03.jpg" alt="make over image 03">
            </div>
          </a>
        </figure>
      </li>
    </ul>
    <div class="view-link">
      <a href="https://buchi.work/pages/works/adobe-work.php#digitalMakeover">作品を見に行く</a>
    </div>
  </aside>

  <!-- ************************* -->
  <!-- footer -->
  <!-- ************************* -->
  <?php
  include("../../_php_app/_parts/_footer.php");
  ?>

  <script src="../../js/main.js"></script>

</body>

</html>