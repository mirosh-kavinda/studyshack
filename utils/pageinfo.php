<?php
// this  use for load content 
if(isset($_GET['call_type']))
  {
    $call_type = $_GET['call_type'];
  
    if($call_type == "home")
    {
      echo json_encode(array(
        'status'=>'success',
        'title'=> 'Crafira',
        'url' => 'pages/landingPage.php',
        
      ));
    }
    else if($call_type == "dashboard")
    {
      echo json_encode(array(
        'status'=>'success',
        'title'=> 'StudyShack-Dashboard',
        'url' => 'pages/Dashboards/DashboardSection.php',
        
      ));
    }
    
    else if($call_type == "dashboard")
    {
      echo json_encode(array(
        'status'=>'success',
        'title'=> 'StudyShack-Dashboard',
        'url' => 'pages/Dashboards/DashboardSection.php',
        
      ));
    }
    
  }
