<!-- File: src/Template/Schools/view.ctp -->
<div class="x" style="margin: 10px;">
	<p style="margin-bottom: 0; margin-top: 10px;"><strong>SEMIS: </strong> <?= h($school->id) ?></p>
	<p style="margin-bottom: 0;"><strong>Taluka/Town: </strong> <?= h($school->taluka) ?></p>
	<p style="margin-bottom: 0;"><strong>Union Council: </strong> <?= h($school->uc) ?></p>
	<p style="margin-bottom: 0;"><strong>Tappa: </strong> <?= h($school->tappa) ?></p>
	<p style="margin-bottom: 0;"><strong>Deh: </strong> <?= h($school->deh) ?></p>
	<p style="margin-bottom: 0;"><strong>NA: </strong> <?= h($school->na) ?></p>
	<p style="margin-bottom: 0;"><strong>PS: </strong> <?= h($school->ps) ?></p>
	<p style="margin-bottom: 0;"><strong>Area/Village: </strong> <?= h($school->area) ?></p>
	<p style="margin-bottom: 0;"><strong>Name: </strong> <?= h($school->name) ?></p>
	<p style="margin-bottom: 0;"><strong>Address: </strong> <?= h($school->address) ?></p>
	<p style="margin-bottom: 0;"><strong>Phone: </strong> <?= h($school->phone) ?></p>
	<p style="margin-bottom: 0;"><strong>Provider Name: </strong> <?= h($school->pname) ?></p>
	<p style="margin-bottom: 0;"><strong>Provider CNIC: </strong> <?= h($school->pcnic) ?></p>
	<p style="margin-bottom: 0;"><strong>Provider Designation: </strong> <?= h($school->pdesignation) ?></p>
	<p style="margin-bottom: 0;"><strong>Provider Gender: </strong> <?= h($school->pgender) ?></p>
	<p style="margin-bottom: 0;"><strong>Provider Contact: </strong> <?= h($school->pcontact) ?></p>
	<p style="margin-bottom: 0;"><strong>Provider Email: </strong> <?= h($school->pemail) ?></p>	
</div>
<hr>
<div class="x">
	<?= $this->Html->link('Add School Status', ['action' => 'addSchoolStatus', $school->id]) ?><br>
	<?= $this->Html->link('Add School Info', ['action' => 'add']) ?><br>
	<?= $this->Html->link('Add School Building Info', ['action' => 'add']) ?><br>
	<?= $this->Html->link('Add School Facilities', ['action' => 'add']) ?><br>
</div>

