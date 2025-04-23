<x-layout.app>
    <x-container>
        <x-card title="Profile">
            <x-form action="{{ route('profile.update') }}" method="POST" put enctype="multipart/form-data">
                <div class="avatar">
                    <div class="mb-4 w-32 rounded-full">
                        <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar">
                    </div>
                </div>
                <div class="mb-4"><x-input type="file" value="" name="avatar" placeholder="Avatar" class="file-input"/>
                <x-input type="text" name="name" placeholder="Name" value="{{ $user->name }}" />
                <x-input type="email" name="email" placeholder="Email" value="{{ $user->email }}" />
                <x-textarea name="description" placeholder="Description" value="{{ $user->description }}" />
                <x-input type="text" name="handler" placeholder="@seunick" value="{{ $user->handler }}" />
                <div class="flex justify-between">
                    <x-button type="submit" class="btn-primary">Update</x-button>
                    <a href="{{ route('home') }}" class="btn btn-link">Cancel</a>
                </div>
            </x-form>
        </x-card>
    </x-container>
</x-layout.app>
