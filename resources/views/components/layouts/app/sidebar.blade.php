<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
    <flux:sidebar sticky stashable class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

    
        <figure
            class="w-full md:w-auto flex items-center mb-6 md:mb-0">
            <img src="{{asset('imgs/icon/logo2.png')}}" alt="logo-jumb" class="w-[50px] h-[50px] rounded-full bg-white border" /> 
                   <span class="text-xl font-medium ms-3">Administration</span> 
        </figure>

        <flux:navlist variant="outline">
            <flux:navlist.group :heading="__('Platform')" class="grid">
                <flux:navlist.item icon="home" :href="route('dashboard.index-dashboard')"
                    :current="request()->routeIs('dashboard.index-dashboard')" wire:navigate>Dashboard 
                </flux:navlist.item>
                <flux:navlist.item icon="chat-bubble-bottom-center-text" :href="route('dashboard.biographies')"
                    :current="request()->routeIs('dashboard.biographies')" wire:navigate>Biographies 
                </flux:navlist.item>
                <flux:navlist.item icon="code-bracket-square" :href="route('dashboard.projects')"
                    :current="request()->routeIs('dashboard.projects')" wire:navigate>Projects 
                </flux:navlist.item>
                <flux:navlist.item icon="academic-cap" :href="route('dashboard.trainings')"
                    :current="request()->routeIs('dashboard.trainings')" wire:navigate> Trainings 
                </flux:navlist.item>
                <flux:navlist.item icon="briefcase" :href="route('dashboard.experiences')"
                    :current="request()->routeIs('dashboard.experiences')" wire:navigate>Experiences 
                </flux:navlist.item>
                <flux:navlist.item icon="pencil" :href="route('dashboard.drawings')"
                    :current="request()->routeIs('dashboard.drawings')" wire:navigate>Drawings 
                </flux:navlist.item>
                <flux:navlist.item icon="document-duplicate" :href="route('dashboard.documents')"
                    :current="request()->routeIs('dashboard.documents')" wire:navigate>Documents 
                </flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>

        <flux:spacer />



        <!-- Desktop User Menu -->
        <flux:dropdown position="bottom" align="start">
            <flux:profile :name="auth()->user()->name" :initials="auth()->user()->initials()"
                icon-trailing="chevrons-up-down" />

            <flux:menu class="w-[220px]">
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                            <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>

                            <div class="grid flex-1 text-start text-sm leading-tight">
                                <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.radio.group>
                    <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}
                    </flux:menu.item>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                        {{ __('Log Out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:sidebar>

    <!-- Mobile User Menu -->
    <flux:header class="lg:hidden">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <flux:spacer />

        <flux:dropdown position="top" align="end">
            <flux:profile :initials="auth()->user()->initials()" icon-trailing="chevron-down" />

            <flux:menu>
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                            <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>

                            <div class="grid flex-1 text-start text-sm leading-tight">
                                <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.radio.group>
                    <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}
                    </flux:menu.item>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                        {{ __('Log Out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:header>

    {{ $slot }}
    @fluxScripts
</body>

</html>