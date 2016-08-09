<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Facultad Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Universidad
 *
 * @method \App\Model\Entity\Facultad get($primaryKey, $options = [])
 * @method \App\Model\Entity\Facultad newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Facultad[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Facultad|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Facultad patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Facultad[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Facultad findOrCreate($search, callable $callback = null)
 */
class FacultadTable extends Table
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

        $this->table('facultad');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Universidad', [
            'foreignKey' => 'universidad_id',
            'joinType' => 'INNER'
        ]);
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
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['universidad_id'], 'Universidad'));

        return $rules;
    }
}
