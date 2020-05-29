<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'scripts/headScripts.php';?>
    <title>Project Management App</title>
</head>
<body data-theme="">
        <?php require_once 'includes/appHeader.php';?>
        <?php require_once 'includes/appSidebar.php';?>
        <div class="app-content">
            <?php require_once 'templates/project/projectList.php';?>
        </div>
    <?php require_once 'scripts/bodyScripts.php';?>
</body>
</html>