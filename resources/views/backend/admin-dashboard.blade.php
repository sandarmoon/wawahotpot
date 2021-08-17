@extends('backend/backend_dashboard_template')
@section('card')
	<div class="row pt-2">
        

        <div class="col-md-12 p-0 ">
          
          <div class="row ">
            <div class="col-xl-8 mb-5 mb-xl-0">
              <div class="card shadow">
                <div class="card-header border-0">
                  <div class="row align-items-center">
                    <div class="col">
                      <h2 class="mb-0 text-uppercase">Search Here for Profit</h2>
                    </div>
                    <div class="col text-right">
                      <!-- <a href="#!" class="btn btn-sm btn-primary">See all</a> -->
                    </div>
                  </div>
                </div>
                <div class="row p-3">
                      <div class="col-md-4">
                          <!-- from start -->
                            <form id="search" method="post">
                              <div class="alert alert-primary success d-none" role="alert">
                                  
                               </div>
                                <div class="form-group">
                                  <label for="startDate">Start Date</label>
                                  <input type="date" name="startdate" id="startDate" placeholder="enter Start date" class="d-inline form-control ">
                                  <span class="Sdate error" ></span>
                                </div>

                                <div class="form-group">
                                  <label for="endDate">End Date</label>
                                  <input type="date" name="enddate" id="endDate" placeholder="enter End date" class="d-inline form-control ">
                                  <span class="Edate error" ></span>
                                </div>
                                
                                
                                <div class="form-group">
                                  <button type="submit" class="btn btn-primary border-dark form-control ">Search Now</button>
                                </div>
                              </form>
                            <!-- from end -->
                      </div>
                      <div class="col-md-8 text-center">
                          
                          <div class="mt-3">
                            <h3>Report of Search</h3>
                            <div class="form-group">
                                  
                              <p><b>Total Expense</b> Amount: <span class="totalExpense"></span>kyats</p>
                              
                            </div>

                             <div class="form-group">
                                  
                              <p><b>Total Income</b> Amount:  <span class="totalIncome"></span>kyats</p>
                         
                              
                            </div>

                            <div class="form-group">
                              
                               <p><b>Total Profit</b> Amount:  <span class="totalProfit"></span>kyats</p>

                            </div>

                          </div>
                      </div>

                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="card shadow">
                <div class="card-header border-0">
                  <div class="row align-items-center">
                    <div class="col">
                      <h2 class="mb-0 text-uppercase">Sale Report</h2>
                    </div>
                    
                  </div>
                </div>
                <div class="table-responsive">
                  <canvas id="pie-chart" height="300"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-12 mb-5 mt-3 mb-xl-0 p-0">
          <div class="col-xl-12 p-0">
              <div class="card shadow">
                <div class="card-header border-0">
                  <div class="row align-items-center">
                    <div class="col">
                      <h3 class="mb-0 text-uppercase">Expense List</h3>
                     
                    </div>
                    
                       <div class="col alert alert-success success d-none" role="alert">
              
                      </div>
                    
                    <div class="col text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addExpense">
                    Add Expense!
                  </button>
                    </div>
                  </div>
                </div>
                <div class="table-responsive p-2">
                  <!-- Projects table -->
                  <table class="table align-items-center table-flush" id="expenseTable">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Date</th>
                        <th scope="col">Description</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody id="">
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
        </div>
          <!-- order table -->
          <div class="col-xl-12 mt-3 p-0">
              <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0 text-uppercase">Order List</h3>
                 
                </div>
                
                   <div class="col alert alert-success success d-none" role="alert">
          
                  </div>
                
                <div class="col text-right">
                
                </div>
              </div>
            </div>
            <div class="table-responsive p-2">
              <!-- Projects table -->
              <table class="table align-items-center table-flush" id="ordertable">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Date</th>
                    <th scope="col">VoucherNo</th>
                    <th scope="col">total</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                  
                </tbody>
              </table>
            </div>
          </div>
          </div>

        
        

  </div>

    <!-- Add Model -->
