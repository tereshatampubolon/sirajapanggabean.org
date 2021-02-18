<div class="column-responsive column-50">
<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Forgot Password</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Masukkan Email yang Terdaftar') ?></legend>
        <?= $this->Form->control('email') ?>
    </fieldset>
    <br>
     <li><?= $this->Form->button('Get New Password',['class' => 'btn btn-success']) ?></li>
     <li><?= $this->Html->link(__('Login'), ['controller'=>'users','action' => 'login'], ['class' => 'btn btn-primary']) ?></li>
    <?= $this->Form->end() ?>
</div>
</div>
