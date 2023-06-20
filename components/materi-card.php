<?php

require '../php/function.php';
function materi_card($imagePath ,$title, $content, $downloadPath, $link)
{
    $html = '
    <div class="materi-card">
        <img class="materi-img" src="'.$imagePath.'" alt="">
        <div class="materi-content">
            <h1>'.$title.'</h1>
            <p>'.$content.'</p>
        </div>
        <div class="materi-right">
            <a class="download-button" href="'.$downloadPath.'" download>
                Download
            </a>
            <div class="img-share">
                <a href="">
                    <img class="mtr-img" src="../assets/images/love.png" alt="">
                </a>
                <a href="">
                    <img class="mtr-img" src="../assets/images/share.png" alt="">
                </a>
                <a href="">
                    <img class="mtr-img" src="../assets/images/save.png" alt="">
                </a>
            </div>
        </div>
    </div>
    <iframe class="video" width="420" height="315" src="'.$link.'"></iframe>';

    

    return $html;
}

// function youtube($link)
// {
//     $html = 
//     '<iframe width="420" height="315" src="'.$link.'"></iframe>';
//     return $html;
// }