<div class="modal fade" id="addExpense" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Add Expense</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- form start -->
      <form id="expense-from" method="post" enctype="multipart/form-data">
          <div class="modal-body p-2">
              
                
              
                <div class="col-md-12">
                    <div class="form-group ">
                      <input type="date" name="date" placeholder="" class="form-control is-valid" />
                      
                    </div>
                  </div>



                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" name="description" class="form-control" id="description" placeholder="why use?" />
                       <span class="description error "></span>
                    </div>
                   
                    
                  </div>
                  
                
               
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="amount">Amount</label>
                      <div class="input-group ">
                        
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni  ni-credit-card"></i></span>
                        </div>
                         <input class="form-control" name="amount" id="amount" placeholder="$$$" type="text">

                      </div>

                        <span class="amount error "></span>
                       
                    </div>
                  </div>
                  

                
                
                  <div class="col-md-12">
                    <div class="form-group remove1">
                      <label for="Recepits" class="d-block">Recepits</label>
                      <input type="file" name="file1" id="Recepits" placeholder="Success" class=" " />
                     <!--  <button type="button"  class="btn btn-danger btn-sm float-right delete1" data-id="1" ><span>×</span></button> -->
                    </div>
                    
                  </div>
                  
                    <div class="col-md-12 a" >
                      
                    </div>
                  

                  <div class="col-md-12" title="add more Recepits">
                      <button onclick="JavaScript:addmore(0);" type="button" class="btn btn-success" >
                      <i class="ni ni-fat-add "></i>
                      </button>
                    </div>
                
             
            
              
          </div>
          <div class="modal-footer ">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary " value="Add Expense"/>
          </div>
      </form>
      <!-- form end -->
    </div>
  </div>
</div>
      <!-- modal end -->

          <!-- Edit Modal -->
<div class="modal fade" id="editExpense" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Add Expense</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- form start -->
      <form id="expense-from-edit" method="post" enctype="multipart/form-data">
          <div class="modal-body p-2">
              
                <!-- old id -->
                <input type="hidden" name="oldid" id="oldID">
              
                <div class="col-md-12">
                    <div class="form-group ">
                      <input type="date" name="date" id="edate" class="form-control is-valid" />
                    </div>
                  </div>



                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="edescription">Description</label>
                      <input type="text" name="description" id="edescription" class="form-control" id="description" placeholder="why use?">
                      <span class="edescription error "></span>
                    </div>
                  </div>
                  
                
               
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="eamount">Amount</label>
                      <div class="input-group">
                        
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni  ni-credit-card"></i></span>
                        </div>
                        <input class="form-control" name="amount" id="eamount" placeholder="$$$" type="text">
                      </div>
                      <span class="eamount error "></span>
                    </div>
                  </div>

                  <div class="col-md-12 my-4">
                    <label for="eRecepits" class="d-block">Recepits</label>
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#oldRecepits" role="tab" >Old</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#newRecepits" role="tab" >New</a>
                      </li>
                      
                      </ul>
                      <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="oldRecepits" role="tabpanel" aria-labelledby="home-tab">I am old photo</div>
                      <div class="tab-pane fade" id="newRecepits" role="tabpanel" aria-labelledby="profile-tab">
                        
                         <div class="col-md-12 mt-2">
                            <div class="form-group remove1">
                              
                              <input type="file" name="file1" id="eRecepits" placeholder="Success" class=" " />
                             <!--  <button type="button"  class="btn btn-danger btn-sm float-right delete1" data-id="1" ><span>×</span></button> -->

                             <!-- old image -->
                             <input type="hidden" name="oldimage" id="oldimage">

                            </div>
                            
                          </div>
                          
                            <div class="col-md-12 Edit">
                              
                            </div>
                          

                          <div class="col-md-12" title="add more Recepits">
                              <button onclick="JavaScript:addmoreEdit(0);" type="button" class="btn btn-success" >
                              <i class="ni ni-fat-add "></i>
                              </button>
                            </div>

                      </div>
                      
                      </div>
                  </div>
                  

                
                
                 
                
             
            
              
          </div>
          <div class="modal-footer ">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary " value="Update Expense"/>
          </div>
      </form>
      <!-- form end -->
    </div>
  </div>
