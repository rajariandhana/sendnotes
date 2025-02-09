<?php

use Livewire\Volt\Component;

new class extends Component {
    public $noteTitle;
    public $noteBody;
    public $noteRecipient;
    public $noteSendDate;

    public function submit()
    {
        // dd($this->noteTitle, $this->noteBody, $this->noteRecipient, $this->noteSendDate);
        $validate = $this->validate([
            'noteTitle'=>['required','string','min:1'],
            'noteBody'=>['required','string','min:5'],
            'noteRecipient'=>['required','email'],
            'noteSendDate'=>['required','date'],
        ]);
        auth()->user()->notes()->create([
            'title'=>$this->noteTitle,
            'body'=>$this->noteBody,
            'recipient'=>$this->noteRecipient,
            'send_date'=>$this->noteSendDate,
            'is_published'=>true,
        ]);
        redirect(route('notes.index'));
    }
}; ?>

<div>
    {{-- creating a note --}}
    <form wire:submit='submit' class="space-y-4">
        <x-input wire:model='noteTitle' label='Note Title' placeholder='Hello, World!'/>
        <x-textarea wire:model='noteBody' label='Your Note' placeholder='Share your thoughts here'/>
        <x-input icon='user' wire:model='noteRecipient' label='Recipient'
        placeholder='yourfriend@email.com' type='email' />
        <x-input icon='calendar' wire:model='noteSendDate' type='date' label='Send Date' />
        <div class="pt-4">
            <x-button type='submit' primary right-icon="calendar" spinner>Schedule Note</x-button>
        </div>
        <x-errors/>
    </form>
</div>
