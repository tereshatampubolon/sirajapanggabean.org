<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PomparansOldTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PomparansOldTable Test Case
 */
class PomparansOldTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PomparansOldTable
     */
    protected $PomparansOld;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PomparansOld',
        'app.Users',
        'app.Gedcoms',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PomparansOld') ? [] : ['className' => PomparansOldTable::class];
        $this->PomparansOld = TableRegistry::getTableLocator()->get('PomparansOld', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PomparansOld);

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