</div>
      <!-- modal end -->

         <!-- slip modal start here -->
   <div class="modal fade " id="slip-modal-backend" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-dialog-srcollable  modal-md" role="document">
        <div class="modal-content bg-white">
                
            <div class="text-dark text-center">
                <h1 class="mt-2 d-inline">ShuSha Hotpot</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger display-2">×</span>
                </button>
                <p class="m-0">No(158/A) Insein Road,Hlaing Township</p>
                <p>(Phone) 09 44 89 444 01-02</p>

                <p class="m-0">Casher:Aye Chan Oo</p>

                <p class="m-0">Order No:<span class="voucher_no">SKD-5529</span></p>
                <p>Date & Time:<span class="date">13/03.2020 5:37 </span></p>
                

                
            </div>
            
            <div class="modal-body py-0">
                <div class="container-fluid m-0 p-0">
                    <table class="table my-custom-scrollbar table-wrapper-scroll-y" id="slip-table-backend">
                       
                </table>
                </div>
              
                
                
            </div>
            
             
        </div>
    </div>
  </div>
   <!-- modal end here -->
@endsection
@section('script')
<script type="text/javascript">
   getData();
   getOrder();
  
//get today date with js start
  var date = new Date();

  var day = date.getDate();
  var month = date.getMonth() + 1;
  var year = date.getFullYear();

  if (month < 10) month = "0" + month;
  if (day < 10) day = "0" + day;

  var today = year + "-" + month + "-" + day;


  document.querySelector('#expense-from input[type="date"]').value = today;
  // end date

   $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    toastr.options.closeButton = true;
         
     toastr.options.closeMethod = 'fadeOut';
     toastr.options.closeEasing = 'swing';
    toastr.options.closeHtml = '<button>x</button>';


  $('#expense-from').submit(function(e){
      e.preventDefault();
      var formdata= new FormData(this);
      var url="{{route('expense.store')}}";
      // formData.append('_method', 'PUT');
          $.ajax({
                type:'POST',
                url: url,
                data: formdata,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                   $('#addExpense').modal('hide');
                        getData();
                   toastr.options.closeDuration = 2300;
         
             toastr.success( "successfully added!");
                         i=2;
                       
                },
                error: function(error){
                   var errors=error.responseJSON.errors;
                   if(errors){
                   
                    $('.date').text(errors.name);
                    $('.description').text(errors.description);
                     $('.amount').text(errors.amount);
                    $('span.error').addClass('text-danger');
                   }
                }
            });

         
    })

  var i=2;

 //adding more file for add_from
  function addmore(){
    console.log(i);
    console.log("make");
    
    var btn= `<div class="form-group remove${i}">
                       <label for="Recepits" class="d-block">Recepits</label>
                       <input type="file" name="file${i}" data-id="${i}" id="Recepits" placeholder="Success" class="" />
                       <button type="button"  class="btn btn-danger btn-sm float-right delete" data-id="${i}" ><span>×</span></button>
                   </div>`;
                   i++;


                  document.querySelector('.a').innerHTML+=btn;
  }

  //adding more file for edit_from
  function addmoreEdit(){
    console.log(i);
    console.log("make");
    
    var btn= `<div class="form-group remove${i}">
                       <label for="Recepits" class="d-block">Recepits</label>
                       <input type="file" name="file${i}" data-id="${i}" id="Recepits" placeholder="Success" class="" />
                       <button type="button"  class="btn btn-danger btn-sm float-right delete" data-id="${i}" ><span>×</span></button>
                   </div>`;
                   i++;


                  document.querySelector('.Edit').innerHTML+=btn;
  }

//deleting file for add_from

    $('.a').on('click','.delete',function(){
        var id=$(this).data('id');
        $(`.remove${id}`).remove();
    })


//show edit form of expense
    $('#expenseTable').on('click','.btnEdit',function(){
      // alert('i am edit');
        var id=$(this).data('id');
        var url="{{route('expense.show',':id')}}";
        url=url.replace(':id', id);
        $.get(url,function(response){
          var data=response.data;
          var description=data.description;
          var amount=data.amount;
          var date=data.date;
          var files=data.files;
         
          $('#edate').val(date);
          $('#edescription').val(description);
          $('#eamount').val(amount);
          // console.log(files);
          showImage('#oldRecepits',files)




           $('#eamount').val(amount);
           $('#oldimage').val(JSON.stringify(files));
           $('#oldID').val(id);
         $('#editExpense').modal('show');
        })
        

     // var url="{{route('expense.edit',':id')}}";
    })

    //image show after deleting one by one

      function showImage(palcement,files){
          var html2='';
          console.log(files);
          var arrayfiles=JSON.parse(files);
              $.each(arrayfiles,function(i,v){
                var frame= `
                <div class="d-inline parent my-2">
                    <img src="{{asset(':v')}}" width ='100px' height="80px" class="img-fluid p-2"/>
                    <div  class="top-right d-inline text-danger  img-remove" data-id="${i}">
                       <i class="ni ni-fat-remove" title="delete it!"></i>
                    </div>
                </div>

                  
                `;

                frame=frame.replace(':v',v);
                html2+=frame;
              })

              $(palcement).html(html2);
      }

