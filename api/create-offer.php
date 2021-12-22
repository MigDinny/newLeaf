<?php

require_once '../settings.php';


//Receives post information

if( isset( $_POST['submit'])){
    
    $title = $_POST['title'];

    //Checks if salary camp was filled
    $salary = $_POST['salary'];

    if(!intval($salary)){  
        header("Location: /?section=create_offer&result=1"); 
        die();
    }
    
    $location = $_POST['location'];

    $company = $_POST['company'];

    $details = $_POST['description'];

    

    //Checks if type camp was filled
    $type = $_POST['type'];
    
    if(!$type){
        header("Location: /?section=create_offer&result=3"); 
        die();
    }

    $course_id = $_POST['course_id'];
    if(!$course_id){
        header("Location: /?section=create_offer&result=5"); 
        die();
    }

    $remote = $_POST['remote'];
    if(!$remote){
        header("Location: /?section=create_offer&result=4"); 
        die();
    }

    switch($remote){
        case 1:
            $remote_value = "Remoto";
            break;
        case 2:
            $remote_value = "Presencial";
            break;
        case 3:
            $remote_value = "Hibrido";
            break;
        default:
            header("Location: /?section=create_offer&result=4"); 
            die();
    }

    //Checks if requisites camp was filled
    $requisites = $_POST['requisites'];

    if(!$requisites){
        header("Location: /?section=create_offer&result=2"); 
        die();
    }

    $start_date = $_POST['start_date'];

    $end_date = $_POST['end_date'];

    $date = new \DateTime('now');
    switch($type){
        case 1:
            DB::insert('job' , [
                'name' => $title,
                'salary' => $salary,
                'details' => $details,
                'company' => $company,
                'graduation_requirements' => $requisites,
                'remote' => $remote_value,
                'location' => $location,
                'course_id' =>  $course_id,
                'start_date' => $start_date,
                'end_date' => $end_date
            ]);
            break;

        case 2:
            DB::insert('internship' , [
                'name' => $title,
                'salary' => $salary,
                'details' => $details,
                'company' => $company,
                'graduation_requirements' => $requisites,
                'remote' => $remote_value,
                'location' => $location,
                'course_id' =>  $course_id,
                'start_date' => $start_date,
                'end_date' => $end_date
            ]);
            break;

        case 3:
            DB::insert('research' , [
                'name' => $title,
                'salary' => $salary,
                'details' => $details,
                'company' => $company,
                'graduation_requirements' => $requisites,
                'remote' => $remote_value,
                'location' => $location,
                'course_id' =>  $course_id,
                'start_date' => $start_date,
                'end_date' => $end_date
            ]);
            break;

    }
    
    header("Location: /?section=create_offer&result=0");
}


// check

// insert 

// redirect if success
//header("Location: /?section=create_offer&result=success");

?>