<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create a note') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-2xl mx-auto space-y-4 sm:px-6 lg:px-8">
            <x-button icon='arrow-left' class="mb-12" href="{{route('notes.index')}}">All Notes</x-button>
            {{-- <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg"> --}}
                {{-- <div class="p-6 text-gray-900"> --}}
                    {{-- <x-button primary>Hi there notes</x-button> --}}
                    {{-- Create note --}}
                    <livewire:notes.create-note></livewire:notes.create-note>
                    {{-- <livewire:notes.show-notes></livewire:notes.show-notes> --}}
                {{-- </div> --}}
            {{-- </div> --}}
        </div>
    </div>
</x-app-layout>
