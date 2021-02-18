<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GroupsModulesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GroupsModulesTable Test Case
 */
class GroupsModulesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GroupsModulesTable
     */
    protected $GroupsModules;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.GroupsModules',
        'app.Groups',
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
        $config = TableRegistry::getTableLocator()->exists('GroupsModules') ? [] : ['className' => GroupsModulesTable::class];
        $this->GroupsModules = TableRegistry::getTableLocator()->get('GroupsModules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->GroupsModules);

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
