<style>

 .btn_buy{
     margin-top: 47px;
}
     a:hover,a:focus{
   color:#004b85;
    cursor: pointer;
}

.mar_top{
    margin-top:-38px;
}

@media only screen and (max-width: 479px){
    .category_cls{
        margin-right:118px;
        margin-bottom:2rem;
    }
    .mar_top{
    margin-top:0px;
    }
    .mar_bottom{
    margin-bottom: -99px
    }
     .btn_buy{
          margin-top:7px;
      }
}
@media only screen and (max-width: 320px){
    .category_cls{
        margin-right:118px; 
        margin-bottom:2rem;
    } .mar_top{
    margin-top:0px;
}

.mar_bottom{
margin-bottom: -99px
}
 .btn_buy{
          margin-top:7px;
      }

}

 
 @media only screen and (min-width: 375px){
    .category_cls{
        margin-right:52px;
        margin-right:16rem;
    } .mar_top{
    margin-top:0px;
}

 .btn_buy{
          margin-top:7px;
      }
}

 @media only screen and (max-width: 400px){
    .category_cls{
        margin-right:72px;
        margin-right:16rem;
    } .mar_top{
    margin-top:0px;
}

.mar_bottom{
margin-bottom: -99px
}
 .btn_buy{
          margin-top:7px;
      }

}

    

   .category_cls{
               margin-right:52px;
                margin-bottom:2rem;

   } 
   
   
   
   @media (max-width: 786px)
iframe {
    height: 250px;
    width:100%;
}
@media (max-width: 991px) and (min-width: 768px)
iframe {
    height: 200px;
    width:100%;
}

  @media (max-width: 320px)
