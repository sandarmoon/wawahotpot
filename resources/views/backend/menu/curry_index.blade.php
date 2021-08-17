@extends('backend/backend_template')
@section('card')



        <!-- meat card create start -->
        <div class="container-fluid  card bg-secondary shadow mt-3" id="create-form">
          <div class="alert alert-success d-none">
                <span class="message"></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="row">

            

            <div class="col-md-6" >
               <h2 class="heading-large text-nowrap text-center mt-2">ADD NEW <b>CURRY</b> POT</h2>
            <form class="create-form" method="post" enctype="multiple/form-data">
              <input type="hidden" name="category_id" value="4">
              <input type="hidden" name="folderName" value="curry">
               <div class="col-md-12">
                  <label class="form-control-label" for="customFileLang">
                          Photo
                        </label>
                    <div class="form-group">
                      <input type="file" name="photo" class="form-control error" id="customFileLang"> 
                    </div>
                  </div>

                  <div class="col-md-12">
                    <label class="form-control-label" for="input-meat-name">
                        Name
                      </label>
                    <div class="form-group">
                      
                      <input type="text" name="name" id="input-meat-name" class="form-control form-control-alternative error" placeholder="First name" >
                    </div>
                  </div>

                  <div class="col-md-12">
                    <label class="form-control-label" for="input-price-name">Price </label>
                    <div class="form-group">
                      <input type="text" name="price" id="input-price-name" class="form-control form-control-alternative error">
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <input type="submit"  class="form-control bg-primary text-white"  value="Add New!">
                  </div>

            </form>      
                
            </div>
           
            <div class="col-md-3 p-4 offset-md-1">
                
                
              <h3>Preview of new Plate</h3>
                    <div class="card shadow">

                      <div class="card-img-top">
                         <img src="{{asset('template/assets/img/theme/team-4-800x800.jpg')}}"  class="preview" width="216px" height="230px">
                       </div>
                       <h2 class="text-center mt-3 name-pre">--------</h2>
                      <h3 class="text-center price-pre">K$$$$</h3>
                      
                    </div>
                  
                
                   
                
                
            </div>

          </div>

        </div>
        <!-- meat card create end -->

        <!-- meat card edit start -->
        <div class="container-fluid d-none card bg-secondary shadow mt-3" id='edit-form'>
          <div class="alert alert-success d-none">
                <span class="message"></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="row">

            

            <div class="col-md-6" >
               <h2 class="heading-large text-nowrap text-center mt-2">
               EDITING THE PLATE</h2>

                <input type="hidden" name="category_id" value="4">
              <input type="hidden" name="folderName" value="curry">

            <form class="edit-form" method="post" enctype="multiple/form-data">
               <div class="col-md-12">
                  <label class="form-control-label" for="customFileLang">
                          Photo
                        </label>
                    <div class="form-group error">
                      <input type="file" name="ephoto" class="form-control " id="customFileLang"> 
                    </div>
                  </div>

                  <input type="hidden" name="oldphoto" >
                  <input type="hidden" name="oldid" >

                  <div class="col-md-12">
                    <label class="form-control-label" for="input-meat-name">
                        Name
                      </label>
                    <div class="form-group error">
                      
                      <input type="text" name="ename" id="input-meat-name" class="form-control form-control-alternative error" placeholder="First name" >
                    </div>
                  </div>

                  <div class="col-md-12">
                    <label class="form-control-label" for="input-price-name">Price </label>
                    <div class="form-group error">
                      <input type="text" name="eprice" id="input-price-name" class="form-control form-control-alternative error">
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <input type="submit"  class="btn form-control bg-primary text-white"  value="Update Now!">
                    
                  </div>

            </form>      
           <div class="col-md-12 mb-2">
              <button class="btn btn-danger form-control btn-cancel">Cancel & Add New!</button>
           </div>
                
            </div>
           
            <div class="col-md-3 p-4 offset-md-1">

              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Old Photo</a>

                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New Photo</a>
                </li>
                
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  
                    <h3>Preview of new Plate</h3>
                    <div class="card shadow">

                      <div class="card-img-top">
                         <img src="{{asset('template/assets/img/theme/team-4-800x800.jpg')}}"  class="old-preview" width="216px" height="230px">
                       </div>
                       <h2 class="text-center mt-3 old-name-pre">--------</h2>
                      <h3 class="text-center old-price-pre">K$$$$</h3>
                      
                    </div>

                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3>Preview of new Plate</h3>
                    <div class="card shadow">

                      <div class="card-img-top">
                         <img src="{{asset('template/assets/img/theme/team-4-800x800.jpg')}}"  class="new-preview" width="216px" height="230px">
                       </div>
                       <h2 class="text-center mt-3 new-name-pre">--------</h2>
                      <h3 class="text-center new-price-pre">K$$$$</h3>
                      
                    </div>
                </div>
                
              </div>
                
                
              
                  
                
                   
                
                
            </div>

          </div>
  
        </div>
        <!-- meat card edit end -->


        <!-- table start here -->
        <!-- meat list start -->
        <div class="container-fluid  card bg-secondary p-2 shadow mt-3">
            <h1 class="text-center">The list of Vegetable </h1>
          <table class="table align-items-center table-white table-flush"  id="meat">
            <thead class="thead-light">
              <tr>

                <th>No</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                  
            </tbody>
          </table>

        </div>
        <!-- meat list end -->
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function(){

    //for form error showing
   toastr.options.closeButton = true;
         
     toastr.options.closeMethod = 'fadeOut';
     toastr.options.closeEasing = 'swing';
    toastr.options.closeHtml = '<button>x</button>';

    //fro table index 1,2.3
    //var k=1;

    //csrf token
   

          $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


    $('input[name="photo"]').change(function(){
      // alert('h');
      var reader=new FileReader();
      reader.onload=(e)=>{
        $('.preview').attr('src',e.target.result);
      }
      reader.readAsDataURL(this.files[0]); 
    })

    $('input[name="name"]').change(function(){
      var name=$(this).val();
      $('.name-pre').html(name);
    })

    $('input[name="price"]').change(function(){
      var name=$(this).val();
      $('.price-pre').html('K'+name);
    })

    //for table js

    showTable();


    
    function showTable(){
      
      var url="/getDataBycatID/:id";
      url=url.replace(':id',4);

     $('#meat').DataTable({
                
                "processing": true,
                "serverSide": true,
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
                "ajax": url,
                "columns":[
                {data: 'DT_RowIndex'},
                     {data:'photo',
                     render:function(data){
                      return `
                      <img src="{{asset('${data}')}}" width = '80px' height = '100px'>
                      `
                     }}
                     ,
                {data:'name'},
                {data:'price'},

                {data:'id',
                  render:function(data){
                  return `<button type="button" data-id=${data} class="btn btn-danger btn-sm btn-delete"><i class="ni ni-fat-delete"></i></button>
                    <button type="button" data-id=${data} class="btn btn-warning btn-sm btn-edit"><i class="ni ni-settings"></i></button>
                   
                  `

                }}
                
                ],
                "info":false
                
             });
     
    }


    


  




    //end table js

    //deleting the row

    $('#meat').on('click','.btn-delete',function(){
     var id=$(this).data('id');
     url="{{route('food.destroy',':id')}}";
     url=url.replace(':id', id);
        $.ajax({
          url:url,
          type:'POST',
          data:{'_method':'DELETE'},
          dataType:'json',
          success:function(data){
            if(data.success){
              toastr.options.closeDuration = 2300;
         
             toastr.success( data.success);
             showTable();
            }
          },
          error:function(data){
            console.log(data);
          }
        })
    })

    //edit  file preview

    $('input[name="ephoto"]').change(function(){
          // alert('h');
          var reader=new FileReader();
          reader.onload=(e)=>{
            $('.new-preview').attr('src',e.target.result);
          }
          reader.readAsDataURL(this.files[0]); 
        })

        $('input[name="ename"]').change(function(){
          var name=$(this).val();
          $('.new-name-pre').html(name);
        })

        $('input[name="eprice"]').change(function(){
          var name=$(this).val();
          $('.new-price-pre').html('K'+name);
        })


    $('#meat').on('click','.btn-edit',function(){

      $('#create-form').addClass('d-none');
      $('#edit-form').removeClass('d-none');
      var id=$(this).data('id');
      //reshowing data in edit-form

      url="{{route('food.edit',':id')}}";
      url=url.replace(':id',id);

     $.get(url,function(response){
      $('input[name="ename"]').val(response.name);
      $('input[name="eprice"]').val(response.price);
      $('input[name="oldphoto"]').val(response.photo);
      $('input[name="oldid"]').val(id);
      $('.old-name-pre').html(response.name);
      $('.old-price-pre').html(response.price);
      var image="{{asset(':img')}}";
      image=image.replace(':img',response.photo);
      $('.old-preview').attr('src',image);
     })

     


    });

    //update start here
    $('.edit-form').submit(function(e){
      e.preventDefault();
      // alert('hloe');
      var formdata= new FormData(this);
      var id=$('input[name="oldid"]').val();
      var url="{{route('food.update',':id')}}";
      url=url.replace(':id', id);

      formdata.append('_method','PUT');

        $.ajax({
          url:url,
          type:'post',
          data:formdata,
          cache:false,
          contentType:false,
          processData:false,
          success:(data)=>{
            console.log(data);
            toastr.options.closeDuration = 3000;
          
          toastr.success(data.success);

          
          $('#create-form').removeClass('d-none');
          $('#edit-form').addClass('d-none');
         showTable();
            
          },
          error:(data)=>{
            console.log(data);
          }
        })
        // showTable();
    })

    //update end here


    

   

    

    
    
    // toastr.error('I do not think that word means what you think it means.', 'Inconceivable!')
     $('form').find('.help-block').remove();
    $('form').find('.form-group').removeClass('has-error');

    $('.create-form').submit(function(e){
      e.preventDefault();

      var formdata=new FormData(this);
      var url="{{route('food.store')}}";
      $.ajax({
        type:'POST',
        url:url,
        data:formdata,
        cache:false,
            contentType: false,
            processData: false,
        success:(data)=>{
          // $('.alert').removeClass('d-none');
          // $('.message').html(data.success);
          // $('.alert').show(1000);
           $('form').find('.help-block').remove();
          $('form').find('.form-group').removeClass('has-error');
          
          toastr.options.closeDuration = 3000;
          
          toastr.success(data.success);

          $('.name-pre').html('------');
          $('.price-pre').html('K$$$$');
          $('.preview').attr('src',"{{asset('template/assets/img/theme/team-4-800x800.jpg')}}");

          $('input[name="photo"]').val('');
          $('input[name="name"]').val('');
          $('input[name="price"]').val('');
          showTable();

          
        },
        error:(errors)=>{
          var obj=errors.responseJSON.errors;
          $.each(obj,function(i,v){
            $(`input[name=${i}]`).closest('.form-group').addClass('has-error')
            .append(`<span class='help-block'><strong class='text-danger'>${v}</strong></span>`);


          })
          
          toastr.options.closeDuration = 2300;
         
          toastr.error( obj , "form error!");
        }

      })
    })


    //canceling the edit button

    $('.btn-cancel').click(function(){
      $('#create-form').removeClass('d-none');
          $('#edit-form').addClass('d-none');
    })
  })
</script>
@endsection
