<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Tmp2pomparansTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Tmp2pomparansTable Test Case
 */
class Tmp2pomparansTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Tmp2pomparansTable
     */
    protected $Tmp2pomparans;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Tmp2pomparans',
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
        $config = TableRegistry::getTableLocator()->exists('Tmp2pomparans') ? [] : ['className' => Tmp2pomparansTable::class];
        $this->Tmp2pomparans = TableRegistry::getTableLocator()->get('Tmp2pomparans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Tmp2pomparans);

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
