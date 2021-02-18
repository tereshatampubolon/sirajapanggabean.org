<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Token $token
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Token'), ['action' => 'edit', $token->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Token'), ['action' => 'delete', $token->id], ['confirm' => __('Are you sure you want to delete # {0}?', $token->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tokens'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Token'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tokens view content">
            <h3><?= h($token->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Token') ?></th>
                    <td><?= h($token->token) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($token->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($token->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($token->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Data') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($token->data)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
