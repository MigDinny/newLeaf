<?php

    //This script is responsible for getting hte information out of the database and echoing 
    //it so that the fetch.js script can react according to the filters that the user put in.

    //Prints out a json

    //Current filters: type (obligatory), course id, salary, location, remoteness(?) and graduation requirements.
    //More can easily be added.

    //If a obligatory variable is missing/is wrong, nothing is echoed. If a normal parameter is wrong (ex: salary = -1)
    //all of the respective database elements are echoed. 
    


    require_once '../settings.php';


    //Variables. Query has the query text.
    $query = "SELECT * FROM "; 


    //If a obligatory paramet is missing
    function error(){
        echo json_encode(array());
        die();
    }

    
    //Checks if the obligatory GET arguments exist
    if(!isset($_GET['type']) || !isset($_GET['course_id'])){
        error();
    } 
    
    //Gets values
    $type = strtolower($_GET['type']);
    $course_id = $_GET['course_id'];

    //Checks if course_id could be valid
    if(!intval($course_id) || $course_id < 0){
        error();
    }

    //Checks if the type is valid out of 3 options (RESEARCH, JOB, INTERNSHIP)
    if($type != "researc" && $type != "internship" && $type != "job"){
        error();
    }

    
    $query .= " $type ";
    $query .= " WHERE course_id = " . $course_id;


    //If a parameter is wrong, everything is printed.
    function printAll(){
        global $type;
        global $course_id;

        $query = "SELECT * FROM $type WHERE course_id = $course_id";
        $data = DB::query($query);
        $toJson = json_encode($data);
        echo $toJson;

        die();
    }

    //Checks to see if there is salary filter
    if(isset($_GET['salary'])){
        
        $salary = $_GET['salary'];

        //Checks if the value is valid
        if($salary < 0  || !intval($salary)){
            printAll();
        }

        $query .= " AND salary >= " . $salary;
        
    }

    //Checks to see if there is location filter
    if(isset($_GET['location'])){
        
        $location = strtoupper($_GET['location']);

        $query .= " AND upper(location) LIKE '%$location%' ";    
    }

    //Checks to see if there is remote filter
    if(isset($_GET['remote'])){
        
        $remote = strtoupper($_GET['remote']);

         //Checks if the value is valid
         if($remote != "NONE" && $remote != "FULL" && $remote != "HYBRID"){
            printAll();
        }

        $query .= " AND upper(remote) = '$remote' ";

    }

    //Checks to see if there is graduation requirements filter and applies it
    if(isset($_GET['graduation_requirements'])){
     
        $graduation_requirements = strtoupper($_GET['graduation_requirements']);

        $query .= " AND upper(graduation_requirements) =  '$graduation_requirements' ";

    }

    //for testing purposes
    //echo $query;

    //Executes sql command and converts array to json.
    $data = DB::query($query);
    $out_array = [];

    //Get course name
    $query_temp = "SELECT * FROM course WHERE id =" .$course_id;
    $course_data = DB::query($query_temp);
    $course_name = $course_data[0]["name"];

    //Makes the end string be in the correct format
    for ($i = 0; $i < count($data); $i++){

        array_push($out_array, array( "id" => $data[$i]["id"], 
                   "name" => $data[$i]["name"], 
                   "salary" => $data[$i]["salary"], 
                   "details" =>$data[$i]["details"], 
                   "company" => $data[$i]["company"], 
                   "graduation_requirements" => $data[$i]["graduation_requirements"], 
                   "remote" => $data[$i]["remote"], 
                   "creation_timestamp" => $data[$i]["creation_timestamp"], 
                   "location" => $data[$i]["location"], 
                   "course" => array($data[$i]["course_id"], $course_name)));

    }
    $toJson = json_encode($out_array);
    echo $toJson;

?>