<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $facultad->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $facultad->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Facultad'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Universidad'), ['controller' => 'Universidad', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Universidad'), ['controller' => 'Universidad', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="facultad form large-9 medium-8 columns content">
    <?= $this->Form->create($facultad) ?>
    <fieldset>
        <legend><?= __('Edit Facultad') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('universidad_id', ['options' => $universidad]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
