<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM item WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $isbn = $data['isbn'];
        $short_description = $data['short_description'];
        $item_type = $data['item_type'];
        $author_first_name = $data['author_first_name'];
        $author_last_name = $data['author_last_name'];
        $publisher_name = $data['publisher_name'];
        $publisher_address = $data['publisher_address'];
        $publish_date = $data['publish_date'];
        $available = $data['available'];
        $picture = $data['picture'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Item Details</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }     
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Item Details <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $title ?>"></legend>
<!--             <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
 -->                <table class="table">
                    <tr>
                        <th>Title</th>
                        <td><?php echo $title ?></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><?php echo $isbn ?></td>
                    </tr>
                    <tr>
                        <th>Short Description</th>
                        <td><?php echo $short_description ?></td>
                    </tr>    
                    <tr>
                        <th>Item Type</th>
                        <td><?php echo $item_type ?></td>
                    </tr>    
                    <tr>
                        <th>Author 1st Name</th>
                        <td><?php echo $author_first_name ?></td>
                    </tr>    
                    <tr>
                        <th>Author 2nd Name</th>
                        <td><?php echo $author_last_name ?></td>
                    </tr>    
                    <tr>
                        <th>Publisher</th>
                        <td><?php echo $publisher_name ?></td>
                    </tr>    
                    <tr>
                        <th>Publisher's Address</th>
                        <td><?php echo $publisher_address ?></td>
                    </tr>    
                    <tr>
                        <th>Publ Date</th>
                        <td><?php echo $publish_date ?></td>
                    </tr>    
                    <tr>
                        <th>available</th>
                        <td><?php echo $available ?></td>
                    </tr>    
                    <tr>
                        <th>*** Below this for internal use only: ***</th>
                        <td>*****************************************</td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><?php echo $picture ?></td>
                    </tr>    
                    <tr>
                        <th>item_id</th>
                        <td><?php echo $id ?></td>
                    </tr>    
                    <tr>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                        <td></td>
                    </tr>
                </table>
<!--             </form>
 -->        </fieldset>
    </body>
</html>