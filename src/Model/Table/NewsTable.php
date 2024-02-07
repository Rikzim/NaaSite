<?php
    namespace App\Model\Table;
    use Cake\ORM\Table;
    use Cake\Validation\Validator;

    class NewsTable extends Table
    {
        public function initialize(array $config): void
        {
            $this->addBehavior('Timestamp');
        }
        public function validationDefault(Validator $validator): Validator
        {   
            $validator
                ->notEmpty('title')
                ->notEmpty('subtitle')
                ->notEmpty('body');
            return $validator;  
        }
    }
?>