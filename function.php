<?php
require "db.php";

// =================================================INSERT DATA
function insertData($input_name, $input_mobile, $input_content)
{

    global $db;
    $created_at = date("Y-m-d H-i-s");
    $code = md5($input_name . $input_mobile);
    $code = substr($code, 0, 6);
    $code = strtoupper($code);
    $query = $db->prepare("INSERT INTO comp(`name`,`mobile`,`content`,
                        `created_at`,`code`)
                         VALUE('{$input_name}','{$input_mobile}','{$input_content}',
                         '{$created_at}','{$code}') ");
    $query->execute();

    return $code;
}

// =================================================GET DATA BY ID
function getData($id = '')
{
    $where = '';
    !empty($id) ? $where = " WHERE id=$id" : '';

    global $db;
    $query = $db->prepare("SELECT * FROM comp" . $where);
    $query->execute();
    return $query;
}

// =================================================Set REPLY
function setReply($reply_id, $reply_content)
{
    global $db;
    $query = $db->prepare("UPDATE comp SET reply='{$reply_content}' WHERE id='{$reply_id}' LIMIT 1");
    return $query->execute();
}


// =================================================GET DATA BY CODE
function findReply($input_code)
{
    global $db;
    // $input_code = strtoupper($input_code);
    $query = $db->prepare("SELECT * FROM comp WHERE code='{$input_code}'");
    $query->execute();
    return $query;
}
