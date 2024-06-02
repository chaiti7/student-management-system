<?php
session_start();
error_reporting(0);

if(!isset($_SESSION['username'])) {
    header("location: login.php");
} else if($_SESSION['usertype'] == 'student') {
    header("location: login.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

if(isset($_GET['teacher_id'])) {
    $t_id = $_GET['teacher_id'];
    $sql = "SELECT * FROM teacher WHERE id='$t_id'";
    $result = mysqli_query($data, $sql);
    $info = $result->fetch_assoc();

    if(isset($_POST['update_teacher'])) {
        $t_name = $_POST['name'];
        $t_des = $_POST['description'];

        if(isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
            $file = $_FILES['image']['name'];
            $dst = "./image/" . $file;
            $dst_db = "image/" . $file;
            move_uploaded_file($_FILES['image']['tmp_name'], $dst);
            $sql2 = "UPDATE teacher SET name='$t_name', description='$t_des', image='$dst_db' WHERE id='$t_id'";
        } else {
            $sql2 = "UPDATE teacher SET name='$t_name', description='$t_des' WHERE id='$t_id'";
        }

        $result2 = mysqli_query($data, $sql2);

        if($result2) {
            header('location: admin_view_teacher.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <?php include 'admin_css.php'; ?>
    <style type="text/css">
        label {
            display: inline-block;
            width: 150px;
            text-align: right;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .form_deg {
            background-color: skyblue;
            width: 600px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>
</head>
<body>
<?php include 'admin_sidebar.php'; ?>
<div class="content">
    <center>
        <h1>Update Teacher Data</h1>
        <form class="form_deg" action="admin_update_teacher.php?teacher_id=<?php echo $t_id; ?>" method="POST" enctype="multipart/form-data">
            <div>
                <label>Teacher Name</label>
                <input type="text" name="name" value="<?php echo $info['name']; ?>">
            </div>
            <div>
                <label>About Teacher</label>
                <textarea name="description" rows="4"><?php echo $info['description']; ?></textarea>
            </div>
            <div>
                <label>Teacher Old Image</label>
                <img width="100px" height="100px" src="<?php echo $info['image']; ?>">
            </div>
            <div>
                <label>Choose Teacher New Image</label>
                <input type="file" name="image">
            </div>
            <div>
                <input type="submit" name="update_teacher" class="btn btn-success">
            </div>
        </form>
    </center>
</div>
</body>
</html>
