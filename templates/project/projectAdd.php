<section class="page page-dashboard">
    <!-- PAGE-TITLE -->
    <div class="page-title skin-light">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="heading ft-secondary">
                        <span class="icon"><i class="fa fa-project-diagram"></i></span>Add New Project
                    </div>
                </div>
                <div class="col-6">
                    <div class="actions-ctrl text-md-right">
                        <a href="projectList.php" class="v-btn v-btn-secondary">
                            <i class="fa fa-list"></i><span>List Project</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE-CONTENT -->
    <div class="page-content">
        <div class="container">
            <!-- PROJECT ADD -->
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="header">
                            <h4 class="title">Add Project Details</h4>
                        </div>
                        <div class="content ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Project Name</label>
                                        <div class="adon-group">
                                            <span class="icon ft-primary"><i class="fa fa-project-diagram"></i></span>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Client Name</label>
                                        <div class="adon-group">
                                            <select class="form-control" name="" id="">
                                                <option value="">Client 1</option>
                                                <option value="">Client 2</option>
                                                <option value="">Client 3</option>
                                            </select>
                                            <a href="#" data-target="#add_client" data-toggle="modal" class="v-btn  v-btn-primary"><i class="fa fa-plus"></i><span>Add Client</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Awarded On</label>
                                        <div class="adon-group">
                                        <span class="icon ft-primary"><i class="fa fa-calendar-alt"></i></span>
                                            <input class="datepicker form-control" type="date"  placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Due Date</label>
                                        <div class="adon-group">
                                        <span class="icon ft-primary"><i class="fa fa-calendar-alt"></i></span>
                                            <input class="datepicker form-control" type="date"  placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Project Type</label>
                                        <div class="adon-group">
                                            <span class="icon ft-primary"><i class="fa fa-dollar-sign"></i></span>
                                            <select name="" id="" class="form-control">
                                                <option value="">Fixed Price</option>
                                                <option value="">Hourly</option>
                                            </select>
                                            <input type="text" class="form-control text-right" style="width:70px" placeholder="$3000">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Project Manager</label>
                                        <div class="adon-group">
                                            <select name="" class="form-control" id="">
                                                <option value="">Select Project Manger</option>
                                                <option value="">Himani</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Tech Lead</label>
                                        <div class="adon-group">
                                            <select name="" class="form-control" id="">
                                                <option value="">Select Tech Lead</option>
                                                <option value="">Himani</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">BDE</label>
                                        <div class="adon-group">
                                            <select name="" class="form-control" id="">
                                                <option value="">Select BDE</option>
                                                <option value="">Himani</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Resources</label>
                                        <div class="adon-group">
                                            <div class="ui-widget">
                                                <select id="combobox">
                                                    <option value="">Select one...</option>
                                                    <option value="ActionScript">ActionScript</option>
                                                    <option value="AppleScript">AppleScript</option>
                                                    <option value="Asp">Asp</option>
                                                    <option value="BASIC">BASIC</option>
                                                    <option value="C">C</option>
                                                    <option value="C++">C++</option>
                                                    <option value="Clojure">Clojure</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block">
                        <div class="header">
                            <h4 class="title">Project Milestone <a href="#" data-target="#add_milestone" data-toggle="modal" class="v-btn v-btn-primary float-right"><i class="fa fa-plus"></i><span>Add Milestone</span></a></h4></h4>
                        </div>
                        <div class="content table-responsive">
                            <table class="table table-light">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="width:700px">Title</th>
                                        <th>Due_Date</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                                        <td>23 May 2020</td>
                                        <td>
                                            <select name="" class="form-control" id="">
                                                <option value="">Yet to start</option>
                                                <option value="">In progress</option>
                                                <option value="">completed</option>
                                            </select>
                                        </td>
                                        <td>
                                            <a href="#" class="icon"> <i class="fa fa-pencil-alt"></i> </a>
                                            <a href="#" class="icon"> <i class="fa fa-trash-alt"></i> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                                        <td>23 May 2020</td>
                                        <td>
                                            <select name="" class="form-control" id="">
                                                <option value="">Yet to start</option>
                                                <option value="">In progress</option>
                                                <option value="">completed</option>
                                            </select>
                                        </td>
                                        <td>
                                            <a href="#" class="icon"> <i class="fa fa-pencil-alt"></i> </a>
                                            <a href="#" class="icon"> <i class="fa fa-trash-alt"></i> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                                        <td>23 May 2020</td>
                                        <td>
                                            <select name="" class="form-control" id="">
                                                <option value="">Yet to start</option>
                                                <option value="">In progress</option>
                                                <option value="">completed</option>
                                            </select>
                                        </td>
                                        <td>
                                            <a href="#" class="icon"> <i class="fa fa-pencil-alt"></i> </a>
                                            <a href="#" class="icon"> <i class="fa fa-trash-alt"></i> </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="block">
                        <div class="header">
                            <h4 class="title">Payment History <a href="#" data-target="#add_payment_received" data-toggle="modal" class="v-btn v-btn-primary float-right"><i class="fa fa-plus"></i><span>Add Milestone</span></a></h4></h4>
                        </div>
                        <div class="content table-responsive">
                            <table class="table table-light nowarp">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Received_Amt</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                                        <td>23 May 2020</td>
                                        <td>
                                            $3000
                                        </td>
                                        <td>
                                            <select name="" class="form-control" id="">
                                                <option value="">Billed</option>
                                                <option value="">Paid</option>
                                                <option value="">Estimated</option>
                                            </select>
                                        </td>
                                        <td>
                                            <a href="#" class="icon"> <i class="fa fa-pencil-alt"></i> </a>
                                            <a href="#" class="icon"> <i class="fa fa-trash-alt"></i> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                                        <td>23 May 2020</td>
                                        <td>
                                            $3000
                                        </td>
                                        <td>
                                            <select name="" class="form-control" id="">
                                                <option value="">Billed</option>
                                                <option value="">Paid</option>
                                                <option value="">Estimated</option>
                                            </select>
                                        </td>
                                        <td>
                                            <a href="#" class="icon"> <i class="fa fa-pencil-alt"></i> </a>
                                            <a href="#" class="icon"> <i class="fa fa-trash-alt"></i> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                                        <td>23 May 2020</td>
                                        <td>
                                            $3000
                                        </td>
                                        <td>
                                            <select name="" class="form-control" id="">
                                                <option value="">Billed</option>
                                                <option value="">Paid</option>
                                                <option value="">Estimated</option>
                                            </select>
                                        </td>
                                        <td>
                                            <a href="#" class="icon"> <i class="fa fa-pencil-alt"></i> </a>
                                            <a href="#" class="icon"> <i class="fa fa-trash-alt"></i> </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href="#" data-target="#confirmation_assign_project" data-toggle="modal" class="v-btn v-btn-secondary float-right"><span>Save Project</span></a></h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ADD COMPANY MODAL -->
