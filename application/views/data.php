<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>

<h1>User List</h1>
<td><a href='<?=base_url();?>/Home/add'>Add User</a></td><br/><br/>
    <table style='border:1px solid ;'>
        <tr>
            <th>SNO</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th colspan='2'>Action</th>
        </tr>
        <tbody>
            <?php foreach($totaldata as $item){
            ?> 
            <tr>
                <td><?=$item->id?></td>
                <td><?=$item->name?></td>
                <td><?=$item->email?></td>
                <td><?=$item->mobile?></td>
                <td><a href=''>Edit</a></td>
                <td><a href=''>Delete</a></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
    
    

    
</body>
</html>