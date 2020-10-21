<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriasMarcasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriasMarcasTable Test Case
 */
class CategoriasMarcasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriasMarcasTable
     */
    protected $CategoriasMarcas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CategoriasMarcas',
        'app.InsercaoCarros',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CategoriasMarcas') ? [] : ['className' => CategoriasMarcasTable::class];
        $this->CategoriasMarcas = TableRegistry::getTableLocator()->get('CategoriasMarcas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CategoriasMarcas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
