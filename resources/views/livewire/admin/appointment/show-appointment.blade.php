<div>
    <section id="card-headings">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="card-body">
                <h1 class="card-title" style="font-weight: bold">Date available</h1>
                <h2 class="card-text">from :{{ $appoint->date_avail_from }}</h2>
                <h2 class="card-text">to :{{ $appoint->date_avail_to }}</h2>
                <br>
                <h1 class="card-title" style="font-weight: bold">Time available</h1>
                <h2 class="card-text">from {{ $appoint->time_avail_from }}</h2>
                <h2 class="card-text">to {{ $appoint->time_avail_to }}</h2>

                <h1 class="card-title" style="font-weight: bold">Comments</h1>
                <h2 class="card-text"> {{ $appoint->comment }}</h2>

              </div>
          </div>

      </section>
</div>
