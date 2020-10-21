<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Carros Model
 *
 * @property \App\Model\Table\MarcasTable&\Cake\ORM\Association\BelongsTo $Marcas
 *
 * @method \App\Model\Entity\Carro newEmptyEntity()
 * @method \App\Model\Entity\Carro newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Carro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Carro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Carro findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Carro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Carro[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Carro|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Carro saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Carro[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Carro[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Carro[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Carro[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CarrosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('carros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Marcas', [
            'foreignKey' => 'marca_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome_carro')
            ->maxLength('nome_carro', 30)
            ->requirePresence('nome_carro', 'create')
            ->notEmptyString('nome_carro');

        $validator
            ->scalar('ano_carro')
            ->requirePresence('ano_carro', 'create')
            ->notEmptyString('ano_carro');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['marca_id'], 'Marcas'));

        return $rules;
    }
}
