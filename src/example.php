<?php
    require __DIR__ . '/../config.php';
    require SRC_PATH . '/NimbusIcons/Icon.php';

    use Nimbus\Icon;
    $svgFiles = glob("static/nimbus-icons/*.svg");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
<style>
    .icon-list {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }
    .icon-wrapper {
        padding: 26px;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        background: #f9f9f9;
        border-radius: 10px;
        gap: 4px;
        font-weight: 500;
    }

    .icon-wrapper p {
        margin: 0;
        user-select: all;
    }
</style>

</head>
<body>
    <div class="container pt-4 pb-4">
        <div class="row">
            <div class="col-12">
                <div class="icon-list">
                    <?php
                        // Show all icons
                        foreach ($svgFiles as $icon) {
                            $iconName = basename($icon, '.svg');
                            echo '<div class="icon-wrapper">';
                            echo Icon::get($iconName, 40, '#000000');
                            echo '<p>'.$iconName.'</p>';
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>






