<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FungsisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FungsisTable Test Case
 */
class FungsisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FungsisTable
     */
    protected $Fungsis;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Fungsis',
        'app.Modules',
        'app.Groups',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Fungsis') ? [] : ['className' => FungsisTable::class];
        $this->Fungsis = TableRegistry::getTableLocator()->get('Fungsis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Fungsis);

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