//image delete by one by one on edit form

    $('#oldRecepits').on('click','.img-remove',function(e){
        e.preventDefault();
      var id=$(this).data('id');
      var files=$('.btnEdit').data('files');
        files.splice(id, 1);
        showImage('#oldRecepits',files);
         $('#oldimage').val(JSON.stringify(files));
      
    })

    //deleting file for edit_from

     $('.Edit').on('click','.delete',function(){
        var id=$(this).data('id');
        $(`.remove${id}`).remove();
    })

      //edit expense
    $('#expense-from-edit').submit(function(e){
      e.preventDefault();
      var id=$('#oldID').val();
      var formdata= new FormData(this);
      var url="{{route('expense.update',':oldID')}}";
      url=url.replace(':oldID',id);
      formdata.append('_method', 'PUT');
          $.ajax({
                type:'POST',
                url: url,
                data: formdata,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                  $('#editExpense').modal('hide');
                        getData();
                   $('.success').removeClass('d-none');
                    $('.success').addClass('text-danger');
                        $('.success').show();
                        $('.success').text('successfully updated');
                        $('.success').fadeOut(3000);
                          i=2;
                        
                },
                error: function(error){
                   $('.edate').text(errors.name);
                    $('.edescription').text(errors.description);
                     $('.eamount').text(errors.amount);
                    $('span.error').addClass('text-danger');
                }
            });

          
    })


 
     function getData(){
      console.log('you make it');

      $.get("{{route('getExpense')}}",function(response){
        //console.log(response);
        var j=1;
        var html='';
        var cost=response.expenses.original.data;
        $('#expenseTable').DataTable({
          "destroy":true,
                "sort":false,
                 paging: true,
                searching: true,
                pagingType: 'full_numbers',
                 pageLength: 5,
                 language: {
                   oPaginate: {
                     sNext: '<i class="fa fa-forward"></i>',
                     sPrevious: '<i class="fa fa-backward"></i>',
                     sFirst: '<i class="fa fa-step-backward"></i>',
                     sLast: '<i class="fa fa-step-forward"></i>'
                     }
                   } ,
                   
                  // "stateSave": true,  //restore table state on page reload,
                 "lengthMenu": [[10, 20, 50, -1], [10, 20, 50, "All"]],
          data:cost,
          columns:[
            {data:'DT_RowIndex'},
            {data:'date'},
            {data:'description'},
            {data:'amount'},
            {data:'id',
                  render:function(data){
                  return `<button class="btn btn-primary btn-sm d-inline-block btnEdit " data-id="${data}"><i class="ni ni-settings"></i></button>
                            <button class="btn btn-danger btn-sm d-inline-block btn-Delete" data-id="${data}"> <i class="ni ni-fat-delete"></i></button> `

                }}
          ]
        })
       

       var obj=response.report;
       var ctx = $("#pie-chart");
        //console.log(obj);
       // start here
          var data={
            labels:obj.label,
            datasets:[
              {
                label:"last Month Report",
                data:obj.data,
                backgroundColor: [
              "#52DF26",
              "#FFEC00",
              "#FF7300",
              "#FF0000",
              "#007EDC",
              "#7CDDDD",
              
            ],
            borderColor: [
              "#CDA776",
              "#989898",
              "#CB252B",
              "#E39371",
              "#1D7A46",
              "#F4A460",
             
            ],
            borderWidth: [1, 1, 1, 1, 1,1]
              }
            ]
          }

          //options
      var options = {
            responsive: false,
            title: {
              display: true,
              position: "top",
              text: "Last Six Month Sale Count",
              fontSize: 14,
              fontColor: "#000"
            },
            legend: {
              display: true,
              position: "bottom",
              labels: {
                fontColor: "#333",
                fontSize: 14
              }
            }
          };

          var chart1 = new Chart(ctx, {
            type: "pie",
            data: data,
            options: options
          });
         
         
      
      // end here
      })
    }

    //deleteing expense
    $('#expenseTable').on('click','.btn-Delete',function(){
      // alert('helo');
         if(confirm('Are you sure to delete?')){
           var id=$(this).data('id');
            console.log(id);
             var url="{{route('expense.destroy',':id')}}";
            
             url=url.replace(':id',id);

                 $.ajax({
                    url:url,
                    type:"post",
                    data:{"_method": 'DELETE'},
                    dataType:'json',
                    success:function(res){
                      if(res.success){
                      toastr.options.closeDuration = 2300;
         
                      toastr.success( res.success);
                          getData();

                      }},
                      

                  });
        }
    })
