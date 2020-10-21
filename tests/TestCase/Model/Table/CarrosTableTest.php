<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarrosTable Test Case
 */
class CarrosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CarrosTable
     */
    protected $Carros;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Carros',
        'app.Marcas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Carros') ? [] : ['className' => CarrosTable::class];
        $this->Carros = TableRegistry::getTableLocator()->get('Carros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Carros);

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
