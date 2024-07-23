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
        position: relative;
    }

    .icon-wrapper p {
        margin: 0;
        user-select: all;
    }

    .icon-name {
        display: flex;
        align-items: center;
        gap: 4px;
    }

    button {
        background: #fff;
        padding: 0;
        border: 0;
        border-radius: 4px;
        margin: 0;
        width: 32px;
        height: 32px;
        position: absolute;
        top: 10px;
        right: 10px;
        color: #606060;
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
                            echo '<div class="icon-name" id="'.$iconName.'">'.$iconName;
                            echo '<button data-clipboard-target="#'.$iconName.'"class="js-copy">'. Icon::get('copy').'</button>';
                            echo '</div>';
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js"></script>
    <script>
        new ClipboardJS('.js-copy');
    </script>
</body>
</html>
