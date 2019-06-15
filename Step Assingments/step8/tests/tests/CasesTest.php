<?php

/** @file
 * Unit tests for the class Cases
 * @cond
 */

class CasesTest extends \PHPUnit\Framework\TestCase {

    private static $site;

    public static function setUpBeforeClass() {
        self::$site = new Felis\Site();
        $localize  = require 'localize.inc.php';
        if(is_callable($localize)) {
            $localize(self::$site);
        }
    }

    protected function setUp() {
        $cases = new Felis\Cases(self::$site);
        $casesTable = $cases->getTableName();

        $users = new Felis\Users(self::$site);
        $usersTable = $users->getTableName();

        $sql = <<<SQL
delete from $casesTable;
insert into $casesTable(id, client, agent, number, summary, status)
values 
    ("22", "9", "8", "16-9876", "case summary", "O"),
    ("23", "10", "8", "16-1234", "case summary", "O"),
    ("25", "9", "8", "15-0011", "case summary", "C");
    
delete from $usersTable;
insert into $usersTable(id, email, name, phone, address, 
                      notes, password, joined, role)
values
    ("8", "cbowen@cse.msu.edu", "Owen, Charles", "", "", "",
        "", "2015-01-01 23:50:26", "A"),
    ("9", "bart@bartman.com", "Simpson, Bart", "", "", "",
        "", "2015-02-01 01:50:26", "C"),
    ("10", "marge@bartman.com", "Simpson, Marge", "", "", "",
        "", "2015-02-01 01:50:26", "C");
SQL;


        echo $usersTable;
        //echo $usersTable;
        self::$site->pdo()->query($sql);
    }

    /**
     * Test to ensure Cases::get is working.
     */
    public function test_get() {
        $cases = new Felis\Cases(self::$site);

        $case = $cases->get(22);
        $this->assertInstanceOf('Felis\ClientCase', $case);

        $this->assertEquals(22, $case->getId());
        $this->assertEquals(9, $case->getClient());
        $this->assertEquals(8, $case->getAgent());
        $this->assertEquals("Owen, Charles", $case->getAgentName());
        $this->assertEquals("Simpson, Bart", $case->getClientName());
        $this->assertEquals("case summary", $case->getSummary());
        $this->assertEquals(Felis\ClientCase::STATUS_OPEN,
            $case->getStatus());
        $this->assertEquals("16-9876", $case->getNumber());
    }

}

/// @endcond