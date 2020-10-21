<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carro[]|\Cake\Collection\CollectionInterface $carros
 */
?>
<div class="carros index content">
    <?= $this->Html->link(__('Novo Carro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Carros') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome_carro') ?></th>
                    <th><?= $this->Paginator->sort('marca_id') ?></th>
                    <th><?= $this->Paginator->sort('ano_carro') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carros as $carro): ?>
                <tr>
                    <td><?= $this->Number->format($carro->id) ?></td>
                    <td><?= h($carro->nome_carro) ?></td>
                    <td><?= $carro->has('marca') ? $this->Html->link($carro->marca->nome_marca, ['controller' => 'Marcas', 'action' => 'view', $carro->marca->id]) : '' ?></td>
                    <td><?= h($carro->ano_carro) ?></td>
                    <td><?= h($carro->created) ?></td>
                    <td><?= h($carro->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $carro->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carro->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carro->id], ['confirm' => __('Tem certeza que deseja apagar # {0}?', $carro->id)]) ?>
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
