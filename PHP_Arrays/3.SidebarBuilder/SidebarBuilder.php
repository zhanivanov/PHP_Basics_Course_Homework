<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="styles.css"/>
        <title>SidebarBuilder</title>
    </head>
    <body>
        <form method="post">
            <label for="cat">Categories:</label>
            <input type="text" name="categories" id="cat"/>
            <br/>
            <label for="tag">Tags:</label>
            <input type="text" name="tags" id="tag"/>
            <br/>
            <label for="mon">Months:</label>
            <input type="text" name="months" id="mon"/>
            <br/>
            <input type="submit" value="Generate"/>
        </form>
        <?php
        if(isset($_POST['categories']) && isset($_POST['tags']) && isset($_POST['months'])):
            $categArray = preg_split('/[, ]+/',$_POST['categories']);
            $tagsArray = preg_split('/[, ]+/',$_POST['tags']);
            $monthsArray = preg_split('/[, ]+/',$_POST['months']);
            $listItems = [$categArray,$tagsArray,$monthsArray];
            $headers = ["Categories", "Tags", "Months"];
        ?>
            <?php
            for($i = 0; $i < count($headers); $i++):
            ?>
                <aside>
                    <h3><?= $headers[$i] ?></h3>
                    <ul>
                        <?php
                        for($j = 0; $j < count($listItems[$i]); $j++):
                        ?>
                            <li><?= $listItems[$i][$j] ?></li>
                        <?php
                        endfor;
                        ?>
                    </ul>
                </aside>
        <?php
        endfor;
        ?>
        <?php
        endif;
        ?>
    </body>
</html>