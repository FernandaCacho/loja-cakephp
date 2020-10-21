<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MarcasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MarcasTable Test Case
 */
class MarcasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MarcasTable
     */
    protected $Marcas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Marcas',
        'app.Carros',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Marcas') ? [] : ['className' => MarcasTable::class];
        $this->Marcas = TableRegistry::getTableLocator()->get('Marcas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Marcas);

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
