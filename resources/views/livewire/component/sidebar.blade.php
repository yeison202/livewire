<div class="h-full flex-[0.2] ">
    <!-- Barra lateral izquierda -->
    <div class=" grid h-full place-content-center bg-white shadow ">


        <div class="grid grid-rows-8 gap-8 pt-40">
            <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Home') }}
            </x-nav-link>

            <x-nav-link href="{{ route('control-registro') }}" :active="request()->routeIs('control-registro')">
                {{ __('Control Registro') }}
            </x-nav-link>

            <x-nav-link href="{{ route('crear-usuario') }}" :active="request()->routeIs('crear-usuario')">
                {{ __('Crear Usuario') }}
            </x-nav-link>

            <x-nav-link href="{{ route('eventos') }}" :active="request()->routeIs('eventos')">
                {{ __('Eventos') }}
            </x-nav-link>

            <x-nav-link href="{{ route('fondos') }}" :active="request()->routeIs('fondos')">
                {{ __('Fondos') }}
            </x-nav-link>

            <x-nav-link href="{{ route('franelas') }}" :active="request()->routeIs('franelas')">
                {{ __('Franelas') }}
            </x-nav-link>

            <x-nav-link href="{{ route('registrar') }}" :active="request()->routeIs('registrar')">
                {{ __('Registrar') }}
            </x-nav-link>

            <x-nav-link href="{{ route('tasa-dolar') }}" :active="request()->routeIs('tasa-dolar')">
                {{ __('Tasa Dolar') }}
            </x-nav-link>
        </div>
    </div>
</div>
