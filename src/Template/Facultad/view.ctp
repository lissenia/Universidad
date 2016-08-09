<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Facultad'), ['action' => 'edit', $facultad->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Facultad'), ['action' => 'delete', $facultad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $facultad->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Facultad'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Facultad'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Universidad'), ['controller' => 'Universidad', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Universidad'), ['controller' => 'Universidad', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="facultad view large-9 medium-8 columns content">
    <h3><?= h($facultad->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($facultad->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Universidad') ?></th>
            <td><?= $facultad->has('universidad') ? $this->Html->link($facultad->universidad->id, ['controller' => 'Universidad', 'action' => 'view', $facultad->universidad->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($facultad->id) ?></td>
        </tr>
    </table>
</div>
