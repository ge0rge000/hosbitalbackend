<div>
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title" id="basic-layout-icons">Available Time in month</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body">
              <form class="form" wire:submit.prevent="case_available_apppoint">
                <div class="form-body">

                  <div class="form-group">
                    <label for="timesheetinput3">Date From</label>
                    <div class="position-relative has-icon-left">
                      <input type="date" id="timesheetinput3" class="form-control" name="date" wire:model="date_avail_from">
                      <div class="form-control-position">
                        <i class="ft-message-square"></i>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="timesheetinput3">Date To</label>
                    <div class="position-relative has-icon-left">
                      <input type="date" id="timesheetinput3" class="form-control" name="date" wire:model="date_avail_to">
                      <div class="form-control-position">
                        <i class="ft-message-square"></i>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="timesheetinput5">Time From</label>
                        <div class="position-relative has-icon-left">
                          <input type="time" id="timesheetinput5" class="form-control" name="starttime" wire:model="time_avail_from">
                          <div class="form-control-position">
                            <i class="ft-clock"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="timesheetinput6"> Time To</label>
                        <div class="position-relative has-icon-left">
                          <input type="time" id="timesheetinput6" class="form-control" name="endtime"  wire:model="time_avail_to">
                          <div class="form-control-position">
                            <i class="ft-clock"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="timesheetinput5">reverse Price</label>
                        <div class="position-relative has-icon-left">
                          <input type="text"  class="form-control" name="starttime" wire:model="price_reverse">
                            
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="timesheetinput6"> Try Price</label>
                        <div class="position-relative has-icon-left">
                          <input type="text"  class="form-control" name="endtime"  wire:model="price_try">

                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="timesheetinput7">Notes</label>
                    <div class="position-relative has-icon-left">
                      <textarea id="timesheetinput7" rows="5" class="form-control" name="notes" placeholder="notes" wire:model="comment"></textarea>
                      <div class="form-control-position">
                        <i class="ft-file"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-actions right">
                  <button type="button" class="btn btn-warning mr-1">
                    <i class="ft-x"></i> Cancel
                  </button>
                  <button type="submit" class="btn btn-primary">
                    <i class="la la-check-square-o"></i> Save
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
