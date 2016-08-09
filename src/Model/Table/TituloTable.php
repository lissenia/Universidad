<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Titulo Model
 *
 * @method \App\Model\Entity\Titulo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Titulo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Titulo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Titulo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Titulo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Titulo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Titulo findOrCreate($search, callable $callback = null)
 */
class TituloTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('titulo');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        return $validator;
    }
}
