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
            <?= $this->Html->link(__('Editar Carro'), ['action' => 'edit', $carro->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Apagar Carro'), ['action' => 'delete', $carro->id], ['confirm' => __('Tem certeza que deseja apagar # {0}?', $carro->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Carros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo Carro'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carros view content">
            <h3><?= h($carro->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Carro') ?></th>
                    <td><?= h($carro->nome_carro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marca') ?></th>
                    <td><?= $carro->has('marca') ? $this->Html->link($carro->marca->nome_marca, ['controller' => 'Marcas', 'action' => 'view', $carro->marca->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Ano Carro') ?></th>
                    <td><?= h($carro->ano_carro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($carro->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($carro->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($carro->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
