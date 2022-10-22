<div>
    <section id="basic-form-layouts">
        <div class="row match-height">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title" id="basic-layout-form">Project Info</h4>
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
                  <form class="form" wire:submit.prevent="add_sensor">
                    <div class="form-body">
                      <h4 class="form-section"><i class="ft-user"></i> Add Sensor</h4>
                      <div class="row">

                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="projectinput1">Sensor Name</label>
                            <input type="text" id="projectinput1" class="form-control" placeholder="Sensor Name "
                            name="sensor_name"  wire:model="sensor_name">
                          </div>
                        </div>

                        <div class="col-md-12">
                            <div class="position-relative has-icon-left">
                                <textarea id="timesheetinput7" rows="5" class="form-control" name="notes" placeholder="detail sensors"  wire:model="sensor_detail"></textarea>
                                <div class="form-control-position">
                                  <i class="ft-file"></i>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                  <h4 class="card-title">sensor Image </h4>
                                </div>
                                <div class="card-block">
                                  <div class="card-body">
                                    <fieldset class="form-group">
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" wire:model="sensor_image">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                      </div>
                                    </fieldset>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                            <div class="card">
                                <div class="card-block">
                                  <div class="card-body">
                                    @if($sensor_image)

                                        <img src="{{$sensor_image->temporaryUrl()}}" width="120"/>
                                    @endif
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>

                    </div>
                    <div class="form-actions">
                      <a type="button" class="btn btn-warning mr-1" href="{{ route("home_super") }}">
                        <i class="ft-x"></i> Cancel
                      </a>
                      <button type="submit" class="btn btn-primary">
                        <i class="la la-check-square-o"></i> Save
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

      </section></div>
