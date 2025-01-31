<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$post->name?></title>
    <link rel="stylesheet" href="<?=$path?>movements/css/styles.css?v=<?=time()?>">
    <link rel="icon" type="imagepng" sizes="16x16" href="/upload/<?=$post->logo?>">   
</head>
<body>
    <div style="background-image: url(/upload/<?=$post->img?>);" class="rebels-screen-wrapper">
        <?if($post->map>0):?>
        <div style="background-image: url(<?=$path?>movements<?=($post->map==2 ? '/img/RuMap.png' : '/img/razval.png')?>);" class="RuMapDecor"></div>
        <?endif;?>
        <div class="logoRebels">
            <a href="<?=$post->link?>" target="_blank"><img src="/upload/<?=$post->logo?>" alt="a" class="logoImg"></a>
            <div class="titleSubtitle">
                <div class="rebelsTitle"><?=$post->name?></div>
                <div class="rebelsSubTitle"><?=$post->text?></div>
            </div>
        </div>
        <div class="MainContentRebels">
            <div class="RebelsAchievements">
                <div class="RebelsAchievementsLayout">
                <?foreach ($post->act_types as $k=>$v):?>
                    <div class="RebelsAchievementsItem">
                        <img src="<?=$path?>movements/icnSVG/<?=$k?>.svg" alt="" class="SVGRebels">
                        <div class="TxtRebelsAch">
                            <div class="RebelsAchievementsNumbers"><?=$post->get_act_type($k)?></div>
                            <div class="RebelsAchievementsName"><?=l($v)?></div>
                        </div>
                    </div>
                <?endforeach;?>    
                </div>
            </div>
            <div class="rebelsContentBlock">
                <div class="dataRebels">
                    <div class="yearRebels">2022-<?=date('Y')?></div>
                    <div class="promotionsByMonth"><?=l('Кол-во акций по месяцам')?></div>
                </div>
                <div class="RebelsCalendar">
                    <?foreach ($post->get_act_months() as $k=>$v):?>
                    <div class="CalendarItem">
                        <div class="CalendarItemYearAndMonth"><?=($k)?></div>
                        <div class="CalendarItemCount"><?=$v?></div>
                    </div>
                    <?endforeach;?>
                </div>
                <div class="RebelsContacts">
                    <div class="InstRebels">
                        <img src="<?=$path?>movements/icn/Rectangle.png" alt="" class="InstRebelsIcn">
                        <div class="RebelsContactsTxt"><a href="//t.me/boroshnonews" class="links">boroshnonews</a></div>
                    </div>
                    <div class="TelegrRebels">
                        <img src="<?=$path?>movements/icn/icon _telegram_.png" alt="" class="InstRebelsIcn">
                        <div class="RebelsContactsTxt"><a href="//t.me/asmodaus_om" class="links">asmodaus_om</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body></html>