<section>
    <p class="text-muted mb-4">
        Ensure your account is using a long, random password to stay secure.
    </p>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="mb-4">
            <label for="current_password" class="form-label">Current Password</label>
            <input id="current_password" name="current_password" type="password" 
                class="form-control @error('current_password', 'updatePassword') is-invalid @enderror" 
                autocomplete="current-password">
            @error('current_password', 'updatePassword')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="form-label">New Password</label>
            <input id="password" name="password" type="password" 
                class="form-control @error('password', 'updatePassword') is-invalid @enderror" 
                autocomplete="new-password">
            @error('password', 'updatePassword')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" 
                class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror" 
                autocomplete="new-password">
            @error('password_confirmation', 'updatePassword')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit" class="btn btn-profile">
                <i class="fas fa-key"></i> Update Password
            </button>

            @if (session('status') === 'password-updated')
                <div class="alert alert-success mt-3">
                    Password updated successfully.
                </div>
            @endif
        </div>
    </form>
</section>
