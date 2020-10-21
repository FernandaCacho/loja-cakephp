<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Menus[]|\Cake\Collection\CollectionInterface $menus
 */
?>
<div class="menus index content">
    <h3><?= __('Menu') ?></h3>
    
         <td class="actions">
            <?= $this->Html->link(__('Carros'), ['action' => 'carros/index') ?>
            <?= $this->Html->link(__('Marcas'), ['action' => 'marcas/index') ?>
             
        </td>
         
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