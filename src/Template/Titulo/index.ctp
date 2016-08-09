<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Opciones'), ['controller' => 'Pages', 'action' => 'display', 'index']) ?></li>
        <li><?= $this->Html->link(__('New Titulo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="titulo index large-9 medium-8 columns content">
    <h3><?= __('Titulo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('descripcion') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($titulo as $titulo): ?>
            <tr>
                <td><?= $this->Number->format($titulo->id) ?></td>
                <td><?= h($titulo->descripcion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $titulo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $titulo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $titulo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $titulo->id)]) ?>
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
