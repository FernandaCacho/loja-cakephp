<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marca[]|\Cake\Collection\CollectionInterface $marcas
 */
?>
<div class="marcas index content">
    <?= $this->Html->link(__('Nova Marca'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Marcas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome_marca') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($marcas as $marca): ?>
                <tr>
                    <td><?= $this->Number->format($marca->id) ?></td>
                    <td><?= h($marca->nome_marca) ?></td>
                    <td><?= h($marca->created) ?></td>
                    <td><?= h($marca->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $marca->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $marca->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $marca->id], ['confirm' => __('Tem certeza que deseja apagar # {0}?', $marca->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próxima') . ' >') ?>
            <?= $this->Paginator->last(__('última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