iframe {
    height: 250px;
    width:100%;
}
</style>



	<!-- Start of Main -->
		<main class="main">
			<!-- Start of Page Header -->
			<div class="page-header" style="height:4rem;">
				<div class="container">
				    	<ul class="breadcrumb" style="
    text-decoration: none;border-bottom:none;">
						<li style="color: #FFF;"><a href="<?php echo base_url();?>">Home</a>
						</li>
					<!--	<li style="color: #FFF;">Report Details</li>-->
						<?php if(!empty($region_name))
					{?>
						<li style="color: #FFF;"><b><?php echo $region_name;?></b></li>
						<?php }?>
						<?php if(!empty($industry_name))
					{?>
						<li style="color: #FFF;"><b><?php echo $industry_name;?></b></li>

					<?php }?>
					<?php if(!empty($title))
					{?>
						<li style="color: #FFF;"><b><?php echo $title;?></b></li>
					<?php }?>
						<?php if(!empty($company_name))
					{?>
					<li style="color: #FFF;"><b><?php echo $company_name;?></b></li>
					<?php }?>
						<?php if(!empty($category))
					{?>
					
					<li style="color: #FFF;"><b><?php echo $category;?></b></li>
					<?php } ?>
					
					</ul>
				    
				    
				    
				<!--	<?php if(!empty($region_name))
					{?>
						<h1 style="color: #FFF;" class="page-title mb-0"><?php echo $region_name;?> </h1>

					<?php }?>
					<?php if(!empty($industry_name))
					{?>
						<h1 style="color: #FFF;" class="page-title mb-0"><?php echo $industry_name;?> </h1>

					<?php }?>
					<?php if(!empty($title))
					{?>
						<h1 style="color: #FFF;" class="page-title mb-0"><?php echo $title;?> </h1>

					<?php }?>

						<?php if(!empty($company_name))
					{?>
						<h1 style="color: #FFF;" class="page-title mb-0"><?php echo $company_name;?> </h1>

					<?php }?>
						<?php if(!empty($category))
					{?>
				
						<h1 style="color: #FFF;" class="page-title mb-0"><?php echo $category;?> </h1>

					<?php }?>-->
				</div>
			</div>
			<!-- End of Page Header -->
			<!-- Start of Breadcrumb -->
			<!--<nav class="breadcrumb-nav mb-5 pb-1">
				<div class="container">
					<ul class="breadcrumb">
						<li><a href="<?php echo base_url();?>">Home</a>
						</li>
						<li></li>
					</ul>
				</div>
			</nav>-->
			<!-- End of Breadcrumb -->
			<div class="container">
				<div class="shop-content toolbox-horizontal mt-0">
					<!-- Start of Toolbox -->
					<!-- Start of Toolbox -->
					<nav class="toolbox sticky-toolbox sticky-content">
					    	<div class="shop-content toolbox-horizontal mar_top mar_bottom" >
							        <div class="row">
							           
									<?php if(!empty($category)){
								            if(!empty($category_chart)){?>
        							      <?php echo $category_chart['category_chart'];?>
        							 
                                        <?php }}?>
                                       
                                    </div>
        						 </div>	
						<aside class="sidebar sidebar-fixed shop-sidebar">
							<div class="sidebar-overlay"></div> <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
						
							<div class="sidebar-content toolbox-left">
							    
								<!-- Start of Collapsible widget -->
								<div class="toolbox-left">
									<div class="toolbox-item toolbox-sort select-menu">
									<!-- 	<form action="<?php //echo base_url();?>report/report_list_view" method="get"> -->

										<?php 
										if(!empty($region_name))
										{
											$reg 	 =  urldecode($this->uri->segment(3));
											$count 	 =  urldecode($this->uri->segment(4));
											$ctry 	 =  $this->uri->segment(5);
											$indstry =  urldecode($this->uri->segment(6));
											$indstry =  str_replace("-"," ",$indstry);
											$cmpny   =  urldecode($this->uri->segment(7));
											$cmpny   =  str_replace("-"," ",$cmpny);
											$ctry    =  str_replace("-"," ",$ctry);

										}else if(!empty($industry_name))
										{
											$indstry =  urldecode($this->uri->segment(3));
											$indstry = str_replace("-"," ",$indstry);
											$reg 	 = $this->uri->segment(4);
											$count 	 = urldecode($this->uri->segment(5));
											$ctry    =  urldecode($this->uri->segment(6));

											$cmpny   =  urldecode($this->uri->segment(7));
											$cmpny   = str_replace("-"," ",$cmpny);
											$ctry    = str_replace("-"," ",$ctry);
											//$indstry = $this->uri->segment(6);
											//$cmpny   = $this->uri->segment(7);
										}else if(!empty($company_name))
										{
											$cmpny     =  urldecode($this->uri->segment(3));
											$count 	   =  urldecode($this->uri->segment(4));
											$reg 	   =  urldecode($this->uri->segment(5));
											$ctry      =  urldecode($this->uri->segment(6));
											$indstry   =  urldecode($this->uri->segment(7));
											$indstry   = str_replace("-"," ",$indstry);
											$cmpny 	   = str_replace("-"," ",$cmpny);
											$ctry      = str_replace("-"," ",$ctry);
											
										}else
										{
											$cmpny   	=  urldecode($this->uri->segment(3));
											$count 	 	=  urldecode($this->uri->segment(4));
											$reg 	 	=  urldecode($this->uri->segment(5));
											$ctry    	=  urldecode($this->uri->segment(6));
											$indstry 	=  urldecode($this->uri->segment(7));
											$indstry 	= str_replace("-"," ",$indstry);
											$cmpny   	= str_replace("-"," ",$cmpny);
											$ctry    	= str_replace("-"," ",$ctry);
										}
										
										///echo $u;die();
										?>
									

										<?php if(!empty($region_name))
										
									{
									    $region_name = str_replace("-"," ",$region_name);
									?>
											
											 <select name="regionid" id="regionid" class="form-control" onchange="setfunction(this.value)">
											<option value="" >Reports by Regions</option>
											<?php	foreach ($region as  $value) {
											    		$value['region_name1'] = str_replace("","-",$value['region_name']);
											    		$value['region_name1'] = str_replace("AND","&",$value['region_name1']);
                                                         $region_code  =       $value['region_code'];     
												?>
												
												<option value="<?php echo $value['region_code'];?>" <?php echo set_select('regionid',$value['region_code'], ( !empty($value['region_code']) && $value['region_code'] == $region_code? TRUE : FALSE )); ?>><?php echo $value['region_name']?></option>	
											<?php 
												}?>
										
											</select>
								<?php }else if(!empty($industry_name))
									{?>
										<select name="regionid" id="regionid" class="form-control" onchange="setfunctionbyindustry(this.value)">
											<option value="" >Reports by Regions</option>
											<?php	foreach ($region as  $value) {
											    $value['region_name1'] = str_replace("","-",$value['region_name']);
											    		$value['region_name1'] = str_replace("AND","&",$value['region_name1']);
											    		$region_code  =       $value['region_code']; 
												?>
												
												<option value="<?php echo $value['region_code'];?>" <?php echo set_select('regionid',$value['region_code'], ( !empty($value['region_code']) && $value['region_code'] == $region_code? TRUE : FALSE )); ?>><?php echo $value['region_name']?></option>	
											<?php 
												}?>
										
											</select>

								<?php }else if(!empty($company_name))
									{?>
										<select name="regionid" id="regionid" class="form-control" onchange="javascript:setfunctioncompany(this.value)">
											<option value="" >Reports by Regions</option>
											<?php
											foreach ($region as  $value) {
											     $value['region_name1'] = str_replace("","-",$value['region_name']);
											     $value['region_name1'] = str_replace("AND","&",$value['region_name1']);
											     $region_code  =       $value['region_code']; 

												?>
												
												<option value="<?php echo $value['region_code'];?>" <?php echo set_select('regionid',$value['region_name'], ( !empty($value['region_code']) && $value['region_code'] == $region_code? TRUE : FALSE )); ?>><?php echo $value['region_name']?></option>	
											<?php 
												}?>
										
											</select>
									<?php 
										}else{?>

											<select name="regionid" id="regionid" class="form-control" onchange="setfunctioncategory(this.value)">
											<option value="" >Reports by Regions</option>
											<?php
											foreach ($region as  $value) {
											     $value['region_name1'] = str_replace(" ","-",$value['region_name']);
											    		$value['region_name1'] = str_replace("&","AND",$value['region_name1']);
											    		$region_code           =       $value['region_code']; 
												?>
												
												<option value="<?php echo $value['region_code'];?>" <?php echo set_select('regionid',$value['region_code'], ( !empty($value['region_code']) && $value['region_code'] == $region_code? TRUE : FALSE )); ?>><?php echo $value['region_name']?></option>	
											<?php 
												}?>
										
											</select>
										<?php }?>	
									</div>
								</div>
								<div class="toolbox-left">
									<div class="toolbox-item toolbox-sort select-menu">

											<?php if(!empty($region_name))

									{
										?>
										<select name="orderby" id="searchbyctry" class="form-control" >
											<option value="" selected="selected">Reports by Country &nbsp;&nbsp;</option> 
												<?php /*if(!empty($country))
											{
												foreach ($country as  $value) {

												?>
												   <option value="<?php echo $value['country_name'];?>" <?php echo set_select('orderby',$value['country_name'], ( !empty($value['country_name']) && $value['country_name'] == $ctry? TRUE : FALSE )); ?>><?php echo $value['country_name']?></option>	

											<?php 
												# code...
												}
											} */?>
										</select>

									<?php }else if(!empty($industry_name))
									{?>
										<select name="orderby" id="searchbyctry" class="form-control" onchange="setfunctionbyindustry(this.value)">
											<option value="" selected="selected">Reports by Country &nbsp;&nbsp;</option> 
												<?php /*if if(!empty($country))
											{
												foreach ($country as  $value) {

												?>
												   <option value="<?php echo $value['country_name'];?>" <?php echo set_select('orderby',$value['country_name'], ( !empty($value['country_name']) && $value['country_name'] == $ctry? TRUE : FALSE )); ?>><?php echo $value['country_name']?></option>	

											<?php 
												# code...
												}
											} */?>
										</select>
									<?php }else if(!empty($company_name))
									{?>
										<select name="orderby" id="searchbyctry" class="form-control" >
											<option value="" selected="selected">Reports by Country &nbsp;&nbsp;</option> 
												<?php /*if(!empty($country))
											{
												foreach ($country as  $value) {

												?>
												   <option value="<?php echo $value['country_name'];?>" <?php echo set_select('orderby',$value['country_name'], ( !empty($value['country_name']) && $value['country_name'] == $ctry? TRUE : FALSE )); ?>><?php echo $value['country_name']?></option>	

											<?php 
												# code...
												}
											} */?>
										</select>
									<?php 
										}else {?>	
											<select name="orderby" id="searchbyctry" class="form-control" >
											<option value="" selected="selected">Reports by Country &nbsp;&nbsp;</option> 
												<?php /* if(!empty($country))
											{
												foreach ($country as  $value) {

												?>
												   <option value="<?php echo $value['country_name'];?>" <?php echo set_select('orderby',$value['country_name'], ( !empty($value['country_name']) && $value['country_name'] == $ctry? TRUE : FALSE )); ?>><?php echo $value['country_name']?></option>	

											<?php 
												# code...
												}
											} */?>
										</select>
										<?php }?>
									</div>
								</div>
								<div class="toolbox-left">
									<div class="toolbox-item toolbox-sort select-menu">
										<?php if(!empty($region_name))

									{
										?>

										<select name="indstry" id="indstry" class="form-control" onchange="javascript:set_category_report(this.value)">
											<option value=""> Reports by Industry </option>
												<?php if(!empty($industry_category))
											{
												foreach ($industry_category as  $value) {
												     $value['category_name1'] = str_replace(" ",'-',$value['category_name']);
												   $value['category_name1'] = str_replace("&",'And',$value['category_name1']);
												?>
												
												 <option value="<?php echo $value['category_name1'];?>"> <?php echo $value['category_name']?></option>
											
											<?php 
												# code...
												}
											}?>
										</select>
										<?php }else if(!empty($industry_name))
										{?>	
											<select name="indstry" id="indstry" class="form-control" onchange="set_category_report(this.value)">
											<option value=""> Reports by Industry </option>
												<?php if(!empty($industry_category))
											{
												foreach ($industry_category as  $value) {
												      $value['category_name1'] = str_replace(" ",'-',$value['category_name']);
												   $value['category_name1'] = str_replace("&",'And',$value['category_name1']);
												?>
												
												 <option value="<?php echo $value['category_name1'];?>" <?php echo set_select('indstry',$value['category_name'], ( !empty($value['category_name']) && $value['category_name'] == $indstry? TRUE : FALSE )); ?>><?php echo $value['category_name']?></option>
											
											<?php 
												# code...
												}
											}?>
										</select>

									<?php }else if(!empty($industry_category))
									{?>
										<select name="indstry" id="indstry" class="form-control" onchange="javascript:set_category_report(this.value)">
											<option value="">Reports by Industry </option>
												<?php if(!empty($industry_category))
											{
												foreach ($industry_category as  $value) {
												   $value['category_name1'] = str_replace(" ",'-',$value['category_name']);
												   $value['category_name1'] = str_replace("&",'And',$value['category_name1']);
												   
												?>
												
												 <option value="<?php echo $value['category_name1'];?>" <?php echo set_select('indstry',$value['category_name'], ( !empty($value['category_name']) && $value['category_name'] == $indstry? TRUE : FALSE )); ?>><?php echo $value['category_name']?></option>
											
											<?php 
												# code...
												}
											}?>
										</select>
									<?php 
										} else{?>	
											<select name="indstry" id="indstry" class="form-control" onchange="javascript:set_category_report(this.value)">
											<option value=""> Reports by Industry </option>
												<?php if(!empty($industry_category))
											{
												foreach ($industry_category as  $value) {
												     $value['category_name1'] = str_replace(" ",'-',$value['category_name']);
												   $value['category_name1'] = str_replace("&",'And',$value['category_name1']);
												?>
												
												 <option value="<?php echo $value['category_name1'];?>" <?php echo set_select('indstry',$value['category_name'], ( !empty($value['category_name']) && $value['category_name'] == $indstry? TRUE : FALSE )); ?>><?php echo $value['category_name']?></option>
											
											<?php 
												# code...
												}
											}?>
										</select>
										<?php }?>	
									</div>
								</div>
								
								<!-- End of Collapsible Widget -->
							</div>
						</aside>
					
						
						
					</nav>
					<!-- End of Toolbox -->
				
					<!-- Start of Selected Items -->
					<div class="selected-items mb-3"> <a href="#" class="filter-clean text-primary">Clean All</a>
					</div>
					<!-- End of Selected Items -->
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 ">
							<div class="left-box">
								<p><b>Industry Category</b>
								</p>
								<div class="accordion accordion-bg accordion-primary accordion-gutter-md accordion-plus">
								    <ul class="nav nav-tabs" role="tablist" >
                            <?php if(!empty($industry_category))
                            {
                                
                                foreach ($industry_category as  $value) {
                                   
                                       $value['category_name1'] = str_replace(" ","-",$value['category_name']);
                                                            $value['category_name1'] = str_replace('&',"And",$value['category_name1']); 
                                //$value['category_name'] = str_replace(' ',"-",$value['category_name']); 
                                //$value['category_name'] = str_replace('&',"And",$value['category_name']); 
                           ?>
                           <?php if(!empty($region_name))
                           {?>
                            <li class="nav-item" >  <a class="test1 category_cls" href="<?php echo base_url();?>report/report_list_category/<?php echo $value['category_name1'];?>" style="" onclick="setreportbycategory('<?php echo $value["id"];?>','<?php echo $region_name;?>','0')" ><span class="">
                                    <?php if($value['icon_status']=='show'){ ?>
                                       <img src="<?php echo base_url();?>public/uploads/<?php echo $value['icon'];?>" width="29" height="29">
                                  <?php }?>
                                    </span>&nbsp;&nbsp;<?php echo $value['category_name'];?></a>
                             </li>
                               
                           <?php }else if(!empty($industry_name)) {?>
                             <li class="nav-item" >  <a class="test1 category_cls" href="<?php echo base_url();?>report/report_list_category/<?php echo $value['category_name1'];?>"  style=""  onclick="setreportbycategory('<?php echo $value["id"];?>','0','<?php echo $industry_name;?>')" ><span class="">
                                      <?php if($value['icon_status'] =='show'){ ?> 
                                       <img src="<?php echo base_url();?>public/uploads/<?php echo $value['icon'];?>" width="29" height="29">
                                       <?php }?>
                                    </span>&nbsp;&nbsp;<?php echo $value['category_name'];?></a>
                             </li>
                             <!--<hr class="hr2">-->
                                
                           <?php }else if(!empty($category)) {?>
                             <li class="nav-item" >  <a class="test1 category_cls" href="<?php echo base_url();?>report/report_list_category/<?php echo $value['category_name1'];?>" style="" onclick="setreportbycategory('<?php echo $value["id"];?>','0','0')" ><span class="">
                                 <?php if($value['icon_status']=='show'){ ?>
                                       <img src="<?php echo base_url();?>public/uploads/<?php echo $value['icon'];?>" width="29" height="29">
                                       <?php }?>
                                    </span>&nbsp;&nbsp;<?php echo $value['category_name'];?></a>
                             </li>   
                             
                        <?php } else { ?>
                          <li class="nav-item" >  <a class="test1 category_cls" href="<?php echo base_url();?>report/report_list_category/<?php echo $value['category_name1'];?>" style="" onclick="setreportbycategory('<?php echo $value["id"];?>','0','0')" ><span class="">
                              <?php if($value['icon_status'] =='show'){ ?>
                                       <img src="<?php echo base_url();?>public/uploads/<?php echo $value['icon'];?>" width="29" height="29">
                                       <?php } ?>
                                    </span>&nbsp;&nbsp;<?php echo $value['category_name'];?></a>
                             </li>
                        
                        
                        <?php }}}?>
                         
                        </ul>
								    
								
								</div>
								
								
								
							</div>
						</div>
						<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12" style="margin-top:-20px;">
							
							<!--  <?php if(!empty($category)){?>-->
							<!--<div class="rd_sa_block">-->
							<!--	<div class="row">-->
							<!--		<div class="col-12 col-lg-12">-->
							<!--			<div class="rd_sa_body" style="height:7rem;margin-top: -17px;margin-bottom: 5px">-->
							<!--				<form method="POST" action="">-->
							<!--					<h2 class="covid19_head" style="text-align:center;">-->
							<!--					    <?php if(!empty($category)){?>-->
							<!--						Gain Critical Insights in the <?php echo $category;?> Industry <br />Through Our Robust Research Methodologies</h2>-->
							<!--						<?php }?>-->
							<!--					<a href="<?php echo base_url();?>contact" class="btn btn-warning covid_btn_rd">Speak to an Expert</a>-->
							<!--					<input type="hidden" name="category" value="healthcare">-->
							<!--				</form>-->
							<!--			</div>-->
							<!--		</div>-->
							<!--	</div>-->
							<!--</div>-->
							<!--<?php }?>-->
							<div class="col-lg-12 healthcare no-border">
								<ul class="list-group class" id="myUL" style="margin-top: 20px; margin-bottom: 15px">
									<li class="list-group-item " style="margin-top:-15px;border:none;">
										<?php if(!empty($region_reports))
										{
											foreach ($region_reports as  $value) {
											 $string = strip_tags($value['short_description']);
                                            $short  = substr($string,0,180);
                                            $value['slug'] = str_replace(" ","-",$value['slug']);
                                            $value['slug'] = str_replace(":","-",$value['slug']);
                                            $value['slug'] = str_replace(",","-",$value['slug']);
                                            $value['slug'] = str_replace("(","-",$value['slug']);
                                             $value['slug'] = str_replace(")","-",$value['slug']);
											?>
										
										<div class="row">
											<div class="col-md-10">
												<h4 style="font-size:1.7rem;" class="trending_category"><a class="timepass" style="color:#2279bc;" href="<?php echo base_url();?>report/<?php echo $value['slug'];?>/<?php echo $value['id'];?>"><?php echo $value['meta_title'];?></h4>
											
												<p class="p2" style="font-size:1.5rem;margin:0 0 1;"><?php echo $short.'...';?></p>
                                              <!--  <p> <a href="<?php echo base_url();?>report/report_details/<?php echo $value['id'];?>" class="readmoreblockp">Read More <i class="link"> </i></a>
												</p>-->
												<?php $month = date('M',strtotime($value['published_date']));
                                                    $year  = date('Y',strtotime($value['published_date']));
												?>
												<p style="background-color: #f5f5f5;padding: 5px;font-size:1.5rem;"><small><?php echo date('M-d-Y',strtotime($value['published_date']));?></small>
													<small>| Base Year: <?php echo $value['base_year'];?></small>
													<small>| No Of Pages: <?php echo $value['no_of_pages'];?></small>	<small>| <a href="<?php echo base_url();?>report/<?php echo $value['slug'];?>/<?php echo $value['id'];?>" class="readmoreblockp">Read More <i class="link"> </i></a></small>
												</p>
											</div>
											<div class="col-md-2">
												<div class="text-center btn_buy">
													<a style="background-color: #accb32;color:#fff;" class="btn btn-primary" href="<?php echo base_url();?>report/buy_now_report/<?php echo $value['slug'];?>/<?php echo $value['id'];?>"><i class="fa fa-shopping-cart"></i>&nbsp;<?php echo "$" .$value['single_user_price'];?></a>
												</div>
											</div>
										</div>
										<?php 		# code...
											}
										}?>
									</li>
								
								</ul>
								<div class="text-center">
									<div class="pagination" id="load_data_message"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- End of Product Wrapper -->
					<!-- Start of Pagination -->
					<div class="toolbox toolbox-pagination justify-content-between">
						<p class="showing-info mb-2 mb-sm-0">Showing<span>1-12 of 60</span>Products</p>
					<!--	<ul class="pagination" id="pagination">-->
							
						<!--	 <li class="prev disabled">
								<a href="#" aria-label="Previous" tabindex="-1" aria-disabled="true"> <i class="w-icon-long-arrow-left"></i>Prev</a>
								
							</li>--> 
							<?php echo $links;?>
							<!--	<li class="page-item"> <a class="page-link" href=""><?php echo $links;?></a>
							</li>-->
							<?php 
							//print_r($config);
							if(!empty($region_name))
							{
								
							/*	$reg 	 =  urldecode($this->uri->segment(3));
								$count 	 =  urldecode($this->uri->segment(4));
								$ctry 	 =  urldecode($this->uri->segment(5));
								$indstry =  urldecode($this->uri->segment(6));
								$cmpny   =  urldecode($this->uri->segment(7));
								
								$firsturl  = base_url().'report/report_list_view/'.$reg.'/20/'.$ctry.'/'.$indstry.'/'.$cmpny;

								$scurl  = base_url().'report/report_list_view/'.$reg.'/40/'.$ctry.'/'.$indstry.'/'.$cmpny;

								$thirdurl = base_url().'report/report_list_view/'.$reg.'/60/'.$ctry.'/'.$indstry.'/'.$cmpny;

								$next = base_url().'report/report_list_view/'.$reg.'/80/'.$ctry.'/'.$indstry.'/'.$cmpny;*/

								//$config['full_tag_open'] = '<div id="pagination">';
								//$config['full_tag_close'] = '</div>';


							/*}else if(!empty($industry_name)){

								$indstry =  urldecode($this->uri->segment(3));
								$reg 	 =  urldecode($this->uri->segment(4));
								$count 	 =  urldecode($this->uri->segment(5));
								$ctry    =  urldecode($this->uri->segment(6));
								$cmpny   =  urldecode($this->uri->segment(7));

								$firsturl  = base_url().'report/report_list_industry/'.$indstry.'/'.$reg.'/'.'20'.'/'.$ctry.'/'.$cmpny;

								$scurl  = base_url().'report/report_list_industry/'.$indstry.'/'.$reg.'/'.'40'.'/'.$ctry.'/'.$cmpny;
								$thirdurl  = base_url().'report/report_list_industry/'.$indstry.'/'.$reg.'/'.'60'.'/'.$ctry.'/'.$cmpny;
								$next  = base_url().'report/report_list_industry/'.$indstry.'/'.$reg.'/'.'80'.'/'.$ctry.'/'.$cmpny;*/}
							/*else if(!empty($company_name)){

								$indstry =  urldecode($this->uri->segment(3));
								$reg 	 =  urldecode($this->uri->segment(4));
								$count 	 =  urldecode($this->uri->segment(5));
								$ctry    =  urldecode($this->uri->segment(6));
								$cmpny   =  urldecode($this->uri->segment(7));

								$firsturl  = base_url().'report/report_list_company/'.$cmpny.'/'.'20'.'/'.$reg.'/'.$ctry.'/'.$indstry;

								$scurl  = base_url().'report/report_list_company/'.$cmpny.'/'.'40'.'/'.$reg.'/'.$ctry.'/'.$indstry;

								$thirdurl = base_url().'report/report_list_company/'.$cmpny.'/'.'60'.'/'.$reg.'/'.$ctry.'/'.$indstry;

								$next  = base_url().'report/report_list_company/'.$cmpny.'/'.'80'.'/'.$reg.'/'.$ctry.'/'.$indstry;
							}else
							{
								$reporttitle =  urldecode($this->uri->segment(3));
								//$reg 	 =  urldecode($this->uri->segment(4));
								//$count 	 =  urldecode($this->uri->segment(5));
								//$ctry    =  urldecode($this->uri->segment(6));
								//$cmpny   =  urldecode($this->uri->segment(7));

								$firsturl  = base_url().'report/report_list_category/'.$reporttitle.'/0/20/0/0';

								$scurl  = base_url().'report/report_list_category/'.$reporttitle.'/0/40/0/0';

								$thirdurl  = base_url().'report/report_list_category/'.$reporttitle.'/0/60/0/0';

								$next  = base_url().'report/report_list_category/'.$reporttitle.'/0/80/0/0';
							 } */?>

							<!-- <li class="page-item active"> <a class="page-link" href="<?php echo $firsturl;?>">1</a>
							</li>
							<li class="page-item"> <a class="page-link" href="<?php echo $scurl;?>">2</a>
							</li>
							<li class="page-item"> <a class="page-link" href="<?php echo $thirdurl;?>">3</a>
							</li>
							<li class="next"> <a href="<?php echo $next;?>" aria-label="Next">
                                        Next<i class="w-icon-long-arrow-right"></i>
                                    </a>
							</li> -->
					<!--	</ul>-->
					</div>
					<!-- End of Pagination -->
				</div>
			</div>
			<!-- End of Page Content -->
		</main>
		<!-- End of Main -->
	<script>
	
	
	
		 

   function setfunctioncompany(value)
    {
        //alert(value);
        
       var regionid 	= $('#regionid').val();
      
       var country  	= $('#searchbyctry').val();
     
        
         if(regionid && !country)
        {
          
          var html = "";
        $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url();?>admin/country/getcountrybyregion',
                        data: {region_id:regionid},
                        dataType:'JSON',
                        success: function(result){
                            if(result.status)
                            {
                                 $('#searchbyctry').html();
                                 //html+= '<option>Please Select &nbsp;&nbsp;&nbsp;&nbsp;</option>';
                                $.each(result.data,function(index, value2)
                                { 
                                    //$(".pageloader").css("display", "none");
                                    
                                    html+= '<option value="'+value2['country_code']+'">'+value2['country_name']+'</option>';

                                });

                              
                                $('#searchbyctry').html(html);


                                //$("#region_id").html(html);
                            }else
                            {
                                 $(".pageloader").css("display", "none");

                            }
                      

                        },
                            error: function (textStatus, errorThrown) 
                            {
                               // $(".pageloader").css("display", "none");
                                alert("Something Went Wrong!!");
                            }
                                
                        });


        }else
        {

            $('#country_id').empty();
               
        }
        
        
        
          
       if(regionid  && country)
        {
          
            var anch = '<?php echo base_url();?>report/report_list/'+regionid+'/'+country;
            window.location.href=anch;
        }

    }


     function showindustry(val)
{
	//alert('hi');
   //var val = $('#cate_id').val();
   var li ="";
     $('.widget-body1').html('');
        $.ajax({
            'type': 'POST',
            'data': {cate_id:val},
            'url': '<?php echo base_url();?>report/getindustrybycategory',
            'dataType': 'json',
            'success': function (result) {
                $.each(result.data,function(index, value2)
                                { 


                                    //   li += '<li style="list-style-type:none;"><a href="<?php echo base_url();?>report/report_list_industry/'+value2['industry_name']+'/0/20/0/0"<i class="w-icon-long-arrow-right"></i>&nbsp;'+value2['industry_name']+'</a></li>';


                                    

                                });
                                $('.widget-body1').empty().html(li);  


            },  
          
      });
}

        function setfunction(value)
    {
        //alert(value);
         var regionid = $('#regionid').val();
         regionid      = regionid.replace(' ','-');
	
        var country  = $('#searchbyctry').val();
        country      = country.replace(' ','-');

      

         if(regionid && !country)
        {
           //alert(regionid);
          var html = "";
        $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url();?>admin/report/getcountrybyregion',
                        data: {region_id:regionid},
                        dataType:'JSON',
                        success: function(result){
                            if(result.status)
                            {
                                 $('#searchbyctry').html();
                               
                                $.each(result.data,function(index, value2)
                                { 
                                    //$(".pageloader").css("display", "none");
                                    
                                    html+= '<option value="'+value2['country_code']+'">'+value2['country_name']+'</option>';

                                });

                              
                                $('#searchbyctry').html(html);


                                //$("#region_id").html(html);
                            }else
                            {
                                 $(".pageloader").css("display", "none");

                            }
                      

                        },
                            error: function (textStatus, errorThrown) 
                            {
                               // $(".pageloader").css("display", "none");
                                alert("Something Went Wrong!!");
                            }
                                
                        });


        }else
        {

            $('#country_id').empty();
               
        }
       
        
    

        if(regionid  && country)
        {
           
            var anch = '<?php echo base_url();?>report/report_list/'+regionid+'/'+country;
            window.location.href=anch;
        }

       

    }


	    function setfunctioncategory(value)
	    {
	        
	    	var regionid   = $('#regionid').val();
	    	regionid       = regionid.replace(' ','-');
        	var country    = $('#searchbyctry').val();
        	country        = country.replace(' ','-');
        	
        	var industry   = $('#indstry').val();
        	//var cmpny    = $('#cmpny').val();
        	var count      = $('#count').val();
        	var cmpny      ="0";
        	
        	if(regionid)
        {
        
          
          var html = "";
        $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url();?>admin/country/getcountrybyregion',
                        data: {region_id:regionid},
                        dataType:'JSON',
                        success: function(result){
                            if(result.status)
                            {
                                 $('#searchbyctry').html();
                                // html+= '<option>Please Select &nbsp;&nbsp;&nbsp;</option>';
                                $.each(result.data,function(index, value2)
                                { 
                                    //$(".pageloader").css("display", "none");
                                    
                                    html+= '<option value="'+value2['country_code']+'">'+value2['country_name']+'</option>';

                                });

                              
                                $('#searchbyctry').html(html);


                                //$("#region_id").html(html);
                            }else
                            {
                                 $(".pageloader").css("display", "none");

                            }
                      

                        },
                            error: function (textStatus, errorThrown) 
                            {
                               // $(".pageloader").css("display", "none");
                                alert("Something Went Wrong!!");
                            }
                                
                        });


        }else
        {

            $('#searchbyctry').empty();
               
        }
        
      
        (regionid  && country)
        {
           
            var anch = '<?php echo base_url();?>report/report_list/'+regionid+'/'+country;
            window.location.href=anch;
        }
       

	    }


	</script>
	<script>
	    function setreportbycategory(category,region,industry)
    {
        
        
        $.ajax({
            'type': 'POST',
            'data': {category:category,value:region,industry:industry},
            'url': '<?php echo base_url();?>home/setreportbycategory',
            //'dataType': 'json',
            'success': function (html) {

                $('#myUL').html(html);

            },  
          
      });
    }
    
    function set_category_report(category)
    {
         var regionid 	= $('#regionid').val();
      
       var country  	= $('#searchbyctry').val();
        var category        = category.replace(' ','-');
        var category        = category.replace('&','And');
      if(regionid && country && category)
         {
             var anch = '<?php echo base_url();?>report/report_list_view_filter/'+regionid +'/'+'20/'+country+'/'+category+'/'+0;
             window.location.href=anch;
            //report_list_view($region,$count,$country,$industry,$company)
         }else if(regionid && country && !category)
         {
            
             var anch = '<?php echo base_url();?>report/report_list/'+regionid +'/'+country;
             window.location.href=anch;
        }else if(regionid && !country && category)
         {
            
             var anch = '<?php echo base_url();?>report/report_list_view_filter/'+regionid +'/'+'20/'+'0'+'/'+category+'/'+0;
             window.location.href=anch;
        }else if(!regionid && !country && category)
        {
              var anch = '<?php echo base_url();?>report/report_list_category/'+category;
             window.location.href=anch;
         }
      // var anch = '<?php echo base_url();?>report/report_list_category/'+category;
       //    window.location.href=anch;
    }
	</script>