<div class="modal fade" tabindex="-1" role="dialog" id="add_client">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="content">
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="">Client Name</label>
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

<!-- ADD MILESTONE MODAL -->
<div class="modal fade" tabindex="-1" role="dialog" id="add_milestone">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Milestone</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="content">
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="">Milestone Title</label>
                     <div class="adon-group">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="">Due Date</label>
                    <div class="adon-group">
                        <span class="icon ft-primary"><i class="fa fa-calendar-alt"></i></span>
                        <input type="Email Id" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="">Amount</label>
                    <div class="adon-group">
                        <span class="icon"><i class="fa fa-dollar-sign"></i></span>
                        <input type="number" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="v-btn v-btn-base" data-dismiss="modal">Close</button>
        <a href="company_list.php" class="v-btn v-btn-primary" data-dismiss="modal">Add Milestone</a>
      </div>
    </div>
  </div>
</div>


<!-- ADD MILESTONE MODAL -->
<div class="modal fade" tabindex="-1" role="dialog" id="add_payment_received">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Payment History</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="content">
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="">Description</label>
                     <div class="adon-group">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="">Date</label>
                    <div class="adon-group">
                        <span class="icon ft-primary"><i class="fa fa-calendar-alt"></i></span>
                        <input type="Email Id" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="">Received Payment</label>
                    <div class="adon-group">
                        <span class="icon"><i class="fa fa-dollar-sign"></i></span>
                        <input type="number" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="v-btn v-btn-base" data-dismiss="modal">Close</button>
        <a href="company_list.php" class="v-btn v-btn-primary" data-dismiss="modal">Add To Payment History</a>
      </div>
    </div>
  </div>
</div>
