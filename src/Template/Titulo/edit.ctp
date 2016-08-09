<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $titulo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $titulo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Titulo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="titulo form large-9 medium-8 columns content">
    <?= $this->Form->create($titulo) ?>
    <fieldset>
        <legend><?= __('Edit Titulo') ?></legend>
        <?php
            echo $this->Form->input('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
