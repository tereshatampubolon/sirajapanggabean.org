<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GedcomsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GedcomsTable Test Case
 */
class GedcomsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GedcomsTable
     */
    protected $Gedcoms;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Gedcoms',
        'app.Is',
        'app.Pomparans',
        'app.PomparansOld',
        'app.Tmp2pomparans',
        'app.Tmppomparans',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Gedcoms') ? [] : ['className' => GedcomsTable::class];
        $this->Gedcoms = TableRegistry::getTableLocator()->get('Gedcoms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Gedcoms);

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
