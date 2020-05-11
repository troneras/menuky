<!-- today menu table -->
<div class="">
    @include('_section-header', ['title' => 'Órdenes pendientes'])

    <div class="rounded rounded-lg bg-gray-100 border border-gray-400 my-4">
        @foreach($orders as $order)
            @include('_order')
        @endforeach
    </div>

</div>
