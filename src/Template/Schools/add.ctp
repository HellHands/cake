<!-- File: src/Template/Schools/add.ctp -->


<div class="x" style="margin: 10px;">
<h1>Add School</h1>
<?php
    echo $this->Form->create($school);    
    echo $this->Form->input('semiscode', ['label' => 'SEMIS Code', 'name' => 'id']);
    echo $this->Form->input('Taluka/Town', ['name' => 'taluka']);
    echo $this->Form->input('Union Council', ['name' => 'uc']);
    echo $this->Form->input('Tappa', ['name' => 'tappa']);
    echo $this->Form->input('DEH', ['name' => 'deh']);
    echo $this->Form->input('NA', ['name' => 'na']);
    echo $this->Form->input('PS', ['name' => 'ps']);
    echo $this->Form->input('Area/Village', ['name' => 'area']);
    echo $this->Form->input('schoolname', ['label' => 'School Name', 'name' => 'name']);
    echo $this->Form->input('School Address', ['name' => 'address']);
    echo $this->Form->input('School Phone', ['name' => 'phone']);
    echo $this->Form->input('Provider Name', ['name' => 'pname']);
    echo $this->Form->input('Provider CNIC', ['name' => 'pcnic']);
    echo $this->Form->input('Provider Designation', ['name' => 'pdesignation']);
    echo $this->Form->input('Provider Gender', ['name' => 'pgender']);
    echo $this->Form->input('Provider Contact', ['name' => 'pcontact']);
    echo $this->Form->input('Provider Email', ['name' => 'pemail']);
    //echo $this->Form->button(__('Add School'));
    echo $this->Form->submit('Add School', array('formnovalidate' => true));
    echo $this->Form->end();
?>    
</div>
