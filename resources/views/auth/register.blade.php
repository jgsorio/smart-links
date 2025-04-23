<x-layout.app>
    <x-container>
        <x-card title="Register">
            <x-form action="{{ route('register.store') }}" method="POST">
                <x-input type="text" name="name" placeholder="Name" />
                <x-input type="email" name="email" placeholder="Email" />
                <x-input type="password" name="password" placeholder="Password" />
                <x-input type="password" name="password_confirmation" placeholder="Confirm Password" />
                <div class="flex justify-between">
                    <x-button type="submit" class="btn btn-primary">Register</x-button>
                    <a href="{{ route('login') }}" class="btn btn-link">Already have an account?</a>
                </div>
            </x-form>
        </x-card>
    </x-container>
</x-layout.app>
