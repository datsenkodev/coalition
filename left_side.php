<div class="cont_bl_left">
				<?if ($user->id>0):?>
                 <div class="menu_left">
                     <ul>
                         <li><a href=""><?=l('Уведомления');?></a></li>
                         <li><a href=""><?=l('Баланс');?></a></li>
                         <li><a href=""><?=l('Инструменты');?></a></li>
						 <?if($user->user_type_id==2):?>
                         <li><a href="/create-service"><?=l('Создать рассылку');?></a></li>
						 <li><a href="/my-services"><?=l('Мои рассылки');?></a></li>
						 <li><a href="/add_manual_tip/0"><?=l('Добавить ручной прогноз');?></a> </li>
							<?if ($Express->id<1):?> 
							<li><a href="/add_manual_tip/0/acca"><?=l('Добавить ручной экспресс');?></a></li>
							<?endif;?>
						 <li><a href="/current_tips"><?=l('Активные прогнозы');?></a></li> 
						 <?endif;?>
                     </ul>
                 </div> 
				 <?endif;?>
				 <?if ($Express->id>0):?>
				 <div class="bl_left">
                     <h3><a href="/add_acca/<?=$Express->delivery_id?>"><?=l('Создается экспресс');?> #<?=$Express->id?></a>
					</h3>
                     <table>
                         <thead>
                            <tr>
                                 <th><?=l('Событие');?></th>
                                 <th><?=l('Ставка');?></th>
                             </tr> 
                         </thead>
                         <tbody>
						 <?foreach ((new Forecast_Events($this))->get_all(4,0,'id','asc',array('express'=>$Express->id)) as $row):
						 $Forecast_Events2 = new Forecast_Events($this,$row['id']);
						 ?>
                             <tr>
                                 <td><?=$Forecast_Events2->name?></td>
                                 <td  ><?=$Forecast_Events2->get_this_cupon()?></td>
                             </tr> 
                        <?endforeach;?>
                         </tbody>
                     </table>
					 <?if ($Express->get_count_events()>=2):?>
					<a href="/add_acca/<?=$Express->delivery_id?>"><?=l('Завершить создание');?></a><br>
					<?endif;?>
					<a href="/add_acca/<?=$Express->delivery_id?>?del=<?=$Express->id?>"><?=l('Удалить экспресс');?></a>
                 </div> 
				 
				 
					
				 <?endif;?>
                 <!--  -->
                 <div class="bl_left">
                     <h3>Комплексный рейтинг</h3>
                     <table>
                         <thead>
                            <tr>
                                 <th>Рассылка</th>
                                 <th>Приб.</th>
                             </tr> 
                         </thead>
                         <tbody>
                             <tr>
                                 <td>UNREAL.UN.UT</td>
                                 <td class="green">+67%</td>
                             </tr>
                             <tr>
                                 <td>UNREAL.UN.UT</td>
                                 <td class="red">-67%</td>
                             </tr>
                             <tr>
                                 <td>UNREAL.UN.UT</td>
                                 <td class="red">-67%</td>
                             </tr>
                             <tr>
                                 <td>UNREAL.UN.UT</td>
                                 <td class="green">+67%</td>
                             </tr>
                             <tr>
                                 <td>UNREAL.UN.UT</td>
                                 <td class="green">+67%</td>
                             </tr>
                             <tr>
                                 <td>UNREAL.UN.UT</td>
                                 <td class="green">+67%</td>
                             </tr>
                             <tr>
                                 <td>UNREAL.UN.UT</td>
                                 <td class="green">+67%</td>
                             </tr>
                         </tbody>
                     </table>
                 </div> 
                 <!--  -->
                 <!--  -->
                 <div class="bl_left">
                     <h3>Краткосрочный рейтинг</h3>
                     <table>
                         <thead>
                            <tr>
                                 <th>Рассылка</th>
                                 <th>Рацио</th>
                             </tr> 
                         </thead>
                         <tbody>
                             <tr>
                                 <td>UNREAL.UN.UT</td>
                                 <td class="green">+67%</td>
                             </tr>
                             <tr>
                                 <td>UNREAL.UN.UT</td>
                                 <td class="red">-67%</td>
                             </tr>
                             <tr>
                                 <td>UNREAL.UN.UT</td>
                                 <td class="green">+67%</td>
                             </tr>
                             <tr>
                                 <td>UNREAL.UN.UT</td>
                                 <td class="green">+67%</td>
                             </tr>
                             <tr>
                                 <td>UNREAL.UN.UT</td>
                                 <td class="green">+67%</td>
                             </tr>
                             <tr>
                                 <td>UNREAL.UN.UT</td>
                                 <td class="green">+67%</td>
                             </tr>
                             <tr>
                                 <td>UNREAL.UN.UT</td>
                                 <td class="green">+67%</td>
                             </tr>
                         </tbody>
                     </table>
                 </div> 
                 <!--  -->                 
                </div>