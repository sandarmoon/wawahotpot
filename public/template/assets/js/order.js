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