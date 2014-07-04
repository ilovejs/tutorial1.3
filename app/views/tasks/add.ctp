<h2>Add Task</h2>

<?php
    echo $this->Form->create('Task');
    echo $this->Form->input('body', array('rows' => '3'));
    echo $this->Form->end('Add Task');
?>