<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * NotificationsUser Entity
 *
 * @property int $id
 * @property string $titre
 * @property int $user_id
 * @property \Cake\I18n\Time $created
 * @property string $principale
 * @property string $commentaire
 * @property string $lien
 * @property string $style
 *
 * @property \App\Model\Entity\User $user
 */
class NotificationsUser extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