//search submitting
    $('#search').submit(function(e){
    e.preventDefault();
    // alert('helo');
     var formdata= new FormData(this);
    var startdate=$('#search input[name="startdate"]').val();
    var enddate=$('#search input[name="enddate"]').val();
    // console.log(startdate,enddate);
      var url="{{route('searchReport')}}";
      $.ajax({
                type:'POST',
                url: url,
                data: formdata,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                   if(data){
                    var expense=data.totalExpense;
                    var income=data.totalIncome;
                    var profit=income-expense;
                    $('.totalExpense').text(expense);
                    $('.totalIncome').text(income);
                    $('.totalProfit').text(profit);
                    $('.totalExpense').addClass('text-dark');
                    $('.totalIncome').addClass('text-dark');
                    $('.totalProfit').addClass('text-dark');
                   }
                       
                },
                error: function(error){
                   var errors=error.responseJSON.errors;
                   if(errors){
                      $('.Sdate').text(errors.startdate);
                      $('.Edate').text(errors.enddate);
                      $('span.error').addClass('text-danger');
                   }
                }
            });

     



  })


    //start here order
     function getOrder(){
    var url="{{route('getOrder')}}";
    $.get(url,function(response){
      var data=response.original.data;
      $('#ordertable').DataTable({
        'destroy':true,
        "sort":false,
       paging: true,
      searching: true,
      pagingType: 'full_numbers',
       pageLength: 15,
       language: {
         oPaginate: {
           sNext: '<i class="fa fa-forward"></i>',
           sPrevious: '<i class="fa fa-backward"></i>',
           sFirst: '<i class="fa fa-step-backward"></i>',
           sLast: '<i class="fa fa-step-forward"></i>'
           }
         } ,
         
        // "stateSave": true,  //restore table state on page reload,
       "lengthMenu": [[10, 20, 50, -1], [10, 20, 50, "All"]],
        data:data,
        columns:[
        {data:'DT_RowIndex'},
        {data:'date'},
        {data:'voucher_no'},
        {data:'total'},
        {
                data: null,
                render: function ( data, type, row ) {
                    // Combine the first and last names into a single table field
                       return `
           <button class="btn btn-success btn-sm d-inline-block btn-Detail " data-id="${data.id}" data-v="${data.voucher_no}" data-date="${data.date}"><i class="ni ni-collection"></i></button>
                            <button class="btn btn-danger btn-sm d-inline-block btn-Delete" data-id="${data.id}"> <i class="ni ni-fat-delete"></i></button> `;
                },
                editField: ['first_name', 'last_name']
            },
        
        ]
      })
    })
    
  }

  $('#ordertable').on('click','.btn-Delete',function(){
    var id=$(this).data('id');
      var url="{{route('orderDestory',':id')}}";
      url=url.replace(':id',id);

                $.get(url,function(res){
                  getOrder();
                  toastr.options.closeDuration = 1000;
         
                toastr.success( res.success);
                  
                })
 })


    $('#ordertable').on('click','.btn-Detail',function(){
        var voucher_no=$(this).data('v');
        var date=$(this).data('date');
        var html='';var total1=0; var totalqty=0;
        var url="{{route('getOrderDetailByV')}}";
          $.post(url,{voucher:voucher_no},function(res){
            var detail=res.orderDetail;
            $('#slip-modal-backend').modal('show');
              $('.voucher_no').html(`<b>${voucher_no}</b>`);
            $('.date').html(`<b>${date}</b>`);
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
                          $.each(detail,function(i,v){

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

                          $('#slip-table-backend').html(html);
              })
          
       })
</script>
@endsection