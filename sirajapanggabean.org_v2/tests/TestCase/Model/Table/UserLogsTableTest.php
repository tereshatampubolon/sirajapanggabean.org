<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserLogsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserLogsTable Test Case
 */
class UserLogsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserLogsTable
     */
    protected $UserLogs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.UserLogs',
        'app.Sessions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserLogs') ? [] : ['className' => UserLogsTable::class];
        $this->UserLogs = TableRegistry::getTableLocator()->get('UserLogs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->UserLogs);

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
