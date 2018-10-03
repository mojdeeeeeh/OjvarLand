@extends('layouts.app')

@section('content')
  <!-- END: header -->
  <section class="probootstrap-slider flexslider">
    <ul class="slides">
      <li style="background-image: url('{{asset('template/img/slider_2.jpg') }}';" class="overlay2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                <h2>Team</h2>
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <!-- END: slider  -->

<div class="container">
    <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ojvar Land</div>

                <table class="table table-hover table-stripped">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="team in teams.data">
                            <td>@{{ team.name }}</td>
                            <td>@{{ team.email }}</td>
                            <td>@{{ team.phone }}</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    document.teams = {
        pageUrls: {
            team_index: '{{ route('team.index') }}',
        }
    };
</script>
<script type="text/javascript" src="{{ mix('js/pages/team/index.js') }}" defer></script>
@endsection
