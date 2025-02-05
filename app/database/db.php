<?php

session_start();
require("connect.php");

function dd($value)  //not use
{
    echo "<pre>", print_r($value, true), "<pre>";
    die();
}

function executeQuery($sql, $data)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}

function selectAll($table, $condition = [])
{
    global $conn; // ใช้ global connection variable

    $sql = "SELECT * FROM " . $table; // ใช้ the table parameter
    if (empty($condition)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $records;
    } else {
        $i = 0;
        foreach ($condition as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key = ?";
            } else {
                $sql = $sql . " AND $key = ?";
            }
            $i++;
        }
        
        $stmt = executeQuery($sql, $condition);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $records;
    }
}


function selectOne($table, $condition)
{
    global $conn; // ใช้ global connection variable

    $sql = "SELECT * FROM " . $table; // ใช้ the table parameter
    $i = 0;
    foreach ($condition as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " WHERE $key = ?";
        } else {
            $sql = $sql . " AND $key = ?";
        }
        $i++;
    }

    $sql = $sql . " LIMIT 1";

    $stmt = executeQuery($sql, $condition);
    $records = $stmt->get_result()->fetch_assoc();

    return $records;
}


function create($table, $data)
{
    global $conn; // ใช้ global connection variable

    $sql = "INSERT INTO $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        // Enclose keys in backticks to handle special characters
        $key = "`" . $key . "`";
        if ($i === 0) {
            $sql = $sql . " $key = ?";
        } else {
            $sql = $sql . ", $key = ?";
        }
        $i++;
    }

    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;

    return $id;
}

function update($table, $id, $data)
{
    global $conn; // ใช้ global connection variable


    $sql = "UPDATE $table SET ";
    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql .= "$key = ?";
        } else {
            $sql .= ", $key = ?";
        }
        $i++;
    }

    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;
    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows; // Return the number of affected rows
}


function delete($table, $id)
{
    global $conn; // ใช้ global connection variable

    $sql = "DELETE FROM $table WHERE id=?";

    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt->affected_rows; // Return the number of affected rows
}


