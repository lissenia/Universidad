<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TituloTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TituloTable Test Case
 */
class TituloTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TituloTable
     */
    public $Titulo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.titulo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Titulo') ? [] : ['className' => 'App\Model\Table\TituloTable'];
        $this->Titulo = TableRegistry::get('Titulo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Titulo);

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
