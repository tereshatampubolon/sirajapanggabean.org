<div class="column-responsive column-50">
<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Verifikasi Ganti Password</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Silahkan Login Kembali Untuk Ganti Password') ?></legend>
        <?= $this->Form->control('username'); ?>
        <?= $this->Form->control('password'); ?>
  
    </fieldset>
    <ul>
    <li><?= $this->Form->submit(__('Login Kembali')); ?></li>
    <?= $this->Form->end() ?>
    
   
    </ul>
</div>
</div>