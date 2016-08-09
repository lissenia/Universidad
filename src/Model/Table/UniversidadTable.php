<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Universidad Model
 *
 * @property \Cake\ORM\Association\HasMany $Facultad
 *
 * @method \App\Model\Entity\Universidad get($primaryKey, $options = [])
 * @method \App\Model\Entity\Universidad newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Universidad[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Universidad|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Universidad patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Universidad[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Universidad findOrCreate($search, callable $callback = null)
 */
class UniversidadTable extends Table
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

        $this->table('universidad');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Facultad', [
            'foreignKey' => 'universidad_id'
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

        $validator
            ->requirePresence('ciudad', 'create')
            ->notEmpty('ciudad');

        return $validator;
    }
}
