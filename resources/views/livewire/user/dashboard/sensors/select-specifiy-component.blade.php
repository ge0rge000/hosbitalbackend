<div>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <h4 class="card-title">NameSensor:{{ $name_sensor }}</h4>
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
                <table class="table mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>first read</th>
                      <th>secound read</th>
                      <th>third read</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($sensorReadings as $key=>$sensorReading )
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $sensorReading->first_read }}</td>
                        <td>{{ $sensorReading->secound_read }}</td>
                        <td>{{ $sensorReading->third_read }}</td>

                      </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div></div>
