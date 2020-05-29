<section class="page page-dashboard">
    <!-- PAGE-TITLE -->
    <div class="page-title skin-light">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="heading">
                        <span class="icon"><i class="fa fa-project-diagram"></i></span>Project Assign
                    </div>
                </div>
                <div class="col-6">
                    <div class="actions-ctrl text-md-right">
                        <a href="projectAdd.php" class="v-btn v-btn-acent">
                            <i class="fa fa-plus"></i><span>Add New Project</span>
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
                    <div class="block acent">
                        <div class="content">
                            <h4 class="title">Total Projects</h4>
                            <span>12</span>
                        </div>
                    </div>
                </div> 
                <div class="col-md-3">
                    <div class="block acent">
                        <div class="content">
                            <h4 class="title">Completed Projects</h4>
                            <span>12</span>
                        </div>
                    </div>
                </div> 
                <div class="col-md-3">
                    <div class="block acent">
                        <div class="content">
                            <h4 class="title">Active Projects</h4>
                            <span>12</span>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- FILTER -->
            <div class="row">
                <div class="col-md-4">
                    <div class="adon-group form-group">
                        <span class="icon icon-light ft-primary"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search for project here..">
                    </div>
                </div>
                <div class="col-md-2 offset-md-6 text-md-right">
                    <div class="adon-group form-group">
                        <span class="icon icon-light ft-primary"><i class="fa fa-filter"></i></span>
                        <select name="" id="" class="form-control">
                            <option value="">Sort By</option>
                            <option value="">Completed</option>
                            <option value="">Active</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- TABLE -->
            <div class="row">
                <div class="col-md-12">
                    <div class="block no-padding">
                        <div class="content table-responsive">
                            <table  class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Project Name</th>
                                        <th>Client Name</th>
                                        <th>Design By</th>
                                        <th>Developed By</th>
                                        <th>Project Manager</th>
                                        <th>Awarded On</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="" class="link-text">Project Management System</a></td>
                                        <td><a href="" class="link-text">Spencer Kumar Singh</a></td>
                                        <td><a href="" class="link-text">Varun Dev</a></td>
                                        <td><a href="" class="link-text">Jyoti Singh</a></td>
                                        <td><a href="" class="link-text">Himani</a></td>
                                        <td>23 Jan, 2020</td>
                                        <td>31 July, 2020</td>
                                        <td>
                                            <input class="tgl tgl-light" id="cb1" type="checkbox"/>
                                            <label class="tgl-btn" for="cb1"></label>
                                        </td>
                                        <td>
                                            <a href="#" class="icon ft-primary " title="Edit Project"><i class="fa fa-pencil-alt"></i></a>
                                            <a href="#" data-target="#confirmation" data-toggle="modal" title="Delete Project" class="icon icon-primary"><i class="fa fa-times"></i></a>
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
