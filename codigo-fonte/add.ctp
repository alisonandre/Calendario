<?php
echo $this->Form->create();
echo $this->Form->inputs(array(
    'legend' => 'Cadastrar',
    'usuario',
    'senha'
));
echo $this->Form->end('Aplicar');
?>