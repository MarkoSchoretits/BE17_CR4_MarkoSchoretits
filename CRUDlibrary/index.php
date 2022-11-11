<?php 
require_once 'actions/db_connect.php';

$sql = "SELECT * FROM item";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= "<tr>
            <td><img class='img-thumbnail' src='pictures/" .$row['picture']."'</td>
            <td>" .$row['title']."</td>
            <td>" .$row['isbn']."</td>
            <td>" .$row['short_description']."</td>
            <td>" .$row['item_type']."</td>
            <td>" .$row['author_first_name']."</td>
            <td>" .$row['author_last_name']."</td>
            <td><a href='publisher.php?id=" .$row['id']."'>" .$row['publisher_name']."</a></td>
            <td>" .$row['publisher_address']."</td>
            <td>" .$row['publish_date']."</td>
            <td>" .$row['available']."</td>
            <td>
            <a href='details.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Details</button></a>
            <a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
            <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a>
            </td>
            </tr>";
    };
} else {
    $tbody =  "<tr><td colspan='10'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP CRUDlibrary</title>
        <?php require_once 'components/boot.php'?>
        <style type="text/css">
            .manageProduct {           
                margin: auto;
            }
            .img-thumbnail {
                width: 70px !important;
                height: 70px !important;
            }
            td {          
                text-align: left;
                vertical-align: middle;
            }
            tr {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="manageProduct w-75 mt-3">    
            <div class='mb-3'>
                <a href= "create.php"><button class='btn btn-primary'type="button" >Add item</button></a>
            </div>
            <p class='h2'>Items in our Library</p>
            <table class='table table-striped'>
                <thead class='table-success'>
                    <tr>
                        <th>Picture</th>
                        <th>Title</th>
                        <th>ISBN</th>
                        <th>Short&nbsp;Description</th>
                        <th>Item Type</th>
                        <th>Author 1st Name</th>
                        <th>Author 2nd Name</th>
                        <th>Publisher</th>
                        <th>Publisher Address</th>
                        <th>Publication Date</th>
                        <th>avlb</th>
                        <th>Action&nbsp;/&nbsp;Data&nbsp;Manipulation</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $tbody;?>
                </tbody>
            </table>
        </div>
    </body>
</html>