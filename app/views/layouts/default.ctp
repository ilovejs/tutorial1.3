<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title_for_layout?></title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css('todolist');
        echo $scripts_for_layout;
    ?>
</head>
<body>

<?php echo $content_for_layout ?>

<footer id="info">
    <p>Double-click to edit a todo</p>
    <p>Written by <a href="https://github.com/ilovejs">Michael Zhuang</a></p>
    <p>Part of <a href="http://todomvc.com">TodoMVC</a></p>
</footer>

</body>
</html>