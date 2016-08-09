<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Universidad'), ['action' => 'edit', $universidad->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Universidad'), ['action' => 'delete', $universidad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $universidad->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Universidad'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Universidad'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Facultad'), ['controller' => 'Facultad', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Facultad'), ['controller' => 'Facultad', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="universidad view large-9 medium-8 columns content">
    <h3><?= h($universidad->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($universidad->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Ciudad') ?></th>
            <td><?= h($universidad->ciudad) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($universidad->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Facultad') ?></h4>
        <?php if (!empty($universidad->facultad)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nombre') ?></th>
                <th><?= __('Universidad Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($universidad->facultad as $facultad): ?>
            <tr>
                <td><?= h($facultad->id) ?></td>
                <td><?= h($facultad->nombre) ?></td>
                <td><?= h($facultad->universidad_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Facultad', 'action' => 'view', $facultad->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Facultad', 'action' => 'edit', $facultad->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Facultad', 'action' => 'delete', $facultad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $facultad->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
