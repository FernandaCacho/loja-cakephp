<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Carro Entity
 *
 * @property int $id
 * @property string $nome_carro
 * @property int $marca_id
 * @property string $ano_carro
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Marca $marca
 */
class Carro extends Entity
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
        'nome_carro' => true,
        'marca_id' => true,
        'ano_carro' => true,
        'created' => true,
        'modified' => true,
        'marca' => true,
    ];
}
