<x-guest-layout>
    <x-slot:header>
        Login
    </x-slot:header>

    <x-return-arrow href="{{ route('welcome') }}" />

    <article>
        <form method="POST" action="{{ route('login.store') }}">
            @csrf
            <fieldset>
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
                    <input type="checkbox" name="remember" />
                    Remember me
                </label>

                <input
                    type="submit"
                    value="Login"
                />
            </fieldset>
        </form>
    </article>
</x-guest-layout>
