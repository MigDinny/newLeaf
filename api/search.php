<?php

    require_once '../settings.php';
    //id/type/name/salary/details/company/graduation-requirements/remote/course(id/name)
    $dummy_table = array( 
        array("0001", "INTERNSHIP", "Estagio OREOS", 3000, "É kinda cringe", "Marilia FC", "Licenciado", "FULL", array("123", "Engenharia Informatica")), 
        array("0002", "JOB", "Backend Python", 10000, "API\'s and tables go brrrrrrrrrr", "Gogle", "Universidade", "HYBRID", array("123", "Engenharia Informatica")),
        array("0003", "RESEARCH", "Bolsa Natação glup glup", 10, "10 euros já é muito...", "Nautico Miranda do Corvo", "None", "NO", array("323", "Ciencias do Desporto")),
        array("0004", "RESEARCH", "Bolsa SpaceX", 1000, "For studies in Mars terrain idk take my money - Elon Musk", "SpaceX", "Licenciatura", "FULL", array("333", "Engenharia Aeroespacial"))

    );

    function error(){
        echo json_encode(array());
        die();
    }

    //Works!
    //print_r($dummy_table);
    //echo $dummy_table[1][8][1];
    //$toJson = json_encode($dummy_table);
    //echo $toJson;

    //Checks if the obligatory GET arguments exist
    if (!isset($_GET['type']) || !isset($_GET['course_id'])){
        error();
    } 
    
    $course_id = $_GET['course_id'];
    $type = $_GET['type'];
    
    //Checks if the type is valid out of 3 options (RESEARCH, JOB, INTERNSHIP)
    if($type != "RESEARCH" && $type != "INTERNSHIP" && $type != "JOB"){
        error();
    }


    //Checks if the course id is a number
    if(!intval($course_id) || $course_id < 0){
        error();
    }

    $query = "SELECT * FROM ". $type . " WHERE";
    
    //Checks to see if there is salary filter
    if(isset($_GET['salary'])){
        
        $salary = $_GET['salary'];

        //Checks if the value is valid
        if($salary < 0  || !intval($salary)){
            error();
        }

        $query .= " salary >= " . $salary;
        echo $query;
    }

    //Checks to see if there is location filter
    if(isset($_GET['location'])){
        
        $location = $_GET['location'];

        $query .= " location = " . $location;
    }

    //Checks to see if there is remote filter
    if(isset($_GET['remote'])){
        
        $remote = $_GET['remote'];

         //Checks if the value is valid
         if($remote != "NONE" && $remote != "FULL" && $remote != "HYBRID"){
            error();
        }

        $query .= " remote = " . $remote;
    }

    //Checks to see if there is graduation requirements filter
    if(isset($_GET['graduation-requirements'])){
        
        $graduation_requirements = $_GET['graduation-requirements'];

        $query .= " graduation_requirements = " . $graduation_requirements;
    }

    

    echo $query;
    #DB::query($query);


    echo "as";

?>