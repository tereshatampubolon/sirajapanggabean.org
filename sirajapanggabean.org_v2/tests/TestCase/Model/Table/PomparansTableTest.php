<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PomparansTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PomparansTable Test Case
 */
class PomparansTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PomparansTable
     */
    protected $Pomparans;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Pomparans',
        'app.Users',
        'app.Gedcoms',
        'app.Pages',
        'app.PomparansComments',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pomparans') ? [] : ['className' => PomparansTable::class];
        $this->Pomparans = TableRegistry::getTableLocator()->get('Pomparans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Pomparans);

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
