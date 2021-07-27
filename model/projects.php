<?php
    
    class projects{
        private $project_name;
        private $project_description;
        private $project_button_name;
        private $project_button_url;
        private $project_button_class_name;
        private $project_image_path;
        private $project_image_alt;
        private $disabled;

        // public function projectInfo($project_name, $project_description, $project_url, $project_image_path, $date) {
        //     $this->project_name=FILTER_VAR($project_name, FILTER_SANITIZE_STRING);
        //     $this->project_description=FILTER_VAR($project_description, FILTER_SANITIZE_STRING);
        //     $this->project_url=FILTER_VAR($project_url, FILTER_SANITIZE_STRING);
        //     $this->project_image_path=FILTER_VAR($project_image_path, FILTER_SANITIZE_STRING);
        //     $this->date=FILTER_VAR($date, FILTER_SANITIZE_STRING);
        // }
        public function displayprojects($pdo) {
            $query = "SELECT * FROM projects";
            $stmt= $pdo->prepare($query);
            // $stmt->bindParam(":projectid");
            $stmt->execute();
            $records=array();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
                $records[]=$row;
            }
            return $records;
        }
    }
?>