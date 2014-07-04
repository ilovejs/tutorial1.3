<h1>Register to be Author</h1>
<?php
    echo $this->Form->create('Author', array('url' => array('controller' => 'authors',
        'action' => 'register')));
    echo $this->Form->input('username');
    echo $this->Form->input('email');
    echo $this->Form->input('password');
    echo $this->Form->end('Register');
?>
