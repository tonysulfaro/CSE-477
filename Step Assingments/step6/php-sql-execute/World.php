
<?php

class World {

    public function __construct() {
        try {
            $this->pdo = new PDO(
                'mysql:host=mysql-user.cse.msu.edu;dbname=cse477s',
                'cse477sro',
                'Letmesql');
        } catch(PDOException $e) {
            // If we can't connect we die!
            die("Unable to select database");
        }
    }

    public function present() {
        $sql = <<<SQL
select name, population
from Country
where region=?
SQL;

        $stmt = $this->pdo->prepare($sql);
        if(!$stmt->execute(array("Caribbean"))) {
            return "<p>SQL execution failed.</p>";
        }

        $html = <<<HTML
<table>
<tr><th>Country</th><th>Population</th></tr>
HTML;

        foreach($stmt as $row) {
            $name = $row['name'];
            $pop = $row['population'];
            $html .= "<tr><td>$name</td><td>$pop</td></tr>";
        }

        $html .= "</table>";

        return $html;
    }

    private $pdo;   // PDO object
}