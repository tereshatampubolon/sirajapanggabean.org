<div class="column-responsive column-50">
<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Login</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Masukkan Username dan Password Anda') ?></legend>
        <?= $this->Form->control('username'); ?>
        <?= $this->Form->control('password'); ?>
  
    </fieldset>
    <ul>
    <li><?= $this->Form->submit(__('Login')); ?></li>

    <!-- <li><?= $this->html->link('Lupa Password?',['action' =>'forgotpassword'],['class' =>'button btn-primary']) ?></li> -->
    <?= $this->Form->end() ?>
    
   
    </ul>
</div>
</div>