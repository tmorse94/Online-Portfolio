<?php 

    include("./model/dbConnect.php");
    include("./model/projects.php");             
                
    $conn=new connection();
    $pdo=$conn->getPdo();
    $project1= new projects();
    $records=$project1->displayprojects($pdo);
                
    foreach($records as $key=>$value) {
        echo '<div class="portGridItem">';
            echo '<h5 class="titleOverlay">' . $records[$key]["project_name"] . ' </h5>';
            echo '<img src="' . $records[$key]["project_image_path"] . '" alt="' .$records[$key]["project_image_alt"] . '" class="portImage">';

            echo '<div class="gridOverlay">';

                echo '<p> ' . $records[$key]["project_description"] . ' </p>';

                echo '<a   class="' . $records[$key]["project_button_class_name"]. '" href="http://' . $records[$key]["project_button_url"] . '" target="_blank"" ' . $records[$key]["disabled"].'> ' .$records[$key]["project_button_name"] . ' </a>';

            echo '</div>';
        echo '</div>';
    }
?>