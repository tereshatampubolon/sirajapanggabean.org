<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AppscodesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AppscodesTable Test Case
 */
class AppscodesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AppscodesTable
     */
    protected $Appscodes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Appscodes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Appscodes') ? [] : ['className' => AppscodesTable::class];
        $this->Appscodes = TableRegistry::getTableLocator()->get('Appscodes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Appscodes);

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
}
