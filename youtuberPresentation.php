<?php

require_once 'php/langSelectionController.php';

getLanguage();
?>
<!DOCTYPE html>
<html lang="<?=$_SESSION['lang']?>" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title><?=getCorrespondingData('youtuberPresentation', 'title')?></title>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <link href="css/mainPage.css" rel="stylesheet">
		<?php foreach  (['fr', 'en', 'ja'] as $alternateLang){
			if($alternateLang !== $_SESSION['lang']){
				echo '<link rel="alternate" href="youtuberPresentation.php?lang='.$alternateLang.'" hreflang="'.$alternateLang.'">';
			}
		}?>
    </head>
    <body>
        <ul class="navbar">
            <li><a href="mainPage.php"><?=getCorrespondingData('commonData', 'resume')?></a></li>
            <li><a class="active" href="youtuberPresentation.php"><?=getCorrespondingData('commonData', 'youtuberPage')?></a></li>
            <li class="rightli" style="float:right">
                <div class="languageSelector">
                    <a href="mainPage.php?lang=fr" id="fr">&#127467;&#127479;</a>
                    <a href="mainPage.php?lang=en" id="en">&#127468;&#127463;</a>
                    <a href="mainPage.php?lang=ja" id="ja">&#127471;&#127477;</a>
                </div>
            </li>
        </ul>
        <div class="container" itemscope itemtype="http://schema.org/Person">
            <div class="header">
                <div class="full-name">
                    <span class="first-name" itemprop="name"><?=getCorrespondingData('youtuberPresentation', 'name')?></span>
                </div>
                <div class="contact-info">
                    <span class="email"><?=getCorrespondingData('youtuberPresentation', 'youtube')?></span>
                    <span class="email-val" itemprop="url"><a href="https://www.youtube.com/user/mrbeast6000">https://www.youtube.com/user/mrbeast6000</a></span>
                </div>
            </div>
            <div class="details">
                <div class="section">
                    <div class="sectiongetCorrespondingDatatitle"><?=getCorrespondingData('youtuberPresentation', 'presentation')?></div>
                    <div class="sectiongetCorrespondingDatalist">
                        <div class="name"><?=getCorrespondingData('youtuberPresentation', 'wikipedia')?></div>
                        <div class="desc" itemprop="description"><?=getCorrespondingData('youtuberPresentation', 'description')?></div>
                    </div>
                </div>
                <div class="section">
                    <div class="sectiongetCorrespondingDatatitle"><?=getCorrespondingData('youtuberPresentation', 'video')?></div>
                    <div class="videoSection">
                        <iframe src="https://www.youtube-nocookie.com/embed/TJ2ifmkGGus?cc_load_policy=1&hl=<?=$_SESSION['lang']?>" title="YouTube video player" allowfullscreen itemprop="url"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="templateLink">
                <a href="https://codepen.io/knaman2609/pen/Zbyjvv"><?=getCorrespondingData('commonData', 'templateLink')?></a>
            </div>
        </div>

        <script src="js/languageSelectionScript.js"></script>
    </body>
</html>

