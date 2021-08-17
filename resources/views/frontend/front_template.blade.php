<!--

=========================================================
* Argon Dashboard - v1.1.1
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    WaWa Hotpot
  </title>

  <!-- csrf token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicon -->
  <link href="{{asset('template/assets/img/brand/favicon.png')}}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('template/assets/js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
  <link href="{{asset('template/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset('template/assets/css/argon-dashboard.css?v=1.1.1')}}" rel="stylesheet" />

  <!-- fontawesome -->
   <link href="{{asset('template/assets/fontawesome/css/all.min.css')}}" rel="stylesheet" />

   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

   <!-- datatabljs -->
   <link href="{{asset('template/assets/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  
 
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

 <link href="{{asset('template/assets/css/mine.css')}}" rel="stylesheet">



</head>

<body class="">
  
  <!-- navstart here -->
      @include('frontend.nav-side')
  <!-- end here -->
  <div class="main-content" style="flex:1.0 auto;">
    <!-- Navbar -->
    
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-danger pb-6 pt-3 pt-md-3">
      <div class="container-fluid ">
        <div class=" col-md-12 showTableCounter"></div>
        @include('frontend.four-card')
        <input type="hidden" name="counterNo">
      </div>
    </div>
    <div class="container-fluid bg-white ">

      @yield('content')
      
      <!-- Footer -->
      
    </div>
    <footer class="container-fluid  bg-default p-4">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-12">
            <div class="copyright text-center text-xl-center text-white">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold text-white ml-1" target="_blank">Aye Chan Oo</a>
            </div>
          </div>
         
        </div>
      </footer>
  </div>

  <!-- <div class="main-content bg-gradient-danger">
    <footer class="footer  bg-gradient-danger">
        <div class="row align-items-center justify-content-xl-between">
          <div class=" ">
            <div class="copyright text-center text-xl-center text-white text-md-center  text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold text-white ml-1" target="_blank">Aye chan oo</a>
            </div>
          </div>
          
        </div>
      </footer>
  </div> -->
  @include('frontend.modal')

  <!--   Core   -->
  <script src="{{asset('template/assets/js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('template/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!--   Optional JS   -->
  <script src="{{asset('template/assets/js/plugins/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('template/assets/js/plugins/chart.js/dist/Chart.extension.js')}}"></script>
  <!--   Argon JS   -->
  <script src="{{asset('template/assets/js/argon-dashboard.min.js')}}"></script>
  <script src="{{asset('template/assets/fontawesome/js/all.min.js')}}" type="text/javascript"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

   <script src="{{asset('template/assets/datatables/jquery.dataTables.js')}}"></script>

  <script src="{{asset('template/assets/datatables/dataTables.bootstrap4.js')}}"></script>




  <!-- <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script> -->
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });

    //   // $(window).scroll(function() {

    //   // if ( $(this).scrollTop() > 50 ) {
        
    //   //   $('.navbar').addClass('bg-transparent');
    //   // } 

    // });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
       $('#currycard').mouseenter(function(){
        document.body.style.cursor = 'pointer';
       })
       $('#currycard').mouseleave(function(){
        document.body.style.cursor = 'auto';
       })

       $('#meatcard').mouseenter(function(){
        document.body.style.cursor = 'pointer';
       })
       $('#meatcard').mouseleave(function(){
        document.body.style.cursor = 'auto';
       })

       $('#vegetablecard').mouseenter(function(){
        document.body.style.cursor = 'pointer';
       })
       $('#vegetablecard').mouseleave(function(){
        document.body.style.cursor = 'auto';
       })

       $('#seafoodcard').mouseenter(function(){
        document.body.style.cursor = 'pointer';
       })
       $('#seafoodcard').mouseleave(function(){
        document.body.style.cursor = 'auto';
       })

       $('div').on('click',function(){
        var t=this.id;
          if(t=='currycard'){
             $('#curry-list').removeClass('d-none');
            $('#seafood-list').addClass('d-none');
            $('#meat-list').addClass('d-none');
            $('#vegetable-list').addClass('d-none');

            }
           if(t=='meatcard'){
            //console.log('heloe');
           $('#meat-list').removeClass('d-none');
            $('#curry-list').addClass('d-none');
            $('#seafood-list').addClass('d-none');
            $('#vegetable-list').addClass('d-none')
          }
           if(t=='seafoodcard'){
           // console.log('whello')
           $('#seafood-list').removeClass('d-none');
            $('#curry-list').addClass('d-none');
            $('#meat-list').addClass('d-none');
            $('#vegetable-list').addClass('d-none')
          }
           if(t=='vegetablecard'){
            //console.log('helo world');
            $('#vegetable-list').removeClass('d-none');
            $('#curry-list').addClass('d-none');
            $('#seafood-list').addClass('d-none');
            $('#meat-list').addClass('d-none')
          }
       })




    })
  </script>
  <script src="{{asset('template/assets/js/mine.js')}}"></script>
  <script src="{{asset('template/assets/js/order.js')}}"></script>
  @yield('script')
  <script>
  
