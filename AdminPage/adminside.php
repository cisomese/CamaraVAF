<?php
session_start();
include '../assets/connection/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="..\assets\css\styles.css" />
    <title>Admin Panel</title>
  </head> 
  <body>
    <div class="side-menu">
      <div class="brand-name">
        <h1>CAMARA</h1>
      </div>
      <ul>
        <li>
          <img src="../assets/images/dashboard.png" alt="" />&nbsp; <span>Dashboard</span>
        </li>
        <li>
          <img style="width: 35px" src="../assets/images/hand-up.png" alt="" />&nbsp;
          <span>Volunteers</span>
        </li>
        <li>
          <img src="../assets/images/help-web-button.png" alt="" />&nbsp;
          <span> Help</span>
        </li>
        <li><span></span> Null</li>
        <li>
          <img src="../assets/images/settings.png" alt="" />&nbsp; <span>Settings</span>
        </li>
      </ul>
    </div>
    <div class="container">
      <div class="header">
        <div class="nav">
          <div class="search">
            <input type="text" placeholder="Search..." />
            <button type="submit">
              <img src="../assets/images/search.png" alt="" />
            </button>
          </div>
          <div class="user">
            <a href="#" class="btn">Add New</a>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="cards">
          <div class="card">
            <div class="box">
              <h1>14</h1>
              <h3>New Students</h3>
            </div>
            <div class="icon-case">
              <img style="width: 50px" src="../assets/images/reading.png" alt="" />
            </div>
          </div>
          <div class="card">
            <div class="box">
              <h1>29</h1>
              <h3>Last Term Arrivals</h3>
            </div>
            <div class="icon-case">
              <img style="width: 50px" src="../assets/images/learning.png" alt="" />
            </div>
          </div>
          <div class="card">
            <div class="box">
              <h1>89</h1>
              <h3>Total Students</h3>
            </div>
            <div class="icon-case">
              <img style="width: 50px" src="../assets/images/students.png" alt="" />
            </div>
          </div>
        </div>
        <div class="content-2">
          <div class="recent-apps">
            <div class="title">
              <h2>Recent Applications</h2>
              <a href="#" class="btn">View All</a>
            </div>
            <table>
              <tr>
                <th>N<u>o</u></th>
                <th>Full Name</th>
                <th>Department</th>
                <th>Educational Institute</th>
                <th>Option</th>
              </tr>

              <?php
                
                        $a=1;
                        $stmt = $conn->prepare(
                                "SELECT * FROM form ORDER BY id DESC LIMIT 2");
                        $stmt->execute();
                        $result = $stmt->fetchAll();
                        foreach($result as $row)
                        {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['id']; ?>
                        </td>
                        <td>
                            <?php echo $row['fullName']; ?>
                        </td>
                        <td>
                            <?php echo $row['department']; ?>
                        </td>
                        <td>
                            <?php echo $row['educationalInstitution']; ?>
                        </td>
                        <td><a href="#" class="btn">View</a></td>
                    </tr>
                    <?php
                    }
                    ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>