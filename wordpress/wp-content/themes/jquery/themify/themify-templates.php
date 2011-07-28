<?php

/***************************************************************************/
/*
/* 	----------------------------------------------------------------------
/* 						DO NOT EDIT THIS FILE
/*	----------------------------------------------------------------------
/* 
/*		Themify Framework v.1.1.0
/*		http://themify.me
/*		
/*		Copyright 2011, Darcy Clarke
/*		Dual licensed under the MIT or GPL Version 2 licenses.
/*		http://themify.me/license.txt
/*
/***************************************************************************/

/* 	Templates
/***************************************************************************/
	
	///////////////////////////////////////////
	// Image Custom Field Template
	///////////////////////////////////////////
	function themify_template_image($meta_box){
		global $themify_globals;
		?>
		<input type="hidden" name="<?php echo $meta_box['name']; ?>_noncename" id="<?php echo $meta_box['name']; ?>'_noncename" value="<?php echo wp_create_nonce( plugin_basename(__FILE__) ); ?>" />
		<div class="themify_field_row clearfix">
		                      
		    <div class="themify_field_title"><?php echo $meta_box['title']; ?></div>
		    
		    <div class="themify_field">
		        <input type="text" name="<?php echo $meta_box['name']; ?>" value="<?php echo $meta_box['value']; ?>" size="55" class="themify_input_field themify_upload_field" />
		        <span class="themify_upload_buttons">
		             <a href="#" class="button button-highlighted">Upload</a>
		             <a href="#" id="themify_upload_image_<?php echo $meta_box['name']; ?>" class="button button-highlighted">swf</a>
		        </span><br />
		        
		        <span class="themify_field_description"><?php echo $meta_box['description']; ?></span>
		    </div>
		    
		<?php if($meta_box['value'] != ""): ?>
		    <div class="themify_upload_preview" style="display:block;"><img src="<?php echo get_bloginfo('template_directory'); ?>/themify/img.php?w=40&h=40&src=<?php echo $meta_box['value']; ?>" /></div>
		<?php else: ?>
		    <div class="themify_upload_preview"></div>
		<?php endif; ?>
		
		</div>
    	<?php 
	}
	
	///////////////////////////////////////////
	// Dropdown Custom Field Template
	///////////////////////////////////////////
	function themify_template_dropdown($meta_box){
		global $themify_globals;
		?>
		<input type="hidden" name="<?php echo $meta_box['name']; ?>_noncename" id="<?php echo $meta_box['name']; ?>'_noncename" value="<?php echo wp_create_nonce( plugin_basename(__FILE__) ); ?>" />
		<div class="themify_field_row clearfix">
		
		     <div class="themify_field_title"><?php echo $meta_box['title']; ?></div>
		     
		     <div class="themify_field">
		        <select name="<?php echo $meta_box['name']; ?>">
		    <?php foreach($meta_box['meta'] as $option): ?>
		            <?php if($option['value'] == $meta_box['value']){ $selected = "selected='selected'"; } else { $selected = ""; } ?>
		             <option value="<?php echo $option['value']; ?>" <?php echo $selected; ?>><?php echo $option['name']; ?></option>
		            <?php endforeach; ?>   
		        </select>
		        <span class="themify_field_description"><?php echo $meta_box['description']; ?></span>
		    </div>
		    
		</div>
		<?php
	}
	
	///////////////////////////////////////////
	// Textbox Custom Field Template
	///////////////////////////////////////////
	function themify_template_textbox($meta_box){
		global $themify_globals;
		?>
		<input type="hidden" name="<?php echo $meta_box['name']; ?>_noncename" id="<?php echo $meta_box['name']; ?>'_noncename" value="<?php echo wp_create_nonce( plugin_basename(__FILE__) ); ?>" />
		<div class="themify_field_row clearfix">
		
		    <div class="themify_field_title"><?php echo $meta_box['title']; ?></div>
		
		    <div class="themify_field">
		        <?php 
		        if($meta_box['meta']['size'] != '' && $meta_box['meta']['size'] == 'small'){
		            $class = "small";	
		        } else {
		            $class = "";
		        }
		        ?>
		        <input type="text" name="<?php echo $meta_box['name']; ?>" value="<?php echo $meta_box['value']; ?>" size="55" class="themify_input_field <?php echo $class; ?>" />
		        <span class="themify_field_description"><?php echo $meta_box['description']; ?></span>
		    </div>
		
		</div>
		<?php
	}
	
	///////////////////////////////////////////
	// Checkbox Custom Field Template
	///////////////////////////////////////////
	function themify_template_checkbox($meta_box){
		global $themify_globals;
		?>
			<input type="hidden" name="<?php echo $meta_box['name']; ?>_noncename" id="<?php echo $meta_box['name']; ?>'_noncename" value="<?php echo wp_create_nonce( plugin_basename(__FILE__) ); ?>" />
			<div class="themify_field_row clearfix">
			
			    <div class="themify_field_title"><?php echo $meta_box['title']; ?></div>
			    <?php if($meta_box['value']){ $checked = "checked='checked'"; } else { $checked = ""; } ?>
			
			    <div class="themify_field">
			        <input type="checkbox" name="<?php echo $meta_box['name']; ?>" <?php echo $checked; ?> class="" />
			        <span class="themify_checkbox_description"><?php echo $meta_box['description']; ?></span>
			    </div>
			
			</div>
		<?php
	}
	
	///////////////////////////////////////////
	// Layout Custom Field Template
	///////////////////////////////////////////
	function themify_template_layout($meta_box){
		global $themify_globals;
		?>
		<input type="hidden" name="<?php echo $meta_box['name']; ?>_noncename" id="<?php echo $meta_box['name']; ?>'_noncename" value="<?php echo wp_create_nonce( plugin_basename(__FILE__) ); ?>" />
        <div class="themify_field_row clearfix">    
		    <div class="themify_field_title"><?php echo $meta_box['title']; ?></div>
		    <div class="themify_field">
		        <?php foreach($meta_box['meta'] as $options){ ?>
		        	<?php 
					if(($meta_box['value'] == "" || !$meta_box['value'] || !isset($meta_box['value'])) && $options['selected']){ 
		            	$meta_box['value'] = $options['value'];
					}
					if($meta_box['value'] == $options['value']){ 
						$class = "selected";
					} else {
						$class = "";	
					}
					?>
		            <a href="#" class="preview-icon <?php echo $class; ?>"><img src="<?php echo get_bloginfo('template_directory')."/".$options['img']; ?>" alt="<?php echo $options['value']; ?>"  /></a>
		        <?php } ?>
		        <input type="hidden" name="<?php echo $meta_box['name']; ?>" value="<?php echo $meta_box['value']; ?>" class="val" />
		        <span class="themify_field_description"><?php echo $meta_box['description']; ?></span>
		    </div>
		</div>
		<?php
	}
	
	///////////////////////////////////////////
	// Query Category Custom Field Template
	///////////////////////////////////////////
	function themify_template_query_category($meta_box){
		global $themify_globals;
		?>
		<input type="hidden" name="<?php echo $meta_box['name']; ?>_noncename" id="<?php echo $meta_box['name']; ?>'_noncename" value="<?php echo wp_create_nonce( plugin_basename(__FILE__) ); ?>" />
	    <div class="themify_field_row clearfix">    
		    <div class="themify_field_title"><?php echo $meta_box['title']; ?></div>
		    <div class="themify_field">
		        <?php echo preg_replace('/>/', '><option></option>', wp_dropdown_categories(array("class"=>"query_category_single","show_option_all"=>"All Categories","hide_empty"=>0, "echo"=>0,"name"=>$meta_box['name'],"selected"=>$meta_box['value'])), 1);
		        ?> or 
		        <input type="text" class="query_category" value="<?php echo $meta_box['value']; ?>" />
		        <input type="hidden" value="<?php echo $meta_box['value']; ?>" name="<?php echo $meta_box['name']; ?>" class="val" />
		        <span class="themify_field_description"><?php echo $meta_box['description']; ?></span>
		    </div>
		</div>
		<?php
	}
	
	///////////////////////////////////////////
	// Sidebar Visibility Custom Field Template
	///////////////////////////////////////////
	function themify_template_sidebar_visibility($meta_box){
		global $themify_globals;
		?>
		<input type="hidden" name="<?php echo $meta_box['name']; ?>_noncename" id="<?php echo $meta_box['name']; ?>'_noncename" value="<?php echo wp_create_nonce( plugin_basename(__FILE__) ); ?>" />
		<div class="themify_field_row clearfix">    
		    <div class="themify_field_title"><?php echo $meta_box['title']; ?></div>
		    <div class="themify_field">
		    <?php 
		    $sidebars = get_option('sidebars_widgets');
			global $wp_registered_sidebars;
		    foreach($sidebars as $sidebar => $val){
		        if($sidebar != 'wp_inactive_widgets' && $sidebar != 'array_version' && strpos(strtolower($wp_registered_sidebars[$sidebar]['name']),'sidebar') !== false){ 
				$checked = "";
				if(themify_check($meta_box['name'])){
					$checked = "checked='checked'";
				} else {
					foreach($meta_box['value'] as $key => $val){
						if(str_replace("'","",$key) == $wp_registered_sidebars[$sidebar]['name']){
							$checked = "checked='checked'";
						}
					}
				}
				?>
		        <input type="checkbox" name="<?php echo $meta_box['name']; ?>[<?php echo $wp_registered_sidebars[$sidebar]['name']; ?>]" class="" <?php echo $checked; ?> /> <?php echo $wp_registered_sidebars[$sidebar]['name']; ?><br />
		    <?php		
		        }
		    }
		    ?>
		    <span class="themify_field_description"><?php echo $meta_box['description']; ?></span>
		    </div>	
		</div>
		<?php
	}
	
	///////////////////////////////////////////
	// Framework Page Template
	///////////////////////////////////////////
	function themify_template_framework_page($data=array()){
		
		global $themify_globals;
		?>
      	
      	<script type="text/javascript">
      	//<![CDATA[
      	
        	var themify 			= jQuery.noConflict();
        	themify.app_url 		= "<?php echo $themify_globals['framework_url']; ?>", 
        	themify.theme_url 		= "<?php echo $themify_globals['template_url']; ?>", 
        	themify.blog_url 		= "<?php echo $themify_globals['wpurl']; ?>", 
        	themify.complete_status = true, 
        	themify.current_obj 	= "";
        	
        //]]>
        </script>
        
        <!-- alerts -->
        <div class="alert"></div> 
        <!-- /alerts -->
        
        <!-- prompts -->
        <div class="prompt-box">
            <p class="prompt-msg">Enter your Themify login info to upgrade</p>
            <p><label>Username</label> <input type="text" class="username" /></p>
            <p><label>Password</label> <input type="password" class="password"  /></p>
            <p class="pushlabel"><input name="login" type="submit" value="Login" class="button upgrade-login" /></p>
        </div>
        <div class="overlay">&nbsp;</div>
        <!-- /prompts -->
        
        <!-- notifications -->
        <div class="notifications">
        	<?php foreach($themify_globals['notifications'] as $notification): ?>
        		<?php echo $notification; ?>
        	<?php endforeach; ?>
        </div>
        <!-- /notifications -->
        
        <!-- html -->
        <form id="themify" method="post" action="" enctype="multipart/form-data">
	      
	        <p id="theme-title"><?php echo $themify_globals['theme']['Name']; ?> <em>v<?php echo $themify_globals['theme']['Version']; ?></em></p>
			<p class="top-save-btn"><a href="#" id="save-button" class="save-button">Save All</a></p>
			<div id="content">
	        
	            <!-- nav -->
	            <ul id="maintabnav">
	                <li class="setting"><a href="#setting">Options</a></li>
	                <li class="styling"><a href="#styling">Styling</a></li>
	                <li class="skins"><a href="#skins">Skins</a></li>
	                <li class="transfer"><a href="#transfer">Transfer</a></li>
	            </ul>
	            <!-- /nav -->
	            
	            <!--setting tab -->
	            <div id="setting" class="maintab">
	                
	                <ul class="subtabnav">
	                    <?php 
	                    $x = 1;
	                    if(isset($themify_globals['config']['panel']['settings']['tab']['_a']['title'])){
	                    	echo '<li class="selected"><a href="#setting-'.themify_scrub_func($themify_globals['config']['panel']['settings']['tab']['_a']['title']).'">'.$themify_globals['config']['panel']['settings']['tab']['_a']['title'].'</a></li>';	
	                    } else {
	                    	foreach($themify_globals['config']['panel']['settings']['tab'] as $tab){
		                        if($x){
		                            echo '<li class="selected"><a href="#setting-'.themify_scrub_func($tab['_a']['title']).'">'.$tab['_a']['title'].'</a></li>';	
		                            $x = 0;
		                        } else {
		                            echo '<li><a href="#setting-'.themify_scrub_func($tab['_a']['title']).'">'.$tab['_a']['title'].'</a></li>';	
		                        }
		                    }              
	                    }
	                    ?>
	                </ul>
	                
	                <?php 
					if(isset($themify_globals['config']['panel']['settings']['tab']['_a']['title'])){
					?>
						<!-- subtab: settings-<?php echo themify_scrub_func($themify_globals['config']['panel']['settings']['tab']['_a']['title']); ?> -->
							
						<div id="setting-<?php echo themify_scrub_func($themify_globals['config']['panel']['settings']['tab']['_a']['title']); ?>" class="subtab">
	                        <?php 
							if(is_array($themify_globals['config']['panel']['settings']['tab']['_c']['custom-module'])){
								if(isset($themify_globals['config']['panel']['settings']['tab']['_c']['custom-module']['_a']['title']) && isset($tab['_c']['custom-module']['_a']['function'])){
									echo themify_fieldset($themify_globals['config']['panel']['settings']['tab']['_c']['custom-module']['_a']['title'], themify_scrub_func($tab['_c']['custom-module']['_a']['function']), $themify_globals['config']['panel']['settings']['tab']['_c']['custom-module']['_a']); 
								} else {
									foreach($themify_globals['config']['panel']['settings']['tab']['_c']['custom-module'] as $module){
										echo themify_fieldset($module['_a']['title'], themify_scrub_func($module['_a']['function']),$module['_a']); 
									}
								}
							}
	                        ?>
	                    </div>
					
						<!-- /subtab: settings-<?php echo themify_scrub_func($tab['_a']['title']); ?> -->
	                 
	                 <?php } else {
	                 
			                 	foreach($themify_globals['config']['panel']['settings']['tab'] as $tab){ ?>					
			                    <!-- subtab: setting-<?php echo themify_scrub_func($tab['_a']['title']); ?> -->
			                    
			                    <div id="setting-<?php echo themify_scrub_func($tab['_a']['title']); ?>" class="subtab">
			                        <?php 
									if(is_array($tab['_c']['custom-module'])){
										if(isset($tab['_c']['custom-module']['_a']['title']) && isset($tab['_c']['custom-module']['_a']['function'])){
											echo themify_fieldset($tab['_c']['custom-module']['_a']['title'], themify_scrub_func($tab['_c']['custom-module']['_a']['function']), $tab['_c']['custom-module']['_a']); 
										} else {
											foreach($tab['_c']['custom-module'] as $module){
												echo themify_fieldset($module['_a']['title'], themify_scrub_func($module['_a']['function']),$module['_a']); 
											}
										}
									}
			                        ?>
			                    </div>
			                    
			                    <!-- /subtab: setting-<?php echo themify_scrub_func($tab['_a']['title']); ?> -->
			         
			         	 <?php	} ?> 
			          
			          <?php } ?>
	            
	            </div>
	            <!--/setting tab -->
	            
	            <!--styling tab -->
	            <div id="styling" class="maintab">
	            
	                <ul class="subtabnav">
	                    <?php 
	                    $x = 1;
						if(isset($themify_globals['config']['panel']['styling']['tab']['_a']['title'])){
							echo '<li class="selected"><a href="#styling-'.themify_scrub_func($config['panel']['styling']['tab']['_a']['title']).'">'.$themify_globals['config']['panel']['styling']['tab']['_a']['title'].'</a></li>';	
						} else {
							foreach($themify_globals['config']['panel']['styling']['tab'] as $tab){
								if($x){
									echo '<li class="selected"><a href="#styling-'.themify_scrub_func($tab['_a']['title']).'">'.$tab['_a']['title'].'</a></li>';	
									$x = 0;
								} else {
									echo '<li><a href="#styling-'.themify_scrub_func($tab['_a']['title']).'">'.$tab['_a']['title'].'</a></li>';	
								}
							}
						}
						?>
	                </ul>
	                
	                <?php 
					if(isset($themify_globals['config']['panel']['styling']['tab']['_a']['title'])){
					?>
						<!-- subtab: styling-<?php echo themify_scrub_func($themify_globals['config']['panel']['styling']['tab']['_a']['title']); ?> -->
							<div id="styling-<?php echo themify_scrub_func($themify_globals['config']['panel']['styling']['tab']['_a']['title']); ?>" class="subtab">
								<?php 
								if(is_array($themify_globals['config']['panel']['styling']['tab']['_c']['element'])){
									if(isset($themify_globals['config']['panel']['styling']['tab']['_c']['element']['_a']['title']) && isset($themify_globals['config']['panel']['styling']['tab']['_c']['element']['_a']['selector'])){
										echo themify_container(themify_scrub_func($tab['_a']['title']), $themify_globals['config']['panel']['styling']['tab']['_c']['element']); 
									} else {
										foreach($themify_globals['config']['panel']['styling']['tab']['_c']['element'] as $element){
											echo themify_container(themify_scrub_func($themify_globals['config']['panel']['styling']['tab']['_a']['title']), $element); 
										}
									}
								}
								?>
							</div>
							<!-- /subtab: styling-<?php echo themify_scrub_func($tab['_a']['title']); ?> -->
					<?php 
					} else {
						foreach($themify_globals['config']['panel']['styling']['tab'] as $tab){ ?>					
							<!-- subtab: styling-<?php echo themify_scrub_func($tab['_a']['title']); ?> -->
							<div id="styling-<?php echo themify_scrub_func($tab['_a']['title']); ?>" class="subtab">
								<?php 
								if(is_array($tab['_c']['element'])){
									if(isset($tab['_c']['element']['_a']['title']) && isset($tab['_c']['element']['_a']['selector'])){
										echo themify_container(themify_scrub_func($tab['_a']['title']), $tab['_c']['element']); 
									} else {
										foreach($tab['_c']['element'] as $element){
											echo themify_container(themify_scrub_func($tab['_a']['title']), $element); 
										}
									}
								}
								?>
							</div>
							<!-- /subtab: styling-<?php echo themify_scrub_func($tab['_a']['title']); ?> -->
						<?php } 
					} 
					?>
	                
	            </div>
	            <!--/styling tab -->
	            
	            <!--skins tab -->
	            <div id="skins" class="maintab">
	                <ul class="subtabnav">
	                    <li class="selected"><a href="#setting-general">Skins</a></li>
	                </ul>
	               
	                <div id="load-load" class="subtab">
	                    <?php echo themify_get_skins(); ?>
	                </div>
	                
	            </div>
	            <!--/skins tab -->
	    	   
	            <!--import tab -->
	            <div id="transfer" class="maintab">
	                
	                <ul class="subtabnav">
	                    <li><a href="#import-import">Import/Export</a></li>
	                </ul>
	                
	                <div id="transfer-import" class="subtab">
	                    <p class="biggest-transfer-btn">
	                    <a href="#" class="import" id="download-import">Import</a> <em>or</em>
	                    <a href="#" class="export" id="download-export">Export</a>
	                	</p>
	                </div>
	            
	            </div>
	            <!--/import tab -->
	        
	        </div>
	        <!--/content -->
	        
	        <!-- footer -->
	        <div id="bottomtab">
	            <p id="logo"><span>Themify</span> v<?php echo $themify_globals['version']; ?></p>
	            <p class="reset">
	                <strong>Reset:</strong> 
	                <a href="#" id="reset-setting" class="reset-button">Settings</a>
	                <a href="#" id="reset-styling" class="reset-button">Styling</a>
	            </p>
	            <p class="btm-save-btn">
	            	<a href="#" class="save-button">Save All</a>
	       		</p>
	        </div>
	        <!--/footer -->
        
   		</form>
    	<div class="clearBoth"></div>
        <!-- /html -->
        
		<?php 
	}
?>