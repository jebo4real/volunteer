<!-- SELECT2 EXAMPLE -->
<div class="card" style="color:black;">
    <div class="card-header">
        <h3 class="card-title" >Personal Information</h3>
    </div>
    <!-- /.card-header -->  
    <div class="card-body" style="background-color:white;">

    <form action="controllers/addvolunteer.php" method="post" >
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="category" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="gender" name="gender" style="color:black;">
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                            <option value="p">Prefer not to say</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row" >
                    <label for="details" class="col-sm-2 col-form-label">Date Of Birth</label>
                    <div class="col-sm-10" >
                        <input type="date" class="form-control" id="dob" name="dob" style="color:black;" />                   
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="details" class="col-sm-3 col-form-label">Contact(mobile)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="+233 547 340 111" />                   
                    </div>
                </div>
                <div class="form-group row">
                    <label for="details" class="col-sm-3 col-form-label">Website Link</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="www.linkedin.com/in/jonjones" />                   
                    </div>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-sm-3 col-form-label">Email address</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email" placeholder="example: you@email.com" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-sm-3 col-form-label">Confirm Email address</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email2" placeholder="example: you@email.com" />
                    </div>
                </div>
                
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="card-header">
            <h3 class="card-title" >Skill Information</h3>
        </div>
        <div class="form-group row">
            <label for="category" class="col-md-5 col-form-label">How can you Help ?(Check all if apply)</label>
            <div class="col-md-6">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="skills[]" value="translations">Translations
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="skills[]" value="software development">Software Development
                    </label>
                </div>
            </div>
        </div>

    <div class="card-header">
        <h3 class="card-title">Permission</h3>
    </div>
    <div class="form-group row">
        <label for="category" class="col-md-5 col-form-label">Your Permission for data usage(Uncheck all if you do not allow)</label>
        <div class="col-md-6">
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="perm[]" value="Permission 1">Permission 1
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="perm[]" value="Permission 2">Permission 2
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row" >
        <div class="col-md-10" style="float:right;">
            <input type="submit" class="btn btn-success col-md-4" id="btnregister" name="btnregister" value="Register"/>
        </div>
    </div>
    </form>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Information
    </div>
</div>
<!-- /.card -->