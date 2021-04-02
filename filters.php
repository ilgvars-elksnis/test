<?php

if(isset($_POST['DateASC']))
{
    $asc_query = "SELECT * FROM registration ORDER BY date ASC";
    $result = executeQuery($asc_query);
}

    elseif (isset ($_POST['DateDESC'])) 
    {
        $desc_query = "SELECT * FROM registration ORDER BY date DESC";
        $result = executeQuery($desc_query);
    }

    elseif (isset ($_POST['EmailASC'])) 
    {
        $desc_query = "SELECT * FROM registration ORDER BY emails ASC";
        $result = executeQuery($desc_query);
    }

    elseif (isset ($_POST['EmailDESC'])) 
    {
        $desc_query = "SELECT * FROM registration ORDER BY emails DESC";
        $result = executeQuery($desc_query);
    }

    elseif(isset($_POST['search']))
    {
        $valueToSearch = $_POST['valueToSearch'];
        $query = "SELECT * FROM `registration` WHERE CONCAT(`id`, `emails`, `date`) LIKE '%".$valueToSearch."%'";
        $result = executeQuery($query);
    }

    

    
        else 
        {
        
            $default_query = "SELECT * FROM registration";
            $result = executeQuery($default_query);
        }





function executeQuery($query)
{
    $connect = mysqli_connect("localhost", "root", "", "test");
    $result = mysqli_query($connect, $query);
    return $result;
}
