<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InsercoesCarrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InsercoesCarrosTable Test Case
 */
class InsercoesCarrosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InsercoesCarrosTable
     */
    protected $InsercoesCarros;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.InsercoesCarros',
        'app.CategoriasMarcas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('InsercoesCarros') ? [] : ['className' => InsercoesCarrosTable::class];
        $this->InsercoesCarros = TableRegistry::getTableLocator()->get('InsercoesCarros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->InsercoesCarros);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
