<?php

// src/Model/Table/SchoolsTable.php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class SchoolsTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->hasOne('SchoolStatus');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('semiscode', 'cannot be empty!')
            ->notEmpty('schoolname', 'cannot be empty!')
            ->add('schoolname', 'length', 
                [
                'rule' => ['minLength', 6],
                'message' => 'yoyo!'
                ]);

        return $validator;
    }
}

