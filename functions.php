<?php
function student_form_data_to_session()
{
    if (isset($_POST['group']) && !empty($_POST['group']) && isset($_POST['course']) && !empty($_POST['course'])) {
        
        $_SESSION['group'] = $_POST['group'];
        
        if (is_numeric($_POST['course'])) {
            $_SESSION['course'] = $_POST['course'];
        }
        
        //$_SESSION['course'] = $_POST['course'];
    }
}

function student_form_data_show()
{
    if (isset($_SESSION['group']) && !empty($_SESSION['group']) && isset($_SESSION['course']) && !empty($_SESSION['course'])) {
        $group = $_SESSION['group'];
        $course = $_SESSION['course'];
        echo "Group $group<br>";
        echo "Course $course";
        
    }
}
function request_url()
{
  $result = ''; // Пока результат пуст
 
  // Имя сервера, напр. site.com или www.site.com
  $result .= $_SERVER['SERVER_NAME'];


  // Последняя часть запроса (путь и GET-параметры).
  $result .= $_SERVER['REQUEST_URI'];
  
  return $result;
}

?>