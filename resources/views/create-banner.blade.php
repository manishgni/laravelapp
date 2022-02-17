<x-header/> 
<div class="clearfix"></div>
    <div class="content-wrapper">
      <div class="container-fluid">
        <h6 class="text-uppercase">Create Banner</h6>
         <hr>
       <div class="row">
         <div class="col-lg-6">
           <div class="card">
             <div class="card-body">
             <!-- <div class="card-title">We will accept request only from these IP Address:</div> -->
             <hr>
            <form class="form-horizontal" name="createform" id="createform" method="post">
           <input type="hidden" name="userid" id="userid" value="682">
             <div class="form-group">
              <label for="input-1">Title</label>
              <input type="text" class="form-control" name="title" value="">
             </div>
             <div class="form-group">
              <label for="input-2">Upload Banner</label>
              <input type="file" class="form-control" name="banner">
             </div>
             <div class="form-group">
              <button type="submit" id="save" class="btn btn-light waves-effect waves-light btn-sm"><i class="icon-lock"></i> Save</button>
              
              <button id="showloading6" type="button" class="btn btn-light waves-effect waves-light btn-sm" style="display:none;"><i class="fa fa-refresh fa-spin"></i> Please wait...</button>
              
            </div>
            </form>
           </div>
           </div>
        </div>
       </div>
      </div>
      </div>
   <x-footer/>  