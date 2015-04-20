<?php
use backend\models\GradeSearch;

?>

<html>


<head>
</head>

<body>	
 <div class="section secondary-section " id="portfolio">
            <div class="triangle"></div>
            <div class="container">
                <div class=" title">
                    <h1>Online Grade Viewer</h1>
                    <p></p>
                </div>


                <!-- Details for School Gallery -->
                <?php
                    $searchModel = new GradeSearch();
                    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                    foreach ($dataProvider->models as $model) {
                    
                    echo '<div id="single-project">
                    <div id="slidingDiv'.$model->id.'" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                       
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                      <h1>'.$model->first_grading.'</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                      <h2>'.$model->second_grading.'</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                      <h3>'.$model->third_grading.'</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                      <h4>'.$model->fourth_grading.'</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>


                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span></span>'.$model->first_grading.'</div>
                                        
                                </div>
                                <p>'.$model->first_grading.'</p>
                            </div>
                        </div>
                    </div>';
                }?> 


                </div>
            </div>
        </div>

</body>
</html>