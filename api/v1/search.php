<?php
include "../../database/connection.php";

if (isset($_POST["action"]) && $_POST["action"] == "readAll") {
    $sections_query = $con->query("SELECT * FROM `sections`;");

    $section_rows = array();
    while ($section = $sections_query->fetch_assoc()) {
        $section["child"] = array();

        $entries_statement = $con->prepare("SELECT * FROM `entries` WHERE section_id = ?;");
        $entries_statement->bind_param("i", $section_id);

        $section_id = $section["id"];
        $entries_statement->execute();
        $entries_result = $entries_statement->get_result();

        while ($entry = $entries_result->fetch_assoc()) {
            $section["child"][$entry["id"]] = $entry;
        }
        if ($section["parent"] == -1) {
            $section_rows[$section_id] = $section;
        } else {
            $section_rows[$section["parent"]]["child"][] = $section;
        }
    }
    echo json_encode($section_rows);
} else if (isset($_POST["action"]) && $_POST["action"] == "search") {
    if (isset($_POST["keyword"])) {
        $keyword = $_POST["keyword"];
        $search_query = $con->query("SELECT s.id, s.slug, s.title, s.availability, s.type, s.parent, e.section_id, e.phone_number, e.room_number
        FROM `sections` as s
        INNER JOIN `entries` as e ON e.section_id = s.id or s.parent = -1
        WHERE
        (
            s.slug LIKE '%$keyword%'
            OR s.title LIKE '%$keyword%'
            OR s.type LIKE '%$keyword%'
            OR e.phone_number LIKE '%$keyword%'
            OR e.title LIKE '%$keyword%'
            OR e.description LIKE '%$keyword%'
            OR e.room_number LIKE '%$keyword%'
        ) GROUP BY (s.id);");


        $section_rows = array();

        while ($section = $search_query->fetch_assoc()) {
            $section["child"] = array();
            $section_id = $section["id"];

            $entries_statement = $con->query("SELECT e.id,e.section_id, e.title, e.phone_number, e.room_number
            FROM `sections` as s
            INNER JOIN `entries` as e ON e.section_id = s.id and e.section_id =$section_id
            WHERE
            (
                s.slug LIKE '%$keyword%'
                OR s.title LIKE '%$keyword%'
                OR s.type LIKE '%$keyword%'
                OR e.phone_number LIKE '%$keyword%'
                OR e.title LIKE '%$keyword%'
                OR e.description LIKE '%$keyword%'
                OR e.room_number LIKE '%$keyword%'
       
            );");
            while ($entry = $entries_statement->fetch_assoc()) {
                $entry["title"] = str_replace($keyword,'<mark><strong>'.$keyword.'</strong></mark>', $entry["title"]);
                $section["child"][$entry["id"]] = $entry;
            }

            if ($section["parent"] == -1) {
                $section_rows[$section_id] = $section;
                $section_rows[$section_id]["title"] = $section["title"];

            } else {
                $section_rows[$section["parent"]]["child"][] = $section;
            }
            
        }
        echo json_encode($section_rows);

    } else {
        echo json_encode(
            array(
                'message' => "Keyword is required!"
            )
        );
    }
} else {
    echo json_encode(
        array(
            'message' => "Action is required!"
        )
    );
}
