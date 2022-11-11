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
        <title>Edit Item</title>
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
            <legend class='h2'>Updating request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $title ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <td><input class="form-control" type="text"  name="title" placeholder ="Item Title" value="<?php echo $title ?>"  /></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="number" name= "isbn" placeholder="ISBN" value="<?php echo $isbn ?>" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Short Description</th>
                        <td><input class='form-control' type="text" name="short_description" placeholder="Short Description" value="<?php echo $short_description ?>" /></td>
                    </tr>    
                    <tr>
                        <th>Item Type</th>
                        <td><input class='form-control' type="text" name="item_type" placeholder="Item Type" value="<?php echo $item_type ?>" /></td>
                    </tr>    
                    <tr>
                        <th>Author 1st Name</th>
                        <td><input class='form-control' type="text" name="author_first_name" placeholder="Author 1st Name" value="<?php echo $author_first_name ?>" /></td>
                    </tr>    
                    <tr>
                        <th>Author 2nd Name</th>
                        <td><input class='form-control' type="text" name="author_last_name" placeholder="Author 2nd Name" value="<?php echo $author_last_name ?>" /></td>
                    </tr>    
                    <tr>
                        <th>Publisher</th>
                        <td><input class='form-control' type="text" name="publisher_name" placeholder="Publisher" value="<?php echo $publisher_name ?>" /></td>
                    </tr>    
                    <tr>
                        <th>Publisher's Address</th>
                        <td><input class='form-control' type="text" name="publisher_address" placeholder="Publisher's Address" value="<?php echo $publisher_address ?>" /></td>
                    </tr>    
                    <tr>
                        <th>Publ Date</th>
                        <td><input class='form-control' type="text" name="publish_date" placeholder="Publ Date" value="<?php echo $publish_date ?>" /></td>
                    </tr>    
                    <tr>
                        <th>available</th>
                        <td><input class='form-control' type="text" name="available" placeholder="available" value="<?php echo $available ?>" /></td>
                    </tr>    
                    <tr>
                        <th>Picture</th>
                        <td><input class="form-control" type="file" name= "picture" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "picture" value= "<?php echo $data['picture'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes!</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>