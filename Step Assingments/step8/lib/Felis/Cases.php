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

}