<div class="lang-switch">
    <div class="lang-bubble" id="langBubble" title="{{ __('Change language') }}">
        <img src="{{ asset('flags/' . app()->getLocale() . '.' . (app()->getLocale() == 'it' ? 'jpg' : 'jpeg')) }}" 
        alt="{{ app()->getLocale() }} flag">
    </div>    
    <div class="lang-options" id="langOptions">
        <a href="{{ route('setLocale', ['lang' => 'it']) }}" class="lang-option" title="Italiano">
            <img src="{{ asset('flags/it.jpg') }}" alt="Bandiera italiana">
        </a>
        <a href="{{ route('setLocale', ['lang' => 'en']) }}" class="lang-option" title="English">
            <img src="{{ asset('flags/en.jpeg') }}" alt="English flag">
        </a>
        <a href="{{ route('setLocale', ['lang' => 'el']) }}" class="lang-option" title="Ελληνικά">
            <img src="{{ asset('flags/el.jpeg') }}" alt="Ελληνική σημαία">
        </a>
        <a href="{{ route('setLocale', ['lang' => 'de']) }}" class="lang-option" title="Deutsch">
            <img src="{{ asset('flags/de.jpeg') }}" alt="Deutsche Flagge">
        </a>
    </div>
</div>