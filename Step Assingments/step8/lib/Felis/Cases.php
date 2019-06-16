<?php


namespace Felis;


class Cases extends Table
{
    public function __construct(Site $site)
    {
        parent::__construct($site, 'case');
    }

    /**
     * Get a case by id
     * @param $id The case by ID
     * @return Object that represents the case if successful,
     *  null otherwise.
     */
    public function get($id) {

        $users = new Users($this->getSite());
        $usersTable = $users->getTableName();

        $sql = <<< SQL
SELECT c.id, c.client, client.name as clientName, 
       c.agent, agent.name as agentName, 
       number, summary, status
from $this->tableName c, 
     $usersTable client, 
     $usersTable agent
where c.client = client.id and 
      c.agent=agent.id and 
      c.id=?
SQL;

        $pdo = $this->pdo();
        $statement = $pdo->prepare($sql);

        $statement->execute(array($id));
        if ($statement->rowCount() === 0) {
            return null;
        }

        return new ClientCase($statement->fetch(\PDO::FETCH_ASSOC));
    }

    public function insert($client, $agent, $number) {
        $sql = <<<SQL
insert into $this->tableName(client, agent, number, summary, status)
values(?, ?, ?, "", ?)
SQL;

        $pdo = $this->pdo();
        $statement = $pdo->prepare($sql);

        try {
            if($statement->execute([$client,
                        $agent,
                        $number,
                        ClientCase::STATUS_OPEN]
                ) === false) {
                return null;
            }
        } catch(\PDOException $e) {
            return null;
        }

        return $pdo->lastInsertId();
    }


    public function getCases(){
        $sql = <<< SQL
select * from $this->tableName as c
inner join test8_user on c.client = test8_user.id
inner join test8_user on c.agent = test8_user.id
SQL;

        $pdo = $this->pdo();
        $statement = $pdo->prepare($sql);

        $statement->execute();
        if ($statement->rowCount() === 0) {
            return array();
        }
    }
}