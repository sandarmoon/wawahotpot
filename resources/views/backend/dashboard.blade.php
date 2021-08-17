@extends('backend/backend_template')
@section('card')
	    <div class="col-xl-12 mb-5 mt-3 mb-xl-0">
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
  $(document).ready(function(){
     getOrder();
      toastr.options.closeButton = true;
         
     toastr.options.closeMethod = 'fadeOut';
     toastr.options.closeEasing = 'swing';
    toastr.options.closeHtml = '<button>x</button>';
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

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

    })

  //delete
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
</script>
@endsection
