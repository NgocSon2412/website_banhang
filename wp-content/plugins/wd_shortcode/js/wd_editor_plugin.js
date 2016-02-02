(function() {
     /* Register the buttons */
     tinymce.create('tinymce.plugins.Wd_shortcodes', {
          init: function(d,e) {},
				createControl:function(d,e)
				{

					var ed = tinymce.activeEditor;

					if(d=="wd_shortcodes_button"){

						d=e.createMenuButton( "wd_shortcodes_button",{
							title: 'Insert Shortcode',
							icons: false
							});

							var a=this;d.onRenderMenu.add(function(c,b){
							
							//phan nhanh					//woo shortcode
								c=b.addMenu({title:'WD shortcode'});
										//testimonial
										//feature
										a.addImmediate(c, 'Feature','[feature slug="" id="" title="yes" thumbnail="yes" excerpt="yes" content="yes"]'); 										
										a.addImmediate(c, 'Testimonial','[testimonial style="" slug="" id=""]');
										a.addImmediate(c,'[WD]Custom product','[custom_product id="" sku="" title=""]' );
										a.addImmediate(c,'[WD]Custom products','[custom_products ids="" skus="" ]' );
										
										a.addImmediate(c,'[WD]Custom products category','[custom_products_category category="" per_page="5" title="custom_products_category" orderby="date" order="desc" show_image="1" show_title="1" show_sku="1" show_price="1" show_label="1" show_rating="0" show_categories="0" show_short_content="0"]' );
										a.addImmediate(c,'[WD]Custom products category Grid image','[custom_products_category_grid_image category="" style="pink" per_page="4" title="" orderby="date" order="desc"  show_image="1" show_title="1" show_sku="1" show_price="1" show_label="1" show_rating="0" show_categories="0" show_short_content="0" image_url="#"]' );
										a.addImmediate(c,'[WD]Custom products category Grid no image','[custom_products_category_grid_noimage category="" show_heading_title="0" per_page="10" columns="4" title="" orderby="date" order="desc" show_heading_title="0" show_image="1" show_title="1" show_sku="1" show_price="1" show_readmore="1" show_label="1" show_rating="0" show_categories="0" show_short_content="0"]' );
										a.addImmediate(c,'[WD]Custom products category list slider','[wd_product_category_list_slider category="" style="pink" per_page="10" orderby="date" order="desc" show_image="1" show_title="1" show_sku="1" show_price="1" show_label="1" show_rating="0" show_categories="0" show_short_content="0"]' );
										a.addImmediate(c,'[WD]Popular product','[wd_popular_product category="" style="pink" title="" orderby="date" order="desc" show_image="1" show_availability="1" show_readmore="1" show_related="1" show_title="1" show_sku="1" show_price="1" show_label="1" show_rating="0" show_short_content="0"]' );
										
										a.addImmediate(c,'[WD]Feature product slider','[featured_product_slider columns="4" layout="big" per_page="15" title="your title" desc="" show_nav="1" show_icon_nav="0" show_image="1" show_title="1" show_sku="1" show_price="1" show_label="1" show_rating="1" show_product_tag="1" show_categories="0" show_short_content="1"]' );
										a.addImmediate(c,'[WD]Popular product slider','[popular_product_slider columns="4" layout="small" per_page="8" title="Enter your title" desc="" show_nav="1" show_icon_nav="1" show_image="1" show_title="1" show_sku="0" show_price="1" show_label="1" show_rating="1" show_categories="0" show_short_content="1"]' );
										a.addImmediate(c,'[WD]Recent product slider','[recent_product_slider columns="4" layout="small" per_page="8" title="Enter your title" desc="" show_nav="1" show_icon_nav="1" show_image="1" show_title="1" show_sku="1" show_price="1" show_label="1" show_rating="1" show_categories="1" show_short_content="1"]' );
										a.addImmediate(c,'[WD]Best selling product slider','[best_selling_product_slider columns="4" show_heading_title="0" layout="small" per_page="8" title="Enter your title" desc="" product_tag="all-product-tags" show_nav="1" show_icon_nav="1" show_image="1" show_title="1" show_sku="1" show_price="1" show_label="1" show_rating="1" show_categories="1" show_short_content="1"]' );
										a.addImmediate(c,'[WD]Best selling product by categories slider','[best_selling_product_by_category_slider cat_slug="" columns="4" layout="small" per_page="8" title="Enter your title" show_heading_title="0" desc="" product_tag="all-product-tags" show_icon_nav="0" show_nav="1" show_image="1" show_title="1" show_sku="1" show_price="1" show_label="1"  show_rating="0" show_categories="0" show_short_content="0" ]' );
										a.addImmediate(c,'[WD]Recent product by categories slider','[recent_product_by_categories_slider cat_slug="" columns="4" layout="small" per_page="8" title="" desc=""  product_tag="all-product-tags" show_nav="1" show_icon_nav="0" show_image="1" show_title="1" show_sku="1" show_price="1" show_label="1" show_rating="0" show_categories="0"  show_short_content="0"]' );
								
							
							
								//add_line
								a.addImmediate(b, 'Add line','[add_line height_line="" color="" class=""]');
								//align
								a.addImmediate(b, 'Align','[align  style=""][/align]' );	
								
								//accordion
								a.addImmediate(b, 'Accordion','[accordions][accordion_item title="title"]your_content[/accordion_item][/accordions]' );
								//alert
								a.addImmediate(b, 'Alert','[ alert style="" close="" ]your_content[ /alert]' );
								//badges
								a.addImmediate(b, 'Badges','[ badge type="" ]your_content[ /badge] ' );	
								//banner
								a.addImmediate(b, 'Banner','[banner link_url="#" bg_image="" bg_color="#df2323" title="" font_size_title="44" title_color="#ffffff" subtitle="" font_size_subtitle="18" subtitle_color="" border_color="" top_padding="173px" left_padding="20px" bottom_padding="10px" right_padding="20px" inner_stroke="0" inner_stroke_color="#fff" sep_padding="20px" sep_color="#fff" label="no" label_text="" label_bg_color="" label_text_color=""]' );
								//buttons
								a.addImmediate(b, 'Buttons','[button size="" link="#" background="" opacity="" color=""]button text[/button]' );
								//checklist
								a.addImmediate(b, 'Checklist','[checklist icon=""]your_content[/checklist]');
								//code
								a.addImmediate(b, 'Code','[code]your_content[/code]');
								//column_article
								c=b.addMenu({title:'Columns'});
										a.addImmediate(c, '1/2',"[one_half]your_content[/one_half]" );
										a.addImmediate(c, '1/3',"[one_third]your_content[/one_third]" );
										a.addImmediate(c, '1/4',"[one_fourth]your_content[/one_fourth]" );
										a.addImmediate(c, '1/5',"[one_fifth]your_content[/one_fifth]" );
										a.addImmediate(c, '1/6',"[one_sixth]your_content[/one_sixth]" );
										a.addImmediate(c, '2/3',"[two_third]your_content[/two_third]" );
										a.addImmediate(c, '3/4',"[three_fourth]your_content[/three_fourth]" );
										a.addImmediate(c, '2/5',"[two_fifth]your_content[/two_fifth]" );
										a.addImmediate(c, '3/5',"[three_fifth]your_content[/three_fifth]" );
										a.addImmediate(c, '4/5',"[four_fifth]your_content[/four_fifth]" );
										a.addImmediate(c, '5/6',"[five_sixth]your_content[/five_sixth]" );
										
										a.addImmediate(c, '1/2 last',"[one_half_last]your_content[/one_half_last]" );
										a.addImmediate(c, '1/3 last',"[one_third_last]your_content[/one_third_last]" );
										a.addImmediate(c, '1/4 last',"[one_fourth_last]your_content[/one_fourth_last]" );
										a.addImmediate(c, '1/5 last',"[one_fifth_last]your_content[/one_fifth_last]" );
										a.addImmediate(c, '1/6 last',"[one_sixth_last]your_content[/one_sixth_last]" );
										a.addImmediate(c, '2/3 last',"[two_third_last]your_content[/two_third_last]" );
										a.addImmediate(c, '3/4 last',"[three_fourth_last]your_content[/three_fourth_last]" );
										a.addImmediate(c, '2/5 last',"[two_fifth_last]your_content[/two_fifth_last]" );
										a.addImmediate(c, '3/5 last',"[three_fifth_last]your_content[/three_fifth_last]" );
										a.addImmediate(c, '4/5 last',"[four_fifth_last]your_content[/four_fifth_last]" );
										a.addImmediate(c, '5/6 last',"[five_sixth_last]your_content[/five_sixth_last]" );		
								//dropcap
								a.addImmediate(b, 'Dropcap','[dropcap color=""]your_text[/dropcap]');
								//faq
								a.addImmediate(b, 'Faq','[faq title=""]your_content[/faq]');
								
								
//bo							//custom_query
								//a.addImmediate(b, 'custom_query','[custom_query'); 
//bo							//embbed_video
								//a.addImmediate(b, 'embbed_video','[tooltip style="" tooltip_content=""]your_content[/tooltip]'); 
								 
								
								//google map
								a.addImmediate(b, 'Google Map','[google_map address="" title="" height="360" zoom="16" map_type="TERRAIN" map_color="" water_color="" road_color=""]your_content[/google_map]');
								//heading
								a.addImmediate(b, 'Heading','[heading size=""]your_content[/heading]');
								//hidden phone
								a.addImmediate(b, 'Hidden phone','[hidden_phone]your_content[/hidden_phone]');
								//hr
								a.addImmediate(b, 'Hr','[hr style="" class=""]your_content[/hr]');
//bo							//img_video
								//a.addImmediate(b, 'img video','[hr style="" class=""]your_content[/hr]');
								//icon
								a.addImmediate(b, 'Icon','[icon icon=""]');							
								//label
								a.addImmediate(b, 'Label','[label type=" "]your_text[/label]');
//bo							//lightbox
								//a.addImmediate(b, 'lightbox','[hr style="" class=""]your_content[/hr]');
								//listing
								a.addImmediate(b, 'Listing','[ew_listing custom_class="" style_class=""]your_content[/ew_listing]');
								//menu
								a.addImmediate(b, 'Menu','[menu menu="" depth="1"]');
								//progress bars
								a.addImmediate(b, 'Progress bar','[progress animated_bars="" striped_bars=""][bar style="" percent_bars=""]Text[/bar][/progress]'); 
								//quote
								a.addImmediate(b, 'Quote','[quote class=""]your_content[/quote]');
								//recent post
								a.addImmediate(b, 'Recent post','[recent_blogs category="" columns="1" number_posts="" title="yes" thumbnail="yes" meta="" excerpt="" excerpt_words="30"]');
//bo							//service_item
								//a.addImmediate(b, 'service_item','[quote class=""]your_content[/quote]');
//bo							//sidebar
								//a.addImmediate(b, 'sidebar','[quote class=""]your_content[/quote]');
//bo								//style_box
								//a.addImmediate(b, 'sidebar','[quote class=""]your_content[/quote]');
								
								//tabs
								c=b.addMenu({title:'Tabs'});
										a.addImmediate(c, 'Tabs style 1','[tabs style="default1"] [/tabs]');
										a.addImmediate(c, 'Tabs style 2','[tabs style="default2"] [/tabs]');
										a.addImmediate(c, 'Tab item','[tab_item title=""]your_content[/tab_item]');		
								//tooltip
								a.addImmediate(b, 'Tooltip','[tooltip style="" tooltip_content=""]your_content[/tooltip]'); 
//bo								//ew_style_table
								//a.addImmediate(b, 'sidebar','[quote class=""]your_content[/quote]');
				//tabs bo				
								
								b.addSeparator();


								
										
							});
						return d

					} // End IF Statement

					return null
				},

				addImmediate:function(d,e,a){d.add({title:e,onclick:function(){tinyMCE.activeEditor.execCommand( "mceInsertContent",false,a)}})}

     });
     /* Start the buttons */
     tinymce.PluginManager.add( 'Wd_shortcodes', tinymce.plugins.Wd_shortcodes );
})();