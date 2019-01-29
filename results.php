<?php include_once 'conn.php' ?>
<!doctype html>
<html>
    <head>
        <title> Feedback Data </title>
    </head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <body>
        <?php
            $sql_response1 = "SELECT AVG(response1) FROM responses;";
            $sql_response2 = "SELECT AVG(response2) FROM responses;";
            $sql_response3 = "SELECT AVG(response3) FROM responses;";
            $sql_response4 = "SELECT AVG(response4) FROM responses;";
            $sql_text = "SELECT feedback_text FROM responses;";
            $result1 = mysqli_query($connect, $sql_response1);
            $result2 = mysqli_query($connect, $sql_response2);
            $result3 = mysqli_query($connect, $sql_response3);
            $result4 = mysqli_query($connect, $sql_response4);
            $result_text = mysqli_query($connect, $sql_text);
            $disp_r1 = mysqli_fetch_assoc($result1);
            $disp_r2 = mysqli_fetch_assoc($result2);
            $disp_r3 = mysqli_fetch_assoc($result3);
            $disp_r4 = mysqli_fetch_assoc($result4);
            ?>
        <style>
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            font-size: 30px;
            }
            th{
                background-color: #ff4800;
                color: white;
            }
            ol, li {
                font-size: 30px;
            }
            tr:nth-child(even) {background-color: #f2f2f2;}
            tr:hover {background-color: #65d6d8;}
            td{
                text-align: center;
            }
            /* Style the button that is used to open and close
            the collapsible content */
            .collapsible {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            /*width: 100%;*/
            border: none;
            text-align: left;
            outline: none;
            font-size: 30px;
            }
            /* Add a background color to the button if it is clicked on
             (add the .active class with JS), and when you move the mouse over
             it (hover) */
            .active, .collapsible:hover {
            background-color: #ccc;
            }
            /* Style the collapsible content. Note: hidden by default */
            .content {
            padding: 0 18px;
            display: none;
            overflow: hidden;
            background-color: #f1f1f1;
            }
        </style>
        <div style="overflow-x:auto;">
        <table align = "center">
            <tr>
                <th><b><i>S. No.</b></i></th>
                <th><b><i>Query</i></b></th>
                <th><b><i>Average Response</b></i></th>
            </tr>
            <tr>
                <td>1</td>
                <td>Are you satisfied with our products?</td>
                <td>
                    <?php echo round($disp_r1['AVG(response1)'],2); ?>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Do you find our products easy to use?</td>
                <td>
                    <?php echo round($disp_r2['AVG(response2)'],2); ?>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>How much impact our products have made on your daily routine?</td>
                <td>
                    <?php echo round($disp_r3['AVG(response3)'],2) ?>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Would you recommend our products to your friends and family? </td>
                <td>
                    <?php echo round($disp_r4['AVG(response4)'],2) ?>
                </td>
            </tr>
        </table>
    </div>
        <br><br><br><button class="collapsible">Text Feedbacks</button>
        <div class="content">
            <ol>
                <?php
                    while($row = mysqli_fetch_array($result_text)){
                         if($row['feedback_text']!="")
                         echo "<li>".$row['feedback_text']."</li>";
                    }
                    ?>
            </ol>
        </div>
        <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;

            for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
              content.style.display = "none";
            } else {
              content.style.display = "block";
            }
            });
            }
        </script>
    </body>
</html>
