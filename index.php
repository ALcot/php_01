<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>初めまして</title>
    <link rel="stylesheet" href="css/style.css?v=2" />
  </head>

  <body>
    <!-- ↓　ここから書く　↓ -->

    <div class="head">
      <img src="img/h.png" alt="うさぎの画像" /
      width="100%"border="4px">
    </div>

    <header>
      <ul id="nav">
        <li><a href="#M.sとは">M.sとは</a></li>
        <li><a href="#好きなもの紹介">好きなもの紹介</a></li>
        <li><a href="#お問い合わせ">お問い合わせ</a>
      </ul>
    </header>
    

    <main>
      <!-- ーーー牧野瞬とはーーー -->
      <section id="M.sとは">
        <h2>~M.sとは~</h2>
        <div class="M">
          <img src="img/a.png" alt="M.sの画像" / width="30%"border="4px" >
        </div>

        <h3>M.s</h3>
        <p class="紹介">
          M.sとは、1993年8月26日生まれ乙女座のA型<br />
          千葉県に生を受け三人兄弟の長男として生きている<br />
          福祉の専門学校を卒業後、障害者支援施設に就職し7年間働く<br />
          今はIT企業の雇われになる為に私生活をボロボロにしながら奔走中。<br />
          <br />
          代表作（手羽先LIFE、料理はクラシルを見ろ！、散歩の流儀 etc...）
        </p>
      </section>


      <!-- ーーー紹介ーーー -->
      <section id="好きなもの紹介">
        <h2>好きなもの紹介</h2>

        <div class="M">
          <img src="img/usagi.png" alt="手羽先" /width="50%"border="4px">
        </div>
        <h3>うさぎの手羽先くん</h3>
        <p class="紹介">
          5年前に里親募集で我が家に来た『手羽先くん』です。<br />
          品種的はネザーランドドワーフというとっても愛嬌のある血筋<br />
          昨今、ペットを飼うにあたって飼い主としての覚悟が足りない人が多いらしいから<br />
          悲しい気持ちになる（夕方のTV NEWS調べ）
        </p>



        <div class="M">
          <img src="img/ryouri.png" alt="料理のイラスト"/width="40%""border="4px">
        </div>
        <h3>下手の横好き…料理！</h3>
        <p class="紹介">
          冷蔵庫の中を見て献立を考えたり<br />
          片付けと調理を効率よくこなすのがゲームみたいで面白い<br />
          でもやっぱりゲームの方が面白い（原神、ウォッチドッグス、SOULシリーズ、SEKIRO　等）
        </p>



        <div class="M">
          <img src="img/sanpo.png" alt="散歩の画像" /width="50%"border="4px">
        </div>
        <h3>のんびりゆっくり～散歩～</h3>

        <p class="紹介">
          何も考えずにボッーと歩くのがリラックスできて◎<br />
          子育て支援に力を入れている自治体は特に好き<br />
          家族で公園に行って子供がパパーママーって遊んで<br />
          自分がつかめないであろう幸せのカタチが沢山でなんか胸が苦しくなる
        </p>

        <p class="shousai">
          →<a href="https://dora-world.com/" target="_blank">M.sくんの好きなものがもっと気になる！</a
          >←
        </p>
      </section>
      <!-- 好きなもの -->


      <section>
        <h2>最後に</h2>
        <p class="紹介">
          他にも話したい事が沢山ありますが、<br />
          まだ私の技術と時間が足りないでこの辺で勘弁してくだい…<br />
          お話や外出、運動ではサッカーや駅伝が好きなので気軽に声をかけてください！<br />
          これから講座の終わりまで、終わってからも互いに切磋琢磨し<br />
          スキルを身に着けエンジニアの現場で働いてていけることを願います。<br />
        </p>
      </section>


      <section id="お問い合わせ">
        <div class="main">
          <div class="contact-form">
            <div class="form-title">お問い合わせ</div>
            <form method="post" action="sent.php">
              <div class="form-item">名前</div>
              <input type="text" name="name" />

              <div class="form-item">住所</div>
              <input type="text" name="ad" />

              <div class="form-item">年齢</div>

              <select name="age">
                <option value="未選択">選択してください</option>
                <option value="わからない">わからない</option>
                <option value="0~5歳">0~5歳</option>
                <option value="6~10歳">6~10歳</option>
                <option value="20代">20代</option>
                <option value="30代">30代</option>
                <option value="その他">その他</option>
                <option value="秘密">秘密</option>
              </select>

              <div class="form-item">内容</div>
              <textarea name="body"></textarea>

              <input type="submit" value="送信" />
            </form>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>

<p class="クレーム">
  ※このwebサイトの内容はすべてフィクションです
  実在する氏名、公共団体、サービスとは一切関係ありません。
</p>
