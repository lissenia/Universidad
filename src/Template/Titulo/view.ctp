<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Titulo'), ['action' => 'edit', $titulo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Titulo'), ['action' => 'delete', $titulo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $titulo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Titulo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Titulo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="titulo view large-9 medium-8 columns content">
    <h3><?= h($titulo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Descripcion') ?></th>
            <td><?= h($titulo->descripcion) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($titulo->id) ?></td>
        </tr>
    </table>
</div>
