<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Certificats Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Etudiants
 *
 * @method \App\Model\Entity\Certificat get($primaryKey, $options = [])
 * @method \App\Model\Entity\Certificat newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Certificat[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Certificat|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Certificat patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Certificat[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Certificat findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CertificatsTable extends Table
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

        $this->setTable('certificats');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Etudiants', [
            'foreignKey' => 'certificat_id',
            'targetForeignKey' => 'etudiant_id',
            'joinTable' => 'certificats_etudiants'
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
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->integer('nombre_max')
            ->requirePresence('nombre_max', 'create')
            ->notEmpty('nombre_max');

        return $validator;
    }
}
