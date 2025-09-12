<x-layouts.layout>
    <x-slot:title>{{__('ui.create_article')}}</x-slot:title>
    
    <header class="text-center mb-5 header-section my-5 rounded-5 w-75 mx-auto shadow">
        <h1 class="h3 fw-bold mb-0 mt-1">{{__('ui.create_an_article')}}</h1>
        <p class="text-black mb-1">{{__('ui.create_sub_title')}}</p>
    </header>
    
    <section>  
        <livewire:create-article-form />
    </section>
</x-layouts.layout>