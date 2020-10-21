<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marca $marca
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Apagar'),
                ['action' => 'delete', $marca->id],
                ['confirm' => __('Tem certeza que deseja apagar # {0}?', $marca->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Marcas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="marcas form content">
            <?= $this->Form->create($marca) ?>
            <fieldset>
                <legend><?= __('Editar Marca') ?></legend>
                <?php
                    echo $this->Form->control('nome_marca');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
