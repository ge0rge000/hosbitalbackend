<div>
    <style>
        tr {
    text-align: center;
}
i.fa.fa {
    color: #28d094;
}
i.fa.fa-trash {
    color: #d93030;
}
    </style>
    <div class="row" id="header-styling">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Senors</h4>
              @if(Session::has("message_delete"))
              <div class="alert alert-danger">
                <h2>{{ Session::get('message_delete') }}</h2>
            </div>
              @endif
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
              <div class="table-responsive">
                <table class="table">
                  <thead class="bg-success white">
                    <tr>
                      <th>name</th>
                      <th>details</th>
                      <th>image</th>
                      <th>action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($sensors as $sensor  )
                    <tr>
                      <td>{{ $sensor->name_sensor }}</td>
                      <td>{{ $sensor->detail_sensor }}</td>
                      <td><img src="{{ asset("sensors/sensorsimages") }}/{{ $sensor->image_sensor}}" width="120px"></td>

                      <td>
                        <a href="{{ route('edit_sensor',['ide'=>$sensor->id]) }}"><i class="fa fa-edit"></i> </a>
                        <a href="#" wire:click="delete_sensor({{ $sensor->id }})" ><i class="fa fa-trash"></i> </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>
</div>
