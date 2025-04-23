<x-layout.app>
    <x-container>
        <x-card title="Login">
            <x-form action="{{ route('login') }}" method="POST">
                <x-input type="email" name="email" placeholder="Email" value="{{ old('email') }}"/>
                <x-input type="password" name="password" placeholder="Senha" value="{{ old('password') }}"/>
                <div class="flex justify-between">
                    <x-button type="submit" class="btn btn-primary">Logar</x-button>
                    <a href="{{ route('register') }}" class="btn btn-link">Do not have an account?</a>
                </div>
            </x-form>
        </x-card>
    </x-container>
</x-layout.app>
