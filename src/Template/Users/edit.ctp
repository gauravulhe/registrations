<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('full_name');
            echo $this->Form->input('address');
            echo 'Country';
            $country = ['India' => 'India', 'Japan' => 'Japan', 'UK' => 'UK'];
            echo $this->Form->select('country', $country, ['default' => 'India'], [
                'label' => ['text' => 'Country']
            ]);
            echo $this->Form->input('zip_code');

            echo 'Gender'; 
            echo '<br><br>';           
            echo $this->Form->radio(
                'gender',
                [
                    ['value' => 'Male', 'text' => 'Male'],
                    ['value' => 'Female', 'text' => 'Female'],
                ]
            );
            echo $this->Form->input('date_of_birth',[
                'label' => 'Date Of Birth',
                'minYear' => date('Y') - 70,
                'maxYear' => date('Y') - 18,
                'monthNames' => true,
            ]);
            echo 'Language<br>'; 
            echo '<br>';
            /*echo $this->Form->checkbox('language', [
                'value' => 'English',
            ]);
            echo 'English<br>';
            echo $this->Form->checkbox('language', [
                'value' => 'Hindi',
            ]);
            echo 'Hindi<br>';*/
            $options = [
                'English' => 'English',
                'Hindi' => 'Hindi'
            ];
            echo $this->Form->select('language', $options, [
                'multiple' => 'select'
            ]);
            echo $this->Form->input('about_yourself', ['required' => false]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
