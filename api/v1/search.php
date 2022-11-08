<?php
    include "../../database/connection.php";    
    
    if(isset($_POST["action"]) && $_POST["action"] == "readAll"){
        
        // if(isset($_POST["slug"])){
        //     $sections_query_by_slug = $con->prepare("SELECT * FROM `sections` WHERE slug = ?;");
        //     $sections_query_by_slug->bind_param("s", $slug);
        //     $slug = $_POST["slug"];
            
        //     $sections_query_by_slug->execute();
        //     $sections_query = $sections_query_by_slug->get_result();
        // }else{
        $sections_query = $con->query("SELECT * FROM `sections`;");
        // }

        $section_rows = array();
        while ($section = $sections_query->fetch_assoc()) {
            $section["child"]= array();

            $entries_statement = $con->prepare("SELECT * FROM `entries` WHERE section_id = ?;");
            $entries_statement->bind_param("i", $section_id);
            
            $section_id = $section["id"];
            $entries_statement->execute();
            $entries_result = $entries_statement->get_result();
            
            while ($entry = $entries_result->fetch_assoc()) {
                $section["child"][$entry["id"]] = $entry;
            }
            if($section["parent"] == -1 ){
                $section_rows[$section_id] = $section;

            }else{
                $section_rows[$section["parent"]]["child"][] = $section;
            }
        }
        echo json_encode($section_rows);
    }else{
        echo json_encode(
            array(
                'message' => "Action is required!"
            )
        );
    }
?>
