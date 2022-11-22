<?php
include "includes/config.php";


// проверка на залогиненость
function is_auth(){
    if(isset($_SESSION["user"])){
        return true;
    }
    return false;
}

// аутентификация юзера
function user_auth(){
    
    global $pdo;
    if(isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['password']) && !empty($_POST['password'])){
        // проверка на длину введенных login и password через php
        if (strlen($_POST['login'])>3 && strlen($_POST['password'])>3) {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $query = $pdo->prepare("SELECT * FROM users WHERE login = :login AND password = :password");
            $query->execute(['login' => $login, 'password' => md5($password)]);
            $user = $query->fetch();
            
            if($user){
                $_SESSION["user"] = $user;
                // echo "<script>http://localhost/zooov/_admin/index.php?item=product';</script>";
                header('Location: index.php?item=product');
            }
            else {
                echo 'Такого пользователя не существует!<br><br>';
            }
            }
        else{
            echo 'Invalid login or password!<br><br>';
        } 
    } 
}
//////////////////////////////////////////////////////// карточки рационов //////////////////////////////////////////////////////////
// удаление карточки
function remove_product($id){
    global $pdo;
    $query = $pdo->prepare('UPDATE `ration_cards` SET `status`= 1 WHERE id = :id');
    $query->execute(['id' => $id]);

    echo "<script>self.location='index.php?item=product';</script>"; 
}

// восстановление карточки
function restore_product($id){
    global $pdo;
    $query = $pdo->prepare('UPDATE `ration_cards` SET `status`= 0 WHERE id = :id');
    $query->execute(['id' => $id]);

    echo "<script>self.location='index.php?item=product';</script>";
}

// сообщение об успешном добавлении карточки
function add_product(){

    echo "<script>alert('Карточка успешно добавлена!!!');</script>";
    
    echo "<script>self.location='index.php?item=product';</script>";
}

// добавление в _SESSION информации о текущей карточке для редактирования
function update_product($id){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM `ration_cards` WHERE id = :id");
    $query->execute(['id' => $id]);
    foreach($query as $row){
        $_SESSION['upd-id'] = $id;
        $_SESSION['upd-name'] = $row['title'];
        $_SESSION['upd-inc'] = $row['comp'];
        $_SESSION['upd-desc'] = $row['description'];
        $_SESSION['upd-w'] = $row['weight'];
    }
}

// сообщение об успешном редактировании карточки
function upd_product(){

    echo "<script>alert('Карточка id=".$_GET['id']." успешно отредактирована!!!');</script>";
    
    echo "<script>self.location='index.php?item=product';</script>";
}

//////////////////////////////////////////////////////// часто задаваемые вопросы //////////////////////////////////////////////////////////
// удаление вопроса
function faq_remove_product($id){
    global $pdo;
    $query = $pdo->prepare('UPDATE `questions` SET `status`= 1 WHERE id = :id');
    $query->execute(['id' => $id]);

    echo "<script>self.location='index.php?item=faq';</script>"; 
}

// восстановление вопроса
function faq_restore_product($id){
    global $pdo;
    $query = $pdo->prepare('UPDATE `questions` SET `status`= 0 WHERE id = :id');
    $query->execute(['id' => $id]);

    echo "<script>self.location='index.php?item=faq';</script>";
}

// сообщение об успешном добавлении вопроса
function faq_add_product(){

    echo "<script>alert('Вопрос успешно добавлен!!!');</script>";
    
    echo "<script>self.location='index.php?item=faq';</script>";
}

// добавление в _SESSION информации о текущем вопросе для редактирования
function faq_update_product($id){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM `questions` WHERE id = :id");
    $query->execute(['id' => $id]);
    foreach($query as $row){
        $_SESSION['faq_upd-id'] = $id;
        $_SESSION['upd-quest'] = $row['question'];
        $_SESSION['upd-ans'] = $row['answer'];
        
    }
}

// сообщение об успешном редактировании вопроса
function faq_upd_product(){

    echo "<script>alert('Вопрос id=".$_GET['id']." успешно отредактирован!!!');</script>";
    
    echo "<script>self.location='index.php?item=faq';</script>";
}

//////////////////////////////////////////////////////// заказы //////////////////////////////////////////////////////////
// удаление заказа
function ord_remove_product($id){
    global $pdo;
    $query = $pdo->prepare('UPDATE `ration_asks` SET `status`= 1 WHERE id = :id');
    $query->execute(['id' => $id]);

    echo "<script>self.location='index.php?item=order';</script>"; 
}

// восстановление заказа
function ord_restore_product($id){
    global $pdo;
    $query = $pdo->prepare('UPDATE `ration_asks` SET `status`= 0 WHERE id = :id');
    $query->execute(['id' => $id]);

    echo "<script>self.location='index.php?item=order';</script>";
}
//////////////////////////////////////////////////////// основная информация //////////////////////////////////////////////////////////

// добавление в _SESSION информации о редактировании
function m_update_product($id){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM `main` WHERE id = :id");
    $query->execute(['id' => $id]);
    foreach($query as $row){
        $_SESSION['m_upd-id'] = $id;
        $_SESSION['m_upd-h1'] = $row['head_text_1'];
        $_SESSION['m_upd-h2'] = $row['head_text_2'];
        $_SESSION['m_upd-t'] = $row['text'];
        $_SESSION['m_upd-p'] = $row['phone'];
    }
}

// сообщение об успешном редактировании 
function m_upd_product(){

    echo "<script>alert('Информация успешно отредактирована!!!');</script>";
    
    echo "<script>self.location='index.php?item=main';</script>";
}



?>

