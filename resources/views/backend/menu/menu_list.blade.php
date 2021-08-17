@extends('backend/backend_template');
@section('card')



        <!-- meat card start -->
        <div class="container-fluid card bg-secondary shadow mt-3">
          <div class="row">

            <div class="col-md-6">
               <h2 class="heading-large text-nowrap text-center mt-2">ADD NEW MEAT PLATE</h2>

               <div class="col-md-12">
                  <label class="form-control-label" for="customFileLang">
                          Photo
                        </label>
                    <div class="form-group">
                      <input type="file" name="photo" class="form-control" id="customFileLang"> 
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-meat-name">
                        Name
                      </label>
                      <input type="text" name="name" id="input-meat-name" class="form-control form-control-alternative" placeholder="First name" value="Pork Marlar">
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-price-name">Price </label>
                      <input type="text" name="price" id="input-price-name" class="form-control form-control-alternative" placeholder="Last name" value="2100">
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <input type="submit"  class="form-control bg-primary text-white" name="" value="Add New!">
                  </div>

                  
                
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
        <!-- meat card end -->
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function(){
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
  })
</script>
@endsection
