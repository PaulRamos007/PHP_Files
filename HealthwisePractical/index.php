<html>

<?php
$pageTitle = "Healthwise Portal";
include "includes/openConnection.php";
include 'includes/header.php';
?>

<body>
  <form name="frmArticles" method="post" action="index.php">
    <div id="page">

      <div id="wrapper">
        <div id="header">
          <img src="images/healthwiseLogo1.jpg" alt="Logo" />
        </div>
        <div id="col1">
          <p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {


              $id = $_POST['id'];

              $result = $conn->prepare($sql);

              if ($result === false) {
                echo $conn->error;
              } else {
                $result->bind_param("i", $id);
                $result->execute();
                $final = $result->get_result();
                $articles = $final->fetch_assoc();
              }
              echo $articles['article_content'];
            };
            ?>
          </p>
        </div>



        <div id="col2">
          <div id="colHeader"> Healthwise Article List</div>
          <p></p>
          <div id="colFooter">Healthwise prides itself on providing high
            quality fitness information
            to our clients. Read the latest articles here:<br />
            <br />
            <div id="center" style="text-align:center;">

              <!--dropdownlist-->
              <select name="articleList">
                <option value="0">--Select An Article--</option>
                <?php
                $sql = "SELECT id, article_name FROM articles";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                  echo "<option value='" . $row['id'] . "' > " . $row['article_name'] . "</option>";
                }
                $result->close();
                $conn->close();
                ?>
              </select>
              <!--end dropdown list-->
              <input type="submit" name="submit" value="submit" />
            </div>
          </div>

        </div>

      </div>

      <div style="text-align:center">
        <?php require 'includes/footer.php'; ?>
      </div>
    </div>
  </form>
</body>

</html>