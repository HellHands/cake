<!-- File: src/Template/Schools/add_school_status.ctp -->


<div class="x" style="margin: 20px;">
<h1>Add School Status</h1>
<?php
    echo $this->Form->create($status);    
    echo $this->Form->input('SEMIS Code', ['name' => 'id', 'value' => $status->id, 'readonly']);
    
    echo $this->Form->select('schoolCondition', 
        ['Viable' => 'Viable', 'Non-Viable' => 'Non-Viable'],
        ['empty' => 'School Condition']
        );

    echo $this->Form->select('schoolDetail', 
        [1 => '1=Functional', 2 => '2=Temporary Closed', 3 => '3=Permanent Closed'],
        ['empty' => 'School Detail']);

    echo $this->Form->input('Temporary or Permanently Closed (Month & Year)', ['name' => 'tmpprmCloseMY', 'placeholder' => 'XXXX-XX-XX', 'type'=>'date']);
    echo $this->Form->input('Temporary or Permanently Closed Major Reason', ['name' => 'tmpprmCloseMajor']);
    echo $this->Form->button(__('Add School Status'));
    echo $this->Form->end();
    
?>    
</div>
