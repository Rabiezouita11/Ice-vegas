@extends('Client.Layouts.index')

@section('content')
<style>
    .profile-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 80vh;
        padding: 20px;
        background-color: #f9f9f9;
    }

    .profile-card {
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 500px;
        width: 100%;
        text-align: center;
    }

    .profile-title {
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
    }

    .profile-details p, .loyalty-points p {
        margin: 10px 0;
        font-size: 18px;
        color: #555;
    }

    .loyalty-points {
        margin-top: 20px;
    }

    .loyalty-image img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        margin-top: 10px;
    }
</style>

<div class="profile-container">
    <div class="profile-card">
        <h1 class="profile-title">Profile de {{ $user->name }}</h1>
        <div class="profile-details">
            <p><strong>Nom:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Téléphone:</strong> {{ $user->telephone }}</p>
        </div>

        @if($loyaltyPoints)
            <div class="loyalty-points">
                <h2>Points de fidélité</h2>
                <p><strong>Total de points:</strong> {{ $loyaltyPoints->Totale_point }}</p>
                @if($loyaltyPoints->Image)
                    <div class="loyalty-image">
                        <img src="{{ asset('storage/' . $loyaltyPoints->Image) }}" alt="Loyalty Image">
                    </div>
                @endif
            </div>
        @else
            <p>Aucun point de fidélité trouvé.</p>
        @endif
    </div>
</div>
@endsection
