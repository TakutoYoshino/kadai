<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザー登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

  <!-- Head[Start] -->
  <?php
  session_start();
  include("menu.php");
  ?>
  <!-- Head[End] -->

  <!-- Main[Start] -->
  <form method="post" action="insert.php">
    <div class="jumbotron">
     <fieldset>
      <legend>フリーアンケート</legend>
      <label>名前：<input type="text" name="name"></label><br>
      <label>Email：<input type="text" name="email"></label><br>
      <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
      <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>