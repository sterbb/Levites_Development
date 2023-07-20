<?php
require_once "connection.php";
class CollaborationModel
{
    public function searchChurches($query)
    {
        $church_name =  $query["churchName"] . '%';

        $stmt = (new Connection)->connect()->prepare("SELECT * FROM churches WHERE church_name LIKE :query");
        $stmt->bindParam(':query', $church_name, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    static public function mdlshowPendingRequest(){

        $church_id = $_COOKIE['church_id'];
        $status = 0;
        

        $stmt = (new Connection)->connect()->prepare("SELECT collabID, churchid2, churchname2 FROM churchcollab WHERE churchid1 = :churchid1 AND reject_status = :reject_status AND cancel_status = :cancel_status AND collab_status = :collab_status");
        $stmt->bindParam(':churchid1', $church_id, PDO::PARAM_STR);
        $stmt->bindParam(':reject_status', $status, PDO::PARAM_INT);
        $stmt->bindParam(':collab_status', $status, PDO::PARAM_INT);
        $stmt->bindParam(':cancel_status', $status, PDO::PARAM_INT);


        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        
        // // Check if there are no results
        // if ($stmt->rowCount() == 0) {

        //     $stmt2 = (new Connection)->connect()->prepare("SELECT collabID, churchid1, churchname1 FROM churchcollab WHERE churchid2 = :churchid2");
        //     $stmt2->bindParam(':churchid2', $church_id, PDO::PARAM_STR);
        //     $stmt2->execute();
    
        //     return $stmt2->fetchAll(PDO::FETCH_ASSOC);

        // } else {
          
        //    return $results;
        // }



    }

    static public function mdlshowAffilatedChurches(){

        $church_id = $_COOKIE['church_id'];
        $collab_status = 1;

        $stmt = (new Connection)->connect()->prepare("SELECT collabID, churchid2, churchname2 FROM churchcollab WHERE churchid1 = :churchid1 AND collab_status =:collab_status ");
        $stmt->bindParam(':churchid1', $church_id, PDO::PARAM_STR);
        $stmt->bindParam(':collab_status', $collab_status, PDO::PARAM_INT);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        
        // Check if there are no results
        if ($stmt->rowCount() == 0) {

            $stmt2 = (new Connection)->connect()->prepare("SELECT collabID, churchid1, churchname1 FROM churchcollab WHERE churchid2 = :churchid2  AND collab_status =:collab_status");
            $stmt2->bindParam(':churchid2', $church_id, PDO::PARAM_STR);
            $stmt2->bindParam(':collab_status', $collab_status, PDO::PARAM_INT);
            $stmt2->execute();
    
            return $stmt2->fetchAll(PDO::FETCH_ASSOC);

        } else {
          
           return $results;
        }

    }

    static public function mdlshowRequests(){

        $church_id = $_COOKIE['church_id'];
        $status = 0;

        $stmt = (new Connection)->connect()->prepare("SELECT collabID, churchid1, churchname1 FROM churchcollab WHERE churchid2 = :churchid2 AND reject_status = :reject_status AND cancel_status = :cancel_status AND collab_status = :collab_status");
        $stmt->bindParam(':churchid2', $church_id, PDO::PARAM_STR);
        $stmt->bindParam(':reject_status', $status, PDO::PARAM_INT);
        $stmt->bindParam(':collab_status', $status, PDO::PARAM_INT);
        $stmt->bindParam(':cancel_status', $status, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);


    }



    public function mdladdCollaboration($data)
    {


        $db = new Connection();
        $pdo = $db->connect();

        $churchname1 = $_COOKIE["church_name"];
        $churchid1 = $_COOKIE['church_id'];

        $current_year = substr(date('Y'), -2 );
        $current_month = date('n');
        
        try{
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo->beginTransaction();

            
			$collab_id = (new Connection)->connect()->prepare("SELECT CONCAT('COL', LPAD((count(id)+1),4,'0'), '$current_month','$current_year') as collab_id  FROM churchcollab FOR UPDATE");
			$collab_id->execute();
			$collabid = $collab_id -> fetchAll(PDO::FETCH_ASSOC);

			
			$stmt = $pdo->prepare("INSERT INTO churchcollab (collabID, churchid1, churchname1, churchid2, churchname2) 
            VALUES (:collabID, :churchid1, :churchname1, :churchid2, :churchname2)");

			$stmt->bindParam(":collabID", $collabid[0]['collab_id'], PDO::PARAM_STR);
			$stmt->bindParam(":churchid1", $churchid1, PDO::PARAM_STR);
            $stmt->bindParam(":churchname1", $churchname1, PDO::PARAM_STR);
            $stmt->bindParam(":churchid2", $data['churchid2'], PDO::PARAM_STR);
            $stmt->bindParam(":churchname2", $data['churchName'], PDO::PARAM_STR);
            $stmt->execute();		
		    $pdo->commit();
			
		    return "ok";
		}catch (Exception $e){
			$pdo->rollBack();
			return "error";
		}	
		$pdo = null;	
		$stmt = null;
    }

    static public function mdlCancelRequest($data){

        $cancel = 1;
    
        $stmt = (new Connection)->connect()->prepare("UPDATE churchcollab SET cancel_status = :cancel_status WHERE collabID = :collabID ");
        $stmt->bindParam(":collabID", $data['collabID'], PDO::PARAM_STR);
        $stmt->bindParam(":cancel_status", $cancel, PDO::PARAM_INT);
        $stmt -> execute();
        return $stmt -> fetch();
        $stmt -> close();
        $stmt = null;	
    
    }

    static public function mdlAcceptCollab($data){

        $accept = 1;
    
        $stmt = (new Connection)->connect()->prepare("UPDATE churchcollab SET collab_status = :collab_status WHERE collabID = :collabID ");
        $stmt->bindParam(":collabID", $data['collabID'], PDO::PARAM_STR);
        $stmt->bindParam(":collab_status", $accept, PDO::PARAM_INT);
        $stmt -> execute();
        return $stmt -> fetch();
        $stmt -> close();
        $stmt = null;	
    
    }


    static public function mdlRejectCollab($data){

        $accept = 1;
    
        $stmt = (new Connection)->connect()->prepare("UPDATE churchcollab SET reject_status = :reject_status WHERE collabID = :collabID ");
        $stmt->bindParam(":collabID", $data['collabID'], PDO::PARAM_STR);
        $stmt->bindParam(":reject_status", $accept, PDO::PARAM_INT);
        $stmt -> execute();
        return $stmt -> fetch();
        $stmt -> close();
        $stmt = null;	
    
    }

    static public function mdlRemoveCollab($data){

        $remove = 0;
    
        $stmt = (new Connection)->connect()->prepare("UPDATE churchcollab SET collab_status = :collab_status WHERE collabID = :collabID ");
        $stmt->bindParam(":collabID", $data['collabID'], PDO::PARAM_STR);
        $stmt->bindParam(":collab_status", $remove, PDO::PARAM_INT);
        $stmt -> execute();
        return $stmt -> fetch();
        $stmt -> close();
        $stmt = null;	
    
    }

    

}

   




?>

