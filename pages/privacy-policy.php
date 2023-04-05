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
  <meta name="description" content="個人でWeb開発をしているBuchiのポートフォリオサイトです。このページでは当ポートフォリオサイトのPRIVACY POLICYを記載しています。">
  <link rel="canonical" href="https://www.buchi.work/pages/privacy-policy.html">
  <title>privacy-policy_BUCHI</title>
  <!-- ********** meta OGP ********** -->
  <meta property="og:site_name" content="Buchiのポートフォリオサイト">
  <meta property="og:title" content="Buchiのポートフォリオサイト">
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://www.buchi.work/pages/privacy-policy.html">
  <meta property="og:image" content="https://www.buchi.work/img/meta/ogp-privacy-policy.jpg">
  <meta property="og:description" content="個人でWeb開発をしているBuchiのポートフォリオサイトです。このページでは当ポートフォリオサイトのPRIVACY POLICYを記載しています。">
  <meta name="twitter:card" content="summary_large_image">
  <!-- ********** favicon ********** -->
  <link rel="icon" href="https://www.buchi.work/favicon/favicon.ico">
  <link rel="apple-touch-icon" href="https://www.buchi.work/favicon/apple-touch-icon-180-180.png">
  <link rel="icon" type="image/png" href="https://www.buchi.work/favicon/android-chrome-192-192.png">
  <!-- ********** css ********** -->
  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" href="./css/pages.css">
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
        "name": "PRIVACY POLICY",
        "item": "https://www.buchi.work/pages/privacy-policy.html"
      }]
    }
  </script>
</head>

<body style="background: var(--base-bg)">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGKXNV7" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
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
      include("../_php_app/_parts/_header.php");
  ?>

  <!-- ************************* -->
  <!-- main image -->
  <!-- ************************* -->
  <div class="pages-main-image">
    <div class="page-main-title">
      <h2>PRIVACY POLICY</h2>
    </div>
  </div>
  <div id="breadcrumb">
    <div class="breadcrumb_wrap">
      <div>
        <a href="https://www.buchi.work/">TOP</a> &gt;
        <a href="https://www.buchi.work/pages/privacy-policy.html">PRIVACY POLICY</a>
      </div>
    </div>
  </div>

  <main>
    <div id="privacyWrap" class="wrapper">
      <h3>当サイトで取得するユーザー情報について</h3>
      <p>当サイトでは、アクセス解析のため「Googleアナリティクス」を利用しています。<br>
        「Googleアナリティクス」はトラフィックデータの収集のためにCookieを使用しております。<br>
        トラフィックデータは匿名で収集されており、個人を特定するものではありません。<br>
        この機能はお使いのブラウザのCookie設定を無効にすることで収集を拒否することができます。<br>

        「Googleアナリティクス」でデータが収集、処理される仕組みについては下記引用リンクの参照をお願いいたします。<br><br>
        <a href="https://policies.google.com/technologies/partner-sites?hl=ja">引用： Google のサービスを使用するサイトやアプリから収集した情報の
          Google による使用</a>
      </p>

      <h3>免責事項</h3>
      <p>当サイトには外部サイトのリンクやバナーが含まれております。<br>
        移動した外部サイトにおける個人情報保護や、サイトの内容に関して一切の責任を負わないものとします。<br>
        また当サイトのコンテンツ・情報について、できる限り正確な情報を提供するように努めておりますが、正確性や安全性を保証するものではありません。情報が古くなっていることもございます。<br>
        当サイトに掲載された内容によって生じた損害等の一切の責任を負いかねますのでご了承ください。</p>
    </div>

  </main>

  <!-- ************************* -->
  <!-- footer -->
  <!-- ************************* -->
  <?php
      include("../_php_app/_parts/_footer.php");
  ?>

  <script src="../js/main.js"></script>

</body>

</html>