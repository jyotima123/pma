<section class="page page-dashboard">
    <!-- PAGE-TITLE -->
    <div class="page-title skin-light">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="heading ft-secondary">
                        <span class="icon"><i class="fa fa-building"></i></span>Comapny List
                    </div>
                </div>
                <div class="col-6">
                    <div class="actions-ctrl text-md-right">
                        <a href="add_company.php" data-toggle="modal" data-target="#add_company" class="v-btn v-btn-secondary">
                            <i class="fa fa-plus"></i><span>Add New Company</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE-CONTENT -->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="block primary">
                        <div class="content">
                            <h4 class="title">Total Companies</h4>
                            <span>12</span>
                        </div>
                    </div>
                </div> 
                <div class="col-md-3">
                    <div class="block primary">
                        <div class="content">
                            <h4 class="title">Total Active</h4>
                            <span>12</span>
                        </div>
                    </div>
                </div> 
                <div class="col-md-3">
                    <div class="block primary">
                        <div class="content">
                            <h4 class="title">Total Inactive</h4>
                            <span>12</span>
                        </div>
                    </div>
                </div> 
            </div>
            <hr class="dark">
            <!-- FILTER -->
            <div class="row">
                <div class="col-md-4">
                    <div class="adon-group form-group">
                        <span class="icon icon-light ft-primary"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search for company here..">
                    </div>
                </div>
                <div class="col-md-2 offset-md-6 text-md-right">
                    <div class="adon-group form-group">
                        <span class="icon icon-light ft-primary"><i class="fa fa-filter"></i></span>
                        <select name="" id="" class="form-control">
                            <option value="">Sort By</option>
                            <option value="">Active</option>
                            <option value="">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- TABLE -->
            <div class="row">
                <div class="col-md-12">
                    <div class="block no-padding">
                        <div class="content table-responsive">
                            <table  class="table table-light">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Company Name</th>
                                        <th>Contact Person</th>
                                        <th>Email ID</th>
                                        <th>Phone Number</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="" class="link-text">Actiknow Pvt. Ltd.</a></td>
                                        <td>Varun Dev</td>
                                        <td>varundev2727@gmail.com</td>
                                        <td>+91-9891189122</td>
                                        <td>C-21, New Delhi - India</td>
                                        <td>
                                            <input class="tgl tgl-light" id="cb1" type="checkbox"/>
                                            <label class="tgl-btn" for="cb1"></label>
                                        </td>
                                        <td>
                                            <a href="#" class="icon icon-sm ft-primary " title="Login As"><i class="fa fa-sign-in-alt"></i></a>
                                            <a href="#" class="icon icon-sm ft-primary " title="Edit Use"><i class="fa fa-pencil-alt"></i></a>
                                            <a href="#" data-target="#confirmation" data-toggle="modal" title="Delete User" class="icon icon-sm icon-primary"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ADD COMPANY MODAL -->
<div class="modal fade" tabindex="-1" role="dialog" id="add_company">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Company</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="content">
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="">Company Name</label>
                     <div class="adon-group">
                        <span class="icon ft-primary"><i class="fa fa-building"></i></span>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="">Company Website Link</label>
                     <div class="adon-group">
                     <span class="icon ft-primary"><i class="fa fa-globe"></i></span>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="">Contact Person Name</label>
                     <div class="adon-group">
                        <span class="icon ft-primary"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="">Email Id</label>
                    <div class="adon-group">
                        <span class="icon ft-primary"><i class="fa fa-envelope"></i></span>
                        <input type="Email Id" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="">Phone Number</label>
                    <div class="adon-group">
                        <a href="#" class="v-btn v-btn-light">+91</a>
                        <input type="number" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="">Location</label>
                    <div class="adon-group">
                        <span class="icon ft-primary"><i class="fa fa-map-marker-alt"></i></span>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="v-btn v-btn-base" data-dismiss="modal">Close</button>
        <a href="company_list.php" class="v-btn v-btn-primary" data-dismiss="modal">Save Comapny</a>
      </div>
    </div>
  </div>
</div>
