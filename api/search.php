<?php

    //This script is responsible for getting hte information out of the database and echoing 
    //it so that the fetch.js script can react according to the filters that the user put in.

    //Prints out a json

    //Current filters: type (obligatory), course id, salary, location, remoteness(?) and graduation requirements.
    //More can easily be added.



    require_once '../settings.php';

    //TEMPORARY
    //id/type/name/salary/details/company/graduation-requirements/remote/course(id/name)
    $dummy_table = array( 
        array("0001", "INTERNSHIP", "Estagio OREOS", 3000, "É kinda cringe", "Marilia FC", "Licenciado", "FULL", array("123", "Engenharia Informatica")), 
        array("0002", "JOB", "Backend Python", 10000, "API\'s and tables go brrrrrrrrrr", "Gogle", "Universidade", "HYBRID", array("123", "Engenharia Informatica")),
        array("0003", "RESEARCH", "Bolsa Natação glup glup", 10, "10 euros já é muito...", "Nautico Miranda do Corvo", "None", "NO", array("323", "Ciencias do Desporto")),
        array("0004", "RESEARCH", "Bolsa SpaceX", 1000, "For studies in Mars terrain idk take my money - Elon Musk", "SpaceX", "Licenciatura", "FULL", array("333", "Engenharia Aeroespacial"))

    );
    //END TEMPORARY


    $needs_and = false;

    function error(){
        echo json_encode(array());
        die();
    }

    //Checks if the obligatory GET arguments exist
    if (!isset($_GET['type'])){
 
        error();
    } 
    
    $type = $_GET['type'];
    
    //Checks if the type is valid out of 3 options (RESEARCH, JOB, INTERNSHIP)
    if($type != "RESEARCH" && $type != "INTERNSHIP" && $type != "JOB"){

        error();
    }

    $query = "SELECT * FROM ". $type . " WHERE";

    //Checks if the course id exists and is valid
    if(isset($_GET['course_id'])){

        $course_id = $_GET['course_id'];

        if(!intval($course_id) || $course_id < 0){
            error();
        }

        if($needs_and) $query .= " AND";

        $query .= " course_id = " . $course_id;

        $needs_and = true;
    }

    //Checks to see if there is salary filter
    if(isset($_GET['salary'])){
        
        $salary = $_GET['salary'];

        //Checks if the value is valid
        if($salary < 0  || !intval($salary)){
            error();
        }

        if($needs_and) $query .= " AND";
        
        $query .= " salary >= " . $salary;
        
        $needs_and = true;

    }

    //Checks to see if there is location filter
    if(isset($_GET['location'])){
        
        $location = $_GET['location'];

        if($needs_and) $query .= " AND";

        $query .= " location = " . $location;

        $needs_and = true;
    }

    //Checks to see if there is remote filter
    if(isset($_GET['remote'])){
        
        $remote = $_GET['remote'];

         //Checks if the value is valid
         if($remote != "NONE" && $remote != "FULL" && $remote != "HYBRID"){
            error();
        }

        if($needs_and) $query .= " AND";

        $query .= " remote = " . $remote;

        $needs_and = true;
    }

    //Checks to see if there is graduation requirements filter and applies it
    if(isset($_GET['graduation-requirements'])){
        
        $graduation_requirements = $_GET['graduation-requirements'];

        if($needs_and) $query .= " AND";

        $query .= " graduation_requirements = " . $graduation_requirements;

        $needs_and = true;
    }

    

    echo $query;
    #$data = DB::query($query);
    #$toJson = json_encode($data);
    #echo toJson;

?>