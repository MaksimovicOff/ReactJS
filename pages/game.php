<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Charis+SIL:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>ReactJS</title>
</head>
<body>
<div class="base">
    <?php
      include_once 'header.html';
    ?>
    <div class="game_name">Статистика игры</div>
    <div class="check"><span style="color: green" id="correct">0</span> <span id="space">|</span> <span style="color: red" id="incorrect">0</span></div><br>
    <div class="round">
        <div>
            <div class="task"><span id="task"></span></div>
            <input type="text" id="answer">
            <input type="button" value="Ответить" onclick="check()" class="answer_button">
            <button class="save1">Сохранить</button><br>
        </div>
        <div class="game_b_m">
            <div class="game_b"><a href="lk.php">Назад</a></div>
        </div>
    </div>
</div>
<script src="../jquery-3.6.0.min.js"></script>
<script src="random.js"></script>
</body>
</html>