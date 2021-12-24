<?php

$course_list = DB::query("SELECT * FROM course;");

$job_count = DB::queryFirstRow("SELECT count(id) FROM job;")['count(id)'];
$internship_count = DB::queryFirstRow("SELECT count(id) FROM internship;")['count(id)'];
$research_count = DB::queryFirstRow("SELECT count(id) FROM research;")['count(id)'];

if (isset($_GET['msg'])) {
    switch ($_GET['msg']) {

        case 'not_selected':
            echo "<script>alert('Escolhe primeiro um curso.');</script>";
            break;

    }
}

?>

<div id="homepage-centered">
    <!--<h1 style="font-weight: 300; font-size: 40px;">newLeaf</h1>-->
    <img id="logo_homepage" src="static/images/logo.png"/>
    <br><br>
    
    <div style="width: 25%; min-width: 250px;">
        <select id="select-search-course" onchange="selectCourse(this);">
            <option id='choose-course-option' value='' disabled selected hidden>Escolhe um curso</option>

            <?php
                foreach ($course_list as $course) {
                        echo "<option value='" . $course['id']  . "'>" . $course['name'] . "</option>";
                }
            ?>
        </select>

       
       
    </div>
    <br>
    <div class="card-row">
            <div class="card-column">
                
                <a href="?section=jobs">
                    <div class="card">
                        <h3>Empregos</h3>
                        <p><?= $job_count ?> Propostas</p>
                    </div>
                </a>
            </div>

            <div class="card-column">

                <a href="?section=internships">
                    <div class="card">
                        <h3>Estágios</h3>
                        <p><?= $internship_count ?> Propostas</p>
                    </div>
                </a>
            </div>
            
            <div class="card-column">
                <a href="?section=research">
                    <div class="card">
                        <h3>Investigação</h3>
                        <p><?= $research_count ?> Propostas</p>
                    </div>
                </a>
            </div>
            
        </div>
</div>

<script>
    $(document).ready(function () {

        
        let course = JSON.parse(localStorage.getItem('selected_course'));

        if (course != null) {
            $('#choose-course-option').remove();
            $('#select-search-course').children('option').each(function(){
                console.log(parseInt(this.value) == course);
                
                if (this.value == course) {
                    this.setAttribute("selected", "selected");
                }
            });
        }

        $('#select-search-course').selectize({
            sortField: 'text'
        });

    });
</script>
