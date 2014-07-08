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
                    <?php echo $task['Task']['body']?> |
                    <?php echo $this->Time->niceShort($task['Task']['createdDate']) ?> |
                    <?php echo $this->Time->niceShort($task['Task']['finishDate']) ?> |
                    <?php echo $this->Html->link('Edit',array('action'=> 'edit', $task['Task']['id'])) ?> |
                    <?php echo $this->Html->link('Del',array('action'=> 'delete', $task['Task']['id']), null, 'Are you sure?') ?>
                    <!--by user: <?php //echo $task['Task']['author_id']?>-->
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <footer id="footer">
<!--        Username: --><?php //echo $username; ?><!-- <br>-->
<!--        UserId: --><?php //echo $userid; ?><!-- <br>-->

        <?php echo $this->Html->link('Create a task:', array('action' => 'add')); ?>
    </footer>
</section>