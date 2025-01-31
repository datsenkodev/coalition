<?include('header.php');?>
<div class="main-vizitka">
        <div class="main-vizitka-layout">
            <div class="vizitka-txt">
                <div class="title-subtitle">
                    <h1 class="vizitla-title">Коалиция</h1>
                    <h3 class="vizitka-subtitle">За свободу от имперских тиранов</h2>
                    </div>
                <p class="vizitka-text">Мы международное движение, посвященное поддержке мира, свободы и самоопределения всех народов России. Мы верим, что истинное благополучие и развитие возможны только в условиях справедливости и уважения к правам каждого человека.</p>
            </div>
                <img src="<?=$path?>icn/main-img.svg" alt="logo image 1" class="main-img">
        </div>
    </div>
    <div class="main-content">
        <div class="section-distracted">
            <div class="section-distracted-block">
                <div class="info-section-distracted-block">
                    <h3 class="section-distracted-title">26 +</h3>
                    <p class="section-distracted-text">Национальных представительств и организаций </p>
                </div>
                <div class="info-section-distracted-block">
                    <h3 class="section-distracted-title">7 +</h3>
                    <p class="section-distracted-text">Подпольно-освободительных движений </p>
                </div>
                <div class="info-section-distracted-block">
                    <h3 class="section-distracted-title">5 +</h3>
                    <p class="section-distracted-text">Проектов: <a href="https://t.me/rise_of_drones" tatget="_blank"> ВОССТАНИЕ МАШИН</a>, <a href="https://www.instagram.com/coalition.factory.alakurd" tatget="_blank" >Производство Alakurd</a>, Арт-дивизон, <a href="https://t.me/freedom_coalition/812" tatget="_blank" >Помощь военным</a>, <a href="https://t.me/HeraldOfRebellion" tatget="_blank" >Вестник Восстания</a>...  </p>
                </div>
            </div>
        </div>
        <div class="section-map">

            <h3 class="section-title-mO">Кaрта будущих государств</h3>
            <img src="<?=$path?>img/map.png" alt="logo image 1" class="map-pmg">
        </div>
        <div class="section-achievements">
            <div class="achievements-title-button">
                <div class="section-title-aO">Состав Коалиции</div>
                <a href="https://t.me/freedom_coalition/794" target="_blank"><button class="achievements-button">Поддержать</button></a>
            </div>
            <div class="achievements-list">
            <?foreach ((new Post($this,5))->get_posts(0,100) as $post):   ?>
                <a href="/<?=$post['url']?>">
                <div class="achievements-item">
                <?if($post['img']):?>
                    <img src="/upload/<?=$post['img']?>" alt="<?=$post['name']?>" class="news-img">
                    <?endif;?>
                    <div class="achievements-texty">
                        <div class="achievements-title"><?=$post['name']?></div>
                        <div class="achievements-text"><?=character_limiter(strip_tags($post['text']),124)?></div>
                    </div>
                </div>
                </a>
            <?endforeach;?> 
            </div>
        </div>
        <div class="section-news">
            <div class="news-title-button">
                <div class="section-title-aO">Последние новости</div>
                <a href="/news"><button class="news-button">Все новости</button></a>
            </div>
            <div class="news-block">
            <?foreach ((new Post($this,1))->get_posts(0,10) as $post):   ?>
				<a href="/<?=$post['url']?>">
                <div class="news-item">
                    <?if($post['img']):?>
                    <img src="/upload/<?=$post['img']?>" alt="<?=$post['name']?>" class="news-img">
                    <?endif;?>
                    <div class="news-discroption">
                        <div class="news-discroption-title"><?=$post['name']?></div>
                        <div class="news-discroption-text"><?=character_limiter(strip_tags($post['text']),124)?> </div>
                    </div>
                    <div class="news-discroption-data">
                        <img src="<?=$path?>icn/calendar.svg" alt="<?=$post['name']?>" class="data-item">
                        <div class="dd-ww-yyyy"><?=date('d.m.Y',$post['time'])?></div>
                    </div>
                </div>
            </a> 
            <?endforeach;?> 
            </div>
        </div>
        <div class="section-future">
            <div class="section-future-content">
                <div class="section-future-texty">
                    <div class="section-future-about-text">
                        <div class="section-future-advantage">
                            <div class="advantage-name">Присоединиться.</div>
                            <div class="advantage-number">01</div>
                        </div>
                        <div class="advantage-title-text">
                            <div class="section-future-title">Коалиция - это будущее</div>
                            <div class="section-future-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </div>
                        </div>
                        </div>
                            <button class="news-button">Присоединиться</button>
                        </div>
                    <img src="img/future.png" alt="logo image 1" class="future-img">
                </div>
            </div>
         
        <div class="section-future2">
            <div class="section-future2-content">
                <img src="img/future.png" alt="logo image 1" class="future2-img">
                <div class="section-future2-texty">
                    <div class="section-future2-about-text">
                        <div class="section-future2-advantage">
                            <div class="advantage-name">Присоединиться.</div>
                            <div class="advantage-number">02</div>
                        </div>
                        <div class="advantage-title-text">
                            <div class="section-future-title">Коалиция - это будущее</div>
                            <div class="section-future-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </div>
                        </div>
                        <button class="news-button">Присоединиться</button>  
                    </div>
                </div>
            </div>
        </div>
        <div class="section-future3">
            <div class="section-future-content">
                <div class="section-future-texty">
                    <div class="section-future-about-text">
                        <div class="section-future-advantage">
                            <div class="advantage-name">Присоединиться.</div>
                            <div class="advantage-number">03</div>
                        </div>
                        <div class="advantage-title-text">
                            <div class="section-future-title">Коалиция - это будущее</div>
                            <div class="section-future-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </div>
                        </div>
                    </div>
                    <button class="news-button">Присоединиться</button>
                </div>
                    <img src="img/future.png" alt="logo image 1" class="future-img">
                </div>
            </div>
        </div>


        <div class="section-supportUs">
            <h1 class="vizitla-title">Поддержите нас</h1>
            <div class="section-supportUs-donation">
                <div class="section-supportUs-donationItem">
                    <div class="suppots-name">Любитель</div>
                    <div class="suppots-cost-descr">
                        <div class="soppots-cost">
                            <div class="section-future-title">$5</div>
                            <div class="achievements-title">/МЕСЯЦ</div>
                        </div>
                        <div class="supports-description">It is a long established fact that a reader will be distracted.</div>
                    </div>
                    <button class="supports-button">Поддержать</button>
                </div>
                <div class="section-supportUs-donationItem">
                    <div class="suppots-name">Фанат</div>
                    <div class="suppots-cost-descr">
                        <div class="soppots-cost">
                            <div class="section-future-title">$20</div>
                            <div class="achievements-title">/МЕСЯЦ</div>
                        </div>
                        <div class="supports-description">It is a long established fact that a reader will be distracted.</div>
                    </div>
                    <button class="supports-button">Поддержать</button>
                </div>
                <div class="section-supportUs-donationItem">
                    <div class="suppots-name">Меценат</div>
                    <div class="suppots-cost-descr">
                        <div class="soppots-cost">
                            <div class="section-future-title">$100</div>
                            <div class="achievements-title">/МЕСЯЦ</div>
                        </div>
                        <div class="supports-description">It is a long established fact that a reader will be distracted.</div>
                    </div>
                    <button class="supports-button">Поддержать</button>
                </div>
            </div>
        </div>




 
	
	 
<?include('footer.php');?>