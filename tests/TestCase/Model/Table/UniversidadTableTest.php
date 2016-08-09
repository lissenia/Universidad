<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UniversidadTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UniversidadTable Test Case
 */
class UniversidadTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UniversidadTable
     */
    public $Universidad;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.universidad',
        'app.facultad'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Universidad') ? [] : ['className' => 'App\Model\Table\UniversidadTable'];
        $this->Universidad = TableRegistry::get('Universidad', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Universidad);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
