<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConfigsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConfigsTable Test Case
 */
class ConfigsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConfigsTable
     */
    protected $Configs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Configs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Configs') ? [] : ['className' => ConfigsTable::class];
        $this->Configs = TableRegistry::getTableLocator()->get('Configs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Configs);

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
