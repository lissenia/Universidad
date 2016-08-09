<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Opciones'), ['controller' => 'Pages', 'action' => 'display', 'index']) ?></li>
        <li><?= $this->Html->link(__('New Facultad'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Universidad'), ['controller' => 'Universidad', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Universidad'), ['controller' => 'Universidad', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="facultad index large-9 medium-8 columns content">
    <h3><?= __('Facultad') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('universidad_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($facultad as $facultad): ?>
            <tr>
                <td><?= $this->Number->format($facultad->id) ?></td>
                <td><?= h($facultad->nombre) ?></td>
                <td><?= $facultad->has('universidad') ? $this->Html->link($facultad->universidad->nombre, ['controller' => 'Universidad', 'action' => 'view', $facultad->universidad->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $facultad->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $facultad->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $facultad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $facultad->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
