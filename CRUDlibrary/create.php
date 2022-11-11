<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>PHP CRUDlibrary  |  Add Item</title>
        <style>
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }       
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Add item</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title"  placeholder="Item Title" /></td>
                    </tr>    
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="number" name= "isbn" placeholder="ISBN" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Short Description</th>
                        <td><input class='form-control' type="text" name="short_description"  placeholder="Short Description" /></td>
                    </tr>    
                    <tr>
                        <th>Item Type</th>
                        <td><input class='form-control' type="text" name="item_type"  placeholder="Item Type" /></td>
                    </tr>    
                    <tr>
                        <th>Author 1st Name</th>
                        <td><input class='form-control' type="text" name="author_first_name"  placeholder="Author 1st Name" /></td>
                    </tr>    
                    <tr>
                        <th>Author 2nd Name</th>
                        <td><input class='form-control' type="text" name="author_last_name"  placeholder="Author 2nd Name" /></td>
                    </tr>    
                    <tr>
                        <th>Publisher</th>
                        <td><input class='form-control' type="text" name="publisher_name"  placeholder="Publisher" /></td>
                    </tr>    
                    <tr>
                        <th>Publisher's Address</th>
                        <td><input class='form-control' type="text" name="publisher_address"  placeholder="Publisher's Address" /></td>
                    </tr>    
                    <tr>
                        <th>Publ Date</th>
                        <td><input class='form-control' type="text" name="publish_date"  placeholder="Publ Date" /></td>
                    </tr>    
                    <tr>
                        <th>available</th>
                        <td><input class='form-control' type="text" name="available"  placeholder="available" /></td>
                    </tr>    
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Insert Item</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>