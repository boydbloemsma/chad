<form wire:submit="send">
    @csrf

    <fieldset role="group">
        <input
            wire:model="message"
            name="message"
            placeholder="Message"
            value="{{ old('message') }}"
            @error('message')
                aria-invalid="true"
                aria-describedby="invalid-message-helper"
            @enderror
        />
        <input type="submit" value="Send" />
        @error('message')
            <small id="invalid-message-helper">
                {{ $message }}
            </small>
        @enderror
    </fieldset>
</form>
