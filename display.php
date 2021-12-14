<?php
include "connect.php";


if(isset($_POST['displaySend'])){
    $table= '<table class="table">
    <caption>List of users</caption>
    <thead>
      <tr>
        <th scope="col">sl no</th>
        <th scope="col">Name</th>
        <th scope="col">email</th>
        <th scope="col">mobile</th>
        <th scope="col">place</th>
        <th scope="col">operation</th>
      </tr>
    </thead>';
    $sql="SELECT * from `crud`";
    $result = mysqli_query($connection, $sql );
    while($row =mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $place = $row['place'];

        $table.='<tr>
        <td scope="row">'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$place.'</td>
        <td>
        <button class="btn btn-dark">Update</button>
        <button class="btn btn-danger" onClick = "deleteUser('.$id.')">Delete</button>
        </td>
      </tr>';
    }

    $table.='</table>';

    echo $table;
}





?>

