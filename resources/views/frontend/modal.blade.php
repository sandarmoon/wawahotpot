
      
      <!-- modal start here -->
   <div class="modal fade " id="cart-preview" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-dialog-centered modal-lg" role="document">
        <div class="modal-content bg-gradient-dark">
                
            <div class="modal-header">

                <h2 class="modal-title" id="modal-title-notification">
                  Counter No:<span class="tableNo d-inline-block ml-1"></span>
                </h2>
                <h2 class="modal-title ml-8" id="modal-date-notification">
                    Data: <span class=" d-inline-block ml-1">12.5.2020</span>
                </h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <div class="modal-body">
               <div class="">
                    <table class="table">
                        <thead class="text-justify">
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>qty</th>
                                <th>Subtotal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="cart-table">
                            
                        </tbody>
                       
                    
                    </table>
               </div>
                
                
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-clear">Clear all</button>
                <button type="button" class="btn bg-gradient-success text-gray-dark btn-checkOut ml-auto">Check Out</button>
                
            </div>
            
        </div>
    </div>
  </div>
   <!-- modal end here -->


       <!-- slip modal start here -->
   <div class="modal fade " id="slip-modal" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
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
                    <table class="table my-custom-scrollbar table-wrapper-scroll-y" id="slip-table">
                       
                </table>
                </div>
              
                
                
            </div>
            
             
        </div>
    </div>
  </div>
   <!-- modal end here -->

 

<!--  Modal -->
<div class="modal fade" id="slip-modals" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
     <div class="modal-content bg-white">
                
            <div class="text-dark text-center">
                <h1 class="mt-2">ShuSha Hotpot</h1>
                <p class="m-0">No(158/A) Insein Road,Hlaing Township</p>
                <p>(Phone) 09 44 89 444 01-02</p>

                <p class="m-0">Casher:Aye Chan Oo</p>

                <p class="m-0">Order No:SKD-5529</p>
                <p>Date & Time:13/03.2020 5:37 PM</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger">×</span>
                </button>
                

                
            </div>
      <div class="modal-body">
            <table class="table table-responsive text-dark table-wrapper-scroll-y my-custom-scrollbar">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Qty</th>
                        <th class="text-right">Price</th> 
                        <th class="text-right">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Prok Marlar</td>
                        <td>1</td> 
                        <td class="text-right">2400</td>
                        <td class="text-right">2400</td>
                    </tr>
                    <tr>
                        <td>Prok Marlar</td>
                        <td>1</td> 
                        <td class="text-right">2400</td>
                        <td class="text-right">2400</td>
                    </tr>
                    <tr>
                        <td>Prok Marlar</td>
                        <td>1</td> 
                        <td class="text-right">2400</td>
                        <td class="text-right">2400</td>
                    </tr>
                    <tr>
                        <td>Prok Marlar</td>
                        <td>1</td> 
                        <td class="text-right">2400</td>
                        <td class="text-right">2400</td>
                    </tr>
                    <tr>
                        <td>Prok Marlar</td>
                        <td>1</td> 
                        <td class="text-right">2400</td>
                        <td class="text-right">2400</td>
                    </tr>
                    <!-- start here -->
                   

                </tbody>
                <tfoot>
                     <tr>
                        <td>Total(Tax Inclusive)</td>
                        <td>1</td>
                        <td colspan="2" class="text-right">2400</td>    
                    </tr>
                    <tr>
                        <td>5% Commerical Tax</td>
                        <td colspan="3" class="text-right">252.38</td>
                           
                    </tr>

                    <tr>
                        <td>Total Discount</td>
                        <td colspan="3" class="text-right">0.00</td>       
                    </tr>

                    <tr>
                        <td>Rounding(MMK)</td>
                        <td colspan="3" class="text-right">0.00</td>    
                    </tr>

                    <tr>
                        <td colspan="4" class="text-center">Thank You! Please Come Again!</td>
                    </tr>
                </tfoot>
            </table>
      </div>
      
    </div>
  </div>
</div>

  


