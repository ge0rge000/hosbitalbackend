<div>
    <div class="row">
        <div class="col-12">
          <div class="card">

            <div class="card-content collapse show">

              <div class="table-responsive">
                <table class="table mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>name sensor</th>
                      <th>first read</th>
                      <th>secound read</th>
                      <th>third read</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($sensorReadings as $key=>$sensorReading )
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $sensorReading->Sensor->name_sensor }}</td>
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
