<?php

function connect()//链接数据库操作
{
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PWD) or die("数据库连接失败 ERROR：" . mysql_errno() . ":" . mysql_error());
    mysqli_set_charset($link,DB_CHARSET);
    mysqli_select_db($link,DB_NAME) or die("数据库打开失败");
    return $link;
}

function insert($table,$array){ //数据库插入操作
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PWD);
    $mydb = new mysqli(DB_HOST,  DB_USER, DB_PWD,'webdemo');
    $keys=join(",",array_keys($array));
    $vals = "'".join("','",array_values($array))."'";
    $sql = "insert into {$table}($keys) values({$vals})";
    var_dump($sql);
    $sql2 = "select last_insert_id()";
//     if ($mydb->query($sql)){
//         $res=mysqli_query($link,$sql2);
//         $ID = mysql_result($res,0);
//         echo $ID;
//     }
//     else{
//         $ID=0;
//     }
//     return $ID;
    return $mydb->query($sql);
}


// update admin set username='king' where id = 1
function update($table, $array, $where = null)//数据库更新操作
{
    foreach ($array as $key => $val) {
        if ($str == null) {
            $sep = "";
        } else {
            $sep = ",";
        }
        $str .= $sep . $key . "='" . $val . "'";
    }
    $sql = "update {$table} set {$str}" .  ($where == null ? null : "where " . $where);
    mysqli_query(connect(),$sql);
    return mysqli_affected_rows(connect());
}

function delete($table, $where = null)//数据库删除操作
{
    $where = $where == null ? null : "where " . $where;
    $sql = "delete from {$table} {$where}";
    mysqli_query(connect(),$sql);
    return mysqli_affected_rows(connect());
}

function fetchOne($sql,$result_type=MYSQL_ASSOC)//查询得到一条记录
{
    $link=connect();
    $result=mysqli_query($link,$sql);
    $row = mysqli_fetch_array($result,$result_type);
    return $row;
}

function fetchAll($sql,$result_type=MYSQL_ASSOC)
{
    $link=connect();
    $result=mysqli_query($link,$sql);
    while(@$row=mysqli_fetch_array($result,$result_type)){
        $rows[]=$row;
    }
    return $rows;
}

function getReultNum($sql)//得到结果集中记录条数
{
    $result = mysqli_query($sql);
    return mysql_num_rows($result);
}
