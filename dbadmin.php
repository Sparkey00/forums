<?php

require_once 'DataBase.php';
require_once 'sql.php';


print "<form action=\"{$_SERVER['PHP_SELF']}\" method=\"post\">
            <button  class=\"btn btn-info my-2 my-sm-0\" type=\"submit\" id=\"button\" name = \"create1\" value=\"Create Users\">Create Users</button>
            
            <button  class=\"btn btn-info my-2 my-sm-0\" type=\"submit\" id=\"button\" name = \"create2\" value=\"Create Messages\">Create Messages</button>
            
            <button  class=\"btn btn-info my-2 my-sm-0\" type=\"submit\" id=\"button\" name = \"create3\" value=\"Create Bound\">Create Bound</button>
                        
            <button  class=\"btn btn-info my-2 my-sm-0\" type=\"submit\" id=\"button\" name = \"delete\" value=\"DeleteTable\">Delete everything from table</button>            
        </form>";

if($_POST['create1']??0){

    try {

        $db = DataBase::getInstance();
        $sqlCons = new sql();
        $result = $db->query($sqlCons->createUsers);
        if($result)  print "<br> success";
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
        print $e->getMessage();
    }

    unset($_POST['create1']);
}
elseif ($_POST['create2']??0){

    try {

        $db = DataBase::getInstance();
        $sqlCons = new sql();
        $result = $db->query($sqlCons->createMessages);
        if($result)  print "<br> success";
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
        print $e->getMessage();
    }

    unset($_POST['create2']);
}
elseif ($_POST['create3']??0){

    try {

        $db = DataBase::getInstance();
        $sqlCons = new sql();
        $result = $db->query($sqlCons->createBound);
        if($result)  print "<br> success";
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
        print $e->getMessage();
    }

    unset($_POST['create3']);
}
elseif ($_POST['delete']??0){

    try {

        $db = DataBase::getInstance();
        $sqlCons = new sql();
        $result = $db->query($sqlCons->clearTable);
        if($result)  print "<br> success";
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
        print $e->getMessage();
    }

    unset($_POST['delete']);
}
else print "ne posted";