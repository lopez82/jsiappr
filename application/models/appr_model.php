<?php 

class Appr_model extends CI_Model{

    public function get_approvList($date_debut,$date_fin){

        $sql ="SELECT  CONCAT(nom,' ',prenom) as nom_prenom,nbre_comprime,date_approv FROM approv LEFT JOIN patient ON(approv.patient_id = patient.patient_id) ";

        if($date_debut && $date_fin){

            $sql.=" WHERE date_approv >= '".$date_debut."' AND date_approv <= '".$date_fin."'";
        }

        else if($date_debut){

            $sql.=" WHERE date_approv >= ".$date_debut;
        }
        else if($date_fin){

            $sql.=" WHERE date_approv <= ".$date_fin;
        }

        

        return $this->db->query($sql)->result_array();


    }

    public function get_approvTotal($date_debut,$date_fin){

        $sql ="SELECT  COUNT(*) as 'total' FROM approv LEFT JOIN patient ON(approv.patient_id = patient.patient_id) ";

        if($date_debut && $date_fin){

            $sql.=" WHERE date_approv >= '".$date_debut."' AND date_approv <= '".$date_fin."'";
        }

        else if($date_debut){

            $sql.=" WHERE date_approv >= ".$date_debut;
        }
        else if($date_fin){

            $sql.=" WHERE date_approv <= ".$date_fin;
        }

        

        return $this->db->query($sql)->row_array();

    }

    public function get_patient($patient_id){

    $sql = "SELECT * FROM patient ";
if($patient_id){
    $sql .= " WHERE patient_id= ".$patient_id;

}

return $this->db->query($sql)->result_array();


    }

    public function saveApprov($data){

        return $this->db->insert('approv',$data);
    }
}
?>