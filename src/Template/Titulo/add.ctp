<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Titulo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="titulo form large-9 medium-8 columns content">
    <?= $this->Form->create($titulo) ?>
    <fieldset>
        <legend><?= __('Add Titulo') ?></legend>
        <?php
            echo $this->Form->input('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
