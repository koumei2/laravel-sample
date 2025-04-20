<x-adminlte-card title="{{ __('Update Password') }}">
    <form method="post" action="{{ route('admin.password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <x-adminlte-input name="current_password" label="{{ __('Current Password') }}" fgroup-class="row col-4" label-class="col-3 col-form-label" igroup-class="col-8" type="password" />
        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />

        <x-adminlte-input name="password" label="{{ __('New Password') }}" fgroup-class="row col-4" label-class="col-3 col-form-label" igroup-class="col-8" type="password"/>
        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />

        <x-adminlte-input name="password_confirmation" label="{{ __('Confirm Password') }}" fgroup-class="row col-4" label-class="col-3 col-form-label" igroup-class="col-8" type="password"/>
        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />

        <x-adminlte-button label="{{ __('Save') }}" type="submit" />

        @if (session('status') === 'password-updated')
            <div class="text-sm"><x-adminlte-alert theme="success" title="{{ __('Saved.') }}"  dismissable/></div>
        @endif
    </form>
</x-adminlte-card>
