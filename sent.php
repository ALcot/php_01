<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>お問い合わせ</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <div class="header">
<img src="img/h.png" alt="へっだー">
  </div>

  <div class="main">
    <div class="thanks-message">お問い合わせありがとうございます。</div>
    <div class="display-contact">
      <div class="form-title">お問い合わせ内容</div>

      <div class="form-item">■ 名前</div>
      <?php echo $_POST['name']; ?>

      <div class="form-item">■ 住所</div>
      <?php echo $_POST['ad']; ?>

      <div class="form-item">■ 年齢</div>
      <?php 
      echo $_POST['age']
      ?>

      <div class="form-item">■ 内容</div>
      <?php echo $_POST['body']; ?>
    </div>
  </div>


<div class="container">
<a href="index.php" class="btn-border">TOPに戻る</a>
</div>





</body>
</html>