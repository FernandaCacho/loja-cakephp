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
            <?= $this->Html->link(__('Editar Marca'), ['action' => 'edit', $marca->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Apagar Marca'), ['action' => 'delete', $marca->id], ['confirm' => __('Tem certeza que deseja apagar # {0}?', $marca->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Marcas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nova Marca'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="marcas view content">
            <h3><?= h($marca->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($marca->nome_marca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($marca->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($marca->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($marca->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Relação de Carros') ?></h4>
                <?php if (!empty($marca->carros)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nome Carro') ?></th>
                            <th><?= __('Marca Id') ?></th>
                            <th><?= __('Ano Carro') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                        <?php foreach ($marca->carros as $carros) : ?>
                        <tr>
                            <td><?= h($carros->id) ?></td>
                            <td><?= h($carros->nome_carro) ?></td>
                            <td><?= h($carros->marca_id) ?></td>
                            <td><?= h($carros->ano_carro) ?></td>
                            <td><?= h($carros->created) ?></td>
                            <td><?= h($carros->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Carros', 'action' => 'view', $carros->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Carros', 'action' => 'edit', $carros->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Carros', 'action' => 'delete', $carros->id], ['confirm' => __('Tem certeza que deseja apagar # {0}?', $carros->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
