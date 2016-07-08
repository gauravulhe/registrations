<div class="users form">
	<?= $this->Flash->render('auth') ?>
	<?= $this->Form->create() ?>
		<fieldset>
			<legend><?= __('Enter email and password') ?></legend>
			<?= $this->Form->input('email') ?>
			<?= $this->Form->input('password') ?>
			<?= $this->Form->button(__('Login')) ?>
		</fieldset>
	<?= $this->Form->end() ?>
</div>