$(document).ready(function(){
	showCount();
	showTable();


	//for message showing
   toastr.options.closeButton = true;
         
     toastr.options.closeMethod = 'fadeOut';
     toastr.options.closeEasing = 'swing';
    toastr.options.closeHtml = '<button>x</button>';

	 //csrf token
   

          $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

//checkout
	$('.btn-checkOut').click(function(){
		var cartName=$('input[name="counterNo"]').val();
		var cart=localStorage.getItem(cartName);
		var cartobj=JSON.parse(cart);
		var total=0;
		var html='';var total1=0;
		var url="/checkout/";
		var totalqty=0;
		if(cartobj.length>0){
			$.each(cartobj,function(i,v){
				var subtotal=v.price* v.qty;
				total+=subtotal;
			})
				$.post(url,{
					data:cart,
					counter:cartName,
					total:total,
				},function(response){
					// console.log(response);
					var order=response.order;
					$('.voucher_no').html(`<b>${order.voucher_no}</b>`);
					$('.date').html(`<b>${order.date}</b>`);
					var orderdetail=response.orderdetail;

					

					toastr.options.closeDuration = 2300;
         
             		toastr.success( response.success);

             		$('#cart-preview').modal('hide');
             		localStorage.removeItem(cartName);
             			showCount();
             		$('#slip-modal').modal('show');

             		html=` <thead>
                            <tr>
                                <th>Description</th>
                                <th>Qty</th>
                                <th class="text-right">Price</th> 
                                <th class="text-right">Amount</th>
                            </tr>
                        </thead>
                        <tbody>`;
                        total=0;
                        $.each(orderdetail,function(i,v){

                        	total1+=v.qty* v.item.price;
                        	totalqty+=v.qty;
                        	html+=` <tr>
                                <td>${v.item.name}</td>
                                <td>${v.qty}</td> 
                                <td class="text-right">${v.item.price}</td>
                                <td class="text-right">${v.qty * v.item.price}</td>
                            </tr>`;
                        });
                           

                            var taxTotal=total1* 0.05;
                            console.log()
                            var totalround=(taxTotal+total1).toFixed(2);

                            console.log(totalround);
                           

                      html+=`</tbody>
                        <tfoot>
                             <tr>
                                <td>Total(Tax Inclusive)</td>
                                <td>${totalqty}</td>
                                <td colspan="2" class="text-right">${total1}</td>    
                            </tr>
                            <tr>
                                <td>5% Commerical Tax</td>
                                <td colspan="3" class="text-right">${taxTotal}</td>
                                   
                            </tr>

                              <tr>
                                <td>Rounding(MMK)</td>
                                <td colspan="3" class="text-right">${totalround}</td>
                                   
                            </tr>  
                            <tr>
                                <td colspan="4" class="text-center">Thank You! Please Come Again!</td>
                            </tr>
                        </tfoot>`;

                        $('#slip-table').html(html);
				});
		}
	});




	//add to cart creating
	$('.addtocard').hover(function(){
		//alert('hello');
		$(this).css('cursor','pointer');
	})

$('.addtocard').click(function(){
		var cartName=$('input[name="counterNo"]').val();

		if(cartName!=''){
				var id=$(this).data('id');
			var name=$(this).data('name');
			var price=$(this).data('price');
			var category=$(this).data('category');
			var photo=$(this).data('photo');
			var exit=0;
			var item={
			'id':id,
			'name':name,
			'price':price,
			'photo':photo,
			'category':category,
			'qty':1
			};
			// console.log(cart);
			if(cartName!=0){

				var mycart=localStorage.getItem(cartName);
				var cartobj=JSON.parse(mycart);
				if(!cartobj){
					cartobj=new Array();
				}else{
					$.each(cartobj,function(i,v){
						if(v.id==id){
							v.qty+=1;
							exit=1;
						}
					})

				}

				if(exit!=1){
					cartobj.push(item);
				}

				localStorage.setItem(cartName,JSON.stringify(cartobj));
				showCount();


			}
		}else{
			$('#error-modal-notification').modal('show');
		}
		
	})
})

function showCount(){

	var name=$('input[name="counterNo"]').val();
	var cart=localStorage.getItem(name);
	
	if(cart){
		var cartobj=JSON.parse(cart);
		//console.log((cartobj.length));
		$('.counting').html(cartobj.length);
	}else{
		$('.counting').html('');
	}
}

