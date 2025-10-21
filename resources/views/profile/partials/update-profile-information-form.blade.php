<section>
    <p class="text-muted mb-4">
        Update your account's profile information and email address.
    </p>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <div class="mb-4">
            <label for="name" class="form-label">Name</label>
            <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                value="{{ old('email', $user->email) }}" required autocomplete="username">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="alert alert-warning mt-3">
                    <p class="mb-2">
                        Your email address is unverified.
                    </p>
                    <button form="send-verification" class="btn btn-link p-0 text-warning">
                        Click here to re-send the verification email.
                    </button>
                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 mb-0 text-success">
                            A new verification link has been sent to your email address.
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <button type="submit" class="btn btn-profile">
                <i class="fas fa-save"></i> Save Changes
            </button>

            @if (session('status') === 'profile-updated')
                <div class="alert alert-success mt-3">
                    Profile information updated successfully.
                </div>
            @endif
        </div>
    </form>
</section>
