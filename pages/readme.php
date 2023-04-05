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
  <meta name="description"
    content="個人でWeb開発をしているBuchiのポートフォリオサイトです。このページでは当ポートフォリオサイト作成時に配慮した点や、機能を採用した際に考慮した点などを記載しています。">
  <link rel="canonical" href="https://www.buchi.work/pages/readme.php">
  <title>readme_BUCHI</title>
  <!-- ********** meta OGP ********** -->
  <meta property="og:site_name" content="Buchiのポートフォリオサイト">
  <meta property="og:title" content="Buchiのポートフォリオサイト">
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://www.buchi.work/pages/readme.php">
  <meta property="og:image" content="https://www.buchi.work/img/meta/ogp-readme.jpg">
  <meta property="og:description"
    content="個人でWeb開発をしているBuchiのポートフォリオサイトです。このページでは当ポートフォリオサイト作成時に配慮した点や、機能を採用した際に考慮した点などを記載しています。">
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
        "name": "#README",
        "item": "https://www.buchi.work/pages/readme.php"
      }]
    }
  </script>
</head>

<body style="background: var(--base-bg)">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGKXNV7" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

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
      <h2>#README</h2>
    </div>
  </div>
  <div id="breadcrumb">
    <div class="breadcrumb_wrap">
      <div>
        <a href="https://www.buchi.work/">TOP</a> &gt;
        <a href="https://www.buchi.work/pages/readme.php">#README</a>
      </div>
    </div>
  </div>

  <main>
    <div id="readme" class="wrapper">
      <p class="summary">
        このページでは<br>当ポートフォリオサイト作成時に配慮した点や、機能を採用した際に考慮した点などを記載しています。
      </p>
      <div class="index-wrap">
        <p class="index-title">INDEX</p>
        <ul>
          <li><a href="#pageSpeedInsights">PageSpeed Insights 分析結果</a></li>
          <li><a href="#scoreGA4">スコアの改善 ( GA4 )</a></li>
          <li><a href="#scoreFonts">スコアの改善 ( webフォント )</a></li>
          <li><a href="#lazyLoadingImage">Lazy Loading の実装</a></li>
          <li><a href="#resultPuppeteer">Lazy Loading 実装テスト結果</a></li>
          <li><a href="#loadingAnimation">ローディング アニメーションの設置</a></li>
          <li><a href="#loadingScript">ローディング イメージ スクリプト</a></li>
          <li><a href="#loadingDemo">ローディング アニメーション DEMO</a></li>
        </ul>
      </div>

      <section id="pageSpeedInsights">
        <h3>PageSpeed Insights 分析結果</h3>
        <p>当サイトでは、<a href="https://pagespeed.web.dev/" target="
        _blank" rel="noopener noreferrer nofollow">Google PageSpeed Insights</a>使って読み込み速度を分析評価しました。</p>
        <div class="result-image ref-image">
          <picture>
            <source srcset="./img/readme/PSI-mobile.webp">
            <img src="./img/readme/PSI-mobile.jpg" alt="PSI result for mobile">
          </picture>
          <picture>
            <source srcset="./img/readme/PSI-desktop.webp">
            <img src="./img/readme/PSI-desktop.jpg" alt="PSI result for desktop">
          </picture>
        </div>
      </section>

      <section id="scoreImprovement">
        <h3 id="scoreGA4">スコアの改善 ( GA4 )</h3>
        <p> Google アナリティクス: GA4 の読み込みタイミングをgoogle タグマネージャー経由で
          【ページビュー】時では無く【ウィンドウの読み込み】時に変更。 <br><br>
          これにより、読み込み中の離脱者のカウントは不可となりますが
          離脱者をカウントする為に、読み込み時間を増やし更なる離脱者を増やすという悪循環
          を回避します <br>
          これには、<strong>【より早い読み込みをして、読み込み後のユーザーの行動に注視することを優先する】</strong>といった
          意図があります。
          <br>
          上記の設定変更によって、<strong>PageSpeed Insightsのパフォーマンススコアが5~7点・
            Largest Contentful Paintが１秒以上、評価改善</strong>しました。
        </p>
        <div class="ref-image">
          <img src="./img/readme/GTM-image.png" alt="GTM-image">
        </div>
        <h3 id="scoreFonts">スコアの改善 ( webフォント )</h3>
        <p>webフォントのついては、【Speed Index】に大きな影響があった為、使用数を厳選し重要度の少ない
          webフォントの使用を中止しWebブラウザのデフォルトのフォントのゴシック体系の使用を想定しました。

          また、【First Contentful Paint】のスコア改善のため<span class="bold">@font-face</span>に<span class="bold">font-display:
            swap;</span>を指定しフォントファイルを読み込み時間に代替テキストを表示することで、ページの読み込み速度を優先させました。
        </p>
        <div class="code-area">
          <p class="bold">【@font-faceコード】</p>
          <script src="https://gist.github.com/Buchi-18/06368d5763a64818e4ff7247601024d3.js"></script>
        </div>
      </section>

      <section id="lazy">
        <h3 id="lazyLoadingImage">Lazy Loading の実装</h3>
        <p>
          当サイトの画像の遅延読み込みについては、<a
            href="https://developers.google.com/search/docs/crawling-indexing/javascript/lazy-loading?hl=ja">Google
            Developersのドキュメント</a>を参照し【ネイティブ遅延読み込み】を使用しました。(loading 属性 loading="") <br>
        </p>

        <h3 id="resultPuppeteer">Lazy Loading 実装テスト結果</h3>
        <p>実装のテストには <a href="https://github.com/puppeteer/puppeteer">Puppeteer</a>スクリプトを使用し、実装をローカルでテストしました。
        </p>
        <br>
        <p>フェードアニメーションを指定している画像については
          発火条件をスクロールイベントでは無く、googleの推奨する Intersection observer での監視に切り替えましたが、
          スクロールされていないページとスクロール後のページに齟齬が出ました。(下記写真赤色の部分参照)
        </p>
        <br>
        <p>この件については</p>
        <ul style="margin: 30px 0;">
          <li style="margin: 10px 0">■<a href="https://www.youtube.com/watch?v=nEyxmIENX2A&t=2159s">Google
              Webmasters（動画の35分55秒〜）の見解</a>でgoogle search consoleのURL検査でHTMLが読み込まれていれば問題はないという発言がある</li>
          <li style="margin: 10px 0">■検索上位の他社のサイトをテストしても、アニメーションを指定している箇所でFAILED(失敗)という結果が出る
          </li>
        </ul>
        <p>以上の結果を踏まえ、テスト結果の内容は<span class="bold">アニメーションを<u>指定していない</u>遅延読み込み画像部分のみを参考にする</span>ことと、<span
            class="bold">装飾的なコンテンツ以外、アニメーションの過度な指定は避ける</span>という２点に配慮して実装しました。</p>

        <div class="ref-image">
          <a href="./img/readme/test-result-all.png">
            <picture>
              <source srcset="./img/readme/test-result.webp">
              <img src="./img/readme/test-result.jpg" alt="Puppeteer result image">
            </picture>
            <span>クリックして写真全体を見る</span>
          </a>
        </div>
      </section>

      <section id="loading">
        <h3 id="loadingAnimation">ローディング アニメーションの設置</h3>
        <p>
          画像の遅延読み込みの結果、読み込みが間に合わなかった画像に対しての対策として
          該当の画像エリアのバックグランドにローディング アニメーションを設置しました。
        </p>
        <br>
        <p>【設置概要】<br>
          設置対象の直上の親要素(画像エリア)に class="loading-box" のクラスを指定し background-image でローディング アニメーションを読み込みます。
        </p>
        <p>

        <div class="code-area">
          <p class="bold">【CSSコード】</p>
          <script src="https://gist.github.com/Buchi-18/80039364e6c5a9b5063914ec54a42a8f.js"></script>
          <p>
            直上の親要素(画像エリア)に width と height(aspect-ratio:◯◯◯;)を指定して、ローリングイメージの表示スペースを確保し、Cumulative Layout Shift (累積レイアウト
            シフト数、CLS)に配慮しています。<br>
            ※親要素がインライン要素の場合、display:block;が必要になります。<br>
            ※デフォルトではアスペクト比を 1:1 としているので、シーンに合わせてアスペクト比を上書きするクラスを追加します。
          </p>
        </div>

        <div class="code-area">
          <p class="bold">【クラスを上書きする例 16:9 の画像の場合】</p>
          <script src="https://gist.github.com/Buchi-18/33e9557582357b0e6fb16a89aa4376f9.js"></script>
        </div>
        </p>

        <h3 id="loadingScript">ローディング イメージ スクリプト</h3>
        <p>
          当サイトでは、ローディング アニメーションが設置されている箇所に関して、本番画像の読み込み完了をJavaScriptで監視し、読み込み完了時点でCSSの .loading-box クラスを外し、ローディング
          アニメーションを停止させています。
        </p>


        <div class="code-area">
          <p class="bold">【JavaScriptコード】</p>
          <script src="https://gist.github.com/Buchi-18/850d36065c6570cbfc7356e36676aaca.js"></script>
        </div>
        <!-- ************************* -->
        <!-- demo-image -->
        <!-- ************************* -->

        <h3 id="loadingDemo">ローディング アニメーション DEMO</h3>
        <p>下の例では、100MBの画像でローディングアニメーションの挙動をデモ実装しています。</p>
        <ul style="margin: 30px 0;">
          <li style="margin: 10px 0">
            ■上段、読み込み完了後に画像のopacityを0.5に指定
          </li>
          <li style="margin: 10px 0">
            ■下段、読み込み完了後に画像のopacityを1.0に指定
          </li>
          <li style="margin: 10px 0">
            ■左列、読み込み完了後にローディング アニメーションを停止
          </li>
          <li style="margin: 10px 0">
            ■右列、読み込み完了後にローディング アニメーションを続行
          </li>
        </ul>
        <div class="demo-image">
          <ul>
            <li>
              <p style="font-size:12px; line-height: 1.15;">opacity = 0.5<br>
                アニメーション停止
              </p>
              <div class="loading-box-demo-05 remove">
                <img loading="lazy" src="./img/readme/100MB.jpg" alt="demo-img">
              </div>
            </li>
            <li>
              <p style="font-size:12px; line-height: 1.15;">opacity = 0.5<br>
                アニメーション続行
              </p>
              <div class="loading-box-demo-05">
                <img loading="lazy" src="./img/readme/100MB.jpg" alt="demo-img">
              </div>
            </li>
            <li>
              <p style="font-size:12px; line-height: 1.15;">opacity = 1.0<br>
                アニメーション停止
              </p>
              <div class="loading-box-demo-10 remove">
                <img loading="lazy" src="./img/readme/100MB.jpg" alt="demo-img">
              </div>
            </li>
            <li>
              <p style="font-size:12px; line-height: 1.15;">opacity = 1.0<br>
                アニメーション続行
              </p>
              <div class="loading-box-demo-10">
                <img loading="lazy" src="./img/readme/100MB.jpg" alt="demo-img">
              </div>
            </li>
          </ul>
          <button id="reload">RELOAD</button>
        </div>

      </section>
      <div class="message">
        <p>
          以上、当ポートフォリオサイト作成時に配慮した点や<br>
          採用した機能を記載させていただきました。
          ここまで読んでくださり、ありがとうございました。
        </p>
      </div>
    </div>

  </main>

  <script>
    const loadingDemo05 = document.querySelectorAll(".loading-box-demo-05 > img");
    loadingDemo05.forEach(function(demo05) {
      demo05.addEventListener("load", function() {
        demo05.style.opacity = 0.5;
        if (demo05.parentElement.className === "loading-box-demo-05 remove") {
          demo05.parentElement.classList.remove("loading-box-demo-05");
        }
      });
    });

    const loadingDemo10 = document.querySelectorAll(".loading-box-demo-10 > img");
    loadingDemo10.forEach(function(demo10) {
      demo10.addEventListener("load", function() {
        demo10.style.opacity = 10;
        if (demo10.parentElement.className === "loading-box-demo-10 remove") {
          demo10.parentElement.classList.remove("loading-box-demo-10");
        }
      });
    });

    document.getElementById("reload").addEventListener("click", function() {
      window.location.reload();
    })
  </script>

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
              <img loading="lazy" src="https://buchi.work/img/clipping/clipping-combine-01.jpg" alt="combine image 01">
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
              <img loading="lazy" src="https://buchi.work/img/clipping/clipping-combine-02.jpg" alt="combine image 02">
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
              <img loading="lazy" src="https://buchi.work/img/clipping/clipping-combine-03.jpg" alt="combine image 03">
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
      include("../_php_app/_parts/_footer.php");
  ?>

  <script src="../js/main.js"></script>

</body>

</html>