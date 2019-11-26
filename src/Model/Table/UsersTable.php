<?php
namespace app\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\Query;

class UsersTable extends Table
{
    public function initialize(array $config){
		$this->belongsTo('People');
	}

    public function validationDefault(Validator $validator)
    {
        $validator
            ->intger('id')
            ->notEmpty('id','必須項目です');
        $validator
            ->integer('username')
            ->requirePresence('username');
        $validator
            ->notEmpty('password','必須項目です');
        $validator
            ->notEmpty('role', 'A role is required')
            ->add('role', 'inList', [
                'rule' => ['inList', ['admin', 'user']],
                'message' => 'Please enter a valid role'
            ]);

        return $validator;
    }

}