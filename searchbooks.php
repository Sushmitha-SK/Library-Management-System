<!DOCTYPE HTML>
<html>
    <body bgcolor="87ceeb">
    <center><h2>Simple Library Management System</h2></center>
    <br>

    <?php
    $db_host = 'localhost'; // Server Name
    $db_user = 'root'; // Username
    $db_pass = ''; // Password
    $db_name = 'lms'; // Database Name
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    $search = $_REQUEST["search"];

    //$query = "select ISBN,Title,Author,Edition,Publication from book_info where title like '%$search%'"; //search with a book name in the table book_info
    $query = "SELECT `BookID`, `BookTitle`, `ISBNNo`, `Author`, `PID`, `Edition`, `Price`, `Category`, `BooksAvailable` FROM `books` WHERE BookTitle like '%$search%'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0)
        if (mysqli_num_rows($result) > 0) {
            ?>

            <table border="2" align="center" cellpadding="5" cellspacing="5">

                <tr>
                    <th> BookID </th>
                    <th> BookTitle </th>
                    <th> ISBNNo </th>
                    <th> Author </th>
                    <th> PID </th>
                    <th>Edition</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Books Available</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["BookID"]; ?> </td>
                        <td><?php echo $row["BookTitle"]; ?> </td>
                        <td><?php echo $row["ISBNNo"]; ?> </td>
                        <td><?php echo $row["Author"]; ?> </td>
                        <td><?php echo $row["PID"]; ?> </td>
                        <td><?php echo $row['Edition'] ?></td>
                        <td><?php echo $row['Price'] ?></td>
                        <td><?php echo $row['Category'] ?></td>
                        <td><?php echo $row['BooksAvailable'] ?></td>
                    </tr>
                    <?php
                }
            } else
                echo "<center>No books found in the library by the name $search </center>";
        ?>
    </table>
</body>
</html>
<br>