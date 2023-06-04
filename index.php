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
  <meta name="description" content="個人でWeb開発をしているBuchiのポートフォリオサイトです。/ HTML CSS JavaScriptを使用した成果物やAbodeソフトを使用して制作した作品の一部を掲載しています。">
  <link rel="canonical" href="https://www.buchi.work/" />
  <title>BUCHI</title>
  <!-- ********** meta OGP ********** -->
  <meta property="og:site_name" content="Buchiのポートフォリオサイト" />
  <meta property="og:title" content="Buchiのポートフォリオサイト" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.buchi.work/" />
  <meta property="og:image" content="https://www.buchi.work/img/meta/ogp-portfolio.jpg" />
  <meta property="og:description" content="個人でWeb開発をしているBuchiのポートフォリオサイトです。/ HTML CSS JavaScriptを使用した成果物やAbodeソフトを使用して制作した作品の一部を掲載しています。" />
  <meta name="twitter:card" content="summary_large_image">
  <!-- ********** favicon ********** -->
  <link rel="icon" href="https://www.buchi.work/favicon/favicon.ico">
  <link rel="apple-touch-icon" href="https://www.buchi.work/favicon/apple-touch-icon-180-180.png">
  <link rel="icon" type="image/png" href="https://www.buchi.work/favicon/android-chrome-192-192.png">
  <!-- ********** css ********** -->
  <link rel="stylesheet" href="./css/common.css">
  <link rel="stylesheet" href="./css/style.css">
  <!-- ********** google font ********** -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet"> -->
  <!-- ********** 構造化データ ********** -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Person",
      "name": "buchi",
      "url": "https://www.buchi.work/",
      "image": "https://buchi.work/img/site-title.svg",
      "sameAs": "https://github.com/Buchi-18"
    }
  </script>
</head>

