<x-adminlte-card title="{{ __('Profile Information') }}">
    <form method="post" action="{{ route('admin.profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <x-adminlte-input name="name" label="{{ __('Name') }}" fgroup-class="row col-4" label-class="col-3 col-form-label" igroup-class="col-8" :value="old('name', $user->name)"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')" />

        <x-adminlte-input name="email" label="{{ __('Email') }}" fgroup-class="row col-4" label-class="col-3 col-form-label" igroup-class="col-8" :value="old('email', $user->email)"/>
        <x-input-error class="mt-2" :messages="$errors->get('email')" />

        <x-adminlte-button label="{{ __('Save') }}" type="submit" />

        @if (session('status') === 'profile-updated')
            <div class="text-sm"><x-adminlte-alert theme="success" title="{{ __('Saved.') }}"  dismissable/></div>
        @endif
    </form>
</x-adminlte-card>
