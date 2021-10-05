<?php
$org = shell_exec("/usr/games/fortune");

# Replacing
$out = str_replace("\"", "'", $org);
$output = str_replace("\n", "<br >", $out);
$outno = str_replace("\n", "", $out);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta property="og:title" content="viw.se">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://viw.se/">
        <meta property="og:image" content="https://viw.se/caret.gif">
        <meta property="og:description" content="<?php echo $outno;?>">
        <title>viw.se</title>
    </head>
    <body style="background-color: #282A36;">
        <p style="color: #9ED9FF;"><?php echo $output;?></p>
    </body>
</html>
