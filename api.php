
<?php
    header('Content-Type: application/json');

    $todo = file_get_contents("data.json");

    $todolist = json_decode($todo,true);

    if ( isset($_POST['aggiungi']) ) {
        $todolist[] = $_POST['aggiungi'];
        file_put_contents("data.json", json_encode($todolist));
    }elseif (isset($_POST['deleteIndex'])) {
    $index = $_POST['deleteIndex'];
    $todolist[$index] = array('name' => 'task eliminata','done' => null);
    file_put_contents("data.json", json_encode($todolist));

    }elseif (isset($_POST['modifyAction'])) {
        $index = $_POST['modifyAction'];
        if ($todolist[$index]['name'] == 'task eliminata') {
            $todolist[$index]['done'] = null;
        }else {
            $todolist[$index]['done'] = !$todolist[$index]['done'];
        }
        file_put_contents("data.json", json_encode($todolist));

        }elseif (isset($_POST['deleteAll'])) {
        $todolist = [];
        file_put_contents("data.json", json_encode($todolist) );
        }
    $todoEncode= json_encode($todolist);

    echo $todoEncode
?>
