<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Universidad'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Facultad'), ['controller' => 'Facultad', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Facultad'), ['controller' => 'Facultad', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="universidad form large-9 medium-8 columns content">
    <?= $this->Form->create($universidad) ?>
    <fieldset>
        <legend><?= __('Add Universidad') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('ciudad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
