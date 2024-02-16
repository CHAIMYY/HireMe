
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('section') }}">
        @csrf

  <!-- Titre -->
  <div class="mt-4">
    <x-input-label for="titre" :value="__('Titre')" />
    <x-text-input id="titre" class="block mt-1 w-full" type="text" name="titre" :value="old('titre')" required />
    <x-input-error :messages="$errors->get('titre')" class="mt-2" />
</div>

<!-- Poste Actuel -->
<div class="mt-4">
    <x-input-label for="post_actuel" :value="__('Poste Actuel')" />
    <x-text-input id="post_actuel" class="block mt-1 w-full" type="text" name="post_actuel" :value="old('post_actuel')" required />
    <x-input-error :messages="$errors->get('post_actuel')" class="mt-2" />
</div>

<!-- Industrie -->
<div class="mt-4">
    <x-input-label for="industrie" :value="__('Industrie')" />
    <x-text-input id="industrie" class="block mt-1 w-full" type="text" name="industrie" :value="old('industrie')" required />
    <x-input-error :messages="$errors->get('industrie')" class="mt-2" />
</div>

<!-- Adresse -->
<div class="mt-4">
    <x-input-label for="adresse" :value="__('Adresse')" />
    <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required />
    <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
</div>

<!-- Telephone -->
<div class="mt-4">
    <x-input-label for="telephone" :value="__('Telephone')" />
    <x-text-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required />
    <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
</div>

<!-- Autre Contact -->
<div class="mt-4">
    <x-input-label for="autre_contact" :value="__('Autre Contact')" />
    <x-text-input id="autre_contact" class="block mt-1 w-full" type="text" name="autre_contact" :value="old('autre_contact')" required />
    <x-input-error :messages="$errors->get('autre_contact')" class="mt-2" />
</div>

<!-- A Propos -->
<div class="mt-4">
    <x-input-label for="a_propos" :value="__('A Propos')" />
    <x-text-input id="a_propos" class="block mt-1 w-full" type="text" name="a_propos" :value="old('a_propos')" required />
    <x-input-error :messages="$errors->get('a_propos')" class="mt-2" />
</div>

<!-- CV -->
<div class="mt-4">
    <x-input-label for="cv" :value="__('CV')" />
    <x-text-input id="cv" class="block mt-1 w-full" type="text" name="cv" :value="old('cv')" required />
    <x-input-error :messages="$errors->get('cv')" class="mt-2" />
</div>

<div class="flex items-center justify-end mt-4">
  

    <x-primary-button class="ms-4">
        {{ __('Save') }}
    </x-primary-button>
</div>
</form>
</x-app-layout>



{{-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa --}}




<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <form method="POST" action="{{ route('section') }}">
        @csrf

        <div>
            <x-input-label for="titre" :value="__('Titre')" />
            <x-text-input id="titre"  type="text" class="mt-1 block w-full" name="titre" :value="old('titre')" required  />
            <x-input-error class="mt-2" :messages="$errors->get('titre')" />
        </div>

        <div>
            <x-input-label for="poste actuel" :value="__('Poste Actuel')" />
            <x-text-input id="poste actuel"  type="text" class="mt-1 block w-full" name="post_actuel" :value="old('post_actuel')" required  />
            <x-input-error class="mt-2" :messages="$errors->get('post_actuel')" />
        </div>

        <div>
            <x-input-label for="industrie" :value="__('Industrie')" />
            <x-text-input id="industrie" type="text" class="mt-1 block w-full" name="industrie" :value="old('industrie')" required />
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>
        <div>
            <x-input-label for="adresse" :value="__('Adresse')" />
            <x-text-input id="adresse"  type="text" class="mt-1 block w-full" name="adresse" :value="old('adresse')" required  />
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>
        <div>
            <x-input-label for="poste" :value="__('Adresse')" />
            <x-text-input id="poste" name="poste" type="text" class="mt-1 block w-full" :value="old('poste', $user->poste)" required />
            <x-input-error class="mt-2" :messages="$errors->get('poste')" />
        </div>
        <div>
            <x-input-label for="telephone" :value="__('Telephone')"  />
            <x-text-input id="telephone"  type="text" class="mt-1 block w-full" name="telephone" :value="old('telephone')" required />
            <x-input-error class="mt-2" :messages="$errors->get('adresse')" />
        </div>
        <div>
            <x-input-label for="contact" :value="__('Contact')" />
            <x-text-input id="contact" name="contact" type="text" class="mt-1 block w-full" :value="old('contact', $user->contact)" required autofocus autocomplete="contact" />
            <x-input-error class="mt-2" :messages="$errors->get('contact')" />
        </div>
        <div>
            <x-input-label for="desc" :value="__('Description')" />
            <x-text-input id="desc" name="desc" type="text" class="mt-1 block w-full" :value="old('desc', $user->desc)" required autofocus autocomplete="desc" />
            <x-input-error class="mt-2" :messages="$errors->get('desc')" />
        </div>

        {{-- <div>
            <x-input-label for="desc" :value="__('Photo')" />
            <x-text-input id="desc" name="photos" type="text" class="mt-1 block w-full" :value="old('desc', $user->photos)" required autofocus autocomplete="photos" />
            <x-input-error class="mt-2" :messages="$errors->get('desc')" />
        </div> --}}
        <div>
            <x-input-label for="photos" :value="__('Profile Picture')" />
            <input id="picture" name="photos" type="file" class="mt-1 block w-full" accept="image/*" />
            <x-input-error class="mt-2" :messages="$errors->get('photos')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
