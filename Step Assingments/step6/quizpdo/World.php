
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

    public function setRegion($region) {
        $this->region = $region;
    }

    public function present() {
        $sql = <<<SQL
select region, code, name
from Country
where region=?
order by name
SQL;

        $stmt = $this->pdo->prepare($sql);
        if(!$stmt->execute(array($this->region))) {
            return "<p>SQL execution failed.</p>";
        }

        $html = <<<HTML
<ul>

HTML;

        // create ul for regions
        foreach($stmt as $row) {
            $name = $row['name'];
            $code = $row['code'];
            $html .= "<li>$name";

            //sql for language
            $sql = <<<SQL
select CountryCode, Language
from CountryLanguage
where CountryCode = ?
SQL;

            $stmt2 = $this->pdo->prepare($sql);
            if(!$stmt2->execute(array($code))) {
                return "<p>SQL execution failed.</p>";
            }

            $html .= "<ul>";

            //generate language container
            foreach($stmt2 as $row2){
                $language = $row2['Language'];
                $code2 = $row2['CountryCode'];
                $html .= "<li>$language</li>";
            }
            $html .= "</ul></li>";
        }


        //sql to get

        $html .= "</ul>";

        return $html;
    }

    private $region;
    private $pdo;   // PDO object
}