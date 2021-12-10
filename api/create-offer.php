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

    $details .= '\n REQUISITES \n' .$requisites;
    $details .= '\n BENEFITS \n' .$benefits;
    $date = new \DateTime('now');
    switch($type){
        case 0:
            DB::insert('job' , [
                'name' => $title,
                'salary' => $salary,
                'details' => $details,
                'company' => $company,
                'graduation_requirements' => 'University',
                'remote' => 'remote',
                'creation_timestamp' => $date->format('D M d, Y G:i'),
                'location' => 'Miranda',
                'course_id' =>  2
            ]);
            break;

        case 1:
            DB::insert('internship' , [
                'name' => $title,
                'salary' => $salary,
                'details' => $details,
                'company' => $company,
                'graduation_requirements' => 'University',
                'remote' => 'remote',
                'creation_timestamp' => $date->format('D M d, Y G:i'),
                'location' => 'Miranda',
                'course_id' =>  2
            ]);
            break;

        case 2:
            DB::insert('research' , [
                'name' => $title,
                'salary' => $salary,
                'details' => $details,
                'company' => $company,
                'graduation_requirements' => 'University',
                'remote' => 'remote',
                'creation_timestamp' => $date->format('D M d, Y G:i'),
                'location' => 'Miranda',
                'course_id' =>  2
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