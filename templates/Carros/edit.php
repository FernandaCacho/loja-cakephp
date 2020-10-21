<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carro $carro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Apagar'),
                ['action' => 'delete', $carro->id],
                ['confirm' => __('Tem certeza que deseja apagar # {0}?', $carro->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Carros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carros form content">
            <?= $this->Form->create($carro) ?>
            <fieldset>
                <legend><?= __('Editar Carro') ?></legend>
                <?php
                    echo $this->Form->control('nome_carro');
                    echo $this->Form->control('marca_id', ['options' => $marcas]);
                    echo $this->Form->control('ano_carro');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
