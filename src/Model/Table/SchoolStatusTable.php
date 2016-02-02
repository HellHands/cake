<?php

// src/Model/Table/SchoolStatusTable.php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class SchoolStatusTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Schools');
    }

    /*public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('id')
            ->requirePresence('id')
            ->notEmpty('name')
            ->requirePresence('name')
            ->notEmpty('pcnic')
            ->requirePresence('pcnic');

        return $validator;
    }*/
}

