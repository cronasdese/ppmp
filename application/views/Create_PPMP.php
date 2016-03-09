<!DOCTYPE html>
<html>
<head>
	<title>Create PPMP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href= "<?php echo base_url('assets/css/bootstrap.css'); ?>">
	<script src ="<?php echo base_url('assets/js/jquery-2.2.1.js'); ?>"></script>
	<script src ="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			//ID NUMBER FOR A ROW
			var id_number = 1;

			$('#add_item_buttom').on('click', function(){
				//INITIALIZE THE ADD ITEM MODAL
				//RESET ALL VALUES FOR ALL FIELDS
				$('#create_quantity').val(0);
				$('#create_unit').val('');
				$('#create_price').val(0);
				$('#create_jan').val(0);
				$('#create_feb').val(0);
				$('#create_mar').val(0);
				$('#create_apr').val(0);
				$('#create_may').val(0);
				$('#create_jun').val(0);
				$('#create_jul').val(0);
				$('#create_aug').val(0);
				$('#create_sep').val(0);
				$('#create_oct').val(0);
				$('#create_nov').val(0);
				$('#create_dec').val(0);

				//REMOVE ALL CATEGORY DROPDOWN OPTIONS
				$('#create_category > option').remove();

				//POPULATE CATEGORY DROPDOWN
				$.ajax({ 
	                url : '<?php echo base_url('Create_controller/getCategory'); ?>',
	                dataType : 'json',
	                async : false,
	                success : function(data){
	                    $(data).each(function(){
	                        $('#create_category').append($('<option>', {
	                            value : this.id,
	                            text : this.category
	                        }));
	                    })
	                },
	                error : function(errorw) {
	                    alert('Error');
	                }
	            });

				var category_id = $('#create_category').val(),
					category_div = $('#category_div'),
					subcategory_div = $('#subcategory_div'),
					item_div = $('#item_div');

				//CREATE AND POPULATE SUBCATEGORY DROPDOWN WHEN THERE ARE SUBCATEGORIES
				if((category_id == 2) || (category_id == 3)){
					//REMOVE THE ITEM INPUT
					$('#create_item').remove();

					var dropdown = $('<select id=\"create_item\" class=\"form-control\" type=\"dropdown\"></select>');

					//CREATE AN ITEM DROPDOWN
					item_div.append(dropdown);

					$.ajax({
						type : 'POST',
						url : '<?php echo base_url('Create_controller/getSubcategory'); ?>',
						data : { category_id : category_id },
						dataType : 'json',
						async : false,
						success : function(data){
							//IF SUBCATEGORY DIV IS EMPTY, CREATE A LABEL AND A DROPDOWN
							if(subcategory_div.is(':empty')){
								var label = $('<label> Subcategory </label>');

								subcategory_div.append(label);

								//IF THERE IS NO EXISTING SUBCATEGORY DROPDOWN, CREATE ONE
								if(!$('#create_subcategory').length > 0){
									var dropdown = $('<select id=\"create_subcategory\" class=\"form-control\" type=\"dropdown\"></select>');

									subcategory_div.append(dropdown);
								}
							}

							$(data).each(function(){
								$('#create_subcategory').append($('<option>', {
									value : this.id,
									text : this.subcategory
								}))
							})
						},
						error : function(errorw){
							alert('Error');
						}
		            });

					//REMOVE THE DROPDOWN/INPUT FIELDS FOR ITEM WHEN THE CATEGORY IS SEMINAR
					if(category_id == 3){
						item_div.empty();
					}
				}
				//IF CATEGORY HAS NO SUBCATEGORIES
				else{
					//EMPTY THE SUBCATEGORY DIV
					subcategory_div.empty();

					//REMOVE THE ITEM DROPDOWN
					item_div.empty();

					var label = $('<label>Item Specification</label>');
					var input = $('<input id=\"create_item\" class=\"form-control\" type=\"text\"/>');

					//CREATE AN ITEM INPUT
					item_div.append(label);
					item_div.append(input);
				}

				var subcategory_id = $('#create_subcategory').val();

				//POPULATE ITEM DROPDOWNS WHEN THERE ARE SUBCATEGORIES
				if((subcategory_id == 1) || (subcategory_id == 2)){
					//REMOVE ALL EXISTING OPTIONS IN ITEMS DROPDOWN
					$('#create_item > option').remove();

					$.ajax({
						type : 'POST',
						url : '<?php echo base_url('Create_controller/getItem'); ?>',
						data : { subcategory_id : subcategory_id },
						dataType : 'json',
						async : false,
						success : function(data){
							//IF ITEM DIV IS EMPTY, CREATE A LABEL AND A DROPDOWN
							if(item_div.is(':empty')){
								var label = $('<label> Item Specification </label>');

								item_div.append(label);

								//IF THERE IS NO EXISTING ITEM DROPDOWN, CREATE ONE
								if(!$('#create_item').length > 0){
									var dropdown = $('<select id=\"create_item\" class=\"form-control\" type=\"dropdown\"></select>');

									item_div.append(dropdown);
								} 
							}

							var item_data = data;

							$.each(item_data, function(index, value){
								if(index == 0){
									$('#create_unit').val(value.unit);
									$('#create_price').val(value.price);
								}
								$('#create_item').append($('<option>', {
									value : value.id,
									text : value.description
								}))
							})
						},
						error : function(errorw){
							alert('Error');
						}
		            });
				}
			});

			//IF THE CATEGORY DROPDOWN CHANGED
			$('#create_category').on('change', function(){
				var category_id = $('#create_category').val(),
					category_div = $('#category_div'),
					subcategory_div = $('#subcategory_div'),
					item_div = $('#item_div');

				//RESET QUANTITY, UNIT, PRICE, SCHEDULE
				$('#create_quantity').val(0);
				$('#create_unit').val('');
				$('#create_price').val(0);
				$('#create_jan').val(0);
				$('#create_feb').val(0);
				$('#create_mar').val(0);
				$('#create_apr').val(0);
				$('#create_may').val(0);
				$('#create_jun').val(0);
				$('#create_jul').val(0);
				$('#create_aug').val(0);
				$('#create_sep').val(0);
				$('#create_oct').val(0);
				$('#create_nov').val(0);
				$('#create_dec').val(0);

				//CREATE AND POPULATE SUBCATEGORY DROPDOWN WHEN THERE ARE SUBCATEGORIES
				if((category_id == 2) || (category_id == 3)){
					//REMOVE THE ITEM INPUT
					$('#create_item').remove();
					item_div.find('label').remove();

					var label = $('<label> Item Specification </label>');
					var dropdown = $('<select id=\"create_item\" class=\"form-control\" type=\"dropdown\"></select>');

					//CREATE AN ITEM DROPDOWN
					item_div.append(label);
					item_div.append(dropdown);

					$.ajax({
						type : 'POST',
						url : '<?php echo base_url('Create_controller/getSubcategory'); ?>',
						data : { category_id : category_id },
						dataType : 'json',
						async : false,
						success : function(data){
							//IF SUBCATEGORY DIV IS EMPTY, CREATE A LABEL AND A DROPDOWN
							if(subcategory_div.is(':empty')){
								var label = $('<label> Subcategory </label>');

								subcategory_div.append(label);

								//IF THERE IS NO EXISTING SUBCATEGORY DROPDOWN, CREATE ONE
								if(!$('#create_subcategory').length > 0){
									var dropdown = $('<select id=\"create_subcategory\" class=\"form-control\" type=\"dropdown\"></select>');

									subcategory_div.append(dropdown);
								}
							}
							else{
								$('#create_subcategory > option').remove();
							}

							$(data).each(function(){
								$('#create_subcategory').append($('<option>', {
									value : this.id,
									text : this.subcategory
								}))
							})
						},
						error : function(errorw){
							alert('Error');
						}
		            });

					//REMOVE THE DROPDOWN/INPUT FIELDS FOR ITEM WHEN THE CATEGORY IS SEMINAR
					if(category_id == 3){
						item_div.empty();
					}
				}
				//IF CATEGORY HAS NO SUBCATEGORIES
				else{
					//EMPTY THE SUBCATEGORY DIV
					subcategory_div.empty();

					//REMOVE THE ITEM DROPDOWN
					$('#create_item').remove();
					item_div.find('label').remove();

					var label = $('<label> Item Specification </label>');
					var input = $('<input id=\"create_item\" class=\"form-control\" type=\"text\"/>');

					//CREATE AN ITEM INPUT
					item_div.append(label);
					item_div.append(input);
				}

				var subcategory_id = $('#create_subcategory').val();

				//POPULATE ITEM DROPDOWNS WHEN THERE ARE SUBCATEGORIES
				if((subcategory_id == 1) || (subcategory_id == 2)){
					//REMOVE ALL EXISTING OPTIONS IN ITEMS DROPDOWN
					$('#create_item > option').remove();

					$.ajax({
						type : 'POST',
						url : '<?php echo base_url('Create_controller/getItem'); ?>',
						data : { subcategory_id : subcategory_id },
						dataType : 'json',
						async : false,
						success : function(data){
							//IF ITEM DIV IS EMPTY, CREATE A LABEL AND A DROPDOWN
							if(item_div.is(':empty')){
								var label = $('<label> Item Specification </label>');

								item_div.append(label);

								//IF THERE IS NO EXISTING ITEM DROPDOWN, CREATE ONE
								if(!$('#create_item').length > 0){
									var dropdown = $('<select id=\"create_item\" class=\"form-control\" type=\"dropdown\"></select>');

									item_div.append(dropdown);
								} 
							}

							var item_data = data;

							$.each(item_data, function(index, value){
								if(index == 0){
									$('#create_unit').val(value.unit);
									$('#create_price').val(value.price);
								}
								$('#create_item').append($('<option>', {
									value : value.id,
									text : value.description
								}))
							})
						},
						error : function(errorw){
							alert('Error');
						}
		            });
				}
			});

			//IF THE SUBCATEGORY DROPDOWN CHANGED VALUE
			$(document).on('change', '#create_subcategory' , function(){
				var category_id = $('#create_category').val();
				var subcategory_id = $('#create_subcategory').val();
				var item_div = $('#item_div');

				//RESET QUANTITY, UNIT, PRICE, SCHEDULE
				$('#create_quantity').val(0);
				$('#create_unit').val('');
				$('#create_price').val(0);
				$('#create_jan').val(0);
				$('#create_feb').val(0);
				$('#create_mar').val(0);
				$('#create_apr').val(0);
				$('#create_may').val(0);
				$('#create_jun').val(0);
				$('#create_jul').val(0);
				$('#create_aug').val(0);
				$('#create_sep').val(0);
				$('#create_oct').val(0);
				$('#create_nov').val(0);
				$('#create_dec').val(0);

				if(category_id == 2){
					$('#create_item > option').remove();

					$.ajax({
						type : 'POST',
						url : '<?php echo base_url('Create_controller/getItem'); ?>',
						data : { subcategory_id : subcategory_id },
						dataType : 'json',
						success : function(data){
							//IF ITEM DIV IS EMPTY, CREATE A LABEL AND A DROPDOWN
							if(item_div.is(':empty')){
								var label = $('<label> Item Specification </label>');

								item_div.append(label);

								//IF THERE IS NO EXISTING ITEM DROPDOWN, CREATE ONE
								if(!$('#create_item').length > 0){
									var dropdown = $('<select id=\"create_item\" class=\"form-control\" type=\"dropdown\"></select>');

									item_div.append(dropdown);
								} 
							}

							var item_data = data;

							$.each(item_data, function(index, value){
								if(index == 0){
									$('#create_unit').val(value.unit);
									$('#create_price').val(value.price);
								}
								$('#create_item').append($('<option>', {
									value : value.id,
									text : value.description
								}))
							})
						},
						error : function(errorw){
							alert('Error');
						}
		            });
				}
			});

			//IF THE ITEM DROPDOWN VALUE CHANGED
			$(document).on('change', '#create_item', function(){
				var item_id = $('#create_item').val();
				
				$.ajax({
					type : 'POST',
					url : '<?php echo base_url('Create_controller/getItemDetails'); ?>',
					data : { item_id : item_id },
					dataType : 'json',
					success : function(data){
						var item_data = data;
						
						$.each(item_data, function(index, value){
							if(index == 0){
								$('#create_unit').val(value.unit);
								$('#create_price').val(value.price);
							}
						})
					},
					error : function(errorw){
						alert('Error');
					}
	            });
			});

			//APPEND THE VALUES INSIDE THE ADD ITEM MODAL TO THE TABLE
			$('#create_add_row').click(function(){
				var category_id = $('#create_category').val(),
					category_text = $('#create_category option:selected').text(),
					item,
					item_text,
					quantity = parseInt($('#create_quantity').val()),
					unit = $('#create_unit').val(),
					price = parseFloat($('#create_price').val()),
					jan = parseInt($('#create_jan').val()),
					feb = parseInt($('#create_feb').val()),
					mar = parseInt($('#create_mar').val()),
					apr = parseInt($('#create_apr').val()),
					may = parseInt($('#create_may').val()),
					jun = parseInt($('#create_jun').val()),
					jul = parseInt($('#create_jul').val()),
					aug = parseInt($('#create_aug').val()),
					sep = parseInt($('#create_sep').val()),
					oct = parseInt($('#create_oct').val()),
					nov = parseInt($('#create_nov').val()),
					dec = parseInt($('#create_dec').val()),
					subtotal = parseFloat(quantity*price).toFixed(2);

				var total_qty = jan + feb + mar + apr + may + jun + jul + aug + sep + oct + nov + dec;

				//IF THE CATEGORY IS INFRASTRUCTURE OR CONSULTANCY
				if((category_id == 1) || (category_id == 4)){
					item_text = $('#create_item').val();
				}
				//ELSE IF THE CATEGORY IS GOODS AND SERVICES
				else if(category_id == 2){
					item_text = $('#create_item option:selected').text();
				}
				//ELSE IF THE CATEGORY IS SEMINARS
				else{
					item_text = $('#create_subcategory option:selected').text();
				}

				if(category_id == null){
					alert('Please select a category');
				}
				else if($.trim(item_text) == ""){
					alert('Please input an item specification');
				}
				else if(quantity == 0){
					alert('Please enter the item quantity.');
				}
				else if(price == 0){
					alert('Please enter the item price');
				}
				else if(quantity != total_qty){
					alert('Please distribute the quantities properly');
				}
				else{
					$('#tablebody').append('<tr id="row'+ id_number +'">' +
						'<td id="category'+ id_number +'">'+
							'<input id="category_input'+ id_number +'" name="items['+ id_number +'][category]" class="hidden" value="'+ category_id +'"/>'+ 
							category_text +
						'</td>'+
						'<td id="item'+ id_number +'">'+
							'<input id="item_input'+ id_number +'" name="items['+ id_number +'][item]" class="hidden" value="'+ item_text +'"/>'+ 
							item_text +
						'</td>'+
						'<td id="quantity'+ id_number +'">'+
							'<input id="quantity_input'+ id_number +'" name="items['+ id_number +'][quantity]" class="hidden" value="'+ quantity +'"/>'+
							quantity +
						'</td>'+
						'<td id="unit'+ id_number +'">'+
							'<input id="unit_input'+ id_number +'" name="items['+ id_number +'][unit]" class="hidden" value="'+ unit +'"/>'+ 
							unit +
						'</td>'+
						'<td id="price'+ id_number +'">'+
							'<input id="price_input'+ id_number +'" name="items['+ id_number +'][price]" class="hidden" value="'+ price +'"/>'+ 
							price +
						'</td>'+
						'<td id="jan'+ id_number +'">'+
							'<input id="jan_input'+ id_number +'" name="items['+ id_number +'][jan]" class="hidden" value="'+ jan +'"/>'+ 
							jan +
						'</td>'+
						'<td id="feb'+ id_number +'">'+
							'<input id="feb_input'+ id_number +'" name="items['+ id_number +'][feb]" class="hidden" value="'+ feb +'"/>'+ 
							feb +
						'</td>'+
						'<td id="mar'+ id_number +'">'+
							'<input id="mar_input'+ id_number +'" name="items['+ id_number +'][mar]" class="hidden" value="'+ mar +'"/>'+ 
							mar +
						'</td>'+
						'<td id="apr'+ id_number +'">'+
							'<input id="apr_input'+ id_number +'" name="items['+ id_number +'][apr]" class="hidden" value="'+ apr +'"/>'+ 
							apr +
						'</td>'+
						'<td id="may'+ id_number +'">'+
							'<input id="may_input'+ id_number +'" name="items['+ id_number +'][may]" class="hidden" value="'+ may +'"/>'+ 
							may +
						'</td>'+
						'<td id="jun'+ id_number +'">'+
							'<input id="jun_input'+ id_number +'" name="items['+ id_number +'][jun]" class="hidden" value="'+ jun +'"/>'+ 
							jun +
						'</td>'+
						'<td id="jul'+ id_number +'">'+
							'<input id="jul_input'+ id_number +'" name="items['+ id_number +'][jul]" class="hidden" value="'+ jul +'"/>'+ 
							jul +
						'</td>'+
						'<td id="aug'+ id_number +'">'+
							'<input id="aug_input'+ id_number +'" name="items['+ id_number +'][aug]" class="hidden" value="'+ aug +'"/>'+ 
							aug +
						'</td>'+
						'<td id="sep'+ id_number +'">'+
							'<input id="sep_input'+ id_number +'" name="items['+ id_number +'][sep]" class="hidden" value="'+ sep +'"/>'+ 
							sep +
						'</td>'+
						'<td id="oct'+ id_number +'">'+
							'<input id="oct_input'+ id_number +'" name="items['+ id_number +'][oct]" class="hidden" value="'+ oct +'"/>'+ 
							oct +
						'</td>'+
						'<td id="nov'+ id_number +'">'+
							'<input id="nov_input'+ id_number +'" name="items['+ id_number +'][nov]" class="hidden" value="'+ nov +'"/>'+ 
							nov +
						'</td>'+
						'<td id="dec'+ id_number +'">'+
							'<input id="dec_input'+ id_number +'" name="items['+ id_number +'][dec]" class="hidden" value="'+ dec +'"/>'+ 
							dec +
						'</td>'+
						'<td id="subtotal'+ id_number +'">'+ subtotal +'</td>'+
						'<td><button id="edit'+ id_number +'" class=\"btn btn-link\" type=\"button\" data-toggle=\"modal\" data-target=\"#edit_item_modal\">Edit</button></td>'+
						'<td><button id="delete'+ id_number +'" class=\"btn btn-link\" type=\"button\" data-toggle=\"modal\" data-target="\#delete_item_modal\">Delete</button></td>'+
						'</tr>');

					//INCREMENT ID NUMBER
					id_number++;
					$('#add_item_modal').modal('hide');
				}
			});

			$('#tablebody').on('click', function(event){
				var id = event.target.id,
					numberId = id.match(/\d+/)[0],
                    type = id.replace(/[0-9]/g, '');

                if(type == 'edit'){
                	//SET THE VALUES OF THE INPUTS IN THE EDIT MODAL TO THE VALUES OF THE TABLE ROW
                	var category_id = $('#category_input' + numberId).val(),
                		item = $('#item_input' + numberId).val(),
                		quantity = $('#quantity_input' + numberId).val(),
                		unit = $('#unit_input' + numberId).val(),
                		price = $('#price_input' + numberId).val(),
                		jan = $('#jan_input' + numberId).val(),
                		feb = $('#feb_input' + numberId).val(),
                		mar = $('#mar_input' + numberId).val(),
                		apr = $('#apr_input' + numberId).val(),
                		may = $('#may_input' + numberId).val(),
                		jun = $('#jun_input' + numberId).val(),
                		jul = $('#jul_input' + numberId).val(),
                		aug = $('#aug_input' + numberId).val(),
                		sep = $('#sep_input' + numberId).val(),
                		oct = $('#oct_input' + numberId).val(),
                		nov = $('#nov_input' + numberId).val(),
                		dec = $('#dec_input' + numberId).val();

                	//SET THE VALUE OF HIDDEN INPUT FOR ROW TO ROW
                	$('#edit_row').val(numberId);

                	//REMOVE ALL CATEGORY DROPDOWN OPTIONS
					$('#edit_category > option').remove();

					//POPULATE CATEGORY DROPDOWN
					$.ajax({ 
		                url : '<?php echo base_url('Create_controller/getCategory'); ?>',
		                dataType : 'json',
		                async : false,
		                success : function(data){
		                    $(data).each(function(){
		                        $('#edit_category').append($('<option>', {
		                            value : this.id,
		                            text : this.category
		                        }));
		                    })
		                },
		                error : function(errorw) {
		                    alert('Error');
		                }
		            });

		            $('#edit_category').val(category_id);

		            var category_div = $('#edit_category_div'),
						subcategory_div = $('#edit_subcategory_div'),
						item_div = $('#edit_item_div');

		            //CREATE AND POPULATE SUBCATEGORY DROPDOWN WHEN THERE ARE SUBCATEGORIES
					if((category_id == 2) || (category_id == 3)){
						//REMOVE THE ITEM INPUT
						$('#edit_item').remove();

						var dropdown = $('<select id=\"edit_item\" class=\"form-control\" type=\"dropdown\"></select>');

						//CREATE AN ITEM DROPDOWN
						item_div.append(dropdown);
						$.ajax({
							type : 'POST',
							url : '<?php echo base_url('Create_controller/getSubcategory'); ?>',
							data : { category_id : category_id },
							dataType : 'json',
							async : false,
							success : function(data){
								//IF SUBCATEGORY DIV IS EMPTY, CREATE A LABEL AND A DROPDOWN
								if(subcategory_div.length > 0){
									var label = $('<label> Subcategory </label>');

									subcategory_div.append(label);

									//IF THERE IS NO EXISTING SUBCATEGORY DROPDOWN, CREATE ONE
									if(!$('#edit_subcategory').length > 0){
										var dropdown = $('<select id=\"edit_subcategory\" class=\"form-control\" type=\"dropdown\"></select>');

										subcategory_div.append(dropdown);
									}
								}

								$(data).each(function(){
									$('#edit_subcategory').append($('<option>', {
										value : this.id,
										text : this.subcategory
									}))
								})
							},
							error : function(errorw){
								alert('Error');
							}
			            });

						//REMOVE THE DROPDOWN/INPUT FIELDS FOR ITEM WHEN THE CATEGORY IS SEMINAR
						if(category_id == 3){
							item_div.empty();

							//SET SELECTED SUBCATEGORY FOR THE STAFF DEVELOPMENT
							$("#edit_subcategory option:contains(" + item + ")").attr('selected', 'selected');
						}
						else if(category_id == 2){
							$.ajax({
								type : 'POST',
								url : '<?php echo base_url('Create_controller/getSubcategoryOfItem'); ?>',
								data : { item : item },
								dataType : 'json',
								async : false,
								success : function(data){
									$(data).each(function(){
										//SET THE SUBCATEGORY FOR THE ITEM
										$('#edit_subcategory').val(this.id);
									})
								},
								error : function(errorw){
									alert('Error');
								}
				            });
						}
					}
					//IF CATEGORY HAS NO SUBCATEGORIES
					else{
						//EMPTY THE SUBCATEGORY DIV
						subcategory_div.empty();

						//REMOVE THE ITEM DROPDOWN
						item_div.empty();

						var label = $('<label>Item Specification</label>');
						var input = $('<input id=\"edit_item\" class=\"form-control\" type=\"text\"/>');

						//CREATE AN ITEM INPUT
						item_div.append(label);
						item_div.append(input);

						//SET THE ITEM VALUE
						$('#edit_item').val(item);
					}

					var subcategory_id = $('#edit_subcategory').val();

					//POPULATE ITEM DROPDOWNS WHEN THERE ARE SUBCATEGORIES
					if((subcategory_id == 1) || (subcategory_id == 2)){
						//REMOVE ALL EXISTING OPTIONS IN ITEMS DROPDOWN
						$('#edit_item > option').remove();

						$.ajax({
							type : 'POST',
							url : '<?php echo base_url('Create_controller/getItem'); ?>',
							data : { subcategory_id : subcategory_id },
							dataType : 'json',
							async : false,
							success : function(data){
								//IF ITEM DIV IS EMPTY, CREATE A LABEL AND A DROPDOWN
								if(item_div.is(':empty')){
									var label = $('<label> Item Specification </label>');

									item_div.append(label);

									//IF THERE IS NO EXISTING ITEM DROPDOWN, CREATE ONE
									if(!$('#edit_item').length > 0){
										var dropdown = $('<select id=\"edit_item\" class=\"form-control\" type=\"dropdown\"></select>');

										item_div.append(dropdown);
									} 
								}

								var item_data = data;

								$.each(item_data, function(index, value){
									$('#edit_item').append($('<option>', {
										value : value.id,
										text : value.description
									}))
								})
							},
							error : function(errorw){
								alert('Error');
							}
			            });

			            //SET THE ITEM DROPDOWN TO ITEM DESCRIPTION
			            $("#edit_item option:contains(" + item + ")").attr('selected', 'selected');
					}

					//SET THE VALUES OF THE OTHER FIELDS
					$('#edit_quantity').val(quantity);
					$('#edit_unit').val(unit);
					$('#edit_price').val(price);
					$('#edit_jan').val(jan);
					$('#edit_feb').val(feb);
					$('#edit_mar').val(mar);
					$('#edit_apr').val(apr);
					$('#edit_may').val(may);
					$('#edit_jun').val(jun);
					$('#edit_jul').val(jul);
					$('#edit_aug').val(aug);
					$('#edit_sep').val(sep);
					$('#edit_oct').val(oct);
					$('#edit_nov').val(nov);
					$('#edit_dec').val(dec);
                }
                //WHEN DELETE BUTTON IS CLICKED
                else if(type == 'delete'){
                	var row = '#row' + numberId;
                	//SET THE VALUE OF HIDDEN INPUT TO THE ROW WANTED TO BE DELETED
                	$('#delete_row').val(row);
                }
			});
			
			//IF THE EDIT CATEGORY DROPDOWN CHANGED
			$('#edit_category').on('change', function(){
				var category_id = $('#edit_category').val(),
					category_div = $('#edit_category_div'),
					subcategory_div = $('#edit_subcategory_div'),
					item_div = $('#edit_item_div');

				//RESET QUANTITY, UNIT, PRICE, SCHEDULE
				$('#edit_quantity').val(0);
				$('#edit_unit').val('');
				$('#edit_price').val(0);
				$('#edit_jan').val(0);
				$('#edit_feb').val(0);
				$('#edit_mar').val(0);
				$('#edit_apr').val(0);
				$('#edit_may').val(0);
				$('#edit_jun').val(0);
				$('#edit_jul').val(0);
				$('#edit_aug').val(0);
				$('#edit_sep').val(0);
				$('#edit_oct').val(0);
				$('#edit_nov').val(0);
				$('#edit_dec').val(0);

				//CREATE AND POPULATE SUBCATEGORY DROPDOWN WHEN THERE ARE SUBCATEGORIES
				if((category_id == 2) || (category_id == 3)){
					//REMOVE THE ITEM INPUT
					$('#edit_item').remove();
					item_div.find('label').remove();

					var label = $('<label> Item Specification </label>');
					var dropdown = $('<select id=\"edit_item\" class=\"form-control\" type=\"dropdown\"></select>');

					//CREATE AN ITEM DROPDOWN
					item_div.append(label);
					item_div.append(dropdown);

					$.ajax({
						type : 'POST',
						url : '<?php echo base_url('Create_controller/getSubcategory'); ?>',
						data : { category_id : category_id },
						dataType : 'json',
						async : false,
						success : function(data){
							//IF SUBCATEGORY DIV IS EMPTY, CREATE A LABEL AND A DROPDOWN
							if(subcategory_div.is(':empty')){
								var label = $('<label> Subcategory </label>');

								subcategory_div.append(label);

								//IF THERE IS NO EXISTING SUBCATEGORY DROPDOWN, CREATE ONE
								if(!$('#edit_subcategory').length > 0){
									var dropdown = $('<select id=\"edit_subcategory\" class=\"form-control\" type=\"dropdown\"></select>');

									subcategory_div.append(dropdown);
								}
							}
							else{
								$('#edit_subcategory > option').remove();
							}

							$(data).each(function(){
								$('#edit_subcategory').append($('<option>', {
									value : this.id,
									text : this.subcategory
								}))
							})
						},
						error : function(errorw){
							alert('Error');
						}
		            });

					//REMOVE THE DROPDOWN/INPUT FIELDS FOR ITEM WHEN THE CATEGORY IS SEMINAR
					if(category_id == 3){
						item_div.empty();
					}
				}
				//IF CATEGORY HAS NO SUBCATEGORIES
				else{
					//EMPTY THE SUBCATEGORY DIV
					subcategory_div.empty();

					//REMOVE THE ITEM DROPDOWN
					$('#edit_item').remove();
					item_div.find('label').remove();

					var label = $('<label> Item Specification </label>');
					var input = $('<input id=\"edit_item\" class=\"form-control\" type=\"text\"/>');

					//CREATE AN ITEM INPUT
					item_div.append(label);
					item_div.append(input);
				}

				var subcategory_id = $('#edit_subcategory').val();

				//POPULATE ITEM DROPDOWNS WHEN THERE ARE SUBCATEGORIES
				if((subcategory_id == 1) || (subcategory_id == 2)){
					//REMOVE ALL EXISTING OPTIONS IN ITEMS DROPDOWN
					$('#edit_item > option').remove();

					$.ajax({
						type : 'POST',
						url : '<?php echo base_url('Create_controller/getItem'); ?>',
						data : { subcategory_id : subcategory_id },
						dataType : 'json',
						async : false,
						success : function(data){
							//IF ITEM DIV IS EMPTY, CREATE A LABEL AND A DROPDOWN
							if(item_div.is(':empty')){
								var label = $('<label> Item Specification </label>');

								item_div.append(label);

								//IF THERE IS NO EXISTING ITEM DROPDOWN, CREATE ONE
								if(!$('#edit_item').length > 0){
									var dropdown = $('<select id=\"edit_item\" class=\"form-control\" type=\"dropdown\"></select>');

									item_div.append(dropdown);
								} 
							}

							var item_data = data;

							$.each(item_data, function(index, value){
								if(index == 0){
									$('#edit_unit').val(value.unit);
									$('#edit_price').val(value.price);
								}
								$('#edit_item').append($('<option>', {
									value : value.id,
									text : value.description
								}))
							})
						},
						error : function(errorw){
							alert('Error');
						}
		            });
				}
			});

			//IF THE EDIT SUBCATEGORY DROPDOWN CHANGED VALUE
			$(document).on('change', '#edit_subcategory' , function(){
				var category_id = $('#edit_category').val();
				var subcategory_id = $('#edit_subcategory').val();
				var item_div = $('#edit_item_div');

				//RESET QUANTITY, UNIT, PRICE, SCHEDULE
				$('#edit_quantity').val(0);
				$('#edit_unit').val('');
				$('#edit_price').val(0);
				$('#edit_jan').val(0);
				$('#edit_feb').val(0);
				$('#edit_mar').val(0);
				$('#edit_apr').val(0);
				$('#edit_may').val(0);
				$('#edit_jun').val(0);
				$('#edit_jul').val(0);
				$('#edit_aug').val(0);
				$('#edit_sep').val(0);
				$('#edit_oct').val(0);
				$('#edit_nov').val(0);
				$('#edit_dec').val(0);

				if(category_id == 2){
					$('#edit_item > option').remove();

					$.ajax({
						type : 'POST',
						url : '<?php echo base_url('Create_controller/getItem'); ?>',
						data : { subcategory_id : subcategory_id },
						dataType : 'json',
						success : function(data){
							//IF ITEM DIV IS EMPTY, CREATE A LABEL AND A DROPDOWN
							if(item_div.is(':empty')){
								var label = $('<label> Item Specification </label>');

								item_div.append(label);

								//IF THERE IS NO EXISTING ITEM DROPDOWN, CREATE ONE
								if(!$('#edit_item').length > 0){
									var dropdown = $('<select id=\"edit_item\" class=\"form-control\" type=\"dropdown\"></select>');

									item_div.append(dropdown);
								} 
							}

							var item_data = data;

							$.each(item_data, function(index, value){
								if(index == 0){
									$('#edit_unit').val(value.unit);
									$('#edit_price').val(value.price);
								}
								$('#edit_item').append($('<option>', {
									value : value.id,
									text : value.description
								}))
							})
						},
						error : function(errorw){
							alert('Error');
						}
		            });
				}
			});

			//IF THE EDIT ITEM DROPDOWN VALUE CHANGED
			$(document).on('change', '#edit_item', function(){
				var item_id = $('#edit_item').val();
				
				$.ajax({
					type : 'POST',
					url : '<?php echo base_url('Create_controller/getItemDetails'); ?>',
					data : { item_id : item_id },
					dataType : 'json',
					success : function(data){
						var item_data = data;
						
						$.each(item_data, function(index, value){
							if(index == 0){
								$('#edit_unit').val(value.unit);
								$('#edit_price').val(value.price);
							}
						})
					},
					error : function(errorw){
						alert('Error');
					}
	            });
			});
			
			//EDIT THE VALUES INSIDE THE EDIT ITEM MODAL FOR THE ROW SELECTED
			$('#edit_item_row').click(function(){
				var category_id = $('#edit_category').val(),
					category_text = $('#edit_category option:selected').text(),
					item,
					item_text,
					quantity = parseInt(document.getElementById('edit_quantity').value),
					unit = document.getElementById('edit_unit').value,
					price = parseFloat(document.getElementById('edit_price').value),
					jan = parseInt(document.getElementById('edit_jan').value),
					feb = parseInt(document.getElementById('edit_feb').value),
					mar = parseInt(document.getElementById('edit_mar').value),
					apr = parseInt(document.getElementById('edit_apr').value),
					may = parseInt(document.getElementById('edit_may').value),
					jun = parseInt(document.getElementById('edit_jun').value),
					jul = parseInt(document.getElementById('edit_jul').value),
					aug = parseInt(document.getElementById('edit_aug').value),
					sep = parseInt(document.getElementById('edit_sep').value),
					oct = parseInt(document.getElementById('edit_oct').value),
					nov = parseInt(document.getElementById('edit_nov').value),
					dec = parseInt(document.getElementById('edit_dec').value),
					subtotal = quantity*price,
					numberId = $('#edit_row').val();

				var total_qty = jan + feb + mar + apr + may + jun + jul + aug + sep + oct + nov + dec;

				if(category_id == null){
					alert('Please select a category');
				}
				else if(item == ""){
					alert('Please input an item specification');
				}
				else if(quantity == 0){
					alert('Please enter the item quantity.');
				}
				else if(price == 0){
					alert('Please enter the item price');
				}
				else if(quantity != total_qty){
					alert('Please distribute the quantities properly');
				}
				else{
					//IF THE CATEGORY IS INFRASTRUCTURE OR CONSULTANCY
					if((category_id == 1) || (category_id == 4)){
						item_text = $('#edit_item').val();
					}
					//ELSE IF THE CATEGORY IS GOODS AND SERVICES
					else if(category_id == 2){
						item_text = $('#edit_item option:selected').text();
					}
					//ELSE IF THE CATEGORY IS SEMINARS
					else{
						item_text = $('#edit_subcategory option:selected').text();
					}
					//REPLACE THE VALUES OF THE HIDDEN INPUT FIELDS
					$('#category_input' + numberId).val(category_id);
                	$('#item_input' + numberId).val(item_text);
                	$('#quantity_input' + numberId).val(quantity);
                	$('#unit_input' + numberId).val(unit);
                	$('#price_input' + numberId).val(price);
                	$('#jan_input' + numberId).val(jan);
                	$('#feb_input' + numberId).val(feb);
                	$('#mar_input' + numberId).val(mar);
                	$('#apr_input' + numberId).val(apr);
                	$('#may_input' + numberId).val(may);
                	$('#jun_input' + numberId).val(jun);
                	$('#jul_input' + numberId).val(jul);
                	$('#aug_input' + numberId).val(aug);
                	$('#sep_input' + numberId).val(sep);
                	$('#oct_input' + numberId).val(oct);
                	$('#nov_input' + numberId).val(nov);
                	$('#dec_input' + numberId).val(dec);

					//REPLACE THE TD TEXTS
					$('#category' + numberId).html(category_text);
					$('#item' + numberId).html(item_text);
					$('#quantity' + numberId).html(quantity);
					$('#unit' + numberId).html(unit);
					$('#price' + numberId).html(price);
					$('#jan' + numberId).html(jan);
					$('#feb' + numberId).html(feb);
					$('#mar' + numberId).html(mar);
					$('#apr' + numberId).html(apr);
					$('#may' + numberId).html(may);
					$('#jun' + numberId).html(jun);
					$('#jul' + numberId).html(jul);
					$('#aug' + numberId).html(aug);
					$('#sep' + numberId).html(sep);
					$('#oct' + numberId).html(oct);
					$('#nov' + numberId).html(nov);
					$('#dec' + numberId).html(dec);
					$('#subtotal' + numberId).html(subtotal);

					$('#edit_item_modal').modal('hide');
				}
			});

			$('#delete_item_row').click(function(){
				var row = $('#delete_row').val();

				$(row).remove();
				$('#delete_item_modal').modal('hide');
			});

			$('#submit_ppmp_button').on('click', function(){
				var project_title = $('#create_project_title').val();

				if($.trim(project_title) == ""){
					alert('Please input a title for the Project');
					return false;
				}
				else if(!$.trim( $('#tablebody').html() ).length){
					alert('Please input atleast one item for the project');
					return false;
				}
				else{
					return true;
				}
			});
		});
	</script>
