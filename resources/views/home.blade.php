{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

<section id="accueil" class="hero">
    <img class="hero__img" src="{{ asset('images/hero-ecole.jpg') }}" alt="École privée chrétienne">

    <div class="hero__overlay"></div>

    <div class="container hero__content">
        <p class="hero__kicker">École privée chrétienne</p>

        <h1 class="hero__title">
            Grandir, apprendre et s’épanouir<br>
            dans un cadre bienveillant
        </h1>

        <p class="hero__subtitle">
            Formation académique • Valeurs chrétiennes • Bilinguisme • Approche Montessori
        </p>

        <div class="hero__actions">
            <a class="btn btn--primary" href="#notre-ecole">Découvrir notre école</a>
            <a class="btn btn--ghost" href="#contact">Nous contacter</a>
        </div>
    </div>
</section>

<section id="notre-ecole" class="section section--apropos">
    <div class="container">
        <div class="section-head">
            <h2>Notre école</h2>
        </div>

        {{-- Vision --}}
        <div class="vision-block">
            <div class="vision-block__text">
                <span class="section-badge">Vision</span>
                <h3>Une éducation ancrée dans le sens, l’excellence et la foi</h3>
                <p>
                    Notre école accompagne chaque enfant dans son développement intellectuel,
                    humain et spirituel. Nous souhaitons offrir un cadre d’apprentissage serein,
                    stimulant et respectueux du rythme de chacun.
                </p>
                <p>
                    À travers une pédagogie attentive et des valeurs solides, nous encourageons
                    les élèves à grandir avec confiance, curiosité, responsabilité et bienveillance.
                </p>
            </div>

            <div class="vision-block__media">
                <img src="{{ asset('images/vision-ecole.jpg') }}" alt="Vision de l’école">
            </div>
        </div>

        {{-- 3 piliers --}}
        <div class="pillars">
            <article class="pillar-card">
                <h3>Chrétienne</h3>
                <p>
                    Une école fondée sur des valeurs chrétiennes fortes :
                    respect, amour du prochain, intégrité, service et espérance.
                </p>
            </article>

            <article class="pillar-card">
                <h3>Bilingue</h3>
                <p>
                    Un environnement qui favorise l’ouverture linguistique
                    et culturelle grâce à une approche bilingue adaptée aux élèves.
                </p>
            </article>

            <article class="pillar-card">
                <h3>Montessori</h3>
                <p>
                    Une pédagogie qui encourage l’autonomie, la manipulation,
                    la concentration et la joie d’apprendre.
                </p>
            </article>
        </div>

        {{-- L'établissement --}}
        <div class="etablissement-block">
            <div class="etablissement-block__media">
                <img src="{{ asset('images/etablissement.jpg') }}" alt="L’établissement">
            </div>

            <div class="etablissement-block__text">
                <span class="section-badge">L’établissement</span>
                <h3>Un cadre propice à l’apprentissage</h3>
                <p>
                    Notre établissement accueille les enfants dans un environnement calme,
                    sécurisant et lumineux, pensé pour favoriser la concentration,
                    l’épanouissement et la qualité des relations.
                </p>
                <p>
                    Chaque espace est aménagé pour permettre aux élèves de travailler,
                    explorer, coopérer et progresser dans les meilleures conditions.
                </p>
            </div>
        </div>

        {{-- Équipe --}}
        <div class="team-section">
            <div class="section-head">
                <h3>Notre équipe</h3>
            </div>

            <div class="team-grid">
                <article class="team-card">
                    <div class="team-card__photo">
                        <img src="{{ asset('images/team-1.jpg') }}" alt="Prénom Nom">
                    </div>
                    <h4>Prénom Nom</h4>
                    <p>Directrice</p>
                </article>

                <article class="team-card">
                    <div class="team-card__photo">
                        <img src="{{ asset('images/team-2.jpg') }}" alt="Prénom Nom">
                    </div>
                    <h4>Prénom Nom</h4>
                    <p>Enseignante 1-3P</p>
                </article>

                <article class="team-card">
                    <div class="team-card__photo">
                        <img src="{{ asset('images/team-3.jpg') }}" alt="Prénom Nom">
                    </div>
                    <h4>Prénom Nom</h4>
                    <p>Enseignante 7-8P</p>
                </article>

                <article class="team-card">
                    <div class="team-card__photo">
                        <img src="{{ asset('images/team-4.jpg') }}" alt="Prénom Nom">
                    </div>
                    <h4>Prénom Nom</h4>
                    <p>Assistante pédagogique</p>
                </article>
            </div>
        </div>
    </div>
</section>

<section id="infos-pratiques" class="section section--alt">
    <div class="container">
        <div class="section-head">
            <h2>Infos pratiques</h2>
        </div>

        <div class="infos-grid">
            <article class="info-card">
                <h3>Classes</h3>
                <p>Nous accueillons les élèves des classes :</p>
                <ul>
                    <li>1P à 3P</li>
                    <li>7P à 8P</li>
                </ul>
            </article>

            <article class="info-card">
                <h3>Tarifs</h3>
                <p>
                    Les frais de scolarité se situent dans une fourchette de :
                </p>
                <p class="info-price">CHF 570.– à CHF 950.–</p>
            </article>

            <article class="info-card">
                <h3>Transport</h3>
                <p>
                    Des solutions de transport peuvent être envisagées selon
                    la provenance des familles et les possibilités d’organisation.
                </p>
            </article>

            <article class="info-card">
                <h3>Autorisation</h3>
                <p>
                    Établissement autorisé par le <strong>Canton de Vaud</strong>.
                </p>
            </article>
        </div>
    </div>
</section>

<section id="contact" class="contact">
    <div class="container">
        <div class="section-head">
            <h2>Contact</h2>
        </div>

        <div class="contact-school">

            {{-- Colonne gauche --}}
            <div class="contact-school__col contact-school__brand">
                <img class="contact-school__logo" src="{{ asset('images/logo.png') }}" alt="Logo école">
                <p class="contact-school__brand-text">
                    Une école privée chrétienne au service des enfants et des familles,
                    dans un cadre bienveillant et structurant.
                </p>
            </div>

            {{-- Colonne milieu --}}
            <div class="contact-school__col contact-school__infos">
                <h3>Nos coordonnées</h3>

                <div class="contact-item">
                    <span class="contact-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2
                                     19.79 19.79 0 0 1-8.63-3.07
                                     19.5 19.5 0 0 1-6-6
                                     19.79 19.79 0 0 1-3.07-8.67
                                     A2 2 0 0 1 4.11 2h3
                                     a2 2 0 0 1 2 1.72
                                     c.12.81.32 1.6.57 2.36
                                     a2 2 0 0 1-.45 2.11L8.09 9.91
                                     a16 16 0 0 0 6 6l1.72-1.72
                                     a2 2 0 0 1 2.11-.45
                                     c.76.25 1.55.45 2.36.57
                                     A2 2 0 0 1 22 16.92z"/>
                        </svg>
                    </span>
                    <a href="tel:+41000000000">+41 00 000 00 00</a>
                </div>

                <div class="contact-item">
                    <span class="contact-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16v16H4z"/>
                            <path d="M22 6l-10 7L2 6"/>
                        </svg>
                    </span>
                    <a href="mailto:contact@ecole.ch">contact@ecole.ch</a>
                </div>

                <div class="contact-item">
                    <span class="contact-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 12-9 12S3 17 3 10a9 9 0 1 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                    </span>
                    <span>Ch. de l'Étraz, Vich VD, CH</span>
                </div>
            </div>

            {{-- Colonne droite --}}
            <div class="contact-school__col contact-school__map">
                <h3>Nous trouver</h3>
                <div class="map-box">
                    <iframe
                        src="https://www.google.com/maps?q=Ch.+de+l%27Étraz,+Vich,+Vaud,+Suisse&output=embed"
                        width="100%"
                        height="260"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection