<?php 
    $data = array(
        'status' => true,
        'urlPage' => 'index.php',
    );

    function setValue($value) {
        $data = $value;
    }

    echo json_encode($data);

?>