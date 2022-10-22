<div>
    <div class="row">

    <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title" id="from-actions-bottom-right">Doctor</h4>
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
          <div class="card-content collpase show">
            <div class="card-body">
              <form class="form">
                <div class="form-body">
                    <div class="row">
                        <div class="form-group col-12 mb-2">
                          <label for="issueinput5">Priority</label>
                          <select id="issueinput5" name="priority" class="form-control" data-toggle="tooltip"
                          data-trigger="hover" data-placement="top" data-title="select doctor" wire:model="id_doctor">
                          <option value="select">Select</option>
                          @foreach ($doctors as $doctor )
                          <option value="{{ $doctor->id }}">DR:{{  $doctor->user->name}}</option>
                          @endforeach
                          </select>
                        </div>
                        <div class="form-group col-12 mb-2">
                            @if($availableappointment!=null)
                            <h1 class="card-title" style="font-weight: bold">Date available</h1>
                            <h2 class="card-text">from :{{ $availableappointment->date_avail_from }}</h2>
                            <h2 class="card-text">to :{{ $availableappointment->date_avail_to }}</h2>
                            <br>
                            <h1 class="card-title" style="font-weight: bold">Time available</h1>
                            <h2 class="card-text">from {{ $availableappointment->time_avail_from }}</h2>
                            <h2 class="card-text">to {{ $availableappointment->time_avail_to }}</h2>

                            <h1 class="card-title" style="font-weight: bold">Reverse price</h1>
                            <h2 class="card-text"> {{ $availableappointment->price_reverse }} pounds</h2>

                            <h1 class="card-title" style="font-weight: bold">Try price</h1>
                            <h2 class="card-text"> {{ $availableappointment->price_try }} pounds</h2>

                            <h1 class="card-title" style="font-weight: bold">Comments</h1>
                            <h2 class="card-text"> {{ $availableappointment->comment }}</h2>
                            @endif
                          </div>

                      </div>


                </div>

              </form>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title" id="from-actions-bottom-right">Reverse appointment</h4>
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
          <div class="card-content collpase show">
            <div class="card-body">
              <form class="form">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="timesheetinput6"> Name patient</label>
                              <div class="position-relative has-icon-left">
                                <input type="text"  class="form-control" wire:model="price_try">
                              </div>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="timesheetinput6"> another name patient</label>
                              <div class="position-relative has-icon-left">
                                <input type="text"  class="form-control" wire:model="price_try">
                              </div>
                            </div>
                          </div>


                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="timesheetinput6"> mobile phone patient</label>
                              <div class="position-relative has-icon-left">
                                <input type="number"  class="form-control" wire:model="price_try">
                              </div>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="timesheetinput6"> another mobile phone patient</label>
                              <div class="position-relative has-icon-left">
                                <input type="number"  class="form-control" wire:model="price_try">
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
    </div>
