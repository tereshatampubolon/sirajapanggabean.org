<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModulesFungsisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModulesFungsisTable Test Case
 */
class ModulesFungsisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ModulesFungsisTable
     */
    protected $ModulesFungsis;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ModulesFungsis',
        'app.Modules',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ModulesFungsis') ? [] : ['className' => ModulesFungsisTable::class];
        $this->ModulesFungsis = TableRegistry::getTableLocator()->get('ModulesFungsis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ModulesFungsis);

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
