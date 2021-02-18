<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FormulirsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FormulirsTable Test Case
 */
class FormulirsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FormulirsTable
     */
    protected $Formulirs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Formulirs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Formulirs') ? [] : ['className' => FormulirsTable::class];
        $this->Formulirs = TableRegistry::getTableLocator()->get('Formulirs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Formulirs);

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
