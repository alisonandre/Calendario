<?php
echo $this->Form->create(array('action' => 'login'));
echo $this->Form->inputs(array(
   'legend' => 'login',
    'usuario',
    'senha'
));
echo $this->Form->end('login');
?>