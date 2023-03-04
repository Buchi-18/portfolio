# portfolio

画像や iframe にネイティブ遅延読み込みを使用する。
(loading 属性 loading="")
https://web.dev/browser-level-image-lazy-loading/

上記に対応していないブラウザの対応を必要とする場合、フォールバックとして
javascript ライブラリ等の使用を検討する必要があるが

今回は、Safari がバージョン 15.4 でネイティブ Lazy-load をデフォルトでサポートしたことを受けて、主要なブラウザは loading 属性をサポートしていると考え、loading 属性のみの使用とした。

【ローディング アニメーションの設置】
設置対象の直上の親要素に class="loading-box" のクラスを指定し background-image でローディング アニメーションを読み込む。

class="loading-box" 内容

.loading-box {
display: block;
width: 100%;
background-image: url(../img/loading-image.svg);
background-size: cover;
background-position: center;
background-repeat: no-repeat;
aspect-ratio: 1;
}
直上の親要素 width と height(aspect-ratio:;)を指定して、ローリングイメージの表示スペースを確保し、Cumulative Layout Shift (累積レイアウト シフト数、CLS) に配慮する。
※親要素がインライン要素の場合、display:block;が必要。

デフォルトではアスペクト比を 1:1 としているので、シーンに合わせてアスペクト比を上書きするクラスを追加する。
【例 16:9 の画像の場合】
.aspect-16-9{
aspect-ratio: 16/9;
}

<div class="loading-box aspect-16-9" >
  <img src="image" alt="alt">
</div>
