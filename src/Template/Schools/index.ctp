<!-- File: src/Template/Schools/index.ctp -->

<h1>Schools</h1>
<?= $this->Html->link('Add School', ['action' => 'add']);
 //debug(json_encode($schools, JSON_PRETTY_PRINT)) ?>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Provider CNIC</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out school info -->

    <?php foreach ($schools as $school): ?>
    <tr>
        <td><?= $school->id ?></td>
        <td>
            <?= $this->Html->link($school->name, ['action' => 'view', $school->id]) ?>
        </td>
        <td>
            <?= $school->pcnic ?>
        </td>
        <!--<td>
            //$school->created->format(DATE_RFC850)
        </td>!-->
        <td>
            <?= $this->Html->link('Edit', ['action' => 'edit', $school->id]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
