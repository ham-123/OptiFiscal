@extends('layouts._admin')

@section('content')
<br><br>
    <div class="container">
        <h1 class="mb-4">Liste des Contacts</h1>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col-4">Nom Complet</th>
                        <th scope="col">Email</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Sujet</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->full_name }}</td>
                        <td><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></td>
                        <td>{{ $contact->budget ?? 'Non spécifié' }}</td>
                        <td>{{ $contact->subject ?? 'Non spécifié' }}</td>
                        <td>{{ $contact->message ?? 'Non spécifié' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
