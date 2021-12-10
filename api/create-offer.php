<?php

require_once '../settings.php';


//Receives post information

if( isset( $_POST['submit'])){
    


    //Checks if title camp was filled
    if( isset( $_POST['title'])){
        $title = $_POST['title'];
    }
    
    //Checks if salary camp was filled
    if( isset( $_POST['salary'])){
        $salary = $_POST['salary'];

        if(!intval($salary)){  
            header("Location: /?section=create_offer&result=1"); 
            die();
        }
    }

    //Checks if company camp was filled
    if( isset( $_POST['company'])){
        $company = $_POST['company'];
    }

    //Checks if duration camp was filled
    if( isset( $_POST['duration'])){
        $duration = $_POST['duration'];
    }

    if( isset( $_POST['type'])){
        $type = $_POST['type'];
    }

    //Checks if details camp was filled
    if( isset( $_POST['description'])){
        $details = $_POST['description'];
    }

    //Checks if requisites camp was filled
    if( isset( $_POST['requisites'])){
        $requisites = $_POST['requisites'];
    }

    //Checks if benefits was filled
    if( isset( $_POST['benefits'])){
        $benefits = $_POST['benefits'];
    }

    $details .= '<br> REQUISITES <br>' .$requisites;
    $details .= '<br> BENEFITS <br>' .$benefits;

    switch($type){
        case 0:
            DB::query('insert into job (name,salary,details,company,graduation_requirements,remote,creation_timestamp,location,course_id)
                    Values(' .$title .',' .$salary .',' .$details .')');
            break;

        case 1:
            break;

        case 2:
            break;

    }
    
    header("Location: /?section=create_offer&result=0");

    


    


}


// check

// insert 

// redirect if success
//header("Location: /?section=create_offer&result=success");

?>