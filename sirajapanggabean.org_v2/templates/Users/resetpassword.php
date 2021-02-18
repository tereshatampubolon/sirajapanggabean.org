<div class="column-responsive column-50">    
<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Reset Password</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Masukkan Password Baru') ?></legend>
        
            <?= $this->Form->control('password',['class' => 'form-control']); ?>
    </fieldset>
    <ul>
    

    <li><?= $this->form->button('Reset Password',['class' =>'button btn-success']) ?></li>
    <?= $this->Form->end() ?>
   
    </ul>
</div> 
</div>