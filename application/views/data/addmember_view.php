<div class="content">
    <div class="container-fluid">
        <form action="<?=site_url()?>/Addmember/addMember" method="post" enctype="multipart/form-data">


            <div class="row">
                <div class="col-md-2">
            
                </div>

                <div class="col-md-8">
                    <div class="form-group ">
                        <label class="control-label" for="name">User Name:</label>   
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Member Name..." required="required">
                    </div>

                    <div class="form-group"> 
                        <label class="control-label" for="address">User Address:</label>           
                        <input type="text" name="address" class="form-control" id="code" placeholder="Enter Member Address..." required="required">
                    </div>

                    <div class="form-group"> 
                        <label class="control-label" for="address">User Phone_No:</label>           
                        <input type="text" name="phone" class="form-control" id="code" placeholder="Enter Member Phone..." required="required">
                    </div>

                    <div class="form-group"> 
                        <label class="control-label" for="address">User Email:</label>           
                        <input type="Email" name="email" class="form-control" id="code" placeholder="Enter Member Email..." required="required">
                    </div>  

                    <div class="form-group"> 
                        <label class="control-label" for="address">User Description:</label>                
                        <textarea name="description" class="form-control" id="description" placeholder="Enter Member Description..." ></textarea>
                    </div>
                


                
                    <div class="col-md-4">
                                <!--Submit-->
                        <button type="submit" name="submit" id="submit" class="btn btn-success ">Add Member&nbsp;&nbsp;<i class="fa fa-database" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-md-4">
                        <a href="<?=site_url() ?>/Dashboard">
                        <button type="button" name="submit" id="submit" class="btn btn-link ">
                        <i class="fa fa-caret-left" aria-hidden="true"></i>
                        Back               
                        </button></a>
                    </div>
                 
                </div>       
                <div class="col-md-2">
                
                </div>
            </div>

                
        </form>
        
    </div>
</div>

  


        