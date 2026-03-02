{{-- Formulaire de contact (design system §6.9) --}}
<section class="section" data-animate>
    <div class="container">
        <div class="contact-form">
            @if(session('success'))
                <div class="contact-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST">
                @csrf

                <div class="contact-form__row">
                    <div class="contact-form__group">
                        <label for="name" class="contact-form__label">Votre nom</label>
                        <input type="text" id="name" name="name" class="contact-form__input" placeholder="Jean Dupont" value="{{ old('name') }}" required>
                        @error('name')
                            <p class="contact-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="contact-form__group">
                        <label for="email" class="contact-form__label">Votre email</label>
                        <input type="email" id="email" name="email" class="contact-form__input" placeholder="jean@exemple.fr" value="{{ old('email') }}" required>
                        @error('email')
                            <p class="contact-error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="contact-form__row">
                    <div class="contact-form__group">
                        <label for="phone" class="contact-form__label">Votre téléphone</label>
                        <input type="tel" id="phone" name="phone" class="contact-form__input" placeholder="06 12 34 56 78" value="{{ old('phone') }}" required>
                        @error('phone')
                            <p class="contact-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="contact-form__group">
                        <label for="service" class="contact-form__label">Type de prestation</label>
                        <select id="service" name="service" class="contact-form__select" required>
                            <option value="" disabled {{ old('service') ? '' : 'selected' }}>Choisir une prestation</option>
                            <option value="peinture-interieure" {{ old('service') === 'peinture-interieure' ? 'selected' : '' }}>Peinture intérieure</option>
                            <option value="peinture-exterieure" {{ old('service') === 'peinture-exterieure' ? 'selected' : '' }}>Peinture extérieure</option>
                            <option value="ravalement-facade" {{ old('service') === 'ravalement-facade' ? 'selected' : '' }}>Ravalement de façade</option>
                            <option value="peinture-decorative" {{ old('service') === 'peinture-decorative' ? 'selected' : '' }}>Peinture décorative</option>
                            <option value="revetements-muraux" {{ old('service') === 'revetements-muraux' ? 'selected' : '' }}>Revêtements muraux</option>
                            <option value="boiseries-laquage" {{ old('service') === 'boiseries-laquage' ? 'selected' : '' }}>Boiseries et laquage</option>
                            <option value="autre" {{ old('service') === 'autre' ? 'selected' : '' }}>Autre</option>
                        </select>
                        @error('service')
                            <p class="contact-error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="contact-form__group">
                    <label for="message" class="contact-form__label">Votre message — Décrivez votre projet</label>
                    <textarea id="message" name="message" class="contact-form__textarea" placeholder="Décrivez votre projet de peinture : pièces concernées, surfaces, type de finition souhaitée..." required>{{ old('message') }}</textarea>
                    @error('message')
                        <p class="contact-error">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="contact-form__submit">
                    Envoyer ma demande
                </button>

                <p class="contact-form__mention">
                    Devis gratuit et sans engagement — Réponse sous 48h
                </p>
            </form>
        </div>
    </div>
</section>
