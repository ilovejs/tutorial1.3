<h1>Edit Task</h1>

<?php
    echo $this->Form->create('Task', array('action' => 'edit'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->input('body', array('rows' => '3'));
    echo $this->Form->end('Save Task');
?>