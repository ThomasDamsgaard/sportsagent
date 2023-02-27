<x-app-layout>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <x-jet-action-section>
                    <x-slot name="title">
                        {{ __('Recruit Talent') }}
                    </x-slot>

                    <x-slot name="description">
                        {{ __('Post a open player position.') }}
                    </x-slot>

                    <!-- Team Member List -->
                    <x-slot name="content">
                        <div class="space-y-6">
                        </div>
                    </x-slot>
                </x-jet-action-section>
            </div>


            @livewire('teams.team-member-manager', ['team' => $team])

            @livewire('teams.update-team-name-form', ['team' => $team])

            @if (Gate::check('delete', $team) && !$team->personal_team)
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('teams.delete-team-form', ['team' => $team])
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
