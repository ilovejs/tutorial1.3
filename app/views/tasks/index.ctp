<h2>Todo List</h2>
<?php echo $username; ?> <br>

<?php echo $authorid; ?>

<section id="todoapp">
    <header id="header">
        <h1>todos</h1>
        <input id="new-todo" placeholder="What needs to be done?" autofocus>
    </header>
    <section id="main">
        <input id="toggle-all" type="checkbox">
        <label for="toggle-all">Mark all as complete</label>
        <ul id="todo-list"></ul>
    </section>
    <footer id="footer"></footer>
</section>