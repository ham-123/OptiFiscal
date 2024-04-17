@extends('layouts._admin')

@section('content')
<br><br>
    <div class="container">
        <h1>Tableau de bord</h1>
        
        <!-- Résumé des activités -->
        <div class="activity-summary">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Contacts</h5>
                            <p class="card-text">Nombre total de contacts reçus : {{ $totalContacts }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nouveaux Contacts (Cette semaine)</h5>
                            <p class="card-text">Nombre de nouveaux contacts cette semaine : {{ $newContactsThisWeek }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nouveaux Contacts (Ce mois)</h5>
                            <p class="card-text">Nombre de nouveaux contacts ce mois-ci : {{ $newContactsThisMonth }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

    </div>
@endsection