</head>
<body>
	<div class="container-fluid">
		<h3>Create PPMP</h3>
		<form enctype="multipart/form-data" method="POST" action="<?php echo base_url('Create_controller/submitPPMP'); ?>" enctype="multipart/form-data">
			<div class="form-group">
				<label>
					End User/Unit:
				</label>
				<input id="create_office_name" class="form-control" name="create_office_name" type="text" value="<?php echo $office[0]->office; ?>" readonly/>
			</div>
			<div class="form-group">
				<label>
					Project/Title:
				</label>
				<input id="create_project_title" class="form-control" name="create_project_title" type="text"/>
			</div>

			<div>
				<button id="add_item_buttom" class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#add_item_modal">
					Add Item
				</button>
			</div>

			<br/>
			
			<div class="form-group">
				<table id="create_table" class="table">
					<thead>
						<tr>
							<th class="col-xs-2">
								Category
							</th>
							<th class="col-xs-2">
								Item Specification
							</th>
							<th class="col-xs-1">
								Quantity
							</th>
							<th class="col-xs-1">
								Unit
							</th>
							<th class="col-xs-2">
								Unit Price
							</th>
							<th class="col-xs-1">
								Jan
							</th>
							<th class="col-xs-1">
								Feb
							</th>
							<th class="col-xs-1">
								Mar
							</th>
							<th class="col-xs-1">
								Apr
							</th>
							<th class="col-xs-1">
								May
							</th>
							<th class="col-xs-1">
								Jun
							</th>
							<th class="col-xs-1">
								Jul
							</th>
							<th class="col-xs-1">
								Aug
							</th>
							<th class="col-xs-1">
								Sep
							</th>
							<th class="col-xs-1">
								Oct
							</th>
							<th class="col-xs-1">
								Nov
							</th>
							<th class="col-xs-1">
								Dec
							</th>
							<th class="col-xs-2">
								Subtotal
							</th>
							<th class="col-xs-1">
								
							</th>
							<th class="col-xs-1">
								
							</th>
						</tr>
					</thead>
					<tbody id="tablebody">					
					</tbody>
				</table>
			</div>
			<div>
				<button id="submit_ppmp_button" name="action" class="btn btn-primary btn-block" type="submit">
					Submit PPMP
				</button>
			</div>
		</form>
	</div>
	
	<div id="add_item_modal" class="modal" data-backdrop="" role="dialog">
	  	<div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      	<div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Add Item</h4>
		      	</div>
		      	<div class="modal-body">
		        	<div id="category_div" class="form-group">
						<label>
							Category
						</label>
						<select id="create_category" class="form-control" type="dropdown">
						</select>
					</div>
					<div id="subcategory_div">
					</div>
					<div id="item_div" class="form-group">
						<label>
							Item Specification
						</label>
						<select id="create_item" class="form-control" type="dropdown">
						</select>
					</div>

					<div class="form-group">
						<label>
							Quantity
						</label>
						<input id="create_quantity" class="form-control" type="number" value="0" min="0"/>
					</div>
					<div class="form-group">
						<label>
							Unit
						</label>
						<input id="create_unit" class="form-control" type="text"/>
					</div>
					<div class="form-group">
						<label>
							Unit Price
						</label>
						<input id="create_price" class="form-control" type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100"/>
					</div>
					
					<label>Schedule/Milestones</label>

					<div class="row">
						<div class="col-xs-24">
							<div class="form-group col-xs-8">
								<label>
									Jan
								</label>
								<input id="create_jan" class="form-control" type="number" value="0" min="0"/>
							</div>
							<div class="form-group col-xs-8">
								<label>
									Feb
								</label>
								<input id="create_feb" class="form-control" type="number" value="0" min="0"/>
							</div>
							<div class="form-group col-xs-8">
								<label>
									Mar
								</label>
								<input id="create_mar" class="form-control" type="number" value="0" min="0"/>
							</div>
						</div>

						<div class="col-xs-24">
							<div class="form-group col-xs-8">
								<label>
									Apr
								</label>
								<input id="create_apr" class="form-control" type="number" value="0" min="0"/>
							</div>
							<div class="form-group col-xs-8">
								<label>
									May
								</label>
								<input id="create_may" class="form-control" type="number" value="0" min="0"/>
							</div>
							<div class="form-group col-xs-8">
								<label>
									Jun
								</label>
								<input id="create_jun" class="form-control" type="number" value="0" min="0"/>
							</div>
						</div>

						<div class="col-xs-24">
							<div class="form-group col-xs-8">
								<label>
									July
								</label>
								<input id="create_jul" class="form-control" type="number" value="0" min="0"/>
							</div>
							<div class="form-group col-xs-8">
								<label>
									Aug
								</label>
								<input id="create_aug" class="form-control" type="number" value="0" min="0"/>
							</div>
							<div class="form-group col-xs-8">
								<label>
									Sep
								</label>
								<input id="create_sep" class="form-control" type="number" value="0" min="0"/>
							</div>
						</div>

						<div class="col-xs-24">
							<div class="form-group col-xs-8">
								<label>
									Oct
								</label>
								<input id="create_oct" class="form-control" type="number" value="0" min="0"/>
							</div>
							<div class="form-group col-xs-8">
								<label>
									Nov
								</label>
								<input id="create_nov" class="form-control" type="number" value="0" min="0"/>
							</div>
							<div class="form-group col-xs-8">
								<label>
									Dec
								</label>
								<input id="create_dec" class="form-control" type="number" value="0" min="0"/>
							</div>
						</div>
					</div>
		      	</div>
		      	<div class="modal-footer">
		        	<button id="create_add_row" type="button" class="btn btn-default">Add Item</button>
		      	</div>
		    </div>
	  	</div>
	</div>

	<div id="edit_item_modal" class="modal fade" role="dialog">
	  	<div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      	<div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Edit Item</h4>
		      	</div>
		      	<div class="modal-body">
		      		<div>
		      			<input id="edit_row" type="text" class="hidden"/>
		      		</div>
		        	<div id="edit_category_div" class="form-group">
						<label>
							Category
						</label>
						<select id="edit_category" class="form-control" type="dropdown">
						</select>
					</div>
					<div id="edit_subcategory_div">
					</div>
					<div id="edit_item_div" class="form-group">
						<label>
							Item Specification
						</label>
						<select id="edit_item" class="form-control" type="dropdown">
						</select>
					</div>

					<div class="form-group">
						<label>
							Quantity
						</label>
						<input id="edit_quantity" class="form-control" type="number" value="0" min="0"/>
					</div>
					<div class="form-group">
						<label>
							Unit
						</label>
						<input id="edit_unit" class="form-control" type="text"/>
					</div>
					<div class="form-group">
						<label>
							Unit Price
						</label>
						<input id="edit_price" class="form-control" type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100"/>
					</div>
					
					<label>Schedule/Milestones</label>

					<div class="row">
						<div class="col-xs-24">
							<div class="form-group col-xs-8">
								<label>
									Jan
								</label>
								<input id="edit_jan" class="form-control" type="number" value="0" min="0"/>
							</div>
							<div class="form-group col-xs-8">
								<label>
									Feb
								</label>
								<input id="edit_feb" class="form-control" type="number" value="0" min="0"/>
							</div>
							<div class="form-group col-xs-8">
								<label>
									Mar
								</label>
								<input id="edit_mar" class="form-control" type="number" value="0" min="0"/>
							</div>
						</div>

						<div class="col-xs-24">
							<div class="form-group col-xs-8">
								<label>
									Apr
								</label>
								<input id="edit_apr" class="form-control" type="number" value="0" min="0"/>
							</div>
							<div class="form-group col-xs-8">
								<label>
									May
								</label>
								<input id="edit_may" class="form-control" type="number" value="0" min="0"/>
							</div>
							<div class="form-group col-xs-8">
								<label>
									Jun
								</label>
								<input id="edit_jun" class="form-control" type="number" value="0" min="0"/>
							</div>
						</div>

						<div class="col-xs-24">
							<div class="form-group col-xs-8">
								<label>
									July
								</label>
								<input id="edit_jul" class="form-control" type="number" value="0" min="0"/>
							</div>
							<div class="form-group col-xs-8">
								<label>
									Aug
								</label>
								<input id="edit_aug" class="form-control" type="number" value="0" min="0"/>
							</div>
							<div class="form-group col-xs-8">
								<label>
									Sep
								</label>
								<input id="edit_sep" class="form-control" type="number" value="0" min="0"/>
							</div>
						</div>

						<div class="col-xs-24">
							<div class="form-group col-xs-8">
								<label>
									Oct
								</label>
								<input id="edit_oct" class="form-control" type="number" value="0" min="0"/>
							</div>
							<div class="form-group col-xs-8">
								<label>
									Nov
								</label>
								<input id="edit_nov" class="form-control" type="number" value="0" min="0"/>
							</div>
							<div class="form-group col-xs-8">
								<label>
									Dec
								</label>
								<input id="edit_dec" class="form-control" type="number" value="0" min="0"/>
							</div>
						</div>
					</div>
		      	</div>
		      	<div class="modal-footer">
		        	<button id="edit_item_row" type="button" class="btn btn-default">Edit Item</button>
		      	</div>
		    </div>
	  	</div>
	</div>

	<div id="delete_item_modal" class="modal fade" role="dialog">
	  	<div class="modal-dialog">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal">&times;</button>
	        		<h4 class="modal-title">Delete Item</h4>
	      		</div>
		      	<div class="modal-body">
		      		<input id="delete_row" class="hidden"/>
		        	<p>Do you really want to delete this item?</p>
		      	</div>
		      	<div class="modal-footer">
		      		<button id="delete_item_row" type="button" class="btn btn-default">Delete Item</button>
		      	</div>
	    	</div>
	  	</div>
	</div>
</body>
</html>