<body style="background: var(--base-bg)">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGKXNV7" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- ************************* -->
  <!-- header -->
  <!-- ************************* -->
  <?php
  include("./_php_app/_parts/_header.php");
  ?>

  <!-- ************************* -->
  <!-- Main image -->
  <!-- ************************* -->
  <div id="mainImage" class="main-image">
    <picture>
      <source media="(max-width:750px )" srcset="./img/mainImage/main-image-sp.webp">
      <source media="(max-width:750px )" srcset="./img/mainImage/main-image-sp.png">
      <source srcset="./img/mainImage/main-image-pc.webp">
      <img src="./img/mainImage/main-image-pc.png" alt="main image">
    </picture>
  </div>
  <script>
    let innerHeight = window.innerHeight;
    const mainImage = document.getElementById("mainImage");
    mainImage.style.height = innerHeight + "px";
  </script>
  <!-- ************************* -->
  <!-- Main contents -->
  <!-- ************************* -->
  <main>
    <div class="wrapper">
      <!-- ************************* -->
      <!-- Works -->
      <!-- ************************* -->
      <section id="works">
        <h2 class="section-title">WORKS</h2>
        <!-- ********** hero work ********** -->
        <div class="contents-wrap">
          <div class="contents-text">
            <h3 id="hero" class="contents-title">hero design Work</h3>
            <p>架空サイトの<span class="bold">Hero header design</span>を載せています</p>
          </div>
          <ul class="hero-contents">
            <!-- dubh sidhe -->
            <li>
              <div class="contents-box">
                <div class="contents-image">
                  <a href="https://buchi-18.github.io/hero-header-dubh-sidhe/" target="_blank" rel="noreferrer noopener nofollow">
                    <picture>
                      <source srcset="./img/heroWork/hero-thumbnail-01.webp">
                      <img loading="eager" src="./img/heroWork/hero-thumbnail-01.png" alt="hero-thumbnail-01">
                    </picture>
                    <span>もっと見る</span>
                  </a>
                </div>
                <dl>
                  <dt>dubh sidhe</dt>
                  <dd>黒いロマンチックチュチュに身を包んだバレエダンスチームのオフィシャルホームページ</dd>
                  <dd>dubh sidheはアイルランド語で黒い妖精という意味があります
                  </dd>
                </dl>
                <div class="material">
                  <ul>
                    <li>
                      <div class="width-bg-anim bg-light-blue">
                        <a href="https://unsplash.com/ja/%E5%86%99%E7%9C%9F/POd35V_uE4k" target="_blank" rel="noreferrer noopener nofollow">
                          <picture>
                            <source srcset="./img/heroWork/heroMaterial/material-ballet-dancer.webp">
                            <img class="img-scale-anim" loading="lazy" src="./img/heroWork/heroMaterial/material-ballet-dancer.jpg" alt="material-ballet-dancer">
                          </picture>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="width-bg-anim bg-light-blue">
                        <picture>
                          <source srcset="./img/heroWork/heroMaterial/material-no-material.webp">
                          <img class="img-scale-anim" loading="lazy" src="./img/heroWork/heroMaterial/material-no-material.jpg" alt="no-material">
                        </picture>
                      </div>
                    </li>
                    <li>
                      <div class="width-bg-anim bg-light-blue">
                        <picture>
                          <source srcset="./img/heroWork/heroMaterial/material-no-material.webp">
                          <img class="img-scale-anim" loading="lazy" src="./img/heroWork/heroMaterial/material-no-material.jpg" alt="no-material">
                        </picture>
                      </div>
                    </li>
                  </ul>
                  <p> - - - - - - - - 使用FREE素材 - - - - - - - - </p>
                  <p> Photoshop/illustrator/HTML/CSS </p>
                </div>
              </div>
            </li>
            <!-- Water Holic -->
            <li>
              <div class="contents-box">
                <div class="contents-image">
                  <a href="https://buchi-18.github.io/hero-header-water-holic/" target="_blank" rel="noreferrer noopener nofollow">
                    <picture class="loading-box aspect-3-1">
                      <source srcset="./img/heroWork/hero-thumbnail-02.webp">
                      <img loading="lazy" src="./img/heroWork/hero-thumbnail-02.png" alt="hero-thumbnail-02">
                    </picture>
                    <span>もっと見る</span>
                  </a>
                </div>
                <dl>
                  <dt>Water Holic</dt>
                  <dd>女性専用のアクアエクササイズのホームページをイメージしています</dd>
                </dl>
                <div class="material">
                  <ul>
                    <li>
                      <div class="width-bg-anim bg-light-blue">
                        <a href="https://unsplash.com/ja/%E5%86%99%E7%9C%9F/k9x2sIOrbf4" target="_blank" rel="noreferrer noopener nofollow">
                          <picture>
                            <source srcset="./img/heroWork/heroMaterial/material-water-holic-01.webp">
                            <img class="img-scale-anim" loading="lazy" src="./img/heroWork/heroMaterial/material-water-holic-01.jpg" alt="material-water-holic-01">
                          </picture>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="width-bg-anim bg-light-blue">
                        <a href="https://pixabay.com/images/id-1850648/" target="_blank" rel="noreferrer noopener nofollow">
                          <picture>
                            <source srcset="./img/heroWork/heroMaterial/material-water-holic-02.webp">
                            <img class="img-scale-anim" loading="lazy" src="./img/heroWork/heroMaterial/material-water-holic-02.jpg" alt="material-water-holic-02">
                          </picture>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="width-bg-anim bg-light-blue">
                        <a href="https://www.ac-illust.com/main/detail.php?id=23222123&word=%E3%82%A8%E3%83%B3%E3%83%96%E3%83%AC%E3%83%A0-%E3%82%B4%E3%83%BC%E3%83%AB%E3%83%89%E8%83%8C%E6%99%AF%E9%80%8F%E6%98%8E" target="_blank" rel="noreferrer noopener nofollow">
                          <picture>
                            <source srcset="./img/heroWork/heroMaterial/material-water-holic-03.webp">
                            <img class="img-scale-anim" loading="lazy" src="./img/heroWork/heroMaterial/material-water-holic-03.jpg" alt="material-water-holic-03">
                          </picture>
                        </a>
                      </div>
                    </li>
                  </ul>
                  <p> - - - - - - - - 使用FREE素材 - - - - - - - - </p>
                  <p> Photoshop/illustrator/HTML/CSS/JS</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <!-- ********** js work ********** -->
        <div class="contents-wrap">
          <div class="contents-text">
            <h3 class="contents-title">JavaScript Work</h3>
            <p>jQueryのslick・lity・cookie.jsのプラグインを使った機能を素のJavaScriptで再現しました</p>
          </div>
          <a href="./pages/works/js-work.php">
            <div class="contents-box">
              <div class="contents-image">
                <picture class="loading-box aspect-32-15">
                  <source srcset="./img/js-work.webp">
                  <img loading="lazy" src="./img/js-work.jpg" alt="javascript-works">
                </picture>
                <span>もっと見る</span>
              </div>
            </div>
          </a>
        </div>
        <!-- ********** adobe work ********** -->
        <div class="contents-wrap">
          <div class="contents-text">
            <h3 class="contents-title">Adobe Work</h3>
            <p>illustratorやPhotoshopを使用し写真のレタッチ、作成したロゴやデザインをTシャツに合成加工した作品を載せてます</p>
          </div>
          <a href="./pages/works/adobe-work.php">
            <div class="contents-box">
              <div class="contents-image">
                <picture class="loading-box aspect-32-15">
                  <source srcset="./img/adobe-work.webp">
                  <img loading="lazy" src="./img/adobe-work.jpg" alt="Adobe-works">
                </picture>
                <span>もっと見る</span>
              </div>
            </div>
          </a>
        </div>
        <!-- ********** app work ********** -->
        <div class="contents-wrap">
          <div class="contents-text">
            <h3 class="contents-title">App Work</h3>
            <p>学習時に作成したアプリの成果物のページです
            </p>
          </div>
          <a href="./pages/works/app-work.php">
            <div class="contents-box">
              <div class="contents-image">
                <picture class="loading-box aspect-32-15">
                  <source srcset="./img/app-work.webp">
                  <img loading="lazy" src="./img/app-work.jpg" alt="App-works">
                </picture>
                <span>もっと見る</span>
              </div>
            </div>
          </a>
        </div>
      </section>
      <!-- ************************* -->
      <!-- banner -->
      <!-- ************************* -->
      <aside class="banner">
        <a data-gtm="banner_01" href="https://buchi.work/pages/demo-page.html" target="_blank" rel="noopener noreferrer nofollow">
          <picture class="loading-box aspect-4-1">
            <source media="(max-width:750px )" srcset="https://www.buchi.work/img/banner/dummy-banner.webp">
            <source media="(max-width:750px )" srcset="https://www.buchi.work/img/banner/dummy-banner.jpg">
            <source srcset="https://www.buchi.work/img/banner/dummy-banner-pc.webp">
            <img loading="lazy" src="https://www.buchi.work/img/banner/dummy-banner-pc.jpg" alt="banner_01">
          </picture>
        </a>
        <a data-gtm="banner_02" href="https://buchi.work/pages/demo-page.html" target="_blank" rel="noopener noreferrer nofollow">
          <picture class="loading-box aspect-4-1">
            <source media="(max-width:750px )" srcset="https://www.buchi.work/img/banner/dummy-banner.webp">
            <source media="(max-width:750px )" srcset="https://www.buchi.work/img/banner/dummy-banner.jpg">
            <source srcset="https://www.buchi.work/img/banner/dummy-banner-pc.webp">
            <img loading="lazy" src="https://www.buchi.work/img/banner/dummy-banner-pc.jpg" alt="banner_02">
          </picture>
        </a>
      </aside>
      <!-- ************************* -->
      <!-- About -->
      <!-- ************************* -->
      <section id="about">
        <h2 class="section-title">ABOUT</h2>
        <h3 id="personal">略歴</h3>
        <p>青山製図専門学校卒 ｜ キャバクラ従業員 ｜ 一級建築士事務所 設計・デザイン CADオペレーター ｜ 個人Webサイト制作 HTML5/CSS3/JavaScript/PHP/git</p>
        <!-- ********** 業務経験 ********** -->
        <div class="about-card">
          <div class="about-card-img loading-box"><img loading="lazy" src="./img/about-image-01.jpg" alt="業務経験のイメージ画像">
          </div>
          <div class="about-card-text">
            <h3 id="experience">業務経験</h3>
            キャバクラ業界経験を通して、コミュニケーションや他人の考えを汲み取るスキルを高めました。<br>
            また、建築業界では、CADソフトを使用した設計業務のほかAdobe製品やMicrosoftのツールを積極的に使用し、PCでのデザインワークや細やかなデータ確認等のスキルを磨きました。
          </div>
        </div>
        <!-- ********** 開発スキル ********** -->
        <div class="about-card">
          <div class="about-card-img loading-box"><img loading="lazy" src="./img/about-image-02.jpg" alt="開発スキルのイメージ画像">
          </div>
          <div class="about-card-text">
            <h3 id="skill">開発スキル</h3>
            主にフロントエンド（HTML5/CSS3/JavaScript）を独学で学んでおります。<br>
            チームでの開発経験はありませんが、普段からバージョン管理にgitやgithubを使用することで、スムーズにチーム開発に携われるように心がけております。<br>
            サーバーサイドに関しては、PHPを学び、<br>
            DB接続やセキリティ関連の知識を取り入れています。

          </div>
        </div>
      </section>
    </div>
  </main>
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
        <figure><a href="https://buchi.work/pages/works/adobe-work.php#combinePhoto">
            <div class="width-bg-anim bg-brown">
              <!-- background animation div -->
            </div>
            <div class="img-scale-anim">
              <img loading="lazy" src="./img/clipping/clipping-combine-01.jpg" alt="combine image 01">
            </div>
          </a></figure>
      </li>
      <li>
        <figure>
          <a href="https://buchi.work/pages/works/adobe-work.php#combinePhoto">
            <div class="width-bg-anim bg-blue">
              <!-- background animation div -->
            </div>
            <div class="img-scale-anim">
              <img loading="lazy" src="./img/clipping/clipping-combine-02.jpg" alt="combine image 02">
            </div>
          </a>
        </figure>
      </li>
      <li>
        <figure>
          <a href="https://buchi.work/pages/works/adobe-work.php#combinePhoto">
            <div class="width-bg-anim bg-purple">
              <!-- background animation div -->
            </div>
            <div class="img-scale-anim">
              <img loading="lazy" src="./img/clipping/clipping-combine-03.jpg" alt="combine image 03">
            </div>
          </a>
        </figure>
      </li>
    </ul>
    <div class="view-link">
      <a href="https://buchi.work/pages/works/adobe-work.php#combinePhoto">作品を見に行く</a>
    </div>
  </aside>

  <!-- ************************* -->
  <!-- footer -->
  <!-- ************************* -->
  <?php
  include("./_php_app/_parts/_footer.php");
  ?>

  <script src="./js/main.js"></script>

</body>

</html>