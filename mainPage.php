<?php

require_once 'php/langSelectionController.php';

getLanguage();
?>
<!DOCTYPE html>
<html lang="<?=$_SESSION['lang']?>" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title><?=getCorrespondingData('mainPage', 'title')?></title>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <link href="css/mainPage.css" rel="stylesheet">
		<?php foreach  (['fr', 'en', 'ja'] as $alternateLang){
			if($alternateLang !== $_SESSION['lang']){
				echo '<link rel="alternate" href="mainPage.php?lang='.$alternateLang.'" hreflang="'.$alternateLang.'">';
			}
		}?>
    </head>
    <body>
        <ul class="navbar">
            <li><a class="active" href="mainPage.php"><?=getCorrespondingData('commonData', 'resume')?></a></li>
            <li><a href="youtuberPresentation.php"><?=getCorrespondingData('commonData', 'youtuberPage')?></a></li>
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
                    <span class="first-name" itemprop="givenName"><?=getCorrespondingData('mainPage', 'firstName')?></span>
                    <span class="last-name" itemprop="name"><?=getCorrespondingData('mainPage', 'lastName')?></span>
                </div>
                <div class="contact-info">
                    <span class="email"><?=getCorrespondingData('mainPage', 'company')?></span>
                    <span class="email-val"><?=getCorrespondingData('mainPage', 'companyName')?></span>
                    <span class="phone"><?=getCorrespondingData('mainPage', 'school')?></span>
                    <span class="phone-val" itemprop="affiliation"><?=getCorrespondingData('mainPage', 'schoolName')?></span>
                </div>

                <div class="about">
                    <span class="position"><?=getCorrespondingData('mainPage', 'aboutPosition')?></span>
                    <span class="desc"><?=getCorrespondingData('mainPage', 'aboutDescription')?></span>
                </div>
            </div>
            <div class="details">
                <div class="section">
                    <div class="sectiongetCorrespondingDatatitle"><?=getCorrespondingData('mainPage', 'experienceTitle')?></div>
                    <div class="sectiongetCorrespondingDatalist">
                        <div class="sectiongetCorrespondingDatalist-item" itemprop="worksFor" itemscope itemtype="https://schema.org/Organization">
                            <div class="left">
                                <div class="name" itemprop="name"><?=getCorrespondingData('mainPage', 'experienceName')?></div>
                                <div class="addr" itemprop="location"><?=getCorrespondingData('mainPage', 'experienceAddr')?></div>
                                <div class="duration"><?=getCorrespondingData('mainPage', 'experienceDuration')?></div>
                            </div>
                            <div class="right" itemscope itemtype="https://schema.org/Person">
                                <div class="name" itemprop="jobTitle"><?=getCorrespondingData('mainPage', 'experienceJobName')?></div>
                                <div class="desc" itemprop="description"><?=getCorrespondingData('mainPage', 'experienceDesc')?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="sectiongetCorrespondingDatatitle"><?=getCorrespondingData('mainPage', 'educationTitle')?></div>
                    <div class="sectiongetCorrespondingDatalist">
                        <div class="sectiongetCorrespondingDatalist-item" itemprop="alumniOf" itemscope itemtype="https://schema.org/CollegeOrUniversity">
                            <div class="left">
                                <div class="name" itemprop="legalName"><?=getCorrespondingData('mainPage', 'education1SchoolName')?></div>
                                <div class="addr" itemprop="location"><?=getCorrespondingData('mainPage', 'education1Addr')?></div>
                                <div class="duration"><?=getCorrespondingData('mainPage', 'education1Duration')?></div>
                            </div>
                            <div class="right" itemscope itemtype="https://schema.org/Organization">
                                <div class="name" itemprop="name"><?=getCorrespondingData('mainPage', 'education1Name')?></div>
                                <div class="desc" itemprop="description"><?=getCorrespondingData('mainPage', 'education1Desc')?></div>
                            </div>
                        </div>
                        <div class="sectiongetCorrespondingDatalist-item" itemprop="alumniOf" itemscope itemtype="https://schema.org/CollegeOrUniversity">
                            <div class="left">
                                <div class="name" itemprop="legalName"><?=getCorrespondingData('mainPage', 'education2SchoolName')?></div>
                                <div class="addr" itemprop="location"><?=getCorrespondingData('mainPage', 'education2Addr')?></div>
                                <div class="duration"><?=getCorrespondingData('mainPage', 'education2Duration')?></div>
                            </div>
                            <div class="right" itemscope itemtype="https://schema.org/Organization">
                                <div class="name" itemprop="name"><?=getCorrespondingData('mainPage', 'education2Name')?></div>
                                <div class="desc" itemprop="description"><?=getCorrespondingData('mainPage', 'education2Desc')?></div>
                            </div>
                        </div><div class="sectiongetCorrespondingDatalist-item" itemprop="alumniOf" itemscope itemtype="https://schema.org/CollegeOrUniversity">
                            <div class="left">
                                <div class="name" itemprop="legalName"><?=getCorrespondingData('mainPage', 'education3SchoolName')?></div>
                                <div class="addr" itemprop="location"><?=getCorrespondingData('mainPage', 'education3Addr')?></div>
                                <div class="duration"><?=getCorrespondingData('mainPage', 'education3Duration')?></div>
                            </div>
                            <div class="right" itemscope itemtype="https://schema.org/Organization">
                                <div class="name" itemprop="name"><?=getCorrespondingData('mainPage', 'education3Name')?></div>
                                <div class="desc" itemprop="description"><?=getCorrespondingData('mainPage', 'education3Desc')?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="sectiongetCorrespondingDatatitle"><?=getCorrespondingData('mainPage', 'projectTitle')?></div>
                    <div class="sectiongetCorrespondingDatalist">
                        <div class="sectiongetCorrespondingDatalist-item" itemprop="subjectOf" itemscope itemtype="https://schema.org/CreativeWork">
                            <div class="left">
                                <div class="name" itemprop="name"><?=getCorrespondingData('mainPage', 'project1Name')?></div>
                            </div>
                            <div class="right">
                                <div class="name" itemprop="description"><?=getCorrespondingData('mainPage', 'project1Language')?></div>
                            </div>
                            <div class="text" itemprop="text"><?=getCorrespondingData('mainPage', 'project1Desc')?></div>
                        </div>
                        <div class="sectiongetCorrespondingDatalist-item" itemprop="subjectOf" itemscope itemtype="https://schema.org/CreativeWork">
                            <div class="left">
                                <div class="name" itemprop="name"><?=getCorrespondingData('mainPage', 'project2Name')?></div>
                            </div>
                            <div class="right">
                                <div class="name" itemprop="description"><?=getCorrespondingData('mainPage', 'project2Language')?></div>
                            </div>
                            <div class="text" itemprop="text"><?=getCorrespondingData('mainPage', 'project2Desc')?></div>
                        </div><div class="sectiongetCorrespondingDatalist-item" itemprop="subjectOf" itemscope itemtype="https://schema.org/CreativeWork">
                            <div class="left">
                                <div class="name" itemprop="name"><?=getCorrespondingData('mainPage', 'project3Name')?></div>
                            </div>
                            <div class="right">
                                <div class="name" itemprop="description"><?=getCorrespondingData('mainPage', 'project3Language')?></div>
                            </div>
                            <div class="text" itemprop="text"><?=getCorrespondingData('mainPage', 'project3Desc')?></div>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <div class="sectiongetCorrespondingDatatitle"><?=getCorrespondingData('mainPage', 'interestsTitle')?></div>
                    <div class="sectiongetCorrespondingDatalist">
                        <div class="sectiongetCorrespondingDatalist-item"><?=getCorrespondingData('mainPage', 'interestsDesc')?></div>
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

