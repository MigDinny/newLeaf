<?php

require_once '../settings.php';


//Receives post information

if( isset( $_POST['submit'])){
    
    echo "weoijpwoietijqewphoi";    


    //Checks if title camp was filled
    if( isset( $_POST['title'])){
        $title = $_POST['title'];
    }
    else{
        echo "<script>alert('Por favor preencha o campo do título.');</script>";
        header("Location: /?section=create_offer");
        
    }
    
    //Checks if salary camp was filled
    if( isset( $_POST['salary'])){
        $salary = $_POST['salary'];

        if(!intval($salary)){   
            echo "<script>alert('Por favor ponha inteiros no campo do salário.');</script>";
            header("Location: /?section=create_offer");
        }
    }
    else{
        echo "<script>alert('Por favor preencha o campo do salário.');</script>";
        header("Location: /?section=create_offer");
        
    }

    //Checks if company camp was filled
    if( isset( $_POST['company'])){
        $company = $_POST['company'];
    }
    else{
        echo "<script>alert('Por favor preencha o campo da companhia.');</script>";
        header("Location: /?section=create_offer");
        
    }

    //Checks if duration camp was filled
    if( isset( $_POST['duration'])){
        $duration = $_POST['duration'];
    }
    else{
        echo "<script>alert('Por favor preencha o campo da duração.');</script>";
        header("Location: /?section=create_offer");
        
    }

    //Checks if details camp was filled
    if( isset( $_POST['details'])){
        $details = $_POST['details'];
    }
    else{
        echo "<script>alert('Por favor preencha o campo da detalhes.');</script>";
        header("Location: /?section=create_offer");
        
    }

    //Checks if requisites camp was filled
    if( isset( $_POST['requisites'])){
        $requisites = $_POST['requisites'];
    }
    else{
        echo "<script>alert('Por favor preencha o campo dos requisitos.');</script>";
        header("Location: /?section=create_offer");
        
    }

    //Checks if benefits was filled
    if( isset( $_POST['benefits'])){
        $company = $_POST['benefits'];
    }
    else{
        echo "<script>alert('Por favor preencha o campo de beneficios.');</script>";
        header("Location: /?section=create_offer");
        
    }
    $details .= "<br><b> REQUISITES: </b><br>" . $requisites;
    $details .= "<br><b> BENEFITS: </b><br>" . $benefits;

    echo $details;


    


    


}

// check

// insert 

// redirect if success
//header("Location: /?section=create_offer&result=success");

?>