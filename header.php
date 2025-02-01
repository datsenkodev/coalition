<?php
ini_set('memory_limit', '512M');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$description?>">
  	<meta name="keywords" content="<?=$keywords?>">

    <title><?=$title?></title>

    <link rel="stylesheet" href="./css/burger.css?v=<?=time()?>">
    <link rel="stylesheet" href="./cssTwoPage/newsTwoSolution.css">
    <link rel="stylesheet" href="./css/section-contacts.css">
    <link rel="stylesheet" href="./cssTwoPage/mainScreen.css">
    <link rel="stylesheet" href="./css/vizitka.css">
    <link rel="stylesheet" href="./cssTwoPage/news-WR.css">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">  
    <link rel="stylesheet" href="./css/section-map.css">
    <link rel="stylesheet" href="./css/section-achievements.css"> 
    <link rel="stylesheet" href="./css/section-distracted.css">
    <link rel="stylesheet" href="./css/section-news.css">
    <link rel="stylesheet" href="./css/future.css">
    <link rel="stylesheet" href="./css/section-supportUs.css">
</head>
<body>
    <div class="main-header">
        <div class="logo">
           <a href="/"><img src="./icn/logo-black.svg" alt="logo" class="logo-image"></a>
        </div>               
        <div class="btn-list">      
             <!-- Бургер-меню -->
             <div class="burger-menu">
                <div class="burger-icon">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <div class="burger-menu-content">
                <?foreach ((new Post($this,55))->get_posts(0,10,'time','asc',['language'=>$user->get_language()]) as $postrow):
                  $submenu = (new Post($this,$postrow['id']))->get_posts(0,20,'time','asc',['language'=>$user->get_language()]);
                  ?>
                  <li><a href="/<?=$postrow['url']?>" <?=(count($submenu)>0 ? 'class="dropdown-arrow"'  : '' )?>><?=$postrow['name']?></a></li>
                  <?if (count($submenu)>0):?>
                  <div class="sub-dropdown-menu">
                      <?foreach ((new Post($this,1))->get_posts(0,10,'time','asc',['language'=>$user->get_language()]) as $subrow): ?>
                        <a href="/<?=$subrow['url']?>"><?=$subrow['name']?></a> 
                      <?endforeach;?>
                  </div>
                  <?endif;?>
                <?endforeach;?> 
                </div>
            </div>
                                
            <div class="btn-list-else">
                <?foreach ((new Post($this,55))->get_posts(0,10,'time','asc',['language'=>$user->get_language()]) as $postrow):
                  $submenu = (new Post($this,$postrow['id']))->get_posts(0,20,'time','asc',['language'=>$user->get_language()]);
                  ?> 
                  <?if (count($submenu)>0):?>
                    <div class="nav-button dropdown-only">
                        <?=$postrow['name']?>
                        <span class="dropdown-icon"></span>
                        <div class="dropdown-menu">
                          
                            <div class="block-dropdown-menu">
                              <?
                              $mc=0;
                              foreach ((new Post($this,1))->get_posts(0,10,'time','asc',['language'=>$user->get_language()]) as $subrow): 
                              $mc++;
                              ?>
                                <a href="/<?=$subrow['url']?>"><?=$subrow['name']?></a> 
                                 <?if($mc>=3):?> 
                                  </div>
                                  <div class="block-dropdown-menu">
                                <? $mc=0;
                                endif;?>

                              <?endforeach;?>
                                  
                            </div> 
                        </div>
                    </div> 
                  <?else:?>
                    <a href="/<?=$postrow['url']?>" class="nav-button hover-only"><?=$postrow['name']?></a>
                  <?endif;?>
                <?endforeach;?>   
            </div>
            <div class="header-suport-button">
                <a href="/support" class="nav-button-suport"><?=l('Поддержите нас')?></a>
            </div>
        
            <div class="nav-button-ru dropdown-only">
                <?=substr($user->get_language(),0,2)?>
                <span class="dropdown-icon"></span>
                <div class="dropdown-menu-lng">
                  <?foreach ((new Language($this))->get_all(0,20,'id','asc',['active'=>1]) as $lang):?>
                    <a href="//<?=$lang['url']?>.<?=without_sub_dom($_SERVER['HTTP_HOST']).$_SERVER['REQUEST_URI']?>"><?=$lang['url']?></a>
                  <?endforeach;?>
                    
                </div>
            </div>
        </div>    
    </div>

     