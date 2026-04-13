<h2>Nouvelle inscription</h2>

<p><strong>Enfant :</strong> {{ $enfant }}</p>
<p><strong>Email :</strong> {{ $email }}</p>
<p><strong>Adresse :</strong> {{ $adresse ?? '' }}</p>
<p><strong>Téléphone :</strong> {{ $telephone ?? '' }}</p>
<p><strong>Date de naissance :</strong> {{ $naissance ?? '' }}</p>
<p><strong>Parents :</strong> {{ $parents ?? '' }}</p>
<p><strong>AVS :</strong> {{ $avs ?? '' }}</p>
<p><strong>Classe :</strong> {{ $classe ?? '' }}</p>

<p><strong>Message :</strong></p>
<p>{{ $message_parent ?? '' }}</p>