<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Создание Json</title>
</head>
<body>
    <div style="float: left; margin-left: 15px;">
        <a href="">Предыдущий</a> <a href="" style="margin-left: 20px">Следующий</a>
        <form method="POST" action="index.php?convert=<?php echo $_GET['dir'] ?>">
            <p><label>Цвет 1: <input type="text" name="color1"></label></p>
            <p><label>Цвет 2: <input type="text" name="color2"></label></p>
            <p><label>Цвет 3: <input type="text" name="color3"></label></p>
            <p><label>Суть: <input type="text" name="subject"></label></p>
            <p><label>Субсуть: <input type="text" name="subsubject"></label></p>
            <p><input type="submit"></p>
        </form>
    </div>
    <div style="text-align: right; margin: 15px;">
    <img src="<?php echo "templates/{$_GET['dir']}/preview.jpg"; ?>" alt="Preview">
    </div>
</body>
</html>