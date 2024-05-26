<x-app-layout>
    <article>
        <form method="POST" action="/login">
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

                <input
                    type="submit"
                    value="Log in"
                />
            </fieldset>
        </form>
    </article>
</x-app-layout>
