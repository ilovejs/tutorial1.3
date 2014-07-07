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
<?php
    echo $this->Session->flash();
    echo $this->Session->flash('auth');
?>

<?php echo $content_for_layout ?>

<?php
    $loginName = $this->Session->read('Auth.User');
    if($loginName){
        echo 'Profile:'. $loginName['username'];
    } else {
        echo 'Please Login in';
    }

    echo $this->Html->link('Logout',array('controller'=>'users', 'action'=>'logout'))
?>

<footer id="info">
    <p>Double-click to edit a todo</p>
    <p>Written by <a href="https://github.com/ilovejs">Michael Zhuang</a></p>
    <p>Part of <a href="http://todomvc.com">TodoMVC</a></p>
</footer>

</body>
</html>