<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="addFormCon">
        <form action="add_employee.php" method="post" class="addForm">
        <label>Name</label>
            <input type="text" name="name" placeholder="Name" required><br>
            <label>Age</label>
            <input type="number" name="age" placeholder="Age" required><br>
            <label>Email</label>
            <input type="email" name="email" placeholder="Email" required><br>
            <label>Contact No.</label>
            <input type="text" name="contact" placeholder="Contact No" required><br>
            <label>Birthdate</label>
            <input type="date" name="bday" placeholder="Birthdate" required><br>
            <label>Position</label>
            <input type="text" name="position" placeholder="Position" required><br>
            <button type="submit" class="submitBtn">Submit</button>
        </form>
    </div>
</body>
</html>