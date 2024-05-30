<x-app-layout>
    <x-slot:header>
        Add room
    </x-slot:header>

    <x-return-arrow href="{{ route('dashboard') }}" />

    <article>
        <form method="POST" action="/rooms">
            @csrf
            <fieldset>
                <label>
                    Name
                    <input
                        name="name"
                        placeholder="Name"
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

                <input
                    type="submit"
                    value="Add"
                />
            </fieldset>
        </form>
    </article>
</x-app-layout>
