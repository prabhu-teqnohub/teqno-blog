<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h3>Sign Up</h3>

    <form method='post' action="<?=base_url()?>Home/insert">
        <div>
            <div>
                <input type='text' placeholder='Enter Name ' name='name'/>
            </div><br/>
            <div>
                <input type='text' placeholder='Enter Email ' name='email'/>
            </div><br/>
            <div>
                <input type='text' placeholder='Enter Mobile ' name='mobile'/>
            </div><br/>
            <div>
                <input type='submit'  name='submit' value='Submit'/>
            </div>
        </div>
</form>
</body>
</html>