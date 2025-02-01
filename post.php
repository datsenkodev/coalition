<?
$pref='/';
include('header.php');
  
?>

   
<?if (!$post->is_category && !$_GET['search']):?>

  
<div class="main-screen">
      <div class="title-for-main-screen">
          <h1 class="title-screen"><?=$post->name?></h1>
          <?if (strlen($post->img)):?>
          <img src="/upload/<?=$post->img?>" alt="<?=$post->name?>" class="news-img">
          <?endif;?>
          <p1  ><?=$post->text?></p1>
          <div class="data-avtor">
              <div class="screen-data">
                  <img src="<?=$path?>icn/calendar.svg" alt="<?=$post->name?>" class="data-item">
                  <div class="dd-ww-yyyy"><?=date('d.m.Y',$post->time)?></div>
              </div>
              <?/*
              <div class="news-avtor">
                  <div class="avtor-news-avtor">Автор:</div>
                  <div class="news-avtor-name">Петров Петр</div>
              </div>
              */?>
          </div>
      </div>
  </div> 
    
            
	<?
	if (count($post->parent_id))
	$takoz=$this->db->query("SELECT  p.*, count(pp.parent_id) as count, parent.name as pname FROM post p, post_parent pp LEFT JOIN post as parent ON parent.id=pp.parent_id WHERE p.id!='{$post->id}' AND p.is_category=0  AND p.id=pp.post_id AND pp.parent_id IN (".implode(',',$post->parent_id).") 	AND  p.disabled=0 GROUP BY p.id ORDER BY count LIMIT 4 ")->result_array();
	else $takoz=array();
	
	 ?>
<?else:?>  
  
  <div class="main-content">
        <div class="other-content">
          
			  <?foreach ($post->get_posts(0,99) as $p):?>
          <div class="content-1">
                <a class="content-title-GP2" href="/<?=$p['url']?>"><h4><?=$p['name']?></h4></a>
               <div class="content-text-GP2"><?=character_limiter(strip_tags($post['text']),240)?></div>
            </div>
            <?if (strlen($p['img'])):?>
            <div class="content-2">
                <a class="content-title-GP2" href="/<?=$p['url']?>">
                  <img src="/upload/<?=$p['img']?>" alt="<?=$p['name']?>" class="other-content-item">
               </a>
            </div> 
            <?endif;?>
          <?endforeach;?>  
        </div>
        
    </div>

 <?endif;?>
                        
<?include('footer.php');?>