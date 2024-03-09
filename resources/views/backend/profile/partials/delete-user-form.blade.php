<section class="space-y-6">
    <!-- Section Header -->
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <!-- Delete Account Button -->
    <x-danger-button
        id="confirmDeleteBtn"
        class="bg-red-500 text-white hover:bg-red-600 px-4 py-2 rounded focus:outline-none focus:shadow-outline-red active:bg-red-800"
    >{{ __('Delete Account') }}</x-danger-button>

    <!-- Delete Account Modal -->
    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form id="delete-form" method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <!-- Modal Title -->
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <!-- Modal Description -->
            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <!-- Password Input -->
            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4 border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300 sm:text-sm"
                    placeholder="{{ __('Password') }}"
                />

                <!-- Display validation errors, if any -->
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2 text-red-600" />
            </div>

            <!-- Modal Actions -->
            <div class="mt-6 flex justify-end">
                <!-- Cancel Button -->
                <x-secondary-button x-on:click="$dispatch('close')" class="bg-gray-300 text-gray-700 hover:bg-gray-400 px-4 py-2 rounded focus:outline-none focus:shadow-outline-gray active:bg-gray-600">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <!-- Delete Account Button -->
                <x-danger-button class="ms-3 bg-red-500 text-white hover:bg-red-600 px-4 py-2 rounded focus:outline-none focus:shadow-outline-red active:bg-red-800">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>

    <!-- Confirm Delete Script -->
    <script>
        document.getElementById('confirmDeleteBtn').addEventListener('click', function () {
            // Perform the actual delete action here, for example, submit the form
            document.getElementById('delete-form').submit();
        });
    </script>
</section>
