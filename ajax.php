<?php
require_once "config.php";
//require_once "../question_type/formula/libs.php";
use \Tsugi\Core\LTIX;

// Retrieve the launch data if present
//$LTI = LTIX::requireData();
$LTI = LTIX::requireData();
$p = $CFG->dbprefix;

//since vue sends json get the raw output instead

$postdata = file_get_contents("php://input");
//echo $postdata;
$request = json_decode($postdata);


            $sql = "SELECT question_title FROM {$p}eo_questions WHERE 1";
            
            $questions = $PDOX->allRowsDie($sql);


echo json_encode($questions);


