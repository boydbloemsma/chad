<x-guest-layout>
    <x-slot:header>
        Register
    </x-slot:header>

    <x-return-arrow href="{{ route('welcome') }}" />

    <article>
        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <fieldset>
                <label>
                    Username
                    <input
                        name="name"
                        placeholder="Username"
                        value="{{ old('name') }}"
                        @error('name')
                            aria-invalid="true"
                            aria-describedby="invalid-name-helper"
                        @enderror
                    />
                    @error('name')
                        <small id="invalid-name-helper">
                            {{ $message }}
                        </small>
                    @enderror
                </label>

                <label>
                    Email
                    <input
                        type="email"
                        name="email"
                        placeholder="Email"
                        autocomplete="email"
                        value="{{ old('email') }}"
                        @error('email')
                            aria-invalid="true"
                            aria-describedby="invalid-email-helper"
                        @enderror
                    />
                    @error('email')
                        <small id="invalid-email-helper">
                            {{ $message }}
                        </small>
                    @enderror
                </label>

                <label>
                    Password
                    <input
                        type="password"
                        name="password"
                        placeholder="Password"
                        autocomplete="current-password"
                        @error('password')
                            aria-invalid="true"
                            aria-describedby="invalid-password-helper"
                        @enderror
                    />
                    @error('password')
                        <small id="invalid-password-helper">
                            {{ $message }}
                        </small>
                    @enderror
                </label>

                <label>
                    Password confirmation
                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="Password"
                        autocomplete="current-password"
                        @error('password_confirmation')
                            aria-invalid="true"
                            aria-describedby="invalid-password-confirmation-helper"
                        @enderror
                    />
                    @error('password_confirmation')
                        <small id="invalid-password-confirmation-helper">
                            {{ $message }}
                        </small>
                    @enderror
                </label>

                <input
                    type="submit"
                    value="Register"
                />
            </fieldset>
        </form>
    </article>
</x-guest-layout>
