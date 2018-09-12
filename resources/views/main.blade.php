@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ojvar Land</div>

                <div class="card-body">
                    <ul v-for="team in teams">
                        <li>@{{ team.name }}</li>
                    </ul>
                </div>
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
