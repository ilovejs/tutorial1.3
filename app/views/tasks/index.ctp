<h2>Todo List</h2>
<section id="todoapp">
    <header id="header">
        <h1>todos</h1>
        <input id="new-todo" placeholder="What needs to be done?" autofocus>
    </header>

    <section id="main">
        <input id="toggle-all" type="checkbox">
        <label for="toggle-all">Mark all as complete</label>

        <ul id="todo-list">
            <?php foreach($tasks as $task): ?>
                <li>
                    <?php echo $task['body']?> |
                    <?php echo $this->Time->nice($task['createdDate'])?> |
                    <?php echo $this->Time->nice($task['finishDate'])?> |
                    <?php echo $task['authodId']?>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <footer id="footer">
        Username: <?php echo $username; ?> <br>
        UserId: <?php echo $authorid; ?> <br>
        <?php echo $this->Html->link('Create a task:', array('action' => 'add')); ?>
    </footer>
</section>