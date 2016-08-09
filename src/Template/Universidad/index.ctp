<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Opciones'), ['controller' => 'Pages', 'action' => 'display', 'index']) ?></li>
        <li><?= $this->Html->link(__('New Universidad'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Facultad'), ['controller' => 'Facultad', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Facultad'), ['controller' => 'Facultad', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="universidad index large-9 medium-8 columns content">
    <h3><?= __('Universidad') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('ciudad') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($universidad as $universidad): ?>
            <tr>
                <td><?= $this->Number->format($universidad->id) ?></td>
                <td><?= h($universidad->nombre) ?></td>
                <td><?= h($universidad->ciudad) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $universidad->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $universidad->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $universidad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $universidad->id)]) ?>
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
