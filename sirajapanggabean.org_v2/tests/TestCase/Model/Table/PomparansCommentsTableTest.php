<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PomparansCommentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PomparansCommentsTable Test Case
 */
class PomparansCommentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PomparansCommentsTable
     */
    protected $PomparansComments;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PomparansComments',
        'app.Pomparans',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PomparansComments') ? [] : ['className' => PomparansCommentsTable::class];
        $this->PomparansComments = TableRegistry::getTableLocator()->get('PomparansComments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PomparansComments);

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