function showTable(){
	var url="/front/getCounter/";
	var html='';
	var showCount=$('#showCounter').val();
	$.get(url,function(response){
		html=`<div class="form-group row">
				    <label for="exampleFormControlSelect1" class="text-white text-center col-xl-12 col-form-label"><h2 class="text-white">Please Chose Counter No</h2></label>
				    <div class="col-md-6 offset-md-3"><select class="form-control" onchange="getval(this);" id="counterTable">
				    	<option value="0">Choose one....</option>
				    `;
		$.each(response,function(i,v){
			html+=` <option value="${v.name}">${v.name}</option>
				    `;
		});
		html+=`</select></div>
				  </div>`;

				  $('.showTableCounter').html(html);
				  //console.log('hloe');

				 // $('#showCounter').html(response.option).show().val(showCount)
		
		})

	//cart preview

	
	}

	$('.cart').click(function(){
			alert('helo');
			showCartTable();

		})

	function showCartTable(){
			//console.log('heo');
			$('#cart-preview').modal('show');
			var name=$('input[name="counterNo"]').val();
			$('.tableNo').html(name);
			$('.tableNo').addClass('text-warning');
			var cart=localStorage.getItem(name);
			var html='';var foot='';
			var k=1; var total=0;
			if(cart){
				var obj=JSON.parse(cart);
				$.each(obj,function(i,v){
					var subtotal=v.price * v.qty;
					total+=subtotal;
					html+=`
					<tr>
	                                <td>${k++}</td>
	                                <td>${v.name}</td>
	                                <td>${v.price}Kyats</td>	                               
	                                <td>
	                                    <button class="btn btn-sm btn-primary btn-decrease" data-id=${i}><i class="ni ni-fat-delete"></i></button>
	                                    <span class="d-inline-block mr-1">${v.qty}</span>
	                                    <button class="btn btn-sm btn-success btn-increase" data-id=${i}><i class="ni ni-fat-add"></i></button>
	                                </td>
	                                 <td>${subtotal}</td>
	                                <td>
	                                    <button class="btn btn-sm btn-danger btn-delete" data-id=${i}><i class="ni ni-fat-remove"></i></button>
	                                </td>

	                            </tr>
					`
				});

				html+=` <tr>
                                <td colspan="4" class="text-right pr-6">Total Amount</td>
                                <td colspan="2">${total} Kyats</td>
                            </tr>`;

				$('#cart-table').html(html);

			}else{
				$('#cart-table').html('');
			}
	}

	//cart qty increase

	$('#cart-table').on('click','.btn-increase',function(){
		// alert('hloe');
		var key=$(this).data('id');
		var name=$('input[name="counterNo"]').val();
		var cart=localStorage.getItem(name);
		if(cart){
			 var cartobj=JSON.parse(cart);
			 $.each(cartobj,function(i,v){
			 	if(i==key){
			 		++v.qty;
			 	}
			 })

			 localStorage.setItem(name, JSON.stringify(cartobj));
			 showCount();
			 showCartTable();
		}
	})

	//cart qty decrease
	$('#cart-table').on('click','.btn-decrease',function(){
		// alert('hloe');
		var key=$(this).data('id');
		var name=$('input[name="counterNo"]').val();
		var cart=localStorage.getItem(name);
		if(cart){
			 var cartobj=JSON.parse(cart);
			 $.each(cartobj,function(i,v){
			 	if(i==key){
			 		--v.qty;
			 		if(v.qty==0){
			 			cartobj.splice(i,1);

			 		}
			 	}
			 })

			 localStorage.setItem(name, JSON.stringify(cartobj));
			 cart=localStorage.getItem(name);
			 var obj=JSON.parse(cart);
			 if(obj.length>0){
			 	
			 	showCartTable();
				}else{
					localStorage.removeItem(name);
					$('#cart-preview').modal('hide');

				}

				showCount();
		}
	})

	// delete cart on table
	$('#cart-table').on('click','.btn-delete',function(){
		// alert('hello');
		var key=$(this).data('id');
		var name=$('input[name="counterNo"]').val();
		var cart=localStorage.getItem(name);
		if(cart){
			var cartobj=JSON.parse(cart);
			 $.each(cartobj,function(i,v){
			 	if(i==key){
			 		cartobj.splice(i,1);
			 	}
			 })
			 localStorage.setItem(name, JSON.stringify(cartobj));

				 cart=localStorage.getItem(name);
				 var obj=JSON.parse(cart);
				 if(obj.length>0){
				 	
				 	showCartTable();
					}else{
						localStorage.removeItem(name);
						$('#cart-preview').modal('hide');

					}

					showCount();
			 
		}
	})

	$('.btn-clear').click(function(){
		// alert('helo');

		var name=$('input[name="counterNo"]').val();
		var cart=localStorage.getItem(name);
		if(cart){
			localStorage.removeItem(name);
		}
		showCount();
		$('#cart-preview').modal('hide');

		
	})

function getval(item){
	var name=item.value;
	//console.log(name);
	$('input[name="counterNo"]').val(name);
	showCount();
	//showCartTable();
}






  </script>

</body>

</html>