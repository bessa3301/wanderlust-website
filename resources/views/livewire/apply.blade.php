<div>
    <div class="mx-4 my-3 bg-wsblue-100 border-2 border-wsblue-100 text-white p-2 rounded-lg">
        <div>
            <label for="mail"> Please inform your email: </label>
            <input class="border-2 text-wsblue-100 focus:border-wsblue-100 outline-none rounded-lg w-full p-2"
                wire:model.debounce="email" id="mail" type="email">
            @error('email')
                <span class="text-yellow-200 indent-5"> <i> {{ $message }} </i> </span>
            @enderror
        </div>
        <div class="flex justify-center">
            <button wire:click="submitEmail" class="p-2 bg-wsorange-100 hover:bg-blue-400 text-white rounded-md my-3">
                Continue to Application
            </button>
        </div>
        <small><i>
                *By submitting this form you agree to our <a href="/terms-and-conditions"> terms and conditions </a>
        </small> </i>
    </div>
</div>
