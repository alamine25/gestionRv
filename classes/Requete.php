<?php
class Requete extends Basedonn 
{
    // selectionnner depuis la base de donnee
    public function select()
    {
        $sql = "SELECT * FROM rendez-vous";

        $resultat = $this->connect()->query($sql);

        if($resultat->rowCount() > 0)
        {
            while ($row = $resultat->fetch()){

                $data[] = $row;
            }

            return $data;
        }


    }
}
?>